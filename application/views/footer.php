<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
      </main>

      <footer class="page-footer shop-footer">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h5 class="white-text">DagingMart Inventory</h5>
              <p class="grey-text text-lighten-3">Kelola stok makanan toko daging dengan cepat, visual, dan nyaman untuk operasional harian.</p>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <small>
              Copyright © <?= date("Y"); ?> DagingMart. All rights reserved.
            </small>
          </div>
        </div>
      </footer>

      <script type="text/javascript">
        var element = document.querySelector('.sidenav');
        var instance = M.Sidenav.init(element);
      </script>

      <style media="screen">
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
          background: linear-gradient(180deg, #f8f6f2 0%, #f3f1ec 100%);
          color: #2f2f2f;
        }

        main {
          flex: 1 0 auto;
        }

        .top-nav {
          background: #2f3e46;
        }

        .top-nav .brand-logo {
          font-weight: 700;
        }

        .top-nav a {
          color: #f4f1ea;
        }

        .btn-add-stock {
          margin-top: 13px;
          background: #d8c3a5;
          color: #2f3e46 !important;
          border-radius: 999px;
          font-weight: 700;
          box-shadow: none;
        }

        .btn-add-stock:hover {
          background: #e2cfb4;
          box-shadow: none;
        }

        .card, .collection {
          border-radius: 16px;
          border: 1px solid #e7e2d9;
          box-shadow: 0 8px 24px rgba(47, 62, 70, 0.08);
        }

        .btn-primary-ui {
          background: #354f52 !important;
          border-radius: 999px;
        }

        .btn-primary-ui:hover {
          background: #2f3e46 !important;
        }

        .text-accent-ui {
          color: #52796f !important;
        }

        .text-danger-ui {
          color: #9b2226 !important;
        }

        .shop-footer {
          background: #2f3e46;
        }
      </style>
    </body>
  </html>
