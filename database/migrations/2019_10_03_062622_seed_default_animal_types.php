<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedDefaultAnimalTypes extends Migration
{
    private $classes = ["Ветуликолии","Петалонамы","Проартикуляты","Трилобозои","Хиолиты","Брюхоресничные черви","Внутрипорошицевые","Волосатики","Гнатостомулиды","Гребневики","Губки","Дициемиды","Иглокожие","Коловратки","Кольчатые черви","Моллюски","Мшанки","Нематоды","Немертины","Онихофоры","Ортонектиды","Пластинчатые","Плеченогие","Плоские черви","Полухордовые","Сипункулиды","Скребни","Стрекающие","Тихоходки","Форониды","Хордовые","Циклиофоры","Членистоногие","Щетинкочелюстные","Micrognathozoa","Monoblastozoa","Xenacoelomorpha"];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach ($this->classes as $class)
        {
            DB::table('animal_types')->insert([
                'name' => $class
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
