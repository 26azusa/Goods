@extends('layouts.admin')
@section('title','商品登録ページ')

@section('contents')

<div class="content-wrapper">
  <div class="itemRegistar">
    <div class="md-col-8 mx-auto">
      <h2>新規グッズの登録</h2>
      <form action="{{ action('Admin\ItemController@create') }}" method="POST" enctype="multipart/form-data">

      @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
          @endforeach
        </ul>
      @endif

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品名</label>
          <div class="md-col-10 registerContents">
          <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品説明</label>
          <div class="md-col-10 registerContents">
          <input type="text" class="form-control" name="description" value="{{ old('description') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品写真</label>
        <div class="md-col-10 registerContents">
          <input type="file" name="image">
        </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品個数</label>
          <div class="md-col-10 registerContents">
          <input type="text" name="quantity" value="{{ old('quantity') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品価格</label>
          <div class="md-col-10 registerContents">
          <input type="number" name="price" value="{{ old('price') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">カテゴリ</label>
          <div class="registerContents">
          <select name="category_id" maxlength="300">
            <option value="">選択してください</option>
            @foreach($posts as $post)
            <option value="{{ $post->id }}">{{ $post->name }}</option>
            @endforeach
          </select>
          </div>
      </div>

        {{ csrf_field() }}
        <div class="form-group">
        <input type="submit" class="btn_submit" value="更新">
        </div>


      </form>
    </div>
  </div>
</div>

@endsection
