<!DOCTYPE HTML>
<html>
<head>
	<title>Phantom by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="/assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="/assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<? include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php' ?>
		<!-- Main -->
		<div id="main">
			<div id="app" class="inner">
				<header>
					<h1>
						<p>A ♡ B</p>
						<p>{{ startDate }} ~ {{ endDate }}</p>
						<p>( {{ dDayDate }} 일 째 )</p>
					</h1>
					<!-- <a href="http://html5up.net">HTML5 UP</a> -->

				</header>
				<section class="tiles">
					<article class="style1">
						<span class="image">
							<img src="/images/pic01.jpg" alt="" />
						</span>
						<a href="/gallery/list">
							<h2>사진첩</h2>
							<div class="content">
								<p>이대호 밥 먹은 사진 올리기</p>
							</div> 
						</a>
					</article>
					<article class="style2">
						<span class="image">
							<img src="/images/pic02.jpg" alt="" />
						</span>
						<a href="/news/list">
							<h2>새소식</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style3">
						<span class="image">
							<img src="/images/pic03.jpg" alt="" />
						</span>
						<a href="javascript:;">
							<h2>달력(준비중)</h2>
							<div class="content">
								<p>시온이가 만들 것</p>
							</div>
						</a>
					</article>
					<article class="style4">
						<span class="image">
							<img src="/images/pic04.jpg" alt="" />
						</span>
						<a href="javascript:;">
							<h2>준비중</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style5">
						<span class="image">
							<img src="/images/pic05.jpg" alt="" />
						</span>
						<a href="javascript:;">
							<h2>준비중</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style6">
						<span class="image">
							<img src="/images/pic06.jpg" alt="" />
						</span>
						<a href="javascript:;">
							<h2>준비중</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
				</section>
			</div>
		</div>
		<!-- Footer -->
		<? include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php' ?>
	</div>
</body>

</html>

<script>
	const vm = new Vue({
		// vm : view model의 약자
		el: "#app",
		data() {
			return {
				startDate: '2021.06.26',
				endDate: '',
				dDayDate : '',
			}
		},
		mounted() {
			this.getNowDate()
			setInterval(this.getNowDate.bind(this), 1000)
			this.getDdayDate()
		},
		methods: {
			getNowDate() {
				this.endDate = new Date().YYYYMMDDHHMMSS();
			},
			getDdayDate() {
				const oneDay = 24 * 60 * 60 * 1000 // 하루를 밀리초로 변환
				const dDay = Math.round((new Date() - new Date(this.startDate)) / oneDay) // D-day 계산
				this.dDayDate = `${dDay}`
			}
		},
	});
</script>