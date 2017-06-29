<?php

function isLoggedIn()
{
    if (isset($_SESSION['id'])) {
        return true;
    }
    return false;
}


function isAdmin()
{
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
        return true;
    return false;
}
