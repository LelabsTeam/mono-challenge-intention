<?php

namespace App\Services\Api\V1\Site;

use App\Http\Resources\IntentionCollection;
use App\Http\Resources\IntentionResource;
use App\Repository\Api\V1\Site\IntentionRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class IntentionService
{
    private $repository;

    public function __construct(IntentionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Lista as intenções, permite o filtro por userId
     */
    public function getAll(Request $request)
    {
        if ($request->has('userId')) {
            $intentions = $this->filterIntentionsByUser($request);

            return new IntentionCollection($intentions);
        } else {
            $intentions = $this->repository->getAll();
        }

        return IntentionResource::collection($intentions);
    }

    /**
     * Busca as intenções de um usuário e retorna os dados com paginação
     */
    public function filterIntentionsByUser($request): LengthAwarePaginator
    {
        return $this->repository->getById($request->userId);
    }

    /**
     * Cria uma nova Intenção
     */
    public function store(Request $request)
    {
        $intentionData = $this->prepareIntentionDataToSave($request);
        $intention = $this->repository->new($intentionData);

        return new IntentionResource($intention);
    }

    /**
     * gera a estrutura necessária para criar a intenção
     */
    public function prepareIntentionDataToSave($request): array
    {
        $request['products'] = collect($request->products)->map(fn ($product) => [
            'external_id' => $product['id'],
            'price' => $product['price'],
            'title' => $product['title'],
            'description' => $product['description'],
            'category' => $product['category'],
            'image' => $product['image'],
        ])->toArray();

        return $request->all();
    }
}
