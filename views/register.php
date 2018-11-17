<?php require "partials/_header.php";?>
<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="form-gap"></div>
            <form class="form-signin" action="/register" method="post" enctype="multipart/form-data">
                <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Creater an account</h1>
                <label for="inputUserName" class="sr-only">UserName</label>
                <input type="text" name="username" id="inputUserName" class="form-control" placeholder="UserName" required autofocus>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <input type="file" name="profile_photo" id="inputProfileImage" class="form-control" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </form>
            <div class="form-gap"></div>
        </div>
    </div>
</div>
<?php require "partials/_footer.php"; ?>