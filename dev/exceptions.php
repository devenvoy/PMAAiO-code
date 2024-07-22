<?php

// catch error using try..catch

include("utils/constants.php");

try{

    $div = 10 / 0;
}
catch(Exception $e)
{
    echo $e->getMessage().newline;
}
finally
{
    // it will always executes
    // even if  error occurs or not

    echo newline."always executed";

}