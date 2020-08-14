function chkFname() {

  var firstName = document.getElementById("first_name");
  var form_Fname = firstName.value.search(/^[a-zA-Z]{1,15}$/);  //search for value containing upper or lowercase letters, and can be 1-15 characters in length.

  if (form_Fname != 0) {  //if search is not found, alert
    alert("First name should contain only letters.");
    firstName.focus();  
    firstName.select();
    return false;
  } else  //if search is found
    return true;
}
function chkLname() {

  var lastName = document.getElementById("last_name");
  var form_Lname = lastName.value.search(/^[a-zA-Z]{1,15}$/); //search for value containing upper or lowercase letters, and can be 1-15 characters in length.

  if (form_Lname != 0) { //if search is not found, alert
    alert("Last name should contain only letters.");
    lastName.focus();
    lastName.select();
    return false;
  } else  //if search is found
    return true;
}
function chkAddr() {

  var addr = document.getElementById("address");
  var form_Addr = addr.value.search(/[0-9]+ [a-zA-Z]/); //search for value containing numbers, followed by a space, and then characters.

  if (form_Addr != 0) { //if search is not found, alert
    alert("Addresses should have street number and street name");
    addr.focus();
    addr.select();
    return false;
  } else  //if search is found
    return true;
}
function chkPostalCode() {
  
  var pc = document.getElementById("postalcode");
  var form_pc = pc.value.search(/[a-zA-Z][0-9][a-zA-Z][0-9][a-zA-Z][0-9]/); //search for value containing Canadian postalcode format (H1H1H1).

  if (form_pc != 0) { //if search is not found, alert
    alert("Postalcodes should be in the format 'H1H1H1");
    pc.focus();
    pc.select();
    return false;
  } else  //if search is found
    return true;
}
function confirmemail(){
    var email = document.getElementById("email").value  
    var confemail = document.getElementById("confemail").value  

    if (email != confemail){  //if email and confemail values are not the same, alert
        alert("The email entered does not match");
        return false;
    }else
    return true;
}
function chkPassword() {
    
  var pw = document.getElementById("password");
  var form_pw = pw.value.search(/^(?=.*[a-z])(?=.*[!@#$%^&*])(?=.*\d)(?=.*[A-Z]).{8,20}$/); //search for value containing a lowercase and uppercase letter, one number, a special character and be between 8-20 characters long.

  if (form_pw != 0) { //if search is not found, alert
    alert("Passwords must contain a lowercase and uppercase letter, one number, a special character and be between 8-20 characters long.");
    pw.focus();
    pw.select();
    return false;
  } else  //if search is found
    return true;
}
function confirmpw(){
  var password = document.getElementById("password").value
  var confpw = document.getElementById("confpw").value

  if (password != confpw){ //if password and confpw values are not the same, alert
      alert("The password entered does not match the above password.");
      return false;
  }else  
  return true;
}
