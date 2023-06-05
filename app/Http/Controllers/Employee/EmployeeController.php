<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = DB::table('employees')
            ->join('genders', 'genders.id', '=', 'employees.gender_id')
            ->join('positions', 'positions.id', '=', 'employees.position_id')
            ->get();

        $gender = DB::table('genders')
            ->get();
        
        $position = DB::table('positions')
            ->get();
        return view('home', ['employees' => $employee, 'genders' => $gender, 'positions' => $position]);
    }

    public function save(Request $request)
    {
        $employee = new Employee;
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->gender_id = $request->input('gender');
        $employee->position_id = $request->input('position');

        $employee->save();

        return redirect('/');
    }
}
