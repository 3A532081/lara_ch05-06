<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/{student_no}', function ($student_no) {
    return "學號：".$student_no;
});

Route::get('student/{student_no}/score/{subject?}', function ($student_no,$subject = null) {
    return "學號：".$student_no."的".((is_null($subject))?"所有科目":$subject)."成績";
});
