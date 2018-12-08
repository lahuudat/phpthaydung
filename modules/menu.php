<?php
  include "libraries/db_menu.php";
  $menus=get_menu();
?>

<div class="classynav" >
    <ul >
        <li class="active"><a href="index.php">Home</a></li>
         <?php foreach ($menus as $menu): ?>
        <li><a href="index.php?c=danhmuc&id=<?php echo $menu['cat_id']; ?>"><?php echo $menu['name']; ?></a>
           <?php if (count($menu['child'])): ?>
            <ul class="dropdown">
              <?php foreach ($menu['child'] as $item): ?>
                <li><a href="index.php?c=danhmuc&id=<?php echo $item['cat_id']; ?>"><?php echo $item['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
        
    </ul>
</div>