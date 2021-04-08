<?php

namespace App\Http\Controllers;

use App\Models\Power;
use App\Models\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PowerController extends Controller
{
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
            'brand' => 'required',
            'power' => 'required',
            'reyt' => 'required',
        ]);

        if ($validation->fails())
            return $this->validationError($validation->errors());

        $request->image = $request->file('image')->store('public');

        Power::create($request->only(['image', 'name', 'brand', 'power', 'reyt']));

        return response([
            'body' => [
                'message' => 'Success create'
            ]
        ], 200);
    }
}
