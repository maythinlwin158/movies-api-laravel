<?php

namespace App\Http\Repository\Impl;

use App\Http\Repository\UserRepoInterface;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserRepo implements UserRepoInterface
{
    public function saveUser($user) {
        try {
            DB::beginTransaction();
            $user = User::create($user);
            DB::commit();
            return $user;
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Database transaction failed: ' . $e->getMessage());
        }
    }
}
