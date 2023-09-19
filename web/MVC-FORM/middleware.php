<?php

function isLoggedIn()
{
    return isset($_SESSION['userFullName']);
}


function isAdmin()
{
    if(isset($_SESSION['user_type']))
    {
        if($_SESSION['user_type']=='admin')
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    else
    {
        return FALSE;
    }
}