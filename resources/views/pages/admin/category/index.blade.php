@extends('layouts.admin')


@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tabel <small>Kategori</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kategori</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                               <a href="{{ route('category.create')}}" class="btn btn-primary mb-2">
                                + Kategori
                               </a> 
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>


                              <tbody>
                              @foreach ($categories as $item)
                                  <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>  
                                    <td>
                                    <img src="{{ Storage::url($item->photo) }}" style="max-height: 50px; "alt="">
                                    </td>
                                  <td class="text-center">
                                    <form action="{{ route('category.destroy', $item->id) }}" 
                                    method="POST">
                                      @csrf 
                                      @method ("DELETE")
                                        <input type="submit" style="display: none;">
                                        <a href="{{ route('category.edit', $item->id) }}"class="btn btn-primary btn-sm"> 
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