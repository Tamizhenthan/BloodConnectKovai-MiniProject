<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "bck");
$email = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        if (!empty($email)) {
            $result = mysqli_query($conn, "SELECT name, healthid, status FROM alldetails WHERE email = '$email'");

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['name'];
                $health = $row['healthid'];
                $status = $row['status'];
            } else {
                $name = "No data found.";
            }
        } else {
            $name = "Email not provided.";
        }
    } else {
        $name = "Email key is missing.";
    }

    if (isset($_POST['save1'])) {
        if (!empty($_POST['status'])) {
            $status = 'active';
        } else {
            $status = 'Inactive';
        }

        $sql = "UPDATE `register` SET `status`='$status' WHERE `healthid`='$health'";
        mysqli_query($conn, $sql);

        header('Location: lloginpath.php');
        exit;
    }

    echo json_encode([
        'name' => $name,
        'health' => isset($health) ? $health : '',
        'status' => isset($status) ? $status : '',
    ]);
    exit;
}



if (isset($_POST['logout'])) {
    session_destroy();
}
?>

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
                <input type="text" class="form-control" id="profile-health" name="healthid" readonly >
            </div><br>
            <center>
                <p>Active Status</p>
                <label class="switch">
                <input type="checkbox" id="c1" name="status">
                    <span class="slider"></span>
                </label>
                <br><br><br><br>
                <input type="submit" value="Save" class="button1" name="save1"><br><br><br><br><br><br>
                <a href="index.php"><input type="button" value="Log out" class="button1"></a>
                
            </center>
        </div>
    </form>
</body>
<script>
    var Details = JSON.parse(localStorage.getItem('Details'));
    var email = Details.email;

    document.getElementById('e2').value = email;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', window.location.href, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            document.getElementById('profile-name').value = response.name;
            document.getElementById('profile-health').value = response.health;
            var status=response.status;
            if (status === "active") {
                document.getElementById('c1').checked = true;
            } else {
                document.getElementById('c1').checked = false;
            }
        }
    };
    xhr.send('email=' + email);
</script>
</html>
