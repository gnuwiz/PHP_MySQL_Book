<?php
function say($lambda){
    echo $lambda();
}

say(function() { return 'Hello world'; });