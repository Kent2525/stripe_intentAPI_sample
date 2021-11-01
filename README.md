# Stripe Payment Intents API の公式デモページ構築
stripeは3種類のAPIが用意されている。  
1. Stripe checkout  
2. Charges API  
3. Payment Intentes API  
1.はリンク型APIでstripeの用意した支払いページにアクセスすることによって支払いをすることができる。  
2.3.は組み込みAPI型。公式は将来的には3.の開発に集中するというアナウンス有。  
今回は3.のPayment Intentes API。  

# 手順
以下の公式からファイル一式をダウンロードする。  
https://stripe.com/docs/payments/integration-builder  
create.phpがpublicディレクトリの外に置いてあるので、public内に移動する。  

ホームディレクトリから、以下のコマンドでサーバーを建てて、venderファイルがダウンロードされているのを確認する。
```
composer install
```
create.phpとclient.jsにそれぞれにstripeで発行したパブリックキーとシークレットキーを入れる。  

サーバーを動かす。
```
php -S 127.0.0.1:4242 -docroot=public
```
以下にアクセスするとデモページを表示することができる。
```
http://localhost:4242/public/checkout.html
```
トラブルシューティング  
・各種stripe keyを正確に入力しているか。  
・create.phpの場所をpublic内に移動してみる。  
・create.phpのautoload.phpのパスは正しいか。  
・php動かしてページを動かした時のコマンドログを確認する。  
