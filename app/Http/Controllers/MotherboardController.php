<?php

namespace App\Http\Controllers;

use App\Models\Motherboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MotherboardController extends Controller
{
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'brand' => 'required',
            'socket' => 'required',
            'ram' => 'required',
            'tdp' => 'required',
            'ramSlots' => 'required',
            'm2' => 'required',
            'pci' => 'required',
            'image' => 'required',
            'sata' => 'required',
        ]);

        if ($validation->fails())
            return $this->validationError($validation->errors());

        $request->image = $request->file('image')->store('public');

        Motherboard::create([
            'name' => $request->name,
            'image' => $request->image,
            'brand' => $request->brand,
            'socket' => $request->socket,
            'ram' => $request->ramSlots,
            'max-tdp' => $request->tdp,
            'ram-type' => $request->ram,
            'sata' => $request->sata,
            'pci' => $request->pci,
            'm2' => $request->m2,
        ]);

        return response([
            'body' => [
                'message' => 'Success create'
            ]
        ],200);
    }
}
