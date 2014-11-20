<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$formIsSubmitted = isset($_POST['form-submitted']);
if ($formIsSubmitted) {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $output = showResult($height, $weight);
} else {
    $output = include_once 'views/bmi-form.php';
}
return $output;

function showResult($height, $weight) {
    if ($height === null || $weight == null) {
        $response = "<p>We need <strong>both</strong> parameters.</p>";
        $response .= "<p>Please <a href='index.php?page=bmi'>go back</a> and specify all parameters.</p>";
    } else {
        $response = "<p>Your BMI is ";
        $result = $weight / (2 * $height);
        $response .= "<strong>$result</strong>.</p>";
        $response .= "<p> <a href='index.php?page=bmi'>Calculate again</a></p>";
    }
    return $response;
}
