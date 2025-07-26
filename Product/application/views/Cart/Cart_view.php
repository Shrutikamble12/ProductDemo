<!-- SELECT2 Styling -->
<style>
.select2 {
    width: 100% !important;
}
/* #imagePreview img {
    height: 100px;
    border: 1px solid #ccc;
    margin-right: 10px;
    margin-bottom: 10px;
    padding: 5px;
    border-radius: 5px;
} */
 #imagePreview img {
    height: 100px;
    border: 1px solid #ccc;
    margin-right: 10px;
    margin-bottom: 10px;
    padding: 5px;
    border-radius: 5px;
}
</style>

<!-- SELECT2 Stylesheets -->
<link rel="stylesheet" href="<?= base_url(); ?>Assets/select2/select2.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>Assets/select2/multiselect.css" />

<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- Header -->
                    <div class="breadcrumb mb-0" style="border-bottom: 1px solid #aaaaaa; background-color: #65656f;">
                        <h1 style="font-family: 'Work Sans', sans-serif; color: #ffffff;">Product View</h1>
                    </div>

                    <div class="card-body">
                        <form role="form" id="Form"  enctype="multipart/form-data" id="productForm">
                            <input type="hidden" id="formMode" value="<?= !empty($data) ? 'update' : 'add'; ?>" />
                            <input class="form-control" Id="id" name="id" type="hidden" value="<?= !empty($data) ? $data[0]->id : ''; ?>" />

                            <div class="row">
                                <!-- Product Name -->
                                <div class="col-md-4 form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="<?= !empty($data) ? $data[0]->name : ''; ?>" required>
                                </div>

                                <!-- Price -->
                                <div class="col-md-3 form-group">
                                    <label for="price">Price (Rs.)</label>
                                    <input type="number" name="price" id="price" class="form-control"
                                        value="<?= !empty($data) ? $data[0]->price : ''; ?>" required>
                                </div>

                                <!-- Multiple Image Upload -->
                                <div class="col-md-5 form-group">
                                    <label for="images">Upload Product Images</label>
                                    <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*">
                                    <small class="form-text text-muted">You can select multiple images.</small>
                                </div>
                            </div>
<?php if (!empty($data)) { ?>
    <div class="row mt-2">
        <div class="col-md-1">
            <label>Existing Images:</label>
            <div class="d-flex flex-wrap">
                <?php foreach ($data as $item) {
                    if (!empty($item->image_path)) { ?>
                        <img src="<?= base_url($item->image_path); ?>" />
                <?php }} ?>
            </div>
        </div>
    </div>
<?php } ?>

                            <!-- Image Preview -->
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label>Preview Selected Images:</label>
                                    <div id="imagePreview" class="d-flex flex-wrap"></div>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="row mt-4">
                                <div class="col-4 text-center">
                                    <button class="btn btn-success btn-rounded" type="submit" name="btn_save" id="btn_save" style="width: 120px;">
                                        <i class="fa fa-save"></i> Save
                                    </button>
                                </div>
                                <div class="col-4 text-center">
                                    <a class="btn btn-primary btn-rounded" href="<?= base_url('Cart/index'); ?>" style="width: 120px;">
                                        <i class="fa fa-list"></i> List
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div> <!-- End card-body -->
                </div> <!-- End card -->
            </div> <!-- End col -->
        </div> <!-- End row -->
    </div> <!-- End main-content -->
</div> <!-- End main-content-wrap -->

<!-- JS Scripts -->
<script src="<?= base_url(); ?>Assets/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?= base_url(); ?>Assets/js/CreateJs/Cart.js"></script>
<script src="<?= base_url(); ?>Assets/select2/select2.min.js"></script>
<script src="<?= base_url(); ?>Assets/select2/select2.init.js"></script>

<!-- Image Preview Script -->
<script>
    document.getElementById('images').addEventListener('change', function (e) {
        const previewContainer = document.getElementById('imagePreview');
        previewContainer.innerHTML = '';
        const files = e.target.files;

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    });
</script>
