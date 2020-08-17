@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="index">RESTAURANT EDIT</div>
           <div class="card">
               <div class="card-body">
                 <form method="POST" action="{{route('restaurant.update',[$restaurant])}}">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="restaurant_title"  class="form-control" value="{{$restaurant->title}}">
                        <small class="form-text text-muted">Title</small>
                    </div>
                    <div class="form-group">
                        <label>Customers</label>
                        <input type="text" name="restaurant_customers"  class="form-control" value="{{$restaurant->customers}}">
                        <small class="form-text text-muted">Customers</small>
                    </div>
                    <div class="form-group">
                        <label>Employees</label>
                        <input type="text" name="restaurant_employees"  class="form-control" value="{{$restaurant->employees}}">
                        <small class="form-text text-muted">Employes</small>
                    </div>
                    <div class="form-group">
                        <label>Meal of the day</label>
                        <select class="form-control " name="menu_id">
                            @foreach ($menus as $menu)
                                <option value="{{$menu->id}}" @if($menu->id == $restaurant->menu_id) selected @endif>
                                    {{$menu->title}} {{$menu->price}}EUR {{$menu->weight}}g {{$menu->meat}}G meat {!!$menu->about!!}
                                </option>
                            @endforeach
                        </select><br>
                    </div>
                        @csrf
                        <button class="btn btn-secondary btn-sm" type="submit">EDIT</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection