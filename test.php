<?php

$passed = false;
$age = 12;

if ($age >= 13)
{
   $passed = true;
   //do a bunch of other stuff
}

if ($passed)
{
   echo "Sign up successful!";  
   
}
else
{
   echo "Sorry! Couldn't sign you up.";
}
?>
