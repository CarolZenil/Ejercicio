<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = Employee::orderBy('idEmployee', 'DESC')
            ->name($request->name)
            ->paginate(4);

        return view('employee.index', compact('employees'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->birthdate = $request->birthdate;
        $employee->job = $request->job;
        $employee->domicile = $request->domicile;

        if($employee->save()){       
            return redirect("/employee");
        }else{
          return view("employee.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $birthdate    = date("Y-m-d", strtotime($employee->birthdate));
        
        return view("employee.edit", compact('birthdate'))->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->birthdate = $request->birthdate;
        $employee->job = $request->job;
        $employee->domicile = $request->domicile;

        if($employee->save()){       
            return redirect("/employee");
        }else{
          return view("employee.edit");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect("/employee");
    }
}
