!function(){var t=sessionStorage.getItem("__CONFIG__"),e=document.getElementsByTagName("html")[0],i={theme:"light",nav:"vertical",layout:{mode:"fluid",position:"fixed"},topbar:{color:"light"},menu:{color:"dark"},sidenav:{size:"default",user:!1}};this.html=document.getElementsByTagName("html")[0],config=Object.assign(JSON.parse(JSON.stringify(i)),{});var o=this.html.getAttribute("data-bs-theme");config.theme=null!==o?o:i.theme;var a=this.html.getAttribute("data-layout");config.nav=null!==a?"topnav"===a?"horizontal":"vertical":i.nav;var n=this.html.getAttribute("data-layout-mode");config.layout.mode=null!==n?n:i.layout.mode;var l=this.html.getAttribute("data-layout-position");config.layout.position=null!==l?l:i.layout.position;var r=this.html.getAttribute("data-topbar-color");config.topbar.color=null!=r?r:i.topbar.color;var s=this.html.getAttribute("data-sidenav-size");config.sidenav.size=null!==s?s:i.sidenav.size;var u=this.html.getAttribute("data-sidenav-user");config.sidenav.user=null!==u||i.sidenav.user;var d=this.html.getAttribute("data-menu-color");if(config.menu.color=null!==d?d:i.menu.color,window.defaultConfig=JSON.parse(JSON.stringify(config)),null!==t&&(config=JSON.parse(t)),window.config=config,"topnav"===e.getAttribute("data-layout")?config.nav="horizontal":config.nav="vertical",config&&(e.setAttribute("data-bs-theme",config.theme),e.setAttribute("data-layout-mode",config.layout.mode),e.setAttribute("data-menu-color",config.menu.color),e.setAttribute("data-topbar-color",config.topbar.color),e.setAttribute("data-layout-position",config.layout.position),"vertical"==config.nav)){let t=config.sidenav.size;window.innerWidth<=767?t="full":window.innerWidth>=767&&window.innerWidth<=1140&&"full"!==self.config.sidenav.size&&(t="condensed"),e.setAttribute("data-sidenav-size",t),config.sidenav.user&&"true"===config.sidenav.user.toString()?e.setAttribute("data-sidenav-user",!0):e.removeAttribute("data-sidenav-user")}}();
//# sourceMappingURL=config.min-min.js.map