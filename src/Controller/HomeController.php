<?php

namespace App\Controller;
use Onion\http\Response;
use App\SimpleApp\App;

class HomeController
{
    public function __construct(private App $app)
    {

    }
    public function index(): Response
    {
        return new Response($this->app->getText());
    }
}