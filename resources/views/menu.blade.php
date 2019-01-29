@extends('layouts.app')
@section('content')
<div style="background-size: cover;;" class="bg-secondary" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-group food2" style="margin-top : 95px ;">
                <div class="card col-md bg-secondary" style="border : none ;">
                    @if($menu == 'food')
                        <img class="card-img" src="{{url('/image/makanan.png')}}"
                            alt="Card image" >
                        <p class="card-text " align="center" >Food</p>
                    @elseif($menu == 'snack')
                        <img class="card-img" src="{{url('/image/snack.png')}}"
                            alt="Card image" >
                        <p class="card-text " align="center" >Snack</p>
                    @elseif($menu == 'drinks')
                        <img class="card-img" src="{{url('/image/coffe-cups.png')}}"
                            alt="Card image" >
                        <p class="card-text " align="center" >Drinks</p>    
                    @endif
                </div>
            </div>
           
        </div>
    </div>
</div>
<div style="background-size: cover; " class="bg-secondary">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card-group">
                <div class="card col-md bg-secondary" style="border : none ;">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('/image/spagetti.jpeg')}}" alt="Card image">
                        <p class="card-text ">Spagetti Bolognise</p>
                        <p class="card-text " style="margin-top: -10px">Rp.25000</p>
                        <a href=""> Info More </a>
                    </div>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                    <div class="card-body" >
                        <img  class="card-img-top" src="{{url('/image/pasta.jpg')}}" alt="Card image">
                        <p class="card-text ">Roti bakar dengan selai stroberi</p>
                        <p class="card-text " style="margin-top: -10px">Rp.7000</p>
                        <a href=""> Info More </a>
                    </div>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('/image/lasagna.jpg')}}" alt="Card image">
                        <p class="card-text ">Roti bakar dengan selai stroberi</p>
                        <p class="card-text " style="margin-top: -10px">Rp.7000</p>
                        <a href=""> Info More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-size: cover; " class="bg-secondary">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card-group">
                <div class="card col-md bg-secondary" style="border : none ;">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('/image/nasgor.jpg')}}" alt="Card image">
                        <p class="card-text ">Roti bakar dengan selai stroberi</p>
                        <p class="card-text " style="margin-top: -10px">Rp.7000</p>
                        <a href=""> Info More </a>
                    </div>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('/image/mie.jpg')}}" alt="Card image">
                        <p class="card-text ">Roti bakar dengan selai stroberi</p>
                        <p class="card-text " style="margin-top: -10px">Rp.7000</p>
                        <a href=""> Info More </a>
                    </div>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('/image/bihun.jpg')}}" alt="Card image">
                        <p class="card-text ">Roti bakar dengan selai stroberi</p>
                        <p class="card-text " style="margin-top: -10px">Rp.7000</p>
                        <a href=""> Info More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-size: cover;" class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-group" style=" margin-bottom: 95px">
                @if($menu=='food')
                <div class="card col-md bg-secondary" style="border : none ;">
                     <a href="{{ url('snack') }}" >
                        <img class="card-img" src="{{url('/image/snack.png')}}" alt="Card image">
                        <p class="card-text " align="center">Snacks</p>
                    </a>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                    <a href="{{ url('drinks') }}" >
                        <img class="card-img" src="{{url('/image/coffe-cups.png')}}" alt="Card image">
                        <p class="card-text " align="center">Drinks</p>
                    </a>
                </div>
                @elseif($menu=='snack')

                <div class="card col-md bg-secondary" style="border : none ;">
                    <a href="{{ url('food') }}">
                        <img class="card-img" src="{{url('/image/makanan.png')}}" alt="Card image">
                        <p class="card-text " align="center">Foods</p>
                    </a>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                    <a href="{{ url('drinks') }}">
                        <img class="card-img" src="{{url('/image/coffe-cups.png')}}" alt="Card image">
                        <p class="card-text " align="center">Drinks</p>
                    </a>
                </div>

                @elseif($menu=='drinks')
                <div class="card col-md bg-secondary" style="border : none ;">
                    <a href="{{ url('food') }}">
                        <img class="card-img" src="{{url('/image/makanan.png')}}" alt="Card image">
                        <p class="card-text " align="center">Food</p>
                    </a>
                </div>
                <div class="card col-md bg-secondary" style="border : none ;">
                    <a href="{{ url('snack') }}">
                        <img class="card-img" src="{{url('/image/snack.png')}}" alt="Card image">
                        <p class="card-text " align="center">Snacks</p>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
