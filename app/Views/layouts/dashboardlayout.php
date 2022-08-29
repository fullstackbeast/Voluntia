<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="/css/style.min.css" rel="stylesheet">

    <?= $this->renderSection("styles") ?>

</head>

<body>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

    <!-- For the header  -->
    <?= $this->include('shared/adminheader')?>

    <!-- For the sidebar  -->
    <?= $this->include('shared/adminsidebar')?>



    <div class="page-wrapper">

        <?= $this->renderSection("content") ?>

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="/dist/js/app-style-switcher.js"></script>
<script src="/dist/js/feather.min.js"></script>
<script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="/assets/extra-libs/c3/d3.min.js"></script>
<script src="/assets/extra-libs/c3/c3.min.js"></script>
<script src="/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="/dist/js/pages/dashboards/dashboard1.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<script>
    const sorting = document.querySelector('.selectpicker');
    const commentSorting = document.querySelector('.selectpicker');
    const sortingchoices = new Choices(sorting, {
        placeholder: false,
        itemSelectText: ''
    });


    // Trick to apply your custom classes to generated dropdown menu
    let sortingClass = sorting.getAttribute('class');
    window.onload= function () {
        sorting.parentElement.setAttribute('class', sortingClass);
    }

</script>

</body>

</html>