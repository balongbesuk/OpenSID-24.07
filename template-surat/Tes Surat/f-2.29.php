<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<style type="text/css">
	<?php include(FCPATH . "/assets/css/lampiran-surat.css"); ?>
</style>

<page orientation="portrait" format="215x330" style="font-size: 9pt">
    <table class="disdukcapil">
		<tr><td><strong><td colspan="20">No Telepon / Email : <?= $input['lokasi_disdukcapil']?></td></strong></td></tr>
	</table>
	<table id="kode" align="right">
		<tr><td><strong>F-2.01</strong></td></tr>
	</table>
	<table id="kop" class="disdukcapil">
		<col span="48" style="width: 2.0833%;">
		<tr><td colspan=48>&nbsp;</td></tr>
		<tr>
			<td colspan="10">Provinsi</td>
			<td>:</td>
			<td colspan="7"><?= $config['nama_propinsi'];?></td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">Kabupaten/Kota</td>
			<td>:</td>
			<td colspan="7"><?= $config['nama_kabupaten'];?></td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="9">&nbsp;</td>
		</tr>

		<tr>
			<td colspan="10">Kecamatan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_kecamatan'];?></td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">Desa/Kelurahan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_desa'];?></td>
			<td colspan="13">&nbsp;</td>
			<td colspan="3">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>
	<p style="text-align: center; margin-top: 2px;">
		<strong style="font-size: 12pt;">FORMULIR PELAPORAN PENCATATAN SIPIL DI DALAM WILAYAH NKRI</strong><br>
		<strong style="font-size: 12pt;">Jenis Pelaporan Pencatatan Sipil</strong>
	</p>
	<table class="disdukcapil" style="margin-top: -15px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td class="kotak padat tengah">V</td>
			<td colspan="4"><strong style="font-size: 12pt;">Kematian</strong></td>
			<td>&nbsp;</td>
			<td colspan="24">&nbsp;</td>
            <td colspan="20">&nbsp;</td>
		</tr>
		<tr><td colspan=48 ></td></tr>
	</table>
	<table class="disdukcapil" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
<!-- AWAL PELAPOR -->
		<tr><td colspan=48 ></td></tr>
		<tr>
			<td colspan=48><strong>DATA PELAPOR</strong></td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
			<td>:</td>
				<td colspan=33 class="kotak padat">&nbsp;
					<?= $input['nama_pelapor'];?>
				</td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_pelapor'][$i])): ?>
						<?= $input['nik_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;No Dokumen Perjalanan*</td>
			<td>:</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>				
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kk_pelapor'][$i])): ?>
						<?= $input['kk_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan</td>
			<td>:</td>

				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">D</td>
				<td class="kotak padat tengah">O</td>				
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">E</td>
				<td class="kotak padat tengah">S</td>
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">A</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				
			<td colspan="21">&nbsp;</td>
		</tr>

<!-- AKHIR PELAPOR -->
        <tr><td colspan=48 ></td></tr>
		<tr><td colspan=48 class="bawah"></td></tr>
        <tr><td colspan=48 ></td></tr>
<!-- AWAL SAKSI 1 -->
		<tr>
			<td colspan=48><strong>DATA SAKSI I </strong></td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td>:</td>
				<td colspan="33" class="kotak padat">&nbsp;
						<?= $input['nama_saksi1'];?>
				</td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi1'][$i])): ?>
						<?= $input['nik_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nomor Kartu Keluarga </td>
			<td>:</td>
        	<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kk_saksi1'][$i])): ?>
						<?= $input['kk_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan</td>
			<td>:</td>
			
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">D</td>
				<td class="kotak padat tengah">O</td>				
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">E</td>
				<td class="kotak padat tengah">S</td>
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">A</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				
			<td colspan="4">&nbsp;</td>
		</tr>
<!-- AKHIR SAKSI 1 -->
		<!-- Untuk memaksa penampilan setiap kolom -->
		
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		
<!-- AWAL SAKSI 2 -->
		<tr>
			<td colspan=48><strong>DATA SAKSI II </strong></td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td>:</td>
				<td colspan="33" class="kotak padat">&nbsp;
					<?= $input['nama_saksi2'];?>
				</td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi2'][$i])): ?>
						<?= $input['nik_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nomor Kartu Keluarga </td>
			<td>:</td>
	        <?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kk_saksi2'][$i])): ?>
						<?= $input['kk_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan</td>
			<td>:</td>
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">D</td>
				<td class="kotak padat tengah">O</td>				
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">E</td>
				<td class="kotak padat tengah">S</td>
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">A</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
		</tr>

<!-- AKHIR SAKSI 2 -->
        <tr><td colspan=48 ></td></tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr><td colspan=48 ></td></tr>
<!-- AYAH -->		
		<tr>
			<td colspan=48><strong>DATA ORANG TUA </strong></td>
		</tr>
        <tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nama Ayah</td>
			<td>:</td>
				<td colspan="33" class="kotak padat">&nbsp;
						<?= $input['nama_ayah'];?>
				</td>
			<td colspan=21>&nbsp;</td>
		</tr>		
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ayah'][$i])): ?>
						<?= $input['nik_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Tempat Lahir</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_ayah'][$i])): ?>
						<?= $input['tempat_lahir_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal lahir </td>
			<td>:</td>
			<?php if (!empty($input['tanggal_lahir_ibu'])) {
				$tgl = date('dd',strtotime($input['tanggal_lahir_ayah']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ayah']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ayah']));
				}
				else
				{ unset($tgl); unset($bln); unset($thn); }
			?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan</td>
			<td>:</td>
			
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">D</td>
				<td class="kotak padat tengah">O</td>				
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">E</td>
				<td class="kotak padat tengah">S</td>
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">A</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				
			<td colspan="4">&nbsp;</td>
		</tr>
<!-- AKHIR AYAH -->
<!-- AWAL IBU -->
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Nama Ibu</td>
			<td>:</td>

				<td colspan="33" class="kotak padat">&nbsp;
						<?= $input['nama_ibu'];?>
				</td>
			<td colspan=21>&nbsp;</td>
		</tr>		
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ibu'][$i])): ?>
						<?= $input['nik_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Tempat Lahir</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_ibu'][$i])): ?>
						<?= $input['tempat_lahir_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal lahir </td>
			<td>:</td>
			<?php if (!empty($input['tanggal_lahir_ibu'])) {
				$tgl = date('dd',strtotime($input['tanggal_lahir_ibu']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ibu']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ibu']));
				}
				else
				{ unset($tgl); unset($bln); unset($thn); }
			?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="10">&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan</td>
			<td>:</td>
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">D</td>
				<td class="kotak padat tengah">O</td>				
				<td class="kotak padat tengah">N</td>
				<td class="kotak padat tengah">E</td>
				<td class="kotak padat tengah">S</td>
				<td class="kotak padat tengah">I</td>
				<td class="kotak padat tengah">A</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
				<td class="kotak padat tengah">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
		</tr>

<!-- AKHIR IBU -->
        <tr><td colspan=48 ></td></tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
        <tr><td colspan=48 ></td></tr>
<!-- Jenazah -->
<tr>
			<td colspan=48><strong>KEMATIAN </strong></td>
		</tr>
		<tr>
			<td colspan="14">1.&nbsp;&nbsp;NIK </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($individu['nik'][$i])): ?>
						<?= $individu['nik'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="14">2.&nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
				<td colspan="30" class="kotak padat">&nbsp;
						<?= $individu['nama'];?>
				</td>
			<td colspan="4">&nbsp;</td>
		</tr>

		<tr>
			<td colspan="14">3.&nbsp;&nbsp;Tanggal Kematian </td>
			<td>:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_mati']));
				$bln = date('mm',strtotime($input['tanggal_mati']));
				$thn = date('Y',strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="12">&nbsp;</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="14">4.&nbsp;&nbsp;Pukul </td>
			<td>:</td>
			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['jam'][$i])): ?>
						<?= $input['jam'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=14>5.&nbsp;&nbsp;Sebab Kematian </td>
			<td>:</td>
			<td class="kotak padat tengah"><?= isset($input['sebab']) ? ($input['sebab'] == 1 ? 'V' : '') : '' ?></td>
			<td colspan=10>1. Sakit biasa / tua</td>
			<td class="kotak padat tengah"><?= isset($input['sebab']) ? ($input['sebab'] == 2 ? 'V' : '') : '' ?></td>
			<td colspan=10>2. Wabah Penyakit </td>
			<td class="kotak padat tengah"><?= isset($input['sebab']) ? ($input['sebab'] == 3 ? 'V' : '') : '' ?></td>
			<td colspan=10>3. Kecelakaan </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="15">&nbsp;</td>
			<td class="kotak padat tengah"><?= isset($input['sebab']) ? ($input['sebab'] == 4 ? 'V' : '') : '' ?></td>
			<td colspan=10>4. Kriminalitas </td>
			<td class="kotak padat tengah"><?= isset($input['sebab']) ? ($input['sebab'] == 5 ? 'V' : '') : '' ?></td>
			<td colspan=10>5. Bunuh Diri </td>
			<td class="kotak padat tengah"><?= isset($input['sebab']) ? ($input['sebab'] == 6 ? 'V' : '') : '' ?></td>
			<td colspan=10>6. Lainnya </td>
			<td colspan=3>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="14">6.&nbsp;&nbsp;Tempat Kematian Kab/Kota </td>
			<td>:</td>
				<td colspan="30" class="kotak padat">&nbsp;
						<?= $input['tempat_mati'];?>
				</td>
		</tr>
		<tr>
			<td colspan="14">7.&nbsp;&nbsp;Yang menerangkan </td>
			<td>:</td>
			<td class="kotak padat tengah"><?= isset($input['penolong_mati']) ? ($input['penolong_mati'] == 1 ? 'V' : '') : '' ?></td>
			<td colspan=4>1. Dokter </td>
			<td class="kotak padat tengah"><?= isset($input['penolong_mati']) ? ($input['penolong_mati'] == 2 ? 'V' : '') : '' ?></td>
			<td colspan=10>2. Tenaga Kesehatan </td>
			<td class="kotak padat tengah"><?= isset($input['penolong_mati']) ? ($input['penolong_mati'] == 3 ? 'V' : '') : '' ?></td>
			<td colspan=6>3. Kepolisian </td>
			<td class="kotak padat tengah"><?= isset($input['penolong_mati']) ? ($input['penolong_mati'] == 4 ? 'V' : '') : '' ?></td>
			<td colspan=6>4. Lainnya </td>
			<td colspan=12>&nbsp;</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
<!--Akhir Jenazah-->
	</table>
	<table id="ttd" class="disdukcapil" style="margin-top: 5px; margin-bottom: 0px; padding: 0px; border: 0px; border-collapse: collapse;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="33">&nbsp;</td>
			<td colspan="13" style="text-align: center;">
				<?= $config['nama_desa'];?>, <?= tgl_indo(date('Y m d',time()));?>
			</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="16" style="text-align: center;">Mengetahui</td>
			<td colspan="15">&nbsp;</td>
			<td colspan="10" style="text-align: center;">Pelapor</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="16" style="text-align: center;"><?= $this->penandatangan_lampiran($data);?></td>
			<td colspan="15">&nbsp;</td>
			<td colspan="10" style="text-align: center;">&nbsp;</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="16" style="text-align: center;"><strong>(&nbsp;<?= padded_string_center(strtoupper($input['pamong']),30)?>&nbsp;)</strong></td>
			<td colspan="13">&nbsp;</td>
			<td colspan="14" style="text-align: center;"><strong>(&nbsp;<?= padded_string_center(strtoupper($input['nama_pelapor']),30)?>&nbsp;)</strong></td>
			<td colspan="1">&nbsp;</td>
		</tr>
	</table>
</page>
