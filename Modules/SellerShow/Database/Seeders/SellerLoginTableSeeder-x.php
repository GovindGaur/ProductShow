<?php

namespace Modules\SellerShow\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class SellerLoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seller_login')->insert([
            'name'=>'Govind',
            'email'=>'gaurgovind1263@gmail.com',
            'password'=>hash::make('admin')
        ]);

        // $this->call("OthersTableSeeder");
    }
}