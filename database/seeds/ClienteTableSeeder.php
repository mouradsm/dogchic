<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('clientes')->truncate();
        DB::table('animals')->truncate();


        factory(App\Cliente::class, 5)
            ->create()
            ->each(function ($u) {
                $u->animais()->save(factory(App\Animal::class)->make());
            });
    }
}
