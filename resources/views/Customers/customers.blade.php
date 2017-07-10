@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Tables Customers
    </h2>
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tables Customers</li>
    </ol>
  </section>            
  <div id="page-wrapper">
    <table class="table">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Created</th>
          <th>Updated</th>
          <th>Détail</th>
        </tr>
      </thead>
      <tbody>                    
        @foreach ($customers as $value) 
        <tr>                        
         <td>{{$value->first_name}}</td>
         <td>{{$value->last_name}}</td>
         <td>{{$value->email}}</td>
         <td>{{$value->created_at}}</td>
         <td>{{$value->updated_at}}</td>
         <td><a href={{'/customers/'.$value->id}}>Détails</a></td>                
       </tr>
       @endforeach                     
     </tbody>
   </table>
 </div>
</div>
<div>
  <a href="add_customer" class="btn btn-success" role="button">Ajouter Nouveau Client</a>
</div>