<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use App\Models\Processor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemoryController extends Controller
{
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'brand' => 'required',
            'image' => 'required',
            'ram' => 'required',
            'value' => 'required',
            'chast' => 'required',
        ]);

        if ($validation->fails())
            return $this->validationError($validation->errors());

        $request->image = $request->file('image')->store('public');

        Memory::create([
            'name' => $request->name,
            'image' => $request->image,
            'brand' => $request->brand,
            'ram-type' => $request->ram,
            'frequency' => $request->chast,
            'value' => $request->value
        ]);

        return response([
            'body' => [
                'message' => 'Success create'
            ]
        ],200);
    }
}
