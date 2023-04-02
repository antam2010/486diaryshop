<!DOCTYPE HTML>
<html>

<head>
    <title>자기소개서</title>
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
                        <h1>자기소개서</h1>
                        <section>
                            <h3>소개</h3>
                            <p>
                                안녕하세요, 웹 개발자 3년차 이대호입니다. <br />
                                2020년 11월부터 개발을 시작하여 약 2년간 PHP 웹 개발, 프론트엔드, 서버 및 데이터베이스 설계 등의 업무를 수행했습니다. <br/>
                                주 사용 언어는 PHP 이며, 주로 CodeIgniter 프레임워크를 사용했습니다.<br />
                                2022년 8월부터는 기존의 PHP 외에도 Vue2, Vue Cli, 그리고 Spring Boot를 사용한 프로젝트 개발과 유지보수를 진행하고 있습니다 <br />
                                이 외에도 안드로이드 스튜디오를 통한 웹 앱 개발 및 배포, Xcode와 Swift를 사용한 웹 앱 개발 및 배포, 그리고 파이썬 코드 유지보수 경험이 있습니다.<br />
                            </p>
                        </section>
                        <section>
                            <h3>숙련도 (프로젝트 백분율)</h3>
                            <ul> 
                                <li v-for="(row, key) in progressList" >
                                    {{ key }}
                                    <progress :value="row" max="100"></progress> 
                                    <span>{{ row }} %</span>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3>개발경험</h3>
                            <article>
                                <ul>
                                    <li>
                                        GitLab Runner를 활용한 CI/CD 자동 배포 구축 경험이 있습니다.
                                    </li>
                                    <li>
                                        PHP를 활용한 {{ total }} 개 프로젝트중 {{ progressCntList.php }}
                                        개 만큼의 크고 작은 경험이 있습니다.</li>
                                    <li>
                                        Spring boot를 활용한 {{ progressCntList.java }} 개의 프로젝트 개발 경험과
                                        유지보수 경험이 있습니다.
                                    </li>
                                    <li>
                                        jquery 를 활용하여 {{ progressCntList.jquery }} 개 프로젝트 경험과
                                        Vue.js 를 활용한 {{ progressCntList.vue }} 개의 프로젝트 경험이 있습니다.
                                    </li>
                                    <li>
                                        리눅스 CentOs 와 Ubuntu 에서 Apache, Nginx 를 통해 웹 홈페이지 구동 경험과
                                        SSL 인증서 작업 경험이 있습니다.
                                    </li>
                                    <li>
                                        Mysql 과 MariaDB 를 활용하여 DB 설계와 쿼리를 주로 사용하였고, 
                                        유지보수로 OracleDB 도 사용한 경험이 있습니다.
                                    </li>
                                    <li>
                                        현재 재직중인 회사에 약 40개 정도의 프로젝트를 유지보수 하고 있습니다.
                                    </li>
                                </ul>
                            </article>
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
                progressList: [],
                progressCntList : [],
                total : 0,
            }
        },
        mounted() {
            this.doSearch()
            
        },
        methods: {
            async doSearch() {
                let me = this;
                
                await axios.get('/tom/personalList', { params: [] }).then(response => {
                    me.progressList = response.data.progressList
                    me.progressCntList = response.data.progressCntList
                    me.total = response.data.total
                });
            },
        }

    });
</script>

<style>
  /* progress style */
  progress[value] {
    /* Get rid of the default appearance */
    appearance: none;
    /* Add dimensions */
    width: 100%;
    height: 20px;
    /* Get rid of the default border in Firefox/IE10+ */
    border: none;
    /* Add some margin between the progress bar and its container */
    margin: 10px 0;
  }

  /* WebKit/Blink browsers */
  progress[value]::-webkit-progress-bar {
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
  }

  progress[value]::-webkit-progress-value {
    background-color: #1abc9c;
    border-radius: 5px;
    /* Add CSS animation */
    animation: animate-value 2s ease-out;
  }

  /* Firefox */
  progress[value]::-moz-progress-bar {
    background-color: #1abc9c;
    border-radius: 5px;
    /* Add CSS animation */
    animation: animate-value 2s ease-out;
  }

  /* CSS animation */
  @keyframes animate-value {
    0% {
      width: 0%;
    }
  }

  .progress-tooltip {
  position: absolute;
  background-color: #333;
  color: #fff;
  padding: 5px;
  border-radius: 5px;
  font-size: 12px;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  pointer-events: none;
  opacity: 0;
  transition: opacity 0.3s;
}

.progress-container:hover .progress-tooltip {
  opacity: 1;
}

  li span {
    float: right;
    font-size: 16px;
    font-weight: bold;
    color: #555;
  }
</style>