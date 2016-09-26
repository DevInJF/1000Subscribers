<?php

namespace OneThousand\Http\Controllers;

use Illuminate\Http\Request;

use OneThousand\Http\Requests;
use OneThousand\Section;

class DashboardController extends Controller
{
    public function index()
    {
    	$sections = Section::orderby('module_id', 'ASC')->get();

    	return view('dashboard.index', compact('sections'));
    }
}
