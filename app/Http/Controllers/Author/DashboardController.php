<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Student;


class DashboardController extends Controller
{
    public function index(){

        return view('author.dashboard');

    }
}
