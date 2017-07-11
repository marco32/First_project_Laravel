@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Add Group
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="/groups">Table Groups</a></li>
      <li class="active">Add Group</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container"> 
    <form action='/addGroup' method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="g_name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input class="form-control" id="g_name" name="g_name" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Valider</button>
        </div>
      </div>
    </form>        
