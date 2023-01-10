<meta charset="UTF-8">
<title>Nhóm7 Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:image" content="https://group7shop.com/nhom7shop.png">
<meta property="og:title" content="Group7 - Thương hiệu thời trang đẹp giá rẻ">
<meta property="og:url" content="https://group7shop.com/">
<meta property="og:description" content="Shop thời trang Group7 là thương hiệu thời trang uy tín chuyên thiết kế, sản xuất và kinh doanh quần áo phụ kiện chất lượng, mẫu mã đẹp ở TpHCM">
<script src="<?php echo public_url(); ?>js/jquery-3.1.1.js" type="text/javascript"></script>
<script src="<?php echo public_url('js/jqzoom_ev'); ?>js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo public_url('site/'); ?>bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo public_url('site/'); ?>css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<script type="text/javascript" src="<?php echo public_url('js/raty/jquery.raty.min.js') ?>"></script>



<script type="text/javascript">
    $(function () {
        $.fn.raty.defaults.path = "<?php echo public_url('js/raty/img'); ?>";
        $('.raty').raty({
            score: function () {
                return $(this).attr('data-score');
            },
            readOnly: true,
        });
    });
</script>
<style>.raty img{width:16px !important;height:16px; !important;}</style>
