<?php      
    include('connect.php');
    // if (isset($_POST['submit'])) {
        
    //     if (!empty($_POST['cell']) && !empty($_POST['password'])) {  
            $username = $_POST['cell'];  
            $password = $_POST['password']; 
        // } 
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $quary = "select *from admin_login where phone = '$username' and password = '$password'";  
        $result = mysqli_query($connection, $quary);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: admin_dishboard.php", true, 301);
            exit(); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
 