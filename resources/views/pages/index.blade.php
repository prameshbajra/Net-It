@extends("layout.structure")

@section("title","Sign In or Up")
<div class="container">
    {{-- Make a js file for this ...         
         @if(count($error->all()) > 0 )
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif  --}}
    <br><br>
    <div class="row">
        <div class="col-sm-6">
            <h3><span class="label label-success">Sign In</span></h3>
            <br><br>
            <form class="form-horizontal" action="{{ route('signIn') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name = "emailSignIn" class="form-control" id="inputEmail3" placeholder="Email" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name = "passSignIn" class="form-control" id="inputPassword3" placeholder="Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <h3><span class="label label-info">Sign Up</span></h3>
            <br><br>
            <form class="form-horizontal" action="{{ route('signUp') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name = "emailSignUp" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name = "nameSignUp" id="inputEmail3" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name = "passSignUp" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="jumbotron">
        <h1>This is supposed to be a social networking app.</h1>
        <p>Making a laravel app</p>
    </div>
</div>
@section("body")
@endsection