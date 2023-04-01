@extends('master')

@section('content')

    <!-- popur start -->
    <div class="popup_container">
        <div class="popup">
            <form method="post" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Введите ваше имя</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">number fon</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="number">
                </div>
                <div class="mb-3">
                    <label class="form-label">addres</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="adres">
                </div>
                <div class="mb-3">
                    <label class="form-label">sposob opplati</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="oplata">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
    <!-- popur end -->

    <section class="basket">
            @php
            $endPrice = 0
            @endphp

            @foreach($basket as $value)
            <form action="{{route('destroy', ['id'=>$value['id']])}}" method="post">
                @csrf
                @method('DELETE')
                @php
                    $endPrice += $value['price']
                @endphp
                <div class="basket_cakes">
                    <input type="hidden" value="{{$value['id']}}" name="id">
                    <a href="#"><img src="./img/tort-1.jpg" alt=""></a>
                    <div>
                        name<br>
                        <span>{{$value['name']}}</span>
                    </div>
                    <div>
                        price<br>
                        <span>{{$value['price']}}</span>
                    </div>
                    <div>
                        count<br>
                        <span>{{$value['count']}}</span>
                    </div>
                    <input type="submit" value="delete" >
                </div>
            </form>
            @endforeach

        <div class="payment">
            <p>vsego k oplate <span>{{$endPrice}}$</span></p>
            <a class="btn btn-custom open_poput">oplatity</a>
        </div>
    </section>


    <section class="basket-comentarii">

        <div class="show_comentarii">
            @foreach(\App\Models\Reviews::all() as $value)

            <div>
                <div>
                    <h3>{{$value['name']}}</h3>
                    <img src="./img/user.jpg" alt="">
                </div>
                <p>{{$value['description_en']}}</p>
            </div>

            @endforeach

        </div>

    </section>

@endsection
