<?php require 'views/partials/header.php'; ?>

<!-- CONTENT AREA -->
<?php



if(isset($_GET['p']) && $_GET['p'] == 'dasbor'){
    // DASBOR
    require 'views/dasbor.php';
}

elseif(isset($_GET['p']) && $_GET['p'] == 'semua'){
    // MEMBER > SEMUA
    require 'views/member/index.php';
}

elseif(isset($_GET['p']) && $_GET['p'] == 'detail'){
    // MEMBER > DETAIL
    require 'views/member/detail.php';
}

elseif(isset($_GET['p']) && $_GET['p'] == 'tambah'){
    // MEMBER > TAMBAH
    require 'views/member/tambah.php';
}

elseif(isset($_GET['p']) && $_GET['p'] == 'ubah'){
    // MEMBER > UBAH
    require 'views/member/ubah.php';
}

elseif(isset($_GET['p']) && $_GET['p'] == 'hapus'){
    // MEMBER > HAPUS
    require 'views/member/hapus.php';
}

else{
    echo 'Error 404';
}



?>
<!-- END CONTENT AREA -->

<?php require 'views/partials/footer.php'; ?>