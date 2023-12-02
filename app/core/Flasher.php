<?php
class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        // Cek apakah ada session
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    <strong>Data Mahasiswa ' . $_SESSION['flash']['pesan'] . ' di' . $_SESSION['flash']['aksi'] . '</strong>
                </div>';
            //     

            unset($_SESSION['flash']);
        }
    }
}
