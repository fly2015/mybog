



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>

        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <legend>Form title</legend>

            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="upload" accept="image/*">
            </div>

            <img src="<?php echo dirname(__FILE__); ?>/uploads/Desert.jpg" alt=""/> 


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        require_once '../configs/GlobalConfigs.php';
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        require_once DOCUMENT_ROOT . '/models/common/Upload.php';
        $file = $_FILES['upload'];
        
        $upload = new Upload();
       
        var_dump($file); 


//        $upload = new Upload($file);
//        $upload->setUploadDir(UPLOAD_DIR);
//        if ($upload->isVail() == true) {
//            echo "<pre>";
//            print_r($upload->_errors);
//            echo "</pre>";
//        } else {
//            $name = $upload->upload(TRUE, 'pic_');
//        }
//
//        echo $root . 'uploads/' . $name;
//        ;
        ?>
    </body>
</html>
