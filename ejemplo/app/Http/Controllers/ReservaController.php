<?php

namespace App\Http\Controllers;

use App\Services\ReservaService;
use App\Http\Requests\ReservasRequest;

class ReservaController extends Controller
{
    protected $reservaService;

    public function __construct(ReservaService $reservaService)
    {
        $this->reservaService = $reservaService;
    }

    public function index()
    {
        $reservas = $this->reservaService->getAllReservas();

        return response()->json([
            'message' => 'Reservas retrieved successfully',
            'data' => $reservas
        ], 200);
    }

    public function show($id)
    {
        $reserva = $this->reservaService->getReservaById($id);

        return response()->json([
            'message' => 'Reserva retrieved successfully',
            'data' => $reserva
        ], 200);
    }

    public function store(ReservasRequest $request)
    {
        $data = $request->validated();
        $reserva = $this->reservaService->createReserva($data);

        return response()->json([
            'message' => 'Reserva created successfully',
            'data' => $reserva
        ], 201);
    }

    public function update(ReservasRequest $request, $id)
    {
        $data = $request->validated();
        $reserva = $this->reservaService->updateReserva($id, $data);

        return response()->json([
            'message' => 'Reserva updated successfully',
            'data' => $reserva
        ], 200);
    }

    public function destroy($id)
    {
        $this->reservaService->deleteReserva($id);

        return response()->json([
            'message' => 'Reserva deleted successfully'
        ], 200);

        // Si quieres más REST puro:
        // return response()->json(null, 204);
    }
}
