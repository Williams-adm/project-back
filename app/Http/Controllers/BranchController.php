<?php

namespace App\Http\Controllers;

use App\Http\Requests\BranchRequest;
use App\Http\Resources\BranchCollection;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        $branch = Branch::all();
        return new BranchCollection($branch);
    }

    public function store(BranchRequest $request){
        Branch::create($request->all());
        return response()->json(['message' => "La sucursal ha sido creada"], 201);
    }

    public function destroy(Branch $branch){
        $branch->delete();
        return response()->json(["La sucursal con el nombre $branch->name , ha sido eliminada"]);
    }
}
