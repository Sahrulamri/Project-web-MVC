$(function() {
    // Tambah Data
    $('.tombolTambahData').on('click', function () {
        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-body form').attr('action', 'http://localhost/WPU/BackEnd/phpmvc/public/mahasiswa/tambah');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
            

    })




    // Ubah Data
    $('.tampilModalUbah').on('click', function () {
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-body form').attr('action', 'http://localhost/WPU/BackEnd/phpmvc/public/mahasiswa/ubah');
        const id = $(this).data('id');

    
    $.ajax ({
        url: 'http://localhost/WPU/BackEnd/phpmvc/public/mahasiswa/getubah',
        data : {
            id
        },
        method : 'post',
        
        
        success : function(data) {
            const object = JSON.parse(data);
            $('#nama').val(object.nama);
            $('#nrp').val(object.nrp);
            $('#email').val(object.email);
            $('#jurusan').val(object.jurusan);
            $('#id').val(object.id);
        }
    })
    });

        
    
});