<?php

namespace App\Repositories\Auth;

use App\Models\User;
use Symfony\Component\HttpFoundation\ParameterBag;

class AuthRepository implements AuthRepositoryInterface
{
    public function __construct(private User $model)
    {
    }

    public function submit(ParameterBag $data): User
    {
        return $this->model->firstOrCreate([
            'phone' => $data->get('phone')
        ]);
    }

    public function verify(ParameterBag $data): User
    {
        $user = $this->model->where('phone', $data->get('phone'))
            ->where('login_code', $data->get('login_code'))
            ->first();

        if ($user) {
            $user->update([
                'login_code' => null
            ]);
        }

        return $user;
    }
}
