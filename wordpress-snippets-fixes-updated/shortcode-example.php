<?php
function hello_shortcode(){return "Hello from custom shortcode!";}
add_shortcode("hello","hello_shortcode");
?>