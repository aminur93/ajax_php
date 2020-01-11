<?php
    /**
     * Created by PhpStorm.
     * User: pavel
     * Date: 1/11/2020
     * Time: 4:20 PM
     */
    
    $con = mysqli_connect('localhost','root','','ajax_php');
    
    if(isset($_POST['countryId']))
    {
        $s_id = $_POST['countryId'];
        
        $query = mysqli_query($con, "select * from state where country_id = '$s_id' ");
        
        while ($row = mysqli_fetch_array($query))
        {
            $state_id = $row['id'];
            $state = $row['state_name'];
            
            $show = "<option value=' $state_id'> $state</option>";
            
            echo $show;
        }
    }
    
    if(isset($_POST['stateId']))
    {
        $c_id = $_POST['stateId'];
        
        $query = mysqli_query($con, "select * from city where state_id = '$c_id'");
        
        while ($row = mysqli_fetch_array($query))
        {
            $city_id = $row['id'];
            $city = $row['city_name'];
            
            echo "<option value=' $city_id'> $city</option>";
        }
    }
    
    if(isset($_POST['dayname']))
    {
        $d_id = $_POST['dayname'];
        
        $query = mysqli_query($con, "select * from period where day = '$d_id'");
        
        while ($row = mysqli_fetch_array($query))
        {
            $day_id = $row['id'];
            
            $dayName = $row['day'];
            
            $p_name = $row['name'];
            
            $pe = array("id" => $day_id, "day" => $dayName, "name" => $p_name);
            
            header("Content-Type: application/json", true);
            
            echo json_encode( $pe );
            
//            if($dayName)
//            {
//                echo "<option value='$day_id'> $dayName</option>";
//            }
        }
    }