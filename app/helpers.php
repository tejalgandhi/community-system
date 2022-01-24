<?php

function getLike($id){
    $user_id = \Illuminate\Support\Facades\Auth::user()->id;
    $count = \App\Models\QuestionLike::where('user_id',$user_id)->where('question_id',$id)->count();
    if($count > 0){
        return true;
    }
    return false;
}