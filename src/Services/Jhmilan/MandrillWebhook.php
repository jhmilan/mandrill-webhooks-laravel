<?php
/**
 * Tweak the namespace to match your filesystem if necessary
 */
namespace App\Services\Jhmilan;

use Jhmilan\MandrillWebhooksLaravel\Services\Webhook as WebhookService;
use Jhmilan\MandrillWebhooksLaravel\Contracts\MandrillWebhook as WebhookContract;

class MandrillWebhook extends WebhookService implements WebhookContract
{
    /**
     * override handle to do whatever you need to do
     */
}