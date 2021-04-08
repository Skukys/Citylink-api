<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use App\Models\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StorageController extends Controller
{
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'brand' => 'required',
            'image' => 'required',
            'size' => 'required',
            'type' => 'required',
            'input' => 'required',
        ]);

        if ($validation->fails())
            return $this->validationError($validation->errors());

        $request->image = $request->file('image')->store('public');

        Storage::create($request->only(['image', 'name', 'brand', 'size', 'type', 'input']));

        return response([
            'body' => [
                'message' => 'Success create'
            ]
        ], 200);
    }
}
