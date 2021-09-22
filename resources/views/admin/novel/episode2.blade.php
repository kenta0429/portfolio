<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="header">
        <div class="clrfix">
            <a href="/" id="narou_link"><img src="https://static.syosetu.com/view/images/common/logo_narou.png?psawph" alt="小説家になろう" /></a>

        </div>


        <div id="head_log">
            <ul>
                <li id="edit"><span onMouseover="mOver()" onMouseout="mOut()">設定変更</span>
                    <div class="absolute">
                        <span id="usermenu" onMouseover="mOver()" onMouseout="mOut()">
                            <a href="https://ssl.syosetu.com/useredit/input/">ユーザ情報編集</a>

                            <a href="/userblock/list/">ブロックユーザ設定</a>
                            <a href="/mute/list/">ミュートユーザ設定</a>
                        </span>
                    </div>
                </li>
                <li><a href="/site/man/">マニュアル</a></li>
                <li><a href="/login/logout/?token=ae2794847acfd2c9ed275a0499deed26" id="logout">ログアウト</a></li>
                <li>小鳥遊 小鳥 [ID:656908] でログイン中</li>
            </ul>
        </div><!-- head_log -->



    </div><!-- header -->

    <!--for  get userid from js -->
    <span id="userid" style="display:none;">656908</span>

    <div id="container">
        <div id="contents2">
            <ul class="writter_menu">
                <li class="menu_h">小説メニュー</li>
                <li><a href="/userwrittingnovel/input/">新規小説作成</a></li>
                <li><a href="/userwrittingnovel/list/">執筆中小説</a></li>
                <li><a href="/usernovel/list/">投稿済み小説</a></li>
                <li><a href="/novelcontribute/input/">ダイレクト投稿</a></li>
                <li><a href="/userwrittingnovel/mailrev/">メール小説執筆</a></li>
            </ul>
            <div id="location">
                <h2>次話投稿</h2>
                <p>連載中小説に新しい部分を追加投稿するページです。
                </p>
            </div><!-- location -->

            <ul class="novelmanage_menu">
                <li class="back"><a href="/usernovelmanage/top/ncode/829466/">小説管理ページ</a></li>
            </ul>
            <div id="novelmain_title">童貞が伝説の魔法使いになるまでの道程</div>

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


                    <div class="part">
                        <h4>割り込み投稿</h4>
                        <div class="inbox clearfix">
                            <p class="description">
                                <a href="/man/ziwa/#warikomi" target="_blank" class="op">割り込み投稿について</a>
                            </p><!-- description -->
                            <p class="description_mini">
                                投稿済みの部分の途中に割り込んで投稿できます。<br />
                            </p><!-- description -->
                            <select name="no" data-name="割り込み投稿">
                                <option value="">最新部分として次話投稿する</option>
                                <option value="1">第1部分として割込み投稿する</option>
                                <option value="2">第2部分として割込み投稿する</option>
                                <option value="3">第3部分として割込み投稿する</option>
                                <option value="4">第4部分として割込み投稿する</option>
                                <option value="5">第5部分として割込み投稿する</option>
                                <option value="6">第6部分として割込み投稿する</option>
                                <option value="7">第7部分として割込み投稿する</option>
                                <option value="8">第8部分として割込み投稿する</option>
                                <option value="9">第9部分として割込み投稿する</option>
                                <option value="10">第10部分として割込み投稿する</option>
                            </select>
                        </div><!-- inbox -->
                    </div><!-- part -->



                    <div class="part">
                        <h4>予約掲載設定</h4>
                        <div class="inbox clearfix">
                            <p class="description">
                                <a href="/man/toukoukoumoku/#m_yoyaku" target="_blank" class="op">予約掲載について</a>
                            </p><!-- description -->
                            <input type="text" name="reserve_date" value="" placeholder="yy年m月d日" readonly="readonly" data-name="予約掲載日" data-maxday="130" />
                            <select name="hour">
                                <option label="▼選択" value="">▼選択</option>
                                <option label="0時" value="0">0時</option>
                                <option label="1時" value="1">1時</option>
                                <option label="2時" value="2">2時</option>
                                <option label="3時" value="3">3時</option>
                                <option label="4時" value="4">4時</option>
                                <option label="5時" value="5">5時</option>
                                <option label="6時" value="6">6時</option>
                                <option label="7時" value="7">7時</option>
                                <option label="8時" value="8">8時</option>
                                <option label="9時" value="9">9時</option>
                                <option label="10時" value="10">10時</option>
                                <option label="11時" value="11">11時</option>
                                <option label="12時" value="12">12時</option>
                                <option label="13時" value="13">13時</option>
                                <option label="14時" value="14">14時</option>
                                <option label="15時" value="15">15時</option>
                                <option label="16時" value="16">16時</option>
                                <option label="17時" value="17">17時</option>
                                <option label="18時" value="18">18時</option>
                                <option label="19時" value="19">19時</option>
                                <option label="20時" value="20">20時</option>
                                <option label="21時" value="21">21時</option>
                                <option label="22時" value="22">22時</option>
                                <option label="23時" value="23">23時</option>
                            </select>

                            <div class="sub_button"><input type="button" id="releaseReserveButton" value="解除" data-nolock="true" /></div>

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
        <div id="extra">
            <div id="home">
                <a href="/user/top/" accesskey="h">ホーム</a>
            </div>

            <div id="menu_box">
                <ul>
                    <li class="menu_message"><a href="/messagebox/top/">メッセージボックス</a></li>
                </ul>
                <ul>
                    <li class="menu_blog"><a href="/userblog/list/">活動報告</a></li>
                    <li class="menu_blogcomment"><a href="/userblog/passivelist/">├書かれたコメント一覧</a></li>
                    <li class="menu_blogcomment"><a href="/userblog/commentlist/">└書いたコメント一覧</a></li>
                </ul>
                <ul>
                    <li class="menu_favnove"><a href="/favnovelmain/list/">ブックマーク</a></li>
                </ul>
                <ul>
                    <li class="menu_favuser"><a href="/favuser/list/">お気に入りユーザ</a></li>
                </ul>
            </div>


            <div id="mypagelink">
                <ul>
                    <li><a href="https://mypage.syosetu.com/656908/">マイページ</a></li>
                </ul>
            </div><!-- mypagelink -->


            <div id="pd_box">
                <h3 onmouseover="pDown1();" onmouseout="pHide1();">なろうグループ内リンク</h3>
                <div class="absolute">
                    <ul id="eg" onmouseover="pDown1();" onmouseout="pHide1();">
                        <li class="n"><a href="https://syosetu.com/">小説家になろう</a></li>
                        <li class="n"><a href="https://yomou.syosetu.com/">小説を読もう！</a></li>
                        <li class="n"><a href="https://pdfnovels.net">タテ書き小説ネット</a></li>
                    </ul>
                </div>

                <h3 onmouseover="pDown2();" onmouseout="pHide2();">ブログ情報</h3>
                <div class="absolute">
                    <ul id="eb" onmouseover="pDown2();" onmouseout="pHide2();">
                        <li class="n"><a href="https://syosetu.com/blog/list/">新着活動報告</a></li>
                        <li class="n"><a href="https://syosetu.com/trackback/list/">トラックバック一覧</a></li>
                        <li class="n"><a href="https://syosetu.com/useredit/nish/">ブログパーツ提供</a></li>
                    </ul>
                </div>

                <h3 onmouseover="pDown3();" onmouseout="pHide3();">小説ランキング</h3>
                <div class="absolute">
                    <ul id="er" onmouseover="pDown3();" onmouseout="pHide3();">
                        <li class="n"><a href="https://yomou.syosetu.com/rank/top/">総合</a></li>
                        <li class="n"><a href="https://yomou.syosetu.com/rank/genretop/">ジャンル別</a></li>
                        <li class="n"><a href="https://yomou.syosetu.com/rank/isekaitop/">異世界転生/転移</a></li>
                    </ul>
                </div>

                <h3 onmouseover="pDown4();" onmouseout="pHide4();">小説PickUp！</h3>
                <div class="absolute">
                    <ul id="ep" onmouseover="pDown4();" onmouseout="pHide4();">
                        <li class="n"><a href="https://syosetu.com/pickup/list/">小説PickUp！</a></li>
                        <li class="n"><a href="https://pdfnovels.net/novel/list/">縦書きPickUp！</a></li>
                    </ul>
                </div>

                <h3 onmouseover="pDown5();" onmouseout="pHide5();">小説を探す</h3>
                <div class="absolute">
                    <ul id="es" onmouseover="pDown5();" onmouseout="pHide5();">
                        <li class="n"><a href="https://yomou.syosetu.com/search.php?order=new">新着小説</a></li>
                        <li class="n"><a href="https://syosetu.com/syuppan/list/">書報（出版作品紹介）</a></li>
                    </ul>
                </div>

                <h3 onmouseover="pDown6();" onmouseout="pHide6();">小説閲覧履歴</h3>
                <div class="absolute">
                    <ul id="enr" onmouseover="pDown6();" onmouseout="pHide6();">
                        <li class="n"><a href="https://yomou.syosetu.com/rireki/list/">小説を読もう！</a></li>
                    </ul>
                </div>
            </div><!-- pd_box -->
            <div class="normal_box">
                <h3>辞書</h3>
                <ul>
                    <li><a href="https://dictionary.goo.ne.jp/" target="_blank">goo辞書</a></li>
                    <li><a href="https://www.excite.co.jp/world/" target="_blank">エキサイト翻訳</a></li>
                    <li><a href="https://www.alc.co.jp/" target="_blank">SPACE&nbsp;ALC</a></li>
                    <li><a href="https://www.weblio.jp/" target="_blank">Weblio</a></li>
                </ul>
                <div class="a_line"><span class="letter_limit">※別窓が開きます<br />※上記は外部サイトです</span></div>
            </div><!-- normal_box -->
        </div>
    </div>
    <!--container-->
    <!-- フッタここから -->
    <div id="footer">
        <div class="upper"><a href="#">▲ページの上部へ</a></div>

        <ul>
            <li><a href="/man/index/">マニュアル目次</a></li>
            <li><a href="/help/top/">ヘルプ</a></li>
            <li><a href="/bbs/attention/">質問板</a></li>
            <li><a href="/site/rule/">利用規約</a></li>
            <li><a href="/site/guideline/">ガイドライン</a></li>
            <li><a href="/site/privacy/">プライバシーポリシー</a></li>
            <li><a href="https://ssl.syosetu.com/inquire/input/">お問い合わせ</a></li>
            <li><a href="https://hinaproject.co.jp/">HinaProject Inc.</a></li>
        </ul>
    </div>
    <!--footer-->
    <!-- フッタここまで -->


</body>

</html>