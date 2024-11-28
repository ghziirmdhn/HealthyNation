<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
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
        try {
            $plan = $request->query('plan', 'monthly');
            
            if (!array_key_exists($plan, $this->pricing)) {
                return redirect()->route('membership')->with('error', 'Invalid plan selected');
            }
            
            $amount = $this->pricing[$plan];
            return view('payment.form', compact('plan', 'amount'));
        } catch (Exception $e) {
            return redirect()->route('membership')
                           ->with('error', 'Error loading payment form');
        }
    }

    public function processPayment(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email',
                'location' => 'required|string|max:255',
                'method' => 'required|in:visa,mastercard,apple_pay',
                'plan' => 'required|in:monthly,middle_class,annual',
                'amount' => 'required|numeric'
            ]);

            // Create payment record
            $payment = Payment::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'location' => $validated['location'],
                'method' => $validated['method'],
                'plan' => $validated['plan'],
                'amount' => $validated['amount'],
                'status' => 'Successful'
            ]);

            return redirect()->route('payment.receipt', ['id' => $payment->id])
                           ->with('success', 'Payment processed successfully');

        } catch (Exception $e) {
            return redirect()->route('payment.result', ['status' => 'Failed'])
                           ->withErrors('Error processing payment');
        }
    }

    public function receipt($id)
    {
        try {
            $payment = Payment::findOrFail($id);
            return view('payment.receipt', compact('payment'));
        } catch (Exception $e) {
            return redirect()->route('membership')
                           ->with('error', 'Error retrieving payment receipt');
        }
    }

    public function paymentResult($status)
    {
        return view('payment.result', ['status' => $status]);
    }
}