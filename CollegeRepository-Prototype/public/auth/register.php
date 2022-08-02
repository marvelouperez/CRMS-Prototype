<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php';?>

<?php
if(isset($_POST['registerBtn'])){
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_uuid = $_POST['uuid'];
    $user_usertype = $_POST['user_type'];

    if($user->saveUser($user_email, $user_password, $user_uuid, $user_usertype)){
        header("Location : /auth/login");
    }
    else{
        header("Location: /testFailed");
    }
}
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>

<link href="/public/assets/css/register.css" rel="stylesheet" />

<div class="container" style="margin-top: 30px">
    <h1 style="font-size:x-large ;">Registration Form</h1>
    <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist" style="margin-top: 30px">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="color:black">1st
                Step</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="color:black">2nd
                Step</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false" style="color:black">3rd
                Step</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <!--Personal Information-->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="font-size: large">Personal Information</h3>
                                <!--FORM POST -->
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="firstName" name="fname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="firstName">First Name</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="lastName" name="mname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="lastName">Middle Name</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="lastName" name="lname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="lastName">Last Name</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4 align-items-center">

                                            <div class="form-outline">
                                                <div class="input-group date" id="datepicker">
                                                    <input type="text" class="form-control" id="date"
                                                        name="birthdate" />
                                                    <span class="input-group-append"></span>

                                                </div>
                                            </div>
                                            <label class="form-label" for="lastName">Birthdate</label>


                                            <script>
                                                $(function () {
                                                    $('#datepicker').datepicker();
                                                });
                                            </script>

                                        </div>

                                        <div class="col-md-6 mb-4">

                                            <h6 class="mb-2 pb-1">Gender: </h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="femaleGender" value="female" checked />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="maleGender" value="male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="otherGender" value="others" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="tel" id="phoneNumber" name="telephone"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="phoneNumber">Telephone Number</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="tel" id="phoneNumber" name="cellphone"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="phoneNumber">Cellphone Number</label>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Address-->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="font-size: large;">Address</h3>

                                <!--FORM POST -->
                                <form method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="firstName" name="fulladdress"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="firstName">Full Address</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="lastName" class="form-control form-control-lg"
                                                    name="house" />
                                                <label class="form-label" for="lastName">House</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="lastName" class="form-control form-control-lg"
                                                    name="street" />
                                                <label class="form-label" for="lastName">Street</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline datepicker w-100">
                                                <input type="text" class="form-control form-control-lg" name="barangay"
                                                    id="birthdayDate" />
                                                <label for="birthdayDate" class="form-label">Barangay</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline datepicker w-100">
                                                <input type="text" class="form-control form-control-lg" name="city"
                                                    id="birthdayDate" />
                                                <label for="birthdayDate" class="form-label">City</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline datepicker w-100">
                                                <input type="text" class="form-control form-control-lg" name="province"
                                                    id="birthdayDate" />
                                                <label for="birthdayDate" class="form-label">Province</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline datepicker w-100">
                                                <input type="text" class="form-control form-control-lg" name="zipcode"
                                                    id="birthdayDate" />
                                                <label for="birthdayDate" class="form-label">Zipcode</label>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Authentication-->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="font-size: large">Authentication</h3>
                                <!--FORM POST -->
                                <form method="POST">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-outline">
                                                <input type="text" id="firstName" class="form-control form-control-lg"
                                                    name="email" required />
                                                <label class="form-label" for="firstName">Email</label>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="password" id="firstName" name="password"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="firstName">Password</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="password" id="firstName" name="cpassword"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="firstName">Confirm Password</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="text" id="firstName" name="uuid"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="firstName">School ID</label>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 mb-4">
                                                <div>
                                                    <select class="form-control form-control-lg" name="user_type"
                                                        form="usertype">
                                                        <option value="" selected="selected" disabled style="opacity: 0.2">-Select User Type-
                                                        </option>
                                                        <option value="student">Student</option>
                                                        <option value="faculty">Faculty</option>
                                                    </select>
                                                    <label class="form-label" for="firstName">Select User
                                                            Type</label>
                                                </div>
                                            </div>
                                            

                                            <div class="row">
                                                <div class="col text-center" style="margin-top: 30px">
                                                    <div>
                                                        <button class="btn btn-primary btn-lg" name="registerBtn"
                                                            type="submit"
                                                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                                                    </div>
                                                </div>

                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>