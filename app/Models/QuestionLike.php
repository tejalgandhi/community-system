<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionLike extends Model
{
    use HasFactory;

    public $table = 'question_like';
    public $guarded = ['id'];

}