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
<a href="index.php?page=add">add</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>product_name</td>
        <td>price</td>
        <td>description</td>
        <td>producer</td>
    </tr>
    <?php foreach ($products as $key => $product):?>
    <tr>
        <td><?php echo ++$key?></td>
        <td><?php echo $product->product_name?></td>
        <td><?php echo $product->price?></td>
        <td><?php echo $product->description?></td>
        <td><?php echo $product->producer?></td>
       <td><a href="index.php?page=del&id=<?php echo $product->id?>">delete</a></td>
       <td><a href="index.php?page=edit&id=<?php echo $product->id?>">edit</a></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
