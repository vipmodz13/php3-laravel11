@extends('admin.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <span class="bg-white"><h1 class="m-0">
                
            <i class="fa-solid fa-minus" style="    transform: rotate(90deg);   opacity: .8;}"></i>     DANH MỤC</h1></span>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 col-12">
        <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">

                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>

                    

                    THÊM DANH MỤC
                </h3>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>

                        </div>



              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-plus"></i><b>THÊM MỚI</b></button>
              </div>
              </form>

            </div>
        </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

@endsection