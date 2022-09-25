<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamicField;
use Illuminate\Validation\Validator;

class DynamicFieldController extends Controller
{
    function index()
    {
        return view('pages.split');
    }
}
