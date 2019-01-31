<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Models\User::class)->times(5)->make();
        \App\Models\User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = \App\Models\User::find(1);
        $user->update([
            'name' => 'bestjiansong',
            'email' => 'ok520koa@163.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);
    }
}