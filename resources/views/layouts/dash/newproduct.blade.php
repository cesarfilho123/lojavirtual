@extends('layouts.dash.layout')
@section('content')
  <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin-top:50px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="product-payment-inner-st">
            <ul id="myTabedu1" class="tab-review-design">
              <li class="active"><a href="#description">Cadastrar Produto</a></li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
              <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div id="dropzone1" class="pro-ad addcoursepro">
                        <form action="{!! route('cadastrarproduto') !!}" enctype="multipart/form-data"class="dropzone dropzone-custom needsclick addcourse dz-clickable" id="demo1-upload" novalidate="novalidate" method="POST">
                          <div class="row" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input name="nome" type="text" class="form-control" placeholder="Titulo do Produto">
                              </div>
                              <div class="form-group">
                                <input name="valor" type="number" class="form-control" placeholder="Valor">
                              </div>
                              <div class="form-group">
                                <input name="cores[]" type="text" class="form-control" placeholder="Cor">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input name="descricao" type="text" class="form-control" placeholder="Descrição">
                              </div>
                              <div class="form-group">
                                <input name="tamanhos[]" type="text" class="form-control" placeholder="Tamanho">
                              </div>
                            </div>
                            <div class="col-lg-12">
                            <label for="">Imagem: </label>  <input type="file" name="imagens">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="payment-adress">
                                <button type="submit" class="btn btn-primary waves-effect waves-light" style="width:30%;font-size:20px;">
                                  Cadastrar Produto
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
