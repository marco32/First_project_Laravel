@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Tables Groups/Products
    </h2>
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tables Groups/Products</li>
    </ol>
  </section>            
  <div id="page-wrapper">
    <table class="table">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Détail</th>
        </tr>
      </thead>
      <tbody>                    
        @foreach ($productsgroups as $value) 
        <tr>                        
         <td>{{$value->g_name}}</td>
         <td><a href={{'/products_belong_groups/'.$value->g_id}} role="button" class="btn btn-info">Détail du Groupe de Produit</a>
       </tr>
       @endforeach                     
     </tbody>
   </table>
 </div>
</div>
<div>
  <a href="/add_products_belong_groups" role="button" class="btn btn-success">Ajouter/Modifié un Groupe de Produit</a>
</div>