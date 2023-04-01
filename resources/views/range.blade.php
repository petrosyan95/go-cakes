@extends('master')

@section('content')
`
    <div class="categories">

        <div>
            @foreach(\App\Models\ProductCategory::all() as $value)

                <a href="{{route('categories', ['id'=>$value['id']])}}">{{$value['name_en']}}</a>

            @endforeach
        </div>

    </div>

            <div class="section-header text-center">
                <p>lchie torta</p>
                <h2>samie udobnie ceni</h2>
            </div>

            <div class="best-work">

                @foreach($product as $value)

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

            </div>

@endsection
