@extends('layouts/app')

@section('content')


<div class="container">

<form method="POST" action="/home/news/store">
    @csrf
    <div class="form-group">
      <label for="img1">圖片連結</label>
      <input type="text" class="form-control" id="img" aria-describedby="emailHelp" placeholder="Enter email" name="img">

    </div>
    <div class="form-group">
      <label for="title">標題</label>
      <input type="text" class="form-control" id="title" placeholder="title" name="title">
    </div>

    <div class="form-group">
        <label for="content">內文</label>
        <input type="text" class="form-control" id="content" placeholder="content" name="content">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection

