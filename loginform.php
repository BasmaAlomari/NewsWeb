
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php session_start();?>
    <form  class=" w-50 mt-5 align-items-center  border border-primary"  action="login.php" method="POST">
    <div class="mb-3 row mt-5">
    <label for="staticUsername" class="col-sm-2 col-form-label w-25 ps-5">UserName</label>
    <div class="col-sm-10 w-25 ">
      <input type="text"  class="form-control" id="staticUsername"  name="username">
    </div>
  </div>
  <div class="mb-3 row mt-5 ">
    <label for="inputPassword" class="col-sm-2 col-form-label w-25 ps-5">Password</label>
    <div class="col-sm-10 w-25">
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
  </div>
  <div class="mt-5 mb-3 text-center">
    <input  style='background:blue'class="btn btn-primary " name="submit" type="submit" value="Login "><br>
 </div>
 <div>
 <?php
if (isset($_SESSION['login_error'])) {
    echo $_SESSION['login_error'];
    unset($_SESSION['login_error']); 
}
?>

 </div>
 
  </form>
</body>
</html>
