@extends("layout.structure")

@section("title","Dashboard")

@section("body")
    <div class="container">
       <div class="row">
            <div class="jumbotron">
                <a href= "{{route('logout')}}" class = "btn btn-danger pull-right" style="margin-top:-30px;">Log Out</a>
                <a href= "{{route('accountPage')}}" class = "btn btn-info pull-right" style="margin-top:-30px;margin-right:30px;">Account</a>
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
                    <a href="{{route("editPost",['id'=>$post->id])}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Edit </a> |
                    @endif
                    <a href="#"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Whattt? </a> 
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br><br><br>
@endsection
