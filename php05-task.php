1、PHPフレームワークのなかでもLaravelの特徴を調べてみてください。

Laravel：
フルスタックなPHPフレームワーク。MITライセンスの下でリリースされており、そのソースコードはGitHubにホスティングされている。２０１０年これまでのPHPフレームワークの良い所取りのフレームワーク。近年の人気は右肩上がりで、これまで最も人気のあったCakePHPを抜いている。

メリット
・強力なルーティングフィルター
・柔軟なオートローダー
・簡単なページネーション
・ビューをサポートするコンポ―サー
・強力な自動生成機能
・情報、ライブラリが豊富
・CakePHPと比べ規約が少なく、自由に記述できる

デメリット
・処理速度がCakePHPやCodeigniterに比べ遅い
日本語コミュニティはあるが、比較的日本語ドキュメントが少ない

2、1.で調べた結果、なんのことを言っているのかわからない場合はそれについて調べてみてください。

ルーティングフィルター
ネットワーク上でデータを送信・転送する際に宛先のアドレスの情報を元に最適な転送経路を割り出す事

オートローダ―
ファイルを自動的に読み込む仕組みの事
composerを使用してライブラリをインストールするとvendor/autolod.phpというファイルが生成される。このファイルを一度だけrequireする事でvendor配下のライブラリをすべて自動的にロードしてくれる。composer.jsonでオートロードするファイルを追加することもでき、PHPファイルの冒頭に多数のrequireを書く必要がなくなる。

ページネーション
長くなった文章を複数のページに分割して情報を読み取りやすくするナビゲーションの事を示す。読み込み速度にも影響する。

ビューをサポートするコンポ―サー
composerを使用する事でviewを本体のviewから独立した要素として扱うことができる。例えば、全ページ共通部分のレイアウトを示したviewに対してcomposerを使用する事で、全ページ共通のデータ取得処理が出来る。

composer
依存性管理ツール、必要なライブラリと同時に必要なライブラリ群を参照して一括してダウンロードしてくれる。

vendor
composerによってインストールしたライブラリ群の保管場所

３、2.で調べてもわからなかったものについては、オンラインサポート等でメンターに質問してみてください。

各メリットが他のフレームワークと比べどの程度優れているか？

