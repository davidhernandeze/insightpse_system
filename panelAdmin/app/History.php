<?php

namespace panelAdmin;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'patient_history';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function calendar(){

        return $this->belongsTo('panelAdmin\calendar');

    }

}
