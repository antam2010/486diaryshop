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
  </style>
</head>
<body>
  <header>
    <h1>이대호 | 웹 개발자</h1>
  </header>
  <main>
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
        <li class="skill">MysqlDB, MariaDB</li>
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
      <h2>경력</h2>
      <ol>
        <li>
          <h3>(주) 팜존에스엔씨</h3>
          <p>웹 개발자 (2020.11-2022.05) - 사원</p>
        <ul>
          <li>주 사용환경은 PHP5, CodeIgniter, Jquery, MySql, CentOS 기반으로 개발하였습니다.</li>
          <li>디자인을 제외한 웹 게시판 홈페이지, 스마트공장, 전자결재 프로그램 경험이 있습니다.</li>
          <li>서버 셋팅부터 시작하여 DB 설계 등 디자인을 제외한 웹 사이트 구축 경험이 9건 있습니다.</li>
          <li>웹뷰방식으로 안드로이드 및 IOS 웹앱 개발 경험과 FCM 구축 경험이 있습니다.</li>
        </ul>
    </li>
    <li>
      <h3>(주) 스마일소프트</h3>
      <p>웹 개발자 (2022.05-2022.07) - 프리렌서 과장</p>
      <ul>
        <li>주 사용환경은 PHP7, CodeIgniter, Jquery, MySql, Ubuntu 기반으로 개발하였습니다.</li>
        <li>JWT 인증방식 로그인과 외부 고객에게 API 요청 사이트 구축, 토스 페이먼츠를 통한 결제 방식으로 사이트를 구축했습니다.</li>
        <li>ASP로 된 사이트르 PHP 7 로 리뉴얼 했었습니다.</li>
      </ul>
    </li>
  </ol>
</section>

<section>
  <h2>학력</h2>
  <ol>
    <li>
      <h3>모교 대학교</h3>
      <p>컴퓨터 공학 학사 (2014-2018)</p>
    </li>
  </ol>
</section>

<section>
  <h2>자격증</h2>
  <ul>
    <li>정보처리기사 (2019)</li>
    <li>웹 프로그래밍 전문가 (2017)</li>
  </ul>
</section>

<section>
  <h2>프로젝트</h2>
  <ol>
    <li>
      <h3>프로젝트 A</h3>
      <p>설명: 프로젝트 A에 대한 간략한 설명을 작성해주세요.</p>
    </li>
    <li>
      <h3>프로젝트 B</h3>
      <p>설명: 프로젝트 B에 대한 간략한 설명을 작성해주세요.</p>
    </li>
  </ol>
</section>
</main>
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