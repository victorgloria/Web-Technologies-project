// JavaScript Document
function checkName(nameValue,nameId)
{
	var pattern=/[a-zA-Z]+$/;
	var msg;
	if (nameValue.match(pattern))
	{
		msg='Data is valid';
	}
	else
	{
		msg='Invalid data entered';
	}
	document.getElementById(nameId+'Help').innerHTML=msg;
}

function checkEmail(emailValue)
{
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var msg;
	if(emailValue.match(mailformat))
	{
		msg="Data is valid";
	}
	else
	{
		msg="Data is invalid";
	}
	document.getElementById('emailHelp').innerHTML=msg;
}

function checkUsername(usernameValue)
{
	var usernameformat = /[a-zA-Z0-9]{8,}$/;
	var msg;
	if(usernameValue.match(usernameformat))
	{
		msg="Data is valid";
	}
	else
	{
		msg="Data is invalid";
	}
	document.getElementById('usernameHelp').innerHTML=msg;
}

function checkComments(commentsValue)
{
	var commentsformat = /[^(?:!@#$%^&*)]$/;
	var msg;
	if(commentsValue.match(commentsformat))
	{
		msg="Data is valid";
	}
	else
	{
		msg="Data is invalid";
	}
	document.getElementById('commentsHelp').innerHTML=msg;
}