<?php foreach ($components as $component_item): ?>
  <center>

    <h2><?php echo $component_item['component_code'] ?></h2>
    <div id="main">
        <?php echo $component_item['program_code'] ?><br/>
        <?php echo $component_item['component_title'] ?>
        <?php echo $component_item['component_amount'] ?>
    </div>
  </center>

<?php endforeach ?>