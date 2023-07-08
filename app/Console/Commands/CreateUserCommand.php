<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CreateUserCommand extends Command
{
    protected $signature = 'users:create';

    protected $description = 'Create a new user.';

    public function handle()
    {
        $user['name'] = $this->ask('Name of the new user');
        $user['email'] = $this->ask('Email of the new user');
        $user['password'] = $this->secret('Password of the new user');

        $roleName = $this->choice('Role of the new user', ['admin', 'editor'], 1);
        $role = Role::where('name', $roleName)->first();
        if (!$role) {
            $this->error('Role not found');

            return -1;
        }

        $validator = Validator::make(
            $user,
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6'],
            ]
        );
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return -1;
        }

        DB::transaction(function () use ($user, $role) {
            $newUser = User::create($user);
            $newUser->roles()->attach($role->id);
        });

        $this->info("User '{$user['email']}' created successfully");

        return 0;
    }
}
