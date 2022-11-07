<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © 2021 </p>
    </div>
    <div class="footer-section f-section-2">
        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg></p>
    </div>
</div>
</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url('assets/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?= base_url('assets/') ?>bootstrap/js/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="<?= base_url('assets/') ?>plugins/highlight/highlight.pack.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- Leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="<?= base_url('assets/') ?>plugins/apex/apexcharts.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/') ?>assets/js/scrollspyNav.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- File Input -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<!-- End File Input -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/') ?>plugins/table/datatable/datatables.js"></script>
<script>
    // var e;
    c3 = $('#style-3').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 5
    });

    multiCheck(c3);
</script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME GLOBAL STYLE -->
<script src="<?= base_url('assets/') ?>assets/js/scrollspyNav.js"></script>
<script src="<?= base_url('assets/') ?>plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/sweetalerts/custom-sweetalert.js"></script>
<!-- END THEME GLOBAL STYLE -->

<!-- Sweetalert -->
<script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire({
            title: 'Data',
            text: 'Berhasil ' + flashData,
            type: 'success',
            icon: 'success',
            padding: '2em'
        });
    }

    $('.tombol-hapus').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan dihapus!",
            type: 'warning',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#ffffff',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            padding: '2em'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })
</script>
<!-- End Sweetalert -->
</body>

</html>