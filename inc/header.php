<header id="header">
    <div class="inner">

        <!-- Logo -->
        <a href="/" class="logo">
            <span class="symbol"><img src="/images/logo.svg" alt="" /></span><span class="title">486diary</span>
        </a>

        <!-- Nav -->
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
            </ul>
        </nav>

        <!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="/">Home</a></li>
				<!-- <li><a href="/gallery">Gallery</a></li>
				<li><a href="/news">News</a></li> -->
                <!-- <li><a href="/signature">전자결재</a></li> -->
				<li><a href="/tom/projectList">경력기술서</a></li>
                <li><a href="/tom/personalList">자기소개서</a></li>
				<!-- <li><a href="elements.html">Elements</a></li> -->
			</ul>
		</nav>

    </div>
</header>


<!-- Scripts -->
<script src="/assets/js/axios.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/browser.min.js"></script>
<script src="/assets/js/breakpoints.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/vue.js"></script>
<script src="/assets/js/common.js"></script>
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




