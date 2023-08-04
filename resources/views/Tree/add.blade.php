@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Thêm cây xanh</h1>
    <form action="{{route('trees.saveTree')}}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-8 form-control" id="Name">
                <div class="labelTitle">
                    <label for="Name">Name</label>
                </div>
                <div class="inputTitle">
                    <input class="form-control" type="text" name="Name">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 form-control" id="Address">
                <div class="labelTitle">
                    <label for="Address">Address</label>
                </div>
                <div class="inputTitle">
                    <input class="form-control" type="text" name="Address">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 form-control" id="Salary">
                <div class="labelTitle">
                    <label for="Salary">Salary</label>
                </div>
                <div class="inputTitle">
                    <input class="form-control" type="text" name="Salary">
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>
@endsection