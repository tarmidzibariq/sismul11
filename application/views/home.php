<?php $total_item = count($home_post); ?>
<?php $with_image = 0; ?>
<?php foreach ($home_post as $item): ?>
    <?php if (!empty($item['filename'])) { $with_image++; } ?>
<?php endforeach; ?>
<?php $without_image = $total_item - $with_image; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="card-panel amber lighten-5 brown-text text-darken-3">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<section class="panel-soft">
    <div class="row" style="margin-bottom: 0;">
        <div class="col s12 l8">
            <span class="chip-ui">Dashboard Inventori</span>
            <h4 style="margin: 12px 0 8px; font-weight: 700; color: #22333b;">Kontrol Stok Makanan Daging</h4>
            <p class="grey-text text-darken-1" style="margin-bottom: 0;">
                Kelola data stok lebih cepat dengan tampilan katalog yang jelas, aksi cepat untuk tiap item, dan ringkasan inventori real-time.
            </p>
        </div>
        <div class="col s12 l4 right-align" style="margin-top: 12px;">
            <a href="<?= site_url('welcome/create'); ?>" class="btn-large btn-primary-ui">+ Tambah Stok</a>
            <a href="<?= site_url('welcome/deleteAll'); ?>" class="btn-flat text-danger-ui btn-delete-all">Hapus Semua</a>
        </div>
    </div>

    <div class="row" style="margin-top: 18px; margin-bottom: 0;">
        <div class="col s12 m4">
            <div class="stat-card">
                <small class="grey-text text-darken-1">Total Item</small>
                <div class="stat-number"><?= $total_item; ?></div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="stat-card">
                <small class="grey-text text-darken-1">Item Dengan Foto</small>
                <div class="stat-number"><?= $with_image; ?></div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="stat-card">
                <small class="grey-text text-darken-1">Belum Ada Foto</small>
                <div class="stat-number"><?= $without_image; ?></div>
            </div>
        </div>
    </div>
</section>

<section class="panel-soft" style="margin-top: 20px;">
    <div class="input-field" style="margin: 0;">
        <i class="material-icons prefix" style="top: 10px;">search</i>
        <input id="stock_search" type="text" placeholder="Cari nama produk...">
    </div>
</section>

<div class="row" style="margin-top: 8px;">
    <?php if (empty($home_post)): ?>
        <div class="col s12">
            <div class="panel-soft center">
                <i class="material-icons medium text-accent-ui">inventory_2</i>
                <h6>Belum ada data stok.</h6>
                <p class="grey-text">Tambahkan produk pertama agar dashboard mulai menampilkan katalog inventori.</p>
            </div>
        </div>
    <?php else: ?>
        <?php foreach ($home_post as $data): ?>
            <div class="col s12 m6 l4 stock-card-item" data-name="<?= strtolower($data['name']); ?>">
                <div class="card meat-card">
                    <div class="card-image">
                        <img src="<?= site_url('/upload/post/'.$data['filename']); ?>" alt="<?= $data['name']; ?>" style="height: 220px; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <span class="card-title" style="font-size: 1.15rem; font-weight: 700; color: #22333b;"><?= $data['name']; ?></span>
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
  var stockSearch = document.getElementById('stock_search');
  if (stockSearch) {
    stockSearch.addEventListener('input', function () {
      var keyword = this.value.trim().toLowerCase();
      document.querySelectorAll('.stock-card-item').forEach(function (card) {
        var name = card.getAttribute('data-name');
        card.style.display = name.indexOf(keyword) > -1 ? 'block' : 'none';
      });
    });
  }

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
