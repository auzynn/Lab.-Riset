<?php

namespace Database\Seeders;

use Roles;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama' => 'Admin'],
            ['nama' => 'Dosen'],
            ['nama' => 'Supervisor'],
            ['nama' => 'User'],
        ];
        
        foreach ($data as $value){
            Role::insert([
                'nama' => $value['nama'], 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ]);
        } 
    }
}