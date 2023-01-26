@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Tambah Data<small>Product</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    				@csrf

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name Product <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="name" type="text" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kategori Product <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="categories_id" class="form-control">
												@foreach ($category as $item)
													<option value="{{ $item->id }}">{{ $item->name }}</option>
												@endforeach
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Harga <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="price" type="number" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuantitas <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="qty" type="number" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="description" class="form-control"></textarea>
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