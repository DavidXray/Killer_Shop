@extends('layouts.admin')


@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tabel <small>Produk</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Produk</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                               <a href="{{ route('product.create')}}" class="btn btn-primary mb-2">
                                + Produk
                               </a> 
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori Produk</th>
                                    <th>Harga</th>
                                    <th>Kuantitas</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>


                                <tbody>
                                 @foreach ($product as $item)
                                  <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name}}</td>
                                    <td>Rp{{ number_format($item->price) }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->description }}</td>
                                      <img src="{{ Storage::url($item->photo) }}"style="max-height: 50px; " alt="">
                                    </td>
                                  <td class="text-center"><form action="{{ route('product.destroy', $item->id) }}" 
                                    method="POST">
                                      @csrf 
                                      @method("DELETE")
                                        <input type="submit" style="display: none;">
                                        <a href="{{ route('product.edit', $item->id) }}"class="btn btn-primary btn-sm"> 
                                          <i class="fa fa-pencil"></i>
                                        </a>
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