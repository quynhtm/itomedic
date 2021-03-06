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
                <li class="active">Quản lý thông tin </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="panel panel-info">
                        {{ Form::open(array('method' => 'GET', 'role'=>'form')) }}
                        <div class="panel-body">
                            <div class="form-group col-lg-3">
                                <label for="banner_name">Tiêu đề </label>
                                <input type="text" class="form-control input-sm" id="info_title" name="info_title"
                                       placeholder="Tiêu Đề"
                                       @if(isset($search['info_title']) && $search['info_title'] != '')value="{{$search['info_title']}}"@endif>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="category_status">Trạng thái</label>
                                <select name="info_status" id="info_status" class="form-control input-sm">
                                    {!! $optionStatus !!}
                                </select>
                            </div>
                            <div class="form-group col-lg-12 text-right">
                                @if($is_root || $permission_full ==1 || $permission_create == 1)
                                    <a class="btn btn-danger btn-sm"
                                       href="{{URL::route('admin.infoEdit',array('id' => FunctionLib::inputId(0)))}}">
                                        <i class="ace-icon fa fa-plus-circle"></i>
                                        {{FunctionLib::viewLanguage('add')}}
                                    </a>
                                @endif
                                <button class="btn btn-primary btn-sm" type="submit" name="submit" value="1"><i
                                            class="fa fa-search"></i> {{FunctionLib::viewLanguage('search')}}</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                    @if($data && sizeof($data) > 0)
                        <div class="span clearfix"> @if($total >0) Có tổng số <b>{{$total}}</b> item @endif </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thin-border-bottom">
                                <tr class="">
                                    <th width="2%" class="text-center">TT</th>
                                    <th width="40%">Tiêu Đề</th>
                                    <th width="20%" class="text-center">Từ khóa</th>
                                    <th width="10%" class="text-center">Thứ tự </th>
                                    <th width="10%" class="text-center">Ngày tạo </th>
                                    <th width="10%" class="text-center">Trạng Thái</th>
                                    <th width="8%" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $key => $item)

                                    <tr @if($item['parent_id'] == 0)style="background-color:#d6f6f6"@endif>
                                        <td class="text-center text-middle">{!! $stt + $key+1 !!}</td>
                                        <td>
                                            {!! isset($item['info_title'])?$item['info_title']:'' !!}
                                        </td>
                                        <td>
                                            {!! isset($item['info_keyword'])?$item['info_keyword']:'' !!}
                                        </td>
                                        <td class="text-center text-middle">
                                            {!! isset($item['info_order'])?$item['info_order']:'' !!}
                                        </td>
                                        <td class="text-center text-middle">
                                            {!! isset($item['info_created'])?date('d-m-Y',$item['info_created']):'' !!}
                                        </td>
                                        <td class="text-center text-middle">
                                            @if($item['info_status'] == \App\Library\AdminFunction\Define::STATUS_SHOW)
                                                <a href="javascript:void(0);" title="Hiện"><i
                                                            class="fa fa-check fa-2x"></i></a>
                                            @else
                                                <a href="javascript:void(0);" style="color: red" title="Ẩn"><i
                                                            class="fa fa-close fa-2x"></i></a>
                                            @endif
                                        </td>
                                        <td class="text-center text-middle">
                                            @if($is_root || $permission_full ==1|| $permission_edit ==1  )
                                                <a href="{{URL::route('admin.infoEdit',array('id' => FunctionLib::inputId($item['info_id'])))}}"
                                                   title="Sửa item"><i class="fa fa-edit fa-2x"></i></a>
                                            @endif
                                            @if($is_boss)
                                                <a href="javascript:void(0);"
                                                   onclick="Admin.deleteItem({{$item['info_id']}},19)" title="Xóa Item"><i
                                                            class="fa fa-trash fa-2x"></i></a>
                                            @endif
                                            <span class="img_loading" id="img_loading_{{$item['info_id']}}"></span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right">
                            {!! $paging !!}
                        </div>
                    @else
                        <div class="alert">
                            Không có dữ liệu
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop