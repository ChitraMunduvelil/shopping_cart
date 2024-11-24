<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
        DB::insert('insert into employees (name, created_at) values (?, ?)', [
            $request->input('name'),
            now(),
        ]);
        return view('employee.read');
    }

    public function read(){
       $employee= DB::select('select * from employees');
        return view('employee.read', compact('employee'));
    }

    public function edit($id){
        $employee = DB::select('SELECT * FROM employees WHERE id = ?', [$id]);
        return redirect()->route('employee.edit', ['id' => $id]);
    }
}
