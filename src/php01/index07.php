
<?php
function square($bottom,$height)
{
    $value = $bottom*$height;
    return $value;
}

$area = square(2,4);
echo $area;