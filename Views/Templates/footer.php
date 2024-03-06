</div>

  <script>
    idusuario = "<?php echo $_SESSION['idSession'] ?>"
  </script>
<script src="<?= ASSETS ?>/plugins/sweetalert2/sweetalert2.all.js"></script>



<!-- Select2 -->

<!-- js -->
<script src="<?= ASSETS ?>/vendors/scripts/core.js"></script>
<script src="<?= ASSETS ?>/vendors/scripts/script.min.js"></script>
<script src="<?= ASSETS ?>/vendors/scripts/process.js"></script>
<script src="<?= ASSETS ?>/vendors/scripts/layout-settings.js"></script> 
<script>
	const base_url = "<?php echo base_url; ?>";
</script>
<!--cargar solo en la pagina page_functions_js personalizados desde el controlador-->
<script src="<?= ASSETS ?>/app/js/<?= $data['function_js']; ?>" type="module"></script> 

<!-- buttons for Export datatable -->

<!-- Datatable Setting js -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
		style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
		style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

