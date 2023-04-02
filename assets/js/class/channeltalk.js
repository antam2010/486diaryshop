class ChannelTalk {
    constructor(uid, kname, objSetting) {
      this.channelIoURL = '';
      this.pluginKey = 'e37e7ae0-388a-4fdf-8304-1b3b138157a8';
      this.mobileType = navigator.userAgent.toLowerCase();
      this.channelIoBlock = false;
      this.uid = uid;
      this.kname = kname;
      this.objSetting = objSetting
    }
  
    async init() {
      if (this.mobileType.indexOf('iphone') > -1 || this.mobileType.indexOf('ipad') > -1 || this.mobileType.indexOf('ipod') > -1) {
        this.channelIoBlock = true;
      }
  
      await this.channelIo_init();
      // await ChannelIO('showMessenger');
    }
  
    async channelIo_init() {
      console.log("## channelIo_init start");
      if (this.channelIoBlock) return;
  
      var w = window;
      if (w.ChannelIO) {
        return (window.console.error || window.console.log || function () { })('ChannelIO script included twice.');
      }
      var ch = function () {
        ch.c(arguments);
      };
      ch.q = [];
      ch.c = function (args) {
        ch.q.push(args);
      };
      w.ChannelIO = ch;
      function l() {
        if (w.ChannelIOInitialized) {
          return;
        }
        w.ChannelIOInitialized = true;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
        s.charset = 'UTF-8';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
      }
      if (document.readyState === 'complete') {
        l();
      } else if (window.attachEvent) {
        window.attachEvent('onload', l);
      } else {
        window.addEventListener('DOMContentLoaded', l, false);
        window.addEventListener('load', l, false);
      }
      ChannelIO('boot', {
        "pluginKey": this.pluginKey,
        "customLauncherSelector": ".channel_btn", //해당 아이디값 클릭시 버튼 클릭
        "hideChannelButtonOnBoot": this.objSetting.isButtonHide ?? true, //버튼 숨기기
        "memberId": this.uid, //아이디(UQ)
        // "member": true, //회원여부, 회원일 경우 유니피케이션 발생 시 기준이 됨
        "profile": {
          "email": this.uid,
          "name": this.kname, 
          // "mobileNumber": "",
          "description" : "" //고객 설명
        }
      });
    }
  }
