<?php

namespace App\Actions;

use App\Connector\IntentionConnector;

class SendIntentionAction
{
    /**
     * Envia a intenção
     */
    public function run(array $data): mixed
    {
        return (new IntentionConnector())->post(endpoint: '/intentions', data: $data)->json();
    }
}
