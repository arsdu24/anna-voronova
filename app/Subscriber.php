<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    public $table = 'newsletter_emails';

    public $fillable = ['email'];
}
