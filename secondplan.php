<?php
    if (isset($_POST['joinbtn2'])|| isset($_SESSION['username'])) {
        
        
        
        $sql = "SELECT `plan_name`,`price` FROM `plan` WHERE id='2'";
        $insert = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($insert)) {
            echo "<br>";
            $username = $_SESSION['username'];
            $planname = $data['plan_name'];
            $price = $data['price'];
            print_r($insert);
            // echo mysqli_num_rows($insert);
        }
    }
    else{
        echo "command not run properly";
    }

?>