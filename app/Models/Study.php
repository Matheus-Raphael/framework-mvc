<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Study extends Model
{
    // public $table = "studies";

    // public $timestamp = true;

    public $perPage = 5;

    public $fillable = [
        'description',
        'date_init',
        'date_finish',
        'status',
        'area_id'
    ];

    public function area()
    {
        // $this->belongsTo('App\Models\Area');
        // return $this->belongsTo(Area::class, 'area_id', 'id');
        return $this->belongsTo(Area::class);
    }

    public function estudosAtrasados()
    {
        $atrasados = $this->select('*')->where('status', '=', 'Em atraso')->count();

        return $atrasados;
    }

    public function estudosAndamento()
    {
        $andamentos = $this->select('*')->where('status', '=', 'Em andamento')->count();

        return $andamentos;
    }

    public function estudosConcluidos()
    {
        $finalizados = $this->select('*')->where('status', '=', 'Finalizado')->count();

        return $finalizados;
    }
}
