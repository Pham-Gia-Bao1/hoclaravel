<h1>This is the home page</h1>
<title>Home</title>
<?php
    echo date("Y-m-d H:i:s");
    echo env('APP_ENV');
    echo env('APP_NAME');
    if(isset($_GET['name'])){
         echo $_GET['name'];
    }
 ?>
