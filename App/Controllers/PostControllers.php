<?php


namespace App\Controllers;


class PostControllers
{
    public function index(): string
    {
        return 'This is post controller';
    }

    public function show(array $params)
    {
        return 'show post controller '.$params['id'];
    }
}