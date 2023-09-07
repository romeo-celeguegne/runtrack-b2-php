<?php
function my_str_search(string $haystack, string $needle): int
{
    $counter = 0;
    for ($i = 0; $haystack[$i]; $i++) {
        echo $haystack[$i];
        // echo $i;
    }
    return $counter;
}
my_str_search('La plateforme', 'a');
