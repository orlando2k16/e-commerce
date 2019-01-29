@include ('privat/master_privat')

<div class="col-8 shadow" style="margin-top: 5em">

        <form class="form-group" action="admin" method="post">
              @csrf
              <div class="form-group row justify-content-center ">
                    <label class="col-sm-2 col-form-label" style="font-weight: bold" for="username">username</label>
                    <div class="col-sm-8">
                        <input class="form-control camp" type="text" name="username" value="">
                    </div>
              </div>
              <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label" style="font-weight: bold" for="password">password</label>
                    <div class="col-sm-8">
                        <input class="form-control camp" type="password" name="password" value="">
                    </div>
              </div>
              <div class="form-group row justify-content-center">
                    <div class="col-sm-10">
                    <input class="form-control buton" type="submit" name="login" value="login">
                    </div>
              </div>
      </form>
      <div class="form-group row justify-content-center">
            <div class="col-sm-10 text-center">
              <h3>{{$text}}</h3>
            </div>
      </div>
</div>
