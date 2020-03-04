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
      <div class="selectCategories">
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
    <div class="itemTitle">
      <h3>{{ $item_form->name }}</h3>
      <h3 class="favorite_before">みんなの評価：</h3>
      <h3 class="favorite">★★★★★</h3>
      </div>
      <p>{{ $item_form->description }}</p>

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
            <p class="reviewName">{{ $review->user->name }}</p>
            <p class="reviewName_after">さん</p>
            <p class="reviewFavorite_before">評価：</p>
            <div class="reviewFavorite">
            @if($review->favorite == 5)
              <p>★★★★★</p>
            @elseif($review->favorite == 4)
              <p>★★★★☆</p>
            @elseif($review->favorite == 3)
              <p>★★★☆☆</p>
            @elseif($review->favorite == 2)
              <p>★★☆☆☆</p>
            @elseif($review->favorite == 1)
              <p>★☆☆☆☆</p>
            @endif
            </div>
            <p>{{ $review->body }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>


</div>

@endsection
