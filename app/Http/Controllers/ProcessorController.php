<?php

namespace App\Http\Controllers;

use App\Models\Motherboard;
use App\Models\Processor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProcessorController extends Controller
{
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'brand' => 'required',
            'socket' => 'required',
            'maxChast' => 'required',
            'baseChast' => 'required',
            'yad' => 'required',
            'cash' => 'required',
            'tdp' => 'required',
            'image' => 'required',
        ]);

        if ($validation->fails())
            return $this->validationError($validation->errors());

        $request->image = $request->file('image')->store('public');

        Processor::create([
            'name' => $request->name,
            'image' => $request->image,
            'brand' => $request->brand,
            'socket' => $request->socket,
            'yad' => $request->yad,
            'base' => $request->baseChast,
            'max' => $request->maxChast,
            'kash' => $request->cash,
            'tdp' => $request->tdp,
        ]);

        return response([
            'body' => [
                'message' => 'Success create'
            ]
        ],200);
    }
}
