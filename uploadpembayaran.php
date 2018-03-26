<?php
	include "breadcrumb.php";
?>
<div class="uploadpembayaran">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="tombolmenu">
					<div class="col s12">
						<div class="col s1 list center">
							<a href="?page=profile">
								<i class="fa fa-arrow-left"></i>
								<p>Back</p>
							</a>
						</div>
					</div>
				</div>
				<div class="title">
					<h4>Upload Bukti Pembayaran</h4>
				</div>
				<form>
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn">
								<span>File</span>
								<input type="file">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</div>
				</form>

					<div class="row">
						<a href="#confrimasipembayaran" class="btn waves-light waves-effect modal-trigger">
									Upload
						</a>
						<div id="confrimasipembayaran" class="modal">
							<div class="modal-content">
								<p>Apakah file yang anda upload sudah benar?</p>
							</div>
							<div class="modal-footer">
							<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Disagree</a>
								<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>