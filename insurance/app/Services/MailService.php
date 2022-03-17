<?php

namespace App\Services;

use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Exception;

class MailService
{
    /**
     * Отправка на почту
     *
     * @param Feedback $feedback
     * @return bool
     */
    public function sendFeedback(Feedback $feedback)
    {
        $product = Product::query()->find($feedback->product_id);

        try {
            Mail::send('vendor.email.feedback', ['feedback' => $feedback, 'product' => $product],
                function ($message) use ($feedback, $product) {
                    $message
                        ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                        ->to($product->insuranceCompany->email)
                        ->subject('Отклик с сайта ' . env('APP_NAME'));
                });

            $feedback->is_sent = true;
            $feedback->save();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
