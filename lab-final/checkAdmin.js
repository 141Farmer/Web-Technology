function checkAdmin(){
          let username=document.getElementById("username").value;
          let password=document.getElementById("password").value;

          if(username==="" || password===""){
                    alert("All fields are required");
                    return false;
          }
          if(username==="admin" && password==="123456"){
                    alert("login successful");
                    return true;
          }

          alert("Wrong information");
          return false;

}