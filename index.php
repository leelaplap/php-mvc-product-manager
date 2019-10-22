<?php
require "model/DBConnect.php";
require "model/Product.php";
require "model/ProductDB.php";
require "controller/ProductController.php";

use controller\ProductController;

?>

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
<?php
$controller = new ProductController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case "list":
        $controller->showList();
        break;
    case "add":
        $controller->add();
        break;
    case "del":
        $controller->delete();
        break;
    case "edit":
        $controller->edit();
        break;
    default:
        $controller->showList();

}
?>
</body>
</html>
