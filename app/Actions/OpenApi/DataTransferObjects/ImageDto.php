<?php

namespace App\Actions\OpenApi\DataTransferObjects;

class ImageDto
{
    private CONST URL = 'https://covers.openlibrary.org/b/id/%s.jpg';
    private CONST SMALL = '-S';
    private CONST LARGE = '-L';
    public string $thumbnailUrl;
    public string $largeImageUrl;


    public function __construct(string $coverId)
    {
        $this->generateCovers($coverId);
    }

    private function generateCovers(string $coverId)
    {
        $this->thumbnailUrl = sprintf(self::URL, $coverId . self::SMALL);
        $this->largeImageUrl = sprintf(self::URL, $coverId . self::LARGE);
    }
}
