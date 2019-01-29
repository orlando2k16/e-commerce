@include ('public/master_public')

<div class="col-8 cart">
    <hr class="line">
    <?php $total = 0; ?>
      @foreach ($cos as $cos)
            <img style="margin-right :10px" src="{{$produse->find($cos->idP)->poza}}" alt="" height="75px" width="75px">
            <h4 style="display:inline">
                     {{$produse->find($cos->idP)->nume}} X {{$cos->cantitate}}
                  -> pret: {{$produse->find($cos->idP)->pret}} X {{$cos->cantitate}}
                  = {{($produse->find($cos->idP)->pret)*($cos->cantitate)}} lei
                  <a href="sterge?id={{$cos->idP}}">sterge produsul</a>
                  <?php $total += ($produse->find($cos->idP)->pret)*($cos->cantitate); ?>
            </h4>
            <hr class="line">
      @endforeach
          <h3 class="centru">Total: {{$total}} lei</h3>
          <h3 class="centru"><a href="/order">Finalizeaza comanda</a></h3>
</div>
