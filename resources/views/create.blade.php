@extends('layouts.front')
@section('title','GOODS 口コミ投稿')

@section('contents')

<div class="content-wrapper mainContents">
  <div class="leftContents">
    <section class="itemSearch">
      <div class="inputKeyWord">
        <h5>検索</h5>
        <input type="text" class="form-control" name="cond_name">
      </div>
      <div class="selectCategory">
        <h5>カテゴリ</h5>
        <input type="radio" class="form-select" name="cond_category"> お菓子<br>
        <input type="radio" class="form-select" name="cond_category"> おもちゃ<br>
        <input type="radio" class="form-select" name="cond_category"> 文房具<br>
        <input type="radio" class="form-select" name="cond_category"> 日用品<br>
        <input type="radio" class="form-select" name="cond_category"> キーホルダー<br>
        <input type="submit" class="btn_search" value="検索">
      </div>
    </section>

  </div>

  <div class="rightContents">
    <section class="itemReviews">
      <h3>　口コミを投稿する</h3>

      <form action="{{ action('GoodsController@create') }}" method="post" enctype="multipart/form-data">

      @if(count($errors) > 0 )
        <ul>
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
        </ul>
      @endif

      <div class="form-group">
        <label class="md-col-2 createLabel">商品名</label>
          <div class="createContents">
          <select name="item_id">
            <option value="">選択してください</option>
            @foreach($posts as $post);
            <option value="{{ $post->id }}">{{ $post->name }}</option>
            @endforeach
          </select>
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 createLabel">口コミ内容</label>
          <div class="md-col-10 createContents">
          <textarea class="form-control" name="body"  maxlength="300">{{ old('body') }}</textarea>
          </div>
      </div>

      <div class="form-group">
        <label class="md-col-2 createLabel">お気に入り度</label>
          <div class="createContents">
          <select name="favorite">
            <option value="">選択してください</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          </div>
      </div>

      {{ csrf_field() }}
        <div class="form-group">
        <input type="submit" class="btn_submit" value="投稿する">
        </div>
        </form>
    </section>
  </div>


</div>

@endsection
