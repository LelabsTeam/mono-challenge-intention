<?php

namespace App\Services\Api\V1;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    /**
     * Criar Usuário
     *
     * @return array
     */
    public function createUser(array $requestData)
    {
        try {
            $user = User::create([
                'name' => $requestData['name'],
                'email' => $requestData['email'],
                'password' => bcrypt($requestData['password']),
            ]);

            return [
                'code' => 201,
                'content' => [
                    'message' => 'User Created Successfully',
                    'token' => $user->createToken('API TOKEN')->plainTextToken,
                ],
            ];
        } catch (\Throwable $th) {
            return [
                'code' => 500,
                'content' => [
                    'message' => $th->getMessage(),
                ],
            ];
        }
    }

    /**
     * Logar o Usuário
     *
     * @param  Request  $request
     * @return array
     */
    public function loginUser(array $requestData)
    {
        try {
            if (! Auth::attempt($requestData)) {
                return [
                    'code' => 401,
                    'content' => [
                        'message' => 'Email & Password does not match with our record.',
                    ],
                ];
            }

            $user = User::where('email', $requestData['email'])->first();

            return [
                'code' => 201,
                'content' => [
                    'message' => 'User Logged In Successfully',
                    'token' => $user->createToken('API TOKEN')->plainTextToken,
                ],
            ];
        } catch (\Throwable $th) {
            return [
                'code' => 500,
                'content' => [
                    'message' => $th->getMessage(),
                ],
            ];
        }
    }

    /**
     * Deslogar o Usuário
     *
     * @return array
     */
    public function logout()
    {
        $user = auth()->user();
        $user->currentAccessToken()->delete();

        return [
            'code' => 200,
            'content' => [
                'message' => 'Usuário deslogado com sucesso',
            ],
        ];
    }
}
