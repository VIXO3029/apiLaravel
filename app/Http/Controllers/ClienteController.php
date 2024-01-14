<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class ClienteController extends Controller
{
    public function index()
    {
        try {
            $clientes = Cliente::all();
            return response()->json($clientes, JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener la lista de clientes', 'details' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nombre' => 'required|string',
                'apellidos' => 'required|string',
            ]);

            $cliente = Cliente::create($validatedData);

            return response()->json($cliente, JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear un nuevo cliente', 'details' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(Cliente $cliente)
    {
        return response()->json($cliente, JsonResponse::HTTP_OK);
    }

    public function update(Request $request, Cliente $cliente)
    {
        try {
            $validatedData = $request->validate([
                'nombre' => 'required|string',
                'apellidos' => 'required|string',
            ]);

            $cliente->update($validatedData);

            return response()->json($cliente, JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el cliente', 'details' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();
            return response()->json(null, JsonResponse::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al eliminar el cliente', 'details' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
