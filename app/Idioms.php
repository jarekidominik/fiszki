<?php

namespace Fiszki;

use Illuminate\Database\Eloquent\Model;

class Idioms extends Model
{
    protected $fillable = ['idiom_en', 'use_example_en', 'idiom_pl', 'use_example_pl'];
}
