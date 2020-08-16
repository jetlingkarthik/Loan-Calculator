<!DOCTYPE html>
<html>
<head>
	<title>data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="cal.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#66ffe178 ;">
    <a class="navbar-brand" href="#"><b>Loan Calculator </b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php"><b>Home </b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php"><b>About</b></a>
      </li>    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Name</th>
			<th scope="col">Interest</th>
			<th scope="col">Amount</th>
			<th scope="col">Months</th>
			<th scope="col">Loan</th>
		</tr>
	</thead>
	<div class="jumbotron jumbotron-fluid" style="text-align: center; background-color: #4b82b900">
  <div class="container">
    <h4>The below table describes database collection of calculated data!</h4>
  <hr>
  </div>
</div>
  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="yuvan";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed".$conn->connect_error);
}
else{
	echo "connected successfully";
}
$sql="desc bank";
if($conn->query($sql)==TRUE)
{
	echo "<br>";
    echo "connected to table";
    echo "<br>";
}
else{
	echo "error";
}
$name=$_POST['name'];
$interest=$_POST['interest'];
$amount=$_POST['amount'];
$months=$_POST['tenure'];
$a=($amount*$interest)/100;
$loan=($a*$months)+$amount;
$sql11="insert into bank values('$name',$interest,$amount,$months,$loan)";
if($conn->query($sql11)==TRUE){
	echo "inserted";
}
else{
	echo "error";
}
echo "<br>";
$sql11="select *from bank";
$result=$conn->query($sql11);
?>

<?php
if($result->num_rows>0){
while($row= $result->fetch_assoc())
{
	echo "<tr>";

	echo  "<td>".$row['name']."</td>";

	echo  "<td>".$row['interest']."</td>";

	echo  "<td>".$row['amount']."</td>";

	echo  "<td>".$row['months']."</td>";

	echo  "<td>".$row['loan']."</td>";

echo "</tr>";
}}
else{
echo "empty table";
}
$conn->close();
?>
