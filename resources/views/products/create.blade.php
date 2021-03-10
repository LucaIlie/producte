@extends('layouts.main')

@section('title','Creare')

@section('content')
    <div class="container">
        <h5 class="text-center py-2">Create Student</h5>

        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nume</label>
                        <input type="text" name="nume" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Producator</label>
                        <input type="text" name="producator" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Pret</label>
                        <input type="text" name="pret" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Cantitate</label>
                        <input type="text" name="cantitate" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
