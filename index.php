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
    
    include  './includes/practice/car.php';
    
    $supra = new Car('toyta', 'supra', '2024');
    echo $supra->getCarInfo() . '<br>';
    echo $supra->__destruct() . '<br>';
    echo $supra->start() . "<br>";

    $tesla = new ElectricCar('Tesla', 'Model S', '2024', '500');
    echo $tesla->getBatteryInfo() . '<br>';
?>

</body>
</html>