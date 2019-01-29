@include ('public/master_public')

<div class="col-8 order">
    <h1>order</h1>

    <form class="" action="order" method="post">
            @csrf
            <div class="row form1">
                    <label class="form-control tag col-2" for="nume">Nume</label>
                    <input class="form-control camp col-10" type="text" name="nume" value="">
            </div>
            <div class="row form1">
                    <label class="form-control tag col-2" for="prenume">Prenume</label>
                    <input class="form-control camp col-10" type="text" name="prenume" value="">
            </div>
            <div class="row form1">
                   <label class="form-control tag col-2" for="adresa">Adresa</label>
                   <input class="form-control camp col-10" type="text" name="adresa" value="">
            </div>
            <div class="row form1">
                    <label class="form-control tag col-2" for="telefon">Telefon</label>
                    <input class="form-control camp col-10" type="text" name="telefon" value="">
            </div>
            <div class="row form1">
                    <input class="form-control buton" type="submit" value="finalizeaza comanda">
            </div>
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
