<!DOCTYPE html>
<html>
<head>
	<title>blc</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="main2.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2a677300" id="nav">
    <a class="navbar-brand" href="#" style="color: white "><b>Loan Calculator </b></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php" style="color: white "><b>Home </b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php" style="color: white "><b>About</b></a>
      </li>    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
  </div>
	<div class="jumbotron jumbotron-fluid" style="background-color: #6290bd00;">
  <div class="container">
    <h1 class="display-4">Hello, Borrower's!</h1>
    <p class="lead" style="color: white ">This Loan calculator helps you to know how much money you need to repay to your Lender :)</p>

  </div>
</div>
	<div class="container">
   <form action="cal.php" method="POST">
  <div class="form-group pad">
    <label for="formGroupExampleInput"><b>Name :</b></label>
    <input type="text" name="name" class="form-control col-form-label-sm" id="formGroupExampleInput" placeholder="Name" required="ok">
  </div>
  <div class="form-group ">
    <label for="formGroupExampleInput2"><b>Interest Rate:</b></label>
    <input type="float,number"  name="interest" class="form-control col-form-label-sm" id="formGroupExampleInput2" placeholder="3.50% " required="ok">
  </div>
  <div class="form-group ">
    <label for="formGroupExampleInput"><b>Loan Amount :</b></label>
    <input type="number" name="amount" class="form-control col-form-label-sm" id="formGroupExampleInput" placeholder="100000" required="ok">
  </div>
  <div class="form-group ">
    <label for="formGroupExampleInput2"><b>Loan Tenure :</b></label>
    <input type="number" name="tenure" class="form-control col-form-label-sm" id="formGroupExampleInput2" placeholder="[in months]" required="ok">
  </div>
  <button type="submit" class="btn btn-primary mb-2 pad1 ">Submit</button>
</form> 
  </div>
</body>
</html>