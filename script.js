function openMenu() {
  var x = document.getElementsByClassName("myLinks");
  var topNav = document.getElementsByClassName("topNav");
  changeDisplay(x, topNav);
}

function changeDisplay(links, topNav) {
  var len = links.length;
  for (var i = 0; i < len; i++) {
    if (links[i].style.display == "block") {
      // closes the sidebar nav
      links[i].style.display = "none";
      changePaddingBot(topNav, "10px");
    } else {
      // opens up the sidebar nav
      links[i].style.display = "block";
      changePaddingBot(topNav, "100vh");
    }
  }
}

function changePaddingBot(cols, size) {
  var len = cols.length;
  for (var i = 0; i < len; i++) {
    cols[i].style.paddingBottom=size;
  }
}