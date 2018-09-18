<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Userrole = new \App\UserRoleTable();
        $Userrole->insert([
            [ 'userrolename' => 'adminDE' ],
            [ 'userrolename' => 'adminCM' ],
        ]);

        $user = new \App\User();
        $user->title = 'นาย';
        $user->fname = 'สันติภาพ';
        $user->lname = 'เพิ่มมงคลทรัพย์';
        $user->role_id = '1';
        $user->email = 'admin@tot.co.th';
        $user->password = Hash::make('12345678');
        $user->remember_token = str_random(10);
        $user->save();
    }
}
