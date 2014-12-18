function checkPwd(strpwd){
  if (strpwd.length<6||strpwd.length>16){
       document.getElementById("errorpwd").style.display = "block";
  }
  else{
       document.getElementById("errorpwd").style.display = "none";
  }   
}

function checkpwconfirm(strpwconfirm){
	var p=document.getElementById("password");
	if(strpwconfirm.length<6||strpwconfirm.length>16){
		document.getElementById("errorpwconfirm1").style.display="block";
	}
	if(p.value!=strpwconfirm){
		document.getElementById("errorpwconfirm2").style.display="block";
	}
	else{
		document.getElementById("errorpwconfirm1").style.display="none";
		document.getElementById("errorpwconfirm2").style.display="none";
	}
}

function checkemail(stremail){
if(stremail.match(/[\w-]+@{1}[\w-]+\.{1}\w{2,4}(\.{0,1}\w{2}){0,1}/ig)!=stremail){
        document.getElementById("erroremail").style.display = "block";
}
else{
        document.getElementById("erroremail").style.display = "none";
}   
}

function checkIfFormIsValid(){
	var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	var pwcheck=document.getElementById("password").value;
	var pwconfirmcheck=document.getElementById("pwconfirm").value;
	var emailcheck=document.getElementById("email").value;
	//var isRightpwcheck=((pwcheck.length>=6)&&(pwcheck.length<=16));
    var isRightEmail = reg.test(emailcheck);
    var isRightpwd=((pwcheck.length>=6)&&(pwcheck.length<=16));
	var same = pwcheck.localeCompare(pwconfirmcheck);
	var isRightpwdconf = ( same == 0);
	if(isRightEmail&&isRightpwd&&isRightpwdconf){
		return true;
	}
	else{
        return false;			
	}
}


