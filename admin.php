

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta
name="viewport"
content="width=device-width, initial-scale=1, shrink-to-fit=no"
/>
<link
rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
/>
<link rel="stylesheet" href="form.css" />
<title>Form</title>
</head>

<body>
<form method="post" action="admin.php">
<div
class="d-flex justify-content-center align-items-center login-container"
>
<div id="div1">
<div class="login-form text-center">
<h1 class="mb-5 font-weight-light text-uppercase">Login</h1>

<div class="form-group">
<input
type="text"
class="form-control rounded-pill form-control-lg"
placeholder="Username"
name="username"
id="username"
/>
</div>
<div class="form-group">
<input
type="password"
class="form-control rounded-pill form-control-lg"
placeholder="Enter password"
id="password"
name="password"
/>
</div>

<div
class="forgot-link form-group d-flex justify-content-between align-items-center"
></div>

<button
type="submit"
value="Submit"
id="submit"
name="login"
class="btn mt-5 btn-lg btn-custom btn-block text-uppercase"
onclick="onClick('div2')"
>
Submit
</button>
</div>
</div>
</div>
</form>
</body>
</html>

<?php
include('config.php');

if(isset($_POST['login']))

{
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
$run=mysqli_query($link,$query);

$row= mysqli_num_rows($run);

if($row <1)
{
?>
<script>
alert('Username or Password not match !!');
window.open('admin.php','_self');
</script>
<?php
}
else
{
$data=mysqli_fetch_assoc($run);
$id=$data['id'];

session_start();

$_SESSION['uid']=$id;
header('location:main.php');



}


}


?>