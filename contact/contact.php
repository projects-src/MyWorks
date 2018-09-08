<!DOCTYPE html>
<html>
<head>
<title>お問い合わせフォーム</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="お問い合わせフォーム">
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="contact.js"></script>
</head>
<body>
<strong><p>下記フォームよりお問い合わせください。</p></strong>
<div>
  <form action ="confirm.php" method="post" name="form" onsubmit="return validate()">
    <h1 class="contact-title">お問い合わせ 内容入力</h1>
    <p>お問い合わせ内容をご確認の上、「確認画面へ」ボタンをクリックしてください</p>
    <div>
      <div>
        <label>お名前<span>必須</span></label>
        <input type="text" name="name" placeholder="山田 太郎" value="">
      </div>
      <div>
        <label>ふりがな<span>必須</span></label>
        <input type="text" name="furigana" placeholder="やまだたろう" value="">
      </div>
      <div>
        <label>メールアドレス<span>必須</span></label>
        <input type="text" name="email" placeholder="xxxx@example.com" value="">
      </div>
      <div>
        <label>電話番号<span>必須</span></label>
        <input type="text" name="tel" placeholder="00-0000-0000" value="">
      </div>
      <div>
        <label>性別<span>必須</span></label>
        <input type="radio" name="sex" value="男性" checked>男性
        <input type="radio" name="sex" value="女性">女性
      </div>
      <div>
        <label>お問い合わせ項目<span>必須</span></label>
        <select name="item">
          <option value="">お問い合わせ項目を選択してください</option>
          <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
          <option value="ご意見・ご感想">ご意見・ご感想</option>
        </select>
      </div>
      <div>
        <label>お問い合わせ内容<span>必須</span></label>
        <textarea name="content" rows="5" placeholder="お問い合わせ内容を入力"></textarea>
      </div>
    </div>
    <button type="submit">確認画面へ</button>
  </form>
</div>
</body>
</html>
