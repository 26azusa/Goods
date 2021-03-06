@extends('layouts.front')
@section('title','GOODS 商品リスト')

@section('contents')

<div class="content-wrapper mainContents">
  <div class="leftContents">
    <section class="itemSearch">
      <form action="{{ action('ItemController@list') }}" method="get">
        <div class="inputKeyWord">
          <h5>検索</h5>
          <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
          </div>
        <div class="selectCategories">
          <h5>カテゴリ</h5>

        @foreach($categories as $category)
        <div class="selectCategory">
        <input type="radio" class="form-select" name="category_id" value="{{ $category->id }}"
        <?php if($category_id == $category->id) {echo 'checked';} ?> > {{ $category->name }}
        </div>
        @endforeach
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn_search" value="検索">
      </form>

    </section>

  </div>

  <div class="rightContents">
    <section class="itemList">
      <h1 class="logo">PRODUCT</h3>

      <div class="items js-trigger">
        @foreach($posts as $post)
        <div class="item">
          <a href="{{  action('ItemController@detail',['id' => $post->id])  }}"><img class="fade-elem-list" src="{{ $post->image_path }}"></a>
          <p>{{ $post->name }}</p>
        </div>
        @endforeach
      </div>
    </section>
  </div>


</div>

@endsection
