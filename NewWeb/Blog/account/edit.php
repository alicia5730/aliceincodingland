
<?php
include_once "../Header.php";
include "../functions.php";
?>
<form method='post' action='update_profile.php' >
    <label for='name''>Name:</label>
    <input type='text' id='name' name='name'value='$_SESSION[name]'>
    <label for='bio_update'>Bio:</label>
    <input type='text' id=' ' name='bio_update' value=''>
    <label for='bio_update'>Bio:</label>
    <input type='text' id=' ' name='bio_update'>
    <label for='bio_update'>Bio:</label>
    <input type='text' id=' ' name='bio_update'>

    <!-- Other fields... -->
    <input type='submit'value='Update Profile'>
</form>
