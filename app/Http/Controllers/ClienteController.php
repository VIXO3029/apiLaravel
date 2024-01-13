<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        try {
            $clientes = Cliente::all();
            return response()->json($clientes, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener la lista de clientes'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string',
                'apellidos' => 'required|string',
            ]);

            $cliente = Cliente::create($request->only(['nombre', 'apellidos']));

            return response()->json($cliente, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear un nuevo cliente'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Cliente  $cliente
     * @return JsonResponse
     */
    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Cliente  $cliente
     * @return JsonResponse
     */
    public function update(Request $request, Cliente $cliente)
    {
        try {
            $request->validate([
                'nombre' => 'required',
                'apellidos' => 'required',
            ]);

            $cliente->update($request->only(['nombre', 'apellidos']));

            return response()->json($cliente, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el cliente'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cliente  $cliente
     * @return JsonResponse
     */
    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al eliminar el cliente'], 500);
        }
    }
}

