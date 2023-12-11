function errorChecking() {
    const errors = []; //erros array
    const fName = document.getElementById("fName").value;
    const sName = document.getElementById("sName").value;
    const pNum = document.getElementById("pNum").value;
    let email = document.getElementById("email").value;
    email = email.toLowerCase();
    const address = document.getElementById("street").value;
    let city = document.getElementById("city").value;
    city = city.toLowerCase();
    let pCode = document.getElementById("postcode").value;
    pCode = pCode.toLowerCase();

    let t_c = document.getElementById("TC").checked;

    //check firstName
    if (fName.trim() == "") {
        errors.push("ERROR! First Name is Empty.");
    } else if (fName.length > 50) {
        errors.push("ERROR! First Name is too long.");
    }

    //check surname
    if (sName.trim() == "") {
        errors.push("ERROR! Surname is Empty.");
    } else if (sName.length > 100) {
        errors.push("ERROR! Surname is too long.");
    }

    //check phone number
    if (pNum.trim() == "") {
        errors.push("ERROR! Phone number is Empty.");
    } else if (isNaN(pNum)) {
        errors.push("ERROR! Phone number contains characters.");
    } else if (!(pNum.length == 11)) {
        errors.push("ERROR! Phone number is not 11 characters long.");
    }

    //check email
    if (email.trim() == "") {
        errors.push("ERROR! Email is Empty.");
    } else if (email.length > 100) {
        errors.push("ERROR! Email is too long.");
    } else if (!(email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    ))) {
        errors.push("ERROR! Email is invalid.");
        // validate email https://stackoverflow.com/questions/46155/how-can-i-validate-an-email-address-in-javascript
    }

    //check postal details
    if (address.trim() == "") {
        errors.push("ERROR! Address is Empty.");
    } else if (address.length > 100) {
        errors.push("ERROR! Address is too long.");
    }

    if (city.trim() == "") {
        errors.push("ERROR! City is Empty.");
    } else if (city.length > 100) {
        errors.push("ERROR! City is too long.");
    }else if (city !== "edinburgh"){
        errors.push("ERROR! We don't do deliveries outside of Edinburgh, Scotland.");
    }

    if (pCode.trim() == "") {
        errors.push("ERROR! Postcode is Empty.");
    } else if (pCode.length > 10) {
        errors.push("ERROR! Postcode is too long.");
    }else if(!(pCode.includes("eh"))){
        errors.push("ERROR! We don't do deliveries outside of Edinburgh, Scotland.");
    }

    if (!(t_c)){
        errors.push("ERROR! Need to agree to Terms & Conditions to process your order.");
    }

    //alert if there are errors
    if (errors.length != 0) {
        window.alert(
            "ERROR!\n \n" + errors.join("\n")
        );
        return false; // source: https://stackoverflow.com/questions/4227043/how-do-i-cancel-form-submission-in-submit-button-onclick-event
        //cancels form submission if there are errors
    }
}