<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\useri;
use App\comenzi;
use App\comenziProduse;
use App\produse;


class PrivatController extends Controller
{
    public function loginForm(){
          $text = '';
          return view('/privat/login', compact('text'));
    }

    public function loginProcess(Request $request){

      $username = $request->username;
      $password = $request->password;

      $userExistent = useri::where('username', $username)->first();

      if (!$userExistent) {
        $text = 'User inexistent!';
        return view('/privat/login', compact('text'));
      }else {
        if ($userExistent->parola !== $password) {
          $text = 'Parola este incorecta!';
          return view('/privat/login', compact('text'));
        }else {
          $text = 'Bine ai venit in pagina de administrare!';
          $userExistent->logat = 1;
          $userExistent->save();
          return view('/privat/admin', compact('text', 'username'));
        }
      }

    }

    public function logout(Request $request){
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          $userExistent->logat = 0;
          $userExistent->save();
          return redirect('/');
    }

    public function orders(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {
            $comenzi = comenzi::all();
            $cos = comenziProduse::all();
            $produse = produse::all();
            $text = 'Bine ai venit in pagina de administrare comenzi!';

            return view('/privat/orders', compact('text', 'username', 'comenzi', 'cos', 'produse'));
          }
    }

    public function removeOrder(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {
            $idC = $request->all()['idC'];
            $cos = comenziProduse::all();
            $produse = produse::all();
            $comenzi = comenzi::all();

            $comandaStearsa = comenzi::find($idC);
            $comandaStearsa->delete();
            $comandaStearsa = comenziProduse::find($idC);
            $comandaStearsa->delete();

            $text = 'Comanda a fost stearsa!';
            $comenzi = comenzi::all();
            $cos = comenziProduse::all();
            $produse = produse::all();

            return view('/privat/orders', compact('text', 'username', 'comenzi', 'cos', 'produse'));
          }

    }

    public function products(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {
            $produse = produse::all();
            $text = 'Bine ai venit in pagina de administrare produse!';
            return view('/privat/products', compact('text', 'username', 'produse'));
          }
    }

    public function verify(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {
            $text = 'Bine ai venit in pagina de administrare!';
            return view('/privat/admin', compact('text', 'username'));
          }
    }

    public function edit(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {

            $id = $request->all()['id'];
            $produse = produse::all();
            $produsEditat = produse::find($id);

            return view('/privat/edit', compact('username', 'produsEditat'));
          }
    }

    public function editProcess(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {

            $validatedData = $request->validate([
                  'nume' => 'required',
                  'descriere' => 'required',
                  'poza' => 'required',
                  'pret' => 'required',
                  'pret' => 'numeric'
              ],
                  ['nume.required' => 'Adaugati o denumire a produsului!',
                  'descriere.required' => 'Adaugati o descriere a produsului!',
                  'poza.required' => 'Adaugati o poza a produsului!',
                  'pret.required' => 'Adaugati un pret al produsului!',
                  'pret.numeric' => 'Pretul trebuie sa fie un numar!'
                  ]);

                  $id = $request->all()['idP'];
                  $produsEditat = produse::find($id);

                  $produsEditat->nume = $request->all()['nume'];
                  $produsEditat->descriere = $request->all()['descriere'];
                  $produsEditat->poza = $request->all()['poza'];
                  $produsEditat->pret = $request->all()['pret'];
                  $produsEditat->save();

                  $text = 'Produsul a fost editat.';
                  $produse = produse::all();

            return view('/privat/products', compact('username', 'produse', 'text'));
          }
    }

    public function add(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {

            return view('/privat/add', compact('username'));
          }
    }

    public function addProcess(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {

            $validatedData = $request->validate([
                  'nume' => 'required',
                  'descriere' => 'required',
                  'poza' => 'required',
                  'pret' => 'required',
                  'pret' => 'numeric'
              ],
                  ['nume.required' => 'Adaugati o denumire a produsului!',
                  'descriere.required' => 'Adaugati o descriere a produsului!',
                  'poza.required' => 'Adaugati o poza a produsului!',
                  'pret.required' => 'Adaugati un pret al produsului!',
                  'pret.numeric' => 'Pretul trebuie sa fie un numar!'
                  ]);

                  $produsAdaugat = new produse();

                  $produsAdaugat->nume = $request->all()['nume'];
                  $produsAdaugat->descriere = $request->all()['descriere'];
                  $produsAdaugat->poza = $request->all()['poza'];
                  $produsAdaugat->pret = $request->all()['pret'];
                  $produsAdaugat->save();

                  $text = 'Produsul a fost adaugat.';
                  $produse = produse::all();

            return view('/privat/products', compact('username', 'produse', 'text'));
          }
    }

    public function remove(Request $request){
          if (!($request->username)) {
            return redirect('/login');
          }
          $username = $request->username;
          $userExistent = useri::where('username', $username)->first();
          if ($userExistent->logat == 0) {
            return redirect('/login');
          }else {

            $id = $request->all()['id'];

            if (comenziProduse::all()->where('idP', '=', $id)->first()) {
              $text = 'Produsul nu poate fi sters deoarece se afla intr-o comanda!';
              $produse = produse::all();
              return view('privat/products', compact('username', 'text', 'produse'));

            }else{

            $produsSters = produse::find($id);
            $produsSters->delete();

            $text = 'Produsul a fost sters!';

            $produse = produse::all();

            return view('/privat/products', compact('username', 'text', 'produse'));
              }
          }
     }
}
