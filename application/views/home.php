<?php if ($this->session->flashdata('error')): ?>
    <div class="card-panel amber lighten-5 brown-text text-darken-3">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<section class="card-panel white hero-panel">
    <div class="row valign-wrapper" style="margin-bottom: 0;">
        <div class="col s12 m8">
            <h4 class="hero-title">Stok Makanan Toko Daging</h4>
            <p class="grey-text text-darken-1">Pantau persediaan daging yang tersedia dan tambahkan item baru lengkap dengan foto produk agar tim lebih cepat mengenali stok.</p>
        </div>
        <div class="col s12 m4 right-align">
            <a href="<?= site_url('welcome/create'); ?>" class="btn-large btn-primary-ui">+ Tambah Stok Baru</a>
            <a href="<?= site_url('welcome/deleteAll'); ?>" class="btn-flat text-danger-ui btn-delete-all" style="margin-left: 8px;">Delete All</a>
        </div>
    </div>
</section>

<div class="row">
    <?php if (empty($home_post)): ?>
        <div class="col s12">
            <div class="card-panel center">
                <i class="material-icons medium text-accent-ui">inventory_2</i>
                <h6>Belum ada data stok.</h6>
                <p class="grey-text">Mulai tambahkan item daging pertama Anda dengan foto agar katalog stok lebih informatif.</p>
            </div>
        </div>
    <?php else: ?>
        <?php foreach ($home_post as $data): ?>
            <div class="col s12 m6 l4">
                <div class="card meat-card">
                    <div class="card-image">
                        <img src="<?= site_url('/upload/post/'.$data['filename']); ?>" alt="<?= $data['name']; ?>" style="height: 220px; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <span class="card-title" style="font-size: 1.2rem; font-weight: 700; color: #354f52;"><?= $data['name']; ?></span>
                        <p class="grey-text text-darken-1"><?= $data['description']; ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?= site_url('welcome/index/'.$data['id']); ?>" class="text-accent-ui">Detail</a>
                        <a href="<?= site_url('welcome/update/'.$data['id']); ?>" class="blue-grey-text text-darken-2">Update</a>
                        <a href="<?= site_url('welcome/delete/'.$data['id']); ?>" class="text-danger-ui btn-delete">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script>
  var deleteAllButton = document.querySelector('.btn-delete-all');
  if (deleteAllButton) {
    deleteAllButton.addEventListener('click', function (event) {
      var confirmation = confirm('Yakin ingin menghapus semua data stok?');
      if (!confirmation) {
        event.preventDefault();
      }
    });
  }

  document.querySelectorAll('.btn-delete').forEach(function (el) {
    el.addEventListener('click', function (event) {
      var confirmation = confirm('Yakin ingin menghapus item stok ini?');
      if (!confirmation) {
        event.preventDefault();
      }
    });
  });
</script>
