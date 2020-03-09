@extends('layouts.admin')
@section('title','商品管理ページ')

@section('contents')
<div class="adminItemIndex">
            <div class="list-item col-md-12 mx-auto">
                <div class="row">
                <h3>現在登録している商品</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="20%">商品名</th>
                                <th width="30%">商品説明</th>
                                <th width="10%">個数</th>
                                <th width="10%">価格</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <th>{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ str_limit($item->description,50) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <div>
                                            <a href="{{  action('Admin\ItemController@edit',['id' => $item->id])  }}">編集</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
