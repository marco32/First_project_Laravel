@include('include/head')
@include('include/header')
<div class="content-wrapper">
    <section class="content-header">
      <ol class="breadcrumb">
      <h2>
        Dashboard
      </h2>
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
            
                <div id="page-wrapper">
<div>
    
<h2>Client</h2>
    <div>
        Nombre de client(s) : <?php echo count($customers); ?>
    </div>
      <a href="/customers" role="button" class="btn btn-info">Gestion client(s)</a>

</div>
<div>
<h2>Produit</h2>    
    <div>
        Nombre de produit(s) : <?php echo count($products);?>
    </div>
      <a href="/products" role="button" class="btn btn-info">Gestion produit(s)</a>

</div>
<div>
<h2>Groupe</h2>    
      <a href="/groups" role="button" class="btn btn-info">Gestion groupe(s)</a>
</div>
<div>
<h2>Produit(s)/Groupe(s)</h2>    
      <a href="/products_belong_groups" role="button" class="btn btn-info">Gestion produit(s)/groupe(s)</a>

</div>

            </div>
            </div>