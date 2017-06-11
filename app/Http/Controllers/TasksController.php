<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\TodoList;

class TasksController extends Controller
{
    public function index() {
        return Response()->json(TodoList::orderBy('id', 'desc')->get(), 200);
    }
}
