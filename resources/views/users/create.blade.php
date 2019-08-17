@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{url("users")}}" method="post">
                            {{csrf_field()}}
                            <label>Name</label>
                            <input class="form-control mb-2" name="name" type="text" value="{{Auth::user()->name}}" readonly/>

                            <label>Title</label>
                            <input class="form-control mb-2" name="title" type="text"/>

                            <label>Content</label>
                            <textarea class="form-control mb-2" name="content" rows="15"></textarea>

                            <input class="btn btn-outline-primary" type="submit" value="Create"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
