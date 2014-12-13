<!--	<div id="sidebar"><a href="<?php echo base_url()?>" class="visible-phone"><i class="icon icon-home"></i> Inicio</a>
    <ul>
      <li class="active"><a href="<?php echo base_url()?>"><i class="icon icon-home"></i> <span>Inicio</span></a></li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-th"></i> <span>Administración</span></a>
        <ul>
          <li><a href="<?php echo base_url('administration/enterprise')?>">Empresa</a></li>
          <li><a href="<?php echo base_url('administration/users')?>">Usuarios</a></li>
          <li><a href="<?php echo base_url('administration/modules')?>">Módulos del Sistema</a></li>
        </ul>
      </li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Ventas</span></a>
        <ul>
          <li><a href="<?php echo base_url('sales/quote')?>">Cotizaciones</a></li>
          <li><a href="<?php echo base_url('sales/orders')?>">Pedidos</a></li>
          <li><a href="<?php echo base_url('sales/invoicing')?>">Facturación</a></li>
          <li><a href="<?php echo base_url('sales/price_list')?>">Listado de Precios</a></li>
          <li><a href="<?php echo base_url('sales/customer')?>">Clientes</a></li>
        </ul>
      </li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-shopping-cart"></i> <span>Compras</span></a>
        <ul>
          <li><a href="<?php echo base_url('purchases/purchase_order')?>">Órdenes de Compra</a></li>
          <li><a href="<?php echo base_url('purchases/purchase_receipt')?>">Recibos por Compra</a></li>
          <li><a href="<?php echo base_url('purchases/invoice_entry')?>">Entrada de Facturas</a></li>
          <li><a href="<?php echo base_url('purchases/provider')?>">Proveedores</a></li>
        </ul>
      </li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-edit"></i> <span>Inventario</span></a>
        <ul>
          <li><a href="<?php echo base_url('inventory/inventory_adjustments')?>">Ajustes de Inventario</a></li>
          <li><a href="<?php echo base_url('inventory/entries_interstores')?>">Entradas Intersucursales</a></li>
          <li><a href="<?php echo base_url('inventory/outputs_interstores')?>">Salidas Intersucursales</a></li>
          <li><a href="<?php echo base_url('inventory/articles')?>">Artículos</a></li>
          <li><a href="<?php echo base_url('inventory/stores')?>">Almacenes</a></li>
        </ul>
      </li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-ok-sign"></i> <span>Contabilidad</span></a>
        <ul>
          <li><a href="#">Cuentas</a></li>
          <li><a href="#">Tipo de Cuentas</a></li>
          <li><a href="#">Balances</a></li>
          <li><a href="#">Costos</a></li>
          <li><a href="#">Cuentas por Cobrar</a></li>
          <li><a href="#">Cuentas por Pagar</a></li>
          <li><a href="#">Libro Diario</a></li>
          <li><a href="#">Arqueo de Caja</a></li>
        </ul>
      </li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Mantenimientos</span></a>
        <ul>
          <li><a href="<?php echo base_url('maintenance/articles')?>">Artículos</a></li>
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Proveedores</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="#">Marcas de Productos</a></li>
          <li><a href="#">Clasificación de Productos</a></li>
          <li><a href="#">Presentación de Productos</a></li>
        </ul>
      </li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-download-alt"></i> <span>Reportes</span></a>
        <ul>
          <li><a href="#">Inventario</a></li>
          <li><a href="#">Compras</a></li>
          <li><a href="#">Ventas</a></li>
        </ul>
      </li>
      
      <li class="submenu"> <a href="#"><i class="icon icon-tags"></i> <span>Ayuda</span></a>
        <ul>
          <li><a href="#">Manual de Usuario</a></li>
          <li><a href="#">Soporte Online</a></li>
        </ul>
      </li>

    </ul>
  </div>
  -->


  <div id="sidebar"><a href="<?php echo base_url()?>" class="visible-phone"><i class="icon icon-home"></i> Inicio</a>
    <ul>
      <li class="active"><a href="<?php echo base_url()?>"><i class="icon icon-home"></i> <span>Inicio</span></a></li>
      
      <?php foreach ($navbar as $row1) {?>
        <li class="submenu"> <a href="#"><i class="<?php echo $row1->pos_module_classification_icon?>"></i> <span><?php echo $row1->pos_module_classification_name?></span></a>
          <ul>
          <?php $query = $this->db->where("pos_module_classification_id", $row1->pos_module_classification_id)->where("pos_module_status_id", 1)->order_by("pos_module_position", "asc")->get("pos_module")->result();
            foreach ($query as $row2) {?>
              <li><a href="<?php echo base_url($row2->pos_module_url)?>"><?php echo $row2->pos_module_name?></a></li>
          <?php } ?>
          </ul>
        </li>
      <?php }?>

    </ul>
  </div>


