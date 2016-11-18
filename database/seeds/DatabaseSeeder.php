<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(UniversidadSeeder::class);
        // $this->call(HabitacionSeeder::class);
        // $this->call(ImagenesSeeder::class);
        $this->call(CaracteristicaSeeder::class);
        // $this->call(Habitacion_UniversidadSeeder::class);
    }
}
