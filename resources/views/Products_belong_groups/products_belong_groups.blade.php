@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tables Groups/Products
    </h1>
    <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tables Groups/Products</li>
    </ol>
  </section>            
  <div id="page-wrapper">
    <table class="table">
      <thead>
        <tr>
          <th>Group_id</th>
          <th>Product_id</th>
          <th>Détail</th>
        </tr>
      </thead>
      <tbody>                    
        @foreach ($products_belong_groups as $value) 
        <tr>                        
         <td>{{$value->group_id}}</td>
         <td>{{$value->produit_id}}</td>
         <td><a href={{'/products_belong_groups/'.$value->id}}>Détails</a></td>                
       </tr>
       @endforeach                     
     </tbody>
   </table>
 </div>
</div>
<div>
  <a href="/add_products_belong_groups" role="button" class="btn btn-success">Ajouter Nouveau Groupe de Produit</a>
</div>