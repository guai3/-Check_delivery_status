<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class InvoicesController extends Controller
{
    //

    public function index() {
      $invoices = Invoice::latest('created_at')->get();

      return view('invoices.index')->with('invoices',$invoices);
    }

    public function edit($id) {
      $invoice = Invoice::findOrFail($id);
      return view('invoices.edit')->with('invoice', $invoice);
    }

    public function destroy($id) {
      $invoice = Invoice::findOrFail($id);
      $invoice->delete();
      return redirect('/')->with('flash_message','送り状番号が削除されました｡');
    }

    public function create() {
      return view('invoices.create');
    }

    public function store(Request $request) {
      $this->validate($request, [
        'invoice_number' => 'required|digits:12' ,
        'memo' => 'max:16' ,
      ]);
      $invoice = new Invoice();

      $invoice->invoice_number = $request->invoice_number;

      $in_number = $request->invoice_number;
      $in_url = "http://thira.plavox.info/transport/api/?t=[yamato]&no=[" . $in_number . "]&nojump=1";
      $out_url = file_get_contents($in_url);
      $invoice->site_url = $out_url;
      
      $invoice->memo = $request->memo;
      $invoice->shipping_date = '2011-11-5';
      $invoice->company = 'ヤマト運輸';
      $invoice->status = 'テスト';


      $invoice->flag = '1';
      $invoice->save();

      return redirect('/')->with('flash_message','送り状番号が追加されました');
    }

    public function update(Request $request, $id) {
      $this->validate($request, [
        'memo' => 'max:16' ,
      ]);
      $invoice = Invoice::findOrFail($id);
      $invoice->memo = $request->memo;
      $invoice->save();

      return redirect('/')->with('flash_message','メモが更新されました');
    }

}
