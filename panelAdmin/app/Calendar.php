<?php

namespace panelAdmin;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendars';
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

    public function patient(){

        return $this->belongsTo('panelAdmin\patient');

    }
}
