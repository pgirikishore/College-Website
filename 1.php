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
.table1{
  left:50%;
}
.hi{
  top:23px;
  left:15px;
}
</style>
<body>
<div>
        <img src="newnew.png" />
    </div>
  <div class="hi">
    <br>
    <br>
    <br>
  <h2>Search For Student</h2>
</div>

    <div class="table1">
<form action="" method="post">

  <input name="search" type="search" ><input type="submit" name="button">

</form>
</div>

<table>
  <tr><td><b> Name</td><td></td><td><b>Mathematics</td><td></td><td><b>Science</td><td></td><td><b>History</td><td></td><td><b>Social</td><td></td><td><b>Total</td></tr>

<?php

$con=mysqli_connect('localhost', 'root', '','test');
$db=mysqli_select_db($con,'test');


if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

  $query=mysqli_query($con,"select * from user where name like '%{$search}%' ");

if (mysqli_num_rows($query) > 0) {
  while ($row = mysqli_fetch_array($query,MYSQLI_BOTH )) {
  
    echo "<tr><td>".$row['name']."</td><td></td><td>".$row['math']."</td><td></td><td>".$row['science']."</td><td></td><td>".$row['history']."</td><td></td><td>".$row['social']."</td><td></td><td>".$row['total']."</td></tr>";
  }
}else{
    echo "No student Found<br><br>";
  }

}else{                          //while not in use of search  returns all the values
  $query=mysqli_query($con,"select * from user ");

  while ($row = mysqli_fetch_array($query,MYSQLI_BOTH)) {
    echo "<tr><td>".$row['name']."</td><td></td><td>".$row['math']."</td><td></td><td>".$row['science']."</td><td></td><td>".$row['history']."</td><td></td><td>".$row['social']."</td><td></td><td>".$row['total']."</td></tr>";
  
  }
}

mysqli_close($con);
?>