<?php $this->include("panel.layouts.header.header");  ?>
<form action="<?php $this->url("Categoory/store"); ?>" method="post">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="name ...">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input name="description" type="text" class="form-control" id="description" placeholder="description ...">
                    </section>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

 
                <?php $this->include("panel.layouts.footer.footer");  ?>
