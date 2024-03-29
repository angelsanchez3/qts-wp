/*<![CDATA[*/
function setREVStartSize(e) {
  try {
    var i = jQuery(window).width(),
      t = 9999,
      r = 0,
      n = 0,
      l = 0,
      f = 0,
      s = 0,
      h = 0;
    if (
      (e.responsiveLevels &&
        (jQuery.each(e.responsiveLevels, function (e, f) {
          f > i && ((t = r = f), (l = e)), i > f && f > r && ((r = f), (n = e));
        }),
        t > r && (l = n)),
      (f = e.gridheight[l] || e.gridheight[0] || e.gridheight),
      (s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth),
      (h = i / s),
      (h = h > 1 ? 1 : h),
      (f = Math.round(h * f)),
      "fullscreen" == e.sliderLayout)
    ) {
      var u = (e.c.width(), jQuery(window).height());
      if (void 0 != e.fullScreenOffsetContainer) {
        var c = e.fullScreenOffsetContainer.split(",");
        if (c)
          jQuery.each(c, function (e, i) {
            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u;
          }),
            e.fullScreenOffset.split("%").length > 1 &&
            void 0 != e.fullScreenOffset &&
            e.fullScreenOffset.length > 0
              ? (u -=
                  (jQuery(window).height() * parseInt(e.fullScreenOffset, 0)) /
                  100)
              : void 0 != e.fullScreenOffset &&
                e.fullScreenOffset.length > 0 &&
                (u -= parseInt(e.fullScreenOffset, 0));
      }
      f = u;
    } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
    e.c.closest(".rev_slider_wrapper").css({
      height: f,
    });
  } catch (d) {
    console.log("Failure at Presize of Slider:" + d);
  }
} /*]]>*/

/*<![CDATA[*/
function revslider_showDoubleJqueryError(sliderID) {
  var errorMessage =
    "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
  errorMessage +=
    "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
  errorMessage +=
    "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
  errorMessage +=
    "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
  errorMessage =
    "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
  jQuery(sliderID).show().html(errorMessage);
} /*]]>*/

/*<![CDATA[*/
var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
var htmlDivCss = "";
if (htmlDiv) {
  htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
  var htmlDiv = document.createElement("div");
  htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
  document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
} /*]]>*/

/*<![CDATA[*/
var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
var htmlDivCss = "";
if (htmlDiv) {
  htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
  var htmlDiv = document.createElement("div");
  htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
  document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
} /*]]>*/

setREVStartSize({
  c: jQuery("#rev_slider_1_1"),
  gridwidth: [1180],
  gridheight: [725],
  sliderLayout: "auto",
});
var revapi1,
  tpj = jQuery;
tpj(document).ready(function () {
  if (tpj("#rev_slider_1_1").revolution == undefined) {
    revslider_showDoubleJqueryError("#rev_slider_1_1");
  } else {
    revapi1 = tpj("#rev_slider_1_1")
      .show()
      .revolution({
        sliderType: "standard",
        jsFileLocation:
          "//demo.goodlayers.com/realfactory/wp-content/plugins/revslider/public/assets/js/",
        sliderLayout: "auto",
        dottedOverlay: "none",
        delay: 6000,
        navigation: {
          keyboardNavigation: "off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation: "off",
          mouseScrollReverse: "default",
          onHoverStop: "off",
          arrows: {
            style: "uranus",
            enable: true,
            // hide_onmobile: false,
            hide_under: 767,
            hide_onleave: true,
            tmp: "",
            left: {
              h_align: "left",
              v_align: "center",
              h_offset: 20,
              v_offset: 0,
            },
            right: {
              h_align: "right",
              v_align: "center",
              h_offset: 20,
              v_offset: 0,
            },
          },
          bullets: {
            enable: true,
            style: "hermes",
            hide_onleave: false,
            hide_over: 767,
            h_align: "center",
            v_align: "bottom",
            h_offset: 0,
            v_offset: 20,
            space: 5
          }
        },
        visibilityLevels: [1240, 1024, 778, 480],
        gridwidth: 1180,
        gridheight: 725,
        lazyType: "none",
        shadow: 0,
        spinner: "off",
        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
          simplifyAll: "off",
          nextSlideOnWindowFocus: "off",
          disableFocusListener: false,
        },
      });
  }
});

/*<![CDATA[*/
var htmlDivCss = unescape(
  "%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A"
);
var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
if (htmlDiv) {
  htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
  var htmlDiv = document.createElement("div");
  htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
  document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
} /*]]>*/