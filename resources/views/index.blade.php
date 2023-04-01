@extends('master')

@section('content')

    <div class="show-filter">
        <h6>FILTER</h6>
        <div id="content" class="content">
            <button id="btn-filter" class="btn-filter" onclick="toggleDiv()"></button>
        </div>
    </div>

    <div class="search-filter">
        <form method="get" action="{{route('home')}}">
            @csrf
            <div class="filter">
                <select class="form-select" aria-label="Пример выбора по умолчанию">
                    <option selected>razmer torta</option>
                    <option value="1">Один</option>
                    <option value="2">Два</option>
                    <option value="3">Три</option>
                </select>

                <select class="form-select" aria-label="Пример выбора по умолчанию" name="category">
                    <option selected value="1">kategoria</option>
                    @foreach(\App\Models\ProductCategory::all() as $value)
                        <option value="{{$value['id']}}">{{$value['name_en']}}</option>
                    @endforeach
                </select>

                <div class="price-one">
                    <label for="cina1">min price</label>
                    <input type="number" id="cina1" name="min_price" min="0" max="9999">
                </div>
                <div class="price-two">
                    <label for="cina2">max price</label>
                    <input type="number" id="cina2" name="max_price" min="0" max="9999">
                </div>
                <input type="submit" value="submit" class="button">
            </div>
        </form>
    </div>

    <section class="best-work">

        @foreach($products as $value)
            <div class="work">
                <a href="{{route('product-show', ['id'=>$value['id']])}}"><img src="{{asset($value['img'])}}" alt="img"></a>
                <h3>{{$value['name_en']}}</h3>
                <div>
                    <h4>{{$value['price']}}$</h4>
                </div>
                <div class="price-footer">
                    <a class="btn btn-custom" href="{{route('basket', ['id'=>$value['id']])}}">zakazaty</a>
                </div>
            </div>

        @endforeach

    </section>

    <section class="comentarii">

        <div class="write_comentarii">
            <form action="{{route('review-store')}}" method="post">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="name(obezatelyno)" required>
                    <input type="email" name="email" placeholder="email">
                </div>
                <textarea name="description_en" required></textarea>
                <button type="submit" class="button">otpravity</button>
            </form>
        </div>

        <div class="show_comentarii">
           @foreach(\App\Models\Reviews::all() as $value)

                <div>
                    <div>
                        <h3>{{$value['name']}}</h3>
                        <img src="{{asset('img/user.jpg')}}" alt="">
                    </div>
                    <p>{{$value['description_en']}}</p>
                </div>

           @endforeach
        </div>

    </section>

@endsection
