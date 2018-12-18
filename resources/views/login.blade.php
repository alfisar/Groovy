@extends('layouts.app')
@section('content')
<div style="background-size: cover; height: 100vh;" class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="margin-top : 100px">
                <h2 class="ftco-heading-2 mb-12"> Login Admin </h2>
                <form action="">
                    <div class="form-group">
                        <label class="title" for="email">Email:</label>
                        <input type="email" class="form-control focus" id="email" placeholder="Enter email" name="email" require>
                    </div>
                    <div class="form-group">
                        <label class="title" for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" require>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
