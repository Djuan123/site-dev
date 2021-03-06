<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['dwelling'])){
 if (empty($_POST['owner_renter_info'])
 || empty($_POST['monthly_utilities'])
 || empty($_POST['dwelling_use'])){ 
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page3_form.php"); // Redirecting to second page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page3'])) {
 header("location: page1_form.php");// Redirecting to first page.
 }
}
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>Disaster Relief Form - United Way of Athens/Limstone County</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Disaster Relief Form Part 4 of 4</h2><hr/>
 <span id="error">
 <?php
 if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
 }
 ?>
 </span>
 <form action="page5_form.php" method="post">
 <label>Type of Insurance</label>
 <select name="dwelling_insurance">
 <option value="dwelling_insurance_None">None</options>
 <option value="dwelling_insurance_contents">Contents</options>
 <option value="dwelling_insurance_hazzard">Hazzard</options>
 <option value="dwelling_insurance_structure">Structure</options>
 </select><br>

<label class="description" for="dwelling_insurance">Insurance Providers Name</label>
<input id="insurance_provider_name" name="insurance_provider_name" type ="text"/>

<label class="description" for="dwelling_insurance">Insurance Providers Phone</label>
<input id="insurance_provider_phone" name="insurance_provider_phone" type ="text" placeholder="###-###-####"/>

 <label>Level of Damage</label>
 <select name="damage_level">
 <option value="destroyed">Destroyed</options>
 <option value="major">Major</options>
 <option value="minor">Minor</options>
 <option value="affected">Affected</options>
 <option value="inaccessible">Inaccessible</options>
 <option value="unknown">Unknown</options>
 </select><br>
<br>
<label class ="description" for ="electricity">Is the electricity on or off at the affected location?</label><br>
<label>Electricity is ON</label>
<input  type ="radio" value="1" name ="elec_on_off"/><br>

<label>Electricity is OFF</label>
<input  type ="radio" value="0" name ="elec_on_off"/>
<hr>


<label class ="description" for ="housing_needs">Do you have any housing needs due to the disaster?</label>

<input  type ="radio" id="housing_needs_yes" name ="housing_needs" value="1" title ="*PLEASE SELECT A HOUSING NEEDS CHOICE " required  />
<label class ="choice" for="housing_needs_yes">Yes</label>


<input type="radio" id="housing_needs_no" name="housing_needs" value="0"   />
<label class="choice" for="housing_needs_no">No</label><br><hr>


<label class ="description" for="housing_needs">If so what type of housing do you need?</label><br>
<input name ="housing_need_type" type ="radio" value="Permanent"/>
Permanent

<input name ="housing_need_type" type ="radio" value="Temporary"/>
Temporary



 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Submit" />
 </form>
 </div> 
 </div>
 </body>
</html>