<?php

namespace App\Actions\OpenApi\Actions;

use App\Actions\OpenApi\DataTransferObjects\FormatDto;
use Illuminate\Support\Facades\Http;

class GetBook
{
    private CONST URL = 'https://openlibrary.org/api/books?bibkeys=ISBN:9783442236862&jscmd=details&format=json';

    public function execute()
    {
        $response = Http::get('https://openlibrary.org/api/books?bibkeys=ISBN:9783442236862&jscmd=details&format=json');
        return new FormatDto($response->json()['ISBN:9783442236862']);
    }
}
