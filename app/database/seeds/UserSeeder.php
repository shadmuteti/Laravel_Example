<?php
class UserSeeder extends Seeder
{

public function run()
{
    DB::table('userlogin')->delete();
    User::create(array(
        'name'  => 'James Joseph',
        'username' => 'jamesj',
        'email' => 'james@gmail.com',
        'password' => Hash::make('awesome'),
    ));
}

}
?>
