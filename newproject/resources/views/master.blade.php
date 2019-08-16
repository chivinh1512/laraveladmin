<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <base href="{{asset('')}} ">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
    <link rel="stylesheet" href="source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
</head>
<body>
@include('header')
@yield ('content')
<!-- include js files -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="source/assets/dest/js/jquery.js"></script>
<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="source/assets/dest/vendors/animo/Animo.js"></script>
<script src="source/assets/dest/vendors/dug/dug.js"></script>
<script src="source/assets/dest/js/scripts.min.js"></script>
<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="source/assets/dest/js/waypoints.min.js"></script>
<script src="source/assets/dest/js/wow.min.js"></script>
<!--customjs-->
<script src="source/assets/dest/js/custom2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
                $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
</script>
<script>
    $(document).ready(function () {
        $(".productqty").change(function () {
            productqty=$(this).val();
            productprice=$(this).parent().parent().find('.productprice').html();
            total =  parseInt(productqty) * parseInt(productprice);
            oldtotal=$('.totalall').html();
            oldprice=$(this).parent().parent().find('.amount').html();
            $(this).parent().parent().find('.amount').html(total);
            test=parseInt(total)-parseInt(oldprice);
            newtotal=parseInt(oldtotal)+parseInt(test);
            $('.totalall').html(newtotal);
            $('.totalall').val(newtotal);
        });
        $('.ab').click(function () {
            $("#getfile").click();
        });
        $(".remove").click(function () {
            cartitem=$(this).parent().parent().find('.remove').html();

            url=$(this).data('url');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
                title: 'Xác nhận xóa sản phẩm trong giỏ hàng?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Xác nhận!',
                cancelButtonText: 'Hủy bỏ!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        'Đã xóa sản phẩm!',
                        'success'
                    )
                    window.location.href = url;
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Sản phẩm của bạn được giữ lại :)',
                    )
                }
            })
        });
         $(".alert-success").fadeOut(2000);
    });
</script>
</body>
</html>
@include('footer')
