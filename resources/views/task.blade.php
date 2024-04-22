@extends('app.taskManagement')
@section('title')
	create
@endsection
@section('content')



<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a task</div>

                <div class="card-body">
                    <form action='/store' method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="task"> Title</label>
                            <input class="form-control" type="text" name="title" id="task">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">task Description</label>
                            <input class="form-control" type="text" name="description" id="description">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
{{-- 
                        <div class="form-group">
                            <label for="image">Blog Image</label>
                            <input type="file" class="form-control-file" name="image" id="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection