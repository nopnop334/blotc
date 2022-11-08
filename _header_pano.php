
<?php
    require_once('_config.php');
?>
<title>ธนาคารแห่งประเทศไทย</title>
<link rel="icon" type="image/x-icon" href="<?php echo _IMG_?>/logo.png">
<meta name="title" content="ธนาคารแห่งประเทศไทย">
<meta name="description" content="ธนาคารแห่งประเทศไทย">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="ธนาคารแห่งประเทศไทย">
<meta property="og:description" content="ธนาคารแห่งประเทศไทย">
<meta property="og:image" content="favicon.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="ธนาคารแห่งประเทศไทย">
<meta property="twitter:description" content="ธนาคารแห่งประเทศไทย">
<meta property="twitter:image" content="favicon.png">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<link type="text/css" rel="stylesheet" href="<?php echo _ASSET_?>/plugins/bootstrap/css/bootstrap.min.css?version=5.1.3">
<link type="text/css" rel="stylesheet" href="<?php echo _ASSET_?>/plugins/splide/dist/css/splide.min.css?version=4.0.7">
<link type="text/css" rel="stylesheet" href="<?php echo _ASSET_?>/plugins/iv-viewer/dist/iv-viewer.min.css?version=2.1.1">
<link type="text/css" rel="stylesheet" href="<?php echo _PANO_?>/css/main.css" />
<link type="text/css" rel="stylesheet" href="<?php echo _PANO_?>/css/style.css?v=<?php echo uniqid()?>" />
<link type="text/css" rel="stylesheet" href="<?php echo _ASSET_?>/css/style.css?v=<?php echo uniqid()?>" />
<link type="text/css" rel="stylesheet" href="<?php echo _ASSET_?>/css/style_pano.css?v=<?php echo uniqid()?>" />
<link type="text/css" rel="stylesheet" href="<?php echo _ASSET_?>/fonts/stylesheet.css?v=<?php echo uniqid()?>" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet" />
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<script src="<?php echo _ASSET_?>/plugins/jquery/jquery.min.js?version=3.6.0"></script>
<script src="<?php echo _ASSET_?>/plugins/bootstrap/js/bootstrap.bundle.min.js?version=5.1.3"></script>
<!-- PDF -->
<script src="<?php echo _ASSET_?>/plugins/3d-flip-book/js/html2canvas.min.js"></script>
<script src="<?php echo _ASSET_?>/plugins/3d-flip-book/js/three.min.js"></script>
<script src="<?php echo _ASSET_?>/plugins/3d-flip-book/js/pdf.min.js"></script>
<script>
  window.PDFJS_LOCALE = {
    pdfJsWorker: '<?php echo _ASSET_ ?>/plugins/3d-flip-book/js/pdf.worker.js',
    pdfJsCMapUrl: 'cmaps'
  };
</script>
<script src="<?php echo _ASSET_?>/plugins/3d-flip-book/js/3d-flip-book.min.js"></script>
<!-- Splide -->
<script src="<?php echo _ASSET_?>/plugins/splide/dist/js/splide.js?version=4.0.7"></script>
<script src="<?php echo _ASSET_?>/plugins/iv-viewer/dist/iv-viewer.js?version=2.1.1"></script>