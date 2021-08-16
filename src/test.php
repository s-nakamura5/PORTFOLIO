<?php



// 関数


function createBookLogs()
{
	echo '読書ログを登録してください' . PHP_EOL;
	echo '書籍名：';
	$title = trim(fgets(STDIN));
	echo '著者名：';
	$author = trim(fgets(STDIN));
	echo '読書状況（未読,読んでいる,読了）：';
	$status = trim(fgets(STDIN));
	echo '評価（５点満点の整数）';
	$score = trim(fgets(STDIN));
	echo '感想：';

	$summary = trim(fgets(STDIN));
	echo '登録が完了しました'. PHP_EOL;
	echo '' . PHP_EOL;

	return [
		'title' => $title,
		'author' => $author,
		'status' => $status,
		'score' => $score,
		'summary' => $summary,

	];


}

function viewBookLogs($bookLogs)
{
	foreach($bookLogs as $bookLog){

		echo '読書ログを表示します' . PHP_EOL;
		echo '書籍名：' . $bookLog['title'] . PHP_EOL;
		echo '著者名：' . $bookLog['author'] .  PHP_EOL;
		echo '読書状況：' . $bookLog['status'] .  PHP_EOL;
		echo '評価：' . $bookLog['score'] . PHP_EOL;
		echo '感想：' . $bookLog['summary'] . PHP_EOL;
		echo '' . PHP_EOL;
		echo '-----------------------------------------' . PHP_EOL;
		echo '' . PHP_EOL;
	}
}

function wrongResult ()
{
	echo '※番号が誤っています！　1,2,9から番号を選んでください。（半角数字）' . PHP_EOL;
	echo '' . PHP_EOL;
}


// 本文

$bookLogs = [];

echo '読書ログのご利用ありがとうございます' . PHP_EOL;

while(true){

	echo '1,2,9の中から番号を選択してください（半角数字）' . PHP_EOL;
	echo '1：読書ログの登録' . PHP_EOL;
	echo '2：読書ログの表示' . PHP_EOL;
	echo '9：読書ログを終了' . PHP_EOL;
	echo '番号を選択（1,2,9）（半角数字）:';
	$num = trim(fgets(STDIN));
	echo '' . PHP_EOL;

	if ($num == '1') {
	$bookLogs[] = createBookLogs();

	} elseif ($num == '2'){

	viewBookLogs($bookLogs);

	} elseif ($num == '9') {

		break;

	} else {

		wrongResult();

	}
}
