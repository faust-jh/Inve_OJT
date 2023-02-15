function showpass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function showpass2() {
  var x = document.getElementById("companypass");
  var y = document.getElementById("companyconpass");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text"
  } else {
    x.type = "password";
    y.type = "password";
  }
}