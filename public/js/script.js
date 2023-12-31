$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Penghuni');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalEdit').on('click', function() {
        //console.log('OK123');
        $('#judulModal').html('Ubah Data Penghuni');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'https://www.dinarmulia.com/mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://www.dinarmulia.com/mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                //console.log(data);
                $('#nama').val(data.nama);
                $('#nama_panggilan').val(data.nama_panggilan);
                $('#tempat_kerja').val(data.tempat_kerja);
                $('#id').val(data.id);
            }
        });
    });

});