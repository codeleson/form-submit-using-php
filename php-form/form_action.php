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
       <div class="text-center mb-3 mt-3">
    <img class="mb-4" src="code-leson-logo.png" alt="" width="100">
    <h1 class="h3 mb-3 font-weight-normal">Action page <a href="form2.php" class="btn btn-primary">Back</a></h1>
  </div>
  <div class="clearfix"></div>
	 <table class="table table-striped">
    <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Mobile</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $firstname;?></td>
        <td><?php echo $lastname;?></td>
        <td><?php echo $email;?></td>
        <td><?php echo $mobile;?></td>
      </tr>
    </tbody>
   </table>
</div>
</div>
</body>
</html>