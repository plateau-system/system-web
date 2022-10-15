# system-web(PLATEAU SYSTEM)
管理者用webシステム＆Unity用API  
  
## 概要  
1)このプロジェクトは[「PLATEAUを用いた定点観測システム及び人流シミュレータ」](https://github.com/plateau-system)のWeb管理システム部分である。  
主に定点カメラの登録・削除・起動・停止と、観測した人・車・自転車・バイク等のデータをグラフ化している。また基本的なパラメータ調整や機能の拡張等もこちらのシステムで行う。  
2)このプロジェクトは管理用Webシステムだけではなく[UnityとPLATEAUで開発した3D可視化ツール](https://github.com/plateau-system/system-unity)で使用するAPIも設置されている。  
※デプロイ時はHeroku用のリポジトリ(private)から行うためこちらのプロジェクトはローカル環境でのみ動作するものである。プロジェクトのルートディレクトリは[こちら](https://github.com/plateau-system/system-web)。
  
## 使用技術  
言語：PHP,JavaScript  
フレームワーク:Laravel8(Laravel UI, Bootstrap5)  
データベース：MySQL(ClearDB)  
その他:Node.js(v16.17), Chart.js, Docker, Heroku  
  
## 関連プロジェクト  
・[system-unity](https://github.com/plateau-system/system-unity)：UnityとPLATEAUで開発した3D可視化ツール、3D型GIS  
・[yolov5-fastapi](https://github.com/plateau-system/yolov5-fastapi):YOLOv5・FastAPIを用いて検出結果を返すAPI。１時間ごとに更新を行う。  
・[design](https://github.com/plateau-system/design)：設計資料・画面イメージ等  

## ライブラリ・フレームワーク等
・[YOLOv5](https://github.com/ultralytics/yolov5)  
・[Laravel](https://laravel.com/)  
・[Chart.js](https://www.chartjs.org/docs/latest/)  
・[Heroku](https://jp.heroku.com/)  
