<div class="row">
    <div class="col-xs-12 col-sm-12">

        <p>List</p>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Comments</th>
                    <th>Publish</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) {
                    ?>
                    <tr>
                        <td><?php echo $item->getName(); ?></td>
                        <td><?php echo $item->getCategory_name(); ?></td>
                        <td><?php echo $item->getType(); ?></td>
                        <td><?php echo 01; ?></td>
                        <td><?php echo $item->getCreate_time(); ?></td>
                        <td>
                            <a href="#" >Detail</a>
                            |
                            <a href="#">Edit</a>
                            |
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>

    </div>
</div>