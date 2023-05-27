<?php

namespace App\Repository\Api\V1\Site;

use App\Models\Intention;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class IntentionRepository
{
    /**
     * Busca as intenções
     *
     * @return Paginator - retorna os dados com paginação
     */
    public function getAll(): LengthAwarePaginator
    {
        $intentions = Intention::with(['products', 'user.address'])->orderByDesc('id');

        return $intentions->paginate(30);
    }

    /**
     * Busca as intenções de um usuário
     *
     * @return LengthAwarePaginator - retorna os dados com paginação
     */
    public function getById(int $userId): LengthAwarePaginator
    {
        $intentions = Intention::with(['products', 'user.address'])->whereRelation('user', 'id', 'like', $userId)->orderByDesc('id');

        return $intentions->paginate(30);
    }

    /**
     * Salva uma nova Intenção e suas relações
     *
     * @return Intention - instância da model criada
     */
    public function new(array $request)
    {
        $intention = auth()->user()
            ->intentions()
            ->create();

        $intention->products()
            ->createMany($request['products']);

        auth()->user()->address()->updateOrCreate(
            ['postcode' => $request['address']['postcode']],
            $request['address']
        );

        return Intention::with(['products', 'user.address'])->where('id', $intention->id)->first();

    }
}
