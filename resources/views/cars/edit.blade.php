@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create New Car
            </div>

            <div class="panel-body">
                <a href="{{url('cars')}}" class="btn btn-xs btn-default pull-right">back to list</a>
                <div class="clearfix"></div>

                @include('common.errors')

                <form action="{{url('car/update/'.$cars->id)}}" method="POST" class="form-horizontal">

                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="name" class="form-control" value="{{$cars->name}}">
                        </div>
                    </div>		

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-6">
                            <input type="text" name="price" id="price" class="form-control" value="{{number_format($cars->price, 2, '.', '')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-4">
                            <select name="status" id="status" class="form-control" v-model="cars.category">
                                <option value="available" {{$cars->status =='available' ? 'selected':''}}>Available</option>
                                <option value="sold" {{$cars->status =='sold' ? 'selected':''}}>Sold</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">Save Car</button>
                        </div>
                    </div>		

                </form>

            </div>	
        </div>	
    </div>	
</div>	
@endsection