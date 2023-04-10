<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>개발자 이력서</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: white;
      padding: 1rem;
      text-align: center;
    }

    main {
      display: flex;
      flex-direction: column;
      padding: 1rem;
    }

    section {
      margin-bottom: 2rem;
    }

    h2 {
      border-bottom: 2px solid #333;
      margin-bottom: 1rem;
      padding-bottom: 0.5rem;
    }

    ul, ol {
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 0.5rem;
    }

    .skill-list {
      display: flex;
      flex-wrap: wrap;
    }

    .skill {
      background-color: #f4f4f4;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-right: 0.5rem;
      margin-bottom: 0.5rem;
      padding: 0.5rem;
    }
    section ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    section ul li {
      margin-bottom: 0.5rem;
      font-size: 1.2rem;
      line-height: 1.8rem;
    }

    section ul li strong {
      display: inline-block;
      width: 6rem;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div id ="app">
  <header>
    <h1>이대호 | 웹 개발자</h1>
  </header>
  <main>
    <section>
      <h2>기본정보</h2>
        <ul>  
          <li><strong>이름:</strong> 이대호</li>
          <li><strong>성별:</strong> 남</li>
          <li><strong>생년월일:</strong> 1995년 6월 20일</li>
          <li><strong>이메일:</strong> tomleedh2022@gmail.com</li>
          <li><strong>휴대폰:</strong> 010-8724-0988</li>
          <li><strong>전화번호:</strong> 010-8724-0988</li>
          <li><strong>주소:</strong> 경기 안산시 상록구 일동</li>
        </ul>
    </section>
    
    <section>
      <h2>소개</h2>
      <p>
      안녕하세요, 웹 개발자 이대호입니다. <br />
      2020년 11월부터 개발을 시작하여 약 2년간 PHP 웹 개발, 프론트엔드, 서버 및 데이터베이스 설계 등의 업무를 수행했습니다. <br />
      주 사용 언어는 PHP 이며, 주로 CodeIgniter 프레임워크를 사용했습니다. <br />
      2022년 8월부터는 기존의 PHP 외에도 Vue2, Vue Cli, 그리고 Spring Boot를 사용한 프로젝트 개발과 유지보수를 진행하고 있습니다. <br />
      이 외에도 안드로이드 스튜디오를 통한 웹 앱 개발 및 배포, Xcode와 Swift를 사용한 웹 앱 개발 및 배포, 그리고 파이썬 코드 유지보수 경험이 있습니다. <br />
      </p>
    </section>

    <section>
      <h2>주력기술</h2>
      <ul class="skill-list">
        <li class="skill">PHP</li>
        <li class="skill">CodeIgniter</li>
        <li class="skill">HTML</li>
        <li class="skill">JavaScript</li>
        <li class="skill">Jquery</li>
        <li class="skill">Node</li>
        <li class="skill">Vue</li>
        <li class="skill">Linux(CentOS, Ubuntu)</li>
        <li class="skill">MysqlDB</li>
        <li class="skill">MariaDB</li>
        <li class="skill">Git</li>
      </ul>
    </section>

    <section>
      <h2>사용경험</h2>
      <ul class="skill-list">
        <li class="skill">JAVA</li>
        <li class="skill">Spring boot</li>
        <li class="skill">Mybatis</li>
        <li class="skill">OracleDB</li>
        <li class="skill">Swift</li>
        <li class="skill">Android Studio</li>
        <li class="skill">Python</li>
      </ul>
    </section>

    <section>
      <h2>경력 - 약 2년 6개월</h2>
      <ol>
        <li>
          <h3>(주) 팜존에스엔씨</h3>
          <p>웹 개발자 (2020.11-2022.05) - 사원</p>
        <ul>
          <li>주 사용환경은 PHP5, CodeIgniter, Jquery, MySql, CentOS, Apache, 가상서버 호스팅 기반으로 개발하였습니다.</li>
          <li>디자인을 제외한 웹 게시판 홈페이지, 스마트공장, 전자결재 프로그램 경험이 있습니다.</li>
          <li>서버 셋팅부터 시작하여 DB 설계 등 디자인을 제외한 웹 사이트 구축 경험이 9건 있습니다.</li>
          <li>웹뷰방식으로 안드로이드 및 IOS 웹앱 개발 경험과 FCM 구축 경험이 있습니다.</li>
        </ul>
    </li>
    <li>
      <h3>(주) 스마일소프트</h3>
      <p>웹 개발자 (2022.05-2022.07) - 프리렌서 과장</p>
      <ul>
        <li>주 사용환경은 PHP7, CodeIgniter, Jquery, MySql, Ubuntu, Apache, AWS 기반으로 개발하였습니다.</li>
        <li>JWT 인증방식 로그인과 외부 고객에게 API 요청 사이트 구축, 토스 페이먼츠를 통한 결제 방식으로 사이트를 구축했습니다.</li>
        <li>ASP로 된 사이트를 PHP 7 로 리뉴얼 했었습니다.</li>
      </ul>
    </li>
    <li>
      <h3>(주) 캐럿솔루션즈</h3>
      <p>웹 개발자 (2022.08-) - 매니저</p>
      <ul>
        <li>주 사용환경은 Spring boot, Mybatis, PHP7, 내부 프레임워크, Vue2, Vue3 Cli, MariaDB, CentOS, Apache, Nginx, 네이버클라우드 호스팅 기반으로 개발하였습니다.</li>
        <li>약 40개의 작고 큰 프로젝트를 유지보수 하면서 개발하였고 Spring boot를 사용한 다면진단 프로그램을 개발하였습니다.</li>
        <li>대표적으로 현 B2C 프로젝트에서 불편했던 상담문의를 챗봇으로 연동하고 데이터도 내부 프로젝트와 연동함으로서 사용자의 편의와 더불어 관리자의 편의성도 가져왔습니다.</li>
      </ul>
    </li>
  </ol>
</section>

<section>
  <h2>학력</h2>
  <ol>
    <li>
      <h3>대구과학대학교</h3>
      <p>컴퓨터 정보과 (2014-2020)</p>
      <p>학점 3.6/4.5</p>
    </li>
  </ol>
</section>

<section>
  <h2>자격증</h2>
  <ul>
    <li>정보처리산업기사 (2020)</li>
    <li>정보보호관리사 (2019)</li>
    <li>3D시뮬레이션실무능력자격 2급 (2019)</li>
  </ul>
</section>

<section>
  <h2>프로젝트 - <a href="/tom/projectList" target="_blank">더 보기</a></h2>
  <ol>
    <li v-for="(row, i) in list.Notice" style="margin-bottom : 65px;">
      <h3>{{ row.project_name }}</h3>
      <p>
          <b>기한</b> :
          {{ row.project_date }}
      </p>
      <p>
          <b>인원</b> :
          {{ row.project_person }}
      </p>
      <p>
          <b>역할</b> :
          {{ row.project_part }}
      </p>
      <p>
          <b>개발환경</b> :
          {{ row.project_setting }}
      </p>
      <p>
          <b>기능</b> :
          {{ row.project_function }}
      </p>
      <p v-if="row.files.length > 0">
          <b>파일</b> :
          <span class="mr-05 ml-20" v-for="file in row.files">
              <a style="margin-right: 20px;" :href="file.file_path" target="_blanck">- {{ file.file_name }}</a>
          </span>
        </p>
      <p>
          <b>URL</b> :
          <span v-html="row.project_url"></span>
      </p>
    </li>
  </ol>
</section>
</main>
</div>
</body>
</html>


<script src="/assets/js/axios.min.js"></script>
<script src="/assets/js/vue.js"></script>
<script src="/assets/js/class/channeltalk.js"></script>
<script>
    // axios.defaults.baseURL = 'http://api.486diary.shop'
    axios.defaults.baseURL = '/api'

    const CT_UID = ""
      const CT_KNAME = ""
      const CT_SETTING = {
            isButtonHide : false
      }

      const channelTalk = new ChannelTalk(CT_UID, CT_KNAME, CT_SETTING)
      channelTalk.init();
</script>

<script>
    const vm = new Vue({
        // vm : view model의 약자
        el: "#app",
        data() {
            return {
                list: {
                    PHP: [],
                    JAVA: [],
                    VUE: [],
                    jQuery : [],
                    Notice : [],
                },
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
                    'pageSize': 999
                }
                axios.get('/tom/projectList', { params: info }).then(response => {

                    for (let [i, row] of response.data.list.entries()) {
                        switch (row.project_backend) {
                            case "PHP":
                                me.list.PHP.push(row)
                                break;
                            case "JAVA":
                                me.list.JAVA.push(row)
                        }

                        switch (row.project_frontend) {
                            case "VUE":
                                me.list.VUE.push(row)
                                break;
                            case "JQUERY":
                                me.list.jQuery.push(row)
                                break;
                        }
                        switch (row.project_notice) {
                            case "1":
                            case 1:
                                me.list.Notice.push(row)
                              break;
                        }
                    }

                    me.total = response.data.total
                });
            }
           
        }

    });
</script>