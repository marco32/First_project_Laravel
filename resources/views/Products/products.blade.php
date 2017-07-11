@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Tables Products
    </h2>
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tables Products</li>
    </ol>
  </section>            
  <div id="page-wrapper">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Created</th>
          <th>Updated</th>
          <th>Détail</th>
        </tr>
      </thead>
      <tbody>                    
        @foreach ($products as $value) 
        <tr>                        
         <td>{{$value->name}}</td>
         <td>{{$value->quantity}}</td>
         <td>{{$value->price}}</td>
         <td>{{$value->created_at}}</td>
         <td>{{$value->updated_at}}</td>
         <td><a href={{'/products/'.$value->id}}>Détails</a></td>                
       </tr>
       @endforeach                     
     </tbody>
   </table>
 </div>
</div>
<div>
  <a href="/add_product" role="button" class="btn btn-success">Ajouter Nouveau Produit</a>
</div>