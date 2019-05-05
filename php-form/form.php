<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form submit in PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center">
	 <form class="form-signin col-md-6" method="post">
  <div class="text-center mb-3 mt-3">
    <img class="mb-4" src="code-leson-logo.png" alt="" width="100">
    <h1 class="h3 mb-3 font-weight-normal">PHP Form <a href="form2.php" class="btn btn-primary">Demo 2</a></h1>
  </div>

  <div class="form-label-group mb-3">
    <label>First Name: <?php echo $firstname;?></label>
    <input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
  </div>
  <div class="form-label-group mb-3">
    <label>Last Name: <?php echo $lastname;?></label>
    <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name">
  </div>
  <div class="form-label-group mb-3">
    <label>Email: <?php echo $email;?></label>
    <input type="text" name="email" class="form-control" placeholder="Enter Email">
  </div>
  <div class="form-label-group mb-3">
    <label>Mobile:  <?php echo $mobile;?></label>
    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile">
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Submit</button>
</form>
</div>
</div>
</body>
</html>