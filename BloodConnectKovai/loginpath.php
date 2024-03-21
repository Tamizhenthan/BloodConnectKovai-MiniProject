<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginpath.css">
    <title>BCK</title>
    
  </head>
  <body>
    <center>
    <div class="container">
      <div class="image">
        <img src="Blooddrop.png">
      </div>
      <div class="text">
        <br><br>
        <h1>BLOOD CONNECT KOVAI</h1>
        <br><br>
      </div>
      <div class="image">
        <a href="lprofile.php"><img src="user.png"></a>
        <a href="lprofile.php"><h2>profile</h2></a>
      </div>
    </div>
    <br>
    <div class="slogan">
        <h2>Welcome and Thankyou, You are now a DONOR</h2>
    </div>
    <table>
        <tr>
            <td><div class="num" id="value"></div></td>
        </tr>
        <tr>
            <td><img src="people.png"></td>
        </tr>
    </table>
    <br>
    <div class="bb">
      <br><br>
    <a href="ldonors.php"><button class="button" style="vertical-align:middle"><span>Donor Availability Search </span></button></a>
    <a href="lbloodbank.html"><button class="button" style="vertical-align:middle"><span>Blood Bank List </span></button></a>
    <br><br><br><br>
  </div>
            <br><br>
            <h2>Learn About Blood Donation</h2><br><br>
            <br>
            <div class="containe">
              <div class="imag">
                <video src="stock.mp4" playsinline autoplay muted loop ></video>
              </div>
              <div class="tex">
                <br><br>
                <h3 style="color: rgb(53, 13, 13);"> One blood donation can save upto THREE LIVES</h3>
                <h3 style="color: rgb(53, 13, 13);"> After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</h3>
                <h3 style="color: rgb(53, 13, 13);">Regular blood donation is linked to lower blood pressure and a lower risk for heart attacks.</h3>
                <h3 style="color: rgb(53, 13, 13);"> Prevents Hemochromatosis</h3>
                <br><br>
              </div>
            </div>
            <br>
            <br>
            <div class="w3-container">
              <h2 style="color: rgb(0, 0, 0);">How Donation Works </h2>
            </div>
            
            <div class="w3-content w3-display-container">
            
            <div class="w3-display-container mySlides">
              <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                <h2>Registration</h2>
                <h3>We will sign you in and go over basic eligibility.</h3>
                <h3>You will be asked to show ID, such as your driver license.</h3>
                <h3>You will read some information about donating blood.</h3>
                 </h3>
              </div>
            </div>
            
            <div class="w3-display-container mySlides">
              <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                <h2>Health History</h2>
                <h3>You will answer a few questions about your health history and places you have traveled, during a private and confidential interview.</h3>
                <h3>You will tell us about any prescription and/or over the counter medications that may be in your system.</h3>
                <h3>We will check your temperature, pulse, blood pressure and hemoglobin level. </h3>
              </div>
            </div>
            
            <div class="w3-display-container mySlides">
              <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                <h2>Your Donation</h2>
                <h3>If you are donating whole blood, we will cleanse an area on your arm and insert a brand new sterile needle for the blood draw. </h3>
                <h3>Other types of donations, such as platelets, are made using an apheresis machine which will be connected to both arms.</h3>
                <h3>A whole blood donation takes about 8-10 minutes, during which you will be seated comfortably or lying down.</h3>
              </div>
            </div>

            <div class="w3-display-container mySlides">
              <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                <h2>Refreshment and Recovery</h2>
                <h3>After donating blood, you will have a snack and something to drink in the refreshment area.</h3>
                <h3>You will leave after 10-15 minutes and continue your normal routine.</h3>
                <h3>Enjoy the feeling of accomplishment knowing you are helping to save lives.</h3>
              </div>
            </div>
            
            <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
            
            </div>
            <br><br>
            <div class="contain">
              <div>
                <br><br>
                <h2>About Us</h2>
                  <h3>It is an non-Profitable Website,</h3>
                  <h3>that is mainly created in the </h3>
                  <h3>intension on helping others</h3>
                <br><br>
              </div>
              <div>
                <br><br>
                <h2>Contact Us</h2>
                <h3>bck@gmail.com</h3>
                  <h3>9876543210</h3>
                  <h3>Coimbatore</h3>
                <br><br>
              </div>
              <div class="list1">
                <a href="ldonors.php"><p>Blood Availability</p></a>
                <a href="lbloodbank.html"><p>Blood Bank List</p></a>
              </div>
            </div>
            <br>
            </center>
            <?php
            $conn = mysqli_connect("localhost", "root","","bck");

            $result = mysqli_query($conn, "SELECT * from alldetails");
           
            $n=mysqli_num_rows($result);
            
            ?>
            <script>
              var m = "<?php echo $n; ?>";

            
              var slideIndex = 1;
              showDivs(slideIndex);
              
              function plusDivs(n) {
                showDivs(slideIndex += n);
              }
              
              function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
              }

              function animateValue(obj, start, end, duration) {
              let startTimestamp = null;
              const step = (timestamp) => {
              if (!startTimestamp) startTimestamp = timestamp;
              const progress = Math.min((timestamp - startTimestamp) / duration, 1);
              obj.innerHTML = Math.floor(progress * (end - start) + start);
              if (progress < 1) {
              window.requestAnimationFrame(step);
              }
              };
              window.requestAnimationFrame(step);
              }

              const obj = document.getElementById("value");
              animateValue(obj, 0, m, 2000);
              
              </script>
            
            
  </body>
</html>
