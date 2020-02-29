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
    <section class="itemList">
      <h3>ミッキーチョコレート</h3>

    </section>
  </div>


</div>

@endsection
