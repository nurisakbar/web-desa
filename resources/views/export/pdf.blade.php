<html>
<head></head>
<body>




<table>
		<tr>
			<td>Gampong</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Kabupaten</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>:</td>
		</tr>
	</table>
	<br>

	<table>
		<tr>
			<td>
				Data Taraf Kehidupan Kelompok Keluarga - KK
			</td>
		</tr>
	</table>

	<table border="1">
		 <tr>
		  <th rowspan="2">No</th>
		  <th rowspan="2">Dusun</th>
		  <th rowspan="2">Nomor KK</th>
		  <th rowspan="2">Nama Kepala Keluarga</th>
		  <th rowspan="2">Taraf Kehidupan</th>
		  <th colspan="2">Jumlah Anggota Keluarga</th>
		  <th rowspan="2">Julah</th>
		 </tr>
		 <tr>
		  <th>Laki Laki</th>
		  <th>Perempuan</th>
		 </tr>

         <?php $no=1; ?>
         @foreach($penduduk as $row)
         
		 <tr>
		 	<td>{{ $loop->iteration }}</td>
		 	<td>{{ $row->dusun->nama_dusun }}</td>
		 	<td>{{ $row->no_kk }}</td>
		 	<td>{{ $row->nama_ayah }}</td>
		 	<td>{{ $row->kartu_keluarga }}</td>
		 	<td>{{ $row->jenis_kelamin }}</td>
		 	<td>{{ $row->jenis_kelamin }}</td>
		 	<td></td>
		 </tr>
         
         @endforeach
         <?php $no++; ?>
</table>

<br><br>


<table>
		<tr>
			<td>Gampong</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Kabupaten</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Kelompok Bertaraf Kehidupan</td>
			<td>:</td>
		</tr>
	</table>


	<table border="1">
		 <tr>
		  <th rowspan="2">No</th>
		  <th rowspan="2">Dusun</th>
		  <th rowspan="2">Nomor KK</th>
		  <th rowspan="2">Nama Kepala Keluarga</th>
		  <th rowspan="2">Taraf Kehidupan</th>
		  <th colspan="2">Jumlah Anggota Keluarga</th>
		  <th rowspan="2">Julah</th>
		 </tr>
		 <tr>
		  <th>Laki Laki</th>
		  <th>Perempuan</th>
		 </tr>
		 <tr>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 </tr>
</table>


<br><br>


<table>
		<tr>
			<td>Gampong</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Kabupaten</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Dusun</td>
			<td>:</td>
		</tr>
	</table>


	<table border="1">
		 <tr>
		  <th rowspan="2">No</th>
		  <th rowspan="2">Dusun</th>
		  <th rowspan="2">Nomor KK</th>
		  <th rowspan="2">Nama Kepala Keluarga</th>
		  <th rowspan="2">Taraf Kehidupan</th>
		  <th colspan="2">Jumlah Anggota Keluarga</th>
		  <th rowspan="2">Julah</th>
		 </tr>
		 <tr>
		  <th>Laki Laki</th>
		  <th>Perempuan</th>
		 </tr>
		 <tr>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 </tr>
</table>




</body>
</html>
         
            
   