@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">HOME RESTAURANT</div>
               <div class="card-body">
                 @foreach ($restaurants as $restaurant)
                   <a href="{{route('restaurant.edit',[$restaurant])}}"><h2>{{$restaurant->title}} </h2></a>
                   Patiekalas: {{$restaurant->restaurantMenu->title}}<br> Kaina:{{$restaurant->restaurantMenu->price}}EUR
                   <form method="POST" action="{{route('restaurant.destroy', [$restaurant])}}">
                    @csrf
                    <button class="btn btn-secondary btn-sm" type="submit">DELETE</button>
                   </form>
                   <br>
                 @endforeach
                 <form action="{{route('restaurant.index')}}" method="get">
                    <select name="menu_id">
                        <option value="0">Show All</option>
                         @foreach ($menus as $menu)
                            <option value="{{$menu->id}}" @if($selectId == $menu->id) selected @endif>{{$menu->title}}</option>
                         @endforeach
                    </select><br><br>
                        Sort By: <br>
                            Title: <input type="radio" name="sort" value="title" @if('title' == $sort) checked @endif><br>
                        <button type="submit">FILTER</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


