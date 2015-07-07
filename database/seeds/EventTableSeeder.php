<?php
use Illuminate\Database\Seeder;
use App\Event;

class EventTableSeeder extends Seeder {

    public function run() {
        Event::create([
            'title'     => 'Banho do Catatau',
            'isAllDay'  => false,
            'class'     => 1,
            'start'     => new \DateTime('2015-07-07 10:00:00'),
            'end'       => new \DateTime('2015-07-07 11:00:00'),
        ]);

        Event::create([
            'title'     => 'Banho do Mindinho',
            'isAllDay'  => false,
            'class'     => 2,
            'start'     => new \DateTime('2015-07-07 12:00:00'),
            'end'       => new \DateTime('2015-07-07 13:00:00'),
        ]);
    }

} 