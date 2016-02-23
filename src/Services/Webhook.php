<?php

namespace Jhmilan\MandrillWebhooksLaravel\Services\Webhook;

abstract class Webhook
{
    /**
     * Accept a Webhook request
     *
     * @param string $webhook
     * @param string $url
     * @param string $signature
     * @param array $body
     * @return Webhook
     */
    public static function accept($webhook, $url, $signature, array $body)
    {

    }

    /**
     * Handle a webhook
     */
    public function handle()
    {
        \Log::debug('handling');
    }
}