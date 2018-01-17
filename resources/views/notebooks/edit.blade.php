@extends('layouts.base')


@section('content')
<div class="container"
    <h1 class="pull-xs-left">Edit Notebook</h1>
    {{-- <br>
    @php
        var_dump("edit.blade.php");
    @endphp --}}
    <form action="/notebooks/{{$notebook->id}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="name">Notebook Name</label>
            <input class="form-control" name="name" type="text"></input>
        </div>
        <input class="btn btn-primary" type="submit" value="Update"></input>
    </form>
</div>
@endsection
