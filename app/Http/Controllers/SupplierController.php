<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Http\Resources\SupplierCollection;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();
        return new SupplierCollection($supplier);
    }

    public function store(SupplierRequest $request){
        Supplier::create($request->all());
        return response()->json(['message' => "El proveedor ha sido creado"], 201);
    }

    public function destroy(Supplier $supplier){
        $supplier->delete();
        return response()->json(["El proveedor con el nombre $supplier->name , ha sido eliminado"]);
    }
}
