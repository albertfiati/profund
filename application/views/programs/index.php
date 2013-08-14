<?php foreach ($programs as $programs_item): ?>
  <center>

    <h2><?php echo $programs_item['program_title'] ?></h2>
    <div id="main">
        <?php echo $programs_item['program_code'] ?><br/>
        <?php echo $programs_item['program_objective'] ?>
        <?php echo $programs_item['program_currency'] ?>
        <?php echo $programs_item['program_amount'] ?>
    </div>
  </center>

<?php endforeach ?>