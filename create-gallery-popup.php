<div id="newGalleryPopup" class="create-gallery-modal">

		<!-- Modal content -->
			<div class="create-gallery-content">
			<a href="javascript:void(0);" id="close-createGallery" class="button medium icon fa-times" style="height:50px;float:left;;width:60px;font-size:30px;padding:0px;padding: 3% auto;"></a>
			<h2 style="font-size:25px;float:left;margin-left:30px;margin-top:10px;">Let's Create A New Gallery!</h2>

			<br>

			<div style="padding-top:25px;">



					<form action="create-gallery.php" method="post">
					<div>

						<div style="width:35%;float:left;">


						<div style="background-color:#00000010;padding:10px;border-radius:5px;">
							
							<div>
								<fieldset id="create-gallery-inputs" style="width:100%;">

									<p style="font-size:25px; margin:3px;">Gallery Name</p>
									<input id="gallery-name" type="text" name="GalleryName" placeholder="Name your gallery" required>
									<p style="font-size:25px; margin:3px;">Gallery Description</p>
									<input id="gallery-description" type="text" name="GalleryDescription" placeholder="Give your gallery a description" required>
								</fieldset>

							</div>

						</div>

					<div style="background-color:#00000010;padding:10px;border-radius:5px;margin-top:20px;">
					<div>
						<fieldset id="create-gallery-inputs" style="width:100%;">

								<div>

									<p style="font-size:25px; margin:3px;">Gallery Interior</p>
									<select name="Interior">
									<option value="0">Modern</option>
									<option value="1">Contemporary</option>
									<option value="2">Traditional</option>
									</select>
								
								</div>
								
						</fieldset>

							</div>

					</div>

					<div style="background-color:#00000010;padding:10px;border-radius:5px;margin-top:20px;">
					<div>
						<fieldset id="create-gallery-inputs" style="width:100%;">

								<div>

									<p style="font-size:25px; margin:3px;">Gallery Size</p>
									<select name="Size" onchange="updateBlueprint(this)">
									<option value="0">Small - Single Room (10 Images)</option>
									<option value="1">Medium - Two Rooms (20 Images)</option>
									<option value="2">Large - Three Rooms (50 Images)</option>
									</select>
								
								</div>
								
						</fieldset>

							</div>

					</div>

					<fieldset id="create-gallery-actions" style="padding-top:20px;">
							
							<input type="submit" id="create-gallery-submit" value="Create" style="width:50%;height:60px;font-size:20px;padding:0px;margin-left:25%;">
					</fieldset>


						</div>

						<div style="background-color:#00000010;padding:10px;border-radius:5px;width:60%;overflow:visible;height:90%;margin-left:40%">

							<div>
								<img id="blueprintImageSmall" src="images/SmallContemporyBlueprint.png" width=50% style="margin-left:25%">
								<img id="blueprintImageMedium" src="images/SmallContemporyBlueprint.png" width=50% style="margin-left:25%;display:none;">
								<img id="blueprintImageLarge" src="images/SmallContemporyBlueprint.png" width=50% style="margin-left:25%;display:none;">
							</div>

							<br>

							<div>
								<p style="font-size:25px; margin:3px;">Image Placements</p>
								<p style="font-size:20px; margin:3px;">Use the dropdowns to select images to display in each poistion.</p>

								
								<div id="gallerySmall" style="display:block;overflow:auto;height:40%;">
								<?php include "gallery-images-10.php"; ?>
								</div>

								<div id="galleryMedium" style="display:none;overflow:auto;height:40%;">
								<?php include "gallery-images-20.php"; ?>
								</div>

								<div id="galleryLarge" style="display:none;overflow:auto;height:40%;">
								<?php include "gallery-images-50.php"; ?>
								</div>

							</div>

						</div>
					</div>
					<br>

					


					</form>


			</div>
			</div>

		</div>