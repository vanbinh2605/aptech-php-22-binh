<?php 

$products = [
    "apple" => [
        "name" => "iPhone X",
        "price" => 999,
    ],
    "samsung" => [
        "name" => "Galaxy S10",
        "price" => 888,
    ]
    ];
    $keys= array_keys($products);
    echo $keys[1];
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
    <table>
    <thead>
    <tr>
        <th>#</th>
        <th>name</th>
        <th>price</th>
    </tr>    
    </thead>
    <tbody>
    <?php
        for ($i = 0; $i < count($keys); $i++) {

        ?>
        <tr>
        <td>
        <?php echo $i + 1; ?>
        </td>
            <td>
                <?php
                    echo $products[$keys[$i]]["name"];
                    ?> 
            </td>
            <td>
                <?php
                    echo $products[$keys[$i]]["price"];
                    ?> 
            </td>
        </tr> 
        <?php } ?>
        <tr>
            <td colspan = "2">Tong</td>
            <td>
            <?php echo $products["apple"]["price"] + $products["samsung"]["price"]; ?>
            </td>
        </tr>
    
    </tbody>
    </table>
</body>
</html>    