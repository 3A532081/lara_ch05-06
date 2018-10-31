<?php

Route::get('/', function () {
    return view('welcome');
});

Route::pattern('student_no','s[0-9]{10}');

Route::group(['prefix'=>'student'],function ()
{

    Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>function ($student_no) {
            return '學號：'.$student_no;
        }
    ]);


    Route::get('{student_no}/score/{subject?}', [
    'as'=>'student.score',
    'uses'=>function ($student_no,$subject = null) {
        return '學號：'.$student_no.'的'.((is_null($subject))?'所有科目':$subject).'成績';
    }
    ])->where(['subject'=>'(chinese|english|math)']);
});

