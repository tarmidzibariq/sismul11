<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if (validation_errors()): ?>
  <div class="card-panel amber lighten-5 brown-text text-darken-3"><?= validation_errors(); ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
  <div class="card-panel amber lighten-5 brown-text text-darken-3"><?= $this->session->flashdata('error'); ?></div>
<?php endif; ?>

<section class="card-panel white">
  <div class="row" style="margin-bottom:0;">
    <div class="col s12 m10">
      <h5 style="margin-top:0; color:#354f52; font-weight:700;">Tambah Stok Makanan</h5>
      <p class="grey-text text-darken-1">Isi data produk daging dengan deskripsi singkat dan unggah foto agar stok mudah dikenali saat pengecekan.</p>
    </div>
  </div>

  <div class="row">
    <form action="<?= site_url('welcome/create'); ?>" method="post" enctype="multipart/form-data" class="col s12">
      <div class="row">
        <div class="input-field col s12 m6">
          <input name="name" id="name" type="text" class="validate" required maxlength="30">
          <label for="name">Nama Produk</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" id="stock_status" value="Tersedia" disabled>
          <label for="stock_status">Status</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="description" id="description" class="materialize-textarea" required></textarea>
          <label for="description">Deskripsi Produk</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel center" style="height: 230px; display:flex; align-items:center; justify-content:center; border:1px dashed #b8ad99;">
            <div id="preview_empty" class="grey-text text-darken-1">
              <i class="material-icons medium">image</i>
              <p>Preview foto produk</p>
            </div>
            <img id="preview_image" src="" alt="Preview gambar produk" style="display:none; max-width:100%; max-height:190px; object-fit:cover; border-radius:8px;">
          </div>
        </div>
        <div class="col s12 m8">
          <div class="file-field input-field">
            <div class="btn btn-primary-ui">
              <span>Upload Foto</span>
              <input type="file" name="image1" accept=".jpg,.png,.jpeg" onchange="previewImage(this)" required>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Format: JPG, JPEG, PNG">
            </div>
          </div>
          <p class="grey-text text-darken-1" style="margin-top:16px;">
            Gunakan foto yang terang dan jelas agar item cepat dikenali oleh staff kasir dan gudang.
          </p>
        </div>
      </div>

      <div class="row center">
        <div class="input-field col s12">
          <button type="submit" class="btn-large btn-primary-ui">Simpan Stok</button>
          <a href="<?= site_url(); ?>" class="btn-flat">Kembali ke Dashboard</a>
        </div>
      </div>
    </form>
  </div>
</section>

<script>
  var elem = document.querySelector('#description');
  M.textareaAutoResize(elem);

  function previewImage(input) {
    var preview = document.getElementById('preview_image');
    var emptyState = document.getElementById('preview_empty');
    var file = input.files[0];

    if (!file) {
      preview.style.display = 'none';
      emptyState.style.display = 'block';
      return;
    }

    var reader = new FileReader();
    reader.onload = function(e) {
      preview.src = e.target.result;
      preview.style.display = 'block';
      emptyState.style.display = 'none';
    };
    reader.readAsDataURL(file);
  }
</script>