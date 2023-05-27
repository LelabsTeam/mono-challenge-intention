<?php

namespace App\Services\Api\V1;

use App\Actions\SendIntentionAction;
use App\Traits\SuportValidationRequest;
use Laravel\Lumen\Routing\ProvidesConvenienceMethods;

class IntentionService
{
    use ProvidesConvenienceMethods, SuportValidationRequest;

    /**
     * Busca a lista de produtos na fakestore
     */
    public function sendIntentionRequest($request): array
    {
        $requestValidated = $this->checkValidationRequest($request);

        return (new SendIntentionAction())->run($requestValidated);
    }
}
