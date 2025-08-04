<?php

namespace App\Http\Controllers;

use App\Services\PedidoService;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    protected $pedidoService;

    public function __construct(PedidoService $pedidoService)
    {
        $this->pedidoService = $pedidoService;
    }

    public function index()
    {
        return response()->json($this->pedidoService->getAll());
    }

    public function show($id)
    {
        return response()->json($this->pedidoService->getById($id));
    }

    public function store(Request $request)
    {
        return response()->json($this->pedidoService->create($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->pedidoService->update($id, $request->all()));
    }

    public function destroy($id)
    {
        return response()->json($this->pedidoService->delete($id));
    }
}