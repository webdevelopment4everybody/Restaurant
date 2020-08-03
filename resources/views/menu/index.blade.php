@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HOME MENU</div>
                <div class="card-body">
                    @foreach ($menus as $menu)
                    <a href="{{route('menu.edit',[$menu])}}"><h2>{{$menu->title}}</h2></a>
                    Kaina: {{$menu->price}} EUR <br>Svoris: {{$menu->weight}} gr <br>Mesos kiekis: {{$menu->meat}} gr <br>
                    {{$menu->about}}
                    <form method="POST" action="{{route('menu.destroy', [$menu])}}">
                        @csrf
                        <button class="btn btn-secondary btn-sm" type="submit">DELETE</button>
                       </form>
                       <br>
                    @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection