<?php

namespace App\Jobs;

use App\Models\Feedback;
use App\Services\MailService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FeedbackJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Продукт, на который был отклик
     *
     * @var
     */
    private $productId;
    /**
     * Данные с формы
     *
     * @var
     */
    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $productId, array $data)
    {
        $this->productId = $productId;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;
        $productId = $this->productId;

        $prepareData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'comment' => $data['comment'] ?? '',
            'product_id' => $productId,
            'is_sent' => false
        ];

        $feedback = new Feedback();
        $feedback->fill($prepareData);
        $feedback->save();

        MailService::sendFeedback($feedback);
    }
}
