@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Employee Edit</h1>
    <form action="{{route('employees.updateEmployee',['id'=>$employee->EmployeeID])}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8 form-control " id="EmployeeID">
                <div class="labelTitle">
                    <label for="EmployeeID">Employee ID</label>
                </div>
                <div class="inputTitle " >
                    <input readonly class="form-control bg-secondary" type="text" name="EmployeeID" value="{{$employee->EmployeeID}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 form-control" id="Name">
                <div class="labelTitle">
                    <label for="Name">Name</label>
                </div>
                <div class="inputTitle">
                    <input class="form-control" type="text" name="Name" value="{{$employee->Name}}">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 form-control" id="Address">
                <div class="labelTitle">
                    <label for="Address">Address</label>
                </div>
                <div class="inputTitle">
                    <input class="form-control" type="text" name="Address" value="{{$employee->Address}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 form-control" id="Salary">
                <div class="labelTitle">
                    <label for="Salary">Salary</label>
                </div>
                <div class="inputTitle">
                    <input class="form-control" type="text" name="Salary" value="{{$employee->Salary}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success ">Submit</button>
    </form>
</div>

@endsection