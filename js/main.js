var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
    // When someone clicks on a close button
    close[i].onclick = function(){

        // Get the parent of <span class="closebtn"> (<div class="alert">)
        var div = this.parentElement;

        // Set the opacity of div to 0 (transparent)
        div.style.opacity = "0";

        // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}

const alertClose = setTimeout(closeAlert, 5000);

function closeAlert() {
  document.getElementById("close_alert").style.display="none"
}

function toggleNavMenu() {
    var x = document.getElementById("nav_menu");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

window.onload = openGallery;
function openGallery () {
    $.ajax({ url: 'gallery.php',
        data: {function2call: 'getGalleryList'},
        type: 'get',
        success: function(output) {
            console.log(output);
        }
    });
}