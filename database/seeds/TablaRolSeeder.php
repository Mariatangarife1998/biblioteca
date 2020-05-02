<?php
//php artisan make:seeder TablaRolseeder//
//para corre los seeder ejecutamos el siguiente comando (php artisan db:seed) //
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
/* esta es tu clase */
class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        //para insertar los roles que hay en la ray hacemos lo siguiente//
      foreach($rols as $key =>$value){
        DB::table('rol')->insert([
            "nombre" => $value,
            'created_at' => Carbon::now()->format('y-m-d H:i:s') 
        ]);
      }
    }
}
