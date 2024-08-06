function myFunction() {
    var x = document.getElementById("myTopnav");

    if (x.className === "topnavv") {
      x.className += " responsive";

    } else  {
      x.className = "topnavv";

    }
 }
  function refreshPage(){
    window.location.reload();
}

