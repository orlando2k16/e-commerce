<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produse;
use App\cos;
use App\comenzi;
use App\comenziProduse;

class PublicController extends Controller
{
      public function home(){
        $produse = produse::all();

        $text = "<h1>Cumpara Jocuri de societate online! </h1><br>
                 <h1>Descopera promotiile zilei si preturile avantajoase la o gama variata de Jocuri de societate.</h1><br>
                 <h1>Alege un joc din lista pentru a vedea mai multe detalii!</h1><br>";

        return view('/public/home', compact('produse', 'text'));
      }

      public function details($id){
        $produse = produse::all();
        $produsSelectat = produse::find($id);

        return view('/public/details', compact('produse', 'produsSelectat'));
      }

      public function cart(){
        $produse = produse::all();
        $cos = cos::all();
        return view('/public/cart', compact('produse', 'cos'));
      }

      public function add(Request $request){
        $produse = produse::all();

        $id = $request->all()['id'];

        if (!(cos::find($id))) {
              $produsAdaugat = new cos();
              $produsAdaugat->idP = $id;
              $produsAdaugat->cantitate = '1';
              $produsAdaugat->save();
        }else {
              $produsAdaugat = cos::find($id);
              $produsAdaugat->cantitate = $produsAdaugat->cantitate + 1;
              $produsAdaugat->save();
        }

        $cos = cos::all();

        return view('/public/cart', compact('produse', 'cos'));
      }

      public function sterge(Request $request){
            $produse = produse::all();

            $id = $request->all()['id'];

            $produsDeSters = cos::find($id);
            $produsDeSters->delete();

            $cos = cos::all();

            return view('/public/cart', compact('produse', 'cos'));

    }

      public function orderForm(){
        $produse = produse::all();
        return view('/public/order', compact('produse'));
      }


      public function order(Request $request){
        $produse = produse::all();

        $validatedData = $request->validate(
          [ 'nume' => 'required',
            'prenume' => 'required',
            'adresa' => 'required',
            'telefon' => 'required|numeric',
          ],
          ['nume.required' => 'Introduceti numele !',
           'prenume.required' => 'Introduceti prenumele !',
           'adresa.required' => 'Introduceti adresa !',
           'telefon.required' => 'Introduceti numarul de telefon !',
           'telefon.numeric' => 'Introduceti un numar de telefon valid!'
          ]);

          $comanda = new comenzi();
          $comanda->nume = $request->all()['nume'];
          $comanda->prenume = $request->all()['prenume'];
          $comanda->adresa = $request->all()['adresa'];
          $comanda->telefon = $request->all()['telefon'];
          $comanda->save();
          $id = comenzi::max('idC');
          $nrDeComanda = comenzi::find($id)->idC;

          foreach (cos::all() as $value) {
              $comandaProdus = new comenziProduse;
              $comandaProdus->idC = $nrDeComanda;
              $comandaProdus->idP = $value->idP;
              $comandaProdus->cantitate = $value->cantitate;
              $comandaProdus->save();
          }

          cos::query()->truncate();

          $text = "<h1>Comanda a fost plasata! Va multumim!</h1>";


        return view('/public/home', compact('produse', 'text'));
      }
}
