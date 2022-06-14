<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <?php
        require_once('./mvc/views/admin/header.component.php');
        ?>
        <style>
            .black-color {
                color: #000;
            }

            .hide {
                display: none;
            }

            .card-header {
                display: flex;
                justify-content: space-between;
            }
        </style>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $data['admin']['fullname'] ?></span>
                            <img class="img-profile rounded-circle" src="https://png.pngtree.com/png-clipart/20191122/original/pngtree-user-vector-icon-with-white-background-png-image_5168884.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid black-color">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Product Detail</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered black-color">
                            <thead>
                                <tr>
                                    <th style="width: 180px;">Product's Information Title</th>
                                    <th>Product's Information</th>
                                    <th style="width: 100px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Title</td>
                                    <td>
                                        <form action="/project/admin/editProductTitle/<?= $data['product']['id'] ?>" name="titleForm" method="post">
                                            <input type="text" name="title" value="<?= $data['product']['title'] ?>" class="form-control" disabled>
                                            <?= $data['error'] ?>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editTitle">Edit</button>
                                        <button class="btn btn-success hide" id="updateTitleBtn">Update</button>
                                        <button class="btn btn-danger hide" id="cancelTitleBtn">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Main Image</td>
                                    <td>
                                        <div style="display: flex;">
                                            <form action="/project/admin/editMainThumbnail/<?= $data['product']['id'] ?>" method="post" name="mainThumbnail" enctype="multipart/form-data">
                                                <label for="main-thumbnail">
                                                    <img src="<?= str_replace("./public", "/project/public", $data['product']['thumbnail']) ?>" style="width: 150px;" alt="">
                                                </label>
                                                <input type="file" name="img" accept="image/png, image/jpeg, image/jpg" id="main-thumbnail" class="form-control" required style="display: none;" disabled>
                                                <?= $data['error'] ?>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editMainThumbnail">Edit</button>
                                        <button class="btn btn-success hide" id="updateMainThumbnail">Update</button>
                                        <button class="btn btn-danger hide" id="cancelMainThumbnail">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Supporting Image</td>
                                    <td>
                                        <div style="display: flex;">
                                            <?php
                                            foreach ($data['thumbnail'] as $index => $thumbnail) {
                                                echo '<div>
                                                        <img src="' . str_replace("./public", "/project/public", $thumbnail['thumbnail']) . '" style="width: 150px;" alt="">
                                                        <button onclick="deleteImg(' . $thumbnail['id'] . ')" class="btn deleteImgBtn hide" style="color: red;transform: translateY(-60px) translateX(-40px);"><i class="fas fa-times-circle"></i></button>
                                                    </div>';
                                            }
                                            ?>
                                        </div>
                                        <form action="/project/admin/addSupportingThumbnail/<?= $data['product']['id'] ?>" method="post" name="spThumbnail" enctype="multipart/form-data">
                                            <input type="file" name="spimg" accept="image/png, image/jpeg, image/jpg" class="form-control hide" required>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editThumbnail">Edit</button>
                                        <button class="btn btn-success hide" id="addThumbnail">Add</button>
                                        <button class="btn btn-danger hide" id="cancelThumbnail">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <form action="/project/admin/editProductDescription/<?= $data['product']['id'] ?>" name="description" method="post">
                                            <textarea name="description" id="description_id" rows="6" class="form-control" disabled><?= $data['product']['description'] ?></textarea>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editDescription">Edit</button>
                                        <button class="btn btn-success hide" id="updateDescription">Update</button>
                                        <button class="btn btn-danger hide" id="cancelDescription">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>
                                        <form action="/project/admin/editProductPrice/<?= $data['product']['id'] ?>" name="price" method="post">
                                            <input type="number" name="price" value="<?= $data['product']['price'] ?>" class="form-control" min="0" step=".01" disabled>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editPrice">Edit</button>
                                        <button class="btn btn-success hide" id="updatePrice">Update</button>
                                        <button class="btn btn-danger hide" id="cancelPrice">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><?= $data['product']['gender'] ?>
                                        <form action="/project/admin/editProductGender/<?= $data['product']['id'] ?>" method="post" name="gender">
                                            <select name="gender" id="gender_id" class="form-control hide" required>
                                                <option value="">-- Select Gender --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Unisex">Unisex</option>
                                                <option value="Child">Child</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editGender">Edit</button>
                                        <button class="btn btn-success hide" id="updateGender">Update</button>
                                        <button class="btn btn-danger hide" id="cancelGender">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <?= $data['product']['category_name'] ?>
                                        <form action="/project/admin/editProductCategory/<?= $data['product']['id'] ?>" method="post" name="category">
                                            <select name="category_id" id="category_id" class="form-control hide" required>
                                                <?php
                                                foreach ($data['category'] as $index => $category) {
                                                    echo '<option value="' . $category['id'] . '"';
                                                    if ($category['id'] == $data['product']['category_id']) {
                                                        echo  'selected="selected"';
                                                    } 
                                                    echo '>' . $category['category_name'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editCategory">Edit</button>
                                        <button class="btn btn-success hide" id="updateCategory">Update</button>
                                        <button class="btn btn-danger hide" id="cancelCategory">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brand</td>
                                    <td>
                                        <?= $data['product']['brand_name'] ?>
                                        <form action="/project/admin/editProductBrand/<?= $data['product']['id'] ?>" name="brand" method="post">
                                            <select name="brand_id" id="brand_id" class="form-control hide" required>
                                                <?php
                                                foreach ($data['brand'] as $index => $brand) {
                                                    if ($brand['id'] == $data['product']['brand_id']) {
                                                        echo '<option value="' . $brand['id'] . '" selected="selected">' . $brand['brand_name'] . '</option>';
                                                    } else {
                                                        echo '<option value="' . $brand['id'] . '">' . $brand['brand_name'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editBrand">Edit</button>
                                        <button class="btn btn-success hide" id="updateBrand">Update</button>
                                        <button class="btn btn-danger hide" id="cancelBrand">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Material</td>
                                    <td>
                                        <ul>
                                            <li>Material: <?= $data['product']['material_name'] ?></li>
                                            <li>Color: <?= $data['product']['color'] ?></li>
                                            <li>Age: <?= $data['product']['age'] ?></li>
                                        </ul>
                                        <div>
                                            <form action="/project/admin/editProductMaterial/<?= $data['product']['id'] ?>" name="material" method="post">
                                                <select id="material_id" class="form-control hide" required>
                                                    <?php
                                                    foreach ($data['material'] as $index => $material) {
                                                        echo '<option value="' . $material['id'] . '" ';
                                                        if ($material['material_name'] == $data['product']['material_name']) {
                                                            echo 'selected="selected"';
                                                        }
                                                        echo '>' . $material['material_name'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <select name="material_detail" id="material_detail" class="form-control hide" required></select>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editMaterial">Edit</button>
                                        <button class="btn btn-success hide" id="updateMaterial">Update</button>
                                        <button class="btn btn-danger hide" id="cancelMaterial">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Size</td>
                                    <td>
                                        <ul>
                                            <?php
                                            foreach ($data['product_size'] as $size) {
                                                echo '<li>' . $size['size'] . '</li>';
                                            }
                                            ?>
                                        </ul>
                                        <form action="/project/admin/editProductSize/<?= $data['product']['id'] ?>" name="size" method="post">
                                            <div>
                                                <?php
                                                foreach ($data['size'] as $index => $size) {
                                                    if ($size['category_id'] == $data['product']['category_id']) {
                                                        echo '<div class="form-check form-check-inline hide size_form">
                                                        <input class="form-check-input" type="checkbox" name="size[]" id="inlineCheckbox1" value="' . $size['id'] . '"';
                                                        foreach ($data['product_size'] as $index => $product_size) {
                                                            if ($product_size['size_id'] == $size['id']) {
                                                                echo 'checked';
                                                            }
                                                        }
                                                        echo '>
                                                    <label class="form-check-label" for="inlineCheckbox1">' . $size['size'] . '</label>
                                                </div>';
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editSize">Edit</button>
                                        <button class="btn btn-success hide" id="updateSize">Update</button>
                                        <button class="btn btn-danger hide" id="cancelSize">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gemstone</td>
                                    <td>
                                        <ul>
                                            <?php
                                            foreach ($data['product_gemstone'] as $gemstone) {
                                                echo '<li>' . $gemstone['gemstone_name'] . '</li>';
                                            }
                                            ?>
                                        </ul>
                                        <form action="/project/admin/editProductGemstone/<?= $data['product']['id'] ?>" name="gemstone" method="post">
                                            <?php
                                            foreach ($data['gemstone'] as $index => $gemstone) {
                                                echo '<div class="form-check form-check-inline gemstone_form hide">
                                            <input class="form-check-input" type="checkbox" name="gemstone[]" id="inlineCheckbox1" value="' . $gemstone['id'] . '"';
                                                foreach ($data['product_gemstone'] as $index => $product_gemstone) {
                                                    if ($gemstone['id'] == $product_gemstone['gemstone_id']) {
                                                        echo 'checked';
                                                    }
                                                }
                                                echo '>
                                        <label class="form-check-label" for="inlineCheckbox1">' . $gemstone['gemstone_name'] . '</label>
                                    </div>';
                                            }
                                            ?>
                                        </form>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" id="editGemstone">Edit</button>
                                        <button class="btn btn-success hide" id="updateGemstone">Update</button>
                                        <button class="btn btn-danger hide" id="cancelGemstone">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Updated Date</td>
                                    <td><?= $data['product']['updated_at'] ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/project/admin/logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/project/public/js/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript
<script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

<!-- Custom scripts for all pages-->
<script src="/project/public/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/project/public/js/chart.js/Chart.min.js"></script>

<form action="" name="delete-form" method="post"></form>
<script>
    // show material
    var materialDetails = <?php echo json_encode($data['materialDetail']) ?>;
    var materialDetailTag = document.getElementById('material_detail');
    console.log(materialDetails);
    $('#material_id').change((e) => {
        // console.log(e.target.value);
        materialDetailTag.innerHTML = '';
        materialDetails.forEach(materialDetail => {
            if (materialDetail.material_id == e.target.value) {
                materialDetailTag.innerHTML += `<option value="${materialDetail.id}">${materialDetail.color}/${materialDetail.age}</option>`;
            }
        });
    });

    // confirm delete image
    var deleteForm = document.forms['delete-form'];
    deleteImg = (thumbnail_id) => {
        var deleteConfirm = confirm('Are you sure to delete this image?');
        if (deleteConfirm) {
            deleteForm.action = '/project/admin/deleteSupportingThumbnail/' + thumbnail_id;
            deleteForm.submit();
        }
    }

    // update title
    $('#editTitle').click(() => {
        $('#editTitle').addClass('hide');
        $('#updateTitleBtn').removeClass('hide');
        $('#cancelTitleBtn').removeClass('hide');
        $('input[name = title]').prop('disabled', false);
    });

    $('#updateTitleBtn').click(()=>{
        document.forms['titleForm'].submit();
    });

    $('#cancelTitleBtn').click(()=>{
        $('#editTitle').removeClass('hide');
        $('#updateTitleBtn').addClass('hide');
        $('#cancelTitleBtn').addClass('hide');
        $('input[name = title]').prop('disabled', true);
    });

    // update main thumbnail
    $('#editMainThumbnail').click(()=>{
        $('#editMainThumbnail').addClass('hide');
        $('#updateMainThumbnail').removeClass('hide');
        $('#cancelMainThumbnail').removeClass('hide');
        $('input[name = img]').prop('disabled', false);
    });

    $('#updateMainThumbnail').click(()=>{
        document.forms['mainThumbnail'].submit();
    });

    $('#cancelMainThumbnail').click(()=>{
        $('#editMainThumbnail').removeClass('hide');
        $('#updateMainThumbnail').addClass('hide');
        $('#cancelMainThumbnail').addClass('hide');
        $('input[name = img]').prop('disabled', true);
    });

    //update supporting thumbnail
    $('#editThumbnail').click(()=>{
        $('#editThumbnail').addClass('hide');
        $('#addThumbnail').removeClass('hide');
        $('#cancelThumbnail').removeClass('hide');
        $('.deleteImgBtn').removeClass('hide');
        $('input[name = spimg]').removeClass('hide');
    });

    $('#addThumbnail').click(()=>{
        document.forms['spThumbnail'].submit();
    });

    $('#cancelThumbnail').click(()=>{
        $('#editThumbnail').removeClass('hide');
        $('#addThumbnail').addClass('hide');
        $('#cancelThumbnail').addClass('hide');
        $('.deleteImgBtn').addClass('hide');
        $('input[name = spimg]').addClass('hide');
    });

    // update description
    $('#editDescription').click(()=>{
        $('#editDescription').addClass('hide');
        $('#updateDescription').removeClass('hide');
        $('#cancelDescription').removeClass('hide');
        $('textarea[name = description]').prop('disabled', false);
    });

    $('#updateDescription').click(()=>{
        document.forms['description'].submit();
    });

    $('#cancelDescription').click(()=>{
        $('#editDescription').removeClass('hide');
        $('#updateDescription').addClass('hide');
        $('#cancelDescription').addClass('hide');
        $('textarea[name = description]').prop('disabled', true);
    });

    // update Price
    $('#editPrice').click(()=>{
        $('#editPrice').addClass('hide');
        $('#updatePrice').removeClass('hide');
        $('#cancelPrice').removeClass('hide');
        $('input[name = price]').prop('disabled', false);
    });

    $('#updatePrice').click(()=>{
        document.forms['price'].submit();
    });

    $('#cancelPrice').click(()=>{
        $('#editPrice').removeClass('hide');
        $('#updatePrice').addClass('hide');
        $('#cancelPrice').addClass('hide');
        $('input[name = price]').prop('disabled', true);
    });

    //update gender
    $('#editGender').click(()=>{
        $('#editGender').addClass('hide');
        $('#updateGender').removeClass('hide');
        $('#cancelGender').removeClass('hide');
        $('select[name = gender]').removeClass('hide');
    });

    $('#updateGender').click(()=>{
        document.forms['gender'].submit();
    });

    $('#cancelGender').click(()=>{
        $('#editGender').removeClass('hide');
        $('#updateGender').addClass('hide');
        $('#cancelGender').addClass('hide');
        $('select[name = gender]').addClass('hide');
    });
    
    //update category
    $('#editCategory').click(()=>{
        $('#editCategory').addClass('hide');
        $('#updateCategory').removeClass('hide');
        $('#cancelCategory').removeClass('hide');
        $('select[name = category_id]').removeClass('hide');
    });

    $('#updateCategory').click(()=>{
        document.forms['category'].submit();
    });

    $('#cancelCategory').click(()=>{
        $('#editCategory').removeClass('hide');
        $('#updateCategory').addClass('hide');
        $('#cancelCategory').addClass('hide');
        $('select[name = category_id]').addClass('hide');
    });

    //update brand
    $('#editBrand').click(()=>{
        $('#editBrand').addClass('hide');
        $('#updateBrand').removeClass('hide');
        $('#cancelBrand').removeClass('hide');
        $('select[name = brand_id]').removeClass('hide');
    });

    $('#updateBrand').click(()=>{
        document.forms['brand'].submit();
    });

    $('#cancelBrand').click(()=>{
        $('#editBrand').removeClass('hide');
        $('#updateBrand').addClass('hide');
        $('#cancelBrand').addClass('hide');
        $('select[name = brand_id]').addClass('hide');
    });

    // update material
    $('#editMaterial').click(()=>{
        $('#editMaterial').addClass('hide');
        $('#updateMaterial').removeClass('hide');
        $('#cancelMaterial').removeClass('hide');
        $('#material_id').removeClass('hide');
        $('select[name = material_detail]').removeClass('hide');
    });

    $('#updateMaterial').click(()=>{
        document.forms['material'].submit();
    });

    $('#cancelMaterial').click(()=>{
        $('#editMaterial').removeClass('hide');
        $('#updateMaterial').addClass('hide');
        $('#cancelMaterial').addClass('hide');
        $('#material_id').addClass('hide');
        $('select[name = material_detail]').addClass('hide');
    });

    // update size
    $('#editSize').click(()=>{
        $('#editSize').addClass('hide');
        $('#updateSize').removeClass('hide');
        $('#cancelSize').removeClass('hide');
        $('.size_form').removeClass('hide');
    });

    $('#updateSize').click(()=>{
        document.forms['size'].submit();
    });

    $('#cancelSize').click(()=>{
        $('#editSize').removeClass('hide');
        $('#updateSize').addClass('hide');
        $('#cancelSize').addClass('hide');
        $('.size_form').addClass('hide');
    });

    // update gemstone
    $('#editGemstone').click(()=>{
        $('#editGemstone').addClass('hide');
        $('#updateGemstone').removeClass('hide');
        $('#cancelGemstone').removeClass('hide');
        $('.gemstone_form').removeClass('hide');
    });

    $('#updateGemstone').click(()=>{
        document.forms['gemstone'].submit();
    });

    $('#cancelGemstone').click(()=>{
        $('#editGemstone').removeClass('hide');
        $('#updateGemstone').addClass('hide');
        $('#cancelGemstone').addClass('hide');
        $('.gemstone_form').addClass('hide');
    });
</script>