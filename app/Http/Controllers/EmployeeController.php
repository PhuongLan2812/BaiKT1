<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getAllEmployees()
    {
        $employees = Employee::orderBy('EmployeeID', 'desc')->paginate(10);
        return view('Employee.index', compact('employees'));
    }
    public function addEmployee()
    {
        return view('Employee.add');
    }
    public function saveEmployee(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('employees.getAllEmployees');
    }
    public function editEmployee($EmployeeID)
    {
        $employee = Employee::find($EmployeeID);
        return view('Employee.edit', compact('employee'));
    }
    public function updateEmployee(Request $request, $EmployeeID)
    {
        $employee = Employee::find($EmployeeID);
        $employee->update($request->all());
        return redirect()->route('employees.getAllEmployees');
    }
    public function deleteEmployee($EmployeeID)
    {
        $employee = Employee::find($EmployeeID);
        $employee->delete();
        return redirect()->route('employees.getAllEmployees');
    }
    public function showEmployee($EmployeeID)
    {
        $employee = Employee::find($EmployeeID);
        return view('Employee.show', compact('employee'));
    }
}
