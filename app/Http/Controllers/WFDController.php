<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WFDController extends Controller
{
    public function draggable(){
        return view('draggable');
    }

    public function droppable(){
        return view('droppable');
    }
    public function resizable(){
        return view('resizable');
    }
    public function selectable(){
        return view("selectable");
    }
    public function sortable(){
        return view("sortable");
    }
}
