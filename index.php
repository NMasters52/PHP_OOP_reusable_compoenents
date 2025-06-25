<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="bg-green-200">

<?php 
    include_once './includes/components/codeSnippet.php';

    $exampleSnippet = htmlspecialchars('
    <div>
        <img src="" alt="image">
        <div>
            <h3></h3>
            <p></p>
        </div>
        <button></button>
    </div>
    ');

    $newSnippet = new CodeSnippet($exampleSnippet, 'index.html');

    echo $newSnippet->render();
?>

</body>
</html>