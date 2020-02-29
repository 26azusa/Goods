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
          <input type="text" class="form-control" name="item_name" value="{{ old('item_name') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品説明</label>
          <div class="md-col-10 registerContents">
          <input type="text" class="form-control" name="item_description" value="{{ old('item_description') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品写真　大</label>
        <div class="md-col-10 registerContents">
          <input type="file" name="item_image_m">
        </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品写真　小</label>
        <div class="md-col-10 registerContents">
          <input type="file" name="item_image_s">
        </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品個数</label>
          <div class="md-col-10 registerContents">
          <input type="number" name="item_quantity" value="{{ old('item_quantity') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品価格</label>
          <div class="md-col-10 registerContents">
          <input type="number" name="item_price" value="{{ old('item_price') }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">カテゴリ</label>
          <div class="registerContents">
          <select name="category" maxlength="300">
            <option value="">選択してください</option>
            <option value="お菓子・食品">お菓子・食品</option>
            <option value="生活雑貨・インテリア">生活雑貨・インテリア</option>
            <option value="ぬいぐるみ・おもちゃ">ぬいぐるみ・おもちゃ</option>
            <option value="文具・ステーショナリー">文具・ステーショナリー</option>
            <option value="ファッション雑貨">ファッション雑貨</option>
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
