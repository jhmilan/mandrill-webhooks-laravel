<?php

namespace Jhmilan\MandrillWebhooksLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jhmilan\MandrillWebhooksLaravel\Contracts\MandrillWebhook;

class WebhooksController extends Controller
{
    public function __construct(MandrillWebhook $mandrill)
    {
        $this->mandrill = $mandrill;
    }

    /**
     * Handels a mandrill webhook
     *
     * @param string $webhook
     */
    public function mandrill(Request $request, $webhook)
    {
        $url = $request->fullUrl();
        $signature = $request->header('X-Mandrill-Signature');
        $body = $request->all();

        $webhook = $this->mandrill->accept($webhook, $url, $signature, $body);

        $this->mandrill->handle();
        return response()->json([]);
    }
}
