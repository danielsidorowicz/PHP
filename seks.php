<?php


function pk($m)
{
    return ($m>2)?pk($m-1)+pk($m-2):1;
}
echo pk(60)
?>