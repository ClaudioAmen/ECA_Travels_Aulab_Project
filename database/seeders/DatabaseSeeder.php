<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Region;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public $categories = [
        'Storico', 'Enogastronomico', 'Musicale', 'Artistico', 'Escape', 'Natura', 'Letterario', 'Sport', 'Cinema', 'Moda'
    ];


    public $regions = [
        'Abruzzo', 'Basilicata', 'Calabria', 'Campania', 'Emilia-Romagna', 'Friuli-Venezia-Giulia', 'Lazio', 'Liguria', 'Lombardia', 'Marche', 'Molise', 'Piemonte', 'Puglia', 'Sardegna', 'Sicilia', 'Toscana', 'Trentino-Alto-Adige', 'Umbria', 'Valle d`Aosta', 'Veneto'];

    public function run(): void
    {
    foreach($this->categories as $category){
        Category::create([
            'name' => $category
        ]);}


        foreach($this->regions as $region){
            Region::create([
                'name' => $region
            ]);
    }


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }

    }

