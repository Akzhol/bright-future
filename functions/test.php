<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function f($content) {
    return "<p>$content</p>";
}

$output = f("First line as parameter");
$output .= f("... and another text as parameters");
echo $output;
