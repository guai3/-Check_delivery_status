@extends('layouts.default')

@section('title', '配達状況確認ツール')

@section('content')
<h1>
  <a href="{{ url('/invoices/create') }}" class="pull-right fs12">Add New</a>
  配達状況確認ツール
</h1>

<table>
  <thead>
    <tr>
      <th data-type ="string">発送日</th>
      <th data-type ="string">運送会社</th>
      <th data-type ="string">送り状番号</th>
      <th data-type ="string">メモ</th>
      <th data-type ="string">荷物状況</th>
      <th data-type ="string">編集</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($invoices as $invoice)
  <tr>
    <td>{{ $invoice->shipping_date }}</td>
    <td>{{ $invoice->company }}</td>
    <td><a href="http://google.com">{{ $invoice->invoice_number }}</a></td>
    <td><a href="">{{ $invoice->memo }}</a></td>
    <td>{{ $invoice->status }}</td>
    <td><a href="{{ action('InvoicesController@edit', $invoice->id) }}" class="fs12">[Edit]</a></td>
  </tr>
  @empty
  <tr><td>No data</td><td>No data</td><td>No data</td> </tr>
  @endforelse

  </tbody>
  <script src="js/main.js"></script>
@endsection
