@extends("layout.structure")

@section("title","Dashboard")

@section("body")
    <div class="container">
       <div class="row">
            <div class="jumbotron">
                <a href= "{{route('logout')}}" class = "btn btn-danger pull-right" style="margin-top:-30px;">Log Out</a>
                <h2>Hey there,Welcome to the dashboard</h2>
                <h5>What's on your mind today? </h5>
                <br>
                <form action="{{ route("postCreate") }}" method = "post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name = "postText"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-info">Post</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <center>
                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </center>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <br>
        @foreach($posts as $post)
        <hr style = "border-top: 3px double #ddd;">
        <div class="card text-left">
            <div id = "oldOne" class="card-block">
                {{-- <h4 class="card-title">Special title treatment</h4> --}}
                <p class="card-text">{{$post -> post}}</p>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <h6>Posted on :: {{$post->created_at}} by {{$post->user->name}}</h6>
                </div>
                <div class="col-sm-4 pull-right">
                    <a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Like </a> |
                    @if(Auth::user() == $post->user)
                    <a href="{{route("postDelete",['id'=>$post->id])}}"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Delete </a> |
                    <a onclick = "editPostLink()" class = "edit" href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Edit </a> |
                    @endif
                    <a href="#"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Whattt? </a> 
                </div>
            </div>
        </div>
        @endforeach
        <div class="modal fade" id = "editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Post</h4>
                    </div>
                    <div class="modal-body">
                        <form action = "" method = "post">
                            {{csrf_filed()}}
                            <div class="form-group">
                                <textarea class = "form-control" name="newPost" rows="4"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button id = "savePost" type="button" class="btn btn-info">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
