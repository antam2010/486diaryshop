<!DOCTYPE HTML>
<html>

<head>
    <title>이력서</title>
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
                        <h1>이력서</h1>
                        <section>
                            <h3>Summary</h3>
                            <p>
                                안녕하세요 3년차 백엔드 개발자 이대호 입니다. <br />
                                현재 제가 주로 하는 업무는 PHP 웹 개발 및 프론트, 서버와 DB 설계 등 입니다. <br/>
                                주 사용 언어는 PHP 를 사용하며 주로 사용한 프레임워크는 CodeIgniter 입니다.<br />
                                2022.08 부터 Vue2, Vue Cli, Spring boot로 프로젝트 개발과 유지보수 중에 있습니다. <br />
                                그 외에도 안드로이드 스튜디오 웹 앱 개발 배포, Xcode 와 Swift 를 통해 웹 앱 개발 배포 <br />
                                파이썬 코드 유지보수 경험이 있습니다.
                            </p>
                        </section>
                        <section>
                            <h3>Skills</h3>
                            <ul>
                                <li>PHP <progress value="10" max="100"></progress> <span>10%</span></li>
                                <li>HTML5 <progress value="10" max="100"></progress> <span>10%</span></li>
                                <li>JavaScript <progress value="10" max="100"></progress> <span>10%</span></li>
                                <li>jQuery <progress value="10" max="100"></progress> <span>10%</span></li>
                                <li>VUE CLI <progress value="10" max="100"></progress> <span>10%</span></li>
                                <li>JAVA <progress value="10" max="100"></progress> <span>10%</span></li>
                            </ul>
                        </section>
                        <section>
                            <h3>Experience</h3>
                            <article>
                                <h4>Web Developer</h4>
                                <h5>ABC Company</h5>
                                <h6>June 2018 - Present</h6>
                                <ul>
                                    <li>Develop and maintain company website using HTML, CSS, JavaScript, and jQuery</li>
                                    <li>Create and implement responsive design for optimal viewing on all devices</li>
                                    <li>Ensure cross-browser compatibility and web accessibility</li>
                                    <li>Collaborate with marketing team to develop landing pages and other marketing materials</li>
                                </ul>
                            </article>
                            <article>
                                <h4>Front-End Developer</h4>
                                <h5>XYZ Agency</h5>
                                <h6>March 2015 - May 2018</h6>
                                <ul>
                                    <li>Developed and maintained client websites and web applications using HTML, CSS, JavaScript, and jQuery</li>
                                    <li>Designed and implemented responsive layouts for optimal viewing on all devices</li>
                                    <li>Collaborated with back-end developers to integrate front-end code with server-side logic</li>
                                    <li>Ensured cross-browser compatibility and web accessibility</li>
                                </ul>
                            </article>
                        </section>
                        <section>
                            <h3>Education</h3>
                            <article>
                                <h4>Bachelor of Science in Computer Science</h4>
                                <h5>University of ABC</h5>
                                <h6>September 2011 - May 2015</h6>
                            </article>
                        </section>
                        <section>
                            <h3>Certifications</h3>
                            <ul>
                                <li>Certified Web Developer, XYZ Certification</li>
                                <li>Responsive Web Design Certification, ABC Certification</li>
                            </ul>
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
               
            }
        },
        mounted() {
            alert('현재 작업중입니다....')
        },
        methods: {
          
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

  li span {
    float: right;
    font-size: 16px;
    font-weight: bold;
    color: #555;
  }
</style>