@extends("layout.structure")

@section("title","Dashboard")

@section("body")
    <div class="container">
        <div class="row">
            <div class="jumbotron">
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
        <br><br><br>
        <hr style = "border-top: 3px double #aaa;">
        <div class="card text-left">
            <div class="card-block">
                <h4 class="card-title">Special title treatment</h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="info">
                Posted on :: Suzal lai tha xa !!
            </div><br>
            <div class="interaction">
                <a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Like </a> |
                <a href="#"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Yuck </a> |
                <a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ummm </a> |
                <a href="#"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Whattt? </a> 
            </div>
        </div><hr style = "border-top: 3px double #aaa;">
    </div>
@endsection
