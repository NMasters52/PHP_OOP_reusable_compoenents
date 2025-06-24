<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include './includes/components/card.php';

        //create card
        $cardOne = new Card('This is a title', 'this is some text body');

        //display card
        $cardOne->createCard();
    ?>
</body>
</html>