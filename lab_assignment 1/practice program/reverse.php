<?php

function rev($number)
{
   if($number!=0)
   {
        $digit=$number%10;
        echo$digit;
        rev($number/10);
   }
}

$n = 874;
rev($n);
