<?php
function requiredvalue($input)
{
    if(empty($input))
    {
       return false;
    }
    return true;
}
  