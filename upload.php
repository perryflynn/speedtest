<?php

$length = 0;
$handle = @fopen("php://input", "r");

if ($handle)
{
    while (($buffer = fgets($handle, 4096)) !== false)
    {
        $length += strlen($buffer);
    }

    fclose($handle);

    echo $length;
}
else
{
    echo -1;
}
