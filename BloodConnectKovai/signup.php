<!DOCTYPE html>
<html>
    <head>
        <script src="signup.js"></script>
        <title>Donor - Sign Up</title>
        <link rel="stylesheet"
        href="signup.css">
        <link rel="icon" type="image/jpg" href="home.png">
    </head>
    <body>
      <a href="index.php"><img src="home.png"></a>
        <center>
            <br>
            <div class="heading">
                    <h2>Signup to be a new donor</h2>
            </div>
            <br><br>
            <form id="form1" method="post">
            <div class="user-input-wrp">
                <br/>
                <input type="text" class="inputText" id="t1" name="name" required/>
                <span class="floating-label">Name</span>
              </div><br><br>
              <div class="user-input-wrp">
                <br/>
                <input type="email" class="inputText" id="t2" name="email" required/>
                <span class="floating-label">Email</span>
              </div><br><br>
              <div class="user-input-wrp">
                <br/>
                <input type="text" class="inputText" id="t10" name="mobile" minlength="10" maxlength="10" required/>
                <span class="floating-label">Mobile Number</span>
              </div><br><br>
              <div class="user-input-wrp">
                <br/>
                <input type="password" class="inputText" id="t3" name="password" required/>
                <span class="floating-label">Create Password</span>
              </div><br><br>
              <div class="user-input-wrp">
                <br/>
                <input type="password" class="inputText" id="t4" name="repassword" required/>
                <span class="floating-label">Re-enter Password</span>
              </div><br><br>
            <br><br>
                <input type="submit" value="Sign Up" class="button1" name="sign_Btn" onclick="check()">
            </form>
              <br><br><br><br><br><br>
                <h3 style="color: aliceblue;font-family:'Arial Black' ;">Already have an account, Login</h3>
                <a href="login.php">Login</a><br><br><br><br><br><br><br><br><br><br><br>
        </center>
    </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['sign_Btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];

    $select = mysqli_query($conn, "SELECT * FROM bck.signup WHERE email = '$email' AND password = '$password'") or die('query failed');
    $select2 = mysqli_query($conn, "SELECT * FROM bck.signup WHERE mobile = '$mobile' ") or die('query failed');
    if(mysqli_num_rows($select) > 0){
       echo" <script> alert('user already exist') </script>";
    }
    else if(mysqli_num_rows($select2) > 0){
      echo" <script> alert('Mobile Number already in use') </script>";
   }
    else if($password==$repassword)
    {
      $query = "insert into bck.signup(name,email,mobile,password) values('$name','$email','$mobile','$password')";
      header('Location: registration.php');
      $run = mysqli_query($conn,$query) or die(mysqli_error());
    }
    else{

      echo" <script> alert('Password Mismatch') </script>";
      
    }    
}
?>
<script>
    document.getElementById('form1').addEventListener('submit', function(event) {
    
    var email = document.getElementById('t2').value;
    var mobile = document.getElementById('t10').value;
    var name = document.getElementById('t1').value;

    var Details = {
      email: email,
      mobile: mobile,
      name: name
    };
    localStorage.setItem('Details', JSON.stringify(Details));
  });
</script>
