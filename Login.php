<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/Login.css">
<script src="js/bootstrap.min.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first" style="margin: 50px 50px 50px 50px;">
      <h1>LOGIN</h1>
    </div>

    <form action="CheckLogin.php" method="post">
      <input type="text"  class="fadeIn second" name="Username" placeholder="login">
      <input type="password"  class="fadeIn third" name="Password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>
