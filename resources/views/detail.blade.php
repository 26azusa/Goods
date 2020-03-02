@extends('layouts.front')
@section('title','GOODS 商品詳細')

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
    <section class="itemDetail">
      <h3>{{ $item_form->name }}</h3>
      <div class="itemDescription">
      <img src="{{ asset('storage/img/' . $item_form->image_path) }}">
      <h5>{{ $item_form->quantity }}入り　{{ $item_form->price }}円</h5>
      </div>

      <div class="itemReview">
        <div class="reviewPost">
        <a href="{{  action('GoodsController@add')  }}" >>> 口コミを投稿する</a>
        </div>
        <div class="reviews">
          @foreach($reviews as $review)
          <div class="review">
            <p>{{ $review->user->name }}</p>
            <p>{{ $review->body }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>


</div>

@endsection
