$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Penghuni');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalEdit').on('click', function() {
        //console.log('OK123');
        $('#judulModal').html('Ubah Data Penghuni');
        $('.modal-footer button[type=submit]').html('Ubah Data');
    });

});