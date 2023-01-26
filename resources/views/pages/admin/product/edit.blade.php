@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Edit Tambah Data<small>Product</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										@method('PUT')
                    					@csrf

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name Kategori <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="name" value="{{ $item->name }}" type="text" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kategori Product <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<select name="categories_id" class="form-control">
													<option value="{{ $item->categories_id }}">{{ $item->categories_id}}</option>
												@foreach ($categories as $category)
													<option value="{{ $category->id }}">{{ $category->name }}</option>
												@endforeach
											</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Harga Produk<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="price" value="{{ $item->price }}" type="number" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kuantitas <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="qty" value="{{ $item->qty }}" type="number" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="description" class="form-control">{{ $item->qty }}"
												</textarea>
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