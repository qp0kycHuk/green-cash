<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(7)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Админ',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'phone' => '71122334455',
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'first_name' => 'Руководитель',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'phone' => '72233445566',
            'role' => 'supervisor',
        ]);

        \App\Models\User::factory()->create([
            'first_name' => 'Менеджер',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'phone' => '73344556677',
            'role' => 'manager',
        ]);
    }
}
