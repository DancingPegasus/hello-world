<?php

require('somefile.php');

define ('PAGE_NUM', $_SESSION['page_num']);

switch (PAGE_NUM)
{
   case 0:
   //error
   break;
   
   case 1: 
   //beginning of book
   break;
   
   case 2:
   //book has started
   break;
}

?>
