# Laravel 10 管理邀請碼

引入 mateusjunges 的 laravel-invite-codes 套件來擴增管理邀請碼，利用邀請碼連結可以僅供會員或其親朋好友進入限定頁面。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 啟動排程器，僅需要在伺服器上增加一條 Cron 項目即可。
```sh
* * * * * cd /{專案路徑} && php artisan schedule:run >> /dev/null 2>&1
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/01P3Lli.png)
> 沒有邀請碼無法進入註冊頁

![](https://i.imgur.com/6wOniHX.gif)
> 複製邀請碼的註冊連結

![](https://i.imgur.com/IWeyxaw.png)
> 在瀏覽器中開啟邀請註冊連結則可進入註冊頁
