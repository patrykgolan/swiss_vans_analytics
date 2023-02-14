<?php

namespace App\Jobs;

use App\Models\PhoneCall;
use Illuminate\Http\Request;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class ClickProcessWebhookJob extends SpatieProcessWebhookJob
{
    public function  handle(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        PhoneCall::firstOrCreate(
            [
                'from' => $data['from'],
                'date' => $data['date'],
            ],
            [
                'to' => $data['to'],
            ]
        );
    }
}
