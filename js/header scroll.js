window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("header").style.top = "0";
  } else {
    document.getElementById("header").style.top = "32px";
  }
}
