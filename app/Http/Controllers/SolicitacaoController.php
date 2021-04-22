<?php

namespace App\Http\Controllers;

use App\Models\SolicitacaoTroca;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        $restultado_bytes = random_bytes(4);
        $data['status'] = "Aberta";
        $data['codigo'] =  bin2hex($restultado_bytes); 
        $dataModel = SolicitacaoTroca::create($data);
        
        return response()->json(['msg'=>'Solicitação Enviada com Sucesso','data'=>$dataModel]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($codigo)
    {
        $dataModel = SolicitacaoTroca::all()->where('codigo' ,'=', $codigo);
        return response()->json(['solicitacao'=>$dataModel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
