@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <a href={{ route('home_edit') }}><button type="button"  class="btn btn-success">Insert to database</button></a></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Model</th>
                            <th scope="col">Year</th>
                            <th scope="col">####</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($database as $el)
                            
                                <tr>
                                    <th scope="row">{{ $el->id }} </th>
                                    <td>{{ $el->model }}</td>
                                    <td>{{ $el->year }} year</td>
                                    <td><a href="{{ route('delete', ['id' => $el->id]) }}" value="{{ $el->id }}" class="btn btn-danger">X</a></td>
                                    <td><a href="{{ route('get_to_change', ['id'=> $el->id]) }}" value="{{ $el->id }}" class="btn btn-warning">E</a></td>
                                  </tr>
                         
                            @endforeach
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
