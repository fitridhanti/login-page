<?php

$username   = $_POST ['username'];
//$pass = md5($_POST['password']);
$pass       = $_POST ['password'];

$username = stripcslashes($username);  
$pass = stripcslashes($pass);  

include 'connect.php';
//$q = "select * from user_skj";
$query = "select * from user_skj where username='$username' and password='$pass'";
//echo $query; die;
$user = mysqli_query($result, $query);
$chek = mysqli_num_rows($user);
//var_dump($chek); die;


//$query = "select * from user_skj where username='$username' and password='pass'"

//$hasil = mysqli_query($result, $query);

//if(mysqli_fetch_assoc($hasil))
// var_dump($user); die;

if($chek==1)
{
    //$logged = mysqli_fetch_assoc($user);
    //echo "Selamat Datang, ".$logged['username']." ";
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
    header("location:welcome.php");
}else
{
    echo "<h1>SALAH HEH</h1>";
    //header("location:index.php");
}
?>