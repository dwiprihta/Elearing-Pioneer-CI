<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class menu aplikasi e-learning dokumenary.net
 *
 * @author Almazari <almazary@gmail.com>
 * @since  1.8
 */
class Menu
{
    private $menus = array();

    function __construct()
    {
        $this->default_menu();
    }

    private function default_menu()
    {
        $this->menus['admin'] = array(
            0 => array(
                '<a style="background-color:#D74F2A; color:#fff;" href="' . site_url() . '"><i style="color:#fff;" class="menu-icon icon-home"></i>HOME</a>',
                // '<a href="' . site_url('pengumuman') . '"><i class="menu-icon icon-bullhorn"></i>PENGUMUMAN</a>',
                // '<a href="' . site_url('message') . '"><i class="menu-icon icon-comments"></i>PESAN <span class="menu-count-new-msg"></span></a>',
                // mulai data abal abal
                '<a style="background-color:#326A85; color:#fff;" href="' . site_url('siswa/filter'). '"><i style="color:#fff;" class="menu-icon icon-group"></i>DATA SISWA <span class="menu-count-pending-siswa"></span></a>',
                '<a style="background-color:#326A85; color:#fff;" href="' . site_url('pengajar/filter'). '"><i style="color:#fff;" class="menu-icon icon-user"></i>DATA GURU <span class="menu-count-pending-pengajar"></span></a>',
                '<a style="background-color:#326A85; color:#fff;" href="' . site_url('materi?clear_filter=true') . '"><i style="color:#fff;" class="menu-icon icon-book"></i>MATERI PEMBELAJARAN </a>',
                // '<a href="' . site_url('materi/komentar') . '"><i class="menu-icon icon-comments"></i>KOMENTAR MATERI <span class="menu-count-unread-laporan"></span></a>',
                // '<a href="' . site_url('tugas?clear_filter=true') . '"><i class="menu-icon icon-tasks"></i>TUGAS KELAS </a>',
                '<a style="background-color:#326A85; color:#fff;" href="' . site_url('kelas/mapel_kelas') . '"><i style="color:#fff;" class="menu-icon icon-paste"></i>MATAPELAJARAN KELAS </a>',
                '<a style="background-color:#326A85; color:#fff;" href="' . site_url('kelas') . '"><i style="color:#fff;" class="menu-icon icon-tasks"></i>DATA KELAS </a>',
                '<a style="background-color:#326A85; color:#fff;" href="' . site_url('mapel') . '"><i style="color:#fff;" class="menu-icon icon-book"></i>DATA MATAPELAJARAN </a>',
                // '<a style="background-color:#326A85; color:#fff;" href="' . site_url('welcome/hapus_data') . '"><i style="color:#fff;" class="menu-icon icon-trash"></i>HAPUS DATA</a>',
               
                 // mulai data abal abal
               
            ),
            1 => array(
                '<a style="background-color:#D74F2A; color:#fff;" href="' . site_url('login/logout') . '"><i style="color:#fff;" class="menu-icon icon-signout"></i>LOG-OUT </a>'
                // '<a href="' . site_url('siswa'). '"><i class="menu-icon icon-group"></i>DATA SISWA <span class="menu-count-pending-siswa"></span></a>',
                // '<a href="' . site_url('pengajar'). '"><i class="menu-icon icon-user"></i>DATA GURU & ADMIN <span class="menu-count-pending-pengajar"></span></a>',
                // '<a href="' . site_url('materi?clear_filter=true') . '"><i class="menu-icon icon-book"></i>MATERI PEMBELAJARAN </a>'
            ),
            2 => array(
                // '<a href="' . site_url('tugas?clear_filter=true') . '"><i class="menu-icon icon-tasks"></i>Tugas </a>',
                //'<a href="' . site_url('materi?clear_filter=true') . '"><i class="menu-icon icon-book"></i>Materi </a>',
                //'<a href="' . site_url('materi/komentar') . '"><i class="menu-icon icon-comments"></i>Komentar Materi <span class="menu-count-unread-laporan"></span></a>'
            ),
            3 => array(
                // '<a href="' . site_url('kelas/mapel_kelas') . '"><i class="menu-icon icon-paste"></i>MATAPELAJARAN KELAS </a>',
                // '<a href="' . site_url('kelas') . '"><i class="menu-icon icon-tasks"></i>DATA KELAS </a>',
                // '<a href="' . site_url('mapel') . '"><i class="menu-icon icon-book"></i>DATA MATAPELAJARAN </a>'
            ),
            4 => array(
                // '<a href="' . site_url('welcome/pengaturan') . '"><i class="menu-icon icon-wrench"></i>Pengaturan</a>',
                // '<a href="' . site_url('email') . '"><i class="menu-icon icon-envelope"></i>Email Template</a>',
                // '<a href="' . site_url('welcome/backup_restore') . '"><i class="menu-icon icon-hdd"></i>Backup & Restore</a>',
                // '<a href="' . site_url('welcome/hapus_data') . '"><i class="menu-icon icon-trash"></i>HAPUS DATA</a>',
                // '<a href="' . site_url('login/logout') . '"><i class="menu-icon icon-signout"></i>LOG-OUT </a>'
            ),
            5 => array(
               
            )
        );

        $this->menus['pengajar'] = array(
            0 => array(
                '<a style="background-color:#3E8543; color:#fff;" href="' . site_url() . '"><i style="color:#fff;" class="menu-icon icon-home"></i>HOME</a>',
                // '<a href="' . site_url('pengumuman') . '"><i class="menu-icon icon-bullhorn"></i>Pengumuman</a>',
                // '<a href="' . site_url('message') . '"><i class="menu-icon icon-comments"></i>Pesan <span class="menu-count-new-msg"></span></a>',
                '<a style="background-color:#3E8543; color:#fff;" href="' . site_url('pengajar/jadwal') . '"><i style="color:#fff;" class="menu-icon icon-tasks"></i>JADWAL MENGAJAR </a>',

                // START DUMMY MENU
                // '<a href="' . site_url('tugas?clear_filter=true') . '"><i class="menu-icon icon-tasks"></i>Tugas </a>',
                '<a style="background-color:#3E8543; color:#fff;" href="' . site_url('materi?clear_filter=true') . '"><i style="color:#fff;" class="menu-icon icon-book"></i>MATERI</a>',
                // '<a href="' . site_url('materi/komentar') . '"><i class="menu-icon icon-comments"></i>Komentar saya</a>',
                // '<a href="' . site_url('pengajar/filter') . '"><i class="menu-icon icon-search"></i>Filter Pengajar </a>',
                '<a style="background-color:#3E8543; color:#fff;" href="' . site_url('siswa/filter') . '"><i style="color:#fff;" class="menu-icon icon-search"></i>DATA SISWA</a>',
               
                // START DUMMY MENU
            ),
            1 => array(
                // '<a href="' . site_url('tugas?clear_filter=true') . '"><i class="menu-icon icon-tasks"></i>Tugas </a>',
                // '<a href="' . site_url('materi?clear_filter=true') . '"><i class="menu-icon icon-book"></i>Materi </a>',
                // '<a href="' . site_url('materi/komentar') . '"><i class="menu-icon icon-comments"></i>Komentar saya</a>'
                '<a style="background-color:#3E8543; color:#fff;" href="' . site_url('login/logout') . '"><i  style="color:#fff;" class="menu-icon icon-signout"></i>LOGOUT </a>'
            ),
            2 => array(
                // '<a href="' . site_url('pengajar/filter') . '"><i class="menu-icon icon-search"></i>Filter Pengajar </a>',
                // '<a href="' . site_url('siswa/filter') . '"><i class="menu-icon icon-search"></i>Filter Siswa </a>'
            ),
            3 => array(
                // '<a href="' . site_url('login/logout') . '"><i class="menu-icon icon-signout"></i>Logout </a>'
            )
        );

        $this->menus['siswa'] = array(
            0 => array(
                '<a style="background-color:#EEBB48; color:#fff;" href="' . site_url() . '"><i style="color:#fff;" class="menu-icon icon-home"></i>BERANDA</a>',
                // '<a href="' . site_url('message') . '"><i class="menu-icon icon-comments"></i>Pesan <span class="menu-count-new-msg"></span></a>',
                '<a style="background-color:#EEBB48; color:#fff;" href="' . site_url('siswa/jadwal_mapel') . '"><i style="color:#fff;" class="menu-icon icon-tasks"></i>JADWAL MATAPELAJARAN</a>',
                
                // start dummy menu
                '<a style="background-color:#EEBB48; color:#fff;" href="' . site_url('materi?clear_filter=true') . '"><i style="color:#fff;" class="menu-icon icon-book"></i>MATERI </a>',
                '<a style="background-color:#EEBB48; color:#fff;" href="' . site_url('login/logout') . '"><i style="color:#fff;" class="menu-icon icon-signout"></i>LOGOUT </a>'
                // start dummy menu
            ),
            1 => array(
                // '<a href="' . site_url('tugas?clear_filter=true') . '"><i class="menu-icon icon-tasks"></i>Tugas </a>',
                // '<a href="' . site_url('materi?clear_filter=true') . '"><i class="menu-icon icon-book"></i>Materi </a>',
                // '<a href="' . site_url('materi/komentar') . '"><i class="menu-icon icon-comments"></i>Komentar saya </a>'
            ),
            2 => array(
                // '<a href="' . site_url('pengajar/filter') . '"><i class="menu-icon icon-search"></i>Filter Pengajar </a>',
                // '<a href="' . site_url('siswa/filter') . '"><i class="menu-icon icon-search"></i>Filter Siswa </a>'
            ),
            3 => array(
                // '<a href="' . site_url('login/logout') . '"><i class="menu-icon icon-signout"></i>Logout </a>'
            )
        );
    }

    public function add($rule, $index, $link)
    {
        $this->menus[$rule][$index][] = $link;
    }

    public function get()
    {
        if (is_admin()) {
            return $this->menus['admin'];
        } elseif (is_pengajar()) {
            return $this->menus['pengajar'];
        } elseif (is_siswa()) {
            return $this->menus['siswa'];
        }
    }
}
