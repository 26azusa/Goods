@extends('layouts.admin')
@section('title','商品の登録内容編集')

@section('contents')

<div class="content-wrapper">
  <div class="itemRegistar">
    <div class="md-col-8 mx-auto">
      <h2>商品の登録内容の編集</h2>
      <form action="{{ action('Admin\ItemController@update') }}" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="{{ $item_edit->id }}">
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
          <input type="text" class="form-control" name="name" value="{{ $item_edit->name }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品説明</label>
          <div class="md-col-10 registerContents">
          <input type="text" class="form-control" name="description" value="{{ $item_edit->description }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品写真</label>
        <div class="md-col-10 registerContents">
          <input type="file" name="image">
          <p>設定中：{{ $item_edit->image_path }}</p>
        </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品個数</label>
          <div class="md-col-10 registerContents">
          <input type="text" name="quantity" value="{{ $item_edit->quantity }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">商品価格</label>
          <div class="md-col-10 registerContents">
          <input type="number" name="price" value="{{ $item_edit->price }}">
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 registerLabel">カテゴリ</label>
          <div class="registerContents">
          <select name="category_id" maxlength="300">
            <option value="">選択してください</option>
            @foreach($categories as $category)
              @if($category->id == $item_edit->category_id)
                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
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
