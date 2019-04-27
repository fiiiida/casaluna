function formValidation()
{
var uname = document.registration.firstname;
var lname = document.registration.lastname;
var uadd = document.registration.address1;
var ucountry = document.registration.country;
var uzip = document.registration.zip;
var uemail = document.registration.email;
var phone = document.registration.mobile;
if(allLetter(uname))
{
if(allLetter1(lname))
{

if(alphanumeric(uadd))
{ 
if(countryselect(ucountry))
{
if(allnumeric(uzip))
{
if(ValidateEmail(uemail))
{

if(validphone(phone))
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
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}
function allLetter1(lname)
{ 
var letters = /^[A-Za-z]+$/;
if(lname.value.match(letters))
{
return true;
}
else
{
alert('lastname must have alphabet characters only');
lname.focus();
return false;
}
}

function isNotEmpty(companyname) {return companyname.replace(/^\s+|\s+$/g,"")!="";}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function countryselect(ucountry)
{
if(ucountry.value == "Default")
{
alert('Select your country from the list');
ucountry.focus();
return false;
}
else
{
return true;
}
}
function allnumeric(uzip)
{ 
var numbers = /^[0-9]+$/;
if(uzip.value.match(numbers))
{
return true;
}
else
{
alert('ZIP code must have numeric characters only');
uzip.focus();
return false;
}
}
function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
return false;
}
}
function validphone(phone)
{
  var phoneno = /^\(?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
  if(phone.value.match(phoneno))
        {
      alert('Succesfully Checkout');
window.location.reload()
return true;
        }
      else
        {
        alert("Not a valid Phone Number");
        return false;
        }
}

