<!DOCTYPE HTML>
<html>

<head>
    <title>경력기술서</title>
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
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'; ?>

        <!-- Main -->
        <div id="app">
            <div id="wrapper">
                <div id="main">
                    <div class="inner">
                        <h1>경력기술서</h1>
                        <h2>총 {{ total }} 개</h2>
                        <section>
                            <div class="row">

                                <div class="col-6 col-12-medium" v-for="(category, name, index) in list" :key="index">
                                    <h3>{{ name }}</h3>
                                    <ul>
                                        <li>
                                            1) {{ category[0]?.project_name }}
                                            <ol>
                                                <li>
                                                    <b>&nbsp;&nbsp;&nbsp;1. 기한</b> :
                                                    {{ category[0]?.project_date }}
                                                </li>
                                                <li>
                                                    <b>&nbsp;&nbsp;&nbsp;2. 인원</b> :
                                                    {{ category[0]?.project_person }}
                                                </li>
                                                <li>
                                                    <b>&nbsp;&nbsp;&nbsp;3. 역할</b> :
                                                    {{ category[0]?.project_part }}
                                                </li>
                                                <li>
                                                    <b>&nbsp;&nbsp;&nbsp;4. 개발환경</b> :
                                                    {{ category[0]?.project_setting }}
                                                </li>
                                                <li>
                                                    <b>&nbsp;&nbsp;&nbsp;5. 기능</b> :
                                                    {{ category[0]?.project_function }}
                                                </li>
                                                <li>
                                                    <b>&nbsp;&nbsp;&nbsp;6. 파일</b> :
                                                    <span class="mr-05 ml-20" v-for="file in category[0]?.files">
                                                        <a :href="file.file_path" target="_blanck">- {{ file.file_name }}</a>
                                                    </span>
                                                </li>
                                                <li>
                                                    <b>&nbsp;&nbsp;&nbsp;7. URL</b> :
                                                    <span v-html="category[0]?.project_url"></span>
                                                </li>
                                            </ol>
                                            <br/>
                                        </li>

                                        <details @toggle="(event) => onSummary(event, index)">
                                            <summary
                                                :class="{'summary-open': !isSummaryOpen[index], 'summary-close': isSummaryOpen[index]}"
                                                class="mb-20"></summary>
                                            <li v-for="(row, i) in category" v-if="i>0">
                                                 {{i+1}}) {{ row.project_name }}
                                                <ol>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;1. 기한</b> :
                                                        {{ row.project_date }}
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;2. 인원</b> :
                                                        {{ row.project_person }}
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;3. 역할</b> :
                                                        {{ row.project_part }}
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;4. 개발환경</b> :
                                                        {{ row.project_setting }}
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;5. 기능</b> :
                                                        {{ row.project_function }}
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;6. 파일</b> :
                                                        <span class="mr-05 ml-20" v-for="file in row.files">
                                                            <a :href="file.file_path" target="_blanck">- {{ file.file_name }}</a>
                                                        </span>
                                                     </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;7. URL</b> :
                                                        <span v-html="row.project_url"></span>
                                                    </li>
                                                </ol>
                                            <br/>
                                            </li>
                                    </ul>
                                    </details>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <? include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php' ?>
    </div>
</body>



<script>
    const vm = new Vue({
        // vm : view model의 약자
        el: "#app",
        data() {
            return {
                list: {
                    All : [],
                },
                total: 0,
                isSummaryOpen: [],
            }
        },
        mounted() {
            this.isSummaryOpen = new Array(Object.keys(this.list).length).fill(false);
            this.doSearch();
        },
        methods: {
            doSearch() {
                let me = this;
                let info = {
                    'pageSize': 999
                }
                axios.get('/tom/projectList', { params: info }).then(response => {

                    for (let [i, row] of response.data.list.entries()) {
                        me.list.All.push(row)
                    }

                    me.total = response.data.total
                });
            },
            onSummary(event, index) {
                this.isSummaryOpen = this.isSummaryOpen.map((item, i) => {
                    return i === index ? event.target.open : item
                });
            }
        }

    });
</script>