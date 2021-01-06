function validate() {
    
    var agreechk = document.getElementById("chckbox");
    if(agreechk.checked){

        //name validation
        var name=document.getElementById("name").value;
        var letters = /[A-Za-z][A-Za-z]*/;
        if(name=="") {
            document.getElementById("nameErr").style.color="red";
            document.getElementById("nameErr").innerHTML="Please provide your name!";
        }
        else if(!name.match(letters))
        {
            document.getElementById("nameErr").style.color="red";
            document.getElementById("nameErr").innerHTML= "Please provide alphabet characters only!";
        }       
        
        //dob validation
        var dob=document.getElementById("dob").value;
        if(dob == "" ) {
            document.getElementById("dobErr").style.color="red";
            document.getElementById("dobErr").innerHTML="Please provide your dob!";
        }

        //gender validation
        var gen=document.getElementById("gen").value;
        x=0;
        if(gen=="male" || gen=="female" || gen=="others" ) 
            x++;
        if(x==0){
            document.getElementById("genderErr").style.color="red";
            document.getElementById("genderErr").innerHTML="Please Select Gender!";
        }

        //Mobile Number Validation
        var mbno=document.getElementById("mbno").value;
        if(mbno == "" ) {
            document.getElementById("mnoErr").style.color="red";
            document.getElementById("mnoErr").innerHTML="Please provide your Contact no.!";
        }
        else if(isNaN(mbno))
        {
            document.getElementById("mnoErr").style.color="red";
            document.getElementById("mnoErr").innerHTML="Plz enter digit";
        }
        else if(mbno.length!=10){
            document.getElementById("mnoErr").style.color="red";
            document.getElementById("mnoErr").innerHTML="mob no. must be of 10 digits";
        }

        //email validation
        var mailformat= /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+.[a-zA-Z]$/;
        var email=document.getElementById("email").value;
        if(email=="") 
        {
            document.getElementById("emailErr").style.color="red";
            document.getElementById("emailErr").innerHTML= "Please provide your Email Address!";
        }
        else if(!email.match(mailformat))
        {
            document.getElementById("emailErr").style.color="red";
            document.getElementById("emailErr").innerHTML= "Please provide Valid Email Address!";
        }

        // GuardianContact validation
        var gmbno=document.getElementById("gmbno").value;
        if(gmbno == "" ) 
        {
                document.getElementById("gmnoErr").innerHTML= "Please provide Contact no.!!";
                document.getElementById("gmnoErr").style.color="red";
        }
        else if(isNaN(gmbno))
        {
               document.getElementById("gmnoErr").innerHTML= "Please enter digit!!";               
               document.getElementById("gmnoErr").style.color="red";

        }
        else if(gmbno.length!=10)
        {
                document.getElementById("gmnoErr").innerHTML="mob no. must be of 10 digits";
                document.getElementById("gmnoErr").style.color="red";

        }

        //Branch validation
        var branch=document.getElementById("branch1").value; 
        if(branch== -1)
        {
                document.getElementById("branchErr").innerHTML= "Please select your branch!!";
                document.getElementById("branchErr").style.color="red";
        }

        //Semester validation
        var sem=document.getElementById("sem1").value; 
        if(sem== -1)
        {
               document.getElementById("semErr").innerHTML= "Please select your Semester!!";
               document.getElementById("semErr").style.color="red"; 
        }

      
    }

    else
    {
        alert("Please agree Terms & Conditions");
    }    
}