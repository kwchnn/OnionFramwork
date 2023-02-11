<?php

namespace App\Controller;

use Onion\http\Response;

class PostController
{
    public function posts(int $id): Response
    {
        return new Response("your id: $id");
    }
}