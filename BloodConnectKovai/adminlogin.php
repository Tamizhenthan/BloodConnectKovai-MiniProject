<!DOCTYPE html>
<html>
<head>
    <title>Login Popup</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
<?php
$a = $_GET['bbid'];
$b = $_GET['b'];

$conn = mysqli_connect("localhost", "root", "", "bck");
if (isset($_POST['log'])) {
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM bloodbank WHERE bbid = '$a' AND password = '$password'") or die('query failed');
    if (mysqli_num_rows($result) > 0) {
        $var1 = "value1";
        $var2 = "value2";
        header('Location: admin.php?bbid=' . $a . '&b=' . $b);
        
        echo "<script>alert('Welcome');</script>";
    } else {
        echo "<script>alert('User not found');</script>";
    }
}
?>
<center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="outer">
    <div class="inner">
    <h2>Login</h2><br>
    
    <form method="POST">
        <input style="border: none;outline: none;text-align:center;font-size:34px" type="text" id="name" name="name" readonly><br><br>
        <br>
        <input type="text" class="form-control" id="bbid" name="bbid" readonly><br><br>
        <input type="password" class="form-control" name="password" required><br><br>
        <div class="button1">
        <input type="submit" name="log"  value="Login">
</div>
    </form>
    </div>
    </div>
</center>

<script>
    var myVariablev = "<?php echo $b; ?>";
    document.getElementById('name').value = myVariablev;
    var myVariable = "<?php echo $a; ?>";
    document.getElementById('bbid').value = myVariable;
  
</script>
</body>
</html>
