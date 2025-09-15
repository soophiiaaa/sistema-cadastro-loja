<?php

class Book extends Product {
    private string $author;
    private int $pages;
    private string $publisher;
    private string $genre;
    private string $isbn;

    public function __construct(string $author, int $pages, string $publisher, string $genre, string $isbn) {
        parent::__construct($name, $description, $price);
        $this->author = $author;
        $this->pages = $pages;
        $this->publisher = $publisher;
        $this->genre = $genre;
        $this->isbn = $isbn;
    }
}

