<?php

namespace Onion\http;

class Response
{
    public function __construct(
        private ?string $content = '',
        private int $status = 200,
        private array $headers = []
    )
    {

    }

    public function send()
    {
        echo $this->content; 
    }
}