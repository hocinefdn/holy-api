<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('categories')->insert([[
            'name' => 'Mode',
        ], [
            'name' => 'Electroménager,TV & Audio',
        ], [
            'name' => 'Beauté',
        ], [
            'name' => 'Maison & Cuisine',
        ], [
            'name' => 'Téléphonie & Accessoires',
        ], [
            'name' => 'Informatique',
        ], [
            'name' => 'Bébé',
        ],  [
            'name' => 'Santé',
        ], [
            'name' => 'Jeux',
        ], [
            'name' => 'Sport',
        ], [
            'name' => 'Auto & Moto',
        ], [
            'name' => 'Bricolage & Jardinage',
        ], [
            'name' => 'Sport',
        ]]);
    }
}