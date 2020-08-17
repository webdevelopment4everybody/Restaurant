@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="index">RESTAURANTS</div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{route('restaurant.index')}}" method="get">
                        Rūšiuoti pagal
                        patiekalą: <input type="radio" name="sort" value="title" @if('title' == $sort) checked @endif><br><br>
                        <select style="width:100px;" class="browser-default custom-select custom-select-xs mb-3"  name="menu_id">
                                <option value="0">Show All</option>
                                @foreach ($menus as $menu)
                                    <option value="{{$menu->id}}" @if($selectId == $menu->id) selected @endif>{{$menu->title}}</option>
                                @endforeach
                        </select>
                        <br>
                        <button class="btn btn-secondary btn-sm" type="submit">FILTER</button>
                    </form>
                </div>
            </div>
        @foreach ($restaurants as $restaurant)
           <div class="card" style="display: inline-block; width:350px;">
               {{-- <div class="card-header">HOME RESTAURANT</div> --}}
               <div class="card-body">
                   <a href="{{route('restaurant.edit',[$restaurant])}}"><h2>{{$restaurant->title}} </h2></a>
                   Patiekalas: {{$restaurant->restaurantMenu->title}}<br> Kaina:{{$restaurant->restaurantMenu->price}}EUR
                   <form method="POST" action="{{route('restaurant.destroy', [$restaurant])}}">
                    @csrf
                    <button class="btn btn-secondary btn-sm" type="submit">DELETE</button>
                </form>
                <br>
            </div>
        </div>
        @endforeach                                          
       </div>
   </div>
</div>
@endsection


