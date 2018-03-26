<div class="datapendaftaran">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="tombolmenu">
					<div class="col s12 right">
						<div class="col s1 list center">
							<a href="">
								<i class="fa fa-download"></i>
								<p>Download</p>
							</a>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="input-field col s12">
					    <select>
					      	<option value="" disabled selected>Choose your option</option>
					      	<option value="1">10</option>
					      	<option value="2">20</option>
					      	<option value="3">30</option>
					    </select>
					    <label>Record per Page</label>
					 </div>
				</div>
				<div class="col s12 m6 l4 right">
					<div class="input-field col s12">
			          	<i class="fa fa-search prefix"></i>
			          	<input id="search" type="text" class="validate">
			          	<label for="search">Search</label>
			        </div>
				</div>
				<div class="col s12 m12 l12">
					<table class="striped responsive-table">
						<thead>
							<tr>
								<th data-field="no">No</th>
								<th data-field="nodaftar">No. Daftar</th>
								<th data-field="nama">Nama</th>
								<th data-field="status">Status</th>
								<th data-field="tgldaftar">Tanggal Daftar</th>
								<th data-field="action">Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1</td>
								<td>A11.2001</td>
								<td>Shodiq</td>
								<td>Terverifikasi</td>
								<td>29 Juni 2016</td>
								<td class="action">
									<a href="">
										<i class="fa fa-check"></i>
									</a>
									<a href="?page=detailpendaftar">
										<i class="fa fa-list-alt"></i>
									</a>
									<a href=".delete" class="modal-trigger">
										<i class="fa fa-close"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>A11.2001</td>
								<td>Shodiq</td>
								<td>Terverifikasi</td>
								<td>29 Juni 2016</td>
								<td class="action">
									<a href="">
										<i class="fa fa-check"></i>
									</a>
									<a href="?page=detailpendaftar">
										<i class="fa fa-list-alt"></i>
									</a>
									<a href=".delete" class="modal-trigger">
										<i class="fa fa-close"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>A11.2001</td>
								<td>Shodiq</td>
								<td>Terverifikasi</td>
								<td>29 Juni 2016</td>
								<td class="action">
									<a href="">
										<i class="fa fa-check"></i>
									</a>
									<a href="?page=detailpendaftar">
										<i class="fa fa-list-alt"></i>
									</a>
									<a href=".delete" class="modal-trigger">
										<i class="fa fa-close"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col s12 m12 l12">
					<ul class="pagination">
					    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
					    <li class="active"><a href="#!">1</a></li>
					    <li class="waves-effect"><a href="#!">2</a></li>
					    <li class="waves-effect"><a href="#!">3</a></li>
					    <li class="waves-effect"><a href="#!">4</a></li>
					    <li class="waves-effect"><a href="#!">5</a></li>
					    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="modal delete">
		<div class="modal-content">
			<p>Apakah anda yakin?</p>
		</div>
		<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Disagree</a>
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		</div>
	</div>
</div>