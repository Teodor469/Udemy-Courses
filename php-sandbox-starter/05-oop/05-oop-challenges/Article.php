<?php

class Article {
    public $title;
    public $content;
    private $published = false;


    function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish() {
        $this->published = true;
    }

    public function isPublished() {
        return $this->published;
    }
}

$article1 = new Article("Title 1", "Content 1");
$article2 = new Article("Title 2", "Content 2");

// Publish one of the articles
$article1->publish();

// Check if articles are published
var_dump($article1->isPublished()); // Should return true
var_dump($article2->isPublished());