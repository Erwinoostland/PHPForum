<?php


function isLoggedIn()
{
    if (isset($_SESSION['id'])) {
        return true;
    }
    return false;
}

//Ingelogd als admin
function isAdmin()
{
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
        return true;
    return false;
}
