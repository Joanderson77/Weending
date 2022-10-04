<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Iten;
use App\Gategory;

class PresentsController extends Controller
{

    private $iten;
    private $gategory;

    public function __construct(Iten $iten, Gategory $gategory){
        $this->iten = $iten;
        $this->gategory = $gategory;
    }

    public function presents(){

        $itens = $this->iten::all();
        // return $itens;
        return view('web.presents', compact('itens'));
    }

    public function gategories($id){
        $iten = Iten::where('id_categories', $id)->get();
        return view('web.gategorie', compact('iten'));
    }

    public function destroy($id) {

        $iten = \App\Iten::find($id);
        $iten->delete();
        

      
        return redirect()->back();

    }

    public function concluir(Request $request, $id){

        $data = $request->all();

        $iten = $this->iten->find($id);
        // $iten = App\Iten::find($data['iten']);
        iten::where('id',$id)->update([
            'qtd' => 0
            
        ]);
        
        return redirect()->back();
        

    }

}
