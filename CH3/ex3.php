<?php

function myMax(...$numbers)
{
   return max($numbers);
}

echo myMax(1, 6, 8, 5, 2) . "<br>\n";
echo myMax(8, 5, 20) . "<br>\n";
