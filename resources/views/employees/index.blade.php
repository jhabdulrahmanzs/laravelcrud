@extends('template.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}" title="Create a employee list"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>email</th>
            <th>address</th>
            <th>Phone</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->phone }}</td>
                <td>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        <button type="button" class="btn btn-light">
                            <a href="{{ route('employees.show', $employee->id) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i> Show
                            </a>
    
                        </button>
                        <button type="button" class="btn btn-light">
                            <a href="{{ route('employees.edit', $employee->id) }}">
                                <i class="fas fa-edit  fa-lg"></i> Edit
    
                            </a>
                        </button>
                       

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" class="btn btn-light" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>Delete

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <span class="d-flex justify-content-center"> {!! $employees->links() !!}</span>
   

@endsection
