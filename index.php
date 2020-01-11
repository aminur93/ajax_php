<?php
    /**
     * Created by PhpStorm.
     * User: pavel
     * Date: 1/11/2020
     * Time: 3:59 PM
     */
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="bootstrap-asset/css/bootstrap.min.css">
    
    <title>Ajax Php</title>
</head>
<body>

<h1 class="text-center">Ajax Php</h1>
<hr>

<div class="container">
    
    <div class="form-group">
        <label for="country">Country</label>
        <select name="country" id="country" class="form-control">
            <option value="">Select Country</option>
            
            <?php
                $con = mysqli_connect('localhost','root','','ajax_php');
                $query = mysqli_query($con, "select * from country");
                while ($row = mysqli_fetch_array($query))
                {
            ?>
                <option value="<?= $row['id']; ?>"><?= $row['country_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="state">State</label>
        <select name="state" id="state" class="form-control">
            <option value="">Select state</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="city">City</label>
        <select name="city" id="city" class="form-control">
            <option value="">Select city</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="">Date</label>
        <input type="date" name="date_id" id="date_id" value="" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="">Select Day</label>
        <select name="day" id="day" class="form-control">
            <option value="">Select Day</option>
        </select>
    </div>
    
    <div class="form-group" id="period">
        <label for="">Select Period</label>
        
    </div>
</div>

<script src="bootstrap-asset/js/jquery-3.4.1.min.js"></script>
<script src="bootstrap-asset/js/bootstrap.min.js"></script>
<script src="bootstrap-asset/js/main.js"></script>
</body>
</html>
