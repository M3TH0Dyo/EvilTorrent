<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

    <?php 
    echo form_open('account/register');
    echo validation_errors(); 
    ?>  
    
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?php set_value('username'); ?>" placeholder="Choose a username..." /><br/>
    
    <label for="password">Password:</label>
    <input type="password" name="password" value="<?php set_value('password'); ?>" placeholder="Type your password..." /><br/>
    
    <label for="confirm">Password:</label>
    <input type="password" name="confirm" value="<?php set_value('confirm'); ?>" placeholder="Type your password..." /><br/>
    
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" value="<?php set_value('firstname'); ?>" placeholder="What is your firstname?" /><br/>
    
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" value="<?php set_value('lastname'); ?>" placeholder="What is your lastname?" /><br/>
    
    <label for="emailad">E-Mail:</label>
    <input type="text" name="emailad" value="<?php set_value('emailad'); ?>" placeholder="Enter your e-mail..." /><br/>
    
    <div><input type="submit" value="Submit" /></div>
    </form>
    
</body>
</html>