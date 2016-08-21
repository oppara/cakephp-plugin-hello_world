# Sample for CakePHP Plugin

HelloWorldというプラグインを作成し
- http://example.com/hello/ にアクセスすると Hello World ! と表示する
- http://example.com/hello/oppara にアクセスすると Hello OPPARA ! と表示する
- ルーティングはプラグインで持つ
- デフォルトのビューはプラグインが持ち、App側でオーバーライドする

## reference

- [プラグインの作成](http://book.cakephp.org/2.0/ja/plugins/how-to-create-plugins.html)
- [Composer で CakePHP をインストール](http://book.cakephp.org/2.0/ja/installation/advanced-installation.html#composer-cakephp)

### CakePHPのインストール

```
% composer install
```

### Appプロジェクトを作成

```
% Vendor/bin/cake bake project App
```

作成後、以下のファイルを修正
- App/Config/bootstrap.php
- App/webroot/index.php
- App/webroot/test.php

### HelloWorldプラグインを作成

```
% Vendor/bin/cake bake plugin HelloWorld -app App
```

### サーバ起動

```
% Vendor/bin/cake server -p 4566 -d App/webroot
```


