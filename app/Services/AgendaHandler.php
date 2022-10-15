<?php

namespace App\Services;

use App\Models\Task;

class AgendaHandler
{
    public function agendaService()
    {
      $lunes = Task::where('day_id',1)->get();
      $martes = Task::where('day_id',2)->get();
      $miercoles = Task::where('day_id',3)->get();
      $jueves = Task::where('day_id',4)->get();
      $viernes = Task::where('day_id',5)->get();
      $sabado = Task::where('day_id',6)->get();
      $domingo = Task::where('day_id',7)->get();
      return [$lunes, $martes, $miercoles, $jueves, $viernes, $sabado, $domingo];
    }
}