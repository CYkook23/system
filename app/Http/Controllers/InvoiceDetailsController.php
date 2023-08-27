<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Product;

use App\Models\Invoice_Details;

use Illuminate\Http\Request;

class InvoiceDetailsController extends Controller
{
    
    public function index()
    {
        return view('invoiceDetails.index', [
            'invoiceDetails' =>Invoice_Details::paginate(10)
        ]);
    }

    public function create()

    {
        $bills = Bill::orderBy('total')->get();
        $products = Product::orderBy('name')->get();
        return view('invoiceDetails.create', compact('bills', 'products'));
    }

    public function store(Request $request)

    {
        $data = $request->validate([

            'cantidad' => 'required|max:255',
            'bill_id' => 'required|integer',
            'product_id' => 'required|integer',

        ]);

        Invoice_Details::create($data);

        return back()->with('message', 'InvoiceDetails created.');
    }

    public function edit(Invoice_Details $invoiceDetails)

    {
        $bills = Bill::orderBy('total')->get();
        $products = Product::orderBy('name')->get();
        return view('invoiceDetails.edit', compact('invoiceDetails', 'bills', 'products'));
    }


    public function update(Invoice_Details $invoiceDetail, Request $request)

    {
        $data = $request->validate([

            'cantidad' => 'required|max:255',
            'bill_id' => 'required|integer',
            'product_id' => 'required|integer',

        ]);

        $invoiceDetail->update($data);

        return back()->with('message', 'InvoiceDetail updated.');
    }


    public function destroy(Invoice_Details $invoiceDetail)

    {
        $invoiceDetail->delete();

        return back()->with('message', 'InvoiceDetail deleted.');
    }
}


