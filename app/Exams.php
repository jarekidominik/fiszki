<?php

namespace Fiszki;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
     protected $fillable = ['id', 'id_user', 'start_time', 'end_time', 'correct_words', 'incorrect_words'];
}
