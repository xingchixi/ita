<?php

/*
for ($i = 0; $i<5; $i++) {
    echo "number $i \r";
    sleep(1);

}
*/


/*
function clearTerminal () {
  DIRECTORY_SEPARATOR === '\\' ? popen('cls', 'w') : exec('clear');
}

for ($i = 0; $i<5; $i++) {
    clearTerminal ();
    echo "number $i \n";
    echo "aaa \n";
    echo "time " . time() . "\n";

    sleep(1);

}
*/



function replaceOut($str)
{
    $numNewLines = substr_count($str, "\n");
    echo chr(27) . "[0G"; // Set cursor to first column
    echo $str;
    echo chr(27) . "[" . $numNewLines ."A"; // Set cursor up x lines
}

while (true) {
    replaceOut("First Ln\nTime: " . time() . "\nThird Ln");
    sleep(1);
}
