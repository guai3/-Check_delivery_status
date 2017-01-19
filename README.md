## 配達状況確認ツール

**日本の配送業者の送り状の配送状況をテーブルで一覧できるツールです｡**

![screenshot](screenshot.png "screenshot")

+ 送り状番号を手動で登録し､一覧画面を更新する度に､登録された送り状番号のステータスを更新します｡
+ 現在はヤマトのみ対応｡将来的にはWebで公表している企業はすべて対応する予定です｡

### 実装予定機能
+ httpエラー時のエラー処理

### 動作環境
+ 開発環境はMacOS sierra + VirtualBox + vagrant + CentOS 6.8

参考サイト [ドットインストール ローカル開発環境の構築 macOS編 (全14回)](http://dotinstall.com/lessons/basic_localdev_mac_v2)
+ PHP 5.6.29
+ Laravel Framework version 5.3.29

+ 動作確認はMacOS sierra +  google chrome で行いました｡

### API利用サイト
[宅配便の配達状況 API](http://thira.plavox.info/transport/api/)

[[WebAPI]ヤマト運輸の配送状況を確認するAPIを作ってみた](http://nanoappli.com/blog/archives/603)
