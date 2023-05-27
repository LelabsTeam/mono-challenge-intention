<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class IntentionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'data' => $this->collection,
            'links' => [
                'previous' => $this->previousPageUrl(),
                'current' => $this->url($this->currentPage()),
                'next' => $this->nextPageUrl(),
                'last' => $this->url($this->lastPage()),
            ],
        ];
    }
}
