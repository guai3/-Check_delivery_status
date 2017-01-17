@extends('layouts.default')

@section('title', 'Add New')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="pull-right fs12">戻る</a>
  送り状追加
</h1>
<form method="post" action="{{ url('/invoices') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="invoice_number" placeholder="送り状番号">
    @if ($errors->has('invoice_number'))
    <span class="error">{{ $errors->first('invoice_number') }}</span>
    @endif
  </p>
  <p>
    <textarea name="memo" placeholder="メモ"></textarea>
    @if ($errors->has('memo'))
    <span class="error"> {{ $errors->first('memo') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="追加">
  </p>
</form>
@endsection
