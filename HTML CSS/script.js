function show1() { //show details of 1st purchase in order history
  var x = document.getElementById("games-ex2");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
}
function hide1() {  //hide details of 1st purchase in order history
  var x = document.getElementById("games-ex2");
  if (x.style.display !== "none") {
    x.style.display = "none";
  }
}
function show2() { //show details of 2nd purchase in order history
  var x = document.getElementById("games-ex3");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
}
function hide2() { //hide details of 2nd purchase in order history
  var x = document.getElementById("games-ex3");
  if (x.style.display !== "none") {
    x.style.display = "none";
  }
}
function validateRegisterForm() {
  var x = document.forms["register-form"]["username"].value;
  var y = document.forms["register-form"]["email"].value;
  var z = document.forms["register-form"]["password"].value;
  var j = document.forms["register-form"]["confirmemail"].value;
  var f = document.forms["register-form"]["confirmpwd"].value;
  var reg = /^([A-Za-z0-9_\-\.]){1,}\@ ([A-Za-z0-9_\-\.]){1,}\.([A-Za-z] {2,4})$/;
  if (x == "" || y == "" || z == "" || j == "" || f == "") {
    alert("Everything must be filled in!");
    return false;
  }
  else if (x.length < 4) {
    alert("Name is too short!");
    return false;
  }
  else if (y.length < 10) {
    alert("Email is too short!");
    return false;
  }
  else if (z.length < 6) {
    alert("Password is too short!");
    return false;
  }
  else if (f != z) {
    alert("Passwords are not matching!")
    return false;
  }
  else if (j != y) {
    alert("Emails are not matching!")
    return false;
  }
  if (y.indexOf("@") <= 0) {
    alert("Invalid position of @")
    return false;
  }
  if (reg.test(y) == false) {
    alert("Invalid email address. Please enter a valid one!")
    return false;
  }
}

function validateLoginForm() {
  var username = document.forms["login-form"]["username"].value;
  var password = document.forms["login-form"]["password"].value;

  if (username == "" || password == "") {
    alert("Please enter username and password");
    return false;
  }
}

function loadRE2Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("re2-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/resident-evil-info.txt", true);
  xhttp.send();
}

function loadRDR2Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("rdr2-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/rdr2-info.txt", true);
  xhttp.send();
}

function loadBF5Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bf5-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/bf5-info.txt", true);
  xhttp.send();
}

function loadFH4Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("fh4-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/fh4-info.txt", true);
  xhttp.send();
}

function loadF76Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("f76-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/f76-info.txt", true);
  xhttp.send();
}

function loadD2Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("d2-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/d2-info.txt", true);
  xhttp.send();
}

function loadMK11Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mk11-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/mk11-info.txt", true);
  xhttp.send();
}

function loadANTHDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("anth-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/anth-info.txt", true);
  xhttp.send();
}

function loadFCNDDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("fcnd-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/fcnd-info.txt", true);
  xhttp.send();
}

function loadDGDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dg-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/dg-info.txt", true);
  xhttp.send();
}

function loadSKYRIMDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("skyrim-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/skyrim-info.txt", true);
  xhttp.send();
}

function loadGTA5Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("gta5-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/gta5-info.txt", true);
  xhttp.send();
}

function loadW3Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("w3-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/w3-info.txt", true);
  xhttp.send();
}

function loadJC4Doc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("jc4-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/jc4-info.txt", true);
  xhttp.send();
}

function loadNBADoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("nba-info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_infos/nba-info.txt", true);
  xhttp.send();
}

