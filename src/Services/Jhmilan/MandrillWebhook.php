<?php
/**
 * Tweak the namespace to match your filesystem if necessary
 */
namespace App\MandrillWebhooksLaravel\Services\Jhmilan;

use Jhmilan\MandrillWebhooksLaravel\Services\Webhook as WebhookService;
use Jhmilan\MandrillWebhooksLaravel\Contracts\Webhook as WebhookContract;

class MandrillWebhook extends WebhookService
{
    /**
     * override handle to do whatever you need to do
     */
}