@extends('layouts.default')

@section('title', '配達状況確認ツール')

@section('content')
<h4>
  <a href="">配達状況確認</a> &nbsp;
  <a href="{{ url('/invoices/create') }}">
    <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
    追加
  </a>
  <a href="#" onclick="location.reload();" class="pull-right fs12">
    <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
    更新
  </a>
</h4>

<table  class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th data-type ="string">発送日</th>
      <th data-type ="string">運送会社</th>
      <th data-type ="string">送り状番号</th>
      <th data-type ="string">メモ</th>
      <th data-type ="string">配達状況</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($invoices as $invoice)
  <tr>
    <td>{{ $invoice->shipping_date }}</td>
    <td>{{ $invoice->company }}</td>
    <td>
      <a href="{{ $invoice->site_url }}">
        {{ $invoice->invoice_number }}
      </a> &nbsp;
      <form action="{{ action('InvoicesController@destroy', $invoice->id) }}" id="form_{{ $invoice->id }}" method="post" style="display:inline">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <a href="#" data-id="{{ $invoice->id }}" onclick="deletePost(this);" class="fs12">
              <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
        </a>
      </form>
    </td>
    <td>
      {{ $invoice->memo }}
      <a href="{{ action('InvoicesController@edit', $invoice->id) }}" class="fs12">
        <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
      </a>
    </td>
    <td>{{ $invoice->status }}</td>
  </tr>
  @empty
  <tr><td>No data</td><td>No data</td><td>No data</td><td>No data</td><td>No data</td> </tr>
  @endforelse

  </tbody>
  <script>
  function deletePost(e) {
    'use strict';

    if (confirm('この送り状を削除してもよろしいですか?')) {
      document.getElementById('form_' + e.dataset.id).submit();
    }
  }
  </script>
  <script src="js/main.js"></script>
@endsection
