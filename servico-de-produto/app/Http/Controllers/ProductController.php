<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class ProductController extends Controller
{
    public function index($id)
    {
        /* Listando produto por ID */
        $response = Http::get('https://fakestoreapi.com/products' . $id);

        if ($response->ok()) {
            $product = $response->json();

            return response()->json($product);
        }

        return response()->json(['error' => 'Produto não encontrado.'], 404);
    }
}
