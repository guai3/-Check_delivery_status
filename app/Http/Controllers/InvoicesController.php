<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class InvoicesController extends Controller
{
    //

    public function index() {
      // $posts = \App\Post::all();
      // $posts = Post::all();
      // $posts = Post::orderBy('created_at', 'desc')->get();
      // $invoices = [];
      $invoices = Invoice::latest('created_at')->get();

      return view('invoices.index')->with('invoices',$invoices);
    }

    public function create() {
      return view('invoices.create');
    }

    public function store(Request $request) {
      $invoice = new Invoice();
      $invoice->invoice_number = $request->invoice_number;
      // $invoice->invoice_number = '1111111111';
      $invoice->memo = $request->memo;
      $invoice->shipping_date = '2011-11-5';
      $invoice->company = 'ヤマト';
      $invoice->status = 'テスト';
      $invoice->site_url = 'https://google.com';
      $invoice->flag = '1';
      $invoice->save();

      return redirect('/');
    }

}
