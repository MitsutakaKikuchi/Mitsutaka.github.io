<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include("inc/head.php"); ?>
  </head>

  <body>
    <div id="wrapper">
      <!-- ヘッダーここから -->    
      <?php include("inc/header.php"); ?>

      <div class="header-pad">
        <!-- メイン画像 -->
        <script src="https://sdk.form.run/js/v2/embed.js"></script>

        <div id="subimage">
          <h2>お問い合わせ</h2>
        </div>

        <container class="news-container">
          <div id="news" class="box-shadow">
            <container id="keiko">
              <div id="formWrap">
                <p>
                  お問い合わせやお稽古のご希望、出演依頼など、<br />下記フォームに必要事項を入力後、確認ボタンを押してください。
                </p>

                <form >
                  <table class="formTable">
                    <tr>
                      <th>ご用件</th>
                      <td>
                        <select name="ご用件">
                          <option value="">選択してください</option>
                          <option value="お問い合わせ">
                            お問い合わせ
                          </option>
                          <option value="お稽古ご希望">お稽古ご希望</option>
                          <option value="出演依頼・相談">出演依頼・相談</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>お名前</th>
                      <td>
                        <input size="20" type="text" name="お名前" /> ※必須
                      </td>
                    </tr>
                    <tr>
                      <th>電話番号（半角）</th>
                      <td><input size="30" type="text" name="電話番号" /></td>
                    </tr>
                    <tr>
                      <th>Mail（半角）</th>
                      <td>
                        <input size="30" type="text" name="Email" /> ※必須
                      </td>
                    </tr>
                    <tr>
                      <th>性別</th>
                      <td>
                        <input type="radio"  name="性別" value="男" /> 男
                        <input type="radio" name="性別"   value="女" /> 女
                      </td>
                    </tr>
                    <tr>
                      <th>サイトを知ったきっかけ</th>
                      <td>
                        <input
                        name="サイトを知ったきっかけ[]"
                        type="checkbox"
                        value="ネット検索"
                        />
                        ネット検索
                        <input
                          name="サイトを知ったきっかけ[]"
                          type="checkbox"
                          value="Facebook(SNS)"
                        />
                        Facebook(SNS)
                        <input
                        name="サイトを知ったきっかけ[]"
                        type="checkbox"
                        value="友人・知人"
                      />
                      友人・知人
                      </td>
                    </tr>
                    <tr>
                      <th>お問い合わせ内容<br /></th>
                      <td>
                        <textarea
                          name="お問い合わせ内容"
                          cols="50"
                          rows="5"
                        ></textarea>
                      </td>
                    </tr>
                  </table>
                  <p align="center">
                    <input type="submit" value="　 確認 　" />　<input
                      type="reset"
                      value="リセット"
                    />
                  </p>
                </form>
                <p>
                  ※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください
                </p>
              </div>
            </container>
          </div>

          <!-- サブメニュー -->
          <div id="submenu">
          <ul>
            <li class="box-shadow">
              <a class="subcontents sensu" href="about.php"
                >直派分家若柳流とは</a
              >
            </li>
            <li class="box-shadow"><a class="subcontents keiko" href="info.php">お稽古場のご案内</a></li>
            <li class="box-shadow">
              <a
              class="subcontents senjukai"
              href="https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126"
              >活動の様子</a
              >
            </li>
            <!-- <li class="box-shadow">
              <a class="subcontents contact" href="contact.php">お稽古をご希望の方</a>
            </li> -->
            
            <!-- Google Map -->
            <li>
              </li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203.2807821494624!2d139.68612135225322!3d35.671098064920095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f34a2185ecc1%3A0x165a7e6b696c269f!2z44CSMTUxLTAwNjIg5p2x5Lqs6YO95riL6LC35Yy65YWD5Luj44CF5pyo55S677yS77yW4oiS77yT!5e0!3m2!1sja!2sjp!4v1609600045948!5m2!1sja!2sjp" width="365" height="275" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </ul>
            
          </div>
        </container>
      </div>
    </div>

    <!-- フッター -->
    <?php include("inc/footer.php"); ?>
  </body>
</html>
