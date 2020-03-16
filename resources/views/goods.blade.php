@extends('layouts.front')
@section('title','ディズニーリゾート グッズ口コミサイト GOODS')

@section('contents')
<section class ="mainvisual">
  <div class="content-wrapper">
    <!-- <img class="top_image" src="{{ asset('img/top_img.jpg') }}" alt="ディズニーランド"> -->
      <h4 class="top_message sa sa--up" >ディズニーお土産口コミサイト</h4>
      <h1 class="top_logo sa sa--up" data-sa_delay="300">GOODS</h1>
      <div class="top_button">
        <ul class="sa sa--up" data-sa_delay="600">
          <li class="left-button"><a href="{{  action('ItemController@list')  }}">口コミを見る</a></li>
          <li class="right-button"><a href="{{  action('ReviewController@add')  }}">口コミを投稿する</a></li>
        </ul>
      </div>
  </div>
</section>

<section class ="greeting">
  <div class="content-wrapper">
    <h3 class="comment">お土産選びを快適にしてみませんか。</h3>
    <ul>
      <li class="sa sa--scaleUp">
      <figure><img src="{{ asset('img/greeting_img1.jpg') }}"></figure>
      <h4>購入前に事前にチェック</h4>
      <p>混雑する店内でのお土産選びは大変！<br>
         本サイトではオンラインでグッズをチェックできるので<br>
         アトラクションやパレードの待ち時間など<br>
         いつでもどこでも、お土産の情報をチェックできます！</p>
      </li>
      <li class="sa sa--scaleUp" data-sa_delay="300">
      <figure><img src="{{ asset('img/greeting_img2.jpg') }}"></figure>
      <h4>みんなの口コミがグッズを評価</h4>
      <p>お菓子などのフード商品は<br>
         どれが美味しいのか迷うことはありませんか？<br>
         みんなの口コミで評価を見れるので<br>
         美味しくて間違いないお土産を購入できます！
         </p>
      </li>
      <li class="sa sa--scaleUp" data-sa_delay="600">
      <figure class="sa sa--scaleUp"><img src="{{ asset('img/greeting_img3.jpg') }}"></figure>
      <h4>あなたのレビューが誰かの参考に</h4>
      <p>もちろんあなたの気に入ったグッズを<br>
         みんなにオススメすることもできますよ。<br>
         みんなとグッズの感想を共有しましょう！<br>
         </p>
      </li>
    </ul>

  </div>
</section>
@endsection
