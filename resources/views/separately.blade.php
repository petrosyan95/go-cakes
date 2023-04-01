@extends('master')

@section('content')

    <section class="more">


                <div class="container">
                    <div class="more-img">
                        <img src="{{asset($product['img'])}}" alt="">
                    </div>

                    <div class="more-text">
                        <h3>{{$product['name_en']}}</h3>
                        <p>{{$product['description_en']}}</p>
                        <h2><span>${{$product['price']}}</span></h2>
                        <div class="more-button">
                            <a class="btn btn-custom" href="{{route('basket',['id'=>$product['id']])}}">zakazaty</a>
                        </div>
                    </div>
                </div>


    </section>

@endsection
