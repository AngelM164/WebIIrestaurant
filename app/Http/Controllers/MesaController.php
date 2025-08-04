<?php

namespace App\Http\Controllers;

use App\Services\MesaService;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    protected $mesaService;

    public function __construct(MesaService $mesaService)
    {
        $this->mesaService = $mesaService;
    }

    public function index()
    {
        return response()->json($this->mesaService->getAll());
    }

    public function show($id)
    {
        return response()->json($this->mesaService->getById($id));
    }

    public function store(Request $request)
    {
        return response()->json($this->mesaService->create($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->mesaService->update($id, $request->all()));
    }

    public function destroy($id)
    {
        return response()->json($this->mesaService->delete($id));
    }
}