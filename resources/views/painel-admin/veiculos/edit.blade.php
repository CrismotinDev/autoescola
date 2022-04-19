@extends('templates.painel-admin')
@section('title', 'Editar Categoria')
@section('content')
<h6 class="mb-4"><i>EDIÇÃO DE VEÍCULOS</i></h6><hr>
<form method="POST" action="{{route('veiculos.editar', $item)}}">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Placa</label>
                    <input value="{{$item->placa}}" type="text" class="form-control" id="" name="placa" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select class="form-control" name="categoria" id="categoria">
                       <?php
                            use App\Models\categoria;
                            $tabela = categoria::all();
                       ?>

                    <option value='{{$item->categoria}}'>{{$item->categoria}}</option>

                       @foreach ($tabela as $val )

                       <?php if($item->categoria != $val->nome){ ?>

                            <option value='{{$val->nome}}'>{{$val->nome}}</option>
                        <?php }?>
                       @endforeach

                    </select>

                </div>
            </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Km</label>
                        <input value="{{$item->km}}" type="text" class="form-control" id="" name="km" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Instrutor</label>
                        <select class="form-control" name="instrutor" id="instrutor">
                              <?php
                            use App\Models\instrutor;
                            $tabela = instrutor::all();
                       ?>

                <option value='{{$item->instrutor}}'>{{$item->instrutor}}</option>

                       @foreach ($tabela as $val )

                       <?php if($item->instrutor != $val->nome){ ?>

                       <option value='{{$val->id}}'>{{$val->nome}}</option>
                       <?php }?>
                       @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                   <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cor</label>
                            <input value="{{$item->cor}}" type="text" class="form-control" id="" name="cor" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Marca</label>
                            <input value="{{$item->marca}}" type="text" class="form-control" id="" name="marca" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ano</label>
                            <input value="{{$item->ano}}" type="text" class="form-control" id="" name="ano" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ultima Revisão</label>
                            <input value="{{$item->data_revisao}}" type="date" class="form-control" id="data_revisao" name="data">
                        </div>
                    </div>
            </div>

        <p align="right">
            <input type="hidden"  name="old" value="{{$item->placa}}">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="button" onclick="window.location='{{ route('veiculos.index') }}'" class="btn btn-warning">Voltar</button>


        </p>
    </form>
@endsection
