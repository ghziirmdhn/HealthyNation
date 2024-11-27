<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Exception;

class PaymentController extends Controller
{
    private $pricing = [
        'monthly' => 100000,
        'middle_class' => 550000,
        'annual' => 1000000,
    ];

    public function showPaymentForm(Request $request)
    {
        $plan = $request->query('plan', 'monthly');
        
        if (!array_key_exists($plan, $this->pricing)) {
            return redirect()->route('membership')->with('error', 'Invalid plan selected');
        }
        
        $amount = $this->pricing[$plan];
        return view('payment.form', compact('plan', 'amount'));
    }

    public function processPayment(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'email' => 'required|email',
                'method' => 'required|in:visa,mastercard,apple_pay',
                'plan' => 'required|in:monthly,middle_class,annual',
            ]);

            $payment = new Payment();
            $payment->first_name = $validated['first_name'];
            $payment->last_name = $validated['last_name'];
            $payment->location = $validated['location'];
            $payment->email = $validated['email'];
            $payment->method = $validated['method'];
            $payment->plan = $validated['plan'];
            $payment->amount = $this->pricing[$validated['plan']];
            $payment->status = 'Successful';
            $payment->save();

            return redirect()->route('payment.receipt', ['id' => $payment->id]);
        } catch (Exception $e) {
            return redirect()->route('payment.result', ['status' => 'Failed'])
                ->withErrors('Error processing payment: ' . $e->getMessage());
        }
    }

    public function receipt($id)
    {
        $payment = Payment::findOrFail($id);
        return view('payment.receipt', compact('payment'));}
}

