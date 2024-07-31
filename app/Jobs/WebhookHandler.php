<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob;

class WebhookHandler extends ProcessWebhookJob
{
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger()->info($this->webhookCall->payload);
    }
}
