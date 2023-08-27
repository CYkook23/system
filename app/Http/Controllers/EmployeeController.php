<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()

    {
        return view('employees.index', [

            'employees' => Employee::paginate()
        ]);
    }


    public function create()
    {
        $cities = City::orderBy('name')->get();
        return view('employees.create', compact('cities'));
    }

    public function store(Request $request)

    {
        $data = $request->validate([

            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'identification_card' => 'required|max:255',
            'telephone_number' => 'required|max:255',
            'address' => 'required|max:255',
            'mail' => 'required|max:255',
            'city_id' => 'required|integer',  
        ]);

        Employee::create($data);

        return back()->with('message', 'Employee created successfully');
    }

    public function edit(Employee $employee)
    {
        $cities = City::orderBy('name')->get();
        return view('employees.edit', compact('employee', 'cities'));
    }

    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'identification_card' => 'required|max:255',
            'telephone_number' => 'required|max:255',
            'address' => 'required|max:255',
            'mail' => 'required|max:255',
            'city_id' => 'required|integer',
        ]);



    $employee->update($data);

    return back()->with('message', 'Employee updated.');
}

public function destroy(Employee $employee)

{
    $employee->delete();

    return back()->with('message', 'Employee deleted.');
}


}
