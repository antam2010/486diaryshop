<!DOCTYPE HTML>
<html>

<head>
	<title>Gallery</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<? include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php' ?>

		<!-- Main -->
		<div id="app">
			<div id="main">
				<div class="inner">
					<h1>Gallery</h1>
					<section>
						<h2>Image</h2>
						<div class="box alt">
							<div class="row gtr-uniform">
								<div class="col-4" v-for="(row,i) in list" v-if="total > 0">
									<span class="image fit">
										<img :src="row.board_thumbnail" alt="" />
									</span>
									<div class="content center over_char">
										<p>{{ row.board_title }}</p>
										<p>{{ row.board_contents }}</p>
									</div>
								</div>
							</div>
						</div>
						<div v-if="total === 0">
							<span>- 게시물이 존재하지 않습니다</span>
						</div>
					</section>
					
				</div>
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
				list: [],
				total : 0,
			}
		},
		mounted() {
			this.doSearch();
		},
		methods: {
			doSearch() {
				let me = this;
				let info = {
					'board_category' : 'gallery',
					'pageSize' : 5
				}
				axios.get('/board/list.php', { params : info } ).then(response => {
					me.list = response.data.list
					me.total = response.data.total
				});
			}

		},
	});
</script>