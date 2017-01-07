<?php

namespace panelAdmin;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'names',
        'surnames',
        'register_date',
        'birthday',
        'sex',
        'tel',
        'email'
    ];

    protected $guarded = [

    ];

}
