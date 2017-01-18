@extends('layouts.default')

@section('title', 'Add New')

@section('content')
<div class="edit">
<h4>
  送り状追加 &nbsp;
  <a href="{{ url('/') }}">戻る</a>

</h4>
<form method="post" action="{{ url('/invoices') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="invoice_number" placeholder="送り状番号">
    @if ($errors->has('invoice_number'))
    <span class="error">{{ $errors->first('invoice_number') }}</span>
    @endif
  </p>
  <p>
    <input type="text" name="memo" placeholder="メモ">
    @if ($errors->has('memo'))
    <span class="error"> {{ $errors->first('memo') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="送り状追加" class="btn btn-primary">
  </p>
</form>
</div>
@endsection
