@extends("layout.structure")

@section("title","Account Details")

@section("body")
<div class="container">
    <br><br><br><br>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="{{route("accountSave",['id'=>$user->id])}}" method="post" enctype = "multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name = "newName" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name = "image" id="exampleInputFile">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="col-sm-3">
            @if(Storage::disk("local")->has($user->name."-".$user->id.".jpg"))
                <img src = "{{route("accountPicture",["filename"=>$user->name."-".$user->id.".jpg"])}}" class = "img-responsive" alt = "The image was supposed to be here.">
            @endif
        </div>
    </div>
</div>
@endsection
