<?php

require('somefile.php');

define ('PAGE_NUM', $_SESSION['page_num']);

if (PAGE_NUM < 1)
{
   //invalid page number
}
else
{
   //display page
}

?>
