function fun2(){
    alert("I have accepted to register as Voluntary Blood Donor. I accept that my details will be available to the Blood Banks and blood banks may contact in case of emergency.");
}

function check(){
    var a = document.getElementById('t1').value;
    var b = document.getElementById('t2').value;
    var c = document.getElementById('t3').value;
    var d = document.getElementById('t4').value;
    var e = document.getElementById('t5').value;
    var f = document.getElementById('t6').value;
    var g = document.getElementById('t7').value;
    var h = document.getElementById('t8').value;
    var i = document.getElementById('t9').checked;
 
    
    
    


    if(a == "" || b == "" || d== "" || f=="" || h=="")
    {
        alert("Fill all fields");
        location.reload();
    }

    else if(t4.value.length !== 10)
    {
        alert("Invalid Mobile Number");
        document.getElementById("t4").value="";
    }

    else if(t8.value.length !== 12)
    {
        alert("Invalid Aadhar Number");
        document.getElementById("t8").value="";
    }
    else if(i == false)
    {
        alert("Agree the Terms & Conditions");
    }
}
