<?php

namespace App\Repositories\Eloquent;

use App\Models\Reserva;
use App\Repositories\Interfaces\ReservaInterface;

class ReservaRepository implements ReservaInterface
{
    public function getAllReservas()
    {
        return Reserva::all();
    }

    public function getReservaById($id)
    {
        return Reserva::findOrFail($id);
    }

    public function createReserva(array $data)
    {
        return Reserva::create($data);
    }

    public function updateReserva($id, array $data)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->update($data);
        return $reserva;
    }

    public function deleteReserva($id)
    {
        $reserva = Reserva::findOrFail($id);
        return Reserva::destroy($id);
    }
}
