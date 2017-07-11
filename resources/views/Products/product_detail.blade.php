@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Product Détail
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/product">Table Products</a></li>      
      <li class="active">Détail Product</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container">
    @foreach ($product as $value) 
    <form action={{'/updateProduct/'.$value->id}} method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input class="form-control" id="name" name="name" value={{$value->name}}>
        </div>
      </div>
      <div class="form-group">
        <label for="quantity" class="col-sm-2 control-label">Quantity</label>
        <div class="col-sm-6">
          <input id="quantity" class="form-control" name="quantity" value={{$value->quantity}}>
        </div>
      </div>
      <div class="form-group">
        <label for="price" class="col-sm-2 control-label">Price</label>
        <div class="col-sm-6">
          <input id="price" class="form-control" name="price" value={{$value->price}}>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Valider</button>
        </div>
      </div>
    </form>
    <form action={{"/deleteproduct/".$value->id}} method="POST">
      <div class="col-sm-offset-2 col-sm-10">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-default">Supprimé</button>
      </div>
    </form>
    @endforeach
  </div>        
</body>
</html>
