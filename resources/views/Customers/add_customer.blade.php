@include('include/head')
@include('include/header')
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
    <h2>
      Add Customer
      <small>Control panel</small>
    </h2>
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="/customer">Table Customer</a></li>
      <li class="active">Add Customer</li>
    </ol>
  </section>
</div>
<div id="page-wrapper">
  <div class="container"> 
    <form action='/addCustomer' method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="first_name" class="col-sm-2 control-label">First Name</label>
        <div class="col-sm-6">
          <input class="form-control" id="first_name" name="first_name" >
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" class="form-control" name="last_name" >
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" class="form-control" name="email">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Valider</button>
        </div>
      </div>
    </form>        
