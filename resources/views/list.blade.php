@extends('layouts.front')
@section('title','GOODS 商品リスト')

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
        <input type="submit" class="btn_search" value="検索">

      </div>
    </section>

  </div>

  <div class="rightContents">
    <section class="itemList">
      <h3>商品リスト</h3>

      <div class="items">
        @foreach($posts as $post)
        <div class="item">
          <a href ="{{  action('DetailController@index')  }}"><img src="{{ asset('storage/img/' . $post->path_s) }}"></a>
          <p>{{ $post->item_name }}</p>
        </div>
        @endforeach
      </div>
    </section>
  </div>


</div>

@endsection