<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')
        ->join('classes', 'students.class_id', 'classes.id')
        // ->leftJoin('classes', 'students.class_id', 'classes.id')
        // ->selected('students.*', 'class.name as className')
        // ->rightJoin('classes', 'students.class_id', 'classes.id')
        // ->join('section', 'classes.id', 'section.id')
        // ->crossJoin('classes')
        ->get();
        // return response($students);
        // $students = DB::table('students')->orderBy('id', 'ASC')->get();
        return view('admin.students.index', compact('students'));

        // $first = DB::table('students')
        //     ->whereNull('name');
        // $users = DB::table('students')
        //     ->whereNull('phone')
        //     ->union($first)
        //     ->get();

        // return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        return view('admin.students.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'roll' => 'required',
            
        ]);
        $data = array(
            'class_id' => $request->class_id,
            'name' => $request->name,
            'email' =>$request->email,
            'phone' => $request->phone,
            'roll' =>$request->roll,
        );
        DB::table('students')->insert($data);

        return redirect()->back()->with('success', 'Successfully Insert!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=DB::table('students')->where('id', $id)->first();
        return view('admin.students.view', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classes = DB::table('classes')->get();
        $students =  DB::table('students')->where('id', $id)->first();
        return view('admin.students.edite', compact('classes', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'roll' => 'required',
        ]);
        $data = array(
            'class_id' => $request->class_id,
            'name'=> $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'roll' => $request->roll,
        );
        DB::table('students')->where('id', $id)->update($data);
        return redirect()->route('students.index')->with('success',  'successfully Upbate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'successfully deleted');
    }
}
