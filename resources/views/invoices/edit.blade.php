@extends('layouts.default')

@section('title', 'Edit Post')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="pull-right fs12">戻る</a>
  メモ編集
</h1>
<form method="post" action="{{ url('/invoices', $invoice->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p>
    送り状番号
    {{ $invoice->invoice_number }}
  </p>
  <p>
    <textarea name="memo" placeholder="memo">{{ old('memo', $invoice->memo) }}</textarea>
    @if ($errors->has('memo'))
    <span class="error">{{ $errors->first('memo') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="メモ更新">
  </p>
</form>
@endsection
