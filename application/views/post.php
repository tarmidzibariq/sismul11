<section class="card-panel white">
    <div class="row" style="margin-bottom: 0;">
        <div class="col s12 m6">
            <img src="<?= site_url('upload/post/'.$post->filename); ?>" alt="<?= $post->name; ?>" class="responsive-img" style="width:100%; max-height:360px; object-fit:cover; border-radius:14px;">
        </div>
        <div class="col s12 m6">
            <span class="chip-ui">Detail Produk</span>
            <h4 style="margin-top: 12px; color:#22333b; font-weight: 700;"><?= $post->name; ?></h4>
            <p class="grey-text text-darken-1"><?= $post->description; ?></p>
            <div style="margin-top: 24px;">
                <a href="<?= site_url('welcome/update/'.$post->id); ?>" class="btn btn-primary-ui">Update Data</a>
                <a href="<?= site_url('welcome/delete/'.$post->id); ?>" class="btn-flat text-danger-ui btn-delete-single">Delete</a>
                <a href="<?= site_url(); ?>" class="btn-flat blue-grey-text text-darken-2">Kembali</a>
            </div>
        </div>
    </div>
</section>

<script>
  var deleteButton = document.querySelector('.btn-delete-single');
  if (deleteButton) {
    deleteButton.addEventListener('click', function (event) {
      var confirmation = confirm('Yakin ingin menghapus item stok ini?');
      if (!confirmation) {
        event.preventDefault();
      }
    });
  }
</script>