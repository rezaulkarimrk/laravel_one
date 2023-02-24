<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    // constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index method for all class
    public function index()
    {
        // $class=DB::table('classes')->get();
        // $class=DB::table('classes')->paginate(4);
        // $class=DB::table('classes')->simplePaginate(4);
        $class=DB::table('classes')->paginate(4);
        return view('admin.class.index', compact('class'));
    }

    // create from page
    public function create()
    {
        return view('admin.class.create');
    }

    // class store
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required|unique:classes'
        ]);

        $data =  array(
            'class_name' => $request->class_name, 
        );
        DB::table('classes')->insert($data);
        return redirect()->back()->with('success', 'successfully insert!');
    }

    // Delete methode
    public function delete($id)
    {
        DB::table('classes')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'successfully Deleted!');
    }
}
