@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Tambah Data<small>Kategori</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    				@csrf

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name Kategori <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="name" type="text" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Photo<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="photo" type="file" id="last-name" name="last-name" required="required" class="form-control">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
@endsection