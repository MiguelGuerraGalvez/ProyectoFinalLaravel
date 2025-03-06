<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videojuego;

class VideojuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videojuego = new Videojuego();

        $videojuego->nombre = "Super Smash Bros Ultimate";
        $videojuego->consola = "Nintendo Switch";
        $videojuego->precio = 49.99;

        $videojuego->save();

        $videojuego2 = new Videojuego();

        $videojuego2->nombre = "Super Mario Bros Wonder";
        $videojuego2->consola = "Nintendo Switch";
        $videojuego2->precio = 46.99;

        $videojuego2->save();

        $videojuego3 = new Videojuego();

        $videojuego3->nombre = "Read Dead Redemption II";
        $videojuego3->consola = "Playstation 4";
        $videojuego3->precio = 19.99;

        $videojuego3->save();

        $videojuego4 = new Videojuego();

        $videojuego4->nombre = "Bloodborne";
        $videojuego4->consola = "Playstation 4";
        $videojuego4->precio = 12.99;

        $videojuego4->save();

        $videojuego5 = new Videojuego();

        $videojuego5->nombre = "Halo Infinite";
        $videojuego5->consola = "Xbox Series";
        $videojuego5->precio = 19.99;

        $videojuego5->save();

        $videojuego6 = new Videojuego();

        $videojuego6->nombre = "Metal Gear Solid Delta: Snake Easter";
        $videojuego6->consola = "Xbox Series";
        $videojuego6->precio = 69.99;

        $videojuego6->save();

        $videojuego7 = new Videojuego();

        $videojuego7->nombre = "Spiderman 2";
        $videojuego7->consola = "Playstation 5";
        $videojuego7->precio = 69.99;

        $videojuego7->save();

        $videojuego8 = new Videojuego();

        $videojuego8->nombre = "God of War Ragnarok";
        $videojuego8->consola = "Playstation 5";
        $videojuego8->precio = 69.99;

        $videojuego8->save();

        $videojuego9 = new Videojuego();

        $videojuego9->nombre = "Minecraft";
        $videojuego9->consola = "Nintendo Switch";
        $videojuego9->precio = 29.99;

        $videojuego9->save();

        $videojuego10 = new Videojuego();

        $videojuego10->nombre = "The Legend of Zelda: Tears of the Kingdom";
        $videojuego10->consola = "Nintendo Switch";
        $videojuego10->precio = 59.99;

        $videojuego10->save();
    }
}
