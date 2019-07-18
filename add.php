html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $math = $_POST['math'];
    $science = $_POST['science'];
    $history = $_POST['history'];
    $social= $_POST['social'];
    $total=$math+$science+$history+$social;    
    // checking empty fields
    if(empty($name) || empty($math) || empty($science)|| empty($history)|| empty($social)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($math)) {
            echo "<font color='red'>Math field is empty.</font><br/>";
        }
        
        if(empty($science)) {
            echo "<font color='red'>Science field is empty.</font><br/>";
        }
        
        if(empty($social)) {
            echo "<font color='red'>Science field is empty.</font><br/>";
        }
        
        if(empty($history)) {
            echo "<font color='red'>History field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO user(name,math,science,history,social,total) VALUES('$name','$math','$science','$history','$social','$total')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index1.php'>View Result</a>";
    }
}
?>
</body>
</html>