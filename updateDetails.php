<?php
    include("includes/includedFiles.php");
?>

<div class="userDetails">
    
    <div class="container borderBottom">
        <h2>EMAIL</h2>
        <input type="text" class="email" name="email" placeholder="Email address..." value="<?php echo $userLoggedIn->getEmail(); ?>">
        <span class="message"></span>
        <button class="button" onclick="updateEmail('email')">SAVE</button>
    </div>
    
    <div class="container">
        <h2>PASSWORD</h2>
        <input type="password" class="oldPassword" name="password" placeholder="Current password">
        <input type="password" class="newPassword1" name="newPassword1" placeholder="new password">
        <input type="password" class="newPassword2" name="newPassword2" placeholder="confirm password">
        <span class="message"></span>
        <button class="button" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAVE</button>
    
</div>