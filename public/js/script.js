function NavBar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  function validateRegister(){
    var error=1;
    if(error != 0){
      var name =document.forms['RegisterUser']['name'].value;
      if(name==''){
        document.getElementById('disp_error').innerHTML='Please Enter Your Name';
        return false;
      }
      var email =document.forms['RegisterUser']['email'].value;
      if(email==''){
        document.getElementById('disp_error').innerHTML='Please Enter Your Email';
        return false;
      }
      var pass =document.forms['RegisterUser']['pass'].value;
      if(pass==''){
        document.getElementById('disp_error').innerHTML='Please Set Your Pass';
        return false;
      }
      var cpass =document.forms['RegisterUser']['cpass'].value;
      if(cpass==''){
        document.getElementById('disp_error').innerHTML='Please Confirm Your Password';
        return false;
      }
      if(cpass!=pass){
        document.getElementById('disp_error').innerHTML='Password and Confirm not Match';
        return false;
      }  
    }else{
      return true;
    }
  }

  //validate upload form
  function CheckUpload(){
    var error=1;
    if(error != 0){
      var title =document.forms['Post_form']['title'].value;
      if(title==''){
        document.getElementById('disp_error').innerHTML='Please Enter a Title';
        return false;
      }

      var keyword =document.forms['Post_form']['keyword'].value;
      if(keyword==''){
        document.getElementById('disp_error').innerHTML='Please Enter a Keyword for easy Search';
        return false;
      }

      var subject =document.forms['Post_form']['subject'].value;
      if(subject==''){
        document.getElementById('disp_error').innerHTML='Please Select a category';
        return false;
      }
      var content =document.forms['Post_form']['editor1'].value;
      if(content==''){
        document.getElementById('disp_error').innerHTML='Please Enter Your Content';
        return false;
      }

  }else{
    return true;
  }
}

function checkSearch(){
  var skey =document.forms['search_form']['search_key'].value;
  if(skey==''){
    return false;
}else{
  return true;
}
}

function ConfmDel(){
  return confirm('Do You are u Sure to Delete this file');
}

function ConfmLive(){
  return confirm('are You Sure for Live/Offilne you Post');
}
function ConfmRepo(){
  return confirm('are You Sure for Do You want Clear Reports');
}
function ConfmOffline(){
  return confirm('Do you want to Deactivate/Activate User');
}

function ChangeRole(){
  return confirm('Do you want to Change Role of User');
}

function ConfReport(){
  return confirm('Do you want to Report This Post this post will go to Admin Inspection');
}

function CheckPassword(){
  var error=1;
    if(error != 0){
      var pass =document.forms['passForm']['pass'].value;
      if(pass==''){
        document.getElementById('disp_error').innerHTML='Please Enter New Password';
        return false;
      }
      var cpass =document.forms['passForm']['cpass'].value;
      if(cpass==''){
        document.getElementById('disp_error').innerHTML='Please Confirm Your Password';
        return false;
      }
      if(pass!=cpass){
        document.getElementById('disp_error').innerHTML='Password and Confirm Password Not Matching';
        return false;
      }
}else{
  return true;
}
}
function CheckProf(){
  var error=1;
    if(error != 0){
      var uemail =document.forms['profile']['uemail'].value;
      if(uemail==''){
        document.getElementById('disp_error').innerHTML='Email Cannot Be Blank';
        return false;
      }
      var uname =document.forms['profile']['uname'].value;
      if(uname==''){
        document.getElementById('disp_error').innerHTML='Name Cannot be Blank';
        return false;
      }
}else{
  return true;
}

}
function EmailEmpty(){
  var error=1;
  if(error != 0){
    var uemail =document.forms['forgot_form']['username'].value;
    if(uemail==''){
      document.getElementById('disp_error').innerHTML='Email Cannot Be Blank';
      return false;
    }
}else{
return true;
}
}