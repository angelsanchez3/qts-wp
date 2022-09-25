//Random Fix
window.onload = (function () {
    var modal = document.getElementById("myModal");
    if (modal !== null) {
        modal.style.display = "block";
        setTimeout(function () {
          modal.style.display = "none";
        }, 100);
    }
    selectNav();

    
  })(
    window.addEventListener("load", function(){
      selectBackground();
    })
  );
  
  function selectNav() {
    var url = window.location.pathname;
    var element = undefined;
    // var homeElement = document.getElementById("h-nav");
    // homeElement.classList.remove("current-menu-item");
    if (url == "/about/") {
      element = document.getElementById("about-nav");
    }
    else if (url.includes("/services/")) {
      element = document.getElementById("services-nav");
    }
    else if (url == "/information/") {
      element = document.getElementById("info-nav");
    }
    else if (url.includes("/news/")) {
      element = document.getElementById("news-nav");
    }
    else if (url == "/contact/") {
      element = document.getElementById("cont-nav");
    }
    else {
      element = document.getElementById("h-nav");
    }
    // var homeElement = document.getElementById("h-nav");
    // homeElement.classList.remove("current-menu-item");
    element.classList.add("current-menu-item");
  }
  
  function selectBackground() {
    var url = window.location.pathname;
    var element = document.getElementsByClassName("realfactory-page-title-wrap")[0];
    if (url == "/services/logistics/") {
      element.setAttribute("style", "background-image:url(../../wp-content/themes/qts-wp/images/services-headers/cab_log_opt2.png)")
    }
    else if (url == "/services/assembling/") {
      element.setAttribute("style", "background-image:url(../../wp-content/themes/qts-wp/images/services-headers/cab_mon_opt2.png)")
    }
    else if (url == "/services/partners/") {
      element.setAttribute("style", "background-image:url(../../wp-content/themes/qts-wp/images/services-headers/cab_part_opt2.png)")
    }
    else {
        if (url != "/") {
            element.setAttribute(
              "style",
              "background-image:url(../../wp-content/themes/qts-wp/images/page-title-background.jpg)"
            );
        }
    }
  }