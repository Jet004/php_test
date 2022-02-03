<?php
    require $_SERVER['DOCUMENT_ROOT'].'/controller/userController.php';
?>

<div class="container register-form">
    <form class="form" action="?page=register" method="post">
        <div class="note">
            <p>This is a simple register form made using Boostrap.</p>
        </div>

        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number *" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Your Password *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="confirm" placeholder="Confirm Password *" value=""/>
                    </div>
                </div>
            </div>
            <input type="submit" class="btnSubmit" value="Go!" />
        </div>
    </form>
</div>

