<?php $this->include("panel.layouts.header.header");  ?>

<form action="<?php $this->url("Artiicle/update/".$article['id']); ?>" method="post">
                    <section class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="<?= $article['title'] ?>" id="title" placeholder="title ...">
                    </section>
                    <section class="form-group" >
                        <label for="cat_id">Category</label>
                        <select class="form-control" id="cat_id" name="cat_id">
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category['id'] ?>" <?php if($article['cat_id']==$category['id'] ) echo "selected"; ?> ><?= $category['name'] ?></option>
                            <?php  } ?>
                         </select>
                    </section>
                    <section class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body"   class="form-control" id="body" rows="5" placeholder="body ..."><?= $article['body'] ?></textarea>
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                <?php $this->include("panel.layouts.footer.footer");  ?>
