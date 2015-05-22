<?php


echo '

<link rel="stylesheet" type="text/css" href="form-styles.css">



<form action="#" method="post" id="profile">


<fieldset>
<legend><h2><strong>Profile Form</strong></h2></legend>

<label><strong>I am a</strong></label>
<select name="User">
  <option value="select">Select One</option>
  <option value="student">Student</option>
  <option value="alumni">Alumni</option>
  <option value="staff">Staff</option>
</select>

<label><strong>First Name</strong></label>
<input type="text" name="FirstName" id="FirstName">

<label><strong>Last Name</strong></label>
<input type="text" name="LastName" id="LastName">

<label><strong>Email</strong></label>
<input type="email" name="Email" id="Email">

<label><strong>Languages/Skills</strong>&nbsp(List Languages/Skills comma seperated)</label><br>
<textarea rows="10" name="Languages" id="Languages">
</textarea>

<input type="submit" name="Submit" id="Submit" value="Send It">

</fieldset>
</form> ';





?>
