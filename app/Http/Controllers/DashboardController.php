<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
class DashboardController extends Controller
{
  private $product;
  public function __construct(Produto $product)
  {
    $this->middleware('auth');
    $this->product = $product;
  }
  public function index()
  {
    $user =  Auth::user();
    return view('layouts.dash.dashboard',['user'=>$user]);
  }
  public function produto()
  {
    $user =  Auth::user();
    return view('layouts.dash.newproduct',['user'=>$user]);
  }
  public function cadastrar(Request $request)
  {
      $name = kebab_case($request['nome']);
      $request->imagens->storeAs('produtos',$name);

      unset($request->_token);
      $this->product->insert([
        'nome'=>'opa',
        'descricao'=>'aaa',
        'imagens'=>'aa',
        'cores'=>'aaa',
        'tamanhos'=>'aa',
        'valor'=>10,
        'status'=>'ativo'
      ]);
  }
}
