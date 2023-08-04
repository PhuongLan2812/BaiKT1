@extends('layouts.app')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header ">Employee About</div>
    <div class="card-body">
        <div class="card-body">
            <h3 class="card-title">Employee ID: {{$tree->EmployeeID }}</h3>
            <p class="card-text">Name : {{ $tree->Name}}</p>
            <p class="card-text">Address : {{ $tree->Address}}</p>
            <p class="card-text">Salary : {{ $tree->Salary}}</p>
            <p class="card-text">Chiều cao : {{ $tree->Height }}</p>
            <p class="card-text">Địa chỉ : {{ $tree->Location }}</p>
            <p class="card-text">Ngày trồng : {{ $tree->DatePlanted }}</p>
        </div>
    </div>
</div>
  <a href="/trees" class="btn btn-primary">Trang chủ</a>
@endsection