<?php
$pemasukan = Request::segment(3)=='realisasi'?'':'active';
$realisasi = Request::segment(3)!='realisasi'?'':'active';
?>
<ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="/admin/komponendana/create">Tambah Komponen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $pemasukan}}" href="/admin/komponendana">Pemasukan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $realisasi}}" href="/admin/komponendana/realisasi">Realisasi</a>
        </li>
        
      </ul>