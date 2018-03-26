<div class="progdi">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="col s12 m6 l4 tombolmenu">
					<div class="col s3 list center">
						<a href="?page=progdi">
							<i class="fa fa-list"></i>
							<p>List</p>
						</a>
					</div>
					<div class="col s3 list center">
						<a href="?page=inputprogdi">
							<i class="fa fa-plus"></i>
							<p>Input</p>
						</a>
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
								<th data-field="noprog">Program Studi</th>
								<th data-field="deskripsi">Deskripsi</th>
								<th data-field="action">Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1</td>
								<td>Teknik Informatika</td>
								<td>Belajar tentang komputer</td>
								<td class="action">
									<a href="?page=detailpendaftar">
										<i class="fa fa-list-alt"></i>
									</a>
									<a href="?page=detailpendaftar">
										<i class="fa fa-edit"></i>
									</a>
									<a href=".delete" class="modal-trigger">
										<i class="fa fa-close"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Teknik Informatika</td>
								<td>Belajar tentang komputer</td>
								<td class="action">
									<a href="?page=detailpendaftar">
										<i class="fa fa-list-alt"></i>
									</a>
									<a href="?page=detailpendaftar">
										<i class="fa fa-edit"></i>
									</a>
									<a href=".delete" class="modal-trigger">
										<i class="fa fa-close"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Teknik Informatika</td>
								<td>Belajar tentang komputer</td>
								<td class="action">
									<a href="?page=detailpendaftar">
										<i class="fa fa-list-alt"></i>
									</a>
									<a href="?page=detailpendaftar">
										<i class="fa fa-edit"></i>
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