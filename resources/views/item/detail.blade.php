@extends('layouts.front')
@section('title','GOODS 商品詳細')

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
            <input type="radio" class="form-select" name="category_id" value="{{ $category->id }}"> {{ $category->name }}
          @endforeach
        </div>
          {{ csrf_field() }}
          <input type="submit" class="btn_search" value="検索">
      </form>
    </section>
  </div>

  <div class="rightContents">
    <section class="itemDetail">
      <div class="itemTitle">
        <h3>{{ $item_form->name }}</h3>
        <h3 class="favorite_rate">みんなの評価：</h3>
          @if($favorite_average >= 4.8 && $favorite_average <=5)
              <span class="star-rating rate5"></span>
          @elseif($favorite_average >= 4.3 && $favorite_average <=4.7)
              <span class="star-rating rate4-5"></span>
          @elseif($favorite_average >= 3.8 && $favorite_average <=4.2)
              <span class="star-rating rate4"></span>
          @elseif($favorite_average >= 3.3 && $favorite_average <=3.7)
              <span class="star-rating rate3-5"></span>
          @elseif($favorite_average >= 2.8 && $favorite_average <=3.2)
              <span class="star-rating rate3"></span>
          @elseif($favorite_average >= 2.3 && $favorite_average <=2.7)
              <span class="star-rating rate2-5"></span>
          @elseif($favorite_average >= 1.8 && $favorite_average <=2.2)
              <span class="star-rating rate2"></span>
          @elseif($favorite_average >= 1.3 && $favorite_average <=1.7)
              <span class="star-rating rate1-5"></span>
          @elseif($favorite_average >= 1 && $favorite_average <=1.2)
              <span class="star-rating rate1"></span>
          @else
              <span class="star-rating rate0"></span>
          @endif
      </div>
        <p>{{ $item_form->description }}</p>

      <div class="itemDescription">
        <img class=" sa sa--scaleUp" src="{{ $item_form->image_path }}">
        <h5>{{ $item_form->quantity }}入り　{{ $item_form->price }}円</h5>
      </div>

      <div class="itemReview">
        <div class="reviewPost">
          <a href="{{  action('ReviewController@add')  }}" >>> 口コミを投稿する</a>
        </div>

        <div class="reviews">
          @foreach($reviews as $review)
          <div class="review">
            <p class="reviewName">{{ $review->user->name }}</p>
            <p class="reviewName_san">さん</p>
            <p class="reviewFavorite_rate">評価：</p>
            <div class="reviewFavorite">
            @switch($review->favorite)
              @case(5)
                <span class="r-star-rating r-rate5"></span>
                @break
              @case(4)
                <span class="r-star-rating r-rate4"></span>
                @break
              @case(3)
                <span class="r-star-rating r-rate3"></span>
                @break
              @case(2)
                <span class="r-star-rating r-rate2"></span>
                @break
              @case(1)
                <span class="r-star-rating r-rate1"></span>
                @break
              @case(0)
                <span class="r-star-rating r-rate0"></span>
                @break
            @endswitch
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
