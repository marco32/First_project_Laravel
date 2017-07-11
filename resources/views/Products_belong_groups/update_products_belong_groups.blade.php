@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Update Group/Produit
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="/product_belong_groups">Table Groups/Products</a></li>
      <li class="active">Update Group/Product</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container"> 
    <div class="container">
    <div>Contenu à modifié:</div>
    @foreach ($product_belong_group as $value) 
    <div>{{$value->g_name}}<div>
    @break;
  @endforeach
    <ul>
    @foreach ($product_belong_group as $value) 
      <li>{{$value->name}}</li>
    @endforeach
    </ul>
  </div>
  <div>
    Veuillez mettre à jour le contenu du groupe.
  </div>      
    <form action='/addProduct_belong_group' method="post" class="form-horizontal">
      {{ csrf_field() }}
     
<div class="row">
  <div class="col-sm-4">
  @foreach ($product_belong_group as $value) 
  <h4>Nom: {{$value->g_name}}</h4>
    <input style="display: none;" type="text" name="group_id" value={{$value->group_id}}>
    @break;
  @endforeach
    </div>
    </div>
  <div>
    <h4>New Product: </h4>
  <ul>
    @foreach ($products as $value) 
    <li>
    <label for="pname" class="control-label">{{$value->name}}</label>
      <input type="checkbox" class="form-control" id="pname" name="produit_id[]" value={{$value->id}} >
    </li>
    @endforeach
  </ul>
  </div>


      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Valider</button>
        </div>
      </div>
      </fieldset>
    </form>        
<a href="/product_belong_groups" role="button" class="btn btn-info">Table Groups/Products</a>