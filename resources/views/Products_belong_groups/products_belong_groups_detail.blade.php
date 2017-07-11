@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Détail Product/Group
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/products_belong_groupsoups">Table Product/Groups</a></li>      
      <li class="active">Détail Product/Group</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container">
    @foreach ($product_belong_group as $value) 
    <h3>{{$value->g_name}}</h3>
      <a href={{'/updateProducts_belong_groups/'.$value->g_id}}>Modifié</a>
    @break;
  @endforeach
    <ul>
    @foreach ($product_belong_group as $value) 
      <li>{{$value->name}}</li>
    @endforeach
    </ul>
  </div>      
  <div>
      <a href="/products_belong_groups" role="button" class="btn btn-success">Retour</a>

  </div>  
</body>
</html>
