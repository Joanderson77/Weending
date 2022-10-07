<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Iten;
use App\Categoria;

class PresentsController extends Controller
{

    private $iten;
    private $categoria;

    public function __construct(Iten $iten, categoria $categoria){
        $this->iten = $iten;
        $this->categoria = $categoria;
    }

    public function presents(){

        $itens = $this->iten::all();
        // return $itens;
        return view('web.presents', compact('itens'));
    }

    public function categoria($id){
        $itens = Iten::where('id_categoria', $id)->get();
        return view('web.categoria', compact('itens'));
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
        
        return view('web.mensagem');
        

    }

}
