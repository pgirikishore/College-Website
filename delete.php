//including the database connection file
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM user WHERE id=$id");
 
//redirecting to the display page (index1.php in our case)
header("Location:index1.php");