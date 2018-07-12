<div class="row">
    <div class="col-xs-12 col-sm-10">
        <form  action="" method="POST" role="form" enctype="multipart/form-data">
            <legend>Add new article</legend>
            <div class="form-group">
                <?php
                if (isset($_SESSION['errors'])) {
                    $errors = $_SESSION['errors'];
                    foreach ($errors as $error) {
                        ?>
                
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Required</strong> <?php echo $error; ?>
                        </div>
                
                        <?php
                    }
                }
                ?>
            </div>

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="">
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" readonly="true" name="slug" id="slug" class="form-control" id="" placeholder="">
            </div>

            <div class="form-group">
                <label for="">Category</label>

                <div style="width: 300px">
                    <select name="category_id" id="input" class=" form-control">
                        <option value="">Chọn</option>
                        <?php foreach ($categories as $category) {
                            ?>
                            <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" onchange="readURL(this)" accept="image/*">
            </div>
            <div class="form-group">
                <label for=""></label>
                <img id="blah" src="" alt="alt" />
            </div>

            <div class="form-group">
                <label for="">Summary</label>
                <textarea name="summary" rows="3" cols="50" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="editor1" rows="10" cols="80" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="">Status</label>

                <div style="width: 300px">
                    <select name="status" id="input" class=" form-control" >
                        <option value="1">Enable</option>
                        <option value="0">Disable</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
