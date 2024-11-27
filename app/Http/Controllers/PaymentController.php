<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Exception;

// Abstract class untuk dasar Controller (Inheritance & Abstract)
abstract class BasePaymentController extends Controller
{
    abstract public function processPayment(Request $request): string; // Abstract method
}

class PaymentController extends BasePaymentController
{
    // Encapsulation: Menggunakan private untuk data yang tidak boleh diakses langsung
    private $pricing = [
        'monthly' => 100000,
        'middle_class' => 550000,
        'annual' => 1000000,
    ];

    // Polymorphism: Mengoverride metode abstrak dari BasePaymentController
    public function processPayment(Request $request): string
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'method' => 'required|in:visa,mastercard,apple_pay',
                'plan' => 'required|in:monthly,middle_class,annual',
            ]);

            // Mendapatkan jumlah berdasarkan plan
            $amount = $this->getAmount($validated['plan']);
            $paymentStatus = $this->simulatePaymentProcess($amount);

            // Membuat objek pembayaran
            $payment = new Payment();
            $payment->first_name = $validated['first_name'];
            $payment->last_name = $validated['last_name'];
            $payment->location = $validated['location'];
            $payment->method = $validated['method'];
            $payment->plan = $validated['plan'];
            $payment->amount = $amount;
            $payment->status = $paymentStatus;
            $payment->save();

            // Mengarahkan ke halaman receipt setelah pembayaran berhasil
            return redirect()->route('payment.receipt', ['id' => $payment->id]);

        } catch (Exception $e) {
            // Exception: Menangani kesalahan yang mungkin terjadi
            return redirect()->route('payment.result', ['status' => 'Failed'])
                ->withErrors('Error processing payment: ' . $e->getMessage());
        }
    }

    // Encapsulation: Menggunakan private method untuk mengelola data internal
    private function getAmount(string $plan): int
    {
        return $this->pricing[$plan] ?? $this->pricing['monthly'];
    }

    public function showPaymentForm(Request $request)
    {
        $plan = $request->query('plan', 'monthly');
        $amount = $this->getAmount($plan);

        return view('payment.form', compact('plan', 'amount'));
    }

    // Menampilkan halaman hasil pembayaran (berhasil atau gagal)
    public function paymentResult($status)
    {
        return view('payment.result', ['status' => $status]);
    }

    // Polymorphism: Simulasi pembayaran dapat diubah di subclass jika diperlukan
    protected function simulatePaymentProcess($amount)
    {
        if ($amount > 0) {
            return 'Successful';
        }
        return 'Failed';
    }

    // Menampilkan halaman receipt setelah pembayaran berhasil
    public function receipt($id)
    {
        $payment = Payment::findOrFail($id);
        return view('payment.receipt', compact('payment'));
    }
}
