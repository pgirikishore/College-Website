<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>

<head>    
    <title>Homepage</title>
</head>
<style>
body{
	background-image: url("background.jpg");
    background-size: cover;
    margin: 0px;
    z-index: 5;
}
img{
	margin-left:auto;
	margin-right:auto;
	display:block;
}
table, th, td{

    border:1px;
    border-color: inherit;
    padding:15px;
    margin-left:150px;
    position:relative;
    margin-top: 50px;

}
#tr1{
background-color:black;
color: white;

}
tr: nth-child(even){
    background-color: white;
}
td:hover{
    background-color: rgb(238, 125, 50);
}

</style>
 
<body>
<div>
        <img src="newnew.png" />
    </div>
	<br>
    <a href="add.html">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
        <tr  id="tr1">
            <td>Name</td>
            <td>Math</td>
            <td>Science</td>
            <td>History</td>
            <td>Social</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['math']."</td>";
            echo "<td>".$res['science']."</td>";
                
            echo "<td>".$res['history']."</td>";
            echo "<td>".$res['social']."</td>";
                
                
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";        
        }
        ?>
    </table>
</body>
</html>