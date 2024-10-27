<?php 
require("dbconnect.php");
if(isset($_GET['submit'])){
$planname = $_GET['plans'];
echo $planname;
}
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="showvalue.php " method="GET">
<select name="plans"  style="color: black;">
                    <option value="" class="inneroption"> Select Plan</option>


                    <?php
                    $query = "SELECT * FROM `plan`";
                    $queryrun = mysqli_query($conn, $query);
                        // if($res = mysqli_num_rows($query_run)){
                            // $noOfRowsb = mysqli_num_rows($query_run);
                            // if ($noOfRowsb > 0) {
                    while ($data = mysqli_fetch_array($queryrun)) {
                        // $planname = $data['plan_name'];


                        echo '

                        <option value='.$planshow = $data['plan_name'].'> '.$data['plan_name'].'</option>
                        
                    ';

                    
                // }
            // }
            
            }

        // }
        ?>
        </select>
        <button class="btnreg btn" href="#" name="submit" id="btn"><b>Submit</b></button>
        </form>
</body>
</html>