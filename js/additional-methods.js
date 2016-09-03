$.validator.addMethod("character", function(value, element) {
    return this.optional(element) || /^[A-Za-z,']+$/.test(value);
}, "allow only char");
$.validator.addMethod("character_space", function(value, element) {
    return this.optional(element) || /^[A-Za-z ]+$/.test(value);
}, "allow only char with space");
$.validator.addMethod("character_space_dot", function(value, element) {
    return this.optional(element) || /^[A-Za-z. ]+$/.test(value);
}, "allow only char with space and dot");
$.validator.addMethod("character_space_dot_slash", function(value, element) {
    return this.optional(element) || /^[A-Za-z. \/]+$/.test(value);
}, "allow only char with space dot and slash");
$.validator.addMethod("character_space_dot_slash_coma", function(value, element) {
    return this.optional(element) || /^[A-Za-z., \/]+$/.test(value);
}, "allow only char with space and dot coma");
$.validator.addMethod("bloodgroup", function(value, element) {
    return this.optional(element) || /^(A|B|AB|O)[+-]$/.test(value);
}, "allow only two char with and sign");
$.validator.addMethod("mobile", function(value, element) {
    return this.optional(element) || /^\d{10}$/.test(value);
}, "not valid mobile no");
$.validator.addMethod("pincode", function(value, element) {
    return this.optional(element) || /^\d{6}$/.test(value);
}, "not valid pincode");
$.validator.addMethod("no", function(value, element) {
    return this.optional(element) || /^[0-9,]+$/.test(value);
}, "allow only number");
$.validator.addMethod("mydate", function(value, element) {
    return this.optional(element) || /^\d\d?\-\d\d?\-\d\d\d\d$/.test(value);
}, "Please enter a date in the format dd/mm/yyyy");
jQuery.validator.addMethod('lessthan', function(value, element, param) {
    return (value < jQuery(param).val());
}, 'Must be less than end');
$.validator.addMethod("number_space_slash_coma", function(value, element) {
    return this.optional(element) || /^[0-9, \/]+$/.test(value);
}, "allow only number with space and slash,coma ");
$.validator.addMethod("character_no_space_dot_slash_coma", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9, \/]+$/.test(value);
}, "allow character number with space and slash,coma ");
$.validator.addMethod("no", function(value, element) {
    return this.optional(element) || /^[0-9]+$/.test(value);
}, "allow only number");
$.validator.addMethod("alpha_numeric", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9 ]+$/.test(value);
}, "allow character number with space ");
$.validator.addMethod("myemail", function(value, element) {
    return this.optional(element) || /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,50})\.([a-z]{2,6}(?:\.[a-z]{2,2})?)$/.test(value);
}, "Please enter valid email address");
$.validator.addMethod("mytime", function(value, element) {
    return this.optional(element) || /^\d\d?\:\d\d?\:\d\d\ (AM|PM)$/.test(value);
}, "Please enter a valid time.");
jQuery.validator.addMethod('selectcheck', function(value) {
    return (value != '');
}, "Please select");
$.validator.addMethod("alpha_numaric", function(value, element) {
    return this.optional(element) || /^[0-9a-zA-Z ]+$/.test(value);
}, "allow only char with space and number");
$.validator.addMethod("specialChars", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9\& ]+$/.test(value);
}, "allow only char with space and number and &");
$.validator.addMethod("strong_pass", function(value, element) {
    return this.optional(element) || /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{7,19}$/.test(value);
}, "Password must contain one alpha numeric,one number and one special character");
$.validator.addMethod("web", function(value, element) {
    return this.optional(element) || /(?:(?:http|https):\/\/)?([-a-zA-Z0-9.]{3}\.[a-z]{2,4})\b(?:\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/.test(value);
}, "Enter valid website");
$.validator.addMethod("alpha_numpercent", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9,% ]+$/.test(value);
}, "allow character number with space and % sign only");
$.validator.addMethod("my_hour_mn", function(value, element) {
    return this.optional(element) || /^\d\d?\:\d\d$/.test(value);
}, "Please enter a valid time.");
$.validator.addMethod("character_no_space_dot_slash_coma_bracket_dash", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9, ()-\/]+$/.test(value);
}, "allow character number with space and slash,coma and bracket dash");
$.validator.addMethod("character_num_underscore_dash", function(value, element) {
    return this.optional(element) || /^[A-Za-z0-9,_-]+$/.test(value);
}, "allow chars, numbers, underscore and dash");