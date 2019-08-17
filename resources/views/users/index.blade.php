@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Table User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr align="center">
                            <th>Title</th>
                            <th>Action</th>
                        </tr>

                            @foreach($users as $user)
                                    <tr align="center">
                                        <td>
                                            <a href={{url("users/$user->id")}}>
                                                {{$user->title}}
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{url("users/$user->id")}}" method="post">
                                                {{csrf_field()}}
                                                @method('DELETE')
                                                <a class="btn btn-outline-success" href="{{url("users/$user->id/edit")}}">Edit</a>
                                                <input class="btn btn-outline-danger" type="submit" value="Delete"/>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
