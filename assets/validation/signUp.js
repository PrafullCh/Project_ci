var flag1=0,flag2=0,flag3=0,flag4=0,flag5=0;
function checkFirstName(name)
{
	RegEx = /^[a-zA-Z ]+$/;
			if (RegEx.test(name)) 
			{
				flag1=1;
				document.getElementById('error1').innerHTML = "";
			}
			else
			{
				document.getElementById('error1').innerHTML = "First Name is invalid";
				flag1=0;
			}
			checkBtn();
}
function checkLastName(name)
{
	RegEx = /^[a-zA-Z ]+$/;
			if (RegEx.test(name)) 
			{
				flag2=1;
				document.getElementById('error2').innerHTML = "";
			}
			else
			{
				document.getElementById('error2').innerHTML = "Last Name is invalid";
				flag2=0;
			}
			checkBtn();
}
function checkBtn()
		{
			if (flag1===1 && flag2===1 && flag3===1 && flag4===1 ) 
			{
				document.getElementById('subBtn').removeAttribute('Disabled');	
			}
			else
			{
				document.getElementById('subBtn').setAttribute('Disabled','Disabled');
			}
		}
function checkDate()
		{
			var year = parseInt(document.getElementById('date').value.split("-")[0]);
			if(year>2004)
			{
				alert('You are not Eligible');
				flag5=0;
			}
			
			else
				flag5=1;
			checkBtn();
		}
		function checkEmail(email)
		{
			var RegEx = /^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$/;
			if (RegEx.test(email)) 
			{
				document.getElementById('error3').innerHTML="";
				flag5=1;
			}
			else
			{
				document.getElementById('error3').innerHTML="Please Enter Valid E-mail Address";
				flag5=0;
			}
			checkBtn();
		}
		function checkID(id)
		{
			RegEx = /^[a-zA-Z0-9]{3,8}$/;
			if(id=='')
			{
				flag3=0;
				alert('UserID can not be Null');			
			}
			else
			{
				if (RegEx.test(id))
				{
					flag3=1;
					document.getElementById('error4').innerHTML="";
				} 
				else 
				{
					flag3=0;
					document.getElementById('error4').innerHTML="Invalid password. Here only characters lower or upper case along with numbers is allowed. The length of the Passowrd has to be minimum 3 and maximum 8 char length";	
				}
			}
				checkBtn();
		}
		function checkPassword(pw)
		{
			RegEx = /^[a-zA-Z]\w{3,14}$/;
			if(pw=='')
			{
				flag4=0;
				alert('UserID can not be Null');			
			}
			else
			{
				if (RegEx.test(pw))
				{
					flag4=1;
					document.getElementById('error5').innerHTML="";
				} 
				else 
				{
					flag4=0;
					document.getElementById('error5').innerHTML="Invalid password...Length must be between 4 to 30 and must containat least one number";	
				}
			}
				checkBtn();
		}