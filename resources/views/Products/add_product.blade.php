@include('include/head')
@include('include/header')

<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Add Product
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="/product">Table Products</a></li>
      <li class="active">Add Product</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container"> 
    <form action='/addProduct' method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input class="form-control" id="name" name="name" >
        </div>
      </div>
      <div class="form-group">
        <label for="quantity" class="col-sm-2 control-label">Quantity</label>
        <div class="col-sm-6">
          <input id="quantity" class="form-control" name="quantity" >
        </div>
      </div>
      <div class="form-group">
        <label for="price" class="col-sm-2 control-label">Price</label>
        <div class="col-sm-6">
          <input id="price" class="form-control" name="price">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Valider</button>
        </div>
      </div>
    </form>        
