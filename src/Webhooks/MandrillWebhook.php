<?php

namespace Jhmilan\MandrillWebhooksLaravel\Webhooks;

class MandrillWebhook
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

    public function handle()
    {
        \Log::debug('handling');
    }
}