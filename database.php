Welcome <?php
session_start();

require("connect.php");
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$website=$_SESSION['website'];
$mobile=$_SESSION['mobile'];
$gender=$_SESSION['gender'];

$q="insert into registration(name,email,website,mobile,gender) values('".$name."','".$email."','".$website."','".$mobile."','".$gender."')";
$n=mysqli_query($con,$q);
if(!$n){
    echo '<script>alert("Record insertion failed")</script>';
    }
    echo $name;
session_destroy();

?>