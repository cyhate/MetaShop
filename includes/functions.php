<?php
/**
 * General utility functions start
 * Set of general functionns used all over the site as utility functions
 *  
 */

/**
 * Function: getBaseUrl get the base url for the shop incase we change idrectory names on the server all we need to change is the url here annd everything will still woork
 * Parameters: None
 */
 function getBaseUrl()
{
    $baseurl = 'http://localhost/MetaShop/';
    return $baseurl; //don't add last slah it's already in the code
}
/**
 * Function login_error_popup
 * Paramters: A tsring that contains the error message we want to show if login fails
 * Behaviour expected: Should give error message and redirect to login screen
 */
function login_error_popup($error_message)
{
    $script_open = '<script type="text/javascript">';
    $script_close = '</script>';
    $doredirect = 'window.location.replace("login.php");';

    $alert_message = $script_open.'alert("'.$error_message.'");'.$doredirect.$script_close;
     return $alert_message;
}

/**
 * General utility functions end
 */
?>