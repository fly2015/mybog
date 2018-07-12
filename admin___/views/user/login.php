
<div class="row" style="margin-top: 70px">
    <div class="col-sm-6 col-sm-offset-3">
        <form action="index.php?controller=user&action=login" method="POST" role="form">
            <legend>Login</legend>

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" id="" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Input field">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="row" >
    <div class="col-sm-6 col-sm-offset-3">
        <p>
            <?php
            if (isset($_SESSION['login_fail_message'])) {
                echo $_SESSION['login_fail_message'];
            }
            ?>
        </p>
    </div>
</div>



