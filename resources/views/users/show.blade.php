@extends('layouts.app')

@section('title','用户中心')

@section('content')

<div class="row">

  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="card ">
      <div class="card-body">
            <h5><strong>个人简介</strong></h5>
            <div style="height: 20px;"></div>
            <hr>
            <h5><strong>闯关进度</strong></h5>
            <div style="height: 15px;"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="card ">
      <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;">姓名：<small>{{ $user->studentName }}</small>&nbsp;&nbsp;&nbsp;&nbsp;学号：<small>{{ $user->studentNumber }}</small>&nbsp;&nbsp;&nbsp;&nbsp;手机：<small>{{ $user->studentPhone }}</small>&nbsp;&nbsp;&nbsp;&nbsp;学院：<small>{{ $user->collage }}</small></h1>
      </div>
    </div>
    <hr>

    {{-- 用户发布的内容 --}}
    <div class="card ">
      <div class="card-body">
        暂无数据 ~_~
      </div>
    </div>

  </div>
  <div class="container" style="margin-top: 35px;margin-left:480px;">

      <button type="button" class="btn btn-outline-primary" style="width: 180px;height: 50px;">继续闯关</button>
        
  </div>
</div>


@stop