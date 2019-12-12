<?php


namespace App;


use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Ideas
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subject','user_id'
    ];

}