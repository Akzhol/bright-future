<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$quizIsSubmitted = isset($_POST['quiz-submitted']);
if ($quizIsSubmitted) {
    $answer = $_POST['answer'];
    $output = showQuizResponse($answer);
    //inspecting the $_POST superglobal array
//    $output .= "<pre>";
//    $output .= print_r($_POST, true);
//    $output .= "</pre>";
} else {
    $output = include_once 'views/quiz-form.php';
}
return $output;

function showQuizResponse($answer) {
    $response = "<p>You clicked <strong>$answer</strong>";
    if ($answer === 'yes') {
        $response .= " - I know exactly how you feel!";
    }
    $response .= "</p>";
    $response .= "<p> <a href='index.php?page=quiz'>Try quiz again</a></p>";
    return $response;
}
