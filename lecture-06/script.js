var myLinkCollection=document.getElementsByTagName("a");
for (i = 0; i < myLinkCollection.length; i++){
          if (myLinkCollection[i].className == "link_class") {
                    myLinkCollection[i].onclick = function() {
                              this.style.backgroundColor = "#f00";
                    }
          }
}



$("a").each(function() {
          if($(this).hasClass("link_class")) {
                    $(this).click (function () {
                              $(this).css("background-color", "#f00");
                    });
          }
});



var myElementCollection = document.getElementsByClassName("intro");
for (i = 0; i < myElementCollection.length; i++) {
          if (myElementCollection[i].className == "link_class") {
                    myElementCollection[i].onclick = function() {
                              this.style.backgroundColor = "#f00";
                    }
          }
}



var myLinkList = document.getElementById("list");
var myFirstLink = myLinkList.childNodes[0].childNodes[0];
alert(myFirstLink.className);
var myLinkList = document.getElementById("list");
var myFirstLink = myLinkList.firstChild.firstChild;
alert(myFirstLink.className);
var myLinkList = document.getElementById("list");
var myFirstLink = myLinkList.firstChild.firstChild.nextSibling.previousSibling;
alert(myFirstLink.className);



var myNewListItem = document.createElement("li");
var myNewLink = document.createElement("a");
var myLinkList = document.getElementById("list");
myLinkList.appendChild(myNewListItem);
myLinkList.lastChild.appendChild(myNewLink);



var myLinkList = document.getElementById("list");
var myRemovedLink = myLinkList.lastChild;
myLinkList.removeChild(myRemovedLink);