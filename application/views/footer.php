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
          background: #f4f6f8;
          color: #253238;
        }

        main {
          flex: 1 0 auto;
        }

        .top-nav {
          background: #22333b;
          border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .top-nav .brand-logo,
        .brand-ui {
          font-weight: 700;
          display: flex;
          align-items: center;
          font-size: 1.4rem;
        }

        .top-nav a {
          color: #edf2f4;
        }

        .nav-link-ui {
          font-weight: 600;
          opacity: 0.95;
        }

        .main-shell {
          padding-top: 28px;
          padding-bottom: 28px;
        }

        .btn-add-stock {
          margin-top: 13px;
          background: #f2cc8f;
          color: #1f2d33 !important;
          border-radius: 999px;
          font-weight: 700;
          box-shadow: none;
        }

        .btn-add-stock:hover {
          background: #f6d9aa;
          box-shadow: none;
        }

        .card, .collection {
          border-radius: 18px;
          border: 1px solid #e7edf1;
          box-shadow: 0 10px 28px rgba(35, 51, 59, 0.08);
        }

        .btn-primary-ui {
          background: linear-gradient(135deg, #3d5a80, #2d4a63) !important;
          border-radius: 999px;
          font-weight: 600;
          box-shadow: 0 10px 18px rgba(61, 90, 128, 0.24);
        }

        .btn-primary-ui:hover {
          background: linear-gradient(135deg, #345072, #243b50) !important;
        }

        .text-accent-ui {
          color: #3d5a80 !important;
        }

        .text-danger-ui {
          color: #b23a48 !important;
        }

        .panel-soft {
          background: #ffffff;
          border: 1px solid #e7edf1;
          border-radius: 18px;
          box-shadow: 0 10px 28px rgba(35, 51, 59, 0.06);
          padding: 22px;
        }

        .chip-ui {
          display: inline-flex;
          align-items: center;
          border-radius: 999px;
          padding: 6px 12px;
          background: #eaf1f8;
          color: #2d4a63;
          font-weight: 600;
          font-size: 12px;
        }

        .stat-card {
          background: #fff;
          border: 1px solid #e7edf1;
          border-radius: 16px;
          padding: 16px;
        }

        .stat-number {
          margin: 8px 0 4px;
          font-size: 1.8rem;
          font-weight: 700;
          color: #22333b;
        }

        .card-action a {
          font-weight: 600 !important;
        }

        .card-action a:not(:last-child) {
          margin-right: 12px !important;
        }

        .shop-footer {
          background: #22333b;
        }

        @media only screen and (max-width: 992px) {
          .top-nav .brand-logo {
            font-size: 1.2rem;
          }
        }
      </style>
    </body>
  </html>
