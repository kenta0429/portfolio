<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>ユーザ情報編集</title>


</head>

<body>
    <div id="container">
        

        <h2>ユーザ情報編集</h2>

        <ul class="editmenu">
            <li><a href="#prf">プロフィール情報変更</a></li>
            <li><a href="#mad">メールアドレス変更</a></li>
            <li><a href="#pw">パスワード変更</a></li>
        </ul>


        <h3 id="prf">プロフィール情報変更</h3>
        <p>
            プロフィールに入力している内容は基本的にマイページに表示されます。<br />
            ただし、公開設定が非公開に設定されているものについては、マイページへ表示されません。
        </p>
        <p>
            住所や電話番号などは入力しないようお願い致します。
        </p>
        <p><span class="attention">※</span>の欄は必ず入力してください。</p>
        <form action="/useredit/update/?token=7ad6a3f824827617f4ed8e146a187936" class="manage_form" method="post" data-validator="updateProfile">
            <dl class="edit">
                <dt><span class="attention">※</span>ユーザネーム</dt>
                <dd>
                    <input type="text" name="name" maxlength="32" value="名前" /><br />
                    <label class="letter_limit">32文字以内で入力</label>
                </dd>
                <dt><span class="attention">※</span>フリガナ</dt>
                <dd>
                    <input type="text" name="yomikata" maxlength="64" value="ナマエ" />
                    <br /><label class="letter_limit">64文字以内で入力</label>
                </dd>
                
                <dt>ユーザ自己紹介</dt>
                <dd>
                    <textarea name="selfintroduction" cols="65" rows="10"></textarea>
                    <br /><label class="letter_limit">約20,000文字以内で入力</label>
                    <br />※住所や電話番号などは入力しないでください。
                </dd>
            </dl>

            <div class="user-input_button">
                <input type="submit" class="button" value="プロフィール情報変更" id="useredit" data-nolock="true" />
            </div>
        </form>

        <ul class="editmenu">
            <li><a href="#prf">プロフィール情報変更</a></li>
            <li><a href="#pw">パスワード変更</a></li>
        </ul>

        <h3 id="mad">メールアドレス変更</h3>
        <p>
            ☆メールアドレスはパソコンかケータイ、どちらか必ず入力してください。<br />
            必ず<span class="attention">利用中のメールアドレスをお書きください。</span><br />
            ※マイページには表示されません。
        </p>

        <form action="/maileditauth/add/" method="post" data-validator="updatePcMail">
            <dl class="edit">
                <dt><span class="attention">☆</span>メールアドレス</dt>
                <dd><input type="text" name="email" value="" maxlength="255" /></dd>
            </dl>
            <input type="hidden" name="type" value="1" />
            <div class="user-input_button">
                <input type="submit" class="button" value="メールアドレス修正" id="pcmainsubmit" data-nolock="true" />
            </div>
        </form>



        <ul class="editmenu">
            <li><a href="#prf">プロフィール情報変更</a></li>
            <li><a href="#pw">パスワード変更</a></li>
        </ul>

        <h3 id="pw">パスワード変更</h3>
        <form action="/useredit/editpassword/" class="manage_form" method="post" data-validator="updatePassword">
            <dl class="edit">
                <dt>古いパスワード</dt>
                <dd>現在使っているパスワードを入力してください。<br /><input type="password" name="oldpassword" /></dd>
                <dt>新しいパスワード</dt>
                <dd>新しく使うパスワードを入力してください。<br /><input type="password" name="newpassword" /><br /><label class="letter_limit">(半角英数字の両方を含む8字～32字以内で入力)</label></dd>
                <dt>新しいパスワード[確認]</dt>
                <dd>もう一度新しいパスワードを入力してください。<br /><input type="password" name="newpassword2" /></dd>
            </dl>
            <div class="user-input_button">
                <input type="submit" class="button" value="パスワード変更" data-nolock="true" />
            </div>
        </form>
        <div class="upper"><a href="#" target="_top">↑ページの上部へ</a></div>
    </div>
</body>

</html>