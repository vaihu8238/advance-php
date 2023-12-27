<html>
<body>
<h2>Validation of a form</h2>
<form id="form" method="post" action="">
First name:<br>
<input type="text" name="firstname" value="john">
<br>
Last name:<br>
<input type="text" name="lastname" value="Doe">
<br>
Email:<br>
<input type="email" name="u_email" value="johndoe@gmail.com">
<br>
<br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js">
then add javascript code:
$(document).ready(function() {
   $("#form").validate();
});
jQuery(document).ready(function() {}
   jQuery "#forms").validate({
      rules: {
         firstname: 'required',
         lastname: 'required',
         u_email: {
            required: true,
            email: true,//add an email rule that will ensure the value entered is valid email id.
            maxlength: 255,
         
         },
      }
   });
   
</script>