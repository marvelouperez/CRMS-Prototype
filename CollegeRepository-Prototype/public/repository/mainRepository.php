<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php';

if (isset($_POST['downloadBtn'])) {

    $filePath = !empty($_POST['file_path']) ? $_POST['file_path'] : "No file path";
    $file->downloadFile($_SERVER['DOCUMENT_ROOT'] . '/public/oprt/' .$filePath);
}

?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>

<link href="/public/assets/css/mainRepository" rel="stylesheet" />

<div class="container col-xxl-8 px-4 py-5" style="margin-top: -70px">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/public/assets/img/research_Building.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Research Repository</h1>
            <p class="lead">Browse to majority of PUP's research papers</p>
        </div>
    </div>
</div>

<div class="container paper" style="margin-bottom: 150px">
    <div class="row gx-5">
        <div class="col">
            <div class="input-group">
                <input type="search" class="form-control rounded " placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary">search</button>
            </div>
        </div>
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination outline-dark">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="row">
        <?php foreach ($paper->getAllPaper() as $key => $data) : ?>
            <?php $location = "/public/oprt/files/$" ?>
            <div class="card" style="margin-bottom: 20px">
                <h5 class="card-header"><b>Title</b> | <?= $data->paper_title; ?></h5>
                <div class="card-body">
                    <h5 class="card-title"><b>Author</b> | <?= $data->paper_author; ?> </h5>
                    <p class="card-text"><b>Description</b> | <?= $data->paper_description; ?> </p>
                    <p class="card-text"><b>Pages</b> | <?= $data->paper_pages; ?> </p>
                    <div class="row">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="btn btn-primary" href="<?= "/oprt/" . $data->location; ?>" download>Download</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/footer.php'; ?>