<?php
class NewCard {
    public $imageUrl;
    public $title;
    public $body;
    public $buttonUrl;
    public $buttonText;

    public function __construct($imageUrl, $title, $body, $buttonUrl, $buttonText) {
        $this->imageUrl = $imageUrl;
        $this->title = $title;
        $this->body = $body;
        $this->buttonUrl = $buttonUrl;
        $this->buttonText = $buttonText;
    }

    public function render() {
        return <<<HTML
            <div class="flex border rounded-lg shadow-md overflow-hidden max-w-2xl my-4">
                <img src="$this->imageUrl" alt="$this->title" class="w-1/3 object-cover">
                <div class="p-4 flex flex-col justify-between w-2/3">
                    <div>
                        <h2 class="text-xl font-bold mb-2">$this->title</h2>
                        <p class="text-gray-700 mb-4">$this->body</p>
                    </div>
                    <a href="$this->buttonUrl" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-fit">$this->buttonText</a>
                </div>
            </div>
            HTML;
                }
            }
?>