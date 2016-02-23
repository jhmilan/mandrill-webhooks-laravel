<?php

namespace Jhmilan\MandrillWebhooksLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jhmilan\MandrillWebhooksLaravel\Contracts\MandrillWebhook;

class WebhooksController extends Controller
{
    /**
     * Handels a mandrill webhook
     *
     * @param string $webhook
     */
    public function mandrill(MandrillWebhook $mandrill, Request $request, $webhook)
    {
        $url = $request->fullUrl();
        $signature = $request->header('X-Mandrill-Signature');
        $body = $request->all();

        $webhook = $mandrill::accept($webhook, $url, $signature, $body);

        $mandrill->handle();
        return response()->json([]);
    }
}
