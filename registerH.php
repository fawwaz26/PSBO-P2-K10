    <?php
ob_start();
require("utility.php"); ?>

<?php
$u_name= strtolower(stripslashes($_POST['u_name']));
$f_name= $_POST['f_name'];
$pwd= $_POST['pwd'];
$e_mail=$_POST['e_mail'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$sta=$_POST['sta'];
$cou=$_POST['cou'];

$pwd= password_hash($pwd, PASSWORD_DEFAULT);

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);


//$image = chunk_split(base64_encode(file_get_contents( $imup )));

$sql1 = "SELECT username FROM user WHERE username = '$u_name'";
$result1= ExecuteNonQuery ($sql1);
if(mysqli_fetch_assoc($result1)){
    echo "<script>
        alert('username sudah terdaftar!')
          </script>";
    return false;
}

$sql=" INSERT INTO user (username,fullname,password,e_mail,gender,dob,user_type,address,state,country,uimg) values ('$u_name','$f_name','$pwd','$e_mail','$gender','$dob','user','$add','$sta','$cou','$path')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:notification.php");
}
else
{
	header("location:register.php");
}
?> 	
