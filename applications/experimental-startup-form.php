<?php


echo '

<link rel="stylesheet" type="text/css" href="form-styles.css">



<form action="#" method="post" id="contact">


<fieldset>
<legend><h2><strong>Startup Form</strong></h2></legend>



<label><strong>First Name</strong></label>
<input type="text" name="FirstName" id="FirstName">

<label><strong>Last Name</strong></label>
<input type="text" name="LastName" id="LastName">

<label><strong>Email</strong></label>
<input type="email" name="Email" id="Email">

<label><strong>Project Name</strong></label>
<input type="text" name="ProjectName" id="ProjectName">

<label><strong>Project Description</strong></label><br>
<textarea rows="10" name="ProjectDescription" id="ProjectDescription">
</textarea>

<label><strong>Languages Needed</strong>&nbsp(select all that apply)</label>
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

<label><strong>Date</strong>&nbsp(mm/dd/yyyy)</label>
<input type="date" name="Date" id="Date">

<label><strong>Location</strong></label>
<select name="Location">
  <option value="select">Select One</option>
  <option value="scc">SCC Campus</option>
  <option value="starbucks">Starbucks</option>
  <option value="panera">Panera</option>
  <option value="charlies">Charlies</option>
</select>

<label><strong>Meeting Time</strong></label>
<select name="MeetingTime">
<option value="select">Select One</option>
  <option value="EightAm">8am</option>
  <option value="NineAm">9am</option>
  <option value="TenAm">10am</option>
  <option value="ElevenAm">11am</option>
  <option value="Noon">12am</option>
  <option value="OnePm">1pm</option>
  <option value="TwoPm">2pm</option>
  <option value="ThreePm">3pm</option>
  <option value="FourPm">4pm</option>
  <option value="FivePm">5pm</option>
  <option value="SixPm">6pm</option>
  <option value="SevenPm">7pm</option>
  <option value="EightPm">8pm</option>
  <option value="NinePm">9pm</option>
  <option value="TenPm">10pm</option>

</select>

<label><strong>Duration</strong></label>
<select name="Duration">
  <option value="select">Select One</option>
  <option value="OneTwo">1-2hrs</option>
  <option value="ThreeFour">3-4hrs</option>
  <option value="FiveSix">5-6hrs</option>
  <option value="SevenEight">7-8hrs</option>
</select>

<label><strong>Comments</strong></label><br>
<textarea rows="10" name="Comments" id="Comments">
</textarea>

<input type="submit" name="Submit" id="Submit" value="Send It">

</fieldset>
</form> ';





?>
