
$(document).ready(function() {
$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var phone = $("#number").val();
var state = $("#state").val();
var pass = $("#pass").val();

if (name == '' || email == '' || phone == '' || state == '' || pass == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("insert.php", {
name1: name,
email1: email,
phone1: phone,
state1: state,
pass1: pass
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});