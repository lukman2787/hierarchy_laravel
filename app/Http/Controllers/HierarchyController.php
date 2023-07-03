<?php

namespace App\Http\Controllers;

use App\Models\Hierarchy;
use Illuminate\Http\Request;

class HierarchyController extends Controller
{
    public function index()
    {
        $hierarchies = Hierarchy::with('children')->whereNull('parent_id')->get();

        return view('hierarchy.index', compact('hierarchies'));
    }
}
