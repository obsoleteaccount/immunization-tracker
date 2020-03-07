@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">Vaccinations</h1>
        </div>
    </header>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('record-deleted'))
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>The record has been deleted</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('record-created'))
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>The record has been successfuly created</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>

     <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('record-updated'))
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>The record has been successfuly updated</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>


    <div class="form-group row mb-2">
        <div class="col-md-6 offset-md-1">
            <button id="create" type="button" class="btn btn-primary" onclick="window.location='{{ route('parent')}}'">
                {{ __('Create Vaccination Record') }}
            </button>
        </div>
    </div>
    <br>
    <center>
    @if(count($vaccinations) > 0)
        <table id="table" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Parent's Full Name</th>
                    <th>Child's Full Name</th>
                    <th>Gender</th>
                        <th>Child ID</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>                    
                @foreach ($vaccinations as $vaccination)
                    @if ($vaccination->child->parents->doctor_id == $doctor_id)
                        <tr>
                            <td>{{$loop->iteration}}</td>                
                            <td>{{$vaccination->child->parents->firstname}} {{$vaccination->child->parents->lastname}} {{$vaccination->child->parents->surname}}</td>
                            <td>{{$vaccination->child->firstname}} {{$vaccination->child->lastname}} {{$vaccination->child->surname}}</td>
                            <td>{{$vaccination->child->gender}}</td>
                            <td class="text-center">{{$vaccination->child->id}}</td>
                            <td class="text-center">
                                <a id="create" style="margin-top:1px;" class='btn btn-primary' href= "{{route('edit', ['id' => $vaccination->id,'child_id'=>$vaccination->child->id, 'parent_id' => $vaccination->child->parent_id])}}"><i class="fas fa-edit"></i></a>
                                <a id="create" style="margin-top:1px;" class='btn btn-primary' href= "{{route('view', ['id' => $vaccination->id, 'child_id'=>$vaccination->child->id, 'parent_id' => $vaccination->child->parent_id])}}"><i class="fas fa-eye"></i></a> 
                                <a id="create" style="margin-top:1px;" class='btn btn-primary' href= "{{route('delete', ['id' => $vaccination->id])}}"><i class="fas fa-trash"></i></a>                         
                            </td>
                        </tr>
                    @else
                    @endif
                @endforeach
            </tbody>
        </table> 
        <br>
        <div class="form-group row mb-2">
            <div class="col-md-6 offset-md-1">
                {{ $vaccinations->links() }}
            </div>
        </div>                                     
    @else
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3> No Vaccination Records Found.<h3>
                </div>
            </div>
        </div>
    </div>
    @endif
</center>
</div>
</body>
@endsection()
