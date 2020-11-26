<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
     //Display
    public function index() {
        $branches = Branch::all();
        return view('branches.index', compact('branches'));
    }

// Show individually
    public function show(Branch $branch)
    {
        //$branch = Branch::find($id);
        //dd($branch->product);
        return view('branches.show', compact('branch'));
    }

}