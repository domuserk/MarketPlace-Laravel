@extends('layouts.app');

@section('content')
<h1>Criar Produto</h1>
<form action="{{route('admin.products.store')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
    <label for="">Nome Produto </label>
    <input class="form-control" type="text" name="name">
   
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <input class="form-control" type="text" name="description">
    
</div class="form-group">
<div>
    <label for="">Conteúdo</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    
</div>
<div class="form-group">
    <label for="">Preço</label>
    <input class="form-control" type="text" name="price">
    
</div>
<div class="form-group">
    <label for="">Slug </label>
    <input class="form-control" type="text" name="slug">
   
</div>
<div class="form-group">
    <label for="">Lojas </label>
    <select name="store">
    @foreach($stores as $store)
    <option value="{{$store->id}}">{{$store->name}}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <button class="btn btn-lg btn-success " type="submit">Criar Produto</button>
</div>
</form>
@endsection