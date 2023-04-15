function validate() {
    let username = document.forms["login"]["name"].value;
    let pass = document.forms["login"]["wordpass"].value;
    if ((username == "") || (pass == "")) {
      alert("Email and Password must be filled out");
      return false;
    }
    else if(pass.length <= 7){
      alert("Password minimal 8 karakter");
      return false;
    }
  }