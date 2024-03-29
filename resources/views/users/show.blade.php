@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <label>Title</label>
                            <input class="form-control mb-2" name="title" type="text" value="{{$users->title}}" readonly/>

                            <label>Content</label>
                            <textarea class="form-control mb-2" name="content" rows="15" readonly>
                                {{$users->content}}
                            </textarea>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
