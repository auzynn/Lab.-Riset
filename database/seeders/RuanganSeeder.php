<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Ruangan::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'admin'],
            ['email' => 'ifadmin@unsil.ac.id'],
            ['id_roles' => 1],
            ['password' => '$2y$10$SQOypwyjqttY517NVwPk7eZUarehjdSZlXxQ2K05owDf5Yg8kiVbm'],
        ];
        
        foreach ($data as $value){
            Ruangan::insert([
                'name' => $value['name'], 
                'email' => $value['email'], 
                'id_roles' => $value['id_roles'], 
                'password' => $value['password'], 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ]);
        }
    }
}