<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ürünler | BCE GİYİM</title>
</head>
<body style="background: #a0aec0">
<div class="container">
    <div class="row">
        @foreach($urunler as $urun)
            <div class="card col-2  mt-5 mx-5" style="width: 18rem; background: gray">
                <li class="list-group-item" value="{{ $urun->baslik }}">Başlık: {{ $urun->baslik }}</li>
                <img class="card-img-top" style="height: 100%" src="{{$urun->resim}}" alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Renk:
                        <select name="renk">
                            @foreach($renkler as $renk)
                                <option value="{{$renk->renk_adi}}">{{$renk->renk_adi}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="list-group-item">Beden:
                        <select name="renk">
                            @foreach($bedenler as $beden)
                                <option value="{{$beden->beden_adi}}">{{$beden->beden_adi}}</option>
                            @endforeach
                        </select></li>
                </ul>
                <div class="card-body" style="background: gray;">
                    <a href="#" class="card-link btn btn-success">Sepete Ekle</a>
                    <a href="{{route('detay',$urun->id)}}" class="card-link btn btn-primary">Detay</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
