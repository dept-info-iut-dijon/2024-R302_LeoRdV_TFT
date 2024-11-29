<?php
  $this->layout('template', ['title' => 'TP TFT']);
?>

<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>

<div id="colones">
  <div class="col">
    <h2>col 0</h2>
    <p>id = 0</p>
    <?php $idUnit0 = 0; ?>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="edit-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit0 ?>">
    </form>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="del-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit0 ?>">
    </form>
  </div>
  <div class="col">
    <h2>col 1</h2>
    <p>id = 1</p>
    <?php $idUnit1 = 1; ?>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="edit-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit1 ?>">
    </form>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="del-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit1 ?>">
    </form>
  </div>
  <div class="col">
    <h2>col 2</h2>
    <p>id = 2</p>
    <?php $idUnit2 = 2; ?>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="edit-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit2 ?>">
    </form>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="del-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit2 ?>">
    </form>
  </div>
  <div class="col">
    <h2>col 3</h2>
    <p>id = 3</p>
    <?php $idUnit3 = 3; ?>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="edit-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit3 ?>">
    </form>
    <form action="index.php" method="get" style="display:inline;">
      <input type="submit" value="del-unit" name="action">
      <input type="hidden" name="id" value="<?= $idUnit3 ?>">
    </form>
  </div>
</div>
