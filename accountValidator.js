/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function validateNewAccountForm()
{
    var contactFormObj = document.getElementById("customerInfo");
    var salute=contactFormObj.salute.value;
    var userName = contactFormObj.username.value;
    var password = contactFormObj.password.value;
    var firstName = contactFormObj.firstName.value;
    //var middleI = contactFormObj.middleinitial.value;
    var lastName = contactFormObj.lastName.value;
   // var gender = document.getElementsByName("gender_clothing");
  //  var address = contactFormObj.address.value;
 //   var city = contactFormObj.city.value;
  //  var state = contactFormObj.state.value;
 //   var zipcode = contactFormObj.zipcode.value;
    var email = contactFormObj.email.value;
    var phone = contactFormObj.phone.value;

   // var creditCardCom = document.getElementsByName("card");
  //  var cardNum = contactFormObj.cardnumber.value;
  //  var cardMonth = contactFormObj.month.value;
  //  var cardYear = contactFormObj.year.value;
  //  var cardCode = contactFormObj.code.value;

    var everythingOK = true;

    if (!validateUser(userName))
    {
        alert("Error: Invalid Username.");
        everythingOK = false;
    }

    if (!validatePassword(password))
    {
        alert("Error: Invalid Password.  Must be 5 or more characters.");
        everythingOK = false;
    }

    if (!validateName(firstName))
    {
        alert("Error: Invalid First Name.");
        everythingOK = false;
    }

    if (!validateInitial(middleI))
    {
        alert("Error: Invalid Last Name.");
        everythingOK = false;
    }

    if (!validateName(lastName))
    {
        alert("Error: Invalid Last Name.");
        everythingOK = false;
    }

    if (!validateGender(gender))
    {
        alert("Error: Please select a gender type for clothing.");
        everythingOK = false;
    }

    if (!validateAddress(address1))
    {
        alert("Error: Invalid Address.");
        everythingOK = false;
    }

    if (!validateCity(city))
    {
        alert("Error: Invalid City.");
        everythingOK = false;
    }

    if (!validateState(state))
    {
        alert("Error: Invalid State.");
        everythingOK = false;
    }

    if (!validateZip(zipcode))
    {
        alert("Error: Invalid Zipcode.");
        everythingOK = false;
    }

    if (!validateEmail(email))
    {
        alert("Error: Invalid Email.");
        everythingOK = false;
    }

    if (!validatePhone(phone))
    {
        alert("Error: Invalid Phone Number.");
        everythingOK = false;
    }

    if (!validateCardCom(creditCardCom))
    {
        alert("Error: Please select a company.");
        everythingOK = false;
    }

    if (!validateCardNum(cardNum))
    {
        alert("Error: Invalid credit card number.");
        everythingOK = false;
    }

    if (!validateZip(zipcode))
    {
        alert("Error: Invalid Zipcode.");
        everythingOK = false;
    }

    if (!validateMonth(cardMonth))
    {
        alert("Error: Invalid expiration month.");
        everythingOK = false;
    }

    if (!validateDay(cardYear))
    {
        alert("Error: Invalid expitation day.");
        everythingOK = false;
    }

    if (!validateCode(cardCode))
    {
        alert("Error: Invalid Security Code.");
        everythingOK = false;
    }

    if (everythingOK)
    {
        alert("All the Information looks good.\nThank you!");
        return true;
    }
    else
        return false;
}

function validateUser(user)
{
     var p = user.search(/^\.{1,}$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validatePassword(password)
{
     var p = password.search(/^\.{5,}$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateZip(zip)
{
    var p = zip.search(/(^\d{5}$)|(^\d{5}-\d{4}$)/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateName(name)
{
    var p = name.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validatePhone(phone)
{
    var p1 = phone.search(/^\d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}$/);
    var p2 = phone.search(/^\d{3}[-\s]{0,1}\d{4}$/);
    if (p1 == 0 || p2 == 0)
        return true;
    else
        return false;
}

function validateEmail(email)
{
    var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateAddress(address)
{
    var p = address.search(/^\d{1,5}\s{1}([\w]+[\.-\s]?)*$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateInitial(initial)
{
    var p = initial.search(/^\w?$/)
    if (p == 0)
        return true;
    else
        false;
}

function validateGender(gender)
{
    var i = 0;
    while (i < gender.length)
    {
        if (gender[i].checked)
            return true;
        i++;
    }
    if (i == gender.length)
    {
        return false;
    }
}

function validateState(state)
{
    var p = state.search(/^\w{2}&/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateCity(city)
{
    var p = city.search(/^\w{2,}&/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateCardCom(card)
{
    var i = 0;
    while (i < card.length)
    {
        if (card[i].checked)
            return true;
        i++;
    }
    if (i == card.length)
    {
        return false;
    }
}

function validateCardNum(number)
{
    var p1 = number.search(/^([\d]{4}[\s]?){4}&/);
    var p2 = number.search(/^\d{16}&/);
    if (p1 == 0 || p2 == 0)
        return true;
    else
        false;
}

function validateMonth(month)
{
    var p = month.search(/^\d{1,2}&/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateDay(day)
{
    var p = day.search(/^\d{1,2}&/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateCode(code)
{
    var p = code.search(/^\d{3}&/);
    if (p == 0)
        return true;
    else
        return false;
}
