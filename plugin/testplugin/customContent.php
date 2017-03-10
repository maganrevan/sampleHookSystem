<?php

global $hooks;

$hooks->watch('onUserUpdate', function() {
    //code
    echo 'HOOK: Ich komme noch später, immerhin bin ich ein Spätzünder </br>';
});
