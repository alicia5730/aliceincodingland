<?php
$pagetitle = isset($_GET['pagetitle']) ? $_GET['pagetitle'] : 'Default Title';

include  "Header.php";
include 'functions.php';

$message = "";

if($_SESSION['ID'] ){

    session_regenerate_id(true);
//    if(isset($_SESSION['username'])){
//        echo $_SESSION['username'].'<br>';
//    }
    if (isset($_POST['submit'])) {
        changeProfile($_SESSION['ID'], $_FILES['profileImage'],$message);
        $_SESSION['modal_shown'] = false;

    }

    echo"
     <div id='dashboard_page'>
        <div id='messageModal' class='message-modal'>
            <div class='message-modal-content'>
                <span class='close-message'>&times;</span>
                <p id='messageContent'>Your message goes here</p>
            </div>
        </div>
          <div id='lr-wrap-user'>
            <a href='foryou.php' id='contact-in-header'>FY</a>
            <a href='Explore.php'>Explore</a>
            <a href='UserDashboard.php?pagetitle=$_SESSION[name]'><u>My Profile</u></a>
            <form action='logout.php' method='post'>
                <button type='submit' name='logout' id='buttonLogout'><img src='img/logout_image.png' alt='' id='imgLogout'></button>
            </form>
           
          </div>

        </nav>
        <div id='profile_information_div'>
            ".uploadProfileImageForm()."
            <img id='profile_image' alt='Change profile photo'  src='img/". $_SESSION['profile_img']. " '>

            <div id='profile_information'>
                 <div id='pff_info'>
                    <span class='transparantFont'>Posts</span>
                    <span class='transparantFont'>Followers</span>
                    <span class='transparantFont'>Following</span>
                </div>
                <p>$_SESSION[name]</p>
                <p>$_SESSION[username]</p>
                <p class='transparantFont'>Bio</p>
                <p id='bio'>$_SESSION[bio]</p>            
                <button id='editProfileBtn'>Edit Profile</button>
            </div>
        </div>
       
</div>
<script>

const editProfileBtn = document.getElementById('editProfileBtn');
const myModal = document.getElementById('myModal');
const btnMyModal = document.getElementById('profile_image');
const spanMyModal = myModal.getElementsByClassName('close')[0];

btnMyModal.onclick = function() {
  myModal.style.display = 'block';
}

spanMyModal.onclick = function() {
  myModal.style.display = 'none';
}
editProfileBtn.onclick = function(){
    window.location='account/edit.php';
}
// Common event for closing modals when clicking outside
window.onclick = function(event) {
  if (event.target == myModal) {
    myModal.style.display = 'none';
  }
}


document.getElementById('profile_image').addEventListener('click', function() {
    document.getElementById('imageInput').click();
});

document.getElementById('imageInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('profile_image');
            preview.src = e.target.result;
        }
        reader.readAsDataURL(file);
        document.getElementById('uploadForm').submit();
    }
});


//---------Message modal--------------
// Get the modal
const messageModal = document.getElementById('messageModal');

// Get the <span> element that closes the modal
const closeMessage = document.getElementsByClassName('close-message')[0];

// When the user clicks on <span> (x), close the modal
closeMessage.onclick = function() {
    messageModal.style.display = 'none';
}

// Function to show the modal with a specific message
function showMessage(message) {
    document.getElementById('messageContent').textContent = message;
    messageModal.style.display = 'block';
}


</script>

        ";
    if (!empty($message)) {
        echo "<script>showMessage('$message')</script>";

        // Set a cookie to indicate that the modal has been shown
        echo "<script>document.cookie = 'update_modal_shown=true';</script>";
    }

    // Check if the user is uploading a new update (modify this condition as needed)
    if (isset($_POST['profileImage'])) {
        // Unset the cookie to allow the modal to appear again on next update
        echo "<script>document.cookie = 'update_modal_shown=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';</script>";
    }

}else{
    header('location: Login.php');

}

?>