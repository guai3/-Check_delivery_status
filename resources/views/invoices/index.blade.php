@extends('layouts.default')

@section('title', '配達状況確認ツール')

@section('content')
<h1>配達状況確認ツール</h1>

<table>
  <thead>
    <tr>
      <th data-type ="string">発送日</th>
      <th data-type ="string">運送会社</th>
      <th data-type ="string">送り状番号</th>
      <th data-type ="string">メモ</th>
      <th data-type ="string">荷物状況</th>
      <th data-type ="string">公式サイト</th>
      <th data-type ="string">編集</t>
    </tr>
  </thead>
  <tbody>
  @forelse ($invoices as $invoice)
  <tr>
    <td><a href="">{{ $invoice->invoice_number }}</a></td>
    <td><a href ="/invoices/{{ $invoice->company}}">{{ $invoice->company }}</a></td>
    <td><a href ="{{url('/invoices/', $invoice->id)}}">{{ $invoice->company }}</a></td>
  </tr>
  @empty
  <tr><td>No data</td><td>No data</td><td>No data</td> </tr>
  @endforelse

  </tbody>
@endsection
