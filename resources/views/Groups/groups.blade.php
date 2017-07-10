@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Tables Groups
    </h2>
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tables Groups</li>
    </ol>
  </section>            
  <div id="page-wrapper">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Created</th>
          <th>Updated</th>
          <th>Détail</th>
        </tr>
      </thead>
      <tbody>                    
        @foreach ($groups as $value) 
        <tr>                        
         <td>{{$value->name}}</td>
         <td>{{$value->created_at}}</td>
         <td>{{$value->updated_at}}</td>
         <td><a href={{'/groups/'.$value->id}}>Détails</a></td>                
       </tr>
       @endforeach                     
     </tbody>
   </table>
 </div>
</div>
<div>
  <a href="add_group" class="btn btn-success" role="button">Ajouter Nouveau Groupe</a>
</div>