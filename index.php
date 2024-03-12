<?php include 'header.php'; ?>


<input type="checkbox" id="navtoggler" />
<div class="page-wrapper">
  <label class="toggle" for="navtoggler">☰</label>
  <div id="page-content">
    <?php include 'partials/buttons/buttons.php'; ?>
    <?php include 'partials/glcodes/gl-string-builder.php'; ?>
  </div>
  <div class="sidebar">
    <ul>
      <li><a href="">Item 1</a></li>
      <li><a href="">Item 2</a></li>
      <li><a href="">Item 3</a></li>
      <li><a href="">Item 4</a></li>
    </ul>
  </div>
</div>



<?php include 'footer.php'; ?>