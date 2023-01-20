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
            'status' => 1,
        ]);
        
        \App\Models\User::factory()->create([
            'first_name' => 'Руководитель',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'phone' => '72233445566',
            'role' => 'supervisor',
            'status' => 1,
        ]);
        
        \App\Models\User::factory()->create([
            'first_name' => 'Менеджер',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'phone' => '73344556677',
            'role' => 'manager',
            'status' => 1,
        ]);

        \App\Models\Project::factory()->create([
            'name' => 'dirijer-sada.ru',
            'slug' => 'dirijer-sada',
            'image' => 'test-'.random_int(1, 5),
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'oazis-roz.ru',
            'slug' => 'oazis-roz',
            'image' => 'test-'.random_int(1, 5),
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'semensajen.ru',
            'slug' => 'semensajen',
            'image' => 'test-'.random_int(1, 5),
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'garden-class.ru',
            'slug' => 'garden-class',
            'image' => 'test-'.random_int(1, 5),
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'gipersad.ru',
            'slug' => 'gipersad',
            'image' => 'test-'.random_int(1, 5),
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'rasti-dacha.ru',
            'slug' => 'rasti-dacha',
            'image' => 'test-'.random_int(1, 5),
        ]);
    }
}
