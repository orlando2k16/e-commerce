@include ('public/master_public')

<div class="col-8 details">
    <br><br>
    <img class="el" src="{{$produsSelectat->poza}}" height="250px" width="250px">
    <hr/>
    <h1 class="det"><b>{{$produsSelectat->nume}}</b></h1>
    <p class="det">{{$produsSelectat->descriere}}</p>
    <p class="det"><b>Pret: {{$produsSelectat->pret}} lei</b></p>

    <form class="" action="/cart" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$produsSelectat->idP}}">
          <input class="form-control buton" type="submit" name="adauga" value="adauga in cos">
    </form>
</div>
