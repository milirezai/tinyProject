<?php $this->include("panel.layouts.header.header");  ?>

<form action="<?php $this->url("Categoory/update/".$category['id']); ?>" method="post">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $category['name'] ?>" id="title" placeholder="name ...">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" value="<?= $category['description'] ?>" id="description" placeholder="description ...">
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                <?php $this->include("panel.layouts.footer.footer");  ?>
