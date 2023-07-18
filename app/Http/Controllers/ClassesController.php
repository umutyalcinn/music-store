<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClassModel;
use App\Models\ClassType;
use App\Models\Teacher;
use App\Models\Customer;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class_types = ClassType::all();
        $teachers = Teacher::all();
        $customers = Customer::all();

        $class_types_array = [];
        $teachers_array = [];
        $customers_array = [];

        foreach($class_types as $k => $v){
            $class_types_array[$v->id] = $v;
        }

        foreach($teachers as $k => $v){
            $teachers_array[$v->id] = $v;
        }

        foreach($customers as $k => $v){
            $customers_array[$v->id] = $v;
        }

        $classes = ClassModel::all();
        return view('classes.index',
            ['classes' => $classes,
             'class_types' => $class_types_array,
             'teachers' => $teachers_array,
             'customers' => $customers_array]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $class_types = ClassType::all();
        $teachers = Teacher::all();
        $customers = Customer::all();
        return view('classes.create',
            ['class_types' => $class_types,
             'teachers' => $teachers,
             'customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
