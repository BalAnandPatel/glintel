<?
// Start the session
session_start();

$servername = "mysql.hostinger.in";
$username = "u833085441_glint";
$password = "12qw12qw";
$dbname = "u833085441_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user=$_POST['email'];
$pass=$_POST['password'];

echo $sql = "SELECT * FROM login where id=$user and pass=$pass";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo $_SESSION["id"] =  $row["id"];
     $_SESSION["pass"] =  $row["pass"];
     $_SESSION["email"] =  $row["email"];
     $_SESSION["mobile"] =  $row["mobile"];
$_SESSION["ll"] =  $row["last_login"];
$_SESSION["address"] =  $row["address"];
$_SESSION["state"] =  $row["state"];
$_SESSION["city"] =  $row["city"];
$_SESSION["status"] =  $row["status"];
    }
 header('Location: ../../user.php');
}
 else {
    header('Location: ../../index.php');
}


mysqli_close($conn);

?>