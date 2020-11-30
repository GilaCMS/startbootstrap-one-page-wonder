<!-- Posts -->
<div style="height: 100px;"></div>
<div class="row">
    <div class="col-lg-6 wrapper" style="border-right: 1px dashed #ccc">
    <?php View::widgetArea('frontpage'); 
    ?>

    <?php /*foreach ($posts as $r) { ?>
      <div class="col-lg-12 d-flex" style="background-color: red; height: 3em;">
        <?php
            if($img=View::thumb($r['img'], 200)){
        ?>
         <div class="col-lg-4">
           <img src="'.$img.'" style="width:100%; height:auto">
         </div>
       <?php } else  { ?>
        <div class="col-lg-4"></div>
      <?php } ?>

       <div class="col-lg-8">
            <a href="<?=Config::url('blog/'.$r['id'].'/'.$r['slug'])?>">
                <h2 class="post-title" style="margin-top:0"><?=$r['title']?></h2>
            </a>
            <?=$r['description']?>
        </div>
      </div>
      ?php }*/?>

    <?php foreach ($posts as $r) { ?>
    <div class="col-lg-12 row gap-8px post-review d-flex">
            <?php
            if($img=View::thumb($r['img'], 200)){
             echo '<div class="col-lg-4" style="border-radius: 5px">';
                 echo '<img src="'.$img.'" style="width:100%; height:auto">';
             echo '</div>';
            } else 
              echo '<div class="col-lg-4"></div>';
            ?>

        <div class="col-lg-8">
            <a href="<?=Config::url('blog/'.$r['id'].'/'.$r['slug'])?>">
                <h2 class="post-title" style="margin-top:0"><?=$r['title']?></h2>
            </a>
            <?=$r['description']?>
        </div>
    </div>
    <hr>
    <?php } ?>

    <?php View::renderFile('pagination.php')?>
    </div>
    <div class="gm-3 sidebar ml-5 d-flex align-items-center">
      <form method="get" class="inline-flex" action="<?=Config::base('blog')?>">
        <input name='search' class="g-input fullwidth" value="<?=(htmlentities($search)??'')?>">
        <button class="g-btn g-group-item btn-primary" style="width: 7em; height: 2em; border-radius: 25px; border: none" onclick='submit'><?=__('Search')?></button>
    </form>
      <?php View::widgetArea('sidebar'); ?>
    </div>
</div>
