<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'?>

<?php

if ($_SESSION['account']->user_usertype != "student") {
    header("Location: /auth/login?error=invalidUserType");
    session_destroy();
}

?>

<?php
if (isset($_POST['downloadBtn'])) {

    $filePath = !empty($_POST['file_path']) ? $_POST['file_path'] : "No file path";
    $file->downloadFile($_SERVER['DOCUMENT_ROOT'] . '/public/oprt/' .$filePath);
}
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>
<div class="section" style="margin-top: 40px">
    <div class="container" style="width: 100%">
        <h1 style="margin-bottom: 30px">Uploaded Files</h1>
        <div class="">
            <div class="table-responsive" style="width: 100%">
                <table class="table table-striped table-light">
                    <thead class="alert-info">
                        <tr>
                            <th>Paper Title</th>
                            <th>Paper Author</th>
                            <th>Paper Desc</th>
                            <th>Paper Pages</th>
                            <th>Date Uploaded</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($paper->getAllPaper() as $key => $data) : ?>
                        <tr>
                            <td><?= $data->paper_title; ?></td>
                            <td><?= $data->paper_author; ?></td>
                            <td><?= $data->paper_description; ?></td>
                            <td><?= $data->paper_pages; ?></td>
                            <td><?= $data->date_uploaded; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" style="margin-bottom: 10px">Request to
                                    publish</button>
                                <button type="button" class="btn btn-primary"
                                    style="margin-bottom: 10px">Archive</button>
                                <break></break>
                                <button type="button" class="btn btn-primary" style="margin-bottom: 10px">Edit</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>