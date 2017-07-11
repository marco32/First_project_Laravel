@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Détail Group
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/group">Table Groups</a></li>      
      <li class="active">Détail Group</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container">
    @foreach ($group as $value) 
    <form action={{'/updateGroup/'.$value->g_id}} method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="g_name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input class="form-control" id="g_name" name="g_name" value={{$value->g_name}}>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Valider</button>
        </div>
      </div>
    </form>
    <form action={{"/deletegroup/".$value->g_id}} method="POST">
      <div class="col-sm-offset-2 col-sm-10">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-default">Supprimé</button>
      </div>
    </form>
    @endforeach
  </div>        
</body>
</html>
