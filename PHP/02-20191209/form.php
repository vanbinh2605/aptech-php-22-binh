<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method= "post">
    <input type="text" name= "name">
    <br>
    <input type="text" name= "project">
    <br>
    <button type="summit">summit</button>
    </form>
</body>
</html>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $project = $_POST["project"];
    echo "My name is $name and name of my project is $project";
}
?>