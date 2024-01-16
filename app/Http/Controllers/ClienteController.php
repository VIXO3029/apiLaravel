<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ClienteController extends Controller

{

    // Agrega la siguiente línea para definir la variable $author
    private $author;

    public function __construct()
    {
        // Recupera el valor de APP_AUTHOR del entorno o utiliza 'Nombre predeterminado' como valor predeterminado
        $this->author = env('APP_AUTHOR', 'Victor Manuel Rodriguez Pena');
    }
    
    public function index()
    {
        try {
             // Obtén todos los clientes
            $clientes = Cliente::all();
              // Retorna la respuesta JSON con la lista de clientes y la variable $author
            return response()->json($clientes, JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
              // En caso de error, retorna una respuesta JSON con detalles del error
            return response()->json(['error' => 'Error al obtener la lista de clientes', 'details' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function create()
    {
        return view('clientes.create');
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

    public function edit(Cliente $cliente)
    {
        try {
            return view('clientes.edit', compact('cliente'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener la vista de edición', 'details' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
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
