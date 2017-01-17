@extends('layouts.default')

@section('title', '配達状況確認ツール')

@section('content')
<h1>配達状況確認ツール</h1>
<!-- <ul>
  @foreach ($invoices as $invoice)
  <li><a href="">{{ $invoice->invoice_number }}</a></li>
  @endforeach

</ul> -->

<table>
  <thead>
    <tr>
      <th data-type ="string">invoce</th>
      <th data-type ="string">Team</th>
      <th data-type ="number">Score</t>
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
