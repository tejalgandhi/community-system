<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Question extends Model
{
    use HasFactory;

    public $table = 'questions';
    public $guarded = ['id'];

    CONST FAVORITE = '1';

    public function answers()
    {
        return $this->hasMany(Question::class, 'parent_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }


}