<!DOCTYPE HTML>
<html>

<head>
	<title>전자결재</title>
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
		<div id="app">
			<div id="main">
				<div class="inner">
					<h1>전자결재</h1>
					<section>
						<h2>Image
							<a class="fr" href="write" class="button small">
								<span class="plus">+</span>
							</a>
						</h2>
						
						<div class="content">
                            <p>
                                여기에 전자결재 문서의 내용을 작성하십시오. 필요한 내용을 추가하거나 편집하여 템플릿을 사용자 지정할 수 있습니다.
                            </p>
                        </div>

                        <div class="signature-section">
                            <div class="signature">
                                <img src="이미지URL" alt="서명 이미지">
                                <p>홍길동</p>
                                <p>직책/부서</p>
                            </div>

                            <div class="signature">
                                <img src="이미지URL" alt="서명 이미지">
                                <p>김철수</p>
                                <p>직책/부서</p>
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
				axios.get('/board/list', { params : info } ).then(response => {
					me.list = response.data.list
					me.total = response.data.total
				});
			}

		},
	});
</script>