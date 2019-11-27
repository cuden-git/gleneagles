function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  var banner = document.getElementById(
    "cb-featured-cookie-disclaimer__cookieConsent"
  );
  banner.style.display = "none";
}

export default function approveCookie() {
  setCookie("CookieDisclaimer", "Set", 14);
}
