	<div id="main-content">
		<div id="templatemo">
			<div class="main-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slider-caption">
								<b><h1>
									<span id="typed"></span>
								</h1></b>							

								<div style="font-size: 20px;">
									<div id="nt-example1-container">
										<i class="fa fa-arrow-up" id="nt-example1-prev"></i>		                
											<ul id="nt-example1">
												<?php
													$count = 0;
													if($berita) {
														foreach ($berita as $key) {
															echo "<li> <b> ". $key->name.":</b> ".$key->text."</li>";
															/*if(strpos($key->source, 'Twitter') !== false) {
																echo "<li> ".$key->text."</li>";
															}
															else {
																echo "<li> ".$key->title."</li>";
															}*/
														}
													}
													else
														echo "<li>"."Tidak dapat memuat berita"."</li>";
												?>
							                </ul>
						                <i class="fa fa-arrow-down" id="nt-example1-next"></i>
					            </div>
								</div>
							</div>
							<img src="images/if-its.jpg" alt="Slide 1">
						</li>						
					</ul>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="welcome-text">
							<center>
							<div id="wxWrap" style="font-size: 26px;">								
								    <span id="wxIntro">
								        Cuaca Surabaya <?php echo date('d M Y');?>: 
								    </span>
								    <br />
								    <span id="wxIcon2"></span>
								    <span id="wxTemp"></span>								
							</div>
							</center>

							<br /><br />

							<ul id="ticker01">
								<div style="font-size: 32px;">

								<?php 
									if($utama) {
										foreach ($utama as $key) {											
											echo "<li><span>". $key->tanggal ."</span><a href=\"#\">". $key->konten."</a></li>";
											# code...
										}

									}
								?>
								<li><span>_____</span><a href="#">__________________________________________________</a></li>
								</div>
								<!-- eccetera -->
							</ul>

							<br />
							
							
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /#sTop -->

		<div class="container-fluid">
			<div id="services" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Berita</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				
				<?php 
					if(isset(Yii::app()->session['admin'])) {
						echo "<form action=\"index.php\" method=\"post\">";
					}
				?>

				<div class="row">
					<div>
						<div id="touchScroller2">
							
							<?php									
									if($berita) {
										$count = 1;
										foreach ($berita as $key) {
											$count++;
										}

										$total_tabel = $count/5;
										$row=1;
										$cek=1;
										$now=1;
										foreach ($berita as $key) {
											if($row==1) {
												echo "<div>"."<table>";

												echo "<tr>";
												echo "<th align=\"center\"><center>Berita</center></th>";
												if(isset(Yii::app()->session['admin'])) {
													echo "<th>Hapus</th>";	
												}										
												echo "</tr>";
											}											

											echo "<tr>";
											echo "<td> <b>".$key->name.":</b> ".$key->text."</td>";
											echo "</tr>";

											

											$row++; $cek++;
											if($cek==$count-1) {
												echo "</table></div>";
												break;

											}
											if($row==6) {
												$row = 1;
												echo "<tr>";
												echo "<td align=\"center\" colspan=\"2\"><center>".$now." dari ".$total_tabel." tabel</center></td>";
												echo "</tr>";
												$now++;
												echo "</table></div>";

											}									
										}
									}
									
									else
										echo "<div>"."Tidak ada berita yang ditampilkan"."</div>";
								?>							
						</div>
						<center><p>Geser tabel ke kanan dan ke kiri untuk melihat keseluruhan berita</p></center>
					</div>
				</div>			
							
				
				<div class="row our-skills">
					<div class="col-md-8">					

					</div>
				</div>
			</div> <!-- /#services -->

			<div id="about" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Pengumuman</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="slideshow">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pengumuman/1 Juni.jpg" width="432" height="632" alt="1 Juni 2014" />
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pengumuman/6 Juni.jpg" width="432" height="632" alt="6 Juni 2014" />
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pengumuman/6 Juni 2.jpg" width="432" height="632" alt="6 Juni 2014" />
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pengumuman/18 Juni.jpg" width="432" height="632" alt="18 Juni 2014" />
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pengumuman/23 Juni.jpg" width="432" height="632" alt="23 Juni 2014" />
					</div>
					<p id="caption" align="center"></p>

				</div>
			</div> <!-- /#about -->

			<div id="portfolio" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Jadwal</h2>
						</div> <!-- /.section-title -->
					</div>
				</div>
				<div class="row">
					<div class="tabcordion">
					  <ul class="nav nav-tabs">
					    <li class="active"><a data-target=".kuliah">Jadwal Perkuliahan</a></li>
					    <li><a data-target=".uts">Jadwal UTS</a></li>
					    <li><a data-target=".uas">Jadwal UAS</a></li>
					    <li><a data-target=".ta">Jadwal Sidang TA</a></li>
					    <li><a data-target=".tesis">Jadwal Sidang Tesis</a></li>
					  </ul>
					  <div class="tab-content">
					    <div class="kuliah active in">

					    	<div class="row">
								<?php
								$countr = 1;
								$tip;
								foreach( $sheet_array as $row ) {
								    $countc = 1;
								    foreach( $row as $column ) {
								    	if($countc==1 && $column=="Hari") {
								    		$tip=$countr;
								    		break;
								    	}		        
								        $countc++;
								    }		    
								    $countr++;
								}

								//echo $tip;

								echo "<table align=" . "center cellspacing='0'" . ">";
								$countrv = 1;
								foreach( $sheet_array as $row ) {
									if($countrv>=$tip) {

									    echo "<tr";
									    if($countrv%2==0) { echo " class='even'";}
									    echo ">";
									    $countcv = 1;
									    foreach($row as $column ) {
									    	if($countrv==$tip) {
									    	echo "<th>$column</th>";	
									    	}
									    	
									    	else {
									        echo "<td>$column</td>";
									    	}
									        $countcv++;
									    }
									    echo "</tr>";
									}
								    $countrv++;
								}								 
								echo "</table>";
								?>							
							</div>

					    </div>
					    <div class="uts">
					    </div>
					    <div class="uas">
					    </div>
					    <div class="ta">

					    	<table><tr><th width="150">WAKTU</th><th>KBK</th><th>RUANGAN</th><th>NRP</th><th width="150">MAHASISWA</th><th width="170">PEMBIMBING 1</th><th width="170">PEMBIMBING 2</th><th width="170">PENGUJI 1</th><th width="170">PENGUJI 2</th><th>JUDUL</th></tr><tr class="rowB"><td>Senin, 16 Juni 2014 Pukul 09:00-10:00</td><td>KCV</td><td>Ruang Rapat IF-215</td><td>5110100218</td><td>INES DWI ANDINI</td><td>AHMAD SAIKHU, S.Si., M.T.</td><td>RULLY SOELAIMAN, S.Kom., M.Kom.</td><td>BILQIS AMALIAH, S.Kom., M.Kom.</td><td>DIANA PURWITASARI, S.Kom., M.Sc.</td><td>Optimasi Unit Layanan Magnetic Resonance Imaging Berbasis Metode Monte Carlo dan Pemrograman Dinamis</td></tr><tr class="rowA"><td>Senin, 16 Juni 2014 Pukul 10:00-11:00</td><td>KCV</td><td>Ruang Rapat IF-215</td><td>5110100164</td><td>TEGUH SURYO SANTOSO</td><td>AHMAD SAIKHU, S.Si., M.T.</td><td>RULLY SOELAIMAN, S.Kom., M.Kom.</td><td>BILQIS AMALIAH, S.Kom., M.Kom.</td><td>DIANA PURWITASARI, S.Kom., M.Sc.</td><td>Desain dan Analisis Algoritma Modifikasi Hungarian untuk Permasalahan Penugasan Dinamis pada Studi Kasus Permasalahan SPOJ Klasik 12749</td></tr><tr class="rowB"><td>Senin, 16 Juni 2014 Pukul 11:00-12:00</td><td>KCV</td><td>Ruang Rapat IF-215</td><td>5109100024</td><td>NURUL KUSUMANINGSIH</td><td>AHMAD SAIKHU, S.Si., M.T.</td><td>RULLY SOELAIMAN, S.Kom., M.Kom.</td><td>BILQIS AMALIAH, S.Kom., M.Kom.</td><td>DIANA PURWITASARI, S.Kom., M.Sc.</td><td>Implementasi metode dua fase pada persoalan multiobyektif dengan studi kasus : permaslahan penugasan</td></tr><tr class="rowA"><td>Kamis, 19 Juni 2014 Pukul 08:00-09:00</td><td>NCC</td><td>Ruang Rapat IF-215</td><td>5110100054</td><td>DIMAS PRABOWO</td><td>ARY MAZHARUDDIN S., S.Kom., M.Comp.Sc.</td><td>BASKORO ADI PRATOMO, S.Kom, M.Kom. </td><td>HENNING TITI CIPTANINGTYAS, S.Kom., M.Kom.</td><td>HUDAN STUDIAWAN, S.Kom., M.Kom. </td><td>Sistem Peringatan Dini Terjadinya Tsunami Menggunakan Deteksi Pergerakan Air dan Kedalaman Air dengan Sensor Accelerometer dan Sensor Ultrasonic pada Mikrokontroler Arduino</td></tr><tr class="rowB"><td>Kamis, 19 Juni 2014 Pukul 08:00-09:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5110100160</td><td>MUNAWAROH</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>RULLY SOELAIMAN, S.Kom., M.Kom.</td><td>AHMAD SAIKHU, S.Si., M.T.</td><td>BILQIS AMALIAH, S.Kom., M.Kom.</td><td>Implementasi Segmentasi Citra dengan metode Fuzzy Co-Clustering dan Particle Swarm Optimization pada Ruang Warna CIELAB</td></tr><tr class="rowA"><td>Kamis, 19 Juni 2014 Pukul 09:00-10:00</td><td>NCC</td><td>Ruang Rapat IF-215</td><td>5109100146</td><td>MUHAMMAD HAQQI WICAKSONO</td><td>ARY MAZHARUDDIN S., S.Kom., M.Comp.Sc.</td><td>HUDAN STUDIAWAN, S.Kom., M.Kom. </td><td>HENNING TITI CIPTANINGTYAS, S.Kom., M.Kom.</td><td>BASKORO ADI PRATOMO, S.Kom, M.Kom. </td><td>Sistem Keamanan Rumah Menggunakan Sensor Ultrasonik, RFID, dan Kamera Pengawas Dengan Alert Berupa MMS</td></tr><tr class="rowB"><td>Kamis, 19 Juni 2014 Pukul 09:00-10:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5108100705</td><td>LENA SARTIKA CAPAH</td><td>AHMAD SAIKHU, S.Si., M.T.</td><td>RULLY SOELAIMAN, S.Kom., M.Kom.</td><td>BILQIS AMALIAH, S.Kom., M.Kom.</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>Implementasi Metode Fase I Max flow dan Positif Cut untuk Menyelesaikan Masalah Kelayakan</td></tr><tr class="rowA"><td>Kamis, 19 Juni 2014 Pukul 10:00-11:00</td><td>NCC</td><td>Ruang Rapat IF-215</td><td>5109100054</td><td>FANDIASA KORUMA KOSTRADA</td><td>ARY MAZHARUDDIN S., S.Kom., M.Comp.Sc.</td><td>TOHARI AHMAD, S.Kom., MIT., Ph.D.</td><td>HENNING TITI CIPTANINGTYAS, S.Kom., M.Kom.</td><td>HUDAN STUDIAWAN, S.Kom., M.Kom. </td><td>Perancangan Sistem Keamanan Tempat Parkir Dengan Menggunakan Smart Gate</td></tr><tr class="rowB"><td>Kamis, 19 Juni 2014 Pukul 10:00-11:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5110100114</td><td>FARAH NURUL ILMA</td><td>BILQIS AMALIAH, S.Kom., M.Kom.</td><td>AHMAD SAIKHU, S.Si., M.T.</td><td>Dr.tech. Ir. R.V.HARI GINARDI, M.Sc.</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>Implementasi Penggunaan Bilangan Fuzzy Trapezoidal untuk Mencari Jalur Kritis pada Jaringan Proyek Fuzzy</td></tr><tr class="rowA"><td>Kamis, 19 Juni 2014 Pukul 11:00-12:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5110100117</td><td>OLYN RIPTIANINGDYAH</td><td>BILQIS AMALIAH, S.Kom., M.Kom.</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>Dr.tech. Ir. R.V.HARI GINARDI, M.Sc.</td><td>AHMAD SAIKHU, S.Si., M.T.</td><td>Implementasi metode Node Combination untuk menemukan rute terpendek</td></tr><tr class="rowB"><td>Kamis, 19 Juni 2014 Pukul 13:00-14:00</td><td>NCC</td><td>Ruang Rapat IF-215</td><td>5110100016</td><td>BASTIAN AJRIYA ERYANA</td><td>Ir. MUCHAMMAD HUSNI, M.Kom.</td><td>HENNING TITI CIPTANINGTYAS, S.Kom., M.Kom.</td><td>Dr.Eng. RADITYO ANGGORO, S.Kom., M.Sc.</td><td>BASKORO ADI PRATOMO, S.Kom, M.Kom. </td><td>Rancang Bangun Perangkat Lunak Pencarian Audio Fingerprint Lagu pada Server Data Terdistribusi</td></tr><tr class="rowA"><td>Kamis, 19 Juni 2014 Pukul 14:00-15:00</td><td>NCC</td><td>Ruang Rapat IF-215</td><td>5109100005</td><td>RESTO AJIE SUYANTO</td><td>Ir. MUCHAMMAD HUSNI, M.Kom.</td><td>HENNING TITI CIPTANINGTYAS, S.Kom., M.Kom.</td><td>Dr.Eng. RADITYO ANGGORO, S.Kom., M.Sc.</td><td>BASKORO ADI PRATOMO, S.Kom, M.Kom. </td><td>Sistem Manajemen Pembelajaran Real Time Berbasis Konferensi Web Menggunakan Moodle dan BigBlueButton</td></tr><tr class="rowB"><td>Jumat, 20 Juni 2014 Pukul 08:00-09:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5108100703</td><td>MUJAAHIDAH AS SAYFULLOOH.</td><td>ANNY YUNIARTI, S.Kom., M.Comp.Sc.</td><td>Dr. AGUS ZAINAL ARIFIN, S.Kom., M.Kom.</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>WIJAYANTI NURUL K.,S.Kom., M.Sc.</td><td>Implementasi Evaluasi Performa Struktural Algoritma Deteksi Struktur Garis Lengkung</td></tr><tr class="rowA"><td>Jumat, 20 Juni 2014 Pukul 09:00-10:00</td><td>NCC</td><td>Ruang Rapat IF-215</td><td>5110100123</td><td>FAJRI RAHMAT</td><td>ARY MAZHARUDDIN S., S.Kom., M.Comp.Sc.</td><td>HUDAN STUDIAWAN, S.Kom., M.Kom. </td><td>ROYYANA MUSLIM IJTIHADIE, S.Kom., M.Kom., PhD.</td><td>BASKORO ADI PRATOMO, S.Kom, M.Kom. </td><td>Sistem Pendeteksi dan Pencegah Peretasan terhadap Aplikasi Berbasis Web dengan Teknik Web Application Firewall (WAF)</td></tr><tr class="rowB"><td>Jumat, 20 Juni 2014 Pukul 09:00-10:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5110100178</td><td>ASTRIS DYAH PERWITA</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>RULLY SOELAIMAN, S.Kom., M.Kom.</td><td>Dr. AGUS ZAINAL ARIFIN, S.Kom., M.Kom.</td><td>WIJAYANTI NURUL K.,S.Kom., M.Sc.</td><td>Implementasi Penggabungan Algoritma SVM-SA Pada Permasalah Klasifikasi Pola</td></tr><tr class="rowA"><td>Jumat, 20 Juni 2014 Pukul 10:00-11:00</td><td>NCC</td><td>Ruang Rapat IF-215</td><td>5110100011</td><td>HAPPY AYU CHRISTIANTY</td><td>ARY MAZHARUDDIN S., S.Kom., M.Comp.Sc.</td><td>BASKORO ADI PRATOMO, S.Kom, M.Kom. </td><td>ROYYANA MUSLIM IJTIHADIE, S.Kom., M.Kom., PhD.</td><td>HUDAN STUDIAWAN, S.Kom., M.Kom. </td><td>Aplikasi Pendeteksi Pembajakan Akun Twitter Menggunakan Pemodelan Mandatory dan Optional</td></tr><tr class="rowB"><td>Jumat, 20 Juni 2014 Pukul 10:00-11:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5110100095</td><td>ETTYC JUHARWIDYNINGSIH</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>WIJAYANTI NURUL K.,S.Kom., M.Sc.</td><td>Dr. AGUS ZAINAL ARIFIN, S.Kom., M.Kom.</td><td>ISYE ARIESHANTI, S.Kom, M.Phil.</td><td>Pengenalan Pola Tulisan Tangan Angka dan Operasi Matematika Menggunakan Two-Stage Fuzzy C-Means berdasarkan Zernike Moments</td></tr><tr class="rowA"><td>Jumat, 20 Juni 2014 Pukul 13:00-14:00</td><td>KCV</td><td>Ruang Rapat IF-217</td><td>5110100078</td><td>I GUSTI FAUZI GERI SATRIA</td><td>ISYE ARIESHANTI, S.Kom, M.Phil.</td><td>Dr. Eng. NANIK SUCIATI, S.Kom., M.Kom.</td><td>Dr. CHASTINE FATICHAH, S.Kom., M.Kom.</td><td>ABDUL MUNIF, S.Kom., M.Sc.</td><td>Implementasi Metode Ranking-based KNN untuk Klasifikasi Impresi Multi-label pada Citra Batik</td></tr><tr class="rowB"><td>Senin, 23 Juni 2014 Pukul 10:00-11:00</td><td>RPL</td><td>Ruang Rapat IF-217</td><td>5110100709</td><td>CHAIRAJA ALMAS DJENI</td><td>Prof. Drs.Ec. Ir. RIYANARTO SARNO, M.Sc., Ph.D. </td><td>DWI SUNARYONO, S.Kom., M.Kom.</td><td>Dr. Ir. SITI ROCHIMAH, M.T.</td><td>ABDUL MUNIF, S.Kom., M.Sc.</td><td>Rancang Bangun Workflow Management System pada kasus ERP</td></tr><tr class="rowA"><td>Senin, 23 Juni 2014 Pukul 11:00-12:00</td><td>RPL</td><td>Ruang Rapat IF-217</td><td>5110100190</td><td>FERNANDES P. SINAGA</td><td>Prof. Drs.Ec. Ir. RIYANARTO SARNO, M.Sc., Ph.D. </td><td>ABDUL MUNIF, S.Kom., M.Sc.</td><td>Dr. Ir. SITI ROCHIMAH, M.T.</td><td>DWI SUNARYONO, S.Kom., M.Kom.</td><td>Rancang Bangun Fuzzy Association Rule Miner untuk Mendeteksi Fraud pada Proses Bisnis Enterprise Resource Planning (ERP)</td></tr><tr class="rowB"><td>Senin, 23 Juni 2014 Pukul 13:00-14:00</td><td>RPL</td><td>Ruang Rapat IF-217</td><td>5110100094</td><td>MOHAMMAD FARID NAUFAL</td><td>Prof. Drs.Ec. Ir. RIYANARTO SARNO, M.Sc., Ph.D. </td><td>--</td><td>Dr. Ir. SITI ROCHIMAH, M.T.</td><td>DWI SUNARYONO, S.Kom., M.Kom.</td><td>Penerapan Metode Proses Mining Pada Ontologi Event Log Untuk Mendeteksi Fraud pada Proses Bisnis ERP</td></tr><tr class="rowA"><td>Selasa, 24 Juni 2014 Pukul 10:00-11:00</td><td>RPL</td><td>Ruang Rapat IF-215</td><td>5110100130</td><td>QOTRUN NADA HAROEN</td><td>SARWOSRI, S.Kom., M.T.</td><td>RIZKY JANUAR AKBAR, S.Kom., M.Eng.</td><td>RIDHO RAHMAN H., S.Kom., M.Sc.</td><td>RATIH NUR ESTI A.,S.Kom., M.Sc.</td><td>ZIARAH: Aplikasi Berbagi Informasi dan Rekomendasi Urutan Kunjungan Tempat Wisata Ziarah</td></tr><tr class="rowB"><td>Selasa, 24 Juni 2014 Pukul 11:00-12:00</td><td>RPL</td><td>Ruang Rapat IF-215</td><td>5110100132</td><td>FADLIKA DITA NURJANTO</td><td>SARWOSRI, S.Kom., M.T.</td><td>RIDHO RAHMAN H., S.Kom., M.Sc.</td><td>RATIH NUR ESTI A.,S.Kom., M.Sc.</td><td>RIZKY JANUAR AKBAR, S.Kom., M.Eng.</td><td>Perancangan dan Pembangunan Perangkat Lunak ITS Touring View Menggunakan Based Location Augmented Reality Pada Perangkat Bergerak Berbasis Android</td></tr><tr class="rowA"><td>Rabu, 25 Juni 2014 Pukul 08:00-09:00</td><td>RPL</td><td>Ruang Rapat IF-215</td><td>5110100155</td><td>HELENA NADIA PRATIWI</td><td>DWI SUNARYONO, S.Kom., M.Kom.</td><td>ABDUL MUNIF, S.Kom., M.Sc.</td><td>DANIEL ORANOVA S., S.Kom., M.Sc., P.D.Eng.</td><td>Dr.Eng. RADITYO ANGGORO, S.Kom., M.Sc.</td><td>Implementasi Metode Klasifikasi Fuzzy dalam Pengelompokan Posting Grup Lapak Jual Beli pada Facebook untuk Mempermudah Pencarian Informasi Barang</td></tr><tr class="rowB"><td>Rabu, 25 Juni 2014 Pukul 09:00-10:00</td><td>RPL</td><td>Ruang Rapat IF-215</td><td>5110100165</td><td>ADAM GEGI YOWANDA</td><td>DWI SUNARYONO, S.Kom., M.Kom.</td><td>RIDHO RAHMAN H., S.Kom., M.Sc.</td><td>DANIEL ORANOVA S., S.Kom., M.Sc., P.D.Eng.</td><td>NURUL FAJRIN A.,S.Kom., M.Sc.</td><td>Rancang Bangun Aplikasi Papan Tulis Virtual dengan Menggunakan Leap Motion.</td></tr><tr class="rowA"><td>Rabu, 25 Juni 2014 Pukul 10:00-11:00</td><td>RPL</td><td>Ruang Rapat IF-215</td><td>5110100220</td><td>RAMADHANI TEGAR PERKASA</td><td>DWI SUNARYONO, S.Kom., M.Kom.</td><td>RIDHO RAHMAN H., S.Kom., M.Sc.</td><td>DANIEL ORANOVA S., S.Kom., M.Sc., P.D.Eng.</td><td>NURUL FAJRIN A.,S.Kom., M.Sc.</td><td>Perancangan Pembuatan Perangkat Lunak Digital Signage untuk Layanan Informasi Seputar Kampus Teknik Informatika ITS dengan Menggunakan Media Kontroler Kinect</td></tr><tr class="rowB"><td>Rabu, 25 Juni 2014 Pukul 13:00-14:00</td><td>RPL</td><td>Ruang Rapat IF-215</td><td>5110100202</td><td>MUHAMMAD HANIF B</td><td>IMAM KUSWARDAYAN, S.Kom, M.T.</td><td>RIDHO RAHMAN H., S.Kom., M.Sc.</td><td>DIANA PURWITASARI, S.Kom., M.Sc.</td><td>DANIEL ORANOVA S., S.Kom., M.Sc., P.D.Eng.</td><td>Eksplorasi Leap Motion untuk Pembuatan Game Interaktif "Catch the Bugs"</td></tr></table>
					    </div>
					    <div class="tesis">
					    </div>
					</div>

				</div>
			</div>
				
			</div>

			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Denah</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<center>
						<table>
							<tr> 
								<th>Denah Lantai 3</th>
								<th rowspan="2"> 
									<div class='box' id='rpl'> 
									Laboratorium Rekayasa Perangkat Lunak<br />
									rpl.if.its.ac.id<br />
									Ruang IF-301 <br />
									Kepala Laboratorium: Siti Rochimah <br />
									Teknisi Laboratorium: Djumali <br />
									Riset:

									 </div>
									
									<div class='box' id='kbj'> 
									Laboratorium Komputasi Berbasis Jaringan<br />
									kbj.if.its.ac.id<br />
									Ruang IF-302 <br />
									Kepala Laboratorium: Tohari <br />
									Teknisi Laboratorium: Djumali <br />
									Riset:
									
									</div>

									<div class='box' id='ibs'> 
									Laboratorium Sistem Cerdas<br />
									if304.if.its.ac.id<br />
									Ruang IF-303 <br />
									Kepala Laboratorium:  <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='lp'> 
									Laboratorium Pemrograman<br />
									lp.if.its.ac.id<br />
									Ruang IF-304 <br />
									Kepala Laboratorium: Sarwosri <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='hima'> 
									Ruang Himpunan Teknik Computer-Informatika ITS<br />
									
									</div>

									<div class='box' id='game'> 
									Laboratorium Pengembangan Game<br />
									Ruang IF-305 <br />
									Kepala Laboratorium: Imam <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='nokia'> 
									Laboratorium Nokia<br />
									
									</div>
									
									<div class='box' id='ajk'> 
									Laboratorium Arsitektur Jaringan Komputer<br />
									ajk.if.its.ac.id<br />
									Ruang IF-306 <br />
									Kepala Laboratorium: M. Husni <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='vip'> 
									Laboratorium VIPG<br />
									vipg.if.its.ac.id<br />
									Ruang IF-307 <br />
									Kepala Laboratorium: Handayani <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='lp2'> 
									Laboratorium Pemrograman II<br />
									Ruang IF-308 <br />
									Kepala Laboratorium: Dwi Sunaryono <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='gcl'> 
									Laboratorium Komputasi Grid<br />
									Ruang IF-309 <br />
									Kepala Laboratorium: Arunanto <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='rsbp'> 
									Laboratorium RSBP<br />
									rsbp.if.its.ac.id<br />
									Ruang IF-310 <br />
									Kepala Laboratorium: Daniel <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>

									<div class='box' id='os'> 
									Laboratorium OS<br />
									os.if.its.ac.id<br />
									Ruang IF-311 <br />
									Kepala Laboratorium:  <br />
									Teknisi Laboratorium:  <br />
									Riset:
									
									</div>



									

								</th>
							</tr>
							<tr>
							<td>
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/map-floor2.png" width="550" height="528" alt="Lantai 3" usemap="#lantai3">

								<ul class="contentLinks">
								<map name="lantai3">
								  <li><area shape="rect" coords="0,0,76,91" href="#rpl" alt="RPL"></li>
								  <li><area shape="rect" coords="78,1,150,89" href="#kbj" alt="KBJ"></li>	
								  <li><area shape="rect" coords="153,1,226,90" href="#ibs" alt="IBS"></li>						  
								  <li><area shape="rect" coords="228,1,323,90" href="#lp" alt="LP"></li>						  
								  <li><area shape="rect" coords="367,22,434,78" href="#hima" alt="HMTC"></li>		
								  <li><area shape="rect" coords="368,134,457,203" href="#game" alt="GAME"></li>
								  <li><area shape="rect" coords="368,205,457,300" href="#ajk" alt="AJK"></li>
								  <li><area shape="rect" coords="367,302,458,368" href="#vip" alt="VIP"></li>
								  <li><area shape="rect" coords="357,441,435,483" href="#nokia" alt="NOKIA"></li>
								  <li><area shape="rect" coords="229,415,323,505" href="#lp2" alt="LP2"></li>
								  <li><area shape="rect" coords="154,416,226,504" href="#gcl" alt="GCL"></li>
								  <li><area shape="rect" coords="379,416,153,506" href="#rsbp" alt="RSBP"></li>
								  <li><area shape="rect" coords="2,414,78,504" href="#os" alt="OS"></li>				  								  
								</map>
								</ul>
							</td>						    
							
							</tr>
						</table>
					</center>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->	

				<div class=="row">
					<?php
						/*if($dosen) {
							//$bd_pen = array();
							foreach ($dosen as $key) {
								$bd = $key->bidang_penelitian;
								$jb = $key->jabatan;
								echo $key->name. " " . $key->email . " " . $key->bidang_minat . "<br />";
								echo "<img src=" . Yii::app()->request->baseUrl . "/images" .$key->path ." />";
								echo "<br />";
								if(is_array($bd)) {
									$counts=1;
									foreach ($bd as $key2) {
										foreach ($key2 as $key3) {
											echo $key3 ." ";//" bid pen: " . $key3->bidang;
										}
										
										$counts++;
									}
									echo count($bd);
								}
								echo "<br />";
								if(is_array($jb)) {
									$counts=1;
									//echo $jb;
									foreach ($jb as $key4) {
									// 	echo $key4;
									 	foreach ($key4 as $key5) {
									 		echo $key5 ." ";//" bid pen: " . $key3->bidang;
									 	}
										
									// 	$counts++;
									 }
									
								}
								echo "<br />";
							}
							echo "<br />";
						}*/
					?>
				</div>			
			</div> <!-- /#contact -->

		</div> <!-- /.container-fluid -->

		<div class="site-footer">
			<div class="first-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="social-footer">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-dribbble"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-rss"></a></li>
								</ul>
							</div> <!-- /.social-footer -->
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.first-footer -->

			<div class="bottom-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							
							<p class="copyright">Copyright © 2014 <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/logout"> Jurusan Teknik Informatika</a>
                            </p>
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 credits">
							<p></p>
                            <!-- / please support templatemo.com by providing a credit link. thank you. / -->
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.bottom-footer -->
		</div> <!-- /.site-footer -->

	</div> <!-- /#main-content -->