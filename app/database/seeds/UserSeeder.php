<?php

/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */
class UserSeeder extends Seeder 
{
    public function run()
    {
        $users = [
            [
                'cod'=>'1',
                'grupo'=>'1',
                'username'=>'admin',
                'password'=> Hash::make('123'),
                'email'=>'admin@email.com'
            ],
            [
                'cod'=>'1',
                'grupo'=>'2',
                'username'=>'cliente',
                'password'=> Hash::make('123'),
                'email'=>'cliente@email.com'
            ],
            [
                'cod'=>'1',
                'grupo'=>'3',
                'username'=>'consumidor',
                'password'=> Hash::make('123'),
                'email'=>'consumidor@email.com'
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}