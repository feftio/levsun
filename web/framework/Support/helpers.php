<?php

if (! function_exists('csrf_token'))
{

    function csrf_token()
    {
    	echo 'token';
    }
}


if (! function_exists('csrf_field'))
{

    function csrf_field()
    {
        echo 'field';
    }
    
}