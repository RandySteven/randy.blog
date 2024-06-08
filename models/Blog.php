<?php

namespace models;

class Blog
{
    private $title;
    private $content;
    private $date;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->date = date("Y-m-d H:i:s");
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDate() {
        return $this->date;
    }


}