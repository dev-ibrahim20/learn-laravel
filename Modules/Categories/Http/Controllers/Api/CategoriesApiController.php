<?php

namespace Modules\Categories\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Categories\Models\Category;
use Nwidart\Modules\Routing\Controller;

class CategoriesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'stauts' => true,
            'data' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return '';
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function restore($id)
    {
        //
    }

    public function forceDelete($id)
    {
        //
    }
}
