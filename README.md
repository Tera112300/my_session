# Session
Sessionライブラリ
<br>
<br>

# セッションデータを取得

セッションデータを取得します。<br>
引数に、取得したいセッションパラメータ名を指定します。<br><br>

## 書式
```php
$test->userdata('argument');
```
## パラメータ
argument : 取得したいセッションパラメータ名<br><br>

# セッションデータを追加

セッションデータを追加、または、更新します。<br>
連想配列で複数のセッションデータを指定します。<br><br>

## 書式
```php
$data = array(
    "id" => 1,
    "email" => "test@email.co.jp"
);
$test->set_userdata($data);
```
<br><br>

# セッションデータを削除

すべてのセッションデータを削除します。<br><br>

## 書式
```php
$test->sess_destroy();
```
<br><br>

# セッションデータを追加

セッションデータを追加、または、更新します。<br>
連想配列で複数のセッションデータを指定します。<br><br>

## 書式
```php
$data = array(
    "id" => 1,
    "email" => "test@email.co.jp"
);
$test->set_userdata($data);
```
<br><br>

# 特定のセッションデータを削除します。

削除には配列を指定します。<br><br>

## 書式
```php
$destroy = array("email");
$test->unset_userdata($destroy);
```

