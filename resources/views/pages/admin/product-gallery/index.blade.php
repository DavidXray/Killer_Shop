@extends('layouts.admin')


@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tabel <small>Produk Galeri</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Produk Galeri</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                               <a href="{{ route('product-gallery.create')}}" class="btn btn-primary mb-2">
                                + Produk Galeri
                               </a> 
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>


                              <tbody>
                              @foreach ($productGalleries as $item)
                                  <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->product->name }}</td>   
                                    <td>
                                    <img src="{{ Storage::url($item->photo) }}" style="max-height: 50px; "alt="">
                                    </td>
                                  <td class="text-center">
                                    <form action="{{ route('product-gallery.destroy', $item->id) }}" 
                                    method="POST">
                                      @csrf 
                                      @method ("DELETE")
                                        <input type="submit" style="display: none;">
                                        <button type="submit" class="btn btn-danger btn-sm"> 
                                          <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection