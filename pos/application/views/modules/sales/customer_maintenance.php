<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Lista de Clientes</h1>

  </div>

<div >
  <a href="<?php echo base_url('sales/customer_new')?>">
  <button type="button" class="btn btn-success">Agregar Cliente</button></a>                  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Datos de Clientes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nombre </th>
                  <th>Direccion</th>
                  <th>Nit</th>
                  <th>Telefono</th>
                  <th>edicion</th>
                </tr>
              </thead>
              <tbody>

                
<?php
if (isset($result)) {
  foreach ($result as $row) {
?>

 <tr class="gradeA">
<td><?php echo $row->pos_client_fullname?></td>
<td><?php echo $row->pos_client_address?></td>
<td><?php echo $row->pos_client_nit?></td>
<td><?php echo $row->pos_client_phone?></td>
<td><a href="<?php echo base_url('sales/customer_edit/'.$row->pos_client_id)?>"><button type="button" class="btn btn-success">Editar</button></a></td>
</tr>
<?php
}
}
?>
              </tbody>
            </table>
          </div>
        </div>