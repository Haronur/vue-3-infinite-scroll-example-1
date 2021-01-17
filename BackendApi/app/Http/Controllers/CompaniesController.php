<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function index()
    {
        return User::paginate(10);
        // return User::all();
    }
}
