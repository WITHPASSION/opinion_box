# opinion_box
目安箱

### 必要知識

* HTML
* CSS
* PHP(codeigniter)
* Git

---

### 事前準備
*  Githabのアカウント作成
* 管理者にGithabに登録したメールアドレスを通達し、招待を受ける
* [Git](http://git-scm.com/) ダウンロード/インストール

---
### 環境構築手順

* 共有リポジトリから自分のリポジトリを[Fork](https://github.com/WITHPASSION/opinion_box.git)する

* ローカル環境にクローンする

```
$ git clone git@gitlab.com:<ユーザ名>/inn_reservations.git
$ git remote add blessed git@gitlab.com:t_mimura/inn_reservations.git
$ git remote update
$ git config --global user.name "自分の名前"
$ git config --global user.email "Gitlabに設定したメールアドレス"
```
### Vagrantを使用した環境構築
- 手順

    + [Vagrant](https://www.vagrantup.com/downloads.html)をインストールする
    + [Virtualbox](https://www.virtualbox.org/)をインストールする

```
$ cd <cloneした中(Vagrantfileがあるとこ)>
$ vagrant up　//初期起動時はボックスイメージをダウンロードするため時間かかる
$ vagrant status //仮想環境状態確認
$ vagrant ssh //仮想環境にログイン
```
- Chromeなどで192.168.33.33にアクセス→画面が表示されればOK

### よく使うgitコマンド
- status
- diff
- add
- rm
- commit
- log
- stash
- push
- pull
- branch
- checkout
- merge
- rebase
- cherry-pick
- fetch
- grep
- reset
- *etc...*

### 基本的な流れ
* ファイルを更新/作成する

```
git diff 更新されたファイルの差分を表示する
git status 作成/更新されたファイル一覧を確認
git add <プロジェクトのフォルダ名> ステージングにあげる
git status ステージングにあがってるか確認
git commit -m "変更内容簡潔に"
git push origin master
```
- `Title` `説明`はわかりやすく

##### 他人の更新を自分の環境に反映したい

```
git remote update && git rebase blessed/ブランチ名
```

色々やり方があるんで調べてください。

---
### memo
- ブランチはGitに慣れたら各自使う
    * master 基本的にコミットしない、developからのmergeのみ。***神聖ブランチ***
    * develop 基本的にコミットしない、featureからのmergeのみ。***開発用ブランチ***
    * feature 各機能ごとにブランチをきる。機能実装後テストを行いdevelopにmergeする。***実質的開発作業ブランチ***
    * hotfix masterブランチでバグなどが生じた際に緊急的な修正を行うブランチ。修正後masterとdevelopにmergeする。***緊急対応用ブランチ***

---

## *この手引きは適当に書いたため信憑性はありません。*(↑の神聖ブランチとか)
## *各自、調べながら開発を進めましょう。*#
