<?php $this->include("app.layouts.header.header",['categories'=>$categories]);  ?>
<section class="container my-5">
        <section class="row">
            <section class="col-12">
                <h1><?= $category['name'] ?></h1>
                <hr>
            </section>
        </section>
        <section class="row">
            <?php foreach ($articles as $article){?>
         <section class="col-md-4">
                <h2><?= substr($article['body'],0,150)."..." ?></h2>
                <p><?= substr($article['body'],0,500)."..." ?></p>
                 <p><a class="btn btn-primary" href="<?php $this->url("Home/show/".$article['id']);?>" role="button">View details »</a></p>
            </section>
            <?php }?>
          </section>
    </section>

    <?php $this->include("app.layouts.footer.footer");  ?>
