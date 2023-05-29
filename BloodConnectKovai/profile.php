<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <br><br><br><br><br><br>
    <form method="post">
        <div class="box">
            <center>
                <div><h1>PROFILE</h1></div>
            </center>
            <div>
                <label class="label1">Name</label><br><br>
                <input type="text" class="form-control" id="profile-name" name="name" readonly>
            </div><br>
            <div>
                <label class="label1">E-mail</label><br><br>
                <input type="text" class="form-control" id="e2" name="email" readonly>
            </div><br>
            <div>
                <label class="label1">Health ID</label><br><br>
                <input type="text" class="form-control" id="profile-health" name="healthid" readonly>
            </div><br>
            <center>
                <p>Active Status</p>
                <label class="switch">
                    <input type="checkbox" id="c1" name="status" checked <?php echo isset($_POST['status']) && $_POST['status'] === 'active' ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                </label>
                <br><br><br><br>
                <input type="submit" value="Save" class="button1"  name="save1"><br><br><br><br><br><br>
                <a href="logout.php">LOG OUT</a>
            </center>
        </div>
    </form>
</body>
<script>
    var userDetails = JSON.parse(localStorage.getItem('userDetails'));

    document.getElementById('profile-name').value = userDetails.name;
    document.getElementById('profile-health').value = userDetails.health;

    var user = JSON.parse(localStorage.getItem('user'));

    document.getElementById('e2').value = user.email;

  
    
</script>
<?php
$conn = mysqli_connect("localhost", "root", "", "bck");

if (isset($_POST['save1'])) {
    $healthid = $_POST['healthid'];

    if (!empty($_POST['status'])) {
        $status = 'active';
    } else {
        $status = 'Inactive';
    }

    $sql = "UPDATE `register` SET `status`='$status' WHERE `healthid`='$healthid'";
    mysqli_query($conn, $sql);
    header('Location: lloginpath.html');
}
?>

<script>
    var status = "<?php echo $status; ?>";
    var checkbox = document.getElementById('c1');

    if (status === 'active') {
        checkbox.checked = true;
    } else {
        checkbox.checked = false;
    }
</script>

</html>






