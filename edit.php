<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $math=$_POST['math'];
    $science=$_POST['science'];    
    $history=$_POST['history']; 
    $social=$_POST['social']; 
    // checking empty fields
    if(empty($name) || empty($math) || empty($science)|| empty($history)|| empty($social)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($math)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($science)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        

        
        if(empty($history)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        

        
        if(empty($social)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE user SET name='$name',math='$math',science='$science', history='$history',social='$social' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index1.php
        header("Location: index1.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $math = $res['math'];
    $science = $res['science']; 
    $history = $res['history'];
    $social = $res['social'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index1.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>math</td>
                <td><input type="text" name="math" value="<?php echo $math;?>"></td>
            </tr>
            <tr> 
                <td>science</td>
                <td><input type="text" name="science" value="<?php echo $science;?>"></td>
            </tr>
            
            <tr> 
                <td>history</td>
                <td><input type="text" name="history" value="<?php echo $history;?>"></td>
            </tr>
            
            <tr> 
                <td>social</td>
                <td><input type="text" name="social" value="<?php echo $social;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>