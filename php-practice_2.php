<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します'."\n"."\n";
for ($num=1; $num <=100; $num++) {

if (($num % 4 === 0) && ($num % 5 === 0)){
    echo 'tic-tac'."\n";
}elseif ($num % 5 === 0){
    echo 'tac'."\n";
}elseif ($num % 4 === 0){
    echo 'tic'."\n";
}else {
    echo"$num"."\n";
}
}

// Q2 多次元連想配列
Q2-1

echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

Q2-2

foreach ($personalInfos as $index => $value) {
    echo ($index + 1).'番目の'.$value['name']. 'のメールアドレスは'.$value['mail'].'で、電話番号は'.$value['tel'].'です。'."\n";
}
Q2-3

foreach ($ageList as $key => $value){
    $personalInfos [$key]['age'] = $value;
}
var_dump($personalInfos);
// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    
    public function sayHi()
    {
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です。';
    }
}

$yutani = new Student('23','油谷');
$yutani->sayHi();

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo $this->studentName.'はPHPの授業に参加しました。学籍番号:'.$this->studentId;
    }
    
    public function sayHi()
    {
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です。';
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
Q1

$date = new DateTime();
$date ->setTimeZone(new DateTimeZone('Asia/Tokyo'));

$date_model= $date->modify("-1 month")->format("Y-m-d");

echo $date_model;
Q2

$date = new DateTime();
$date ->setTimeZone(new DateTimeZone('Asia/Tokyo'));

$date2 = new DateTime('1992-04-25');

$interval = $date->diff($date2);

echo  $interval->format('あの日から%a日経過しました。');
?>