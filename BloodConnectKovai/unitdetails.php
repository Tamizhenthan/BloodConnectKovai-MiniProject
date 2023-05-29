<!DOCTYPE html>
<html>
    <head>
    
        <link rel="stylesheet" href="donors.css">
    </head>
    <body>
    <a href="lloginpath.html"> <img src="home.png" width="30" height="30"></a>
        
    <center>
        <br>
        <h2  style="font-family: arial black;">Units Available</h2>
        <br><br>
        <form method="POST">
        <table style="width: 70%;height: 40%;">
            <tr style="height:40px">
                <th colspan="3" style="background-color: rgb(204, 33, 33);font-family: arial black;"><div>
                <input style="border-color: grey;outline: none;text-align:center;font-size:24px;background:red;color:white" type="text" id="name" name="name" readonly>
            </div><br> </th>
            </tr>
            <tr style="height:100px">
                <td>Blood Group</td>
                <td>Units Available</td>
            </tr>
            <tr>
                <td>A +ve</td>
                <td><input style="text-align:center" type="text" id="ap" name="ap"  readonly></td>
            </tr>
            <tr>
                <td>A -ve</td>
                <td><input style="text-align:center" type="text" id="an" name="an" readonly></td>
            </tr>
            <tr>
                <td>B +ve</td>
                <td><input style="text-align:center" type="text" id="bp" name="bp" readonly></td>
            </tr>
            <tr>
                <td>B -ve</td>
                <td><input style="text-align:center" type="text" id="bn" name="bn" readonly></td>
            </tr>
            <tr>
                <td>AB +ve</td>
                <td><input style="text-align:center" type="text" id="abp" name="abp" readonly></td>
            </tr>
            <tr>
                <td>AB -ve</td>
                <td><input  style="text-align:center" type="text" id="abn" name="abn" readonly></td>
            </tr>
            <tr>
                <td>O +ve</td>
                <td><input style="text-align:center" type="text" id="op" name="op" readonly></td>
            </tr>
            <tr>
                <td>O -ve</td>
                <td><input style="text-align:center" type="text" id="on" name="on" readonly></td>
            </tr>

            <?php
    
    $a = $_GET['bbid'];
    $b = $_GET['b'];

   
    $conn = mysqli_connect("localhost", "root", "", "bck");

 
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $stmt = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'A +ve'");
    mysqli_stmt_bind_param($stmt, "s", $a);

  
    mysqli_stmt_execute($stmt);


    $result = mysqli_stmt_get_result($stmt);

    
    if (mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);
        $unit = $row['unit'];
    } else {
        
        $unit = "No data found";
    }

   
    mysqli_stmt_close($stmt);

    $stmt2 = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'A -ve'");
    mysqli_stmt_bind_param($stmt2, "s", $a);

  
    mysqli_stmt_execute($stmt2);


    $result2 = mysqli_stmt_get_result($stmt2);

    
    if (mysqli_num_rows($result2) > 0) {
        
        $row = mysqli_fetch_assoc($result2);
        $unit2 = $row['unit'];
    } else {
        
        $unit2 = "No data found";
    }

   
    mysqli_stmt_close($stmt2);

   

    $stmt3 = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'B +ve'");
    mysqli_stmt_bind_param($stmt3, "s", $a);

  
    mysqli_stmt_execute($stmt3);


    $result3 = mysqli_stmt_get_result($stmt3);

    
    if (mysqli_num_rows($result3) > 0) {
        
        $row = mysqli_fetch_assoc($result3);
        $unit3 = $row['unit'];
    } else {
        
        $unit3 = "No data found";
    }

   
    mysqli_stmt_close($stmt3);

    $stmt4 = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'B -ve'");
    mysqli_stmt_bind_param($stmt4, "s", $a);

  
    mysqli_stmt_execute($stmt4);


    $result4 = mysqli_stmt_get_result($stmt4);

    
    if (mysqli_num_rows($result4) > 0) {
        
        $row = mysqli_fetch_assoc($result4);
        $unit4 = $row['unit'];
    } else {
        
        $unit4 = "No data found";
    }

   
    mysqli_stmt_close($stmt4);

    $stmt5 = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'AB +ve'");
    mysqli_stmt_bind_param($stmt5, "s", $a);

  
    mysqli_stmt_execute($stmt5);


    $result5 = mysqli_stmt_get_result($stmt5);

    
    if (mysqli_num_rows($result5) > 0) {
        
        $row = mysqli_fetch_assoc($result5);
        $unit5 = $row['unit'];
    } else {
        
        $unit5 = "No data found";
    }

   
    mysqli_stmt_close($stmt5);

    $stmt6 = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'AB -ve'");
    mysqli_stmt_bind_param($stmt6, "s", $a);

  
    mysqli_stmt_execute($stmt6);


    $result6 = mysqli_stmt_get_result($stmt6);

    
    if (mysqli_num_rows($result6) > 0) {
        
        $row = mysqli_fetch_assoc($result6);
        $unit6 = $row['unit'];
    } else {
        
        $unit6 = "No data found";
    }

   
    mysqli_stmt_close($stmt6);

    $stmt7 = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'O +ve'");
    mysqli_stmt_bind_param($stmt7, "s", $a);

  
    mysqli_stmt_execute($stmt7);


    $result7 = mysqli_stmt_get_result($stmt7);

    
    if (mysqli_num_rows($result7) > 0) {
        
        $row = mysqli_fetch_assoc($result7);
        $unit7 = $row['unit'];
    } else {
        
        $unit7 = "No data found";
    }

   
    mysqli_stmt_close($stmt7);

    $stmt8 = mysqli_prepare($conn, "SELECT unit FROM bloodbank WHERE bbid = ? AND bloodgroup = 'O -ve'");
    mysqli_stmt_bind_param($stmt8, "s", $a);

  
    mysqli_stmt_execute($stmt8);


    $result8 = mysqli_stmt_get_result($stmt8);

    
    if (mysqli_num_rows($result8) > 0) {
        
        $row = mysqli_fetch_assoc($result8);
        $unit8 = $row['unit'];
    } else {
        
        $unit8 = "No data found";
    }

   
    mysqli_stmt_close($stmt8);

    mysqli_close($conn);
?>
            
            <script>

                 var myVariablev = "<?php echo $b; ?>"; 
                 document.getElementById('name').value = myVariablev;
                
                 var myVariable = "<?php echo $unit; ?>"; 
                 document.getElementById('ap').value = myVariable;

                 var myVariable2 = "<?php echo $unit2; ?>"; 
                 document.getElementById('an').value = myVariable2;

                 var myVariable3 = "<?php echo $unit3; ?>"; 
                 document.getElementById('bp').value = myVariable3;

                 var myVariable4 = "<?php echo $unit4; ?>"; 
                 document.getElementById('bn').value = myVariable4;

                 var myVariable5 = "<?php echo $unit5; ?>"; 
                 document.getElementById('abp').value = myVariable5;

                 var myVariable6 = "<?php echo $unit6; ?>"; 
                 document.getElementById('abn').value = myVariable6;

                 var myVariable7 = "<?php echo $unit7; ?>"; 
                 document.getElementById('op').value = myVariable7;

                 var myVariable8 = "<?php echo $unit8; ?>"; 
                 document.getElementById('on').value = myVariable8;

                 function admin()
        {
            
            
            var bbid = '<?php echo $a; ?>';
            var b = '<?php echo $b; ?>';
            window.location.href = 'adminlogin.php?bbid=' + bbid + '&b=' + b;
       
            
        }

            </script>
        </table>
        <br>
        <input type="button" value="Admin Panel" onclick="admin()">
    </div>
    </center>
    </body>
</html>