<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Description;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($productId)
    {
        return Description::ofProduct($productId)->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }
}
