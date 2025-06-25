<?php
class Card {
    public $title;
    public $body;

    public function __construct($title, $body){
        $this->title = $title;
        $this->body = $body;
    }

    public function createCard() {
        // Use instance variables instead of parameters
        return <<<HTML
            <h1>$this->title</h1>
            <p>$this->body</p>
        HTML;
    }
}

?>