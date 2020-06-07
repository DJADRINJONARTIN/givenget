<style media="screen">
  div.dropdown {
    margin-top: 50%;
  }
  div.dropdown a {
    color: black;
  }
  div.dropdown a.dropdown-item {
    border: 1px solid black;
    text-transform: capitalize;
  }
</style>
<?php
function dropdown($num, $categorie, $info) {
  echo "
  <div class='nav-item dropdown'>
    <a class='nav-link' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>•••</a>
    <div class='dropdown-menu'>";
      for ($i = 0;$i < count($info);$i++) {
        $element = $info[$i];
        echo "<a class='dropdown-item' href='$element.php?id=$num&categorie=$categorie'>".$element."</a>";
      }

    echo "
    </div>
  </div>
  ";
}
?>
