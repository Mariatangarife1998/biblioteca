<?php
//php artisan make:seeder TablaRolseeder//
//para corre los seeder ejecutamos el siguiente comando (php artisan db:seed) //
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.//
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'rol',
            'permiso'
        ]);
        // $this->call(UserSeeder::class);//

        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);
    }
    protected function truncateTablas(array $tablas)
    {
        
      DB::statement('ALTER TABLE rol DISABLE TRIGGER ALL;');
        foreach ($tablas as $Tabla) {
            DB::table($Tabla)->truncate();
        }
     DB::statement('ALTER TABLE rol ENABLE TRIGGER ALL;');

    }
}
