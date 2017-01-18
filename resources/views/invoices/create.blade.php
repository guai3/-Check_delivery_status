@extends('layouts.default')

@section('title', 'Add New')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="pull-right fs12">戻る</a>
  送り状追加
</h1>

      <form class="form-horizontal" style="margin-bott0m:15px;">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email</label>
          <div class="col-sm-4">
            <input type="text" id ="email" class="form-control" placeholder="email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-4">
          <input type="submit" value="submit" class="btn btn-primary">
        </div>
        </div>
      </form>

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
