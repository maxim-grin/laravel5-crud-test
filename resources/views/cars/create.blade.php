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

                <form action="{{url('car/store')}}" method="POST" class="form-horizontal">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="name" class="form-control" value="">
                        </div>
                    </div>		

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-6">
                            <input type="text" name="price" id="price" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-4">
                            <select name="status" id="status" class="form-control">
                                <option value="available">Available</option>
                                <option value="sold">Sold</option>
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