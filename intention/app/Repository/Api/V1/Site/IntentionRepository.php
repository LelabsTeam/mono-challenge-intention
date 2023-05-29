<?php

namespace App\Repository\Api\V1\Site;

use App\Models\Intention;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class IntentionRepository
{
    private $relations;

    public function __construct()
    {
        $this->relations = ['products', 'user', 'address'];
    }

    /**
     * Busca as intenções
     *
     * @return Paginator - retorna os dados com paginação
     */
    public function getAll(): LengthAwarePaginator
    {
        $intentions = Intention::with($this->relations)->orderByDesc('id');

        return $intentions->paginate(30);
    }

    /**
     * Busca as intenções de um usuário
     *
     * @return LengthAwarePaginator - retorna os dados com paginação
     */
    public function getById(int $userId): LengthAwarePaginator
    {
        $intentions = Intention::with($this->relations)->whereRelation('user', 'id', 'like', $userId)->orderByDesc('id');

        return $intentions->paginate(30);
    }

    /**
     * Salva uma nova Intenção e suas relações
     *
     * @return Intention - instância da model criada
     */
    public function new(array $request)
    {
        $authUser = auth()->user();
        $intention = $authUser
            ->intentions()
            ->create();

        $intention->products()
            ->createMany($request['products']);

        $authUser->addresses()->updateOrCreate(
            ['postcode' => $request['address']['postcode'], 'user_id' => $authUser->id],
            [...$request['address'], ...['intention_id' => $intention->id]]
        );

        return Intention::with($this->relations)->where('id', $intention->id)->first();
    }
}
