<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>product_name</td>
            <td><input type="text" name="product_name" placeholder="product_name" value="<?php echo $product->product_name?>"></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" placeholder="price" value="<?php echo $product->price?>"></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type="text" name="description" placeholder="description" value="<?php echo $product->description?>"></td>
        </tr>
        <tr>
            <td>producer</td>
            <td><input type="text" name="producer" placeholder="producer" value="<?php echo $product->producer?>""></td>
        </tr>
        <tr>
            <td><input type="submit" value="update"></td>
        </tr>
    </table>
</form>
</body>
</html>
