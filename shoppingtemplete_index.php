<?php
$session_start();
$connect = mysqli_connect("localhost", "root", "", "", "tut");
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>shopping</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http//cdn.bootcss.com/jquery/1.12.4/jquery.min.js">
        </head>
<body>
<div class="container" style="width: 60%;">
        <h2 align="center">shopping</h2>
        <?php
        $query = "SELECT * FROM product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4">
                <form method="post" action="shop.php?action=add$id=<?php echo $row["id"]; ?>">
                <div style ="border : 1px solid #eaeaex; margin:-1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
                <img src="<?php echo $row["image"]; ?>"class="img-responsive">
                <h5 class="text-info"><?php echo $row["p_name"]; ?></h5>
                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                <input type="text" name="quantity" class="form-control" value="1">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["p_price"]; ?>">
                <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
        
        
        </div>
        </form>
        </div>
        <?php
        }
        }
        ?>
        
        
        </body>
        /* 
        * To change this license header, choose License Headers in Project Properties.
        * To change this template file, choose Tools | Templates
        * and open the template in the editor.
        */
        
