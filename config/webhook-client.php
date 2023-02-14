<?php

return [
    'configs' => [
        'name' => 'phoneCall',
        'signing_secret' => 'test',
        'signature_header_name' => 'Validation-Key',
        'signature_validator' => \Spatie\WebhookClient\SignatureValidator\DefaultSignatureValidator::class,
        'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
        'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
        'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
        'process_webhook_job' => \App\Jobs\PhoneCallProcessWebhookJob::class,
    ],
    [
        'name' => 'click',
        'signing_secret' => 'test',
        'signature_header_name' => 'Validation-Key',
        'signature_validator' => \Spatie\WebhookClient\SignatureValidator\DefaultSignatureValidator::class,
        'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
        'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
        'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
        'process_webhook_job' => \App\Jobs\ClickProcessWebhookJob::class,
    ],

    /*
     * The integer amount of days after which models should be deleted.
     *
     * 7 deletes all records after 1 week. Set to null if no models should be deleted.
     */
    'delete_after_days' => 30,
];
