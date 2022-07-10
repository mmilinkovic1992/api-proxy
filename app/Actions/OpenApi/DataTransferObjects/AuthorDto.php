<?php

namespace App\Actions\OpenApi\DataTransferObjects;

class AuthorDto
{
    public function __construct(public string $key, public string $name)
    {
    }
}
