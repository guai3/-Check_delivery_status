@extends('layouts.default')

@section('title', 'Add New')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="pull-right fs12">Back</a>
  Add New
</h1>
<form method="post" action="{{ url('/invoices') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="invoice_number" placeholder="送り状番号">
  </p>
  <p>
    <textarea name="memo" placeholder="メモ"></textarea>
  </p>
  <p>
    <input type="submit" value="追加">
  </p>
</form>
@endsection
