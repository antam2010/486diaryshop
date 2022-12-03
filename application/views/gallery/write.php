<!DOCTYPE HTML>
<html>

<head>
	<title>Gallery</title>
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
					<h1>Gallery</h1>
					<section>
                        <h2>write</h2>
                        <form method="post" action="#">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                </div>
                                <div class="col-12">
                                    <select name="demo-category" id="demo-category">
                                        <option value="">- Category -</option>
                                        <option value="1">Manufacturing</option>
                                        <option value="1">Shipping</option>
                                        <option value="1">Administration</option>
                                        <option value="1">Human Resources</option>
                                    </select>
                                </div>
                                <div class="col-4 col-12-small">
                                    <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                    <label for="demo-priority-low">Low</label>
                                </div>
                                <div class="col-4 col-12-small">
                                    <input type="radio" id="demo-priority-normal" name="demo-priority">
                                    <label for="demo-priority-normal">Normal</label>
                                </div>
                                <div class="col-4 col-12-small">
                                    <input type="radio" id="demo-priority-high" name="demo-priority">
                                    <label for="demo-priority-high">High</label>
                                </div>
                                <div class="col-6 col-12-small">
                                    <input type="checkbox" id="demo-copy" name="demo-copy">
                                    <label for="demo-copy">Email me a copy</label>
                                </div>
                                <div class="col-6 col-12-small">
                                    <input type="checkbox" id="demo-human" name="demo-human" checked>
                                    <label for="demo-human">Not a robot</label>
                                </div>
                                <div class="col-12">
                                    <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Send Message" class="primary" /></li>
                                        <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
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