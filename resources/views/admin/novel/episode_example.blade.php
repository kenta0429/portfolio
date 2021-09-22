<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本文作成</title>
</head>

<body>

    <div id="container">
        <div id="contents2">
            
            <div id="location">
                <h2>次話投稿</h2>
                <p>連載中小説に新しい部分を追加投稿するページです。</p>
            </div><!-- location -->

            <ul class="novelmanage_menu">
                <li class="back"><a href="/usernovelmanage/top/ncode/829466/">小説管理ページ</a></li>
            </ul>
            <div id="novelmain_title">test title</div>

            <form id="manage_form" action="/usernovelmanage/ziwaconfirm/ncode/829466/" method="post">

                <div class="usernovelmanage">
                    <div class="part">
                        <h4>本文<span class="attention">【必須】</span></h4>
                        <div class="inbox">
                            <div class="novelinput_attention">
                                <span class="attention">途中保存ができません</span>のでご注意ください。<br />
                                本文を保存したい場合は、まず新規小説作成にて一度保存し、執筆中小説を作成してください。
                            </div><br />

                            <textarea cols="80" rows="15" id="novel" name="novel" class="backup backup_novel" data-name="小説本文" data-minlength="200" data-maxlength="70000">
</textarea><br />
                            <label class="letter_limit">70000文字以内</label><br />
                            文字数（空白・改行含まない）：<span id="novelCountWithoutSpace">0</span>字
                            <span id="novelCountMessage2" class="attention"></span><br />
                            <a href="/userwrittingnovel/backup/" class="nav_userwrittingnovel_backup">&gt;&gt;&nbsp;バックアップ一覧&nbsp;&lt;&lt;</a>
                        </div><!-- inbox -->
                    </div><!-- part -->



                    <div class="part">
                        <h4>サブタイトル<span class="attention">【必須】</span></h4>
                        <div class="inbox">
                            <input id="title" class="title" type="text" name="subtitle" value="" data-name="サブタイトル" data-minlength="1" data-maxlength="100" />
                            <span class="letter_limit">※100文字以内</span>
                        </div><!-- inbox -->
                    </div><!-- part -->



                    <div class="part">
                        <h4>完結設定</h4>
                        <div class="inbox">
                            <label><input type="radio" name="end" value="0" data-name="完結設定" />この部分で完結します</label><br />
                            <label><input type="radio" name="end" value="1" checked="checked" data-name="完結設定" />まだ続きます</label>
                        </div><!-- inbox -->
                    </div><!-- part -->



                    <div class="part">
                        <h4>前書き</h4>
                        <div class="inbox">
                            <textarea cols="65" rows="4" name="preface" data-name="前書き" data-maxlength="20000">
</textarea>
                            <span class="letter_limit">20000文字以内</span>
                        </div><!-- inbox -->
                    </div><!-- part -->


                    <div class="part">
                        <h4>後書き</h4>
                        <div class="inbox">
                            <textarea cols="65" rows="4"  name="postscript" data-name="後書き" data-maxlength="20000">
                                
                            </textarea>
                            <span class="letter_limit">20000文字以内</span>
                        </div><!-- inbox -->
                    </div><!-- part -->



                   

                </div><!-- usernovelmanage -->

                <div class="button_box">
                    <input type="submit" id="ziwainput" class="button" value="次話投稿[確認]" data-nolock="true" />
                </div>
            </form>

            <div id="navigate">
                <dl>
                    <dt class="op"><a href="/man/ziwa/" target="_blank">連載小説の続きを書く</a></dt>
                    <dd class="op">
                        <p class="h2">次話投稿の詳しい仕方はこちらをご覧ください。</p>
                        割り込み投稿についてもこちらをご覧ください。
                        <p>※次話（じわ）とは、連載小説の続きのことです。</p>
                    </dd>
                </dl>
            </div><!-- navigate -->
        </div>
        <!--contents2-->
       
    </div>
   

</body>

</html>