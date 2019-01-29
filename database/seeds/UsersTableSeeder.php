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
        //
        factory(App\Role::class)->create([
            'role'        => 'Administrador',
        ]);

        factory(App\Role::class)->create([
            'role'        => 'Aluno',
        ]);

        factory(App\Role::class)->create([
            'role'        => 'Professor',
        ]);

    }
}
