document.getElementsByClassName("wrapper")[0].onscroll = function() {myFunction()};

function myFunction() {
  document.getElementById("demo").innerHTML = "You scrolled in div.";
}