@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="index">MENU</div>
            {{-- <div class=""> MENU</div> --}}
            {{-- @foreach ($menus->getImages as $photo) --}}
            {{-- @endforeach --}}
            @foreach ($menus as $menu)
            <div class="card" style="display: inline-block; width:350px;">
                <div class="card-body">
                    <a href="{{route('menu.edit',[$menu])}}"><h2>{{$menu->title}}</h2></a>
                    Kaina: {{$menu->price}} EUR <br>Svoris: {{$menu->weight}} gr <br>Mesos kiekis: {{$menu->meat}} gr <br>
                    <i> {!!$menu->about!!}</i>
                    <img src="{{asset('images/'.$menu->image)}}" style="width: 250px; height: auto;">
                    <form method="POST" action="{{route('menu.destroy', [$menu])}}">
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