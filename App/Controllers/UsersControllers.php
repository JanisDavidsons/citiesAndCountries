<?php

namespace App\Controllers;

class UsersControllers
{
    public function index(): string
    {
        return 'show all users';
    }

    public function show(array $params)
    {
        //var_dump('show single user');
        return 'show single user '.$params['id'];
    }

}