	<div id="main-content">
		<div id="templatemo">
			<div class="main-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slider-caption">								

								<?php 
								if($konten) {

									foreach ($konten as $key) {
										if($key->header != "") {
											if(!isset(Yii::app()->session['admin'])) {
												echo "<b><h2>".$key->header."</h2></b>";
											}
											else { ?>
											<form action="index.php" method="post">
											<input type="hidden" value="<?php echo $key->_id;?>" name="idheader" />	
											<textarea name="editheader" rows="1" cols="50"style="background-color:white; border: #6E6E6E; color:#bbb"><?php echo $key->header;?></textarea>
											<br />
											<input type="submit" value="Edit" />
											</form>
											<?php
											}
										}	
									}
								}									

								if (isset(Yii::app()->session['admin'])) {
									echo "<br /><br />";
									echo 'Login sebagai ' . Yii::app()->session['admin'] . "<br />". "<a href=" . Yii::app()->request->baseUrl . "/index.php?r=site/logout" ." > Logout</a>";
								}
								else {								
								?>

								<p>
									<div id="nt-example1-container">
									<i class="fa fa-arrow-up" id="nt-example1-prev"></i>		                
									<ul id="nt-example1">
										<?php
											$count = 0;
											if($berita) {
												foreach ($berita as $key) {
													echo "<li> ".$key->text."</li>";
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
								</p>

								<?php 

								}
								?>

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
							<h2>Jurusan Teknik Informatika</h2>
							<p>
								<?php 
								if($konten) {
									foreach ($konten as $key) {
										if($key->jurusan != "") {
											if(!isset(Yii::app()->session['admin'])) 
											{
												echo $key->jurusan;
											}
											else { ?>
												<form action="index.php" method="post">
												<input type="hidden" value="<?php echo $key->_id;?>" name="iddeskripsi" />	
												<textarea name="editdeskripsi" rows="6" cols="150" style="background-color:white; border: #6E6E6E; color:#bbb"><?php echo $key->jurusan;?></textarea>
												<input type="submit" value="Edit" />
												</form>
											<?php
											}
										}
									}
								}
								?>
							</p>
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
						<div id="touchScroller">
							
							<?php									
									if($berita) {
										$count = 1;
										foreach ($berita as $key) {
											$count++;
										}

										$total_tabel = $count/10;
										$row=1;
										$cek=1;
										
										/*
										<form action="index.php" method="post">
											<input type="hidden" value="<?php echo $key->_id;?>" name="idheader" />	
											<textarea name="editheader" rows="1" cols="50"style="background-color:white; border: #6E6E6E; color:#bbb"><?php echo $key->header;?></textarea>
											<br />
											<input type="submit" value="Edit" />
											</form>
										*/
										foreach ($berita as $key) {
											if($row==1) {
												echo "<div>"."<table>";

												echo "<tr>";
												echo "<th>Berita</th>";
												if(isset(Yii::app()->session['admin'])) {
													echo "<th>Hapus</th>";	
												}										
												echo "</tr>";
											}											

											echo "<tr>";
											if(!isset(Yii::app()->session['admin'])) {
												echo "<td>".$key->text."</td>";
											}
											else {
												echo "<input type=\"hidden\" value=\"$key->_id\" name=\"idnews[$cek]\" />";
												echo "<td>"."<textarea readonly name=\"editnews[$cek]\" rows=\"1\" cols=\"100\"style=\"background-color:white; border: #6E6E6E; color:#bbb\">".$key->text."</textarea>"."</td>";
												echo "<input align=\"center\" type=\"hidden\" name=\"avail[$cek]\"  value=\"0\" />";			
												echo "<td>"."<input align=\"center\" type=\"checkbox\" name=\"avail[$cek]\"  value=\"1\" />"."</td>";			
												
											}								
											echo "</tr>";

											$row++; $cek++;
											if($cek==$count-1) {
												echo "</table></div>";
												break;

											}
											if($row==6) {
												$row = 1;
												echo "</table></div>";

											}									
										}
									}
									
									else
										echo "<div>"."Tidak ada berita yang ditampilkan"."</div>";
								?>							
						</div>
					</div>
				</div>	
				<?php
				if(isset(Yii::app()->session['admin'])) {
					echo "<input type=\"text\" value=\"$cek\" name=\"total\" />";
												
					echo "<br />";
					echo "<input align=\"center\" type=\"submit\" value=\"Delete\" />";
					echo "</form>";
				}
				?>	

				<div class="row">
				<div>

				
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
							<h2>Staf</h2>
						</div>
					</div>
				</div>

				<div class="row">
					
				

				<div class="row">
					<div class="tabcordion">
					  <ul class="nav nav-tabs">
					    <li class="active"><a data-target=".akademik">Staf Akademik</a></li>
					    <li><a data-target=".administrasi">Staf Administrasi</a></li>
					  </ul>
					  <div class="tab-content">
					    <div class="akademik active in">
					    	<br />
					    	Rekayasa Perangkat Lunak 
					    	<div id="touchScroller2">				
								<?php									
										if($dosen) {
											$count = 1;
											foreach ($dosen as $key) {
												$count++;
											}

											$total_tabel = $count/10;
											$row=1;
											$cek=1;							
											
											foreach ($dosen as $key) {
												if($key->bidang_minat == "rpl") {
													if($row==1) {
														echo "<div>"."<table>";

														echo "<tr>";
														echo "<th colspan=\"2\">".$key->name."</th>";
																							
														echo "</tr>";
													}											

													echo "<tr>";
													$imgpath = Yii::app()->request->baseUrl . "/images" . $key->path;
													
													echo "<td>"."<img src=\"". $imgpath . "\" width=\"150\" alt=\"Demo image\" id=\"gnome\" />"."</td>";
													echo "<td>";
													echo $key->email . "<br />";
													$array_pen = $key->bidang_penelitian;
													//foreach ($array_pen as $key2) {
														//echo $key2->bidang . "<br />";
														# code...
													//}
													
													
													echo "</td>";			
														
																					
													echo "</tr>";

													$row++; $cek++;
													if($cek==$count-1) {
														echo "</table></div>";
														break;

													}
													if($row==2) {
														$row = 1;
														echo "</table></div>";

													}									
											}
										}
									}										
									?>							
								</div>

								
							    	Komputasi Cerdas dan Visualisasi
							    	<div id="touchScroller3">				
										<?php									
												if($dosen) {
													$count = 1;
													foreach ($dosen as $key) {
														$count++;
													}

													$total_tabel = $count/10;
													$row=1;
													$cek=1;							
													
													foreach ($dosen as $key) {
														if($key->bidang_minat == "kcv") {
															if($row==1) {
																echo "<div>"."<table>";

																echo "<tr>";
																echo "<th colspan=\"2\">".$key->name."</th>";
																									
																echo "</tr>";
															}											

															echo "<tr>";
															$imgpath = Yii::app()->request->baseUrl . "/images" . $key->path;
															
															echo "<td>"."<img src=\"". $imgpath . "\" width=\"150\" alt=\"Demo image\" id=\"gnome\" />"."</td>";
															echo "<td>";
															echo $key->email . "<br />";
															$array_pen = $key->bidang_penelitian;
															//foreach ($array_pen as $key2) {
																//echo $key2->bidang . "<br />";
																# code...
															//}
															
															
															echo "</td>";			
																
																							
															echo "</tr>";

															$row++; $cek++;
															if($cek==$count-1) {
																echo "</table></div>";
																break;

															}
															if($row==2) {
																$row = 1;
																echo "</table></div>";

															}									
													}
												}
											}
												
											?>							
										</div>
											    	
						    </div>
					    	
							
						    <div class="administrasi">
						      <h3>Profile</h3>
						      <p>Odio mattis, non ut! Porttitor nunc phasellus cras elementum.</p>
						    </div>
						  </div>
						</div>
					</div>				
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

						<br />
						<form action="index.php" method="post" enctype="multipart/form-data">
						File: <input type="file" name="filename" />
						<input type="submit" value="Upload" />
						</form>

					
			</div>
		</div>

			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Contact Us</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="map-holder">
							<div class="google-map-canvas" id="map-canvas" style="height: 400px;">
                    		</div>
						</div> <!-- /.map-holder -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				
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
							<?php 
							if(!isset(Yii::app()->session['admin'])) {
							?>
							<div id="showmenu">Log in sebagai administrator</div>
							
							<div class="menu" style="display: none;">
								<div class="form">
								</br >
								<?php $form=$this->beginWidget('CActiveForm', array(
									'id'=>'login-form',
									'enableClientValidation'=>true,
									'clientOptions'=>array(
										'validateOnSubmit'=>true,
									),
								)); ?>
									<table align="center">
										<tr>
											<td>
												<?php echo $form->labelEx($model,'username'); ?>
											</td>
											<td>
												<?php echo $form->textField($model,'username'); ?>
												<?php echo $form->error($model,'username'); ?>
											</td>
										</tr>

										<tr>
											<td>
												<?php echo $form->labelEx($model,'password'); ?>
											</td>
											<td>
												<?php echo $form->passwordField($model,'password'); ?>
												<?php echo $form->error($model,'password'); ?>
											</td>
										</tr>

										<tr>
											<td>											
												
											</td>
											<td>
												<?php echo $form->checkBox($model,'rememberMe'); ?>
												<?php echo $form->label($model,'rememberMe'); ?>
												<?php echo $form->error($model,'rememberMe'); ?>
											</td>
											
										</tr>

										<tr>
											<td>
											</td>
											<td>
												<?php echo CHtml::submitButton('Login'); ?>
											</td>
											
										</tr>
									</table>

								<?php $this->endWidget(); ?>
								</div><!-- form -->
								<br />
							</div>
							<?php } ?>
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
	

