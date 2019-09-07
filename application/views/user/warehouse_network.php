<div class="warehouse-network-1">
    <div class="container">
        <p>Our network is currently spread in the following cities:</p>
        <div class="network-link1">
            <ul>
             <?php
              if(!empty($city_data)){
                foreach($city_data as $warehouse_city){?>
                   <li><a href="<?=base_url('user/warehouse_network_detailing/'.$warehouse_city->id.'')?>"><?php echo $warehouse_city->city_name ?></a></li>
              <?php }} ?>
            </ul>
        </div>
    </div>
</div>