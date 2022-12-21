
function validateForm()
{

var fname = document.myForm.fname;
var lname = document.myForm.lname;
var edu   = document.myForm.edu;
var uname = document.myForm.uname;
var zcode = document.myForm.zcode;
var phone = document.myForm.phone;
var email = document.myForm.email;
 
if(allLetter(fname))
{
if(allLetters(lname))
{
if(eduselect(edu))
{
if(allLetterss(uname))
{
if(allnumeric(zcode))
{
if(allnumerics(phone))
{
if(ValidateEmail(email))
{

}
}
}
}
}
}
}
return false;

} 



function allLetter(fname)
{ 
var letters = /^[A-Za-z]+$/;
if(fname.value.match(letters))
{
return true;
}
else
{
alert('First name must have alphabet characters only');
fname.focus();
return false;
}
}

function allLetters(lname)
{ 
var letters = /^[A-Za-z]+$/;
if(lname.value.match(letters))
{
return true;
}
else
{
alert('Last name must have alphabet characters only');
lname.focus();
return false;
}
}

function eduselect(edu)
{
if(edu.value == "Default")
{
alert('Select your country from the list');
edu.focus();
return false;
}
else
{
return true;
}
}

function allLetterss(uname)
{
  if(uname.value =="")
  {
    alert("University Name must be filled out");
    return false;
  }
  else{
    return true;
  }
}


function allnumeric(zcode)
{ 
var numbers = /^[0-9]+$/;
if(zcode.value.match(numbers))
{
return true;
}
else
{
alert('ZIP code must have numeric characters only');
zcode.focus();
return false;
}
}

function allnumerics(phone)
{ 
var numbers = /^[0-9]+$/;
if(phone.value.match(numbers))
{
return true;
}
else
{
alert('Phone must have numeric characters only');
phone.focus();
return false;
}
}


function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
alert('Form Succesfully Submitted');
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}


