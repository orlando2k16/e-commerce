@section('estiLogat')
      <h3 class="title2">{{$username}}, esti logat , click <a href="logout?username={{$username}}">aici</a> pentru delogare</h3>
@endsection
@include ('privat/master_privat')
    <h2 class="title2"> {{$text}} </h2>
    <h2 class="title2"> <a href="orders?username={{$username}}">Pagina administrare comenzi</a> </h2>
    <h2 class="title2"> <a href="products?username={{$username}}">Pagina administrare produse</a> </h2>
