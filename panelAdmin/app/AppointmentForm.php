<?php

namespace panelAdmin;

use Illuminate\Database\Eloquent\Model;

class AppointmentForm extends Model
{
    protected $table = 'appointment_forms';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'hora_ini',
        'hora_fin',
        'duracion',
        'paciente',
        'agenda',
        'servicio',
        'motivo_consulta',
    ];

    public function calendar(){

        return $this->belongsTo('panelAdmin\calendar');

    }

}
