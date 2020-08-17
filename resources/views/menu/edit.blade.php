@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="index">EDIT MENU</div>
           <div class="card">
               <div class="card-body">
                 <form method="POST" action="{{route('menu.update',[$menu->id])}}">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="menu_title"  class="form-control" value="{{$menu->title}}">
                        <small class="form-text text-muted">Title.</small>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="menu_price"  class="form-control" value="{{$menu->price}}">
                        <small class="form-text text-muted">Price.</small>
                    </div>
                    <div class="form-group">
                        <label>Weight</label>
                        <input type="text" name="menu_weight"  class="form-control" value="{{$menu->weight}}">
                        <small class="form-text text-muted">Weight.</small>
                    </div>
                    <div class="form-group">
                        <label>Meat</label>
                        <input type="text" name="menu_meat"  class="form-control" value="{{$menu->meat}}">
                        <small class="form-text text-muted">meat.</small>
                    </div>
                        <label>About</label>
                        <textarea name="menu_about"  id="summernote">{!!$menu->about!!}</textarea>
                     @csrf
                     <button class="btn btn-secondary btn-sm" type="submit">EDIT</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
<script>
    $(document).ready(function() {
       $('#summernote').summernote();
     });
</script>
@endsection
