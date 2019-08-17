@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{url("users/$users->id")}}" method="post">
                            {{csrf_field()}}
                            @method('PATCH')
                            <label>Name</label>
                            <input class="form-control mb-2" name="name" type="text" value="{{Auth::user()->name}}" readonly/>

                            <label>Title</label>
                            <input class="form-control mb-2" name="title" type="text" value="{{$users->title}}"/>

                            <label>Content</label>
                            <textarea class="form-control mb-2" name="content" rows="15">
                                {{$users->content}}
                            </textarea>

                            <input class="btn btn-outline-primary" type="submit" value="Edit"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
