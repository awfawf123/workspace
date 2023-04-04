<?php 
	// GET으로 넘겨 받은 year값이 있다면 넘겨 받은걸 year변수에 적용하고 없다면 현재 년도
	$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
	// GET으로 넘겨 받은 month값이 있다면 넘겨 받은걸 month변수에 적용하고 없다면 현재 월
	$month = isset($_GET['month']) ? $_GET['month'] : date('m');

	//현재 달력 
	$date = "$year-$month-01"; // 현재 날짜
	$time = strtotime($date); // 현재 날짜의 타임스탬프
	$start_week = date('w', $time); // 1. 시작 요일
	$total_day = date('t', $time); // 2. 현재 달의 총 날짜
	$total_week = ceil(($total_day + $start_week) / 7);  // 3. 현재 달의 총 주차
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calendar</title>
	<style type="text/css">
		table {
			border-spacing: 0;
		}
		table td {
			text-align: center;
		}
		
	</style>
</head>
<body>
	<?php echo "$year 년 $month 월 $start_week" ?>
	<!-- 현재가 1월이라 이전 달이 작년 12월인경우 -->
	<?php if ($month == 1): ?>
		<!-- 작년 12월 -->
		<a href="/?year=<?php echo $year-1 ?> &month=12">이전 달</a>
	<?php else: ?>
		<!-- 이번 년 이전 월 -->
		<a href="/?year=<?php echo $year ?> &month=<?php echo $month-1 ?>">이전 달</a>
	<?php endif ?>
	<!-- 현재가 12월이라 다음 달이 내년 1월인경우 -->
	<?php if ($month == 12): ?>
		<!-- 내년 1월 -->
		<a href="/?year=<?php echo $year+1 ?>&month=1">다음 달</a>
	<?php else: ?>
		<!-- 이번 년 다음 월 -->
		<a href="/?year=<?php echo $year ?>&month=<?php echo $month+1 ?>">다음 달</a>
	<?php endif ?>
	<?php // 요일 이름 배열
	$weekdays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
		?>
	<table border="1">
		<tr> 
				<?php for ($i=0;$i<$total_week;$i++): ?> 
				<!-- 현재 달의 총 날짜 표시(한 달) -->
						<?php for ($week=0;$week<7;$week++): ?> 
							<th> 
								<!-- 시작 요일부터 마지막 날짜까지만 날짜를 보여주도록 -->
								<?php echo $weekdays[$week]?>
							</th> 
						<?php endfor; ?> 
					<?php endfor; ?>
			</tr>  
			<tr>
				<!-- 시작 요일 전의 날짜는 빈 값으로--> 
			<?php for ($i = 0; $i < $start_week; $i++): ?> 
					<td></td> 
				<?php endfor; ?> 
				<!-- 현재 달의 총 날짜 표시(한 달) -->
				<?php for ($day = 1; $day <= $total_day; $day++): ?> 
					<td> 
						<!-- 시작 요일부터 마지막 날짜까지만 날짜를 보여주도록 -->
						<?php echo $day?>
					</td> 
				<?php endfor; ?> 
			</tr> 
	</table>
</body>
</html>