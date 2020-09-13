<?php if ($flip == "true") { ?>
<script type="text/javascript" src="<?= base_url() ?>assets/js/viewer.js"></script>
<?php } else { ?>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; HMJ TI Undiksha 2020</span>
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

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Data Table-->
<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>
<script src="<?= base_url() ?>assets/js/table.js"></script>
<!-- Ckeditor -->
<?php if ($active == "4") { ?>
<?php if ($ckeditor == "info") { ?>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/js/ckeditor/info.js"></script>
<?php } ?>
<?php if ($ckeditor == "bidang") { ?>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/js/ckeditor/bidang.js"></script>
<?php } ?>
<?php } ?>
<!-- Chart -->
<?php if ($active == "1") { ?>
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
<?php } ?>
<!-- Sweetalert -->
<script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<?php } ?>
</body>

</html>