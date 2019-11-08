<?php

use Illuminate\Database\Seeder;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_info')->insert([
        	['fullname'=>'Nguyễn Việt Hân', 'email'=>'nguyenhan1999@gmail.com', 'password'=>Hash::make('viethan123'),'mobile'=>'0386888888','address1'=>'129/15 đường 154','address2'=>'số 53 đường 144','role'=>2],
        	['fullname'=>'Nguyễn Việt Anh', 'email'=>'ngaytrolaicf1993@gmail.com', 'password'=>Hash::make('vietanh123'),'mobile'=>'0386999888','address1'=>'129/15 đường 154','address2'=>'số 53 đường 144','role'=>2],
        	['fullname'=>'Nguyễn Việt Hân', 'email'=>'nhainguyen1960@gmail.com', 'password'=>Hash::make('0382484093'),'mobile'=>'0386888888','address1'=>'129/15 đường 154','address2'=>'số 53 đường 144','role'=>2]
        ]);
    }
}
