<?php

class CodeSnippet {
    public $codeBlock;
    public $fileNameOne;
    public $fileNameTwo;

    public function __construct($codeBlock, $fileNameOne, $fileNameTwo){
        $this->codeBlock = $codeBlock;
        $this->fileNameOne = $fileNameOne;
        $this->fileNameTwo = $fileNameTwo;
    }

    public function render() {
        return <<<HTML
            <div class="w-full mx-auto my-4 font-mono text-[12px] md:text-[18px] xl:text-[24px]">
                <!-- 1) Header bar -->
                <div class="flex items-center justify-between bg-gray-900 text-gray-400 px-3 md:py-3 py-1 md:px-5 rounded-t-lg">
                    <!-- traffic lights -->
                    <div class="flex space-x-2 mr-2">
                        <span class="w-3 h-3 bg-red-500 rounded-full"></span>
                        <span class="w-3 h-3 bg-yellow-500 rounded-full"></span>
                        <span class="w-3 h-3 bg-green-400 rounded-full"></span>
                    </div>
                    <p class="text-[12px] md:text-[16px] xl:text-[22px] bg-gray-800 hover:bg-gray-700 
                    text-gray-200 px-2 py-0.5 rounded mr-auto ml-[8px] cursor-pointer">$this->fileName</p>
                    <!-- copy button -->
                    <button class="text-[12px] md:text-[16px] xl:text-[22px] bg-gray-800 hover:bg-gray-700 
                    text-gray-200 px-2 py-0.5 rounded cursor-pointer copyText" >
                        Copy
                    </button>
                </div>
                <!-- The code that displays to the webpage indents as far as it is indented in your editor. SO, the code that goes to the webpage below is not indented. -->
                <pre class="bg-gray-800 text-white px-[12px]"><code class="codeBlock">
                $this->codeBlock
                </code></pre>
            </div>
        HTML;
    }
}

?>

<script>

//add event listener when dom loads
    document.addEventListener('DOMContentLoaded', () => {
        //create array of buttons that were made using the same class
        const copyButtons = document.querySelectorAll('.copyText');

        //iterate over each button adding the logic to them
        copyButtons.forEach(button => {
            button.addEventListener('click', async () => {
                //find the snippet of code to copy 
                const codeBlock = button.querySelector('.codeBlock');
                //trim the white space
                const textToCopy = codeBlock.textContent.trim();

                try {
                    //copy to clipboard
                    await navigator.clipboard.writeText(textToCopy);
                    //update the copy button to "coppied" for UX then change it back after 3secs
                    const originalText = button.textContent;
                    button.textContent = 'Copied!';
                    setTimeout(() => button.textContent = originalText, 3000)
                } catch (error) {
                    console.error('failed to copy', err)
                };
            })
        })
    })
