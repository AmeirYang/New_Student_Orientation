@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>登录</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="studentName">姓名：</label>
            <input type="text" name="studentName" class="form-control" value="{{ old('studentName') }}">
          </div>

          <div class="form-group">
            <label for="studentNumber">学号：</label>
            <input type="password" name="studentNumber" class="form-control" value="{{ old('studentNumber') }}">
          </div>

          <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>
    </div>
  </div>
</div>
@stop