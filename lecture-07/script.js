var xmlhttp;
if (window.XMLHttpRequest){
          xmlhttp=new XMLHttpRequest();
}
else{
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.open("GET","ajax_info.txt",true);
xmlhttp.send();



xmlhttp.onreadystatechange=function(){
                    if (xmlhttp.readyState==4 && xmlhttp.status==200){
                              document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                    }
          }
xmlhttp.open("GET","ajax_info.txt",true);
xmlhttp.send();



xmlDoc=xmlhttp.responseXML;
txt="";
x=xmlDoc.getElementsByTagName("ARTIST");
for (i=0;i<x.length;i++){
          txt=txt + x[i].childNodes[0].nodeValue + "<br />";
}
document.getElementById("myDiv").innerHTML=txt;



xmlhttp.onreadystatechange=function(){
                    if (xmlhttp.readyState==4 && xmlhttp.status==200){
                              document.getElementById("myDiv").innerHTML=xmlhttp.responseText; }
                    }



function myFunction(){
          loadXMLDoc("ajax_info.txt",function(){
                              if (xmlhttp.readyState==4 &&xmlhttp.status==200){
                                        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                              }
          });
}



$.ajax({
          type: "POST",
          url: "some.php",
          data: { name: "John", location: "Boston" }
          }).done(function( msg ) {
          alert( "Data Saved: " + msg );
});



$.ajax({
          url: "test.html",
          cache: false
          }).done(function( html ) {
          $("#results").append(html);
});



var menuId=$("ul.nav").first().attr("id");
var request = $.ajax({
url: "script.php",
type: "POST",
data: {id : menuId},
dataType: "html"
});
request.done(function(msg) {
          $("#log").html( msg );
});
request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
});