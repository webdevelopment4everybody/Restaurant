@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="index">CREATE DISH</div>
           <div class="card">
               {{-- <div class="card-header">CREATE MENU</div> --}}
               <div class="card-body">
                <form method="POST" action="{{route('menu.store')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="menu_title"  class="form-control" value="">
                        <small class="form-text text-muted">Title</small>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="menu_price"  class="form-control" value="">
                        <small class="form-text text-muted">Price</small>
                    </div>
                    <div class="form-group">
                        <label>Weight</label>
                        <input type="text" name="menu_weight"  class="form-control" value="">
                        <small class="form-text text-muted">Weight</small>
                    </div>
                    <div class="form-group">
                        <label>Meat</label>
                        <input type="text" name="menu_meat"  class="form-control" value="">
                        <small class="form-text text-muted">Meat g</small>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <textarea name="menu_about" id="summernote"></textarea>
                    </div>
                    <div id="product-photo-inputs-area">
                        <input type="file" name="image">
                        <button id="add-product-photo-button" type="button" class="btn btn-outline-primary btn-sm">add photo</button>
                        {{-- <button id="delete-product-photo-button" type="button" class="btn btn-outline-primary btn-sm">x</button> --}}
                        <br><br>
                    </div>
                    {{-- image:<input type="file" name="image"> --}}
               
                        @csrf
                        <button class="btn btn-secondary btn-sm" type="submit">ADD</button>
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