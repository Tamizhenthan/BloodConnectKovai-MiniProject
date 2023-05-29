function check(){
    var a=document.getElementById("t3").value;
    var b=document.getElementById("t4").value;
    var c=document.getElementById("t1").value;
    var d=document.getElementById("t2").value;
    const RegExp = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
    const emailValue = t2.value.trim();


    if(a == "" || b == "" || c=="" || d =="")
    {
        alert("Fill all fields");
        location.reload();
    }
    else if(1)
    {
        if (emailValue.match(RegExp)) 
        {
            alert("Account Created");
            return false;
        }
        else
        {
            alert("Invalid Email Format")
            document.getElementById("t2").value="";
        }
        
    }
}
