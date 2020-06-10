@extends('admin.app')

@section('content-header')
<!-- Content Header -->
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Thêm bài viết</h1>
            @if(session()->has('success'))
            <span>{{session()->get('success')}}</span>
            @endif
            @if(session()->has('error'))
            <span>{{session()->get('error')}}</span>
            @endif
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Text Editor</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection

@section('content')
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <h5>Tên bài viết</h5>
    <div class="row">
        {{-- <div class="card"> --}}
            <div class="col-lg-8">
                <div class="form-group">
                    <div class="name">
                        <div class="form-group" style="width: 100%">
                            <input class="form-control create-buff-live-id" type="text" placeholder="Đây là bài post">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Link bài viểt aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                            </div>
                            <div class="col-lg-1">
                                <button type="button" class="btn btn-primary delete-buff-submit" data-dismiss="modal">Sửa
                            {{-- <a class="" href="#" data-toggle="modal" data-target=""
                            data-id="">Sửa</a> --}}
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn btn-success delete-buff-submit" data-dismiss="modal">Xem
                            {{-- <a class="" href="#" data-toggle="modal" data-target=""
                            data-id="">Xem</a> --}}
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>

                <div class="content">
                    <h5>Nội dung</h5>
                    <div class="mb-3">
                        <textarea class="textarea" placeholder="Place some text here">
                        </textarea>
                    </div>
                </div>

                <div class="described">
                    <h5>Mô tả ngắn</h5>
                    <textarea></textarea>
                </div>

                <div class="file">
                    <h5>File đính kèm</h5>
                    <div class="custom-file" style="width: 30%">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>

                <div class="note">
                    <h5>Ghi chú</h5>
                    <textarea></textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ngày tháng</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label>Trạng thái</label>
                  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> Date range picker
                      <i class="fas fa-caret-down"></i>
                  </button>
              </div>
          </div>

          <!-- Date and time range -->
          <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-clock"></i></span>
              </div>
              <input type="text" class="form-control float-right" id="reservationtime">
          </div>
          <!-- /.input group -->
      </div>
      <!-- /.form group -->
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- iCheck -->
<div class="card card-danger">
  <div class="card-header">
    <h3 class="card-title">Danh mục</h3>
</div>
<select multiple class="form-control">
  <option>option 1</option>
  <option>option 2</option>
  <option>option 3</option>
  <option>option 4</option>
  <option>option 5</option>
</select>
</div>
<!-- /.card -->

<!-- Bootstrap Switch -->
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Từ khóa</h3>
</div>
<div class="card-body">
    <div class="form-group">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</div>
</div>
</div>

<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Ảnh</h3>
</div>
<div class="card-body">
    <div class="form-group">
        <a href="">Chọn ảnh</a>
    </div>
</div>
</div>
</div>
<!-- /.card -->
</div>
<!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->
@endsection