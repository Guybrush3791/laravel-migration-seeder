<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = new Pizza();

        $pizza -> name = 'Margherita';
        $pizza -> ingredients = "Pomodoro, mozzarella, basilico, olio d'oliva";
        $pizza -> price = 4;
        $pizza -> campo_inventato = "Hello, World!";

        $pizza -> save();

        $pizza = new Pizza();

        $pizza -> name = 'Diavola';
        $pizza -> ingredients = "Pomodoro, mozzarella, salamino, olio d'oliva";
        $pizza -> price = 6;
        $pizza -> campo_inventato = "Hello, World!";

        $pizza -> save();

        Pizza :: factory() -> count(1000) -> create();
    }
}
