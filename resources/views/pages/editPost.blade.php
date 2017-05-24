@extends("layout.structure")

@section("title","Edit")

@section("body")
    <div class="container">
        <br><br><br>  
        <div class="alert alert-warning" role="alert">
            <h3>You are Editing your post. Be careful. Although you can always edit it again :P</h3>
        </div>  
            <form action="{{route("editFixed",['id'=>$id])}}" method = "post">
                {{csrf_field()}}
                <textarea name="editedPost" style = "width:100%;" rows="10"></textarea><br><br>
                <button type = "submit" class = "btn btn-block btn-warning">Submit</button>
            </form>
    </div>
@endsection