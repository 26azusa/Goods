@extends('layouts.front')
@section('title','ディズニーリゾート グッズ口コミサイト GOODS')

@section('contents')
<section class ="mainvisual">
  <div class="content-wrapper js-trigger">
      <h4 class="top_message fade-elem-top">ディズニーお土産口コミサイト</h4>
      <h1 class="top_logo fade-elem-top">GOODS</h1>
      <div class="top_button">
        <ul class="fade-elem-top">
          <li class="left-button"><a href="{{  action('ItemController@list')  }}">口コミを見る</a></li>
          <li class="right-button"><a href="{{  action('ReviewController@add')  }}">口コミを投稿する</a></li>
        </ul>
      </div>
  </div>
</section>

<section class ="greeting">
  <div class="content-wrapper">
  <div class="introduction js-trigger">
    <h1 class="logo">INTRODUCE</h1>
    <div class="introduce fade-elem">
      <div class="introImage">
        <figure><img src="{{ asset('img/concept_img3.jpg') }}"></figure>
      </div>
      <div class="introComment">
        <h3>お土産選びを快適にしてみませんか。</h3>
        <p>せっかくディズニーランドで遊ぶなら…<br>
          できることなら最初から最後までめいいっぱい楽しみたい！<br>
          会社へのお土産どれを買えばいいかわからない！<br>
          子連れだからお土産はさくっと選びたい！<br>
          そんな思いをかなえる口コミサイトができました。
        </p>
      </div>
    </div>
  </div>

  <div class="concepts js-trigger">
   <h1 class="logo">CONCEPT</h1>
    <ul>
      <li class="left fade-elem">
      <figure><img src="{{ asset('img/greeting_img1.jpg') }}"></figure>
      <div class="concept">
        <h5>購入前に事前にチェック</h5>
        <p>混雑する店内でのお土産選びは大変！<br>
          本サイトではオンラインでグッズ情報を見れるので<br>
          アトラクションやパレードの待ち時間など<br>
          いつでもお土産の情報をチェックできます！
        </p>
      </div>
      </li>
      <li class="center fade-elem" data-sa_delay="300">
      <figure><img src="{{ asset('img/greeting_img2.jpg') }}"></figure>
      <div class="concept center">
        <h5>みんなの口コミがグッズを評価</h5>
        <p>お菓子などのフード商品は<br>
          どれが美味しいのか迷うことはありませんか？<br>
          みんなの口コミで評価を見れるので<br>
          美味しくて間違いないお土産を購入できます！
        </p>
      </div>
      </li>
      <li class="right fade-elem" data-sa_delay="600">
      <figure><img src="{{ asset('img/greeting_img3.jpg') }}"></figure>
      <div class="concept">
        <h5>あなたのレビューが誰かの参考に</h5>
        <p>もちろんあなたの気に入ったグッズを<br>
          みんなにオススメすることもできますよ。<br>
          みんなとグッズの感想を共有しましょう！<br>
        </p>
      </div>
      </li>
    </ul>
  </div>
</section>

<section class="news">
  <div class="content-wrapper">
  <h1 class="logo">NEWS</h1>
    <ul class="js-trigger">
      <li class="fade-elem-news"><time>2020-03-08</time>2020年冬の期間限定商品「ミニー カチューシャ」を商品リストに追加しました。</li>
      <li class="fade-elem-news"><time>2020-02-20</time>定番商品「パスタスナック」「ボールペンセット」「ミッキー カチューシャ」を商品リストに追加しました。</li>
      <li class="fade-elem-news"><time>2020-02-05</time>本サイトの制作が開始されました。</li>
    </ul>
  </div>
</section>
@endsection
