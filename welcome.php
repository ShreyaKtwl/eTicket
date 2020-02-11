<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

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
    <title>Search</title>
  </head>

  <body> 
      
    <div
      class="d-flex justify-content-center align-items-center login-container"
    >
    <div id=div1>
      <div class="login-form text-center">
        <h4 class="font-weight-light">Where do you want to go?</h4>
        <p></p>

<!-- 
        <div class="form-group">
            <input
              type="search"
              class="form-control rounded-pill form-control-lg"
              placeholder="Pickup"
              id= "pickup"
            />
        </div> -->

        <div class="form-group">
            <label for="sel1">Pickup</label>
            <select class="form-control rounded-pill form-control-lg" id="sel1">
              <option>Kathmandu</option>
              <option>Pokhara</option>
              <option>Dharan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sel2">Destination</label>
            <select class="form-control rounded-pill form-control-lg" id="sel1">
                <option>Kathmandu</option>
                <option>Pokhara</option>
                <option>Dharan</option>
            </select>
        </div>
        
        <div class="forgot-link form-group d-flex justify-content-between align-items-center">
        </div>

        <button type="search" value="Search" id="submit" class="btn mt-5 btn-lg btn-custom btn-block text-uppercase" onclick="onClick('div2')">Search</button>
    
        </div>
      </div>
    </div>


    <script>  
    function onClick(param_div_id){
        document.getElementById("div2").style.display = 'none';
        document.getElementById('div1').innerHTML = document.getElementById(param_div_id).innerHTML;
    }
    </script>

  </body>
</html>
