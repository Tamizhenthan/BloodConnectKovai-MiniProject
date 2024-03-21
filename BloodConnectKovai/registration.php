<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
    
</head>
<body>
    <div class="header">
        <center>
        <h2>DONOR REGISTRATION</h2>
        </center>
    </div>
    <form id="form1" method="POST">
    <div class="outer">
        <div class="inner">
        <div>
            <label>Name</label><br>
            <input type="text" class="form-control" id="t1" name="name"  required>
        </div><br>
        <div>
            <label>Age</label><br>
            <input type="text" class="form-control" id="t2" minlength="2" maxlength="3" name="age" required>
        </div><br>
        <div>
            <label>Gender</label><br>
            <select class="form-control" id="t3" name="gender">
                <option>-select your gender-</option>
                <option>Male</option>
                <option>Female</option>
                <option>Transgender</option>
            </select>
        </div><br>
        <div>
            <label>Mobile no(provide the number same as in signup)</label><br>
            <input type="tel" class="form-control" id="t4" minlength="10" maxlength="10" name="mobile" required>
        </div><br>
        <div>
            <label>Health ID</label><br>
            <input type="text" class="form-control" id="t100" minlength="14" maxlength="14" name="healthid" required>
        </div><br>
        <div>
            <label>Blood Group</label><br>
            <select class="form-control" id="t5" name="bloodgroup">
                <option>-select your blood group-</option>
                <option>AB +ve</option>
                <option>AB -ve</option>
                <option>A +ve</option>
                <option>A -ve</option>
                <option>B +ve</option>
                <option>B -ve</option>
                <option>O +ve</option>
                <option>O -ve</option>
            </select>
        </div><br>
        <div>
            <label>Address</label><br>
            <input type="textarea" class="form-control" id="t6" name="address" required>
        </div><br>
        <div>
            <label>Region</label><br>
            <select class="form-control" id="t7" name="region" >
                <option>-select your region-</option>
                <option>North Coimbatore</option>
                <option>South Coimbatore</option>
                <option>Pollachi</option>
            </select>
        </div><br>
        <div>
            <label>Aadhar no</label><br>
            <input type="text" class="form-control" id="t8" minlength="12" maxlength="12" name="aadharno" required>
        </div>
        <div>
            <input type="checkbox" class="check1" id="t9" required>
            <label>I hereby accept <a  href="#" onclick="fun2()">terms & conditions</a> of registering as a blood donor.</label>
        </div><br>
        <center><input type="submit" value="Save" class="button1" name="save_Btn" onclick="check()" ></center></form>
        </div>
    </div>
</form>

<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['save_Btn'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $health=$_POST['healthid'];
    $bloodgroup=$_POST['bloodgroup'];
    $address=$_POST['address'];
    $region=$_POST['region'];
    $aadharno=$_POST['aadharno'];
    $status="active";

    $select = mysqli_query($conn, "SELECT * FROM bck.register WHERE mobile = '$mobile'") or die('query failed');
    
    if(mysqli_num_rows($select) > 0){
       
       echo" <script> alert('Mobile already in use') </script>";
    }
    else 
    if($gender !== "-select your gender-")
    {
        if($bloodgroup !=="-select your blood group-")
        {
            if($region !=="-select your region-")
            {
                $query = "insert into bck.register (name,age,gender,mobile,healthid,bloodgroup,address,region,aadharno,status) values('$name','$age','$gender','$mobile','$health','$bloodgroup','$address','$region','$aadharno','$status')";
                header("Location: loginpath.php");

                $run = mysqli_query($conn,$query) or die(mysqli_error());
                echo" <script> alert('Thank You ,Now You are A DONOR') </script>";
            }
            else{
                echo" <script> alert('Select Your Region') </script>";
            }
        }
        else
        {
            echo" <script> alert('Select Your Blood Group') </script>";
        }
    }
    else{
        echo" <script> alert('Select Your Gender') </script>";
    }
   
}
?>
    
    <script>
  function fun2() {
    alert("I have accepted to register as a Voluntary Blood Donor. I accept that my details will be available to the Blood Banks, and they may contact me in case of an emergency.");
  }

  function check() {
    var a = document.getElementById('t1').value;
    var b = document.getElementById('t2').value;
    var c = document.getElementById('t3').value;
    var d = document.getElementById('t4').value;
    var e = document.getElementById('t5').value;
    var f = document.getElementById('t6').value;
    var g = document.getElementById('t7').value;
    var h = document.getElementById('t8').value;
    var i = document.getElementById('t9').checked;

    if (a == "" || b == "" || d == "" || f == "" || h == "") {
      alert("Fill all fields");
      return false;
    } else if (t4.value.length !== 10) {
      alert("Invalid Mobile Number");
      document.getElementById("t4").value = "";
      return false;
    } else if (t8.value.length !== 12) {
      alert("Invalid Aadhar Number");
      document.getElementById("t8").value = "";
      return false;
    } else if (i == false) {
      alert("Agree to the Terms & Conditions");
      return false;
    }
    return true;
  }

  document.getElementById('form1').addEventListener('submit', function(event) {
    
    var name = document.getElementById('t1').value;
    var health = document.getElementById('t100').value;


    var userDetails = {
      name: name,
      health: health
    };
    localStorage.setItem('userDetails', JSON.stringify(userDetails));
  });
</script>


</body>
</html>
