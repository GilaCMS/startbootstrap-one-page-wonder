
 <header class="masthead text-center text-white" style="background-color:#333; background-image: url('<?=View::thumb($img,900)?>'); text-shadow: 3px 3px 0px #000000;">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">One Page Wonder</h1>
        <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
      </div>
    </div>
  </header>

    <!-- Page Content -->
    <div class="container col-lg-12">

        <div class="row d-flex justify-content-center">

            <!-- Blog Entries Column -->
            <article class="col-md-6 mt-4">

              <!-- Blog Post -->
                <h1><?=$title?></h1>
                <p class="lead">by <a href="<?=Config::base('blog/author/'.$author_id)?>"><?=$author?></a></p>
                <hr>
                <p>Posted on <?=date('F j, Y',strtotime($updated))?></p>
                <hr>
                <?php  if($_img=View::thumb($img,600))
                  //echo '<img class="img-responsive" src="'.$_img.'" alt=""><hr>'; ?>
                <?=$text?>
                <hr>
                <?php View::widgetArea('post.after'); ?>
            </article>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-2">
                <?php View::widgetArea('sidebar'); ?>
            </div>

        </div>
        <!-- /.row -->
