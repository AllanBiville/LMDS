function OpenWhenClick() {
    var x = document.getElementById("nav_id");
    if (x.className === "nav_class") {
      x.className += " responsive";
    } else {
      x.className = "nav_class";
    }
  }