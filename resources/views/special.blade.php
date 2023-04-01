@extends('master')

@section('content')

    <div class="your-cake">
        <form action="{{route('order')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="container-cake">
                <div class="textarea">
                    <textarea name="" id="" cols="30" rows="10" placeholder="pishi tut"></textarea>
                </div>
                <div class="choice">
                    <div class="container">
                        <div>
                            <select class="form-select" aria-label="Пример выбора по умолчанию">
                                <option selected>razmer torta</option>
                                <option value="1">Один</option>
                                <option value="2">Два</option>
                                <option value="3">Три</option>
                            </select>
                        </div>
                        <div>
                            <select class="form-select" aria-label="Пример выбора по умолчанию">
                                <option selected>vkus torta</option>
                                <option value="1">Один</option>
                                <option value="2">Два</option>
                                <option value="3">Три</option>
                            </select>
                        </div>
                    </div>
                    <div class="file">
                        <label for="file" lang="en">images</label>
                        <input id="fileInput" type="file" name="files[]" multiple lang="en">
                    </div>
                </div>
                <div id="fileDisplayArea" class="fileDisplayArea">

                </div>
                <div class="butDiv">
                    <button type="submit" name="submit" class="button">oformity</button>
                </div>
            </div>
        </form>
    </div>

@endsection
