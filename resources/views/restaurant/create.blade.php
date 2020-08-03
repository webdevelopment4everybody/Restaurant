@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">RESTAURANT CREATE</div>
               <div class="card-body">
                 <form method="POST" action="{{route('restaurant.store')}}">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="restaurant_title"  class="form-control" value="{{old('restaurant_title')}}">
                        <small class="form-text text-muted">Title</small>
                    </div>
                    <div class="form-group">
                        <label>Customers</label>
                        <input type="text" name="restaurant_customers"  class="form-control" value="{{old('restaurant_customers')}}">
                        <small class="form-text text-muted">Customers</small>
                    </div>
                    <div class="form-group">
                        <label>Employees</label>
                    <input type="text" name="restaurant_employees"  class="form-control" value="{{old('restaurant_employees')}}")}}">
                        <small class="form-text text-muted">Employes</small>
                    </div>
                    <div class="form-group">
                        <label>Dienos meniu patiekalas</label>
                        <select class="form-control " name="menu_id">
                            @foreach ($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->title}} {{$menu->price}} </option>
                            @endforeach
                        </select>
                    </div>
                     @csrf
                     <button class="btn btn-secondary btn-sm" type="submit">ADD</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
