function checkForm(){
          let name=document.getElementById("name").value.trim();
          let email=document.getElementById("email").value.trim();
          let subject=document.getElementById("subject").value.trim();
          let message=document.getElementById("message").value.trim();

          if(name==="" || email==="" || subject==="" || message===""){
                    alert("All fields are required");
                    return false;
          }
          if(!email.includes('@')){
                    alert("Enter valid email");
                    return false;
          }

          alert("Form submitted successfully");
          return true;

}