@extends('layouts.app')
@section('content')
<div style="background-size: cover;" class="bg-secondary" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-group" style="margin-top : 95px ; margin-bottom: 95px">
                <div class="card col-md bg-secondary" style="border : none ;">
                        <a href="{{ url('menu?menu=food') }}" >
                            <img class="card-img" src="{{url('/image/makanan.png')}}"
                                alt="Card image" >
                            <p class="card-text " align="center" >Food</p>
                        </a>
                </div>
                
                <div class="card col-md bg-secondary" style="border : none ;">
                        <a href="" >
                            <img class="card-img" src="{{url('/image/snack.png')}}"
                                alt="Card image" >
                            <p class="card-text " align="center" >Snacks</p>
                        </a>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                        <a href="">
                            <img class="card-img" src="{{url('/image/coffe-cups.png')}}" alt="Card image" >
                        <p class="card-text " align="center">Drinks</p>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
