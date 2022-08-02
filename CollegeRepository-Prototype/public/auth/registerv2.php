<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'; ?>

<?php
if(isset($_POST['register'])){
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_uuid = $_POST['uuid'];
    $user_usertype = $_POST['usertype'];

    if($user->saveUser($user_email, $user_password, $user_uuid, $user_usertype)){
        header("Location: /auth/login");
    }else{
        header("Location: /");
    }
} 
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>

<div class="container" style="margin-top: 30px">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                        <form action="/auth/registerv2" method="POST" class="mx-1 mx-md-4">

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input name="email" type="text" id="form3Example1c" class="form-control" />
                                    <label class="form-label" for="form3Example1c">Email</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input name="uuid" type="text" id="form3Example3c" class="form-control" />
                                    <label class="form-label" for="form3Example3c">Student ID</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">

                                    <div>
                                        <select class="form-control" name="usertype" id="form3Example4c">
                                            <option value="" selected="selected">-Select User Type-</option>
                                            <option value="student">Student</option>
                                            <option value="faculty">Faculty</option>
                                        </select>
                                    </div>
                                    <label class="form-label" for="form3Example3c">User Type</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input name="password" type="password" id="form3Example4c" class="form-control" />
                                    <label class="form-label" for="form3Example4c">Password</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="password" id="form3Example4cd" class="form-control" />
                                    <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button name="register" type="submit"
                                    class="btn btn-outline-light btn-lg">Register</button>
                            </div>

                        </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2"
                        style="margin-bottom: 70px">

                        <img src="/public/assets/img/pupmain_bg_1.jpg" class="img-fluid" alt="Sample image"
                            style="border-radius: 10px 10px 10px 10px">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>