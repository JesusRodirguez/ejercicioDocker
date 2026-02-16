<?php

namespace App\Repositories\Interfaces;

interface ReservaInterface
{
    public function getAllReservas();
    public function getReservaById($id);
    public function createReserva(array $data);
    public function updateReserva($id, array $data);
    public function deleteReserva($id);
}
