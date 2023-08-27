<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Client;

use App\Models\Bill;

use Illuminate\Http\Request;

class BillController extends Controller
{
     

    public function index()
    {
        return view('bills.index', [
            'bills' => Bill::paginate(10)
        ]);

    }

    public function create()

    {
        
        $employees = Employee::orderBy('name')->get();
        $clients = Client::orderBy('name')->get();
        return view('bills.create', compact('employees', 'clients'));
        
    }
    

    public function store(Request $request)

    {
        $data = $request->validate([

            'total' => 'required|max:255',
            'subtotal' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'employee_id' => 'required|integer',
            'client_id' => 'required|integer',

        ]);

        Bill::create($data);

        return back()->with('message', 'Bill created.');
    }

    public function edit(Bill $bill)

    {
        $employees = Employee::orderBy('name')->get();
        $clients = Client::orderBy('name')->get();
        return view('bills.edit', compact('bill', 'employees', 'clients'));

      
    }


    public function update(Bill $bill, Request $request)

    {
        $data = $request->validate([

            'total' => 'required|max:255',
            'subtotal' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'employee_id' => 'required|integer',
            'client_id' => 'required|integer',

        ]);

        $bill->update($data);

        return back()->with('message', 'Bill updated.');
    }


    public function destroy(Bill $bill)

    {
        $bill->delete();

        return back()->with('message', 'Bill deleted.');
    }
}

