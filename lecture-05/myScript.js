function myFunction(){
          document.getElementById("demo").innerHTML="Hello Dolly";
          document.getElementById("demo").innerHTML="How are you?";


          var i=0;
          for(i=0;i<=5;++i){
                    document.write("The number is "+i);
                    document.write("<br/>")
          }
}

function displaymessage(){
          alert("hello world!");
}


function product(a,b){
          return a*b;
}

function show_confirm(){
          var r=confirm("Press a button!");
          if(r==true){
                    alert("You pressed ok!");
          }
          else{
                    alert("You pressed cancel!");
          }
}


function show_prompt(){
          var name=prompt("Please enter your name","Harry Potter");
          if(name!=null && name!=""){
                    document.write("<p>Hello, "+name+"! How are you today?</p>");
          }
}




