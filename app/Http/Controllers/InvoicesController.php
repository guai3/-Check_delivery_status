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
}
