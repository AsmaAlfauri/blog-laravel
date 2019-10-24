@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">Create Post</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create New Post</div>
                <div class="card-body">
                    <form action="{{route('blogs.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                             Title of Post
                                <input type="text" class="form-control" placeholder="Title" name="title">

                        </div>
                        <div class="form-group">
                             Body of post
                                <textarea name="body" placeholder="Body of post" cols="50" rows="10" class="form-control"></textarea>

                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">
                                Create Post
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection
