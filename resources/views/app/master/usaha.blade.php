@extends('app.layout.main')

@section('title')
	Master | Jenis Usaha
@endsection



@section('konten')

<!-- START PAGE-CONTAINER -->
<div class="page-container">

	<!-- START PAGE CONTENT WRAPPER -->
	<div class="page-content-wrapper">
		
		<!-- START PAGE CONTENT -->
		<div class="content sm-gutter">
			
			<div class="jumbotron bg-darkblue" data-pages="parallax">
				<div class="container-fluid container-fixed-lg">
					<div class="inner" style="transform: translateY(0px); opacity: 1;">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb">
							<li>
								<a href="#">Master</a>
							</li>
							<li>
								<a href="#" class="active">Jenis Usaha Budidaya</a>
							</li>
						</ul>
					</div>
				</div>
			</div>


			<!-- START CONTAINER FLUID -->
			<div class="container-fluid padding-25 sm-padding-10">

				
				<!-- START ROW -->
				<div class="row">
					<div class="col-md-6">
						<!-- START PANEL -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
									Master
								</div>
							</div>
							<div class="panel-body">
								<h5>Jenis Usaha Budidaya</h5>
								<p>* Jenis Usaha Budidaya digunakan pada halaman pembudidaya dan nelayan.</p>
								<form class="style-form" method="GET" action="{{ route('usaha_tambah') }}">
                				<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group form-group-default required">
										<label>Jenis Usaha Budidaya</label>
										<select class="full-width" data-init-plugin="select2" name="id_usaha">
											<option value="1">Budidaya Air Laut</option>
											<option value="2">Budidaya Air Tawar</option>
											<option value="3">Budidaya Air Payau</option>
										</select>
									</div>
									<div class="form-group form-group-default required">
										<label>Nama Usaha</label>
										<input type="text" name="nama" class="form-control" required>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-cons">Tambah</button>
									</div>
								</form>
							</div>
						</div>
						<!-- END PANEL -->
					</div>

					<div class="col-md-6">
						<!-- START PANEL -->
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-hover" id="basicTable">
										<thead>
											<tr>
												<th width="70">
													<button class="btn btn-check" data-toggle="modal" data-target="#modal-hapus" disabled><i class="pg-trash"></i></button>
												</th>
												<th>Jenis Usaha Budidaya</th>
												<th>Nama Usaha</th>
											</tr>
										</thead>
										<tbody>
											@foreach($usaha as $us)
											<tr>
												<td>
													<div class="checkbox">
														<input type="checkbox" value="1" id="checkbox1">
														<label for="checkbox1" class="m-l-20"></label>
													</div>
												</td>
												<td>{{ $us->usaha->nama }}</td>
												<td>{{ $us->nama }}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END PANEL -->
					</div>
				</div>
			</div>
			<!-- END CONTAINER FLUID -->
		</div>
		<!-- END PAGE CONTENT -->
		<!-- START COPYRIGHT -->
		<!-- START CONTAINER FLUID -->


		<div class="container-fluid container-fixed-lg footer">
			<div class="copyright sm-text-center">
				<p class="small no-margin pull-left sm-pull-reset">
					<span class="hint-text">Copyright © 2015 </span>
					<span class="font-montserrat">Media SAKTI</span>.
					<span class="hint-text">All rights reserved. </span>
					<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
				</p>
				<p class="small no-margin pull-right sm-pull-reset">
					<a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
				</p>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- END COPYRIGHT -->
	</div>
	<!-- END PAGE CONTENT WRAPPER -->

</div>
<!-- END PAGE CONTAINER -->


<!-- MODAL STICK UP SMALL ALERT -->
<div class="modal fade stick-up" id="modal-hapus" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content-wrapper">
			<div class="modal-content">
				<div class="modal-header clearfix text-left">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i></button>
					<h5>Hapus Data</h5>
				</div>
				<div class="modal-body">
					<p class="no-margin">Data akan dihapus. Apakah Anda yakin?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-cons pull-left inline" data-dismiss="modal">Ya</button>
					<button type="button" class="btn btn-default btn-cons no-margin pull-left inline" data-dismiss="modal">Tidak</button>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- END MODAL STICK UP SMALL ALERT -->

@endsection


@section('registerscript')
	<script>
		$(".menu-items .link-master").addClass("active open");
		$(".menu-items .link-master .sub-jenis").addClass("active");
	</script>
@endsection