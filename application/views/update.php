<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if (validation_errors()): ?>
  <div class="card-panel amber lighten-5 brown-text text-darken-3"><?php echo validation_errors(); ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
  <div class="card-panel amber lighten-5 brown-text text-darken-3"><?php echo $this->session->flashdata('error'); ?></div>
<?php endif; ?>

<section class="card-panel white">
  <div class="row" style="margin-bottom:0;">
    <div class="col s12 m10">
      <h5 style="margin-top:0; color:#354f52; font-weight:700;">Update Data Stok</h5>
      <p class="grey-text text-darken-1">Perbarui nama, deskripsi, atau foto produk agar data stok tetap akurat.</p>
    </div>
  </div>

  <div class="row">
    <form action="<?php echo site_url('welcome/update/'.$post->id); ?>" method="post" enctype="multipart/form-data" class="col s12">
      <div class="row">
        <div class="input-field col s12 m6">
          <input name="name" id="name" type="text" class="validate" value="<?php echo $post->name; ?>" required maxlength="30">
          <label for="name" class="active">Nama Produk</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" value="Tersedia" disabled>
          <label class="active">Status</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="description" id="description" class="materialize-textarea" required><?php echo $post->description; ?></textarea>
          <label for="description" class="active">Deskripsi Produk</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel center" style="height: 230px; display:flex; align-items:center; justify-content:center; border:1px dashed #b8ad99;">
            <img class="responsive-img" id="image" style="max-height:190px; object-fit:cover; border-radius:8px;" src="<?php echo site_url('upload/post/'.$post->filename); ?>">
          </div>
        </div>
        <div class="col s12 m8">
          <div class="file-field input-field">
            <div class="btn btn-primary-ui">
              <span>Ganti Foto</span>
              <input name="image1" type="file" id="file" accept=".jpg,.jpeg,.png">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" onchange="thumbnail();" name="file" placeholder="Kosongkan jika foto tidak diubah">
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 center">
        <button class="btn-large btn-primary-ui" type="submit">Simpan Perubahan</button>
        <a href="<?php echo site_url('welcome/index/'.$post->id); ?>" class="btn-flat">Batal</a>
      </div>
    </form>
  </div>
</section>

<script type="text/javascript">
  var elem = document.querySelector('#description');
  M.textareaAutoResize(elem);

  function thumbnail () {
    var preview = document.querySelector('#image');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.onloadend = function () {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }
</script>
