<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'?>
<?php

if ($_SESSION['account']->user_usertype != "student") {
    header("Location: /auth/login?error=invalidUserType");
    session_destroy();
}
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/profile/studentProfile.php'; ?>

<link href="/public/assets/css/account.css" rel="stylesheet" />

<!--Main Content-->
<div class="col-9">
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-4">
                <div class="card text-black align-items-stretch oprt">
                    <img src="/public/assets/img/upload.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark text-white">
                        <h5 class="card-title" style="margin-top: 10px">Upload Files</h5>
                        <p class="card-text">Upload files to your storage</p>
                        <a href="/oprt/studentUpload" class="btn btn-outline-light">Upload</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-black align-items-stretch oprt">
                    <img src="/public/assets/img/papers.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark text-white">
                        <h5 class="card-title">Your Files</h5>
                        <p class="card-text">Navigate your Uploaded Files Here</p>
                        <a href="/oprt/studentFiles" class="btn btn-outline-light">Files</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-black align-items-stretch oprt">
                    <img src="/public/assets/img/library.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark text-white">
                        <h5 class="card-title">Library</h5>
                        <p class="card-text">Navigate thru the Library</p>
                        <a href="/repository/mainRepository" class="btn btn-outline-light">Browse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Main Content-->
</div>
</div>
</div>
</div>