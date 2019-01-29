@section('estiLogat')
      <h3 class="title2">{{$username}}, esti logat , click <a href="logout?username={{$username}}">aici</a> pentru delogare</h3>
@endsection
@include ('privat/master_privat')

<div class="col-8 order">

    <form class="" action="edit?username={{$username}}" method="post">
            @csrf
            <div class="row form1">
                    <label class="form-control tag col-2" for="nume">produs</label>
                    <input class="form-control camp col-10" type="text" name="nume" value="{{$produsEditat->nume}}">
            </div>
            <div class="row form1">
                    <label class="form-control tag col-2" for="descriere">descriere</label>
                    <textarea class="form-control camp col-10" name="descriere" rows="10" cols="80">{{$produsEditat->descriere}}</textarea>
            </div>
            <div class="row form1">
                   <label class="form-control tag col-2" for="poza">poza</label>
                   <input class="form-control camp col-10" type="text" name="poza" value="{{$produsEditat->poza}}">
            </div>
            <div class="row form1">
                    <label class="form-control tag col-2" for="pret">pret</label>
                    <input class="form-control camp col-10" type="text" name="pret" value="{{$produsEditat->pret}}">
            </div>
            <div class="row form1">
                    <input class="form-control buton" type="submit" value="editeaza produsul">
            </div>
            <input type="hidden" name="idP" value="{{$produsEditat->idP}}">
    </form>

    @if ($errors->any())
      <div>
          <ul>
              @foreach ($errors->all() as $error)
                  <li><h4>{{ $error }}</h4></li>
              @endforeach
          </ul>
      </div>
    @endif

</div>
</div>
<div class="row justify-content-center">
  <div class="col-8 text-center">
    <h1 class="title2"><a href="/products?username={{$username}}">back</a></h1>
  </div>
</div>
