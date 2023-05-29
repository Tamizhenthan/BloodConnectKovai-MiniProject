<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="donors.css">
    </head>
    <body>
    <a href="lloginpath.html"> <img src="home.png" width="30" height="30"></a>
        <a href="lbloodbank.html"><h3 style="font-family: arial black;">Blood bank list >></h3></a>
    <center>
        <br>
        <h2  style="font-family: arial black;">Donor Availability Search</h2>
        <br><br>
        <form method="POST">
        <table style="width: 70%;height: 40%;">
            <tr style="height:40px">
                <th colspan="3" style="background-color: rgb(204, 33, 33);font-family: arial black;">Search Donors </th>
            </tr>
            <tr style="height:100px">
                <td>District : Coimbatore</td>
                <td>Region : <select name="region"><option>-Select Your Region-</option><option>North Coimbatore</option><option>South Coimbatore</option><option>Pollachi</option></select></td>
                <td>Blood Group : <select name="bloodgroup"><option>All Blood Group</option><option>A +ve</option><option>A -ve</option><option>B +ve</option><option>B -ve</option><option>O +ve</option><option>O -ve</option><option>AB +ve</option><option>AB -ve</option></select></td>
            </tr>
        </table>
        
        <br>
        <div class="butt">
            <input type="submit" name="button1" value="Search">
        </div>
        </form>
        <br><br>
        <h2 style="font-family: arial black;">Donors List</h2>
        <br>
        <table style="width: 70%;height: 40%;">
            <tr style="height:60px">
                <th style="background-color: rgb(204, 33, 33);font-family: arial black;">Name</th>
                <th style="background-color: rgb(204, 33, 33);font-family: arial black;">Blood Group</th>
                <th style="background-color: rgb(204, 33, 33);font-family: arial black;">Contact Details</th>
                <th style="background-color: rgb(204, 33, 33);font-family: arial black;">Active Status</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root","","bck");
            if(isset($_POST['button1']))
            {
                $region = $_POST['region'];
                $bloodgroup =$_POST['bloodgroup'];

                if($region !== "-Select Your Region-")
                {
                    if($bloodgroup !== "All Blood Group")
                    {
                        
                        $sql = "select * from alldetails where region = '$region' AND bloodgroup = '$bloodgroup'";
            
                        $result = $conn-> query($sql);

                        if($result->num_rows > 0) 
                        {
                            while(($row = $result-> fetch_assoc()))
                            {
                                echo "<tr><td>". $row["name"] ."</td><td>".$row["bloodgroup"]."</td><td>".$row["mobile"]."\r\n".$row["address"]."\r\n".$row["email"]."\r\n".$row["region"]."\r\n"."</td><td>".$row["status"]."</td></tr>"; 
                            }
                            echo "</table>";
                        }
                        else
                        {
                            echo "Sorry , We have no donors on your requirements. But you can always check on Blood Banks By contacting them . click on blood bank details on top right";
                        }
                        $conn-> close();
                    }
                    else
                    {
                        $sql = "select * from alldetails where region = '$region'";
            
                        $result = $conn-> query($sql);

                        if($result->num_rows > 0) 
                        {
                            while(($row = $result-> fetch_assoc()))
                            {
                                echo "<tr><td>". $row["name"] ."</td><td>".$row["bloodgroup"]."</td><td>".$row["mobile"]."\r\n".$row["address"]."\r\n".$row["email"]."\r\n".$row["region"]."</td><td>".$row["status"]."</td></tr>"; 
                            }
                            echo "</table>";
                        }
                        else
                        {
                            echo "0 result";
                        }
                        $conn-> close();
                    }
                        
                    
                }
                else
                {
                    echo" <script> alert('Select a Region') </script>";
                }    
            } 
            ?>
        </table>
    </center>
    </body>
</html>