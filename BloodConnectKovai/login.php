<!DOCTYPE html>
<html>
    <head>
        <title>Donor - Login
        </title>
        <link rel="stylesheet"
        href="login.css">
        <link rel="icon" type="image/jpg" href="home.png">
        <script src="login.js"></script>
    </head>
    <body>
        <a href="index.html"><img src="home.png"></a>
        <center>
            <br><br><br><br><br><br><br>
            <div class="heading">
                    <h2>Welcome, Donor</h2>
            </div>
            <form method="post" id="form1">
            <br><br>
            <div class="user-input-wrp">
                <br/>
                <input type="text" spellcheck="false"  class="inputText" id="e1" required  name="email"/>
                <span class="floating-label">Email</span>
                <span id="e2"></span>
              </div><br><br>
              <div class="user-input-wrp">
                <br/>
                <input type="password" class="inputText" id="p1" required name="password"/>
                <span class="floating-label">Password</span>
              </div><br><br>
            <br><br><br>
                <input type="submit" value="Login" class="button1" onclick="check()" name="login_Btn">
            </form>
                <br><br><br><br><br><br>
                <h3 style="color: aliceblue;font-family:'Arial Black' ;">Don't have an account, signup</h3>
                <a href="signup.php">Signup</a><br>
            <br><br><br><br>
            <br><br><br><br>
            <br>
            
        </center>
    </body>
</html>
<?php
session_start();
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_Btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $result = mysqli_query($conn,"SELECT * FROM bck.signup WHERE email = '$email' AND password = '$password'")or die('query failed');
    
    if(mysqli_num_rows($result) > 0){
        header('location:lloginpath.html');
     }
     else{
        echo "<script>
          alert('User not found'); 
            </script>";
     }

}
?>
<script>
document.getElementById('form1').addEventListener('submit', function(event) {
    
    var email = document.getElementById('e1').value;


    var Details = {
      email: email
    };
    localStorage.setItem('Details', JSON.stringify(Details));
  });
</script> 