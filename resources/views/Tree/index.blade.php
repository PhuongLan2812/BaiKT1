@extends('layouts.app')
@section('content')


<div class="container">
    <h1 class="text-center">Employee Management</h1>
    <a id='addLink' href="{{ route('employees.addEmployee') }}" class="btn btn-success">Add Employee</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Employee ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <th scope="row">{{$employee->EmployeeID}}</th>
                <td>{{$employee->Name}}</td>
                <td>{{$employee->Address}}</td>
                <td>{{$employee->Salary}}</td>
                <td>
                    <a href="{{route('employees.editEmployee',['id' => $employee->EmployeeID])}}" class = "btn btn-primary ">
                        <i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('employees.deleteEmployee',['id' => $employee->EmployeeID]) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"
                            onclick="return confirm('Are you sure delete this record?')">
                            <i class="bi bi-trash"></i></button>
                    </form>
                    <a href="{{route('employees.showEmployee',['id' => $employee->EmployeeID])}}" class = "btn btn-info" ><i class="bi bi-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Page: {{$employees ->currentPage() }} in {{ $employees->lastPage()}}</p>
    @for($i=1; $i<=$employees->lastPage(); $i++)
    <a id = "pageNumber"href="{{ $employees->url($i) }}">{{ $i  }}</a>
    @endfor
</div>
@endsection