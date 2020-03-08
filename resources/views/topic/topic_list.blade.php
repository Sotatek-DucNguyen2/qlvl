@extends('layout.index')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách hồ sơ đã ứng tuyển</h3>
      </div>
<form action="admin/topic/search" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="date" class="form-control" placeholder="Nhập công việc" name="created_at">
            <span class="input-group-btn">
              <input type="submit" class="btn btn-default" value="Tìm kiếm" >
            </span>
          </div>
        </div>
      </div>
</form>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách hồ sơ ứng tuyển</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">        
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên sinh viên</th>
                 <th>Tên công ty</th>
                  <th>Tên công việc</th>
                  <th>Ngày ứng tuyển</th>
                  <th>Tình Trạng</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($topic as $t)
                <tr>
                  <td>{{$t-> id}}</td>
                  <td>{{$t-> Student -> name_student}}</td>
                  <td>{{$t -> Company -> name_company}}</td>
                  <td>{{$t->  Job -> name_job}}</td>
                  <td>{{$t-> created_at}}</td>
                  @if(Auth::user()->role ==2)
                  <td>@if($t -> status==0)
                    {{'Chờ phản hồi từ công ty ứng tuyển'}}
                    @elseif($t -> status==1)
                    {{'Hồ sơ của bạn đã được nhận'}}
                    @else
                    {{'Hồ sơ của bạn đã bị loại'}}
                    @endif</td>
                  @else
                  <td>@if($t -> status==0)
                    {{'Đang Chờ Duyệt'}}
                    @elseif($t -> status==1)
                    {{'Đã nhận hồ sơ'}}
                    @else
                    {{'Đã loại hồ sơ'}}
                    @endif</td>
                    @endif
                  <td>
                     @if(Auth::user()->role ==0 ||Auth::user()->role ==1)
                    <a href="admin/filestudent/infoStudent{{$t -> id_student}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Chi tiết hồ sơ  </a>
                    @endif
                    <a href="admin/job/infoJob{{$t -> id_job}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Chi tiết công việc  </a>
                    @if(Auth::user()->role ==1)
                    <a href="admin/topic/edit/{{$t->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                    @endif
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
<!-- /page content -->
@endsection