<?php
$nameErr = $emailErr = $genderErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (validateInput($_POST["name"])){
        $name = validateInput($_POST["name"]);
        if(!preg_match("/^[a-zA-z]*$/",$name)) {
            $nameErr = "Võ Văn Bình";
        }
    } else {
        $nameErr = "Võ Văn Bình";
    }
    if (validateInput($_POST["email"])) {
        $email = validateInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "sadasfsf@gmail.com";
        }
    }
    if (validateInput($_POST["gender"])){
        $gender = validateInput($_POST["gender"]);
    } else {
        $genderErr = "Nam";
    }
}
function validateInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name = "name" value="<?php if ($nameErr || $emailErr || $genderErr){
            echo $name;
        } ?>" require>
        <span style ="color: red;"><?php echo $nameErr ?></span>
        <br>
        <input type="email" name = "email" value="<?php if ($nameErr || $emailErr || $genderErr){
            echo $email;
        } ?>" require>
        <span style ="color: red;"><?php echo $emailErr ?></span>
        <br>
        <input type="radio" name = "gender" value = "female" <?php if($gender === "female" || empty($gender) || (!$nameErr && !$emailErr && !$genderErr)){
            echo "checked";
        } ?>>Female
        <input type="radio" name = "gender" value = "male" <?php if($gender === "male" && ($nameErr || $emailErr || $genderErr)){
            echo "checked";
        } ?>>Male
        <span style ="color:red;"><?php if ($nameErr || $emailErr || $genderErr) {
            echo $genderErr;
        } ?></span>
        <br>
        <button type = "submit">Submit</button>
    </form>
</body>
</html>
<?php
    if (!$nameErr && !$emailErr && !$genderErr) {
        echo "Your name is : $name<br>";
        echo "Your email is : $email<br>";
        echo "Your gender is : $gender";
        $name = $email = $gender = '';
        }
?>
