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
            'description' => 'Все для вашего сада и огорода',
            'image' => 'test-'.random_int(1, 5),
            'counter_id' => 90914006,
            'direct_key' => 'YD_DIRIZHER_SADA_KEY'
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'oazis-roz.ru',
            'slug' => 'oazis-roz',
            'description' => 'Питомник - интернет магазин Цветов',
            'image' => 'test-'.random_int(1, 5),
            'direct_key' => 'YD_OAZIS_ROZ_KEY'
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'garden-class.ru',
            'slug' => 'garden-class',
            'description' => 'Самое лучшее для вас',
            'image' => 'test-'.random_int(1, 5),
            'counter_id' => 91695832,
            'direct_key' => 'YD_GARDEN_KEY'
        ]);

        \App\Models\Project::factory()->create([
            'name' => 'klubsadprof.ru',
            'slug' => 'klubsadprof',
            'description' => 'Клуб садоводов-профессионалов',
            'image' => 'test-'.random_int(1, 5),
            'counter_id' => 83420104,
            'direct_key' => 'YD_KSP_KEY'
        ]);
        
        \App\Models\Project::factory()->create([
            'name' => 'cvetoriya.ru',
            'slug' => 'сvetoriya',
            'description' => 'С любовью к красоте',
            'image' => 'test-'.random_int(1, 5),
            'counter_id' => 91434956,
            'direct_key' => 'YD_CVETORIA_KEY'
        ]);
    }
}
