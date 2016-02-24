<?php

return [
    'services' => [
        'Jhmilan\MandrillWebhooksLaravel\Contracts\MandrillWebhook' => 'App\Services\Jhmilan\MandrillWebhook',
    ],
    'mandrill' => [
        'invitation_was_rejected' => env('MANDRILL_INVITATION_WAS_REJECTED')
    ]
];
