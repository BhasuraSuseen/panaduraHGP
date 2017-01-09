  function checkForm(form)
  {
  
    re = /^\w+$/;
    if(!re.test(form.user_name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.user_name.focus();
      return false;
    }
  }
function checkpass(form){
    if(form.password.value != "" && form.password.value == form.passwordc.value) {
      if(form.password.value.length < 8) {
        alert("Error: Password must contain at least eight characters!");
        form.password.focus();
        return false;
      }
    
     re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

    alert(form.user_name.value + " was entered successfully");
    return true;
  }



function toggle() {

      var ele = document.getElementById("toggleText");

      var text = document.getElementById("displayText");

      if(ele.style.display == "block") {

            ele.style.display = "none";

        text.innerHTML = "Change username";

        }

      else {

        ele.style.display = "block";

        text.innerHTML = "Back";

      }

    } 

function toggle1() {

      var ele = document.getElementById("toggleText1");

      var text = document.getElementById("displayText1");

      if(ele.style.display == "block") {

            ele.style.display = "none";

        text.innerHTML = "Change password";

        }

      else {

        ele.style.display = "block";

        text.innerHTML = "Back";

      }

    } 
