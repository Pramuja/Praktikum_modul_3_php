<?php
    $name = $_POST['nama'];
$email = $_POST['email'];

if($name == "" || $email == "")
{
    header("location: tugas.php");
}
else
{
    echo $_POST['nama'];
    echo "<br>";
    echo $_POST['email'];
}
?>
