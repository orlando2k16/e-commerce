
    <div class="col-4 list">
      <br><br>
        @foreach ($produse as $produs)

                <a href="/details/{{$produs->idP}}">
                    <img class="el" src="{{$produs->poza}}" height="200px" width="200px">
                </a>
                <a href="/details/{{$produs->idP}}">
                    <h1 class="el">{{$produs->nume}}</h1>
                </a>
                <hr/>
        @endforeach
    </div>
