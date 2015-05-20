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

<label><strong>Bio</strong>&nbsp(Tell us a little about yourself)</label><br>
<textarea rows="10" name="Bio" id="Bio">
</textarea>



<label><strong>Fluent Languages</strong>&nbsp(select all that apply)</label>
<p>
<input type="checkbox" name="Languages []" id="Language1" value="html/css">Html/CSS
</p>
<p>
<input type="checkbox" name="Languages []" id="Language2" value="php">PHP
</p>
<p>
<input type="checkbox" name="Languages []" id="Language3" value="javascript">Javascript
</p>
<p>
<input type="checkbox" name="Languages []" id="Language4" value="java">Java
</p>
<p>
<input type="checkbox" name="Languages []" id="Language5" value="csharp">C#
</p>
<p>
<input type="checkbox" name="Languages []" id="Language6" value="c">C
</p>
<p>
<input type="checkbox" name="Languages []" id="Language7" value="cplus">C++
</p>
<p>
<input type="checkbox" name="Languages []" id="Language8" value="objectivec">Objective-C
</p>
<p>
<input type="checkbox" name="Languages []" id="Language9" value="python">Python
</p>
<p>
<input type="checkbox" name="Languages []" id="Language10" value="other">Other
</p>

<label><strong>Other Languages/Software</strong>&nbsp(List other fluent languages/software not listed above)</label><br>
<textarea rows="10" name="Other" id="Other">
</textarea>


<label><strong>Comments</strong></label><br>
<textarea rows="10" name="Comments" id="Comments">
</textarea>

<input type="submit" name="Submit" id="Submit" value="Send It">

</fieldset>
</form> ';





?>
