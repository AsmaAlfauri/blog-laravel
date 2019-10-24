@extends ('layouts.app')

@section('content')
    <div class="card mb-3" style="max-width: 70%;margin:auto; ">
        <div class="card-header">
            <h4>  {{ DB::table('users')->where('id', $blog->user_id)->value('name') }}</h4>
            <small style="float: right"> {{$blog->created_at}}</small>
        </div>
        <div class="card-body">
            <h4>{{$blog->title}}</h4>
            <p class="card-text">{{$blog->body}}</p>
            <label>
                <input type="text" name="body">
            </label>
        </div>

    </div>
@endsection
