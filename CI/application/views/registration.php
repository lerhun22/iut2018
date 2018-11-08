<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <body>
    <h1>Login</h1>
    <?php 
        echo validation_errors();
        echo form_open('visitor');
    ?>
        <input type="text" name="nom"/>
        <input type="submit" value="soumettre"/>
    </form>
    </body>
</html>