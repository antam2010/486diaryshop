<!DOCTYPE HTML>
<html>

<head>
    <title>News</title>
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
                    <h1>새소식</h1>
                    <section>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                <colgroup>
                                    <col width="10%" />
                                    <col width="*" />
                                    <col width="20%" />
                                </colgroup>
                                    <tr>
                                        <th>작성자</th>
                                        <th>제목</th>
                                        <th>등록일</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="total>0" v-for="(row,i) in list">
                                        <td>{{ row.member_nickname }}</td>
                                        <td class="over_char">{{ row.board_title }}</td>
                                        <td>{{ row.board_wdate }}</td>
                                    </tr>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">총 게시물 <d/td>
                                        <td>{{ total }}</td>
                                    </tr>
                                </tfoot>
                            </table>
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
                total: 0,
            }
        },
        mounted() {
            this.doSearch();
        },
        methods: {
            doSearch() {
                let me = this;
                let info = {
                    'board_category': 'news',
                    'pageSize': 5
                }
                axios.get('/board/list.php', { params: info }).then(response => {
                    me.list = response.data.list
                    me.total = response.data.total
                });
            }

        },
    });
</script>