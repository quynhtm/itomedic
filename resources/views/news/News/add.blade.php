<?php use App\Library\AdminFunction\FunctionLib; ?>
<?php use App\Library\AdminFunction\Define; ?>
@extends('admin.AdminLayouts.index')
@section('content')
<div class="main-content-inner">
    <div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{URL::route('admin.dashboard')}}">Home</a>
            </li>
            <li><a href="{{URL::route('admin.newsView')}}"> Danh sách Tin tức</a></li>
            <li class="active">@if($id > 0)Cập nhật tin tức @else Tạo mới tin tức@endif</li>
        </ul><!-- /.breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                {{Form::open(array('method' => 'POST','role'=>'form','files' => true))}}
                @if(isset($error))
                    <div class="alert alert-danger" role="alert">
                        @foreach($error as $itmError)
                            <p>{{ $itmError }}</p>
                        @endforeach
                    </div>
                @endif
                <div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name" class="control-label">Tiêu đề tin<span class="red"> (*) </span></label>
                            <input type="text" placeholder="Tên bài viết" id="news_title" name="news_title"  class="form-control input-sm" value="@if(isset($data['news_title'])){{$data['news_title']}}@endif">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name" class="control-label">Thuộc danh mục</label>
                            <select name="news_category" id="news_category" class="form-control input-sm">
                                <option value="0">--- Chọn danh mục ---</option>
                                {!! $optionStatus !!}}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name" class="control-label">Loại tin</label>
                            <select name="news_type" id="news_type" class="form-control input-sm">
                                <option value="0">--- Chọn loại tin ---</option>
                                {!! $optionStatus !!}}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name" class="control-label">Trạng thái</label>
                            <select name="news_status" id="news_status" class="form-control input-sm">
                                <option value="0">--- Chọn trạng thái---</option>
                                {!! $optionStatus !!}}
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name" class="control-label">Mô tả ngắn</label>
                            <textarea class="form-control input-sm"  name="news_content">@if(isset($data['news_content'])){{$data['news_content']}}@endif</textarea>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name" class="control-label">Icons menu</label>
                            <input type="text" placeholder="Icons menu" id="menu_icons" name="menu_icons"  class="form-control input-sm" value="@if(isset($data['menu_icons'])){{$data['menu_icons']}}@endif">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name" class="control-label">Thứ tự hiển thị</label>
                            <input type="text" placeholder="Thứ tự hiển thị" id="ordering" name="ordering"  class="form-control input-sm" value="@if(isset($data['ordering'])){{$data['ordering']}}@endif">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name" class="control-label">Trạng thái</label>
                            <select name="active" id="active" class="form-control input-sm">
                                {!! $optionStatus !!}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name" class="control-label">Menu</label>
                            <select name="show_menu" id="show_menu" class="form-control input-sm">
                                {!! $optionShowMenu !!}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name" class="control-label">Phân quyền</label>
                            <select name="show_permission" id="show_permission" class="form-control input-sm">
                                {!! $optionShowPermission !!}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name" class="control-label">Nội dung</label>
                            <select name="showcontent" id="showcontent" class="form-control input-sm">
                                {!! $optionShowContent !!}
                            </select>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="form-group col-sm-12 text-left">
                        <a class="btn btn-warning" href="{{URL::route('admin.newsView')}}"><i class="fa fa-reply"></i> {{FunctionLib::viewLanguage('back')}}</a>
                        <button  class="btn btn-primary"><i class="fa fa-floppy-o"></i> {{FunctionLib::viewLanguage('save')}}</button>
                    </div>
                    <input type="hidden" id="id_hiden" name="id_hiden" value="{{$id}}"/>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div><!-- /.page-content -->
</div>
@stop
