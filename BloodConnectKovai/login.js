function check(){
    var a = document.getElementById('e1').value;
    var b = document.getElementById('p1').value;
    
    const emailValue = e1.value.trim();
    const RegExp = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;

    if(a == "" || b == "")
    {
        alert("Fill all fields");
        location.reload();
    }
    
    else if (emailValue.match(RegExp)) {
        return false;
     } else {
        alert("Invalid Email Format");
        document.getElementById("e1").value="";
    }
}