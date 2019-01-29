@section('estiLogat')
      <h3 class="title2">{{$username}}, esti logat , click <a href="logout?username={{$username}}">aici</a> pentru delogare</h3>
@endsection
@include ('privat/master_privat')

<h2 class="title2">{{$text}}</h2>
<h2 class="title2"><a href="/admin?username={{$username}}">Inapoi la pagina de administrare.</a></h2>
</div>
<div class="row justify-content-center">
  <h1 class="title2"><a href="/add?username={{$username}}">Adauga produs</a></h1>
</div>

@foreach ($produse as $product)

    <div class="row borP">

          <div class="col-3">
                <img style="margin: 20px" src="{{$product->poza}}" height="150px" width="150px">
                <h3><a style="font-weight: bold" href="edit?id={{$product->idP}}&username={{$username}}">Editeaza</a></h3>
                <h3><a style="font-weight: bold" href="remove?id={{$product->idP}}&username={{$username}}">Sterge</a></h3>
          </div>

          <div class="col-8">
                <h3 style="font-weight: bold">{{$product->nume}} - {{$product->pret}} lei</h3>
                <p style="color: #437020; font-weight: bold" class="descriere">{{$product->descriere}}</p>
          </div>

    </div>

@endforeach
