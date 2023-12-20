$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Penghuni');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalEdit').on('click', function() {
        //console.log('OK123');
        $('#judulModal').html('Ubah Data Penghuni');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://www.dinarmulia.com/mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama_panggilan);
                $('#nama_panggilan').val(data.nama);
                //$('#tempat_kerja').val(data.tempat_kerja);
            }
        });
    });

});