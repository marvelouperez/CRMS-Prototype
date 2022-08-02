<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'?>

<?php

if(isset($_POST['login'])) {

    $user_password = $_POST['password'];
    $user_email = $_POST['email'];
    $user_uuid = $_POST['uuid'];
    $user_usertype = $_POST['user_type'];

    $user->authUser($user_email, $user_uuid, $user_password);
}

?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>
<link href="/public/assets/css/login.css" rel="stylesheet" />

<div class="vh-100">
    <div class="container logform">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-md-9 col-lg-6 col-xl-5 school-logo">
                <img src="/assets/img/pup_pylon_1.jpg" class="img-fluid" alt="Sample image"
                    style="border-radius: 5px 5px 5px 5px">
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form method="POST" action="" id="usertype">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                            placeholder="Enter email address" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                            placeholder="Enter password" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <!-- UUID input -->
                    <div class="form-outline mb-3">
                        <input type="text" name="uuid" id="form3Example4" class="form-control form-control-lg"
                            placeholder="School ID" />
                        <label class="form-label" for="form3Example4">School ID</label>
                    </div>

                    <!-- User Type -->
                    <div class="form role">
                        <div>
                            <select class="form-control" name="user_type" form="usertype">
                                <option value="" selected="selected">-Select User Type-</option>
                                <option value="student">Student</option>
                                <option value="faculty">Faculty</option>
                            </select>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button class="btn btn-outline-light btn-lg" name="login" type="submit"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                class="link-danger">Register</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>