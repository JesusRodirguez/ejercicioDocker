<?php

namespace App\Services;

use App\Repositories\Interfaces\ReservaInterface;

class ReservaService
{
    protected $reservaRepository;

    public function __construct(ReservaInterface $reservaRepository)
    {
        $this->reservaRepository = $reservaRepository;
    }

    public function getAllReservas()
    {
        return $this->reservaRepository->getAllReservas();
    }

    public function getReservaById($id)
    {
        return $this->reservaRepository->getReservaById($id);
    }

    public function createReserva(array $data)
    {
        return $this->reservaRepository->createReserva($data);
    }

    public function updateReserva($id, array $data)
    {
        return $this->reservaRepository->updateReserva($id, $data);
    }

    public function deleteReserva($id)
    {
        return $this->reservaRepository->deleteReserva($id);
    }
}
