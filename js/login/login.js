/*!判断表单项6~12字符*/
function checkname(strname){
   if(strname.length < 6 || strname.length > 16){
   	document.getElementById("errorname").style.display = "block";
  }else{
  	document.getElementById("errorname").style.display = "none";
  }   
}
/*验证密码*/
function checkPwd(strpwd){
  if (strpwd.length<6||strpwd.length>16){
  document.getElementById("errorpwd").style.display = "block";
  }
  else{
  document.getElementById("errorpwd").style.display = "none";
  }   
}
function checkForm(){
  var namecheck=document.getElementById("name").value;
  var pwd=document.getElementById("password").value;
  var isRightname=((namecheck.length>=6)&&(namecheck.length<=16));
  var isRightpwd=((pwd.length>=6)&&(pwd.length<=16));
  if(isRightpwd&&isRightname){
    return true;
  }
  else 
    return false;  
 }
