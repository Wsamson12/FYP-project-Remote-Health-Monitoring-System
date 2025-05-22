function Actpassword() {
  var pw = document.getElementById("pw");
  var hide = document.getElementById("hide");
  var show = document.getElementById("show");

  if (pw.type === 'password') {
    pw.type = 'text';
    hide.style.display = "block";
    show.style.display = "none";
  } else {
    pw.type = 'password';
    hide.style.display = "none";
    show.style.display = "block";
  }
}