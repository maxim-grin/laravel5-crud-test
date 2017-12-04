@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Cars List

            </div>

            <div class="panel-body">
                <p class="text-right"><a href="{{url('car/create')}}" class="btn btn-xs btn-default">create new</a><p>

                    @if(count($cars)>0) 

                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th style="width:80px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                        <tr>
                            <td>{{$car->name}}</td>
                            <td>{{number_format($car->price, 2, '.', '')}}</td>
                            <td>{{$car->status}}</td>
                            <td class="text-center">
                                <form method="POST" action="{{url('car/'.$car->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{url('car/'.$car->id.'/edit')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                @endif

            </div>	
        </div>	
    </div>	
</div>
@endsection	