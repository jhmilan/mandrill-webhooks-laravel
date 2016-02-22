<?php

Route::post('webhooks/mandrill/{webhook}', [
    'as'   => 'webhooks.mandrill',
    'uses' => '\Jhmilan\MandrillWebhooksLaravel\Http\Controllers\WebhooksController@mandrill'
]);
