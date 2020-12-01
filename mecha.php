

<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="assignment3";

$conn= new mysqli ($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Failed:" . mysqli_connect_error());
}?>


<?php
$date = $_POST["adate"];
$sql="SELECT * FROM mechatable WHERE bookdate != $date";
$result=mysqli_query($sql);
?>

        <form action>
<?php
while($row=mysqli_fetch_array($result))
            {

?>
<option> <?php echo $row['mechname']?> </option>
<?php
            }
?>
</form>
</body>
</html>