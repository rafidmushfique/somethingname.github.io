<?php

session_start();
$_SESSION['conn']=$conn;
    if ($conn)
    {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['number'];
    $license = $_POST['license'];
    $engine = $_POST['engine'];
    $date = $_POST['date'];
    
    $sql = "INSERT INTO customer_details(name,address,number,license,engine,date) VALUES('$name', '$address', '$phone', '$license', '$engine', ' $date')";
    
   if( $resutlt=$conn->query($sql))
   {
       console.log('Entry Inserted');
   }
  

    }
    else
    {
        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
    

?>

