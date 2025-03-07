// Q1 変数と文字列
<?php

$name = '蓮尾';

echo '私の名前は「'. $name . '」です';

// Q2 四則演算
$x = 5;
$y = 4;

$num = ($x*$y);

var_dump($num);
var_dump($num/2);

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');

echo date("現在の時刻は、Y年m月d日 H時i分s秒です。");

// Q4 条件分岐-1 if文

$device = 'mac';

if ($device === 'windows' ||  $device === 'mac') {
    echo "使用OSは、 $device です。";
} else {
    echo "どちらでもありません。";
}


// Q5 条件分岐-2 三項演算子

$age = 17;

$message = ($age > 17) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列

$prefecture = ['東京都', '神奈川県', '埼玉県','栃木県','千葉県','茨城県','群馬県'];

echo "$prefecture[3]と$prefecture[4] は関東地方の都道府県です。";
// Q7 連想配列-1

$prefecture = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
  ];

foreach  ($prefecture as $value) {
    echo $value."\n";
}

// Q8 連想配列-2
$prefecture = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'];

foreach  ($prefecture as $key => $value) {
    if ($value !== 'さいたま市') {
        continue;
    }
    echo "$key の県庁所在地は、$value です。";
}

// Q9 連想配列-3

$prefecture = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'];

foreach($prefecture as $key => $value){
  $prefecture_key[] = $key;
  $prefecture_value[] = $value;
}

array_push($prefecture_key,'愛知県','大阪府');
array_push($prefecture_value,'名古屋市','大阪市');

$prefecture =array_combine($prefecture_key,$prefecture_value);

foreach  ($prefecture as $key => $value) {
    if ($value === '名古屋市' || $value === '大阪市') {
        echo "$key は関東地方ではありません。"."\n";
    } else {
        echo"$key の県庁所在地は、$value です。"."\n";
    }
}


// Q10 関数-1

function hello($name)
{
    return $name.'さん、こんにちは。'."\n";
}

$message = hello('金谷');
echo($message);

$message2 = hello('安藤');
echo($message2);

// Q11 関数-2

function calcTaxInPrice ($price)
{
   $taxInPrice = $price * 1.1;
   return $taxInPrice;
}

$price = 1000;

echo $price ."円の商品の税込価格は".calcTaxInPrice ($price) ."円です。";

// Q12 関数とif文

function distinguishNum($number) {
  if ($number % 2 === 0) {
      return "は偶数です。";
  } else {
      return "は奇数です。";
  }
}
$number = 24;

echo  "$number" . distinguishNum($number) . "\n";

// Q13 関数とswitch文
function evaluateGrade($result){
    
  switch ($result) {
    case "A":
      return "合格です。";
      break;
      
    case "B":
      return "合格です。";
      break;
      
    case "C":
      return "合格ですが追加課題があります。";
      break;
      
    case "D":
      return "不合格です。";
      break;
      
    default:
      return "判定不明です。講師に問い合わせてください。";
      break;
  }
}

 $result = ("A");
 echo evaluateGrade($result)."\n";
 
 $result = ("AB");
 echo evaluateGrade($result);"\n";
?>