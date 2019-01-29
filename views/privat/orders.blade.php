@section('estiLogat')
      <h3 class="title2">{{$username}}, esti logat , click <a href="logout?username={{$username}}">aici</a> pentru delogare</h3>
@endsection
@include ('privat/master_privat')

<h2 class="title2">{{$text}}</h2>
<h2 class="title2"><a href="/admin?username={{$username}}">Inapoi la pagina de administrare.</a></h2>

<div class="col-12">

      @foreach ($comenzi as $comenzi)

              <?php $total = 0; ?>

              <div class="row">

                      <div class="col-4 bor">
                          <h5>Date cumparator:</h5>
                            <p>Nume complet: <b>{{$comenzi->nume}} {{$comenzi->prenume}}</b> </p>
                            <p>Adresa: <b>{{$comenzi->adresa}}</b> </p>
                            <p>Telefon: <b>{{$comenzi->telefon}}</b> </p>
                      </div>

                      <div class="col-4 bor-mid">
                          <h5>Produse comandate:</h5>
                              @foreach ($cos as $com)
                                  @if (($com->idC) === ($comenzi->idC))
                                        <p> {{$produse->find($com->idP)->nume}} X <b>{{$com->cantitate}}</b> </br>
                                         Pret: {{$produse->find($com->idP)->pret}} lei X <b>{{$com->cantitate}}</b> = {{($produse->find($com->idP)->pret)*($com->cantitate)}} lei </p>
                                         <?php $total += ($produse->find($com->idP)->pret)*($com->cantitate); ?>
                                  @endif
                              @endforeach
                      </div>

                      <div class="col-4 bor">
                          <h4>Comanda numarul: {{$comenzi->idC}}</h4>
                          <h4>Total de plata: {{$total}} lei</h4>
                          <hr>
                          <form class="" action="/removeOrder?username={{$username}}" method="post">
                                @csrf
                                <input type="hidden" name="idC" value="{{$comenzi->idC}}">
                                <input class="form-control buton" type="submit" name="removeOrder" value="Sterge comanda">
                          </form>

                      </div>
              </div>
            <br>
      @endforeach
</div>
