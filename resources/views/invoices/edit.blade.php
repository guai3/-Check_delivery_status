@extends('layouts.default')

@section('title', 'Edit Post')

@section('content')
<div class="edit">
<h4>
  メモ編集 &nbsp;
  <a href="{{ url('/') }}">戻る</a>
</h4>
<form method="post" action="{{ url('/invoices', $invoice->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
    送り状番号
  <div class="fs20">
    {{ $invoice->invoice_number }}
  </div>
  <p/>
    <textarea type="text" name="memo" placeholder="">{{ old('memo', $invoice->memo) }}</textarea>
    @if ($errors->has('memo'))
    <span class="error">{{ $errors->first('memo') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="メモ更新" class="btn btn-primary">
  </p>
</form>
</div>
@endsection
