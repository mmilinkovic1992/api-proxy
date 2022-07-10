<?php

namespace App\Actions\OpenApi\DataTransferObjects;

class FormatDto
{
    public string $title;
    public array $authors;
    public ?string $publishDate;
    public ?string $physicalFormat;
    public ImageDto $imageDto;
    private array $bookObject;

    public function __construct(array $bookObject)
    {
        $this->bookObject = $bookObject;
        $this->parseTitle();
        $this->parseAuthors();
        $this->parsePublishDate();
        $this->parsePhysicalFormat();
        $this->parseImage();
    }

    /**
     * Translate title from response to expected field value.
     *
     * @return void
     */
    private function parseTitle(): void
    {
        $this->title = $this->bookObject['details']['title'];
    }

    /**
     * Parse authors from response to AuthorDto array.
     *
     * @return void
     */
    private function parseAuthors(): void
    {
        foreach ($this->bookObject['details']['authors'] as $author) {
            $this->authors[] = new AuthorDto($author['key'], $author['name']);
        }
    }

    /**
     * Parse publish date from response to expected field value.
     *
     * @return void
     */
    private function parsePublishDate(): void
    {
        $this->publishDate = $this->bookObject['details']['publish_date'];
    }

    /**
     * Parse physical format from response to expected field value.
     *
     * @return void
     */
    private function parsePhysicalFormat(): void
    {
        $this->physicalFormat = $this->bookObject['details']['physical_format'];
    }

    /**
     * Parse image from response to expected field value.
     *
     * @return void
     */
    private function parseImage(): void
    {
        $this->imageDto = new ImageDto($this->bookObject['details']['covers'][0]);
    }
}
