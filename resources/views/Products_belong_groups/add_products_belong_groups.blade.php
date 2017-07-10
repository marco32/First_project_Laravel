@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Add Group/Produit
      <small>Control panel</small>
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="/product_belong_groups">Table Groups/Products</a></li>
      <li class="active">Add Group/Product</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container"> 
    <form action='/addProduct_belong_group' method="post" class="form-horizontal">
      {{ csrf_field() }}
<div class="row">
  <div class="col-sm-4">
  <h4>Group</h4>
  <ul>
    @foreach ($groups as $value) 
    <li>
    <label for="name" class="control-label">{{$value->name}}</label>
      <input type="radio" class="form-control" id="name" name="group_id" value={{$value->id}} >
    </li>
    @endforeach
  </ul>
  </div>
  <div class="col-sm-4">
    <h4>Product</h4>
  <ul>
    @foreach ($products as $value) 
    <li>
    <label for="pname" class="control-label">{{$value->name}}</label>
      <input type="checkbox" class="form-control" id="pname" name="produit_id[]" value={{$value->id}} >
    </li>
    @endforeach
  </ul>
  </div>
</div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Valider</button>
        </div>
      </div>
    </form>        
