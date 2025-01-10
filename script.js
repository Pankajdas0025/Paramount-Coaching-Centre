function Toggleopen(){
    let a=document.querySelector(".Mobile-naviteam");
    a.style.display="block";
 
}
function Toggleclose(){
    let a=document.querySelector(".Mobile-naviteam");
    a.style.display="none";
 
}function myform(){

    var a=document.getElementById("name").value;
    var b=document.getElementById("email").value;
    var c=document.getElementById("phone").value;
    var d=document.getElementById("Msg").value;

    if(a==""||b==""||c==""||d=="")
    {
        alert("All fields are required !!");
    
     
    }
    
    else if(a.match(/[0-1]/))
        {
            alert("Numbers are not allowed to write name");
            
        }
        
        else if(c.length<10||c.match(/[a-z]/))
    {
        alert("Enter a valid mobile number");
       
    }
    else{
        var Objtext={
            Name:a,
            Email:b,
            Mobile:c,
            Message:d,
        }
var StrText=JSON.stringify(Objtext);
localStorage.setItem(b,StrText);
alert("✅Your Data submitted sucessfully !");
    }
        
    
}localStorage.setItem(b,StrText);