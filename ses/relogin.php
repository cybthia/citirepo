<!DOCTYPE html>
<html class="cbolui-ddl" lang="en" style="display:block;visibility:visible">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=11,edge">
  <title>Online Banking, Mortgages, Personal Loans, Investing | Citi.com</title>
  <script>
  if(window.location.href.indexOf('/login') > -1) {
    let newRobotsTag = document.createElement('meta');
    newRobotsTag.setAttribute('name', 'robots');
    newRobotsTag.setAttribute('content', 'noindex,nofollow');
    let docHead = document.querySelectorAll('head')[0];
    docHead.appendChild(newRobotsTag);
    console.log('index.html inside bootstrap.js wait function');

    function waitFor(condition, callback) {
      if(!condition()) {
        window.setTimeout(waitFor.bind(null, condition, callback), 100); /* this checks the flag every 100 milliseconds*/
      } else {
        callback();
      }
    }
    var head = document.head || document.getElementsByTagName('head')[0];
    // CSS as text to insert dynamically, fix for no-js error.
    /* Opacity 0f 0 on container div till adobe target js is activated */
    var hideStyle = document.createElement('style');
    hideStyle.type = 'text/css';
    // Check if browser is IE
    var ua = window.navigator.userAgent;
    var isIE = /MSIE|Trident/.test(ua);
    if(!isIE) {
      console.log('browser is not IE, so add test and target css fix for /login', isIE);
      hideStyle.innerText = 'div.citi-outer-container{opacity:0!important}';
    }
    // appends temporary style
    head.appendChild(hideStyle);
    var syncLoadLinks = {
      bootstrap: window['location']['hostname'] === 'www.citi.com' ? 'https://nexus.ensighten.com/citi/na_prod/Bootstrap.js' : 'https://nexus.ensighten.com/citi/na_stage/Bootstrap.js'
    };
    [syncLoadLinks.bootstrap].forEach(function(src, idx, arr) {
      var script = document.createElement('script');
      script.src = src;
      script.async = false;
      document.head.appendChild(script);
      if(idx === 0) {
        waitFor(function() {
          return window.Bootstrapper;
        }, function() {
          Bootstrapper.ensEvent.add(['naAnalyticsPageView'], function() {
            console.log('/login bootstrap call success');
            if(hideStyle.parentNode == head) {
              head.removeChild(hideStyle);
            }
          });
        });
      }
      script.onerror = function() {
        console.log('/login bootstrap call fail');
        if(hideStyle.parentNode == head) {
          head.removeChild(hideStyle);
        }
      };
    });
    // On load remove style if not already removed.
    window.addEventListener('load', function() {
      console.log('/login no bootstrap call');
      if(hideStyle.parentNode == head) {
        head.removeChild(hideStyle);
      }
    });
  }
  </script>
  <link rel="preload" href="https://www.citi.com/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="https://www.citi.com/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="https://www.citi.com/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.woff" as="font" crossorigin="anonymous">
  <script type="application/ld+json">{ "@context": "https://schema.org", "@type": "WebPage", "name": "Online Banking, Mortgages, Personal Loans, Investing - Citi.com", "url": "https://www.citi.com", "description": "Open a bank account, apply for a personal loan or home equity line of credit, or start investing in your financial future with Citi. Learn more about our range of services.", "keywords": "banking, citi, financial services, checking account, savings account, credit cards" }</script>
  <script type="application/ld+json">{ "@context": "https://schema.org", "@type": "WebSite", "url": "https://www.citi.com", "potentialAction": { "@type": "SearchAction", "target": "https://online.citi.com/US/JSO/portal/smartSearch.do?searchQuery={search_term_string}", "query-input": "required name=search_term_string" } }</script>
  <script type="application/ld+json">{ "@context": "http://schema.org", "@type": "Organization", "url": "https://www.citi.com", "logo": "https://www.citi.com/CRD/images/medium_retina/citi_logo.png", "name": "Citibank", "description": "Citibank is the consumer division of financial services multinational Citigroup. Citibank was founded in 1812 as the City Bank of New York, and later became First National City Bank of New York. Citibank provides credit cards, mortgages, personal loans, commercial loans, and lines of credit.", "parentorganization": "Citigroup", "contactPoint": [ { "@type": "ContactPoint", "telephone": "+1-800-347-4934", "contactType": "Consumer Customer Service" }, { "@type": "ContactPoint", "telephone": "+1-800-325-2865", "contactType": "Consumer TTY Customer Service" }, { "@type": "ContactPoint", "telephone": "+1-866-422-3091", "contactType": "Business Customer Service" }, { "@type": "ContactPoint", "telephone": "+1-800-325-2865", "contactType": "Business TTY Customer Service" }, { "@type": "ContactPoint", "telephone": "+1-800-950-5114", "contactType": "Lost/Stolen Customer Service" }, { "@type": "ContactPoint", "telephone": "+1-800-325-2865", "contactType": "Lost/Stolen TTY Customer Service" } ], "sameAs": [ "https://www.facebook.com/citibank", "https://twitter.com/Citibank/", "https://www.youtube.com/citi" ] }</script>
  <script type="application/ld+json">{ "@context": "http://schema.org", "@type": "ItemList", "itemListElement": [ { "@type": "SiteNavigationElement", "position": 1, "name": "Credit Cards", "description": "Compare Citi credit card offers or login to your existing account.", "url": "https://www.citi.com/credit-cards/home" }, { "@type": "SiteNavigationElement", "position": 2, "name": "Banking", "description": "Access your bank account or open a checking, savings or certificate of deposit account online.", "url": "https://online.citi.com/US/banking/citi.action?ID=banking-overview" }, { "@type": "SiteNavigationElement", "position": 3, "name": "Lending", "description": "Citibank?? offers a wide assortment of bank loans and lending products to fit your financial outlook.", "url": "https://online.citi.com/US/JRS/pands/detail.do?ID=LinesLoansOverview" }, { "@type": "SiteNavigationElement", "position": 4, "name": "Investing", "description": "Discover investing strategies and building your portfolio with Citi.", "url": "https://online.citi.com/US/JRS/pands/detail.do?ID=FinancialGoals" }, { "@type": "SiteNavigationElement", "position": 5, "name": "Citigold", "description": "Citigold - comprehensive wealth management.", "url": "https://online.citi.com/US/JRS/pands/detail.do?ID=CitigoldOverview" } ] }</script>
  <script>
  window.citiData = {
    pageName: "Homepage",
    channel: "",
    siteSection1: "",
    siteSection2: "",
    siteSection3: "",
    siteSection4: "",
    pageCat: "",
    country: "",
    pageLanguage: "",
    localPageName: "",
    pageDef: "",
    platform: "",
    domain: "",
    responsive: "",
    loginStatus: "",
    defaultPageView: !1
  };
  </script>
  <script defer>
  var num = Math.floor(5e15 * Math.random() + 1),
    src = "online.citi.com" == window.location.hostname || "www.citi.com" == window.location.hostname ? "https://mpsnare.iesnare.com/snare.js?_=" + num : "https://ci-mpsnare.iovation.com/snare.js?_=" + num,
    script = document.createElement("script");
  script.setAttribute("src", src), script.async = !0, document.getElementsByTagName("head")[0].appendChild(script);
  </script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/snare.js" async></script>
  <script>
  const docSrc = window.location.hostname;
  if(docSrc !== 'online.citi.com' && docSrc !== 'www.citi.com') {
    let newRobotsTag = document.createElement('meta');
    newRobotsTag.setAttribute('name', 'robots');
    newRobotsTag.setAttribute('content', 'noindex,nofollow');
    let docHead = document.querySelectorAll('head')[0];
    docHead.appendChild(newRobotsTag);
  }
  </script>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" type="image/x-icon" href="https://www.citi.com/cbol-pre-login-static-assets/assets/favicon.ico">
  <script>
  // script to check performance (https://web.dev/fcp/#measure-fcp-in-javascript)
  const observer = new PerformanceObserver((entryList) => {
    for(const entry of entryList.getEntriesByName('first-contentful-paint')) {
      console.log('FCP candidate:', entry.startTime, entry);
    }
  });
  observer.observe({
    type: 'paint',
    buffered: true
  });
  </script>
  <style>
  .jamp.preload {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    margin: 0
  }
  
  @keyframes spinner {
    to {
      transform: rotate(360deg)
    }
  }
  
  .jamp.preload .loading {
    background-image: url(data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.1.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2030%2030%22%20style%3D%22enable-background%3Anew%200%200%2030%2030%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.Drop_x0020_Shadow%7Bfill%3Anone%3B%7D%0A%09.Round_x0020_Corners_x0020_2_x0020_pt%7Bfill%3A%23FFFFFF%3Bstroke%3A%23000000%3Bstroke-miterlimit%3A10%3B%7D%0A%09.Live_x0020_Reflect_x0020_X%7Bfill%3Anone%3B%7D%0A%09.Bevel_x0020_Soft%7Bfill%3Aurl%28%23SVGID_1_%29%3B%7D%0A%09.Dusk%7Bfill%3A%23FFFFFF%3B%7D%0A%09.Foliage_GS%7Bfill%3A%23FFDD00%3B%7D%0A%09.Pompadour_GS%7Bfill-rule%3Aevenodd%3Bclip-rule%3Aevenodd%3Bfill%3A%2344ADE2%3B%7D%0A%09.st0%7Bfill%3Anone%3B%7D%0A%09.st1%7Bfill%3A%23056EAE%3B%7D%0A%3C/style%3E%0A%3ClinearGradient%20id%3D%22SVGID_1_%22%20gradientUnits%3D%22userSpaceOnUse%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%220.7071%22%20y2%3D%220.7071%22%3E%0A%09%3Cstop%20%20offset%3D%220%22%20style%3D%22stop-color%3A%23DEDFE3%22/%3E%0A%09%3Cstop%20%20offset%3D%220.1738%22%20style%3D%22stop-color%3A%23D8D9DD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.352%22%20style%3D%22stop-color%3A%23C9CACD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.5323%22%20style%3D%22stop-color%3A%23B4B5B8%22/%3E%0A%09%3Cstop%20%20offset%3D%220.7139%22%20style%3D%22stop-color%3A%23989A9C%22/%3E%0A%09%3Cstop%20%20offset%3D%220.8949%22%20style%3D%22stop-color%3A%23797C7E%22/%3E%0A%09%3Cstop%20%20offset%3D%221%22%20style%3D%22stop-color%3A%23656B6C%22/%3E%0A%3C/linearGradient%3E%0A%3Cg%3E%0A%09%3Crect%20x%3D%220%22%20class%3D%22st0%22%20width%3D%2230%22%20height%3D%2230%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M2.2%2C17.5C2.1%2C16.7%2C2%2C15.8%2C2%2C15C2%2C7.8%2C7.8%2C2%2C15%2C2s13%2C5.8%2C13%2C13c0%2C0.8-0.1%2C1.7-0.2%2C2.5h2%0A%09%09c0.1-0.8%2C0.2-1.6%2C0.2-2.5c0-8.3-6.7-15-15-15S0%2C6.7%2C0%2C15c0%2C0.8%2C0.1%2C1.7%2C0.2%2C2.5H2.2z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A);
    -webkit-animation: spinner 1160ms infinite linear;
    animation: spinner 1160ms infinite linear
  }
  
  .jamp.preload .img {
    background-position: 0 0;
    background-repeat: no-repeat;
    background-size: contain;
    margin-right: 3px;
    width: 30px;
    height: 30px;
    display: inline-block
  }
  </style>
  <link rel="stylesheet" href="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/styles.83727b5f4bed338db821.css">
  <style></style>
  <style>
  .mfa-screen-alignment[_ngcontent-ssr-c134] {
    margin-left: 20px!important
  }
  </style>
  <style>
  .citi-container[_ngcontent-ssr-c91] {
    max-width: 1440px;
    margin: 0 auto;
    min-height: 650px;
    padding: 40px 20px 0
  }
  
  .fullbleedFix[_ngcontent-ssr-c91] {
    margin: 0;
    padding: 0;
    max-width: 100%
  }
  
  [_nghost-ssr-c91] .fullbleedFix .row {
    margin-left: 0;
    margin-right: 0
  }
  
  .citi-panel-wrapper[_ngcontent-ssr-c91] {
    display: flex
  }
  
  .citi-panel-wrapper[_ngcontent-ssr-c91] .content-panel[_ngcontent-ssr-c91] {
    flex: 3 0 0
  }
  
  .citi-panel-wrapper[_ngcontent-ssr-c91] .search-panel[_ngcontent-ssr-c91] {
    flex: 1 0 0;
    border-left: 1px solid #d6d6d6;
    background-color: #fff
  }
  
  .cbolui-cds[_ngcontent-ssr-c91] .citi-panel-wrapper .citi-search-panel .row {
    display: block!important;
    margin-left: -10px!important;
    margin-right: -10px!important
  }
  
  .citi-panel-wrapper .content-panel citi-hero>section {
    width: 100%!important;
    left: 0!important
  }
  
  @media screen and (max-width:991.9px) {
    .citi-panel-wrapper[_ngcontent-ssr-c91] .search-panel[_ngcontent-ssr-c91] {
      background-color: #fff!important
    }
    .citi-panel-wrapper[_ngcontent-ssr-c91] .content-panel[_ngcontent-ssr-c91] {
      display: none
    }
  }
  
  @media screen and (max-width:768px) {
    .citi-panel-wrapper[_ngcontent-ssr-c91] .search-panel[_ngcontent-ssr-c91] {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 100000!important;
      background-color: #fff!important
    }
    .citi-panel-wrapper[_ngcontent-ssr-c91] .content-panel[_ngcontent-ssr-c91] {
      display: none
    }
  }
  
  @media (min-width:768px) and (max-width:1450px) {
    .citi-panel-wrapper[_ngcontent-ssr-c91] .dashboard-container dashboard-fico-tile,
    .citi-panel-wrapper[_ngcontent-ssr-c91] .dashboard-container dashboard-recent-activity-tile,
    .citi-panel-wrapper[_ngcontent-ssr-c91] .dashboard-container quick-action {
      width: 100%!important;
      display: flow-root!important
    }
    .citi-panel-wrapper[_ngcontent-ssr-c91] .dashboard-container .selected-account-arrow {
      left: 262px!important
    }
    .citi-panel-wrapper[_ngcontent-ssr-c91] .dashboard-container .left-field {
      max-width: 300px!important;
      flex: 0 0 300px!important
    }
    .citi-panel-wrapper[_ngcontent-ssr-c91] .dashboard-container .center-field {
      max-width: calc(100vw - 648px)!important
    }
  }
  </style>
  <style>
  .ivr-cta-wrapper[_ngcontent-ssr-c171] {
    text-align: right
  }
  
  .citi-bot[_ngcontent-ssr-c171] {
    height: 100%;
    width: 100%;
    background: #0e2a48;
    text-align: start;
    border-radius: 8px;
    padding: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: none
  }
  
  .citi-bot-header[_ngcontent-ssr-c171] {
    color: #fff;
    font-family: interstate_Bold;
    margin: 8px;
    padding: 0 16px
  }
  
  .citi-bot-content[_ngcontent-ssr-c171] {
    color: #eee;
    margin: 8px;
    padding: 0 16px;
    line-height: 120%
  }
  
  citi-icon2[_ngcontent-ssr-c171] svg path {
    fill: #00bdf2
  }
  
  .citi-bot-link[_ngcontent-ssr-c171] {
    font-family: interstate_Bold;
    color: #00bdf2;
    margin: 0
  }
  
  .citi-bot-link-container[_ngcontent-ssr-c171] {
    display: flex;
    align-items: center;
    white-space: nowrap
  }
  
  .citi-bot-link-container[_ngcontent-ssr-c171] citi-icon2[_ngcontent-ssr-c171] svg>path {
    stroke-width: 3;
    stroke: #00bdf2
  }
  
  @media (max-width:767px) {
    #ivr-modal .header-level-2 {
      line-height: 2rem
    }
  }
  
  @media (max-width:991px) {
    .citi-bot[_ngcontent-ssr-c171],
    .ivr-cta-wrapper[_ngcontent-ssr-c171] {
      text-align: center
    }
    .citi-bot[_ngcontent-ssr-c171] {
      display: block
    }
    .citi-bot-header[_ngcontent-ssr-c171] {
      margin-top: 0
    }
    .citi-bot-content[_ngcontent-ssr-c171] {
      padding: 0
    }
    .citi-bot-link-container[_ngcontent-ssr-c171] {
      display: flex;
      justify-content: center;
      align-items: center
    }
  }
  
  .citi-bot[_ngcontent-ssr-c171]:hover {
    cursor: pointer
  }
  
  .citi-bot-divider[_ngcontent-ssr-c171] {
    border-top: 1.5px solid #666;
    opacity: 1%;
    margin-bottom: 16px
  }
  
  .citi-bot-divider-container[_ngcontent-ssr-c171] {
    margin-top: 42px
  }
  
  @media (-ms-high-contrast:active),
  (-ms-high-contrast:none) {
    .citi-bot-link-container[_ngcontent-ssr-c171] {
      white-space: normal
    }
  }
  </style>
  <style>
  .modal.in {
    z-index: 9999999999!important
  }
  
  .citi-modal-backdrop {
    z-index: 999999999!important
  }
  </style>
  <style>
  [_nghost-ssr-c88] citi-input .form-group {
    padding-left: 0;
    padding-right: 0
  }
  
  [_nghost-ssr-c88] citi-modal div .citi-modal-box .citi-modal-close {
    padding-top: 5px!important
  }
  
  [_nghost-ssr-c88] citi-modal div .citi-modal-box .citi-modal-controls {
    padding-top: 0!important;
    padding-bottom: 10px!important
  }
  </style>
  <style>
  .primary-header[_ngcontent-ssr-c70] {
    box-shadow: 0 1px 5px rgba(0, 0, 0, .125);
    position: relative;
    z-index: 9999
  }
  
  .alternateSkipNav[_ngcontent-ssr-c70] {
    position: absolute;
    transform: translateY(-100%);
    padding: 3px
  }
  
  .alternateSkipNav[_ngcontent-ssr-c70]:focus {
    transform: translateY(0);
    position: relative!important
  }
  
  .coBranding[_ngcontent-ssr-c70] {
    max-width: 1440px;
    margin: 0 auto
  }
  
  .ie-popup[_ngcontent-ssr-c70] #ie-img[_ngcontent-ssr-c70] {
    height: 262px;
    width: 168px;
    margin-bottom: 30px;
    margin-top: 10px
  }
  
  .ie-popup[_ngcontent-ssr-c70] .modal-header[_ngcontent-ssr-c70] {
    padding-right: 24px!important;
    border-bottom: none!important;
    padding-top: 24px!important
  }
  
  .ie-popup[_ngcontent-ssr-c70] .ie-modal-head[_ngcontent-ssr-c70] {
    font-size: 42px;
    font-family: Interstate_Light, sans-serif;
    line-height: 50px
  }
  
  .ie-popup[_ngcontent-ssr-c70] #ie-body[_ngcontent-ssr-c70] {
    font-size: 16px;
    font-family: Interstate_Light, sans-serif;
    line-height: 24px
  }
  
  .ie-popup[_ngcontent-ssr-c70] #ie-heading[_ngcontent-ssr-c70] {
    padding-left: 0!important
  }
  
  .ie-popup[_ngcontent-ssr-c70] #ie-heading[_ngcontent-ssr-c70],
  .ie-popup[_ngcontent-ssr-c70] #ie-image[_ngcontent-ssr-c70] {
    padding-right: 0!important
  }
  
  .ie-popup[_ngcontent-ssr-c70] #ie-desc[_ngcontent-ssr-c70] {
    margin-top: 8px
  }
  
  .ie-popup[_ngcontent-ssr-c70] #IE-date[_ngcontent-ssr-c70] {
    font-family: Interstate_Regular, sans-serif!important
  }
  
  .ie-popup[_ngcontent-ssr-c70] #ie-here[_ngcontent-ssr-c70] {
    color: #056dae
  }
  
  .ie-popup[_ngcontent-ssr-c70] .modal-footer[_ngcontent-ssr-c70] {
    border-top: none
  }
  
  @media screen and (max-width:580px) {
    #IE_img[_ngcontent-ssr-c70] {
      display: none
    }
  }
  </style>
  <script src="https://nexus.ensighten.com/citi/na_prod/Bootstrap.js" async defer></script>
  <style>
  [_nghost-ssr-c73] .brandingSprite {
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline-block
  }
  
  [_nghost-ssr-c73] .brandingSprite .equalHousing,
  [_nghost-ssr-c73] .brandingSprite .fdic {
    cursor: default!important
  }
  
  [_nghost-ssr-c73] .footer {
    position: static;
    background: #333
  }
  
  citi-social-media[_ngcontent-ssr-c73] .social .content .socialItems citi-modal .modal .modal-dialog {
    margin: 40px auto!important
  }
  
  citi-social-media[_ngcontent-ssr-c73] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-header {
    padding: 15px!important;
    min-height: 16.5px
  }
  
  citi-social-media[_ngcontent-ssr-c73] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-body {
    padding-right: 40px;
    padding-left: 40px
  }
  
  citi-social-media[_ngcontent-ssr-c73] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-footer {
    text-align: right;
    border-top: 1px solid #e5e5e5;
    width: 100%;
    padding: 40px 15px 15px!important;
    border: none!important
  }
  
  citi-social-media[_ngcontent-ssr-c73] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-footer citi-cta a {
    color: #fff;
    background: #056dae;
    line-height: 46px;
    min-width: 220px;
    position: relative;
    line-height: 34px;
    vertical-align: middle;
    text-align: center;
    font-size: 16px;
    font-size: 1rem;
    font-family: Interstate_Bold, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-weight: 700;
    border-radius: 6px;
    display: inline-block;
    margin: 20px 20px 0 0;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
  }
  
  @media screen and (max-width:800px) {
    #nebula_div_btn[_ngcontent-ssr-c73] {
      display: none
    }
  }
  </style>
  <style>
  a[_ngcontent-ssr-c71],
  abbr[_ngcontent-ssr-c71],
  acronym[_ngcontent-ssr-c71],
  address[_ngcontent-ssr-c71],
  applet[_ngcontent-ssr-c71],
  article[_ngcontent-ssr-c71],
  aside[_ngcontent-ssr-c71],
  audio[_ngcontent-ssr-c71],
  b[_ngcontent-ssr-c71],
  big[_ngcontent-ssr-c71],
  blockquote[_ngcontent-ssr-c71],
  body[_ngcontent-ssr-c71],
  canvas[_ngcontent-ssr-c71],
  caption[_ngcontent-ssr-c71],
  center[_ngcontent-ssr-c71],
  cite[_ngcontent-ssr-c71],
  code[_ngcontent-ssr-c71],
  dd[_ngcontent-ssr-c71],
  del[_ngcontent-ssr-c71],
  details[_ngcontent-ssr-c71],
  dfn[_ngcontent-ssr-c71],
  div[_ngcontent-ssr-c71],
  dl[_ngcontent-ssr-c71],
  dt[_ngcontent-ssr-c71],
  em[_ngcontent-ssr-c71],
  embed[_ngcontent-ssr-c71],
  fieldset[_ngcontent-ssr-c71],
  figcaption[_ngcontent-ssr-c71],
  figure[_ngcontent-ssr-c71],
  footer[_ngcontent-ssr-c71],
  form[_ngcontent-ssr-c71],
  h1[_ngcontent-ssr-c71],
  h2[_ngcontent-ssr-c71],
  h3[_ngcontent-ssr-c71],
  h4[_ngcontent-ssr-c71],
  h5[_ngcontent-ssr-c71],
  h6[_ngcontent-ssr-c71],
  header[_ngcontent-ssr-c71],
  hgroup[_ngcontent-ssr-c71],
  html[_ngcontent-ssr-c71],
  i[_ngcontent-ssr-c71],
  iframe[_ngcontent-ssr-c71],
  img[_ngcontent-ssr-c71],
  ins[_ngcontent-ssr-c71],
  kbd[_ngcontent-ssr-c71],
  label[_ngcontent-ssr-c71],
  legend[_ngcontent-ssr-c71],
  li[_ngcontent-ssr-c71],
  mark[_ngcontent-ssr-c71],
  menu[_ngcontent-ssr-c71],
  nav[_ngcontent-ssr-c71],
  object[_ngcontent-ssr-c71],
  ol[_ngcontent-ssr-c71],
  output[_ngcontent-ssr-c71],
  p[_ngcontent-ssr-c71],
  pre[_ngcontent-ssr-c71],
  q[_ngcontent-ssr-c71],
  ruby[_ngcontent-ssr-c71],
  s[_ngcontent-ssr-c71],
  samp[_ngcontent-ssr-c71],
  section[_ngcontent-ssr-c71],
  small[_ngcontent-ssr-c71],
  span[_ngcontent-ssr-c71],
  strike[_ngcontent-ssr-c71],
  strong[_ngcontent-ssr-c71],
  sub[_ngcontent-ssr-c71],
  summary[_ngcontent-ssr-c71],
  sup[_ngcontent-ssr-c71],
  table[_ngcontent-ssr-c71],
  tbody[_ngcontent-ssr-c71],
  td[_ngcontent-ssr-c71],
  tfoot[_ngcontent-ssr-c71],
  th[_ngcontent-ssr-c71],
  thead[_ngcontent-ssr-c71],
  time[_ngcontent-ssr-c71],
  tr[_ngcontent-ssr-c71],
  tt[_ngcontent-ssr-c71],
  u[_ngcontent-ssr-c71],
  ul[_ngcontent-ssr-c71],
  var[_ngcontent-ssr-c71],
  video[_ngcontent-ssr-c71] {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline
  }
  
  article[_ngcontent-ssr-c71],
  aside[_ngcontent-ssr-c71],
  details[_ngcontent-ssr-c71],
  figcaption[_ngcontent-ssr-c71],
  figure[_ngcontent-ssr-c71],
  footer[_ngcontent-ssr-c71],
  header[_ngcontent-ssr-c71],
  hgroup[_ngcontent-ssr-c71],
  menu[_ngcontent-ssr-c71],
  nav[_ngcontent-ssr-c71],
  section[_ngcontent-ssr-c71] {
    display: block
  }
  
  body[_ngcontent-ssr-c71] {
    line-height: 1
  }
  
  ol[_ngcontent-ssr-c71],
  ul[_ngcontent-ssr-c71] {
    list-style: none
  }
  
  blockquote[_ngcontent-ssr-c71],
  q[_ngcontent-ssr-c71] {
    quotes: none
  }
  
  blockquote[_ngcontent-ssr-c71]:after,
  blockquote[_ngcontent-ssr-c71]:before,
  q[_ngcontent-ssr-c71]:after,
  q[_ngcontent-ssr-c71]:before {
    content: "";
    content: none
  }
  
  table[_ngcontent-ssr-c71] {
    border-collapse: collapse;
    border-spacing: 0
  }
  
  .journeyLogo[_ngcontent-ssr-c71] {
    display: flex;
    cursor: pointer
  }
  
  .divider[_ngcontent-ssr-c71] {
    border-left: 3.5px solid #d3d3d3;
    height: 28px;
    margin-top: 23px;
    margin-right: 10px
  }
  
  .webLogo[_ngcontent-ssr-c71] {
    max-width: 100%;
    max-height: 100%;
    display: block
  }
  
  .box[_ngcontent-ssr-c71] {
    width: 180px;
    display: flex;
    justify-content: left;
    align-items: center
  }
  
  .webDiv[_ngcontent-ssr-c71] {
    margin-left: 5px
  }
  
  .box.small[_ngcontent-ssr-c71] {
    height: 72px
  }
  
  .box.small[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
    height: 40px
  }
  
  @media screen and (min-width:1000px) {
    .divider[_ngcontent-ssr-c71] {
      margin-left: 35px;
      height: 37px;
      margin-top: 27px
    }
    .box.small[_ngcontent-ssr-c71] {
      height: 88px
    }
    .box.small[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
      height: 48px
    }
    .webDiv[_ngcontent-ssr-c71] {
      margin-left: 15px
    }
  }
  
  .banner[_ngcontent-ssr-c71] {
    height: 88px;
    background-color: #fff!important
  }
  
  @media (max-width:990px) {
    .banner[_ngcontent-ssr-c71] {
      height: 72px
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] {
    height: 100%;
    padding: 0 35px 0 20px;
    position: relative;
    display: flex;
    justify-content: space-between
  }
  
  @media (max-width:990px) {
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] {
      padding: 0
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpc[_ngcontent-ssr-c71] {
    height: 88px;
    width: auto;
    padding-bottom: 20px;
    padding-left: 17px
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpc[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
    height: auto;
    width: auto
  }
  
  @media (max-width:990px) {
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpc[_ngcontent-ssr-c71] {
      height: 72px;
      width: auto;
      padding: 0
    }
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpc[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
      height: 72px;
      width: auto;
      padding-left: 16px
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpb[_ngcontent-ssr-c71] {
    height: 88px;
    width: auto
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpb[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
    width: auto
  }
  
  @media (max-width:990px) {
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpb[_ngcontent-ssr-c71],
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .cpb[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
      height: 72px;
      width: auto
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .business[_ngcontent-ssr-c71],
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .gold[_ngcontent-ssr-c71],
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .priority[_ngcontent-ssr-c71] {
    height: 88px;
    width: auto;
    padding-top: 28px;
    padding-bottom: 20px;
    padding-left: 14px
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .business[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71],
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .gold[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71],
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .priority[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
    height: 40px;
    width: auto
  }
  
  @media (max-width:990px) {
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .business[_ngcontent-ssr-c71],
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .gold[_ngcontent-ssr-c71],
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .priority[_ngcontent-ssr-c71] {
      height: 72px;
      width: auto;
      padding: 0
    }
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .business[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71],
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .gold[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71],
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .priority[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
      height: 72px;
      width: auto;
      padding-left: 16px
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .att[_ngcontent-ssr-c71] {
    height: auto;
    width: auto;
    padding-top: 16px;
    padding-bottom: 16px;
    padding-left: 37px
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .att[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
    height: 56px;
    width: 188.6px
  }
  
  @media (max-width:990px) {
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .att[_ngcontent-ssr-c71] {
      height: auto;
      width: auto;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 13px
    }
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .att[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
      height: 52px;
      width: 170px
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .default[_ngcontent-ssr-c71] {
    height: 88px;
    width: 88px;
    padding-left: 20px
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .default[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
    height: 88px;
    width: 88px
  }
  
  @media (max-width:990px) {
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .default[_ngcontent-ssr-c71] {
      height: 72px;
      width: 72px;
      padding: 0
    }
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .default[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
      height: 72px;
      width: 72px
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] {
    display: flex
  }
  
  .banner .content-wrap .buttons [_nghost-ssr-c71] child-nav-group -shadowcsshost child-nav-group ul {
    background-color: #fff
  }
  
  .banner .content-wrap .buttons [_nghost-ssr-c71] child-nav-group .subMenuGroupTitle {
    font-family: Interstate-Regular, sans-serif;
    font-size: 12px;
    color: #666;
    letter-spacing: 0;
    line-height: 20px
  }
  
  .banner .content-wrap .buttons [_nghost-ssr-c71] child-nav-group .child-links {
    font-family: Interstate-Light;
    font-size: 16px;
    color: #333;
    letter-spacing: 0;
    line-height: 22px
  }
  
  @media screen and (max-width:1120px) {
    .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] {
      display: none
    }
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .navButton[_ngcontent-ssr-c71] {
    padding-top: 27px;
    padding-bottom: 15px;
    padding-right: 24px
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .navButton[_ngcontent-ssr-c71]:last-child {
    padding-right: 0
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .navButton[_ngcontent-ssr-c71] a[_ngcontent-ssr-c71],
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .navButton[_ngcontent-ssr-c71] button[_ngcontent-ssr-c71] {
    cursor: pointer;
    background: 0 0;
    border: none
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .navButton[_ngcontent-ssr-c71] button[_ngcontent-ssr-c71] {
    padding-top: 0
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .navButton[_ngcontent-ssr-c71] img[_ngcontent-ssr-c71] {
    height: 26px;
    width: 26px;
    margin: auto;
    display: block
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .navButton[_ngcontent-ssr-c71] span[_ngcontent-ssr-c71] {
    display: block;
    padding-top: 8px;
    font-family: Interstate-Regular, sans-serif;
    font-size: 11px;
    color: #666;
    letter-spacing: 0;
    text-align: center
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .subMenuGroupParent[_ngcontent-ssr-c71] {
    width: 226px;
    border: 1px solid #eee;
    background: #fff;
    z-index: 1;
    display: none;
    position: absolute;
    box-shadow: 0 2px 4px rgba(0, 0, 0, .125)
  }
  
  .banner[_ngcontent-ssr-c71] .content-wrap[_ngcontent-ssr-c71] .buttons[_ngcontent-ssr-c71] .subMenuGroupParent[_ngcontent-ssr-c71] .flexColumnContainer[_ngcontent-ssr-c71] {
    padding-left: 40px
  }
  </style>
  <style>
  @charset "UTF-8";
  [_nghost-ssr-c83] {
    overflow-x: hidden
  }
  
  a[_ngcontent-ssr-c83]:focus {
    outline: 5px auto -webkit-focus-ring-color!important;
    outline-offset: -2px
  }
  
  @font-face {
    font-family: Interstate_Light;
    src: url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.eot);
    src: url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.eot?#iefix) format("embedded-opentype"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.woff) format("woff"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.ttf) format("truetype"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.svg#fontname) format("svg");
    font-weight: 400;
    font-style: normal
  }
  
  @media screen and (min-width:700px) and (max-width:1112px) {
    citi-modal[_ngcontent-ssr-c83] .modal {
      margin-top: 12%!important
    }
  }
  
  @media screen and (min-width:1024px) and (max-width:1112px) {
    citi-modal[_ngcontent-ssr-c83] .modal {
      margin-top: 12%!important
    }
  }
  
  @media screen and (min-width:700px) and (max-width:1112px) {
    .modal-dialog {
      width: 84%!important
    }
  }
  
  @font-face {
    font-family: Interstate_Regular;
    src: url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.eot);
    src: url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.eot?#iefix) format("embedded-opentype"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.woff) format("woff"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.ttf) format("truetype"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.svg#fontname) format("svg");
    font-weight: 400;
    font-style: normal
  }
  
  @font-face {
    font-family: Interstate_Bold;
    src: url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.eot);
    src: url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.eot?#iefix) format("embedded-opentype"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.woff) format("woff"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.ttf) format("truetype"), url(cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.svg#fontname) format("svg");
    font-weight: 400;
    font-style: normal
  }
  
  .citialliancedesk[_ngcontent-ssr-c83] {
    display: none!important
  }
  
  .navigationParent[_ngcontent-ssr-c83] {
    width: 100%;
    margin: 0 auto;
    height: 46px;
    position: relative
  }
  
  #signOnFocus[_ngcontent-ssr-c83] {
    color: #fff!important
  }
  
  .child-nav-group3[_ngcontent-ssr-c83],
  .som-redering[_ngcontent-ssr-c83] {
    width: 100%
  }
  
  @media screen and (max-width:991.9px) {
    .child-nav-group3[_ngcontent-ssr-c83],
    .som-redering[_ngcontent-ssr-c83] {
      display: block;
      width: 100%
    }
  }
  
  #openanaccountMainLI[_ngcontent-ssr-c83] #openanaccountsubGroup5[_ngcontent-ssr-c83] {
    display: none!important
  }
  
  .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] {
    display: flex;
    flex-direction: row;
    box-shadow: none;
    transition: all .5s ease-in-out
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navcreditCardMainLI .subMenuMainContainer .flexColumnContainer .subNavtitleMain {
      padding-bottom: 0!important;
      margin-bottom: 0!important
    }
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navcreditCardMainLI .subMenuMainContainer .flexColumnContainer .child-nav-group3 .quickLinks {
      margin-top: 0
    }
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navbankingMainLI .subMenuMainContainer .flexColumnContainer .subNavtitleMain,
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navlendingMainLI .subMenuMainContainer .flexColumnContainer .subNavtitleMain {
      padding-bottom: 0!important;
      margin-bottom: 0!important
    }
  }
  
  .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerATMMainLI #butlerATMmainAnchor5 {
    display: none
  }
  
  @media screen and (max-width:1119.9px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerATMMainLI #butlerATMmainAnchor5 {
      display: block
    }
  }
  
  .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerEspanolMainLI #butlerEspanolmainAnchor6 {
    display: none
  }
  
  @media screen and (max-width:1119.9px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerEspanolMainLI #butlerEspanolmainAnchor6 {
      display: block
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] {
    max-width: 1341px;
    margin: 0 99px 0 0;
    padding: 0 0 0 20px
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] {
      flex-direction: column;
      overflow: hidden;
      background: #fff;
      height: 520px
    }
  }
  
  .main-list-items[_ngcontent-ssr-c83] {
    list-style-type: none;
    margin: 0;
    float: left;
    cursor: pointer;
    display: inline-block
  }
  
  .mainListItems[_ngcontent-ssr-c83] {
    list-style: none
  }
  
  .main-links[_ngcontent-ssr-c83]:focus-visible,
  .signOnMobileLink[_ngcontent-ssr-c83]:focus-visible {
    color: #fff!important
  }
  
  @media only screen and (max-width:1050px) {
    .main-links[_ngcontent-ssr-c83]:focus-visible {
      color: #000!important
    }
  }
  
  .main-links[_ngcontent-ssr-c83] {
    display: block;
    padding: 9px 20px 0;
    color: #fff;
    font-size: 16px;
    line-height: 30px;
    font-family: Interstate_Regular, sans-serif
  }
  
  @media screen and (min-width:1120px) {
    .langBtn[_ngcontent-ssr-c83] {
      display: none
    }
  }
  
  @media screen and (max-width:1119.9px) {
    .langBtn[_ngcontent-ssr-c83] {
      border: 0;
      padding-top: 7px;
      background: 0 0;
      color: #056dae;
      font-family: Interstate_Regular, sans-serif
    }
  }
  
  .langBtn[_ngcontent-ssr-c83] img[_ngcontent-ssr-c83] {
    padding-left: 11px;
    filter: invert(.5) sepia(1) saturate(70) hue-rotate(178deg)
  }
  
  .langBtn[_ngcontent-ssr-c83] span[_ngcontent-ssr-c83] {
    padding-left: 15px
  }
  
  .main-links[_ngcontent-ssr-c83]:hover,
  .main-list-items[_ngcontent-ssr-c83]:hover {
    color: #fff;
    background: #056dae;
    line-height: 30px;
    height: 46px
  }
  
  .addBlueBorderBottom[_ngcontent-ssr-c83] .main-links[_ngcontent-ssr-c83],
  .main-list-items[_ngcontent-ssr-c83]:hover .main-links[_ngcontent-ssr-c83] {
    background: #056dae;
    height: 46px
  }
  
  .productsDesktopIcon[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83],
  .profileDesktopIcon[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83] {
    font-size: 12px;
    line-height: 17px;
    padding-top: 38px
  }
  
  .productsDesktopIcon[_ngcontent-ssr-c83]:before {
    left: 32px
  }
  
  .productsDesktopIcon[_ngcontent-ssr-c83]:before,
  .profileDesktopIcon[_ngcontent-ssr-c83]:before {
    content: "";
    background-repeat: no-repeat;
    background-size: 25px 25px;
    width: 25px;
    height: 25px;
    display: inline-block;
    position: absolute;
    bottom: 25px;
    pointer-events: none
  }
  
  .profileDesktopIcon[_ngcontent-ssr-c83]:before {
    left: 25px
  }
  
  @media screen and (max-width:1120px) {
    .navigationParent[_ngcontent-ssr-c83] {
      height: 50px;
      padding: 0
    }
    #accountssubGroup0[_ngcontent-ssr-c83] .child-nav-group3[_ngcontent-ssr-c83] li:after {
      border-bottom: none;
      margin: 0!important
    }
    .nav-bar-main-ul[_ngcontent-ssr-c83] {
      width: 100%
    }
    .nav-bar-main-ul[_ngcontent-ssr-c83] .main-list-items[_ngcontent-ssr-c83] {
      width: 100%;
      border-top: 1px solid #eee;
      padding-bottom: 0;
      -webkit-tap-highlight-color: transparent
    }
    .nav-bar-main-ul[_ngcontent-ssr-c83] .main-links[_ngcontent-ssr-c83] {
      width: 100%;
      padding: 0 50px;
      color: #000;
      line-height: 40px;
      position: relative;
      top: 9%;
      background: 0 0!important
    }
    .nav-bar-main-ul[_ngcontent-ssr-c83] .main-list-items[_ngcontent-ssr-c83] {
      display: inline-block;
      list-style-type: none;
      background: #fff;
      line-height: 60px;
      position: relative;
      margin: 0;
      cursor: pointer;
      float: none;
      height: 56px
    }
    .nav-bar-main-ul[_ngcontent-ssr-c83] .main-links[_ngcontent-ssr-c83]:hover,
    .nav-bar-main-ul[_ngcontent-ssr-c83] .main-list-items[_ngcontent-ssr-c83]:hover .main-links[_ngcontent-ssr-c83] {
      border-bottom: none;
      padding-bottom: 0;
      background-color: #fff!important;
      height: auto
    }
    .nav-bar-main-ul[_ngcontent-ssr-c83] .addBlueBorderBottom[_ngcontent-ssr-c83] .main-links[_ngcontent-ssr-c83] {
      border-bottom: none;
      padding-bottom: 0;
      height: auto
    }
    #profilesMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:before {
      content: "";
      width: 35px;
      transform: scale(.7);
      background-repeat: no-repeat;
      height: 35px;
      display: inline-block;
      position: absolute;
      top: 3px;
      left: 10px
    }
    .searchForMobile[_ngcontent-ssr-c83] {
      display: block
    }
  }
  
  .searchForMobile[_ngcontent-ssr-c83] {
    display: none
  }
  
  @media (hover:none) {
    .main-list-items[_ngcontent-ssr-c83]:focus .subMenuGroupParent[_ngcontent-ssr-c83],
    .main-list-items[_ngcontent-ssr-c83]:hover .subMenuGroupParent[_ngcontent-ssr-c83] {
      display: none
    }
    .main-list-items[_ngcontent-ssr-c83]:hover {
      color: #000;
      border-bottom: none;
      padding-bottom: 0
    }
    .main-links[_ngcontent-ssr-c83]:hover {
      color: #000
    }
    .addBlueBorderBottom[_ngcontent-ssr-c83] .main-links[_ngcontent-ssr-c83],
    .main-list-items[_ngcontent-ssr-c83]:hover .main-links[_ngcontent-ssr-c83] {
      border-bottom: none;
      padding-bottom: 0
    }
  }
  
  .signOnDesktop[_ngcontent-ssr-c83] {
    font-family: Interstate_Regular, sans-serif;
    color: #fff
  }
  
  .signOffDesktop[_ngcontent-ssr-c83] {
    position: absolute;
    cursor: pointer!important;
    top: 0;
    right: 35px;
    border-bottom: none!important
  }
  
  @media screen and (max-width:1300px) and (min-width:1120px) {
    .signOffDesktop[_ngcontent-ssr-c83] {
      right: 13px
    }
  }
  
  @media screen and (max-width:1119.9px) {
    .signOffDesktop[_ngcontent-ssr-c83] {
      right: 13px!important
    }
  }
  
  .subMenuGroupLIPE1[_ngcontent-ssr-c83] {
    width: 25%
  }
  
  .subMenuMainContainer[_ngcontent-ssr-c83] {
    display: block;
    position: relative
  }
  
  .subMenuGroupParent[_ngcontent-ssr-c83] {
    background: #fff;
    z-index: 1;
    position: absolute;
    width: auto;
    left: 0;
    box-shadow: 0 2px 7px 2px rgba(0, 0, 0, .125)
  }
  
  @media screen and (max-width:1120px) {
    .subMenuGroupParent[_ngcontent-ssr-c83] {
      position: static;
      box-shadow: none;
      padding-left: 0
    }
    .minusIcon[_ngcontent-ssr-c83] {
      background: #eee
    }
    .plusIcon[_ngcontent-ssr-c83]:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronRight.png);
      background-repeat: no-repeat;
      top: 10px;
      width: 20px;
      height: 20px
    }
    .minusIcon[_ngcontent-ssr-c83]:after,
    .plusIcon[_ngcontent-ssr-c83]:after {
      font-size: 18px;
      position: absolute;
      right: 15px
    }
    .minusIcon[_ngcontent-ssr-c83]:after {
      content: "???";
      top: 0
    }
  }
  
  .flexContainer[_ngcontent-ssr-c83] {
    display: flex!important;
    flex-direction: row
  }
  
  .flexColumnContainer[_ngcontent-ssr-c83] {
    display: block;
    position: relative;
    margin-top: 53px
  }
  
  @media screen and (max-width:991.9px) {
    .flexColumnContainer[_ngcontent-ssr-c83] {
      background: #fff!important;
      margin-top: 0
    }
  }
  
  .spaceBetween[_ngcontent-ssr-c83] {
    justify-content: space-between
  }
  
  .floatRight[_ngcontent-ssr-c83] {
    float: right;
    position: absolute;
    right: 40px
  }
  
  @media screen and (max-width:1300px) and (min-width:1120px) {
    .floatRight[_ngcontent-ssr-c83] {
      right: 13px!important
    }
  }
  
  .displayNone[_ngcontent-ssr-c83] {
    display: none
  }
  
  .productExplorerListItem[_ngcontent-ssr-c83] {
    margin-left: 295px
  }
  
  @media screen and (max-width:1366px) {
    .productExplorerListItem[_ngcontent-ssr-c83] {
      margin-left: 220px
    }
  }
  
  @media screen and (max-width:1024px) {
    .productExplorerListItem[_ngcontent-ssr-c83] {
      margin-left: inherit
    }
  }
  
  @media screen and (max-width:991.9px) {
    .productExplorerListItem[_ngcontent-ssr-c83] {
      margin-left: inherit
    }
    #productExplorerMainLI[_ngcontent-ssr-c83],
    #signOffMainLI[_ngcontent-ssr-c83] {
      display: none
    }
  }
  
  .productExplorerParent[_ngcontent-ssr-c83] {
    min-width: 500px;
    padding: 0 30px;
    cursor: auto
  }
  
  .productExplorerTitle[_ngcontent-ssr-c83] {
    font-size: 28px;
    font-family: Interstate_Bold;
    padding: 15px 10px 10px;
    color: #000;
    cursor: auto
  }
  
  .productExplorerText[_ngcontent-ssr-c83] {
    font-size: 16px;
    line-height: 26px;
    color: #666;
    padding: 0 10px;
    cursor: auto
  }
  
  #menuOpen[_ngcontent-ssr-c83] {
    background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/menu-close.svg);
    border-bottom: none!important
  }
  
  #menuClosed[_ngcontent-ssr-c83],
  #menuOpen[_ngcontent-ssr-c83] {
    pointer-events: none;
    width: 26px;
    height: 26px;
    position: absolute;
    background-repeat: no-repeat;
    left: 16px;
    top: 10px
  }
  
  #menuClosed[_ngcontent-ssr-c83] {
    background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/menu-open.svg)
  }
  
  .bgBlue[_ngcontent-ssr-c83] {
    background: #056dae
  }
  
  .highlight[_ngcontent-ssr-c83] {
    right: auto;
    display: none!important
  }
  
  .mobileMenuContainer[_ngcontent-ssr-c83] {
    display: none
  }
  
  .menuLinkMobile[_ngcontent-ssr-c83] {
    display: inline-block;
    cursor: pointer;
    padding: 0 0 0 10px;
    width: 58px;
    height: 100%;
    margin: 0;
    position: absolute;
    top: 0
  }
  
  .menuIconMobile[_ngcontent-ssr-c83] {
    font-size: 10px;
    height: 8px;
    transition: transform .4s ease-in-out
  }
  
  .rotate-180[_ngcontent-ssr-c83] {
    transition: .18s linear;
    transform: rotate(180deg)
  }
  
  .signOffMobileLink[_ngcontent-ssr-c83],
  .signOnMobileLink[_ngcontent-ssr-c83] {
    font-family: Interstate_Regular, sans-serif;
    font-size: 16px;
    margin-right: 30px;
    cursor: pointer;
    position: absolute;
    top: 0;
    padding-top: 12px;
    padding-left: 19px;
    padding-right: 16px;
    right: -7px;
    color: #fff;
    font-weight: 100;
    height: 100%;
    overflow: hidden;
    display: block
  }
  
  @media screen and (max-width:1600px) and (min-width:1121px) {
    #signOnMobileALink[_ngcontent-ssr-c83] {
      display: none
    }
  }
  
  @media screen and (max-width:1120px) and (min-width:993px) {
    #signOnMobileALink[_ngcontent-ssr-c83] {
      display: block
    }
  }
  
  .signOffMobileLink[_ngcontent-ssr-c83]:hover,
  .signOnMobileLink[_ngcontent-ssr-c83]:hover {
    color: #056dae;
    color: #fff;
    font-weight: 100;
    height: 100%;
    overflow: hidden;
    display: block
  }
  
  .signOnMobileLink[_ngcontent-ssr-c83]:hover {
    background: #056dae;
    position: absolute;
    top: 0;
    padding-top: 12px;
    padding-left: 19px;
    padding-right: 16px;
    right: -7px
  }
  
  @media screen and (max-width:1120px) {
    .mobileMenuContainer[_ngcontent-ssr-c83] {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      height: 50px;
      padding: 16px 0
    }
    .mobileMenuContainer[_ngcontent-ssr-c83] #mobileMenuLink[_ngcontent-ssr-c83] {
      border-bottom: none
    }
  }
  
  @media screen and (max-width:280px) {
    .signOnMobileLink[_ngcontent-ssr-c83] {
      margin-right: 1px;
      padding-left: 1px;
      font-size: 15px
    }
    .menuLinkMobile[_ngcontent-ssr-c83] {
      padding: 0;
      width: 46px
    }
    #menuClosed[_ngcontent-ssr-c83] {
      left: 10px;
      width: 24px;
      height: 24px
    }
  }
  
  [_nghost-ssr-c83]>.settingsIcon[_ngcontent-ssr-c83] {
    background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/Settings_2X.png);
    width: 15px;
    height: 15px;
    display: inline-block;
    background-size: 15px 15px;
    vertical-align: middle;
    margin-right: 10px
  }
  
  [_nghost-ssr-c83]>.bankingIcon[_ngcontent-ssr-c83],
  [_nghost-ssr-c83]>.citigoldIcon[_ngcontent-ssr-c83],
  [_nghost-ssr-c83]>.creditCardsIcon[_ngcontent-ssr-c83],
  [_nghost-ssr-c83]>.investingIcon[_ngcontent-ssr-c83],
  [_nghost-ssr-c83]>.lendingIcon[_ngcontent-ssr-c83],
  [_nghost-ssr-c83]>.moneyMovementIcon[_ngcontent-ssr-c83] {
    width: 22px;
    height: 22px;
    display: inline-block;
    background-size: 22px 22px;
    vertical-align: middle;
    margin-right: 10px;
    margin-left: -10px
  }
  
  [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] {
    position: relative;
    width: 188px;
    flex: 0
  }
  
  @media screen and (max-width:991.9px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] {
      width: 100%;
      text-align: center;
      height: 80px
    }
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83] {
      position: absolute;
      top: 25%;
      color: #056dae
    }
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:after {
      display: none
    }
  }
  
  [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83]:hover {
    width: 100%
  }
  
  [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83] {
    font-family: Interstate_Bold, sans-serif;
    position: relative
  }
  
  [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:hover {
    color: #fff;
    background: #056dae
  }
  
  [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:after {
    content: "";
    background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/right-white-chevi.svg);
    background-repeat: no-repeat;
    font-size: 18px;
    position: absolute;
    top: 17px;
    right: -3px;
    width: 20px;
    height: 20px
  }
  
  @media screen and (max-width:1119.9px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:after {
      display: none
    }
  }
  
  #searchLi[_ngcontent-ssr-c83] {
    right: 10%;
    height: 100%;
    position: absolute
  }
  
  @media screen and (max-width:1120px) {
    #searchLi[_ngcontent-ssr-c83] {
      display: none
    }
  }
  
  #searchLi[_ngcontent-ssr-c83]:hover {
    background: #056dae
  }
  
  #searchLi[_ngcontent-ssr-c83]:focus {
    outline: 1px auto -webkit-focus-ring-color!important
  }
  
  #searchLi[_ngcontent-ssr-c83]:after {
    content: "";
    border-left: 1px solid #fff;
    display: block;
    top: 23%;
    height: 57%;
    position: absolute;
    right: 1px
  }
  
  @media screen and (max-width:991.9px) {
    #searchLi[_ngcontent-ssr-c83] {
      display: none
    }
  }
  
  @media (max-width:1280px) {
    #searchLi[_ngcontent-ssr-c83] citi-cta.en_US[_ngcontent-ssr-c83] button {
      font-size: 0!important
    }
  }
  
  @media (max-width:1400px) {
    #searchLi[_ngcontent-ssr-c83] citi-cta.es_US[_ngcontent-ssr-c83] button {
      font-size: 0!important
    }
  }
  
  #searchLi[_ngcontent-ssr-c83] citi-cta[_ngcontent-ssr-c83] button {
    display: flex;
    outline: 0;
    align-items: center;
    text-align: center;
    margin: 0;
    font-size: 16px;
    color: #fff;
    justify-content: space-around;
    font-family: Interstate_Bold, sans-serif;
    text-decoration: none;
    padding: 11px 15px 11px 17px
  }
  
  #searchLi[_ngcontent-ssr-c83] citi-cta[_ngcontent-ssr-c83] button:before {
    content: "";
    display: block;
    width: 24px;
    height: 24px;
    margin-right: 10px;
    padding: 10px 10px 10px 17px;
    outline: 0;
    background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/search.svg);
    background-position: 50%;
    background-repeat: no-repeat
  }
  
  #searchLi[_ngcontent-ssr-c83] citi-cta[_ngcontent-ssr-c83] button:focus {
    outline: 5px auto -webkit-focus-ring-color!important
  }
  
  .moveLi[_ngcontent-ssr-c83] {
    right: 40px!important
  }
  
  .moveLi[_ngcontent-ssr-c83]:after {
    content: "";
    border: 0!important;
    display: block;
    top: 23%;
    height: 57%;
    position: absolute;
    right: 1px
  }
  
  @media only screen and (min-device-width:320px) and (max-device-width:360px) and (orientation:portrait) {
    .citiNavSearch[_ngcontent-ssr-c83] button {
      font-size: 11px!important
    }
  }
  
  @media only screen and (min-device-width:320px) and (max-device-width:568px) and (orientation:portrait) {
    .citiNavSearch[_ngcontent-ssr-c83] button {
      padding-top: 12px!important;
      padding-left: 0!important;
      padding-right: 0!important
    }
    .citiNavSearch[_ngcontent-ssr-c83] button:before {
      margin-right: 0!important
    }
  }
  
  @media only screen and (min-device-width:320px) and (max-device-width:568px) and (orientation:portrait) and (max-width:1120px) {
    .citiNavSearch[_ngcontent-ssr-c83] {
      position: absolute;
      right: 111px;
      top: 0;
      display: block;
      height: 100%
    }
    .citiNavSearch[_ngcontent-ssr-c83]:after {
      right: -3px!important
    }
  }
  
  @media only screen and (min-device-width:320px) and (max-device-width:568px) and (orientation:portrait) {
    .signOnMobileLink[_ngcontent-ssr-c83] {
      padding-left: 0!important
    }
  }
  
  .citiNavSearch[_ngcontent-ssr-c83] {
    display: none
  }
  
  .citiNavSearch[_ngcontent-ssr-c83]:focus,
  .citiNavSearch[_ngcontent-ssr-c83]:hover {
    background: #056dae;
    color: #fff
  }
  
  .citiNavSearch[_ngcontent-ssr-c83] button {
    display: flex;
    align-items: center;
    margin: 0;
    font-size: 16px;
    color: #fff;
    justify-content: space-around;
    font-family: Interstate_Bold, sans-serif;
    text-decoration: none;
    padding: 11px 15px 11px 17px
  }
  
  .citiNavSearch[_ngcontent-ssr-c83] button:focus,
  .citiNavSearch[_ngcontent-ssr-c83] button:hover {
    background: #056dae;
    color: #fff
  }
  
  .citiNavSearch[_ngcontent-ssr-c83] button:before {
    content: "";
    display: block;
    width: 20px;
    height: 20px;
    margin-right: 10px;
    padding: 12px 10px 10px 17px;
    outline: 0;
    background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/search.svg);
    background-position: 50%;
    background-repeat: no-repeat
  }
  
  @media screen and (max-width:1120px) {
    .citiNavSearch[_ngcontent-ssr-c83] {
      position: absolute;
      right: 111px;
      top: 0;
      display: block;
      height: 100%
    }
    .citiNavSearch[_ngcontent-ssr-c83]:after {
      content: "";
      height: 56%;
      border: -43px;
      display: block;
      position: absolute;
      margin-bottom: -26px;
      top: 10px;
      right: 5px
    }
  }
  
  @media screen and (max-width:280px) {
    .citiNavSearch[_ngcontent-ssr-c83] {
      right: 68px
    }
    .citiNavSearch[_ngcontent-ssr-c83] button {
      padding: 11px 9px 0 0;
      font-size: 15px
    }
    .citiNavSearch[_ngcontent-ssr-c83] button:before {
      margin-right: 1px
    }
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] {
      display: flex;
      flex-direction: column;
      box-shadow: none;
      padding-left: 0;
      z-index: 2;
      background: #fff;
      overflow-x: hidden;
      min-height: 650px;
      background: 0 0;
      box-shadow: none!important
    }
    .subMenuMainContainer[_ngcontent-ssr-c83] {
      display: block;
      position: absolute;
      z-index: 9;
      width: 100%;
      top: 0
    }
    .subMenuGroupParent[_ngcontent-ssr-c83] {
      width: 100%
    }
    .preLogin[_ngcontent-ssr-c83] .mainListItems[_ngcontent-ssr-c83] {
      list-style: none;
      border-bottom: 5px solid #eee;
      height: 56px;
      background-color: #fff;
      margin: -2px
    }
    .preLogin[_ngcontent-ssr-c83] .mainListItems[_ngcontent-ssr-c83]:hover {
      background-color: none
    }
    .mainListItems[_ngcontent-ssr-c83] {
      list-style: none!important;
      height: 56px!important;
      border-bottom: 1px solid #eee
    }
    .mainListItems [_ngcontent-ssr-c83]:hover {
      background-color: none
    }
    #accountsMainLI[_ngcontent-ssr-c83] {
      margin-top: 20px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .subMenuGroupLI {
      height: 36px!important
    }
  }
  
  @media screen and (max-width:1120px) and (min-width:992px) {
    .flexColumnContainer[_ngcontent-ssr-c83] {
      background: #fff!important;
      margin-top: 0!important
    }
    .child-nav-group3[_ngcontent-ssr-c83] {
      display: flex;
      flex-direction: column
    }
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] {
      width: 100%;
      text-align: center;
      height: 80px
    }
  }
  
  @media screen and (max-width:1120px) and (min-width:992px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83] {
      position: absolute;
      color: #056dae;
      width: 100%!important;
      background-color: #fff!important;
      line-height: 30px;
      padding-bottom: 12px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .125)
    }
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:hover {
      line-height: 30px;
      background: #fff;
      color: #056dae;
      padding-bottom: 12px;
      border-bottom: 1px solid #eee
    }
  }
  
  [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83] {
    position: absolute;
    color: #fff;
    width: 175px;
    line-height: 30px;
    line-height: 20px;
    padding-bottom: 12px;
    padding-top: 13px
  }
  
  @media screen and (max-width:1119.9px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83] {
      box-shadow: 0 2px 4px rgba(0, 0, 0, .125)!important;
      background-color: #fff;
      color: #056dae;
      width: 100%!important
    }
  }
  
  @media screen and (min-width:1120px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:hover {
      background: #056dae;
      color: #fff;
      padding-bottom: 12px
    }
  }
  
  @media screen and (max-width:1119.9px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:hover {
      line-height: 30px;
      background: #fff;
      color: #056dae;
      padding-bottom: 12px
    }
  }
  
  @media screen and (max-width:991.9px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] {
      width: 100%;
      text-align: center;
      height: 80px
    }
  }
  
  @media screen and (max-width:991.9px) {
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83] {
      position: absolute;
      width: 100%!important;
      background-color: #fff!important
    }
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83],
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:hover {
      color: #056dae;
      line-height: 30px;
      padding-bottom: 12px;
      border-bottom: 1px solid #eee
    }
    [_nghost-ssr-c83]>#navOpenAccMainLI[_ngcontent-ssr-c83] a[_ngcontent-ssr-c83]:hover {
      background: #fff
    }
  }
  
  .subNavtitleMain[_ngcontent-ssr-c83] {
    width: 90%;
    border-bottom: 1px solid #eee;
    height: 4em;
    margin-left: 21px;
    margin-bottom: 25px
  }
  
  .subNavTitle[_ngcontent-ssr-c83] {
    position: absolute;
    left: 52px;
    color: #000;
    top: 19px;
    width: 90%;
    padding-bottom: 8px;
    font-weight: 600
  }
  
  .subNavTitle[_ngcontent-ssr-c83]:before {
    content: "";
    background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronLeft.svg);
    background-repeat: no-repeat;
    font-size: 18px;
    position: absolute;
    top: 5px;
    left: -33px;
    width: 20px;
    height: 20px
  }
  
  .closeSideNav[_ngcontent-ssr-c83] {
    transform: translateX(100%)
  }
  
  .closeSideNav[_ngcontent-ssr-c83],
  .openSideNav[_ngcontent-ssr-c83] {
    display: block;
    width: 100%;
    height: 100%;
    z-index: 9;
    position: absolute;
    transition: .5s ease-in
  }
  
  .openSideNav[_ngcontent-ssr-c83] {
    transform: translateX(0)
  }
  
  .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerATMMainLI a {
    color: #056dae
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerATMMainLI a:after {
      display: none
    }
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerATMMainLI a:before {
      content: "";
      background-repeat: no-repeat;
      background-size: 25px 25px;
      width: 25px;
      height: 25px;
      display: inline-block;
      position: absolute;
      top: 7px;
      left: 16px;
      pointer-events: none;
      filter: invert(.5) sepia(1) saturate(70) hue-rotate(178deg)
    }
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerEspanolMainLI {
      border-bottom: none
    }
  }
  
  @media screen and (max-width:700px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerEspanolMainLI citi-modal .modal {
      top: 13%
    }
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerEspanolMainLI a:after {
      display: none
    }
  }
  
  @media screen and (max-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #butlerEspanolMainLI a:before {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/globe.svg);
      background-repeat: no-repeat;
      background-size: 25px 25px;
      width: 25px;
      height: 25px;
      display: inline-block;
      position: absolute;
      pointer-events: none;
      top: 7px;
      left: 16px;
      filter: invert(.5) sepia(1) saturate(70) hue-rotate(178deg)
    }
  }
  
  @media screen and (max-width:1660px) and (min-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] .child-nav-group3 .explore-sub-navId,
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] .child-nav-group3 .subMenuGroupTitle a {
      display: none!important
    }
  }
  
  @media screen and (min-width:1119.9px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navlendingMainLI .subMenuGroupParent .flexColumnContainer {
      height: 90vh!important
    }
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navlendingMainLI .subMenuGroupParent .flexColumnContainer .child-nav-group3 .subMenuGroupUL {
      width: 300px
    }
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navlendingMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain {
      padding-bottom: 0!important;
      margin-bottom: 0!important
    }
  }
  
  @media screen and (max-width:1119.9px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #investingMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain,
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #wealthMgmntMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain {
      padding-bottom: 0!important;
      margin-bottom: 0!important
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupTitle .subHeadersOnMobile {
    display: none
  }
  
  @media screen and (max-width:1119.9px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .subMenuGroupParent .flexColumnContainer {
      height: 620px
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .subMenuMainContainer {
    position: absolute!important;
    left: 15%
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .subMenuMainContainer {
      left: 0
    }
  }
  
  @media screen and (min-width:1119.9px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .subMenuMainContainer .subMenuGroupParent {
      height: 358px
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .subMenuMainContainer .subMenuGroupParent {
      width: 100%!important
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .subMenuMainContainer .subMenuGroupParent .subNavtitleMain {
      margin-bottom: 10px!important
    }
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 {
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      width: 24%!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 .subHeadersOnMobile {
      display: none
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 .subMenuGroupUL {
      margin-top: 0;
      flex: 1 0 80%
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
      line-height: 2.5;
      width: auto
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 .quickLinks {
      flex: 1 0 10%
    }
  }
  
  @media screen and (max-width:1119.9px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 .subMenuGroupTitle {
      color: #999;
      line-height: 3.5;
      padding-left: 8%;
      position: relative;
      border-bottom: 1px solid #eee;
      margin-left: 15px;
      margin-right: 26px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 .subMenuGroupTitle a {
      color: #000;
      font-weight: 600
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI .child-nav-group3 .subMenuGroupTitle a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/right-chevi.svg);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 17px;
      right: -8px;
      width: 20px;
      height: 20px
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL {
    display: flex;
    flex-basis: 100%
  }
  
  @media screen and (min-width:1119.9px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL {
      padding-left: 20px
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL {
      flex-direction: column;
      display: none!important
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
    list-style: none
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI:first-child {
    margin-top: 0!important
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .child-links {
    padding-left: 0;
    font-size: 16px;
    color: #666;
    letter-spacing: 0;
    line-height: 20px;
    font-family: Interstate_Light, sans-serif
  }
  
  @media screen and (max-width:1119.9px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .child-links {
      font-size: 16px;
      font-family: Interstate_Light, sans-serif;
      color: #000;
      line-height: 20px
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl {
    padding: 0
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li {
    list-style: none;
    line-height: 2.5
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li {
      line-height: 48px
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li a {
    font-family: Interstate_Light, sans-serif;
    font-size: 16px;
    color: #000;
    letter-spacing: 0;
    line-height: 22px
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li a {
      color: #002d72!important;
      font-family: Interstate_Regular, sans-serif;
      font-weight: 600
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #chensavns a {
      position: relative;
      width: 100%
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #chensavns a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronRight.png);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 10px;
      right: 15px;
      width: 20px;
      height: 20px
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #ccs a {
      position: relative;
      width: 100%
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #ccs a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronRight.png);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 10px;
      right: 15px;
      width: 20px;
      height: 20px
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #invsg a {
      position: relative;
      width: 100%
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #invsg a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronRight.png);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 10px;
      right: 15px;
      width: 20px;
      height: 20px
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #lendng a {
      position: relative;
      width: 100%
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #lendng a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronRight.png);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 10px;
      right: 15px;
      width: 20px;
      height: 20px
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #welman a {
      position: relative;
      width: 100%
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #expProductsMainLI child-nav-group3 .subMenuGroupUL #welman a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronRight.png);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 10px;
      right: 15px;
      width: 20px;
      height: 20px
    }
  }
  
  @media screen and (max-width:1118px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI .subMenuMainContainer .subMenuGroupParent .flexColumnContainer child-nav-group3 .subMenuGroupTitle {
      display: none
    }
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 {
      height: 160px;
      width: 260px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 child-nav-group3 {
      width: 100%
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL {
      margin-top: 0!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL li {
      line-height: 2.5
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement {
      width: 75%;
      position: absolute
    }
  }
  
  @media screen and (min-width:1120px) and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement {
      height: 90vh
    }
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement .somInsideChildNav {
      float: right
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement .somInsideChildNav citi-som {
      position: absolute
    }
  }
  
  @media screen and (max-width:1118px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 .flexColumnContainer {
      height: 90vh!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 .flexColumnContainer .subNavtitleMain {
      margin-bottom: 5px!important
    }
  }
  
  @media screen and (max-width:991px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #rewardsMainLI #rewardssubGroup4 .flexColumnContainer {
      height: 620px!important
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI {
    display: none
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI {
      display: block
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .mobileHeadingAnchorTag {
      display: none
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .subHeadersOnMobile {
      font-weight: 600;
      padding-left: 44px;
      font-family: Interstate_Regular, sans-serif;
      font-size: 12px;
      color: #666;
      letter-spacing: 0;
      line-height: 20px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .subMenuMainContainer .subNavTitle:before {
      left: -33px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 {
      padding-bottom: 0!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL {
      padding-top: 0!important;
      width: 100%!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL .mobileHeadingAnchorTag {
      display: none
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL .subHeadersOnMobile {
      margin-left: 43px;
      font-family: Interstate_Regular, sans-serif;
      font-size: 12px;
      color: #666;
      letter-spacing: 0;
      line-height: 20px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #profilesNavMainLI .main-links:before {
      content: "";
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 8px;
      left: 10px;
      width: 20px;
      height: 20px
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #ATMNavMainLI,
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #ATMNavMainLI a:after {
    display: none
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #ATMNavMainLI {
      display: block
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #ATMNavMainLI a:before {
      content: "";
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 8px;
      left: 10px;
      width: 33px;
      height: 25px
    }
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent {
      width: 260px!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent .subMenuGroupUL {
      margin-top: 0
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI {
      line-height: 2.5;
      width: 222px
    }
  }
  
  @media screen and (max-width:1119.9px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent .flexColumnContainer {
      height: 620px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain {
      margin-bottom: 0!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent .subMenuGroupUL {
      margin-top: 0;
      padding-top: 0!important;
      width: 100%!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI {
      line-height: 2.5;
      width: 222px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #servicesMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI a {
      font-weight: 600
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupTitle .mobileHeadingAnchorTag {
    display: none
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupTitle .subHeadersOnMobile {
    margin-left: 43px;
    font-family: Interstate_Regular, sans-serif;
    font-size: 12px;
    color: #666;
    letter-spacing: 0;
    line-height: 20px;
    font-weight: 600
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL {
      width: 100%;
      padding-top: 0!important
    }
  }
  
  @media screen and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
      height: 32px;
      margin-top: 3px!important
    }
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuGroupParent {
      width: 470px!important;
      min-height: 120px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuGroupParent .child-nav-group3 {
      display: flex;
      flex-direction: column
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL {
      margin-top: 0;
      flex: 1 0 80%
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
      line-height: 2.5;
      width: 220px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuGroupParent .child-nav-group3 .quickLinks {
      flex: 1 0 10%
    }
  }
  
  @media (-ms-high-contrast:active),
  screen and (min-width:1120px) and (-ms-high-contrast:none) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #pntMainLI .subMenuGroupParent {
      min-height: 310px
    }
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #accountsMainLI .subMenuGroupParent .subMenuGroupUL {
      margin-top: 0
    }
  }
  
  @media screen and (min-width:1120px) and (max-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #accountsMainLI .subMenuGroupParent .subMenuGroupUL {
      padding-top: 0!important
    }
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #accountsMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI {
      line-height: 2.5
    }
  }
  
  @media screen and (max-width:1119px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #accountsMainLI .subMenuGroupParent .child-nav-group3 {
      padding-top: 0!important;
      padding-bottom: 0!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #accountsMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupTitle {
      display: none
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #accountsMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL {
      padding-top: 0!important;
      width: 100%!important
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #accountsMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
      margin-top: 0!important
    }
  }
  
  @media screen and (min-width:1120px) {
    .preLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #navOpenAccMainLI a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/right-white-chevi.svg);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 17px;
      margin-left: 9px;
      width: 20px;
      height: 20px
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #openAccPostMainLI a {
    position: relative;
    font-family: Interstate_Bold, sans-serif
  }
  
  @media screen and (min-width:1120px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #openAccPostMainLI a:after {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/right-white-chevi.svg);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 17px;
      right: -9px;
      width: 20px;
      height: 20px
    }
  }
  
  @media screen and (max-width:1119.9px) {
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #openAccPostMainLI a {
      text-align: center;
      font-family: Interstate_Bold, sans-serif;
      font-size: 16px;
      color: #056dae;
      letter-spacing: 0;
      line-height: 38px
    }
    .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #openAccPostMainLI a:after {
      display: none
    }
  }
  
  .postLogin[_ngcontent-ssr-c83] .nav-bar-main-ul[_ngcontent-ssr-c83] #openAccPostMainLI .subMenuMainContainer {
    display: none
  }
  
  @media screen and (max-width:1120px) {
    .flexColumnContainer[_ngcontent-ssr-c83] {
      height: 620px
    }
    ul#nav-bar-main-ul[_ngcontent-ssr-c83] li[_ngcontent-ssr-c83] .child-nav-group3[_ngcontent-ssr-c83] .openSideNav ul.exploreUl {
      line-height: 36px;
      margin-top: -15px
    }
  }
  
  @media screen and (min-width:1120px) {
    .mobileatm[_ngcontent-ssr-c83] {
      display: none
    }
  }
  
  @media screen and (max-width:1120px) {
    .preloginatm[_ngcontent-ssr-c83] {
      padding-top: 9px;
      vertical-align: middle;
      padding-left: 15px;
      filter: invert(.5) sepia(1) saturate(70) hue-rotate(178deg)
    }
    .postloginatm[_ngcontent-ssr-c83],
    .preloginatm[_ngcontent-ssr-c83] {
      position: absolute;
      background-repeat: no-repeat
    }
    .postloginatm[_ngcontent-ssr-c83] {
      padding-left: 10px;
      padding-top: 8px
    }
  }
  
  #personetics-citi-menu[_ngcontent-ssr-c83] {
    height: 100%
  }
  </style>
  <style>
  @media (max-width:768px) {
    [_nghost-ssr-c72] {
      display: none
    }
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] {
    display: flex;
    max-width: 940px;
    margin: 0 auto
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] {
    display: flex;
    justify-content: flex-start;
    padding: 10px 0;
    width: 100%;
    height: 37px;
    border-bottom: 1px solid #eee;
    font-size: 12px;
    font-family: Arial, sans-serif
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72]>[_ngcontent-ssr-c72] {
    border-right: 2px solid #888;
    margin-right: 10px;
    padding-right: 10px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72]>[_ngcontent-ssr-c72]:last-child {
    border: none;
    margin-right: 0;
    padding-right: 0
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .welcome[_ngcontent-ssr-c72] {
    font-weight: 700
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .profile-and-settings[_ngcontent-ssr-c72] citi-cta[_ngcontent-ssr-c72] a,
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .profile-and-settings[_ngcontent-ssr-c72] citi-cta[_ngcontent-ssr-c72] button {
    font-family: Arial, sans-serif;
    font-size: 12px;
    color: #333;
    text-decoration: none;
    margin-right: 0
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] {
    position: relative;
    height: 16px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72]:after {
    content: " ";
    display: table;
    clear: both
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] citi-cta[_ngcontent-ssr-c72] a {
    font-size: 12px;
    text-decoration: none;
    margin: 0;
    color: #05589d;
    font-family: Arial, sans-serif
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] citi-cta[_ngcontent-ssr-c72] a:hover {
    text-decoration: underline
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72] {
    color: #05589d;
    background: 0 0;
    padding: 0;
    border: none
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72]:hover .message-wording[_ngcontent-ssr-c72] {
    text-decoration: underline
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72] .message-wording[_ngcontent-ssr-c72] {
    height: 15px;
    margin-left: 5px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72] .message-count[_ngcontent-ssr-c72] {
    width: 20px;
    height: 16px;
    line-height: 15px;
    text-align: center;
    float: left;
    border: 1px solid #888;
    background: linear-gradient(180deg, #fff 0, #ccc)
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .title-bar.active[_ngcontent-ssr-c72]:focus {
    outline: 0
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] {
    visibility: hidden;
    -webkit-transition: visibility 0s linear;
    -moz-transition: visibility 0s linear;
    -ms-transition: visibility 0s linear;
    -o-transition: visibility 0s linear;
    transition-delay: 1s;
    top: -10px;
    margin-left: -10px;
    position: absolute;
    border-radius: 10px;
    box-shadow: 2px 2px 24px -7px #3d3d3d;
    z-index: 10;
    width: 250px;
    overflow: hidden;
    background: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QNvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6Rjk3RjExNzQwNzIwNjgxMUE0QjJDQjRBNjlDQ0E0MzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTVDQTE0RTRDMUVCMTFFMEJEMkJCQzExQTVCQkYyQjAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTVDQTE0RTNDMUVCMTFFMEJEMkJCQzExQTVCQkYyQjAiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2MDVFMzk1RTE4MjE2ODExODE0Q0U0RjQ1NDlBMDFERCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGOTdGMTE3NDA3MjA2ODExQTRCMkNCNEE2OUNDQTQzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQECAgICAgICAgICAgMDAwMDAwMDAwMBAQEBAQEBAgEBAgICAQICAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDA//AABEIABIAFAMBEQACEQEDEQH/xABrAAACAwAAAAAAAAAAAAAAAAAAAQIDCgEBAAAAAAAAAAAAAAAAAAAAABAAAQICBwYDCQAAAAAAAAAAARECEgQAITEyAxMzQVEiQhQ0YSNjgaHxYrJDw1SEEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDdBDdwwwkHzGS7iY8V1vUTrzW1i8p95QACImLEzCQ7gfMtHFinZLyTAsLF5gvtNYBo7RXCs7Cpcu9rfs7bU+qgRtbzubimppKTE64AcT7MuXG4oE3Cog4iCXRtBwxC/GAOVLgkeRKtTjxTUCUtt2NoCrSGBsGp06nq0XuI4lzlrS3xWqgDr89f0xd7i79n0d3zLQAX5HTuus0LBpevu8FoFfPt73+74fhoH//Z) repeat 50%
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72] {
    position: relative;
    width: 250px;
    padding: 10px;
    border-radius: 10px 10px 0 0;
    background: url(data:image/gif;base64,R0lGODlhFAASALMAAOXl5ejo6Ofn5+np6erq6uvr6+bm5uzs7O3t7QAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOkI0RDEzNkVDNkEyMDY4MTFBN0JBRjMxMjJCQzI5QkVDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjBFOUFCNDg1OTFFRjExRTBCMDBCRjlFNzNFMUQzOTFEIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjBFOUFCNDg0OTFFRjExRTBCMDBCRjlFNzNFMUQzOTFEIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RENFNDVBMDQ4RjIwNjgxMUE3QkFGMzEyMkJDMjlCRUMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjREMTM2RUM2QTIwNjgxMUE3QkFGMzEyMkJDMjlCRUMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQAAAAAACwAAAAAFAASAAAEglAcdISkdtZbtQkI9YXH54GFMYTpirSsihAAEdL2XN87YhShwS84RAiBRuAhYJggmBqmkonhZKqaTClw6oq4PhfsJSOLB5PC7tCaEAyEdPPwjtPX9QP9dzgSkX59Q1AUhEtNhYgdWIwbWV5bkCNtZnJiKns5eTNwbp0lgEOCcUZ8fREAOw==) repeat 50%
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72]:after {
    content: "";
    width: 13px;
    height: 13px;
    position: absolute;
    top: 12px;
    right: 10px;
    background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAALFCAYAAAAhqNjXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA7FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcFJpZ2h0czpNYXJrZWQ9IkZhbHNlIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InV1aWQ6NDc5MzAwRjJERjY1RTAxMUFDNUI4MkZBQTBBQ0IyOTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTVEMUUzREEwNUFDMTFFMkE3QjJCM0I5MzcwMDJGMTQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTVEMUUzRDkwNUFDMTFFMkE3QjJCM0I5MzcwMDJGMTQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjUwNjc2NEIzMjMyMDY4MTE4MTQ4REFENjlGMkZCREIwIiBzdFJlZjpkb2N1bWVudElEPSJ1dWlkOjQ3OTMwMEYyREY2NUUwMTFBQzVCODJGQUEwQUNCMjk5Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+HveHSQAAJMBJREFUeNrsXQt8VMXVn5tsNgTyAoQI4Q2CiIkgQUykHw+1IoiiVixSC6mKlYKgKCDwQcBntaFS+VRSbNAqFG0VASlfFQhf5WmiARREDe9HhDw2L5Ls7t37nXN3ZjN79753E7E/5/c7ubkzc/975nHOnDkzd64gSRKJVHDgHyGPWEKUpsIjeXnyM1OnThWCwOyEysrKkLgovV9HsvIDUSSCIaJg/jo7f14lqSMxTFMFa2jQ/jm9NFUwrzckQZh3VLJXTBUw6Q995ZYUnvhGChssEPTSTBdz+gGbxRRFy91g8ODBoQxEXNCV4cb1Z7XyRwONBroX6ODW8Z1fMgTTALiTUjsan2WKM0UYDvQeUBwXdxJotx3Z3Aa0WBH3d806gzrSa4URQEsUcR/oNgBUZkji/jI3efzTsgJ6mwe0Bmgl0KemW5MBPbW7nI96WKvidevsW5dHBmoUJXJbj9aMa1YVFZb6WWq8g/RMjAFykMcGJofXaVs7BLJsWHsSGy2ELwEY1IDUGkkTTEuMjEBUwcw+9CPmTEftmA7Nrxwz8gTUYTOB7gMaCFRM5XJ54VRJNM0ZBdpK9Zgy7MAa0QJUk815DGjDxHMEHpSvnKKcp8sZr89qyjOJTzwpA3ROuDyQsaaxlox8MwH/PQY/0MuUPstcVUp8cOWBMCTExgf0gGkV1KFNaoATjXDGNNjoPvfJV1okvmHYv+sN64wVs9FbTx756EZy4PvdWs8cxoaAertgyFmsI46suv3f5NGhL5K+7QfKcXht1eZx/PdLoP5ABcBpB0POtAKKW9X51I60D6YBHQLuBtjWGlg04OhGCrgj1KgDzkZ9cEYyCjSPnH/wShLP/ufJlj4DDmt/0mf+8OZnK8iVydeQjq06EUGIgomTQETQNgXnNpIaj4t0at2N1Hlrb91+9sOf9U68qvXikStmWbXPiDMqlnh97sxNJ9e9fLbu+HXjuk98PyEmeYGBSXVXiBi/MzSqzem6krlrvvvLwuTYpKiHrnxyYv/kQX/bX7FXXwWV150nbk8j6ZTcNZBhyY636lYf/hNJbdNZfOG6/Huq3ZV/r/NWc3aMhmwWHP+IPPivMcTtbZTvi87sJPmHJ5P4mFZk/qDcqZ3iuv+9VXQbEi1rdgMV9FfgoOjCl+T9w2+S6osu8rutd4JZRchLP8sny77LeiM6ykH6JaWTGKhD0Sfqgx2t/hoqGx4ufII8uOVWcqLmAhnb/RZyc5875UJVNpaRC43nwEpKIO3jUvTBVt68ifRP7kvON9SQvef3kISYKDJnyDISHeUvVoIzCYqMlEyubT9MHyyz643kb3fsIr/pPw2KARqw8y2kT4cruR7uJyL5UEMYD8JtW7cni4f/iQy6PJN0btOVREU1/d6RqgNBeXt27R2+CtKin0wqm5xBQ58nPl+cCDNipKqqKnL27FlSXl5OUlNTSUpKCklMTCQOR6AgCe+//7501113CSGcuVyuhnPnzsXW1taS+vp6gtfz58+Tb7/9lsTGxpLu3buTTp06keTkZNK+fXvSu3dvQZOzw4e/FHfu3CNHxMTEyFx4PB5SU1NDjh07Ro4cOSJznJCQQNLT08mMGTN0/GegVX0+n9xBsSj4Pz4sCIIcFx0dTf0CopymW2fOWP8kt66uTgZDcrvdhDUOu2J8mzZt9L1Ubdu1I/GQqbGxkVy8eFG+YjEZt0gIiPXWs2dPfbCO0FqpXbrIDyMYAmGREIAVGUNaWhrp37+/Plhcq1bk2muvJR06dCANDQ0yICsmktfrlVs0MzNT5k4XDPoH6dq1Kxk1apTcr6qrq+XugSBYRIy77bbbyOWXX26i00JRsMWuvvpq0gq43Lp1Kzl69Khcd1hHo0ePlt01CMzyaoqTT/K5BUmIEaL8ffHEiRPk0KFDModY/B49esj9j3+uxcyDcRaf22ikzzaaBBrXgq5VZutnZEgjRowgffv2Jd988w0pKChA37WctnbtWrJ9+3bB0hQR9VhOTo7fPCgqIsOHDyebNm2SNYhlDzJylJeXR+Lj42Ug0HMkNzfXvjt648amtkDuzHClCcaKiQHFSM1ZaQps3LhxcvE+//xz8vDDDwfAUctanqOjikYQrDssHgO0DFZYWChEqp+NC7fTCo8//nhYAHy3YZxZUR2aVeFAfR8x2URdHzGwBgvLGoZgaFtEKgjY4200QFD+DRs2yI3iwDEyYsWkYPyv4ZQ5W8sZbgaMhUP+qR05YqP/BYGtBpoGVB+J1sy+pLqGUafVksNFhC44gIEjhCtOS9EqBXomkuPuPH7uJISLxhs+jlv/4o6YPrt014QvYTCjqbIGBQI0oNTUaWtrI8BTOypOfgsnTH1GwXzB68Hh6TOf1xM5fcZxFr4+++z5qzUTB8/ZT2KiBeIR1UurTLM1Qxk0uyigz77IHSzodlr4ASedoDnV0gFgqU/0LfSJvqD8QZ0RH8YrTFadLI7/X5lv6BP7FgTpM1ZMxgVMA93s12DCb1oN4/OBYiKIFhDlJFBkmIemKKsEnw1qACNu9u/f/wLMYMa0bt361A033DDB4XDUaWqN8vLywfv27Vt55syZO4IqFkJJSclUoCkwaKdVVFSMgcntXMPJK8xOSiBzL5juVKanpy+64oorVoB12fa9996r4K1MfG7AgAF5Q4YMeVgT7OOPP94Fv5qJ3hZMS0pKwnn6hwcOHLgD45jHhaVPmTKlf2Ji4teqYF988cULYG/Nxcz86MMm+3hlrh1M69y5sxw/ceLEdIH2kaCKX7p0qYTuLgbAOMK86DngGcD4QYMGkVtuuWW8gM2ubEGYyb3y9ttvTy8rKyNcP5SBGCjzkk6aNKkIJrzj4+LiTqtyxrjbs2dPoGiKLiRf0fuSn5/fJJsoLps3b94Ps7hlPBjM7DZDq8q7uZBD/B8Ji49x6P2bNm3aCtWuMXfuXAlndDgDxqn1qVOnApWMV/Y/m+HNnz+/8u67724X1Nl5QX399dclmOxLHTt2lCklJUXq0KFD4B7p/vvvl06cOHEPL/DsKmAxmUxigKIM3rVr19vFxcVX7ty5U/4R9FChuwvM/F/B/+/oWjHKX1BTQco0dq+qgprVPGBCzgu7GfPAqaboWL/Dq1lAzU6rxqlRnpaps/8sMEumO6vfw0eOSokJ8TA7uUj69e2hi5EJhB644WpgBw99K7mqaqXvv78g1dQ2SHjPJEAZ7qM2GaPpSrDzZRUBALyWl1dqgn2hADvBJ8oPV5QHLRlVV1cHwJUN4Da4h0oOfoQNPGouL9y09j7x74JzE8UmNnSoo6u/tLRMcoORGONwkI4d2uoaq7jH4n6gbsqEsjKsH58kil7J6xVlwvsTJ89KfJ2NAvq3or4Y7WUtW1npgmd9MgALoBSk06dLg8COagAxkje5VLqqZRyfzxe0jnfy1DmJX6trZ9Bf5YUAH65eBBmIuGDDrbHQzLjvJ/4HESfT3lCYWKE44eaOI//8jXOHJc74XxuT70Fx4oeyGZuzY1bYVUFPGtxbAjMUJ9N1Vu9yqYhTB3t1hiFraUkqlYgduxb1Pmm5Aa5beHgUnQsNU8mzD2jOvmf67zBVTNHtXgUXrRW964D+hradOTCPx5Q4mQIDmWs5cZKmWu9nTuoPO0oJJ6jKFT7dPDzYAtqav6SUSUK3C+vm4YuJLwKkA5XSe+ytuA2iE1dMzTxKMEmlDuU4DkwzDy9OLh2nCMtsmKfZrSDBRJdRzdN8S5IWnElSsxt7jDMzm7OTTRcTRiUnFY/7OBfYszBCmX5HwsE0LYxMvKgQKiZLIH2hnQZ4BEUFhrZSCv5rKiqmwQJ2A3o1lbM0tTg9kseAn79ei6KSpPWD//ptvGC6mHXl5QbZ4s3XmcgtMOxZcoXMxfWLv7X3hozoCR241eLMjk6BiGufLJbCkgCfhTeHImbsGRl+UTrN1y1cTtFiLATCNbfTdACZqtfZeVLaFOc5QcfQj84PnrEKtovOTJQhiU7I+pkFQ+OuXGUEZ+FloMeNwKIUkwot3VVrRqYYWCkFUttLwV6eKrLSktPp5DVVAfQ8UI2SM6MGILTVUB29RfyvIn1F7yXaqnFWwAjtrPdTzTuMtuZeCljAGsksGNHoHntpiydpgVmRzThq7FVpyWZEBd2hFjl79mxsuXa5ubnWJxWBvjF9Ogp6PtBVxP/6FhZr4YoVK/IsgT344IMo6JuAZq1atWoNjUN5xAnHDohbaBps4sSJKOivrV279q98BohPooPxzyHtiKE4jRs3Lq62trYf0BplBgCogvgPgMaaGgNqampkQS8oKFAVdEg3L+iQuRRIHKyyaQqioiFtNFCRKbCioiIRirEUaFW/fv0Cgg7/R0PcM7QKdljqGqmpqc9Q7bGB+Jcmh1Etgo2A7x/+/MyZM/WmZ8LJycndqO8H6+ggpX/RMUJ+38nlcom2/bSxsbFJFLAPUK/GxsaqsJy+giCgNKCnvbZFPMhyPzszqqslxNRtp4QfzoOMv67FwY/Pty03gMsrqbpEjdJUwTza+7p101TBVH6cFN7Qxaa1rZIwdOdpuSX3WgD1g+lkFyWrnKmI1L8zUyVbXcMnWaNb/+Jx+ueoHqfWrM6JxN9bmdGNfgMmv1oJiqli0A9BeopaXqWf1gmTV81JE6S/ANnHwL+nBIFMgLzaK/z4/h08sBLq4g5lnUA8zgemAEgaEAIar/DDQyWomiG6Eh5ahB5kAG0L/1fQH6SaV/4/75+/iXlYDwzNhEyM5pZHPgS6gwfjQn8A/FrL4/J/1MnGhzsU4IwzvB4GzvHqX+G/6X+qnJ/8LilQ8XAvCSo+GiHg/xLgGsLieMew5046P53fza1wS6+A0Wg6c/so6omNVqyfFsH/4wHDv8J/fc63zj05VwQBQpxEOC4EarH6/2/icHdOn6YV/qELv3bCTHj/dQsPB63wS15xM86QRSC8+kT834PxcBWJhO/5eD3qK/yD5x6QBM4nGHAkslV+3paWiytVFv0+XTbFMuYddBa+kOYOdFpIEJAL/y8ybkT/1evnCrmTyeudgECDZn/u5Of4QvrMfc79Lw8J1NfAxwrRRnsbfvlKvqJp+FXxHzP0V/jTpu+WhTVthv+aPmNPQHjT6P9NefYEXVt+hT/90b1O/mrOXaDCbroiLl0lj+qsTqv8SmL1aeg/uyRtjUvcCgIz9BWiWDPXCNvAALzRiLPhJn981I+4zurECIJdFKXIgYHluIV69YzCFtNTxD1ZXU5Q983y63ednhXWsge1bV8btts6UIi3acf1nefZ3JMcea0hF3Px3nLT4rRkaPufxAmC2xtBCXBd9EYOzCNKkRenKZvOBsRp9W2dwxMnj08Gfu2d21NtiZOwaE9Z4ObI2fp5/TrHvWAFADqxetdQAYqOZD97PFJgyNU86p0KG2w0XSe4NxJg93JXU3XnaPD7Gm4G+oUi7XbOjfEO82nTgFsyXgsBq66Xx7mPiX/BJZd6jbW4xLCaUihn3qZhDicIeHoOHummtkUFfY3TtID8YL4gjYHu0wziX39S1hO+JrFOt868oQPwVRoVPtAILApfPlDQ7fRaBTQL6CC9H6uSVwkmEQXdC7QFaADQcqChQMuA0oC6KfMHFdMXPNRhxT9L/IfN8RU/mzqCsQpOmlJBEI4pgPhg7I5WeecVI9AtHWei0yPXs3Jzc/P8EuB/r45tOUmmHrAs2t/66AB9B3QPrwgctf5XlPgdD7hiiG8U/QzoFRUxIzR9BpWY+1jVOPClf5XwCzrA3EXriomZmzYGnldYQBRrng7cTa8oZkDxEv+S7jRa7BeB5tD4vURl5cLhcrmUIHzARsinxcD6wRVFzZ1VQq9eIQeGSTotp9rCJSUlAl9nasVU41JfOaq0pu2g5gi3bMVIkiRogVm2iQOc0bckwxKnzdkxefzo5OIagYnTdwZA3xHFqZNRXCsmc+K0gIqT1ot6TNxw7+hKLRUUnjjV+yUgTHHy7x91NNZUR0CcKJjX3Ku9CHC/UQs76DaeyIgT3XkTEXFy+MQIzak1uoYlETvwp6HBpnvGkAxUaqNBypIFbqVDIAEvsT+vv59hHysu+qxQkzNc7s5iLOHbVx63x3/WVIxD3rovNe29LIfLLURlM4iD6pw0xonb4yYpHVPIkCFD5KNrDh06TL786kvSKjaWufnbQ8ZrNMFY0RrdjfIRPi+9+BJJTEiUT+Zp3bo1yV2WS9atW8cOHkILo1HTpqWv/sqvOPS/8irZwfvEk0+SO+++Sz69aOSIkSQ+IYF45ffpjFpTQFSBxED9bN+2jXz22T5y5uw5MmniRBIXF0dOnzlNLtbXk1ZOp+q2VWUxaQULpKauhpR+X4p7DsicOXPIJ1s/IX/JzyfR9KUzjQUGjjPOoR1FD07LzMoip06fIk/Nn0/cjY3E6Yw1uaVfoFj06oSWK9i+nRw4cACA3PJZQTKQoN+ro4Inn/4rHimFZ97MeeJJugLALXlIBpxBejTjDEMStBye3YItiK3JSwK+RqG10YbVGR4BmMiyxECr4TE1KAmtW7chElsD8OdthCK7NMF8PvFRHLKw2PgAGtExMU6ZEx93np7scSbSZpCGTzTBLrvsso/plCd4XFfZB+2TfCS+Tbx2nV3W/rLpdLqDA8a7QHjQ/SN02MuiVnYgHYqP4nRO13sQEeV46/IvekGF+PWZ4Bd6QaIlbVpfwn+88OdTiN+zZda1WvpM+is8lSXQipIPA/P5waIB1RHNRElOx3dXR+voMyFNoB3J4/WRtvEx5OquCSQ2Jop8V3qRHDt/kcREB7i8DK7a+gx+SS6a2yOS3imtycLbepHEVg4ZOM4ZTV7fcYps3F9GWsf4l5ABTFufwU/6+2WUQHp2bCMXNWfjUZK9+pD81tD1vduS1rHRTXWo0Wj+Yoq+wNbCnUcqSNFxF6modpM7B19O2kD5zlU2kLp6L4lzQOsIJHh1LMTp6/FS4SPkottLyiq8ZFxGJ/LoqK7kk8NlZM3OU0TAY9+kaJAOSV85+tzeoPVZEe6v755ATpfXk+f+cUR21kHVQbyPrtPpaQ0PdcZJgiyPaIgVHCoj+09WE0+9B1oySj4PkugqbQaGnFENiYWorW0kD43sTrpDY/yj4DiJckSRwMBpNKB4vGLQBB96BVm69ksS3wpaELSGF4onNSnHKK0W8IN5xLPwk4lMjWLOfV9fkKWgTatohRnia5QEh7Y+c0vOR6EUs6B7RLEFUsEBYoSjrciqidZ8tGNzrKdcW591qNkr67PAxkcmh7wFQ8F8UU4S34hT+bu1wPZY0GfSu5IQ00L6DMPs2bMvp5zgobKLc3Nza22BPfroo2j8bqXFwYBAi205ysF0uhnoKjShKI227XVvaGgQ0b/BUdqUKVOibRWzvr5eOYPbBsadGA5YBfV+HqNTG3vF3LBhg3jx4sV1eBIUUDegfmGtVADAciAEjQZ6KysrK84qWFCnHThwIPazmdwEdVJxcbHbFljfvn2ddC45kFtM+OU333xTBWmZdHVnC9wXGYJh6Nq1a086y2XvB1yg7tSZnA8XXbDTTp06VWwom2AVoWh9aOAk/3tZWdk9RhMxPBuiND4+fgR1S6AtqvbCy6eqTg49AuM4CegRoA+BvgKqAZrZMgt/GMbke7DiXyX+7f2zN2fHVNgCAyB+iyuhOm2hXQkYpfB8jg5HnJS9PA24jbYLdkgR/wHUmWgLDB48hm+C0ybG/38dltZw19auwTOqgHoCDQsLrKGmZjmQG8+pAnr1hmdPJNkG27mge6nP632BbnfqB/RO5pKSONv6bOh/fx1NNcYwTv7u2vv0lRcgDYUeP+KzA+63mFJBQ576MpUC9uFU0BpqLjAVhBvDH/7s+at3666IQYYzPlHMANoi7/ISxQ5AM4Gc9B4pDehxU8trRS9eU+UTvbcBzQAqDWwVC6aPLRsu18z6DBsBXzQYTAmHw2X7Xx6yxsyyh6XAH/XJ+2klGxRkjvJHfdpxTQeD/eiO+lxEOyivbedRj+hiq2BJdJgT6cMLqCd+uS5nGkd9zuY4HEVldRkXbwmMAQ6j9KkRkBHYi9Q8KKKAWGcv2AHLpXX2Ep1ovEqd5EQPUKsBRA6IUDc+Bt0jCwQ8QZ72ZDv+bRcYOcnN02kjKk6coNsxh6pse9iNFrHYUZ+6r0MbcJasNgYINsh4QLEbWgRsEQl9Axdlc4kumIaVnQSEJyIuoff4//M0XvOdTa2jPi3os3bcGKB9mLlJfcaB6bzxbV2fcUd9hq/PNDizpc+0ltfmqMRNM9QaaB5FTAX5RF/kwKSmz2uErc+sHIlhztpmR9RzAV+leW/lypVHIa0XdZr8ns8AaYaCfhNQCe1LbO9FL3pfQtMNtUZb6tH7mANRhl40/V2av2X0GfoYJxD/prajGnmP0vQJNL8hZ+gy7U2F+igHMo/Gf2J67hSpYq5UMcsraEVLR0tMfnSXqt+2QBWKbx1N5U9jLvmuRCrcVygZvqCB5G5snAskUSpUO9rZCDDopvTcuRIgCegmJZglzpCOHzt2D9C7ykOnEcjUJvCIGi5hqJ8QSyrgWNL7bJBmv4qKUvdS2QHTdHmJEdi38SPgrNnA2rXTPlsNT8+1BHbhwgXNB/RK8COrs/+8fiaEqzXYTkKes7D12k/6rJn6Ge5YMvsxEVOcmeW6+cGU+gyPY4+IPsMvxfH3YeuzS6fO+HDy5EnrYD/pM2vFhElVThgYOU3zTTy8IC8v8Ck5KwGfa7a5U/PoM/7jDILOnk296VEQGAMRuN2W/LcXeGeSpPfRWPSKsu9tso9TCkFbOP0fqcSvg2pJiyoYHvWPGyfVwtixYwNfwDQFNmzYsMB3N9kXDRhnmM8QDD9CycB4IFZM9hUIvLL/DRuAJ9YAfKXrncSm2jUuiU7bPOKEu1Qj4guKKGegSkL0mZp8qv0wqK6ckGL+ePQZFhM//4hfHMHPs5qp25BOy0vA6dOn5e3W3bp1M1Q/ATB8kBcn/CIL/0EVXtCZXJqSTbQS0epBMKaG8IuXCILbrvEDNIZgqFoQAIG++uqrQNfA+IMHD8oP45Z+NLFMqSAE69ixI+nSpYu8Jf348eMyMH7uEDlHwnyGKogpR/ZpZLziw/gQrpoxMPbRYs0GwAdYa+JnfxnhQ/gqBI4JLI4V0ZAzvmXxHj88M2DAALkhGMeGH3RWdlr+E0L814CMzrp06Hj7VNX2j1ifyagZeUGoUuFUwfYY8OuxVwQiU9r598nc/NvN0strvpTOfl8vmQZjmRnILZld5OvsX6eR4+eqyFOv7iFmAGWwd7eWkLaJTrI9z//d2DFZ/u16o7O6Ci/PvkHANMxjygF508MfSf/ceVL2eK5695BUWVMf5P3ENMxj6lSelJvfkkrL6jUzYxrmMQKL/HpAWq/25IsjwW4uV22D9MZ7h+VKxzTMYwps7H91I1t2B7/l/L87z5AHf/9vcvi4S8I0zGMKbMKNvUlltZvMyt0pbdl1SuZm8y4/+MipG+U0zGMKrHNKnPD8tOtJj05JJPetg37Odp+Wr99X+D0HmMe2bNoRr8gvezz33HOaiCqmaVddMOTumWeekQwkJREI14U/NtQaqKqfffZZSQMIzz3AZSIESzQEYwOFEhCA/gGXPwJ1Ma3PmC8Mi6wAxMXm3aYbQDmA8BzC/S4gfBngMeI/HVwfjLd4GNiCBQsERaviAQo3UU71R3QGiMQDKfphtR5YiApScmRrQFFyFBYYAln5zlrLDMLKjsqMFeXEAu/nz5+v/6FdVle81cN/149d9YCCiolXPe1B61TXTRGQAMzEc8j3MTNAmg3A16GyA+sCqnyPNKDf1OJb9mg8vlhmTU7dYvLFMlMkwzVhBLQLFATGQLDIYYMpOYwYGNLTTz8tXVqc2QUKAbNTtBAwbMlwOAoCY0Dh9LHmk00zoFqGja5smlFJug2g15pmG8fwQSwa7wm1LQFW1ZIl2TQCjPyILuSRsBGlqS3wta7wvQc67AdC8mpCqtwtxNmlXme67vuYpn8xn0c7nx9MY72EVnvTv7j9v1HSzOcIZDIDhuvpDT4DMJ3vOwkLT1qsswgdWWMIJr3Y9O5e8qKjpKrByOdo9jNWmM9rBGZ2cRnzGXpDdYopzDhosc58vgg2QITAmscbKvsYZ8/G7o4HnUwG6kGjjwOtB1qSm5vrMsXZjBkz8EXj7cR/8ONyCoIPY/xMeh35yiuvFOuCPfTQQ8gRvu29/s9//jMetYhx8noS3OfQezzsajxQT4hzaeqz+vr6WUDFDIjGBW2UwTTMA/RHXeVYV1c3GSjoLSt02yuXcjEP0HgjsB5ABYoHk5RgH3zwwXqIS9ZtTTyEbteuXYF6yMrKmkJb9U7lA7W1tfpjAGQ4np6eLrMP1ylwnw+UDT+wns+MeSDepcsZsL6eNj8WA49VyS4pKVmtzIx1S/uctuWYkpKSDFQJlK9l4UBaDs3Tw9CkSkxMHAhUCbQdaDwXPx7oA5o20LR95nQ6k4HygSqBJEqVNK5Hy58dzcKYfI+uoG/OjnGZMg8AaCCVz+HUizeI+I/+fIwK+TGaR19rUI5kQYdfz6bgsoDDfQ69Dwi6FoeMMyxaMQNSCzStmHpGdYs5mRi8TknDcsqdNpj74sUeQEGCDvdJboUNAtyth7hkXTA8UvCT3yUF6uGGZ09MgbhZQCFalR4/qA3m83iOZ+Z8J7MP1ylwnw+UvXNB9yA5xDwQ79IFE72e9UAz6f/XAGXvzukTIugQPxnz6nZa+DV8kexYxtwD+YW/T1dtUUjDLjKC9j/90WnQE58HjU5f/OHa9TR+PG1tBBoJ8cWmBuGBsz5Lpv1oPGcyupg4Fb885PgPM6J/9NFHuoI+duxYc4K+adOmgfTMg+FAjwENAupJ/5fTMI9hMTds2BAQ9Ntvv11uTYiTBRzuc+h9QNAhTlvQYYY7C6iYAbFlEH7NHNMwD5C+oIuiOBkoSNBxHV25IQTzAI03AusBVKB4MEkJdvfdd6+HuGQjMDJhwoRAPaxdu3YKxM0S/Z86V3JnIOg+3/F33nlHZh+uU+A+Hyh74sSJQXKIeSDeZcQZsj+T/n8NUPakSZNWq3CFdasv6JBBFvR8CNkQ1DJCknlBf+ONN4IE/YEHHlhP44MEHeLNCTpYh7qCDqboDyTonAnPnxuEAc+pWmprwt/Q0DBdcRrUTNMzlMmTJ+P7rU9aKNHqN998M1u1mNXV1WpHWeAx4oeonaE8cQZtXXWwqqoq5Wkyi7dt2xaoo1GjRrEXao0bwBU8sKLwBX3SCtJfMg1Gz9xWAgYCpIumu4biNHAsMp4NETh0AtIXmW7NuLg4tFCUB8DgEjcey3UVCf2QSAXModqrmu7E//kSBDRzdAi+jP1IyxrInH0bIk5gm9kTJxL61Rbz4gScWBYnNfuXcaYlTvhKr9oJPHdq1hmYliHitP2xDoE6GvnHCyri1EEdjJ5srRCnpsyQ/pJpMJWTrYPEB9JNiZN/qMPt000UDbQgCNntXqTIozPUeTzKo+kXDHys8DodcRK1DWRRxNfsX1QA3kwpZM5PNM75an5xAnM0RJzABLUnTmCcTGfGHiXz4rR+/XrL4jR+/PhsLcMlcqOT1+sNEad77703UEfr1q0zNTpF8fYrJQzLFHbZS4o82q3pDXX6BouT12tBnIJ/NRpogYKzRaY5g8QQcVq1apVNcfL5IidOGXkZViUnunBqoWh2QNEKeDba+6qa0SIYnou5i3bYC6YFXYMjnA5dTutMtMsZNso/SdN5JPLH6+2C4SkpaYrW7GkGDH+R/8brMIVe+wgItwQXGYE9APQt0N9I06l1z3PpuJkNv0JbaqRp8fDM2znuptIWG8YBTdKqeCVneLAh/72medR6JLRI2UZAPBgatdPoZKuWdoU0WiQsWr1prcEF/PTGz0jTkSrI0ZlwRiecAt5K/B+52PKDLciwYsZEEqxVJMESIwnWNpJgyZEEc0YSjLQkGG4bPqtCAyyD0b20yt2+70L8V3aLye+jVd1XaxoMtw8T/1lBsnMG7k+pzjeBRumu2jTl7Qr0icrz/m+nmOGKA0RubtJSDpf+5g9PJMEaIglWdcmC1UYC7KcB5QceUIxOZhtnB0xvQNloEmtcy25m48J4OpFFKwl93Tk0HufzLqtgx0nTtzcLqBH4JuHO9bVSzGLKTRIFwk/fzgpHOa7m/i8gitOGwwFjCw62wKbQ4qHdO5IDT7bTmsUUpJgWbyTX4V12wIiizlT7md6AMs5qp20IU5R+GlDC0RoZGRmWlGBhYeFGIxVkWgm2iBUUIgGDBw8OKMGioqL1cB9QgnDvsqppA0oQgAJK0AhItZjwkKEStFpnQUrQDFdmwSZDcUfYAoMHVZUgxCdbbk1eCWLxACRECZoGow3A3xfY6WfjLj1BFwTBNCJ/ppJmMc0cvYKnW5iqs2Y9AdDKIWohYCrOctU4S2Bt2zaZt3hWBIbKykprYOwUi/Pnz8tXPGeD/W/2kJ3mLSYLeFSZbbCInDJGX6OMiAT8JJsRlM2wwKz2KcuyyULYssmHiMjmpVFn/9my+f8CDADxtGyxX23T8wAAAABJRU5ErkJggg==) no-repeat 0 -672px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72] .message-count[_ngcontent-ssr-c72],
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .title-bar[_ngcontent-ssr-c72] .message-wording[_ngcontent-ssr-c72] {
    float: left
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] {
    max-height: 0;
    transition: max-height .5s ease-in-out;
    transition-delay: .5s
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] {
    opacity: 0;
    transition: opacity .5s ease-in-out;
    transition-delay: 0s
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] citi-text-header[_ngcontent-ssr-c72] {
    font-weight: 700;
    font-family: Interstate_Light, sans-serif
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] citi-text-header[_ngcontent-ssr-c72]>* {
    margin: 0;
    padding: 10px 20px 0 13px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] p[_ngcontent-ssr-c72] {
    padding: 0 13px;
    font-size: 12px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] ul[_ngcontent-ssr-c72] {
    margin: 10px 0 15px;
    padding: 0 20px 0 24px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] ul[_ngcontent-ssr-c72] li[_ngcontent-ssr-c72] {
    list-style-type: none;
    font-family: Arial, sans-serif;
    margin: 0 0 5px;
    position: relative
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] ul[_ngcontent-ssr-c72] li[_ngcontent-ssr-c72]:last-child {
    margin-bottom: 0
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] ul[_ngcontent-ssr-c72] li[_ngcontent-ssr-c72]:before {
    content: "";
    position: absolute;
    left: -10px;
    top: 3px;
    width: 0;
    height: 0;
    border-color: transparent transparent transparent #858585;
    border-style: solid;
    border-width: 6px 0 6px 6px
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] ul[_ngcontent-ssr-c72] li[_ngcontent-ssr-c72] citi-cta[_ngcontent-ssr-c72] a {
    font-size: 12px;
    font-family: Arial, sans-serif;
    width: 100%;
    display: block;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin-right: 0
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] .controls[_ngcontent-ssr-c72] {
    padding: 0 20px 10px 13px;
    display: flex;
    justify-content: space-between
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] .controls[_ngcontent-ssr-c72] citi-cta[_ngcontent-ssr-c72] a {
    font-family: Arial, sans-serif;
    font-size: 12px;
    margin: 0
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages.open[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] {
    visibility: visible;
    transition-delay: 0s
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages.open[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] {
    max-height: 200px;
    transition: max-height .5s ease-in-out;
    transition-delay: 0s
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .content[_ngcontent-ssr-c72] .messages.open[_ngcontent-ssr-c72] .popup[_ngcontent-ssr-c72] .popup-content[_ngcontent-ssr-c72] .popup-items[_ngcontent-ssr-c72] {
    opacity: 1;
    transition: opacity .5s ease-in-out;
    transition-delay: .5s
  }
  
  [_nghost-ssr-c72]>.welcome[_ngcontent-ssr-c72] .logo[_ngcontent-ssr-c72] {
    margin-left: 15px;
    margin-top: 10px
  }
  </style>
  <style>
  a[_ngcontent-ssr-c38],
  abbr[_ngcontent-ssr-c38],
  acronym[_ngcontent-ssr-c38],
  address[_ngcontent-ssr-c38],
  applet[_ngcontent-ssr-c38],
  article[_ngcontent-ssr-c38],
  aside[_ngcontent-ssr-c38],
  audio[_ngcontent-ssr-c38],
  b[_ngcontent-ssr-c38],
  big[_ngcontent-ssr-c38],
  blockquote[_ngcontent-ssr-c38],
  body[_ngcontent-ssr-c38],
  canvas[_ngcontent-ssr-c38],
  caption[_ngcontent-ssr-c38],
  center[_ngcontent-ssr-c38],
  cite[_ngcontent-ssr-c38],
  code[_ngcontent-ssr-c38],
  dd[_ngcontent-ssr-c38],
  del[_ngcontent-ssr-c38],
  details[_ngcontent-ssr-c38],
  dfn[_ngcontent-ssr-c38],
  div[_ngcontent-ssr-c38],
  dl[_ngcontent-ssr-c38],
  dt[_ngcontent-ssr-c38],
  em[_ngcontent-ssr-c38],
  embed[_ngcontent-ssr-c38],
  fieldset[_ngcontent-ssr-c38],
  figcaption[_ngcontent-ssr-c38],
  figure[_ngcontent-ssr-c38],
  footer[_ngcontent-ssr-c38],
  form[_ngcontent-ssr-c38],
  h1[_ngcontent-ssr-c38],
  h2[_ngcontent-ssr-c38],
  h3[_ngcontent-ssr-c38],
  h4[_ngcontent-ssr-c38],
  h5[_ngcontent-ssr-c38],
  h6[_ngcontent-ssr-c38],
  header[_ngcontent-ssr-c38],
  hgroup[_ngcontent-ssr-c38],
  html[_ngcontent-ssr-c38],
  i[_ngcontent-ssr-c38],
  iframe[_ngcontent-ssr-c38],
  img[_ngcontent-ssr-c38],
  ins[_ngcontent-ssr-c38],
  kbd[_ngcontent-ssr-c38],
  label[_ngcontent-ssr-c38],
  legend[_ngcontent-ssr-c38],
  li[_ngcontent-ssr-c38],
  mark[_ngcontent-ssr-c38],
  menu[_ngcontent-ssr-c38],
  nav[_ngcontent-ssr-c38],
  object[_ngcontent-ssr-c38],
  ol[_ngcontent-ssr-c38],
  output[_ngcontent-ssr-c38],
  p[_ngcontent-ssr-c38],
  pre[_ngcontent-ssr-c38],
  q[_ngcontent-ssr-c38],
  ruby[_ngcontent-ssr-c38],
  s[_ngcontent-ssr-c38],
  samp[_ngcontent-ssr-c38],
  section[_ngcontent-ssr-c38],
  small[_ngcontent-ssr-c38],
  span[_ngcontent-ssr-c38],
  strike[_ngcontent-ssr-c38],
  strong[_ngcontent-ssr-c38],
  sub[_ngcontent-ssr-c38],
  summary[_ngcontent-ssr-c38],
  sup[_ngcontent-ssr-c38],
  table[_ngcontent-ssr-c38],
  tbody[_ngcontent-ssr-c38],
  td[_ngcontent-ssr-c38],
  tfoot[_ngcontent-ssr-c38],
  th[_ngcontent-ssr-c38],
  thead[_ngcontent-ssr-c38],
  time[_ngcontent-ssr-c38],
  tr[_ngcontent-ssr-c38],
  tt[_ngcontent-ssr-c38],
  u[_ngcontent-ssr-c38],
  ul[_ngcontent-ssr-c38],
  var[_ngcontent-ssr-c38],
  video[_ngcontent-ssr-c38] {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline
  }
  
  article[_ngcontent-ssr-c38],
  aside[_ngcontent-ssr-c38],
  details[_ngcontent-ssr-c38],
  figcaption[_ngcontent-ssr-c38],
  figure[_ngcontent-ssr-c38],
  footer[_ngcontent-ssr-c38],
  header[_ngcontent-ssr-c38],
  hgroup[_ngcontent-ssr-c38],
  menu[_ngcontent-ssr-c38],
  nav[_ngcontent-ssr-c38],
  section[_ngcontent-ssr-c38] {
    display: block
  }
  
  body[_ngcontent-ssr-c38] {
    line-height: 1
  }
  
  ol[_ngcontent-ssr-c38],
  ul[_ngcontent-ssr-c38] {
    list-style: none
  }
  
  blockquote[_ngcontent-ssr-c38],
  q[_ngcontent-ssr-c38] {
    quotes: none
  }
  
  blockquote[_ngcontent-ssr-c38]:after,
  blockquote[_ngcontent-ssr-c38]:before,
  q[_ngcontent-ssr-c38]:after,
  q[_ngcontent-ssr-c38]:before {
    content: "";
    content: none
  }
  
  table[_ngcontent-ssr-c38] {
    border-collapse: collapse;
    border-spacing: 0
  }
  
  .citi-modal-backdrop[_ngcontent-ssr-c38] {
    z-index: 9999
  }
  
  .citi-modal[_ngcontent-ssr-c38] {
    z-index: 10000
  }
  
  .citi-modal[_ngcontent-ssr-c38] .modal-dialog[_ngcontent-ssr-c38] {
    width: 55%;
    max-width: 1200px
  }
  
  @media (max-width:480px) {
    .citi-modal[_ngcontent-ssr-c38] .modal-dialog[_ngcontent-ssr-c38] {
      width: 100%;
      max-height: 100%;
      overflow: auto
    }
  }
  
  @media (min-width:480px) {
    .citi-modal[_ngcontent-ssr-c38] .modal-dialog[_ngcontent-ssr-c38] {
      width: 100%
    }
    .citi-modal[_ngcontent-ssr-c38] .modal-dialog[_ngcontent-ssr-c38] .modal-footer[_ngcontent-ssr-c38] citi-cta[_ngcontent-ssr-c38] {
      display: inline-block
    }
  }
  
  @media (min-width:768px) {
    .citi-modal[_ngcontent-ssr-c38] .modal-dialog[_ngcontent-ssr-c38] {
      width: 65%
    }
  }
  
  @media (min-width:1200px) {
    .citi-modal[_ngcontent-ssr-c38] .modal-dialog[_ngcontent-ssr-c38] {
      width: 60%
    }
  }
  
  @media (min-width:1440px) {
    .citi-modal[_ngcontent-ssr-c38] .modal-dialog[_ngcontent-ssr-c38] {
      width: 55%
    }
  }
  
  .citi-modal.scrollable[_ngcontent-ssr-c38] .modal-body[_ngcontent-ssr-c38] {
    max-height: 360px;
    overflow-x: hidden;
    overflow-y: auto
  }
  
  @media (max-width:480px) {
    .citi-modal[_ngcontent-ssr-c38] .modal-footer[_ngcontent-ssr-c38] .btn {
      width: 100%
    }
  }
  
  @media (min-width:480px) {
    .citi-modal[_ngcontent-ssr-c38] .modal-footer[_ngcontent-ssr-c38] .btn {
      width: auto
    }
  }
  
  .citi-modal[_ngcontent-ssr-c38] button.close-button[_ngcontent-ssr-c38] {
    padding: 0;
    border: 0;
    width: 15px;
    height: 15px;
    margin-top: 4px;
    margin-right: 4px;
    background-repeat: no-repeat;
    background-color: transparent;
    -webkit-appearance: none;
    opacity: 1;
    float: right;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 11'%3E%3Ctitle%3E06-close-white%3C/title%3E%3Cpath d='M21.41,20l3.8-3.79a1,1,0,0,0-1.42-1.42L20,18.59l-3.79-3.8a1,1,0,0,0-1.42,1.42L18.59,20l-3.8,3.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,21.41l3.79,3.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z' transform='translate(-14.5 -14.5)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .citi-modal[_ngcontent-ssr-c38] button.close-button[_ngcontent-ssr-c38]:focus,
  .citi-modal[_ngcontent-ssr-c38] button.close-button[_ngcontent-ssr-c38]:hover {
    opacity: 1;
    margin-top: 0;
    margin-right: 0;
    height: 25px;
    width: 25px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22 22'%3E%3Ctitle%3E06-close-white-hover%3C/title%3E%3Cpath d='M21.41,20.15l3.8-3.79a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L20,18.74,16.21,15a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l3.8,3.79L14.79,24a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0L20,21.57l3.79,3.79a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41ZM20,9A11,11,0,1,0,31,20,11,11,0,0,0,20,9' transform='translate(-9 -9)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .modal.in[_ngcontent-ssr-c38] {
    overflow-x: hidden;
    overflow-y: auto
  }
  
  .botPadding[_ngcontent-ssr-c38] {
    padding-bottom: 20px!important
  }
  
  .marginBetweenBtns[_ngcontent-ssr-c38] {
    margin-left: 20px
  }
  
  @media (max-width:480px) {
    .marginBetweenBtns[_ngcontent-ssr-c38] {
      margin-left: 0
    }
  }
  
  .header[_ngcontent-ssr-c38] {
    display: block;
    box-sizing: border-box;
    margin-top: 0;
    margin-bottom: 20px;
    font-family: Interstate_Light, sans-serif;
    font-size: 42px;
    font-weight: 200;
    line-height: 3.125rem;
    text-align: left;
    letter-spacing: normal
  }
  </style>
  <style>
  a[_ngcontent-ssr-c86],
  abbr[_ngcontent-ssr-c86],
  acronym[_ngcontent-ssr-c86],
  address[_ngcontent-ssr-c86],
  applet[_ngcontent-ssr-c86],
  article[_ngcontent-ssr-c86],
  aside[_ngcontent-ssr-c86],
  audio[_ngcontent-ssr-c86],
  b[_ngcontent-ssr-c86],
  big[_ngcontent-ssr-c86],
  blockquote[_ngcontent-ssr-c86],
  body[_ngcontent-ssr-c86],
  canvas[_ngcontent-ssr-c86],
  caption[_ngcontent-ssr-c86],
  center[_ngcontent-ssr-c86],
  cite[_ngcontent-ssr-c86],
  code[_ngcontent-ssr-c86],
  dd[_ngcontent-ssr-c86],
  del[_ngcontent-ssr-c86],
  details[_ngcontent-ssr-c86],
  dfn[_ngcontent-ssr-c86],
  div[_ngcontent-ssr-c86],
  dl[_ngcontent-ssr-c86],
  dt[_ngcontent-ssr-c86],
  em[_ngcontent-ssr-c86],
  embed[_ngcontent-ssr-c86],
  fieldset[_ngcontent-ssr-c86],
  figcaption[_ngcontent-ssr-c86],
  figure[_ngcontent-ssr-c86],
  footer[_ngcontent-ssr-c86],
  form[_ngcontent-ssr-c86],
  h1[_ngcontent-ssr-c86],
  h2[_ngcontent-ssr-c86],
  h3[_ngcontent-ssr-c86],
  h4[_ngcontent-ssr-c86],
  h5[_ngcontent-ssr-c86],
  h6[_ngcontent-ssr-c86],
  header[_ngcontent-ssr-c86],
  hgroup[_ngcontent-ssr-c86],
  html[_ngcontent-ssr-c86],
  i[_ngcontent-ssr-c86],
  iframe[_ngcontent-ssr-c86],
  img[_ngcontent-ssr-c86],
  ins[_ngcontent-ssr-c86],
  kbd[_ngcontent-ssr-c86],
  label[_ngcontent-ssr-c86],
  legend[_ngcontent-ssr-c86],
  li[_ngcontent-ssr-c86],
  mark[_ngcontent-ssr-c86],
  menu[_ngcontent-ssr-c86],
  nav[_ngcontent-ssr-c86],
  object[_ngcontent-ssr-c86],
  ol[_ngcontent-ssr-c86],
  output[_ngcontent-ssr-c86],
  p[_ngcontent-ssr-c86],
  pre[_ngcontent-ssr-c86],
  q[_ngcontent-ssr-c86],
  ruby[_ngcontent-ssr-c86],
  s[_ngcontent-ssr-c86],
  samp[_ngcontent-ssr-c86],
  section[_ngcontent-ssr-c86],
  small[_ngcontent-ssr-c86],
  span[_ngcontent-ssr-c86],
  strike[_ngcontent-ssr-c86],
  strong[_ngcontent-ssr-c86],
  sub[_ngcontent-ssr-c86],
  summary[_ngcontent-ssr-c86],
  sup[_ngcontent-ssr-c86],
  table[_ngcontent-ssr-c86],
  tbody[_ngcontent-ssr-c86],
  td[_ngcontent-ssr-c86],
  tfoot[_ngcontent-ssr-c86],
  th[_ngcontent-ssr-c86],
  thead[_ngcontent-ssr-c86],
  time[_ngcontent-ssr-c86],
  tr[_ngcontent-ssr-c86],
  tt[_ngcontent-ssr-c86],
  u[_ngcontent-ssr-c86],
  ul[_ngcontent-ssr-c86],
  var[_ngcontent-ssr-c86],
  video[_ngcontent-ssr-c86] {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline
  }
  
  article[_ngcontent-ssr-c86],
  aside[_ngcontent-ssr-c86],
  details[_ngcontent-ssr-c86],
  figcaption[_ngcontent-ssr-c86],
  figure[_ngcontent-ssr-c86],
  footer[_ngcontent-ssr-c86],
  header[_ngcontent-ssr-c86],
  hgroup[_ngcontent-ssr-c86],
  menu[_ngcontent-ssr-c86],
  nav[_ngcontent-ssr-c86],
  section[_ngcontent-ssr-c86] {
    display: block
  }
  
  body[_ngcontent-ssr-c86] {
    line-height: 1
  }
  
  ol[_ngcontent-ssr-c86],
  ul[_ngcontent-ssr-c86] {
    list-style: none
  }
  
  blockquote[_ngcontent-ssr-c86],
  q[_ngcontent-ssr-c86] {
    quotes: none
  }
  
  blockquote[_ngcontent-ssr-c86]:after,
  blockquote[_ngcontent-ssr-c86]:before,
  q[_ngcontent-ssr-c86]:after,
  q[_ngcontent-ssr-c86]:before {
    content: "";
    content: none
  }
  
  table[_ngcontent-ssr-c86] {
    border-collapse: collapse;
    border-spacing: 0
  }
  
  [_nghost-ssr-c86] citi-modal .modal .modal-dialog .modal-content {
    text-align: left;
    border: none;
    border-radius: 0;
    background-color: #fff;
    box-shadow: none;
    width: 344px;
    height: auto
  }
  
  [_nghost-ssr-c86] citi-modal .citi-modal {
    margin-top: 50px
  }
  
  [_nghost-ssr-c86] .citi-modal .modal-dialog {
    width: 344px!important;
    margin: 0 auto;
    margin: 40px auto!important
  }
  
  [_nghost-ssr-c86] citi-text-header .header-level-2 {
    font-size: 26px
  }
  
  [_nghost-ssr-c86] .citi-modal .modal-header citi-icon2 div {
    right: 8px;
    top: 10px;
    position: absolute
  }
  
  [_nghost-ssr-c86] citi-modal .modal-body {
    padding-right: 20px!important;
    padding-left: 20px!important
  }
  
  [_nghost-ssr-c86] citi-modal .modal-body div {
    position: relative
  }
  
  [_nghost-ssr-c86] citi-modal .modal-body:last-child {
    margin-bottom: 0
  }
  
  [_nghost-ssr-c86] citi-modal citi-form-container .row .linkBlock {
    margin: 10px 0
  }
  
  [_nghost-ssr-c86] .signonButton citi-cta button {
    width: 100%!important
  }
  
  .linkBlock[_ngcontent-ssr-c86] a[_ngcontent-ssr-c86] {
    font-size: 12px!important;
    white-space: normal!important;
    text-align: left!important;
    vertical-align: top!important;
    margin: 0!important;
    width: auto!important
  }
  
  [_nghost-ssr-c86] citi-modal .modal .modal-footer {
    padding-top: 0;
    padding-bottom: 0
  }
  
  .form-group[_ngcontent-ssr-c86] {
    margin-bottom: 0!important
  }
  
  .password-input[_ngcontent-ssr-c86] {
    padding-top: 10px
  }
  
  @media only screen and (max-width:600px) {
    [_nghost-ssr-c86] .citi-modal .modal-dialog {
      width: 100%!important
    }
    [_nghost-ssr-c86] citi-modal .modal .modal-dialog .modal-content {
      text-align: left;
      border: none;
      border-radius: 0;
      background-color: #fff;
      box-shadow: none;
      width: 100%;
      height: auto;
      margin: 0 auto
    }
    [_nghost-ssr-c86] citi-modal .citi-modal {
      margin-top: 0
    }
  }
  
  citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] {
    background: #fff;
    max-width: 665px
  }
  
  @media (max-width:480px) {
    citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] {
      min-height: 100%
    }
  }
  
  citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] .form-group[_ngcontent-ssr-c86] {
    width: 100%;
    margin: 0
  }
  
  @media (max-width:480px) {
    citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] .citi-modal-content[_ngcontent-ssr-c86] {
      max-height: 100%
    }
  }
  
  citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] .citi-modal-content[_ngcontent-ssr-c86] citi-cta[_ngcontent-ssr-c86],
  citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] .citi-modal-content[_ngcontent-ssr-c86] citi-cta[_ngcontent-ssr-c86] button[_ngcontent-ssr-c86] {
    width: 100%
  }
  
  citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] citi-text-header[_ngcontent-ssr-c86]>[_ngcontent-ssr-c86] {
    margin-bottom: 15px
  }
  
  citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] {
    max-width: 450px!important
  }
  
  citi-modal[_ngcontent-ssr-c86] .citi-modal-box[_ngcontent-ssr-c86] .citi-modal-content[_ngcontent-ssr-c86] {
    padding-bottom: 20px;
    max-height: none
  }
  
  citi-modal[_ngcontent-ssr-c86] .remember-username[_ngcontent-ssr-c86] {
    clear: both;
    position: relative;
    bottom: 3px
  }
  
  citi-modal[_ngcontent-ssr-c86] .remember-username[_ngcontent-ssr-c86] citi-input-group[_ngcontent-ssr-c86] fieldset[_ngcontent-ssr-c86] {
    margin: 0 0 -20px!important
  }
  
  citi-modal[_ngcontent-ssr-c86] .remember-username[_ngcontent-ssr-c86] citi-input-group[_ngcontent-ssr-c86] legend[_ngcontent-ssr-c86] {
    margin: 0!important
  }
  
  citi-modal[_ngcontent-ssr-c86] .remember-username[_ngcontent-ssr-c86] citi-input-group[_ngcontent-ssr-c86] .checkbox[_ngcontent-ssr-c86] {
    margin: 20px 0
  }
  
  citi-modal[_ngcontent-ssr-c86] .remember-username[_ngcontent-ssr-c86] p[_ngcontent-ssr-c86] {
    font-size: 12px;
    margin-top: 20px
  }
  </style>
  <style>
  a[_ngcontent-ssr-c87],
  abbr[_ngcontent-ssr-c87],
  acronym[_ngcontent-ssr-c87],
  address[_ngcontent-ssr-c87],
  applet[_ngcontent-ssr-c87],
  article[_ngcontent-ssr-c87],
  aside[_ngcontent-ssr-c87],
  audio[_ngcontent-ssr-c87],
  b[_ngcontent-ssr-c87],
  big[_ngcontent-ssr-c87],
  blockquote[_ngcontent-ssr-c87],
  body[_ngcontent-ssr-c87],
  canvas[_ngcontent-ssr-c87],
  caption[_ngcontent-ssr-c87],
  center[_ngcontent-ssr-c87],
  cite[_ngcontent-ssr-c87],
  code[_ngcontent-ssr-c87],
  dd[_ngcontent-ssr-c87],
  del[_ngcontent-ssr-c87],
  details[_ngcontent-ssr-c87],
  dfn[_ngcontent-ssr-c87],
  div[_ngcontent-ssr-c87],
  dl[_ngcontent-ssr-c87],
  dt[_ngcontent-ssr-c87],
  em[_ngcontent-ssr-c87],
  embed[_ngcontent-ssr-c87],
  fieldset[_ngcontent-ssr-c87],
  figcaption[_ngcontent-ssr-c87],
  figure[_ngcontent-ssr-c87],
  footer[_ngcontent-ssr-c87],
  form[_ngcontent-ssr-c87],
  h1[_ngcontent-ssr-c87],
  h2[_ngcontent-ssr-c87],
  h3[_ngcontent-ssr-c87],
  h4[_ngcontent-ssr-c87],
  h5[_ngcontent-ssr-c87],
  h6[_ngcontent-ssr-c87],
  header[_ngcontent-ssr-c87],
  hgroup[_ngcontent-ssr-c87],
  html[_ngcontent-ssr-c87],
  i[_ngcontent-ssr-c87],
  iframe[_ngcontent-ssr-c87],
  img[_ngcontent-ssr-c87],
  ins[_ngcontent-ssr-c87],
  kbd[_ngcontent-ssr-c87],
  label[_ngcontent-ssr-c87],
  legend[_ngcontent-ssr-c87],
  li[_ngcontent-ssr-c87],
  mark[_ngcontent-ssr-c87],
  menu[_ngcontent-ssr-c87],
  nav[_ngcontent-ssr-c87],
  object[_ngcontent-ssr-c87],
  ol[_ngcontent-ssr-c87],
  output[_ngcontent-ssr-c87],
  p[_ngcontent-ssr-c87],
  pre[_ngcontent-ssr-c87],
  q[_ngcontent-ssr-c87],
  ruby[_ngcontent-ssr-c87],
  s[_ngcontent-ssr-c87],
  samp[_ngcontent-ssr-c87],
  section[_ngcontent-ssr-c87],
  small[_ngcontent-ssr-c87],
  span[_ngcontent-ssr-c87],
  strike[_ngcontent-ssr-c87],
  strong[_ngcontent-ssr-c87],
  sub[_ngcontent-ssr-c87],
  summary[_ngcontent-ssr-c87],
  sup[_ngcontent-ssr-c87],
  table[_ngcontent-ssr-c87],
  tbody[_ngcontent-ssr-c87],
  td[_ngcontent-ssr-c87],
  tfoot[_ngcontent-ssr-c87],
  th[_ngcontent-ssr-c87],
  thead[_ngcontent-ssr-c87],
  time[_ngcontent-ssr-c87],
  tr[_ngcontent-ssr-c87],
  tt[_ngcontent-ssr-c87],
  u[_ngcontent-ssr-c87],
  ul[_ngcontent-ssr-c87],
  var[_ngcontent-ssr-c87],
  video[_ngcontent-ssr-c87] {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline
  }
  
  article[_ngcontent-ssr-c87],
  aside[_ngcontent-ssr-c87],
  details[_ngcontent-ssr-c87],
  figcaption[_ngcontent-ssr-c87],
  figure[_ngcontent-ssr-c87],
  footer[_ngcontent-ssr-c87],
  header[_ngcontent-ssr-c87],
  hgroup[_ngcontent-ssr-c87],
  menu[_ngcontent-ssr-c87],
  nav[_ngcontent-ssr-c87],
  section[_ngcontent-ssr-c87] {
    display: block
  }
  
  body[_ngcontent-ssr-c87] {
    line-height: 1
  }
  
  ol[_ngcontent-ssr-c87],
  ul[_ngcontent-ssr-c87] {
    list-style: none
  }
  
  blockquote[_ngcontent-ssr-c87],
  q[_ngcontent-ssr-c87] {
    quotes: none
  }
  
  blockquote[_ngcontent-ssr-c87]:after,
  blockquote[_ngcontent-ssr-c87]:before,
  q[_ngcontent-ssr-c87]:after,
  q[_ngcontent-ssr-c87]:before {
    content: "";
    content: none
  }
  
  table[_ngcontent-ssr-c87] {
    border-collapse: collapse;
    border-spacing: 0
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] {
    max-width: 1440px;
    height: 100%;
    margin: 0 auto;
    position: relative
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .logo[_ngcontent-ssr-c87] {
    display: inline-flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-content: center;
    align-items: center;
    height: 100%;
    line-height: 100%
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .logo[_ngcontent-ssr-c87] a[_ngcontent-ssr-c87] {
    display: inline-block;
    height: 40px;
    position: relative;
    top: -2px
  }
  
  @media (max-width:768px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .logo[_ngcontent-ssr-c87] a[_ngcontent-ssr-c87] {
      height: 30px
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .logo[_ngcontent-ssr-c87] a[_ngcontent-ssr-c87] img[_ngcontent-ssr-c87] {
    height: 100%;
    vertical-align: middle
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] {
    display: flex;
    float: right;
    height: 100%
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87] {
    height: 100%;
    margin-right: 40px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87] .contact-us-section[_ngcontent-ssr-c87]:nth-of-type(4) {
    border-top: 2px solid #999;
    padding: 10px 0 0;
    margin-top: 20px;
    margin-bottom: 40px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87] .contact-us-content[_ngcontent-ssr-c87] h3[_ngcontent-ssr-c87] {
    font-size: 1.625rem;
    line-height: 2rem;
    font-family: Interstate_Light, sans-serif;
    font-weight: 400;
    color: #333;
    text-transform: none;
    letter-spacing: normal;
    margin-bottom: 12px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87] strong[_ngcontent-ssr-c87] {
    font-weight: 700
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87] p[_ngcontent-ssr-c87] {
    margin: 12px 0 15px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87] .separator-line[_ngcontent-ssr-c87] {
    border-top: 2px solid #999;
    margin-bottom: 20px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87] .underline[_ngcontent-ssr-c87] {
    text-decoration: underline
  }
  
  @media (min-width:1200px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-modal[_ngcontent-ssr-c87] .citi-modal-box {
      width: 30%
    }
  }
  
  @media (min-width:1440px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-modal[_ngcontent-ssr-c87] .citi-modal-box {
      width: 30%
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-cta.en_spaceBtwPhone[_ngcontent-ssr-c87] button {
    margin-right: 80px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-cta.es_spaceBtwPhone[_ngcontent-ssr-c87] button {
    margin-right: -20px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-cta[_ngcontent-ssr-c87] button {
    display: inline-block;
    line-height: 1;
    border: none;
    background: transparent url(cbol-pre-login-static-assets/citi-branding-assets/images/Citi-Mortgage_Phone.png) no-repeat 50%;
    background-size: 18px 18px;
    height: 100%;
    width: 65px
  }
  
  @media (max-width:768px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-cta[_ngcontent-ssr-c87] button {
      background-size: 16px 16px
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-cta[_ngcontent-ssr-c87] button.open,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .contactUs[_ngcontent-ssr-c87]>citi-cta[_ngcontent-ssr-c87] button:hover {
    background-color: rgba(0, 0, 0, .25)
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] {
    height: 100%
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] {
    height: 100%;
    width: 70px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .searchText[_ngcontent-ssr-c87] {
    margin-right: 43px;
    position: absolute;
    top: 24px;
    right: 10px;
    font-family: Interstate_Bold, sans-serif;
    color: #fff;
    font-size: 16px;
    pointer-events: none;
    font-weight: 700
  }
  
  @media (max-width:768px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .searchText[_ngcontent-ssr-c87] {
      display: none;
      margin-right: 10px;
      position: absolute;
      top: 20px;
      right: 39px;
      font-family: Interstate_Bold, sans-serif;
      color: #fff;
      font-size: 12px;
      pointer-events: none;
      font-weight: 700
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>[_ngcontent-ssr-c87] {
    float: right
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showEnglishBg[_ngcontent-ssr-c87] button,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showEnglishBg[_ngcontent-ssr-c87] button.activeSearch,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showEnglishBg[_ngcontent-ssr-c87] button.open,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showEnglishBg[_ngcontent-ssr-c87] button:focus,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showEnglishBg[_ngcontent-ssr-c87] button:hover {
    background: transparent url(cbol-pre-login-static-assets/citi-branding-assets/images/search.svg) no-repeat 100%;
    background-color: transparent!important;
    background-position: 0;
    font-family: Interstate-Regular, sans-serif;
    text-decoration: none;
    color: #fff
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showSpanishBg[_ngcontent-ssr-c87] button {
    background: transparent url(../../images/catalogue/search-white.png) no-repeat 100%;
    background-size: 20px 20px;
    background-position-x: 69px;
    height: 100%;
    width: 95px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showSpanishBg[_ngcontent-ssr-c87] button.open,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showSpanishBg[_ngcontent-ssr-c87] button:focus,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showSpanishBg[_ngcontent-ssr-c87] button:hover {
    background-color: rgba(0, 0, 0, .25)
  }
  
  @media (max-width:768px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta.showSpanishBg[_ngcontent-ssr-c87] button {
      width: 26px;
      margin-right: -19px;
      right: 35px;
      background-size: 16px 16px;
      height: 100%;
      background-position-x: 6px;
      position: relative
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta[_ngcontent-ssr-c87] {
    height: 100%
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta[_ngcontent-ssr-c87] button {
    display: inline-block;
    line-height: 1;
    margin-right: 11px;
    border: none;
    height: 100%;
    width: 200px;
    right: -16px;
    position: relative
  }
  
  @media (max-width:768px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87]>citi-cta[_ngcontent-ssr-c87] button {
      background-size: 16px 16px;
      height: 100%;
      background-position-x: 6px;
      position: relative;
      margin-right: 0;
      right: -6px
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] {
    display: inline-flex;
    line-height: 1;
    white-space: nowrap;
    position: relative;
    z-index: 5;
    height: 50px
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] [_ngcontent-ssr-c87]:-moz-placeholder,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] [_ngcontent-ssr-c87]:-ms-input-placeholder,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] [_ngcontent-ssr-c87]::-moz-placeholder,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] [_ngcontent-ssr-c87]::-webkit-input-placeholder {
    color: #666;
    opacity: 1
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] {
    width: 250px
  }
  
  @media (max-width:768px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] {
      width: 100%;
      display: none
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] tr {
    border: none
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box.gsc-input-box-focus,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box.gsc-input-box-hover {
    box-shadow: none
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input {
    border: none;
    outline: 0;
    color: #666;
    background: #eee!important;
    text-indent: 0!important;
    text-rendering: optimizeLegibility!important;
    -webkit-font-smoothing: antialiased!important;
    padding: 0 20px!important
  }
  
  @media (min-width:769px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input:focus {
      border: 2px solid #056dae!important
    }
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input::-ms-clear {
    display: none
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input:focus:placholder-shown {
    color: #333!important
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input:focus::-webkit-input-placeholder {
    color: #333!important
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input:focus::-moz-placeholder {
    color: #333!important
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input:focus:-ms-input-placeholder {
    color: #333!important
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input:focus:-moz-placeholder {
    color: #333!important
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] .gsib_b,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-search-button {
    display: none
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button {
    border: none;
    border-radius: 0;
    background-color: #056dae;
    color: #fff;
    font-family: Interstate_Bold, san-serif;
    height: 50px;
    width: 50px;
    min-width: auto;
    margin: 0;
    padding: 0;
    float: none
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button:focus,
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button:hover {
    background-color: #002a54
  }
  
  .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button[type=reset] {
    width: 40px;
    padding: 0;
    background: transparent url(../../images/catalogue/desktop-search-close-btn.png) no-repeat 50%;
    background-size: 10px 10px;
    border: none;
    position: absolute;
    right: 0;
    bottom: 0;
    margin-right: 0
  }
  
  @media (-ms-high-contrast:active),
  (-ms-high-contrast:none) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button[type=reset] {
      right: 10px
    }
  }
  
  @media (min-width:769px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] {
      transition: width .35s ease-in-out;
      position: relative;
      top: 6px;
      right: 75px;
      overflow: hidden;
      width: 0;
      max-width: 300px;
      visibility: hidden
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .container[_ngcontent-ssr-c87] {
      display: inline-flex;
      line-height: 1;
      white-space: nowrap;
      padding-right: 0;
      padding-left: 0;
      position: absolute;
      z-index: 5;
      width: auto!important;
      height: 100%
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input.open[_ngcontent-ssr-c87] {
      width: 320px;
      max-width: 320px;
      transition: width .35s ease-in-out;
      visibility: visible
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input.bump[_ngcontent-ssr-c87] {
      margin-right: 32px
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input {
      width: 250px!important;
      height: 50px!important;
      margin-top: 0!important;
      padding-right: 35px!important;
      -webkit-appearance: none!important;
      border-radius: 0!important
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button[type=reset] {
      margin-right: 50px;
      right: 0
    }
  }
  
  @media (max-width:768px) {
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] {
      transition: height .35s ease-in-out;
      position: absolute;
      left: 0;
      top: 55px;
      width: 100%;
      height: 0;
      overflow: hidden;
      border-bottom: 1px solid #eee
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .container[_ngcontent-ssr-c87] {
      width: auto!important;
      padding: 0
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input.open[_ngcontent-ssr-c87] {
      height: 50px;
      transition: height .35s ease-in-out
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] .search-input[_ngcontent-ssr-c87] td.gsc-input .gsc-input-box input.gsc-input {
      width: 100%!important;
      height: 50px!important;
      padding-right: 40px!important;
      background-color: #fff!important;
      position: absolute!important;
      bottom: 0!important
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button {
      display: none
    }
    .banner[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .buttons[_ngcontent-ssr-c87] .search[_ngcontent-ssr-c87] form[_ngcontent-ssr-c87] .input[_ngcontent-ssr-c87] citi-cta[_ngcontent-ssr-c87] button[type=reset] {
      height: 50px;
      display: block
    }
  }
  
  .banner.blue[_ngcontent-ssr-c87] {
    background: linear-gradient(180deg, #00bdf2, #00b3f0 18%, #0066b3 77%, #004985)
  }
  
  .banner.gold[_ngcontent-ssr-c87] {
    background: linear-gradient(180deg, #b4975a, #a0864a 49%, #78622a 99%)
  }
  
  .banner.orange[_ngcontent-ssr-c87] {
    background: linear-gradient(180deg, #fcb314, #ff7200 99%)
  }
  
  .banner.white[_ngcontent-ssr-c87] {
    background-color: #fff
  }
  
  .banner.black[_ngcontent-ssr-c87] {
    background-color: #333
  }
  
  .banner.brown[_ngcontent-ssr-c87] {
    background-color: #281814
  }
  
  .banner.priority[_ngcontent-ssr-c87] {
    background-color: #0e2a48
  }
  
  .banner.priority[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .logo[_ngcontent-ssr-c87] a[_ngcontent-ssr-c87],
  .banner.white[_ngcontent-ssr-c87] .content-wrap[_ngcontent-ssr-c87] .logo[_ngcontent-ssr-c87] a[_ngcontent-ssr-c87] {
    position: static
  }
  
  [_nghost-ssr-c87] citi-tooltip .tooltip-wrapper .tool-tip .wrapper.position-left {
    width: 380px!important;
    height: 70px;
    margin-top: 10px
  }
  
  [_nghost-ssr-c87] citi-tooltip .tooltip-pointer {
    margin-top: 20px
  }
  
  [_nghost-ssr-c87] citi-tooltip .trigger {
    background-image: none!important
  }
  
  #mobileLogo[_ngcontent-ssr-c87] {
    width: 115px;
    height: 40px;
    margin-left: -12px
  }
  </style>
  <style>
  .navigation[_ngcontent-ssr-c74] {
    background: #333;
    padding-bottom: 20px
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74] {
      padding-bottom: 0
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 40px 6.667% 0;
    display: flex;
    justify-content: space-between
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] {
      display: block;
      padding: 7px 5% 0
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] {
    width: 16.6666%;
    padding-right: 20px
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] {
      width: 100%;
      padding-right: 20px
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74]:last-child {
    padding-right: 0
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .title[_ngcontent-ssr-c74] {
    color: #fff;
    font-family: Interstate_Bold, sans-serif;
    padding: 0;
    margin-top: 0;
    margin-bottom: 16px;
    background: 0 0;
    border: none;
    font-size: 14px;
    line-height: 24px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .title[_ngcontent-ssr-c74] {
      margin: 0;
      padding: 20px 0;
      position: relative
    }
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .title[_ngcontent-ssr-c74]:after {
      content: "";
      width: 20px;
      height: 20px;
      position: absolute;
      right: -15px;
      top: calc(50% - 10px);
      background: transparent url(cbol-pre-login-static-assets/citi-branding-assets/images/arrow-btn-down-white-sm.png) no-repeat 50%;
      -webkit-tap-highlight-color: transparent;
      transition: all .18s linear;
      transform: rotate(0)
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section.open[_ngcontent-ssr-c74] button.title[_ngcontent-ssr-c74]:after {
    transition: all .18s linear;
    transform: rotate(-180deg)
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] button.title[_ngcontent-ssr-c74] {
    text-align: left;
    width: 100%;
    display: none
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] button.title[_ngcontent-ssr-c74] {
      padding-left: 0;
      padding-right: 0
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] {
    margin: 0;
    padding: 0
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] {
      padding-left: 0;
      padding-right: 0;
      max-height: 0;
      overflow: hidden;
      transition: max-height .18s ease-in-out
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] {
    list-style-type: none;
    font-size: 12px;
    line-height: 18px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] a,
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] button {
    font-size: 12px;
    line-height: 18px;
    text-align: initial!important;
    color: #fff;
    text-decoration: none;
    white-space: normal;
    text-align: left;
    padding-left: 0;
    margin-right: 0
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] a,
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] button {
      display: inline-block;
      padding: 10px 0
    }
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] a:first-child,
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] button:first-child {
      padding-top: 0
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] a:hover,
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] li[_ngcontent-ssr-c74] citi-cta[_ngcontent-ssr-c74] button:hover {
    text-decoration: underline
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] {
      border-top: 1px solid #666
    }
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74]:first-child,
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74]:last-child {
      border: none
    }
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section.last[_ngcontent-ssr-c74] {
      border-bottom: 1px solid #666
    }
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] button.title[_ngcontent-ssr-c74] {
      display: block
    }
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] div.title[_ngcontent-ssr-c74] {
      display: none
    }
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section.open[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] {
      max-height: 500px;
      transition: max-height .18s ease-in-out
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] {
    padding-top: 7px;
    float: right
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] div[_ngcontent-ssr-c74] {
    float: left
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] .equalHousing[_ngcontent-ssr-c74],
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] .fdic[_ngcontent-ssr-c74] {
    background-size: 70px;
    height: 30px;
    margin-right: 15px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] .equalHousing[_ngcontent-ssr-c74]:last-child,
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] .fdic[_ngcontent-ssr-c74]:last-child {
    margin-right: 0
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] .fdic[_ngcontent-ssr-c74] {
    background-position: 0 79%;
    width: 49px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] .fdic[_ngcontent-ssr-c74] img[_ngcontent-ssr-c74] {
    width: 49px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] .equalHousing[_ngcontent-ssr-c74] {
    background-position: 0 100%;
    width: 31.5px;
    margin-left: 15px
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .section[_ngcontent-ssr-c74] .images[_ngcontent-ssr-c74] {
      float: none;
      margin-bottom: 42px
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] {
    line-height: 0;
    width: 16.6666%;
    padding-left: 20px;
    float: left
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] {
      width: 100%
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .registerMark[_ngcontent-ssr-c74] {
    font-size: 12px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74]:last-child {
    padding-right: 0
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] button[_ngcontent-ssr-c74] {
    border: none;
    padding: 0;
    margin-bottom: 2px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] button[_ngcontent-ssr-c74]:focus {
    border: 1px dotted #fff!important
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .appBadge0[_ngcontent-ssr-c74],
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .appBadge1[_ngcontent-ssr-c74] {
    height: 40px;
    width: 118px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] button.jdpower[_ngcontent-ssr-c74] {
    background: 0 0
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] img.jdpowerimg[_ngcontent-ssr-c74] {
    height: 110px!important
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .jdpowerlink[_ngcontent-ssr-c74]:hover {
    cursor: pointer
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .jdpowerlink[_ngcontent-ssr-c74] {
    text-indent: 291px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .jdpowermp[_ngcontent-ssr-c74] {
    margin-bottom: -23px;
    display: inline
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .jdpowermp[_ngcontent-ssr-c74]+a[_ngcontent-ssr-c74] {
    cursor: pointer
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] {
    margin-top: 5px;
    margin-bottom: 16px;
    margin-left: -48px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] img[_ngcontent-ssr-c74] {
    width: 118px;
    height: 40px;
    cursor: pointer
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] ul[_ngcontent-ssr-c74] img[_ngcontent-ssr-c74] {
      cursor: pointer
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .title[_ngcontent-ssr-c74] {
    color: #fff;
    font-family: Interstate_Bold, sans-serif;
    padding: 0 5px 5px 0;
    margin-bottom: 0;
    background: 0 0;
    border: none;
    font-size: 14px;
    line-height: 24px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .badgeSection[_ngcontent-ssr-c74] .title[_ngcontent-ssr-c74] {
      padding: 10px 0 0 2px;
      position: relative
    }
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74] {
      padding: 19px 0 24px
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] h3[_ngcontent-ssr-c74] {
    color: #fff;
    font-family: Interstate_Bold, sans-serif;
    padding: 0 5px 16px 0;
    margin-bottom: 0;
    background: 0 0;
    border: none;
    font-size: 14px;
    line-height: 24px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] h3[_ngcontent-ssr-c74] {
      padding-bottom: 17px
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form .form-group {
    margin-bottom: 0;
    float: none;
    display: block;
    width: 100%;
    padding-right: 0;
    padding-left: 0
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-input {
    display: contents
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-input .form-group {
    float: none;
    display: block;
    width: 100%
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-input label {
    color: #fff;
    display: none
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-input input {
    display: block;
    width: 140px;
    height: 36px
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-input input {
      width: 100%
    }
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-input input[placeholder] {
    font-family: Interstate_LightItalic, sans-serif;
    font-size: 12px;
    color: #666;
    letter-spacing: 0;
    line-height: 18px;
    font-family: Interstate_Regular;
    font-style: italic;
    padding-left: 10px
  }
  
  .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-cta button {
    min-width: auto;
    float: none;
    margin-bottom: 0;
    width: 140px;
    height: 36px;
    font-family: Interstate_Regular, sans-serif;
    font-size: 14px;
    color: #fff;
    letter-spacing: 0;
    text-align: center;
    line-height: 15px;
    margin-top: 8.1px;
    font-weight: 100
  }
  
  @media (max-width:990px) {
    .navigation[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] .location-finder[_ngcontent-ssr-c74]>.content[_ngcontent-ssr-c74] citi-form-container[_ngcontent-ssr-c74] form citi-cta button {
      width: 100%
    }
  }
  </style>
  <style>
  .social[_ngcontent-ssr-c77] {
    background: #333
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 20px 6.667%;
    display: flex;
    justify-content: space-between
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] {
      width: 100%;
      display: block;
      margin: 0 auto;
      padding-left: 5%;
      padding-right: 5%;
      padding-bottom: 12px
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .JDPowerDownloadText[_ngcontent-ssr-c77] {
    display: none
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .JDPowerDownloadText[_ngcontent-ssr-c77] {
      display: block;
      padding-top: 19px
    }
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .JDPowerDownloadText[_ngcontent-ssr-c77] a[_ngcontent-ssr-c77] {
      font-size: 12px;
      color: #fff;
      width: 288px;
      height: 16px;
      align-self: center
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .registerMark[_ngcontent-ssr-c77] {
    font-size: 14px
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] {
    display: flex;
    padding-bottom: 10px
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] .JDPowerDownloadText[_ngcontent-ssr-c77] {
    display: none
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] .JDPowerDownloadText[_ngcontent-ssr-c77] {
      display: block;
      padding-top: 19px
    }
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] .JDPowerDownloadText[_ngcontent-ssr-c77] a[_ngcontent-ssr-c77] {
      font-size: 12px;
      color: #fff;
      width: 288px;
      height: 16px;
      align-self: center
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77] {
    padding-right: 24px
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77] {
      padding-right: 15px
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77] button[_ngcontent-ssr-c77] {
    background: 0 0;
    border: none;
    padding: 0;
    cursor: pointer
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77] .JDContainer[_ngcontent-ssr-c77] {
    display: flex
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77] .JDContainer[_ngcontent-ssr-c77] button[_ngcontent-ssr-c77] {
    padding-right: 24px
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77] .JDContainer[_ngcontent-ssr-c77] a[_ngcontent-ssr-c77] {
    font-size: 14px;
    color: #fff;
    width: 361px;
    height: 18px;
    align-self: center
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77] .JDContainer[_ngcontent-ssr-c77] a[_ngcontent-ssr-c77] {
      display: none
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .socialItems[_ngcontent-ssr-c77] div[_ngcontent-ssr-c77]:last-child {
    padding-right: 0
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .Appstore[_ngcontent-ssr-c77],
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .CitiLogo[_ngcontent-ssr-c77],
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .Googleplay[_ngcontent-ssr-c77],
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .facebook[_ngcontent-ssr-c77],
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .twitter[_ngcontent-ssr-c77],
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .youtube[_ngcontent-ssr-c77] {
    background-repeat: no-repeat;
    background-size: cover
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .CitiLogo[_ngcontent-ssr-c77] {
    width: 52px;
    height: 30px
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .Appstore[_ngcontent-ssr-c77] {
    width: 117px;
    height: 40.1px;
    background-position: 0 0
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .Appstore[_ngcontent-ssr-c77] {
      width: 102px;
      height: 36px
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .Googleplay[_ngcontent-ssr-c77] {
    width: 130px;
    height: 40.1px;
    background-position: 0 -45px
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .Googleplay[_ngcontent-ssr-c77] {
      width: 117px;
      height: 36px;
      background-position: 0 -41px
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .JDPowerLogo[_ngcontent-ssr-c77] {
    width: 40px;
    height: 40.1px
  }
  
  @media (max-width:990px) {
    .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .JDPowerLogo[_ngcontent-ssr-c77] {
      width: 35.6px;
      height: 36px;
      margin-right: 0
    }
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .facebook[_ngcontent-ssr-c77] {
    width: 9px;
    height: 16px
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .twitter[_ngcontent-ssr-c77] {
    width: 22px;
    height: 16px
  }
  
  .social[_ngcontent-ssr-c77] .content[_ngcontent-ssr-c77] .youtube[_ngcontent-ssr-c77] {
    width: 24px;
    height: 16px
  }
  </style>
  <style>
  .sub-navigation[_ngcontent-ssr-c75] {
    background-color: #333;
    font-size: 12px;
    padding: 0 6.667%;
    max-width: 1440px;
    margin: 0 auto 24px
  }
  
  @media (max-width:990px) {
    .sub-navigation[_ngcontent-ssr-c75] {
      padding: 0 5%
    }
  }
  
  .sub-navigation[_ngcontent-ssr-c75] [_ngcontent-ssr-c75] {
    margin: 0
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] {
    height: 68px;
    padding: 20px 0;
    border: 1px solid #666;
    border-width: 1px 0
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content.singleBorder[_ngcontent-ssr-c75] {
    border-width: 2px 0 0
  }
  
  @media (max-width:990px) {
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] {
      height: auto;
      clear: left
    }
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .copyright[_ngcontent-ssr-c75] {
    display: inline-block;
    margin-right: 20px;
    font-family: Interstate_Bold, sans-serif;
    font-size: 12px;
    color: #fff
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] {
    margin: 0;
    padding: 0;
    display: inline-block
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75] {
    display: inline-block;
    margin-right: 20px
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75] span.staticLinks[_ngcontent-ssr-c75] {
    font-size: 12px;
    color: #fff
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75] citi-cta[_ngcontent-ssr-c75] a,
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75] citi-cta[_ngcontent-ssr-c75] button {
    color: #fff;
    font-size: 12px;
    text-decoration: none;
    margin-right: 0
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75] citi-cta[_ngcontent-ssr-c75] a:hover,
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75] citi-cta[_ngcontent-ssr-c75] button:hover {
    text-decoration: underline
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75]:nth-last-child(2) {
    margin-right: 6px
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75]:nth-last-child(2) citi-cta[_ngcontent-ssr-c75] button:hover {
    text-decoration: none
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .feedback[_ngcontent-ssr-c75] citi-cta[_ngcontent-ssr-c75] button:hover {
    text-decoration: underline
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75] {
    display: inline-block
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75]>.title[_ngcontent-ssr-c75],
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75]>citi-cta[_ngcontent-ssr-c75] {
    color: #fff;
    background-color: transparent
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75]>.title[_ngcontent-ssr-c75] a[_ngcontent-ssr-c75],
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75]>.title[_ngcontent-ssr-c75] button[_ngcontent-ssr-c75],
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75]>citi-cta[_ngcontent-ssr-c75] a,
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75]>citi-cta[_ngcontent-ssr-c75] button {
    color: #fff
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75] citi-modal[_ngcontent-ssr-c75] label[_ngcontent-ssr-c75] {
    font-size: 12px;
    margin-top: 20px
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75] citi-modal[_ngcontent-ssr-c75] citi-dropdown .form-group {
    width: 100%;
    margin-bottom: 0
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] p.speedBumpCopy[_ngcontent-ssr-c75] {
    padding: 10px;
    font-weight: 400
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] span.selectCountry[_ngcontent-ssr-c75] {
    font-size: 12px;
    padding: 12px;
    top: 18px
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .feedback[_ngcontent-ssr-c75] {
    float: right;
    position: relative;
    top: 3px
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .feedback[_ngcontent-ssr-c75] citi-cta[_ngcontent-ssr-c75] button {
    background-color: transparent;
    border: none;
    color: #fff;
    padding: 0;
    margin: -20px;
    font-size: 12px;
    text-decoration: none
  }
  
  .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .feedback[_ngcontent-ssr-c75] citi-cta[_ngcontent-ssr-c75] button:after {
    content: " ";
    padding-left: 15px;
    margin-left: 5px;
    background-size: 83% 80%;
    background-position-y: 2px
  }
  
  @media (max-width:990px) {
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .copyright[_ngcontent-ssr-c75],
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75],
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .feedback[_ngcontent-ssr-c75],
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75] {
      float: none;
      display: block;
      margin: 0 0 10px
    }
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .copyright[_ngcontent-ssr-c75]:last-child,
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .country-selector[_ngcontent-ssr-c75]:last-child,
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] .feedback[_ngcontent-ssr-c75]:last-child,
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75] ul[_ngcontent-ssr-c75]:last-child {
      margin-bottom: 0
    }
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75]>ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75] {
      display: block;
      margin-bottom: 5px
    }
    .sub-navigation[_ngcontent-ssr-c75] .content[_ngcontent-ssr-c75]>ul[_ngcontent-ssr-c75] li[_ngcontent-ssr-c75]:last-child {
      margin-bottom: 0
    }
  }
  
  citi-modal[_ngcontent-ssr-c75] .modal-dialog {
    margin: 40px auto!important
  }
  </style>
  <style>
  .disclaimer[_ngcontent-ssr-c76] {
    background: #333;
    padding-bottom: 12px
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 6.667%
  }
  
  @media (max-width:990px) {
    .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] {
      padding: 0 5%
    }
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] h4 {
    font-family: Interstate_Bold, sans-serif;
    font-size: 12px;
    color: #fff;
    line-height: 16px
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] .wealth-tiles-disclaimer {
    padding: 1rem 3rem 1.13rem 1rem;
    font-size: 12px;
    letter-spacing: 1.5px;
    line-height: 18px;
    border: 1.5px solid;
    font-family: Interstate_Bold, sans-serif
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] .wealth-tiles-disclaimer2 a {
    color: #056dae
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] a,
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] p {
    font-family: Interstate_Light, sans-serif;
    font-size: 12px;
    color: #f4f4f4;
    letter-spacing: 0;
    line-height: 18px
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] .text[_ngcontent-ssr-c76] {
    font-size: 12px;
    color: #fff
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] .text[_ngcontent-ssr-c76] p[_ngcontent-ssr-c76] {
    max-height: 100%
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] .text[_ngcontent-ssr-c76] p[_ngcontent-ssr-c76]:last-child {
    margin-bottom: 0
  }
  
  .disclaimer[_ngcontent-ssr-c76] .content[_ngcontent-ssr-c76] .text[_ngcontent-ssr-c76] a[_ngcontent-ssr-c76] {
    color: #fff
  }
  </style>
  <style>
  .sub-footer[_ngcontent-ssr-c78] {
    background: #333
  }
  
  @media (max-width:480px) {
    .sub-footer[_ngcontent-ssr-c78] .imgBottomCitiLogo_Mobile[_ngcontent-ssr-c78] {
      display: block;
      width: 100%
    }
  }
  
  @media screen and (min-width:481px) {
    .sub-footer[_ngcontent-ssr-c78] .imgBottomCitiLogo_Mobile[_ngcontent-ssr-c78] {
      display: none
    }
  }
  
  @media (max-width:480px) {
    .sub-footer[_ngcontent-ssr-c78] .imgBottomCitiLogo_Desktop[_ngcontent-ssr-c78] {
      display: none
    }
  }
  
  @media screen and (min-width:481px) {
    .sub-footer[_ngcontent-ssr-c78] .imgBottomCitiLogo_Desktop[_ngcontent-ssr-c78] {
      display: block;
      width: 100%
    }
  }
  
  .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] {
    color: #fff;
    font-size: 12px;
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 20px
  }
  
  .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] .images[_ngcontent-ssr-c78] {
    float: right
  }
  
  .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] .images[_ngcontent-ssr-c78] .equalHousing[_ngcontent-ssr-c78],
  .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] .images[_ngcontent-ssr-c78] .fdic[_ngcontent-ssr-c78] {
    cursor: default!important;
    background-size: 70px;
    height: 30px;
    margin-right: 15px
  }
  
  .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] .images[_ngcontent-ssr-c78] .equalHousing[_ngcontent-ssr-c78]:last-child,
  .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] .images[_ngcontent-ssr-c78] .fdic[_ngcontent-ssr-c78]:last-child {
    margin-right: 0
  }
  
  @media (max-width:990px) {
    .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] .images[_ngcontent-ssr-c78] {
      padding: 42px 5% 0
    }
  }
  
  .sub-footer[_ngcontent-ssr-c78] .content[_ngcontent-ssr-c78] .images[_ngcontent-ssr-c78] #cbol-footer-server[_ngcontent-ssr-c78] {
    display: inherit;
    float: left
  }
  </style>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/cedric.js" id="cedric"></script>
  <style>
  .jamp.white[_ngcontent-ssr-c37] .img[_ngcontent-ssr-c37] {
    background-image: URL(cbol-pre-login-static-assets/commonui-assets/images/jamp-spinner-white-2x.gif)
  }
  
  .jamp.white[_ngcontent-ssr-c37] .message[_ngcontent-ssr-c37] {
    color: #fff
  }
  
  .jamp[_ngcontent-ssr-c37] .img[_ngcontent-ssr-c37] {
    background-image: URL(cbol-pre-login-static-assets/commonui-assets/images/jamp-spinner-2x.gif);
    background-position: 0 0;
    background-repeat: no-repeat;
    background-size: contain;
    padding-top: 5px;
    margin-right: 3px;
    width: 30px;
    height: 30px;
    display: inline-block
  }
  
  .jamp[_ngcontent-ssr-c37] .message[_ngcontent-ssr-c37] {
    position: relative;
    top: -9px
  }
  
  .jamp.jamp-css[_ngcontent-ssr-c37] .loading[_ngcontent-ssr-c37] {
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.1.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2030%2030%22%20style%3D%22enable-background%3Anew%200%200%2030%2030%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.Drop_x0020_Shadow%7Bfill%3Anone%3B%7D%0A%09.Round_x0020_Corners_x0020_2_x0020_pt%7Bfill%3A%23FFFFFF%3Bstroke%3A%23000000%3Bstroke-miterlimit%3A10%3B%7D%0A%09.Live_x0020_Reflect_x0020_X%7Bfill%3Anone%3B%7D%0A%09.Bevel_x0020_Soft%7Bfill%3Aurl%28%23SVGID_1_%29%3B%7D%0A%09.Dusk%7Bfill%3A%23FFFFFF%3B%7D%0A%09.Foliage_GS%7Bfill%3A%23FFDD00%3B%7D%0A%09.Pompadour_GS%7Bfill-rule%3Aevenodd%3Bclip-rule%3Aevenodd%3Bfill%3A%2344ADE2%3B%7D%0A%09.st0%7Bfill%3Anone%3B%7D%0A%09.st1%7Bfill%3A%23056EAE%3B%7D%0A%3C/style%3E%0A%3ClinearGradient%20id%3D%22SVGID_1_%22%20gradientUnits%3D%22userSpaceOnUse%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%220.7071%22%20y2%3D%220.7071%22%3E%0A%09%3Cstop%20%20offset%3D%220%22%20style%3D%22stop-color%3A%23DEDFE3%22/%3E%0A%09%3Cstop%20%20offset%3D%220.1738%22%20style%3D%22stop-color%3A%23D8D9DD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.352%22%20style%3D%22stop-color%3A%23C9CACD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.5323%22%20style%3D%22stop-color%3A%23B4B5B8%22/%3E%0A%09%3Cstop%20%20offset%3D%220.7139%22%20style%3D%22stop-color%3A%23989A9C%22/%3E%0A%09%3Cstop%20%20offset%3D%220.8949%22%20style%3D%22stop-color%3A%23797C7E%22/%3E%0A%09%3Cstop%20%20offset%3D%221%22%20style%3D%22stop-color%3A%23656B6C%22/%3E%0A%3C/linearGradient%3E%0A%3Cg%3E%0A%09%3Crect%20x%3D%220%22%20class%3D%22st0%22%20width%3D%2230%22%20height%3D%2230%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M2.2%2C17.5C2.1%2C16.7%2C2%2C15.8%2C2%2C15C2%2C7.8%2C7.8%2C2%2C15%2C2s13%2C5.8%2C13%2C13c0%2C0.8-0.1%2C1.7-0.2%2C2.5h2%0A%09%09c0.1-0.8%2C0.2-1.6%2C0.2-2.5c0-8.3-6.7-15-15-15S0%2C6.7%2C0%2C15c0%2C0.8%2C0.1%2C1.7%2C0.2%2C2.5H2.2z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A");
    background-repeat: no-repeat;
    -webkit-animation: spin 1.16s linear infinite;
    animation: spin 1.16s linear infinite
  }
  
  .jamp.jamp-css.white[_ngcontent-ssr-c37] .loading[_ngcontent-ssr-c37] {
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.2.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2030%2030%22%20style%3D%22enable-background%3Anew%200%200%2030%2030%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.st0%7Bfill%3Anone%3B%7D%0A%09.st1%7Bfill%3A%23FFFFFF%3B%7D%0A%3C/style%3E%0A%3Cg%3E%0A%09%3Crect%20class%3D%22st0%22%20width%3D%2230%22%20height%3D%2230%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M2.2%2C17.5C2.1%2C16.7%2C2%2C15.8%2C2%2C15C2%2C7.8%2C7.8%2C2%2C15%2C2s13%2C5.8%2C13%2C13c0%2C0.8-0.1%2C1.7-0.2%2C2.5h2%0A%09%09c0.1-0.8%2C0.2-1.6%2C0.2-2.5c0-8.3-6.7-15-15-15S0%2C6.7%2C0%2C15c0%2C0.8%2C0.1%2C1.7%2C0.2%2C2.5H2.2z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A");
    background-repeat: no-repeat
  }
  
  @-webkit-keyframes spin {
    0% {
      transform: rotate(0)
    }
    to {
      transform: rotate(1turn)
    }
  }
  
  @keyframes spin {
    0% {
      transform: rotate(0)
    }
    to {
      transform: rotate(1turn)
    }
  }
  
  .jamp-page-level[_nghost-ssr-c37] {
    background: hsla(0, 0%, 100%, .9);
    position: fixed;
    z-index: 100;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
  }
  
  .jamp-page-level[_nghost-ssr-c37] .row[_ngcontent-ssr-c37] {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)
  }
  
  .jamp-center-css[_ngcontent-ssr-c37] {
    width: calc(100% - 60px);
    max-height: calc(100% - 60px);
    position: absolute!important;
    top: 50%!important;
    left: 50%!important;
    transform: translate(-50%, -50%)
  }
  
  .jamp[_ngcontent-ssr-c37] {
    position: relative!important;
    top: 50%!important;
    left: 0!important;
    text-align: center!important;
    transform: translateY(-50%)!important;
    margin: 0
  }
  
  .fillHeight[_ngcontent-ssr-c37] {
    min-height: 100%;
    height: 100%
  }
  
  .position-initial[_ngcontent-ssr-c37] {
    position: static
  }
  
  .citi-modal [_nghost-ssr-c37] .jamp[_ngcontent-ssr-c37] {
    margin: 30px 0 10px
  }
  </style>
  <style>
  @charset "UTF-8";
  .btn-primary.btn_white[_ngcontent-ssr-c36],
  .btn_white[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #056dae;
    border-color: #fff
  }
  
  .btn-primary.btn_white[_ngcontent-ssr-c36]:focus,
  .btn-primary.btn_white[_ngcontent-ssr-c36]:hover,
  .btn_white[_ngcontent-ssr-c36]:focus,
  .btn_white[_ngcontent-ssr-c36]:hover {
    background-color: #056dae;
    color: #fff;
    border-color: #056dae
  }
  
  .btn-primary.btn_white_on_blue[_ngcontent-ssr-c36],
  .btn_white_on_blue[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #056dae;
    border-color: #fff
  }
  
  .btn-primary.btn_white_on_blue[_ngcontent-ssr-c36]:focus,
  .btn-primary.btn_white_on_blue[_ngcontent-ssr-c36]:hover,
  .btn_white_on_blue[_ngcontent-ssr-c36]:focus,
  .btn_white_on_blue[_ngcontent-ssr-c36]:hover {
    background-color: #002a54;
    color: #fff;
    border-color: #002a54
  }
  
  .btn_dark_priority[_ngcontent-ssr-c36] {
    background-color: #0e2a48;
    color: #fff;
    border-color: #0e2a48
  }
  
  .btn_dark_priority[_ngcontent-ssr-c36]:focus,
  .btn_dark_priority[_ngcontent-ssr-c36]:hover {
    background-color: #091022;
    border-color: #091022
  }
  
  .btn-primary.btn_light_priority[_ngcontent-ssr-c36],
  .btn_light_priority[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #000;
    border-color: #fff
  }
  
  .btn-primary.btn_light_priority[_ngcontent-ssr-c36]:focus,
  .btn-primary.btn_light_priority[_ngcontent-ssr-c36]:hover,
  .btn_light_priority[_ngcontent-ssr-c36]:focus,
  .btn_light_priority[_ngcontent-ssr-c36]:hover {
    background-color: #65778a;
    color: #fff;
    border-color: #65778a
  }
  
  .btn.btn-white-disabled[_ngcontent-ssr-c36] {
    background-color: transparent;
    opacity: 1
  }
  
  .btn.btn-white-disabled[_ngcontent-ssr-c36],
  .btn.btn-white-disabled[_ngcontent-ssr-c36]:hover {
    border-color: #fff;
    color: #fff
  }
  
  .btn.btn-dark-disabled[_ngcontent-ssr-c36] {
    opacity: .5;
    background-color: transparent
  }
  
  .btn.btn-dark-disabled[_ngcontent-ssr-c36],
  .btn.btn-dark-disabled[_ngcontent-ssr-c36]:hover {
    border-color: #666;
    color: #666
  }
  
  .btn_dark_arrow_right[_ngcontent-ssr-c36] {
    background-color: #0e2a48;
    color: #fff;
    border-color: #0e2a48
  }
  
  .btn_dark_arrow_right[_ngcontent-ssr-c36]:focus,
  .btn_dark_arrow_right[_ngcontent-ssr-c36]:hover {
    background-color: #091022;
    border-color: #091022
  }
  
  .btn_dark_arrow_left[_ngcontent-ssr-c36] {
    background-color: #0e2a48;
    border-color: #0e2a48
  }
  
  .btn_dark_arrow_left[_ngcontent-ssr-c36],
  .btn_dark_arrow_left[_ngcontent-ssr-c36]:focus,
  .btn_dark_arrow_left[_ngcontent-ssr-c36]:hover {
    color: #fff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .btn_dark_arrow_left[_ngcontent-ssr-c36]:focus,
  .btn_dark_arrow_left[_ngcontent-ssr-c36]:hover {
    background-color: #091022;
    border-color: #091022
  }
  
  .btn_white_arrow_left[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #056dae;
    border-color: #fff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_white_arrow_left[_ngcontent-ssr-c36]:focus,
  .btn_white_arrow_left[_ngcontent-ssr-c36]:hover {
    background-color: #056dae;
    color: #fff;
    border-color: #056dae;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_white_arrow_right[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #056dae;
    border-color: #fff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_white_arrow_right[_ngcontent-ssr-c36]:focus,
  .btn_white_arrow_right[_ngcontent-ssr-c36]:hover {
    background-color: #056dae;
    color: #fff;
    border-color: #056dae;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_blue_hover_arrow_left[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #056dae;
    border-color: #fff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_blue_hover_arrow_left[_ngcontent-ssr-c36]:focus,
  .btn_blue_hover_arrow_left[_ngcontent-ssr-c36]:hover {
    background-color: #65778a;
    color: #fff;
    border-color: #65778a;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_blue_hover_arrow_right[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #056dae;
    border-color: #fff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_blue_hover_arrow_right[_ngcontent-ssr-c36]:focus,
  .btn_blue_hover_arrow_right[_ngcontent-ssr-c36]:hover {
    background-color: #65778a;
    color: #fff;
    border-color: #65778a;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_white_priority_arrow_left[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #0e2a48;
    border-color: #fff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%230e2a48;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_white_priority_arrow_left[_ngcontent-ssr-c36]:focus,
  .btn_white_priority_arrow_left[_ngcontent-ssr-c36]:hover {
    background-color: #65778a;
    color: #fff;
    border-color: #65778a;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_white_priority_arrow_right[_ngcontent-ssr-c36] {
    background-color: #fff!important;
    color: #0e2a48!important;
    border-color: #fff!important;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%230e2a48;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_white_priority_arrow_right[_ngcontent-ssr-c36]:focus,
  .btn_white_priority_arrow_right[_ngcontent-ssr-c36]:hover {
    background-color: #65778a!important;
    color: #fff!important;
    border-color: #65778a!important;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")!important
  }
  
  .btn_gold[_ngcontent-ssr-c36] {
    background-color: #8e6f32;
    color: #fff;
    border-color: #8e6f32
  }
  
  .btn_gold[_ngcontent-ssr-c36]:focus,
  .btn_gold[_ngcontent-ssr-c36]:hover {
    background-color: #745b2d;
    color: #fff;
    border-color: #745b2d
  }
  
  .btn_gold.disabled[_ngcontent-ssr-c36],
  .btn_gold.disabled[_ngcontent-ssr-c36]:focus,
  .btn_gold.disabled[_ngcontent-ssr-c36]:hover,
  .btn_gold[disabled][_ngcontent-ssr-c36],
  .btn_gold[disabled][_ngcontent-ssr-c36]:focus,
  .btn_gold[disabled][_ngcontent-ssr-c36]:hover {
    color: rgba(0, 0, 0, .5);
    border-color: rgba(0, 0, 0, .5)
  }
  
  .gold_arrow_right[_ngcontent-ssr-c36],
  .gold_arrow_right[_ngcontent-ssr-c36]:focus,
  .gold_arrow_right[_ngcontent-ssr-c36]:hover {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .gold_arrow_right.disabled[_ngcontent-ssr-c36],
  .gold_arrow_right[disabled][_ngcontent-ssr-c36] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:rgba(0, 0, 0, 0.5);fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .gold_arrow_left[_ngcontent-ssr-c36],
  .gold_arrow_left[_ngcontent-ssr-c36]:focus,
  .gold_arrow_left[_ngcontent-ssr-c36]:hover {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .gold_arrow_left.disabled[_ngcontent-ssr-c36],
  .gold_arrow_left[disabled][_ngcontent-ssr-c36] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:rgba(0, 0, 0, 0.5);fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .cta-bg-dark [_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36],
  .dark.btn_gold[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36] {
    background-color: #fff;
    color: #8e6f32;
    border-color: #fff
  }
  
  .cta-bg-dark [_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:focus,
  .cta-bg-dark [_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:hover,
  .cta-bg-dark[_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:focus,
  .cta-bg-dark[_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:hover,
  .dark.btn_gold[_ngcontent-ssr-c36]:focus,
  .dark.btn_gold[_ngcontent-ssr-c36]:hover,
  .theme-dark [_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:focus,
  .theme-dark [_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:hover,
  .theme-dark[_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:focus,
  .theme-dark[_nghost-ssr-c36] .btn_gold[_ngcontent-ssr-c36]:hover {
    background-color: #8e6f32;
    color: #fff;
    border-color: #8e6f32
  }
  
  .cta-bg-dark [_nghost-ssr-c36] .disabled.btn_gold[_ngcontent-ssr-c36],
  .cta-bg-dark [_nghost-ssr-c36] [disabled].btn_gold[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .disabled.btn_gold[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] [disabled].btn_gold[_ngcontent-ssr-c36],
  .disabled.dark.btn_gold[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .disabled.btn_gold[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] [disabled].btn_gold[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .disabled.btn_gold[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] [disabled].btn_gold[_ngcontent-ssr-c36],
  [disabled].dark.btn_gold[_ngcontent-ssr-c36] {
    background-color: transparent;
    color: #fff;
    border-color: #fff
  }
  
  .cta-bg-dark [_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36],
  .dark.gold_arrow_right[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%238e6f32;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .cta-bg-dark [_nghost-ssr-c36] .disabled.gold_arrow_right[_ngcontent-ssr-c36],
  .cta-bg-dark [_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:focus,
  .cta-bg-dark [_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:hover,
  .cta-bg-dark [_nghost-ssr-c36] [disabled].gold_arrow_right[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .disabled.gold_arrow_right[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:focus,
  .cta-bg-dark[_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:hover,
  .cta-bg-dark[_nghost-ssr-c36] [disabled].gold_arrow_right[_ngcontent-ssr-c36],
  .dark.gold_arrow_right[_ngcontent-ssr-c36]:focus,
  .dark.gold_arrow_right[_ngcontent-ssr-c36]:hover,
  .disabled.dark.gold_arrow_right[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .disabled.gold_arrow_right[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:focus,
  .theme-dark [_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:hover,
  .theme-dark [_nghost-ssr-c36] [disabled].gold_arrow_right[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .disabled.gold_arrow_right[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:focus,
  .theme-dark[_nghost-ssr-c36] .gold_arrow_right[_ngcontent-ssr-c36]:hover,
  .theme-dark[_nghost-ssr-c36] [disabled].gold_arrow_right[_ngcontent-ssr-c36],
  [disabled].dark.gold_arrow_right[_ngcontent-ssr-c36] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .cta-bg-dark [_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36],
  .dark.gold_arrow_left[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%238e6f32;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .cta-bg-dark [_nghost-ssr-c36] .disabled.gold_arrow_left[_ngcontent-ssr-c36],
  .cta-bg-dark [_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:focus,
  .cta-bg-dark [_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:hover,
  .cta-bg-dark [_nghost-ssr-c36] [disabled].gold_arrow_left[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .disabled.gold_arrow_left[_ngcontent-ssr-c36],
  .cta-bg-dark[_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:focus,
  .cta-bg-dark[_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:hover,
  .cta-bg-dark[_nghost-ssr-c36] [disabled].gold_arrow_left[_ngcontent-ssr-c36],
  .dark.gold_arrow_left[_ngcontent-ssr-c36]:focus,
  .dark.gold_arrow_left[_ngcontent-ssr-c36]:hover,
  .disabled.dark.gold_arrow_left[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .disabled.gold_arrow_left[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:focus,
  .theme-dark [_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:hover,
  .theme-dark [_nghost-ssr-c36] [disabled].gold_arrow_left[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .disabled.gold_arrow_left[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:focus,
  .theme-dark[_nghost-ssr-c36] .gold_arrow_left[_ngcontent-ssr-c36]:hover,
  .theme-dark[_nghost-ssr-c36] [disabled].gold_arrow_left[_ngcontent-ssr-c36],
  [disabled].dark.gold_arrow_left[_ngcontent-ssr-c36] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .secondary[_ngcontent-ssr-c36] {
    white-space: normal
  }
  
  .secondary[_ngcontent-ssr-c36],
  .secondary[_ngcontent-ssr-c36]:focus,
  .secondary[_ngcontent-ssr-c36]:hover {
    text-decoration: none
  }
  
  .btn-link.btn-icon[_ngcontent-ssr-c36]:before {
    content: "";
    left: -20px;
    top: 4px;
    height: 12px;
    width: 12px;
    background-repeat: no-repeat;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 14 14'%3E%3Cpath d='M26,19H21V14a1,1,0,0,0-2,0v5H14a1,1,0,0,0,0,2h5v5a1,1,0,0,0,2,0V21h5a1,1,0,0,0,0-2' transform='translate(-13 -13)' style='fill:%23056DAE;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .btn-link.btn-icon[_ngcontent-ssr-c36]:focus:before,
  .btn-link.btn-icon[_ngcontent-ssr-c36]:hover:before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 14 14'%3E%3Cpath d='M26,19H21V14a1,1,0,0,0-2,0v5H14a1,1,0,0,0,0,2h5v5a1,1,0,0,0,2,0V21h5a1,1,0,0,0,0-2' transform='translate(-13 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .theme-dark [_nghost-ssr-c36] .secondary[_ngcontent-ssr-c36]:focus,
  .theme-dark [_nghost-ssr-c36] .secondary[_ngcontent-ssr-c36]:hover,
  .theme-dark[_nghost-ssr-c36] .secondary[_ngcontent-ssr-c36]:focus,
  .theme-dark[_nghost-ssr-c36] .secondary[_ngcontent-ssr-c36]:hover {
    text-decoration: underline
  }
  
  .noMargin[_ngcontent-ssr-c36] {
    margin: 0
  }
  
  .chevron-link.chevron-link.bold[_ngcontent-ssr-c36],
  .chevron-link.chevron-link.bold[_ngcontent-ssr-c36]:focus,
  .chevron-link.chevron-link.bold[_ngcontent-ssr-c36]:hover,
  .chevron-link.chevron-link[_ngcontent-ssr-c36],
  .chevron-link.chevron-link[_ngcontent-ssr-c36]:focus,
  .chevron-link.chevron-link[_ngcontent-ssr-c36]:hover {
    background-image: none;
    margin-right: 0
  }
  
  .chevron-link.chevron-link[_ngcontent-ssr-c36]:after {
    content: "??";
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-color: transparent;
    background-position: top 50% right 0;
    display: inline-block;
    margin-left: 6px
  }
  
  .chevron-link.chevron-link[_ngcontent-ssr-c36]:focus:after,
  .chevron-link.chevron-link[_ngcontent-ssr-c36]:hover:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .chevron-link.chevron-link.bold[_ngcontent-ssr-c36]:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .chevron-link.chevron-link.bold[_ngcontent-ssr-c36]:focus:after,
  .chevron-link.chevron-link.bold[_ngcontent-ssr-c36]:hover:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .chevron-link.chevron-link.left[_ngcontent-ssr-c36]:after {
    display: none
  }
  
  .chevron-link.chevron-link.left[_ngcontent-ssr-c36]:before {
    content: "??";
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-color: transparent;
    background-position: top 50% left 0;
    display: inline-block;
    margin-right: 6px
  }
  
  .chevron-link.chevron-link.left[_ngcontent-ssr-c36]:focus:before,
  .chevron-link.chevron-link.left[_ngcontent-ssr-c36]:hover:before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .chevron-link.chevron-link.left.bold[_ngcontent-ssr-c36]:before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .chevron-link.chevron-link.left.bold[_ngcontent-ssr-c36]:focus:before,
  .chevron-link.chevron-link.left.bold[_ngcontent-ssr-c36]:hover:before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .theme-dark [_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36]:focus,
  .theme-dark [_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36]:hover,
  .theme-dark [_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36],
  .theme-dark [_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36]:focus,
  .theme-dark [_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36]:hover,
  .theme-dark[_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36]:focus,
  .theme-dark[_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36]:hover,
  .theme-dark[_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36],
  .theme-dark[_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36]:focus,
  .theme-dark[_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36]:hover {
    background-image: none;
    margin-right: 0
  }
  
  .theme-dark [_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36]:after,
  .theme-dark [_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36]:after,
  .theme-dark[_nghost-ssr-c36] .chevron-link.bold[_ngcontent-ssr-c36]:after,
  .theme-dark[_nghost-ssr-c36] .chevron-link[_ngcontent-ssr-c36]:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .theme-dark [_nghost-ssr-c36] .chevron-link.left.bold[_ngcontent-ssr-c36]:before,
  .theme-dark [_nghost-ssr-c36] .chevron-link.left[_ngcontent-ssr-c36]:before,
  .theme-dark[_nghost-ssr-c36] .chevron-link.left.bold[_ngcontent-ssr-c36]:before,
  .theme-dark[_nghost-ssr-c36] .chevron-link.left[_ngcontent-ssr-c36]:before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  </style>
  <style>
  @charset "UTF-8";
  [_nghost-ssr-c84] {
    max-width: 1440px;
    padding-bottom: 2%;
    padding-top: .5%;
    display: flex
  }
  
  .hideChildren[_ngcontent-ssr-c84]>h6[_ngcontent-ssr-c84] {
    display: none
  }
  
  @media screen and (max-width:991.9px) {
    .plusIcon[_ngcontent-ssr-c84] {
      background: #fff
    }
    .minusIcon[_ngcontent-ssr-c84] {
      background: #eee
    }
    .plusIcon[_ngcontent-ssr-c84]:before {
      content: "+"
    }
    .minusIcon[_ngcontent-ssr-c84]:before,
    .plusIcon[_ngcontent-ssr-c84]:before {
      font-size: 18px;
      position: absolute;
      right: 15px
    }
    .minusIcon[_ngcontent-ssr-c84]:before {
      content: "???";
      top: 0
    }
  }
  
  .subMenuGroupLIPayments[_ngcontent-ssr-c84] {
    padding: 7px 5px 7px 17px;
    width: 100%;
    float: left
  }
  
  .subMenuGroupLITransfers[_ngcontent-ssr-c84] {
    float: left;
    width: 32%;
    padding: 7px 5px 7px 17px
  }
  
  .subMenuGroupUL[_ngcontent-ssr-c84] {
    padding: 0;
    background: #fff;
    display: flex;
    flex-direction: column;
    width: 100%;
    font-family: Interstate-Regular, sans-serif
  }
  
  @media screen and (min-width:1120px) {
    .subMenuGroupUL[_ngcontent-ssr-c84] {
      position: relative
    }
  }
  
  @media screen and (max-width:1120px) {
    .subMenuGroupUL[_ngcontent-ssr-c84] {
      background: #fff!important;
      width: 100%!important;
      padding-top: 0
    }
  }
  
  .quickLinks[_ngcontent-ssr-c84] {
    margin-top: 17px;
    line-height: 30px
  }
  
  @media screen and (min-width:1119.9px) {
    .quickLinks[_ngcontent-ssr-c84] {
      margin-right: 25px
    }
  }
  
  @media screen and (max-width:1119.9px) {
    .quickLinks[_ngcontent-ssr-c84] {
      box-shadow: 0 2px 4px rgba(0, 0, 0, .125)
    }
  }
  
  .quickLinks[_ngcontent-ssr-c84] .quickCont[_ngcontent-ssr-c84] {
    position: relative;
    margin-bottom: 28px
  }
  
  @media screen and (min-width:1120px) {
    .quickLinks[_ngcontent-ssr-c84] .quickCont[_ngcontent-ssr-c84] {
      margin-bottom: 35px!important
    }
  }
  
  .quickLinks[_ngcontent-ssr-c84] .quickCont[_ngcontent-ssr-c84] .qlSubTitle[_ngcontent-ssr-c84] {
    color: #666;
    font-size: 12px;
    letter-spacing: 1px;
    position: absolute;
    font-family: Interstate-Regular, sans-serif;
    font-weight: 500;
    text-transform: uppercase
  }
  
  @media screen and (max-width:1119.9px) {
    .quickLinks[_ngcontent-ssr-c84] .quickCont[_ngcontent-ssr-c84] .qlSubTitle[_ngcontent-ssr-c84] {
      left: -35px!important
    }
  }
  
  .quickLinks[_ngcontent-ssr-c84] .quickCont[_ngcontent-ssr-c84] .qlSubTitle[_ngcontent-ssr-c84]:focus {
    display: block
  }
  
  .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] {
    list-style: none;
    position: relative;
    cursor: pointer;
    margin-bottom: 12px;
    margin-top: 12px
  }
  
  @media screen and (min-width:1119.9px) {
    .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] {
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content
    }
  }
  
  .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] .qlText[_ngcontent-ssr-c84] {
    color: #333
  }
  
  .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] .qlText[_ngcontent-ssr-c84]:focus,
  .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] .qlText[_ngcontent-ssr-c84]:hover {
    text-decoration: underline
  }
  
  @media screen and (max-width:1120px) {
    .subMenuGroupUL[_ngcontent-ssr-c84] {
      background: #fff!important;
      padding-left: 26px;
      padding-top: 12px
    }
    .subMenuGroupULPaddingRemove[_ngcontent-ssr-c84] {
      padding-left: 0
    }
    .quickLinks[_ngcontent-ssr-c84] {
      margin-top: 23px;
      padding-left: 53px
    }
    .quickLinks[_ngcontent-ssr-c84] .quickCont[_ngcontent-ssr-c84] {
      position: relative;
      margin-left: 35px;
      height: 24px;
      margin-bottom: 0
    }
    .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] {
      height: 48px;
      margin-bottom: 0
    }
    .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] .qlText[_ngcontent-ssr-c84] {
      color: #666
    }
    .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] .qlText[_ngcontent-ssr-c84]:before {
      left: -31px!important;
      top: 6px!important
    }
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84],
  .subMenuGroupTitle[_ngcontent-ssr-c84] {
    list-style-type: none
  }
  
  .subMenuGroupTitle[_ngcontent-ssr-c84] {
    margin: 0
  }
  
  .subMenuGroupTitle[_ngcontent-ssr-c84] h6[_ngcontent-ssr-c84] {
    padding-left: 19px;
    padding-top: 10px;
    text-transform: uppercase;
    font-size: 12px;
    color: #666;
    letter-spacing: 0;
    margin: 5px 0;
    cursor: text;
    font-family: Interstate_Regular, sans-serif
  }
  
  .subMenuGroupLIOthers[_ngcontent-ssr-c84],
  .subMenuGroupLIOthers[_ngcontent-ssr-c84] img[_ngcontent-ssr-c84] {
    display: inline-block;
    vertical-align: middle
  }
  
  .subMenuGroupLIOthers[_ngcontent-ssr-c84] img[_ngcontent-ssr-c84] {
    height: 64px;
    width: 64px;
    background-color: #dff2ff;
    border-radius: 50%
  }
  
  .subMenuGroupLIPEdiv[_ngcontent-ssr-c84] {
    float: none
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84] {
    margin: 0;
    line-height: 1.5
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84]:first-child {
    width: 218px;
    margin-top: 15px!important
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84] .child-links[_ngcontent-ssr-c84]:focus {
    outline: 0
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84] .child-links[_ngcontent-ssr-c84]:focus-visible {
    border: 2px solid #000;
    border-radius: 3px
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84] .child-links[_ngcontent-ssr-c84] {
    display: inline-block;
    text-align: left;
    text-decoration: none;
    color: #333;
    padding: 6px 20px;
    line-height: 1.5;
    cursor: pointer;
    white-space: pre-wrap;
    font-family: Interstate_Light, sans-serif;
    font-size: 16px
  }
  
  @media screen and (min-width:1119.9px) {
    .subMenuGroupLI[_ngcontent-ssr-c84] .child-links[_ngcontent-ssr-c84] {
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content
    }
  }
  
  @media screen and (max-width:1118px) {
    .subMenuGroupLI[_ngcontent-ssr-c84] .child-links[_ngcontent-ssr-c84] {
      font-weight: 600
    }
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84] .mobileBlueColor[_ngcontent-ssr-c84] {
    color: #056dae
  }
  
  .subMenuGroupLI[_ngcontent-ssr-c84] .child-links[_ngcontent-ssr-c84]:hover {
    text-decoration: underline
  }
  
  @media screen and (max-width:1120px) {
    .child-links[_ngcontent-ssr-c84] {
      font-size: 14px;
      line-height: .5;
      color: #002d72!important
    }
    .subMenuGroupTitle[_ngcontent-ssr-c84] {
      color: #999
    }
    .subMenuGroupLI[_ngcontent-ssr-c84] {
      width: 100%!important;
      margin: 0!important;
      height: 48px
    }
  }
  
  .profileSeperation[_ngcontent-ssr-c84] {
    margin: 0 auto;
    color: #bfbfbf
  }
  
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#cbp[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#citiBonusOffers[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#citiConcierge[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#citiWelAdv[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#clas[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#compareBenefits[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#finPlan[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#findRelMan[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#hec[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#invIns[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#ktCenter[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#mailOffer[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#marketIns[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#mortCalc[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#preQualify[_ngcontent-ssr-c84]:before,
  [_nghost-ssr-c84] .quickLinks[_ngcontent-ssr-c84] .quickLinksClass[_ngcontent-ssr-c84] a#savingsMade[_ngcontent-ssr-c84]:before {
    content: "";
    width: 26px;
    height: 26px;
    position: absolute;
    background-repeat: no-repeat;
    left: -36px;
    top: 6px;
    shape-rendering: geometricPrecision
  }
  
  @media screen and (max-width:1120px) {
    .subChildNavTitles[_ngcontent-ssr-c84] {
      position: relative;
      width: 100%
    }
  }
  
  @media screen and (max-width:1120px) and (max-width:1120px) {
    .subChildNavTitles[_ngcontent-ssr-c84]:after {
      content: "";
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 10px;
      right: 15px;
      width: 20px;
      height: 20px
    }
  }
  
  @media screen and (max-width:1120px) {
    .explore-sub-nav[_ngcontent-ssr-c84] {
      position: absolute;
      top: 0;
      background: #fff;
      left: 0;
      height: 100%;
      padding: 6% 6% 6% 10%
    }
    .explore-sub-nav[_ngcontent-ssr-c84] .exploreUl[_ngcontent-ssr-c84] {
      list-style: none;
      line-height: 50px
    }
    .explore-sub-nav[_ngcontent-ssr-c84] .exploreUl[_ngcontent-ssr-c84] li[_ngcontent-ssr-c84] a[_ngcontent-ssr-c84] {
      color: #002d72;
      font-weight: 600
    }
    .explore-sub-nav[_ngcontent-ssr-c84] .subNavFatherTitle[_ngcontent-ssr-c84] {
      position: relative
    }
  }
  
  @media screen and (max-width:1120px) and (max-width:1120px) {
    .explore-sub-nav[_ngcontent-ssr-c84] .subNavFatherTitle[_ngcontent-ssr-c84] {
      border-bottom: 1px solid #eee;
      padding-bottom: 3%;
      margin-bottom: 4%;
      margin-left: 35px
    }
  }
  
  @media screen and (max-width:1120px) and (min-width:1120px) and (max-width:1440px) {
    .explore-sub-nav[_ngcontent-ssr-c84] .subNavFatherTitle[_ngcontent-ssr-c84] a[_ngcontent-ssr-c84] {
      color: #666!important;
      font-size: 12px!important
    }
  }
  
  @media screen and (max-width:1120px) and (max-width:1120px) and (min-width:350px) {
    .explore-sub-nav[_ngcontent-ssr-c84] .subNavFatherTitle[_ngcontent-ssr-c84] a[_ngcontent-ssr-c84] {
      color: #000!important;
      font-family: Interstate_Regular, sans-serif;
      font-size: 16px
    }
    .explore-sub-nav[_ngcontent-ssr-c84] .subNavFatherTitle[_ngcontent-ssr-c84] a[_ngcontent-ssr-c84]:before {
      content: "";
      background-image: url(cbol-pre-login-static-assets/citi-branding-assets/images/chevronLeft.svg);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 5px;
      left: -35px;
      width: 20px;
      height: 20px
    }
  }
  
  .closeSideNav[_ngcontent-ssr-c84] {
    transform: translateX(100%)
  }
  
  .closeSideNav[_ngcontent-ssr-c84],
  .openSideNav[_ngcontent-ssr-c84] {
    display: block!important;
    width: 100%;
    height: 100%;
    z-index: 9;
    position: absolute;
    transition: .5s ease-in
  }
  
  .openSideNav[_ngcontent-ssr-c84] {
    transform: translateX(0)
  }
  
  .child-links[_ngcontent-ssr-c84] {
    max-width: 102%
  }
  
  div.qlSubTitle[_ngcontent-ssr-c84] {
    margin-top: 0!important
  }
  
  li.quickLinksClass[_ngcontent-ssr-c84] img[_ngcontent-ssr-c84] {
    vertical-align: middle;
    position: absolute;
    background-repeat: no-repeat;
    left: -36px;
    top: 6px
  }
  </style>
  <style>
  [_nghost-ssr-c59] {
    display: block
  }
  
  label[_ngcontent-ssr-c59] {
    font-size: .75rem;
    color: #666;
    width: 100%;
    pointer-events: none;
    transition: opacity 225ms ease-in-out
  }
  
  .input-container[_ngcontent-ssr-c59] {
    width: 100%;
    margin: 3px 0 5px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    float: left;
    display: -moz-inline-flex;
    display: inline-flex;
    -moz-flex-direction: row;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-content: stretch;
    align-items: flex-start;
    border-radius: 8px;
    background: #eee;
    border: .9px solid transparent
  }
  
  .input-container.focused[_ngcontent-ssr-c59] {
    border-color: #056dae
  }
  
  .input-container.focused[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59]::-moz-placeholder {
    opacity: 0
  }
  
  .input-container.focused[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59]:-ms-input-placeholder {
    opacity: 0
  }
  
  .input-container.focused[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59]::placeholder {
    opacity: 0
  }
  
  .input-container.errored[_ngcontent-ssr-c59] {
    border-color: #d60000
  }
  
  .input-container.errored.focused[_ngcontent-ssr-c59] {
    width: calc(100% + 2px);
    border-width: 1.99px;
    margin: 2px 0 4px -1px
  }
  
  .input-container.success[_ngcontent-ssr-c59] {
    border-color: #006e0a
  }
  
  .input-container.success.focused[_ngcontent-ssr-c59] {
    width: calc(100% + 2px);
    border-width: 1.99px;
    margin: 2px 0 4px -1px
  }
  
  .input-container.readOnly[_ngcontent-ssr-c59] {
    background: #fff;
    border: 1px solid #666
  }
  
  .input-container.readOnly[_ngcontent-ssr-c59] input.readOnly[_ngcontent-ssr-c59]:-moz-read-only {
    background-color: #fff
  }
  
  .input-container.readOnly[_ngcontent-ssr-c59] input.readOnly[_ngcontent-ssr-c59]:read-only,
  .input-container.readOnly[_ngcontent-ssr-c59] select[_ngcontent-ssr-c59],
  .input-container.readOnly[_ngcontent-ssr-c59] span[_ngcontent-ssr-c59] {
    background-color: #fff
  }
  
  .input-container.disabled[_ngcontent-ssr-c59] {
    background: #fff;
    border: 1px solid #666
  }
  
  .input-container.disabled[_ngcontent-ssr-c59] input.disabled[_ngcontent-ssr-c59]:disabled,
  .input-container.disabled[_ngcontent-ssr-c59] select[_ngcontent-ssr-c59],
  .input-container.disabled[_ngcontent-ssr-c59] span[_ngcontent-ssr-c59] {
    background-color: #fff
  }
  
  .input-container.has-pre-addon[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59] {
    padding-left: 0!important
  }
  
  .input-container[_ngcontent-ssr-c59] .input-group-addon.before[_ngcontent-ssr-c59] {
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px
  }
  
  .input-container[_ngcontent-ssr-c59] .input-group-addon.after[_ngcontent-ssr-c59],
  .input-container[_ngcontent-ssr-c59] .input-group-addon.before[_ngcontent-ssr-c59] {
    width: 48px;
    height: 48px
  }
  
  .input-container[_ngcontent-ssr-c59] .input-group-addon.after[_ngcontent-ssr-c59] {
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px
  }
  
  .input-container[_ngcontent-ssr-c59] .add-on-pre[_ngcontent-ssr-c59] {
    order: 0;
    flex: 0 1 auto;
    align-self: auto;
    box-sizing: border-box;
    -moz-box-sizing: border-box
  }
  
  .input-container[_ngcontent-ssr-c59] .add-on-pre[_ngcontent-ssr-c59] select[_ngcontent-ssr-c59] {
    margin: 0;
    width: 105px;
    border: 1px solid transparent;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
  }
  
  .input-container[_ngcontent-ssr-c59] .add-on-pre[_ngcontent-ssr-c59] select[_ngcontent-ssr-c59]:focus {
    border-color: #056dae;
    outline: 0
  }
  
  .input-container[_ngcontent-ssr-c59] .input-switch-wrapper[_ngcontent-ssr-c59] {
    flex: 1 1 0%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    margin: 0 2px;
    border-radius: 8px
  }
  
  .input-container[_ngcontent-ssr-c59] .input-switch-wrapper[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59] {
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    letter-spacing: .5px;
    height: 48px;
    padding: 10px 20px;
    background: #eee;
    border: none!important;
    box-shadow: none;
    border-radius: 8px
  }
  
  .input-container[_ngcontent-ssr-c59] .input-switch-wrapper[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59]::-ms-clear {
    display: none
  }
  
  .input-container[_ngcontent-ssr-c59] .input-switch-wrapper[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59]:focus {
    outline: 0
  }
  
  .input-container[_ngcontent-ssr-c59] .add-on-post[_ngcontent-ssr-c59] {
    flex: 0 1 auto;
    box-sizing: border-box;
    -moz-box-sizing: border-box
  }
  
  .input-container[_ngcontent-ssr-c59] .add-on-post[_ngcontent-ssr-c59] .search[_ngcontent-ssr-c59] {
    width: 50px;
    padding-top: 12px;
    border-radius: 8px
  }
  
  .input-container[_ngcontent-ssr-c59] .add-on-post[_ngcontent-ssr-c59] .showHideMask[_ngcontent-ssr-c59] {
    width: 50px;
    border-radius: 8px;
    padding: 17px 20px 17px 10px;
    color: #056dae;
    font-family: Interstate_Bold, sans-serif;
    line-height: 14px;
    cursor: pointer;
    font-size: 12px
  }
  
  .input-error[_ngcontent-ssr-c59],
  .input-success[_ngcontent-ssr-c59] {
    height: 16px;
    width: 100%;
    float: left
  }
  
  .input-success[_ngcontent-ssr-c59] .validation-message-success[_ngcontent-ssr-c59] {
    font-size: 12px;
    font-family: Interstate_Bold, sans-serif;
    margin: 0;
    color: #006e0a;
    font-weight: 700;
    position: relative;
    display: block;
    line-height: 1rem;
    font-size: .75rem
  }
  
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container[_ngcontent-ssr-c59] {
    background: #fff
  }
  
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59],
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container[_ngcontent-ssr-c59] select[_ngcontent-ssr-c59],
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container[_ngcontent-ssr-c59] span[_ngcontent-ssr-c59] {
    background-color: #fff
  }
  
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container.readOnly[_ngcontent-ssr-c59] {
    background: #eee
  }
  
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container.readOnly[_ngcontent-ssr-c59] input[_ngcontent-ssr-c59],
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container.readOnly[_ngcontent-ssr-c59] select[_ngcontent-ssr-c59],
  [_nghost-ssr-c59] .light[_ngcontent-ssr-c59] .input-container.readOnly[_ngcontent-ssr-c59] span[_ngcontent-ssr-c59] {
    background-color: #eee
  }
  
  #inputSearchIconId path {
    fill: #056dae
  }
  
  [_ngcontent-ssr-c59]::-webkit-input-placeholder {
    color: #6b6b6b
  }
  
  [_ngcontent-ssr-c59]::-moz-placeholder {
    color: #6b6b6b
  }
  
  [_ngcontent-ssr-c59]:-ms-input-placeholder {
    color: #6b6b6b
  }
  
  [_ngcontent-ssr-c59]:-moz-placeholder {
    color: #6b6b6b
  }
  
  input[_ngcontent-ssr-c59]::-ms-clear,
  input[_ngcontent-ssr-c59]::-ms-reveal {
    display: none
  }
  </style>
  <style>
  [_nghost-ssr-c52] {
    display: block
  }
  
  .validation-input-danger[_ngcontent-ssr-c52] {
    border-color: #d60000
  }
  
  .input-group-btn[_ngcontent-ssr-c52] {
    vertical-align: top
  }
  
  .input-addon-border[_ngcontent-ssr-c52] {
    border-left-color: #eee!important
  }
  
  .margin-fix[_ngcontent-ssr-c52] {
    margin: 0!important
  }
  
  .input-fix[_ngcontent-ssr-c52] {
    border: 1px solid #fff!important;
    transition: border-color 225ms ease-in-out
  }
  
  .border-focused-addon[_ngcontent-ssr-c52] {
    border: 1px solid #056dae!important;
    border-bottom-left-radius: 7px;
    border-bottom-right-radius: 7px;
    border-top-left-radius: 7px;
    border-top-right-radius: 7px
  }
  
  .border-error-addon[_ngcontent-ssr-c52] {
    border: 1px solid #d60000!important;
    border-bottom-left-radius: 7px;
    border-bottom-right-radius: 7px;
    border-top-left-radius: 10px;
    border-top-right-radius: 7px
  }
  
  .border-focused-addon.border-error-addon[_ngcontent-ssr-c52] {
    border-width: 2px!important
  }
  
  .containsAddon[_ngcontent-ssr-c52] {
    outline-color: #056dae!important;
    border: none!important;
    border-right: 0!important
  }
  
  .theme-dark[_ngcontent-ssr-c52] {
    background-color: #eee!important
  }
  
  select.theme-dark[_ngcontent-ssr-c52]::-ms-value,
  select.theme-dark[_ngcontent-ssr-c52]:focus::-ms-value {
    background-color: #eee
  }
  
  .theme-light[_ngcontent-ssr-c52] {
    background-color: #fff!important
  }
  
  select[_ngcontent-ssr-c52]:focus {
    border: 1px solid #056dae!important
  }
  
  select.theme-light[_ngcontent-ssr-c52]::-ms-value,
  select.theme-light[_ngcontent-ssr-c52]:focus::-ms-value {
    background-color: #fff
  }
  
  .input-group-addon.before[_ngcontent-ssr-c52] {
    border-radius: 5px 0 0 5px!important
  }
  
  .input-group-addon.after[_ngcontent-ssr-c52] {
    border-radius: 0 5px 5px 0!important
  }
  
  label[_ngcontent-ssr-c52] {
    opacity: 0
  }
  
  .has-value[_ngcontent-ssr-c52] label[_ngcontent-ssr-c52],
  .is-focused[_ngcontent-ssr-c52] label[_ngcontent-ssr-c52] {
    opacity: 1
  }
  </style>
  <style>
  .disclaimer .content .text a {
    color: #fff;
    text-decoration: underline
  }
  
  .module-wrapper[_ngcontent-ssr-c166] {
    background: #eee
  }
  
  .module-container[_ngcontent-ssr-c166] {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    background: #eee
  }
  
  .waveTop[_ngcontent-ssr-c166] {
    -ms-transform: scaleX(-1);
    transform: scaleX(-1)
  }
  
  .waveBottom[_ngcontent-ssr-c166],
  .waveTop[_ngcontent-ssr-c166] {
    width: 100%
  }
  
  @media (max-width:767px) {
    .waveTop[_ngcontent-ssr-c166] {
      margin-top: 18px
    }
    .waveBottom[_ngcontent-ssr-c166] {
      margin-top: -25px
    }
  }
  
  @media (min-width:767px) and (max-width:2560px) {
    .waveTop[_ngcontent-ssr-c166] {
      margin-top: 18px
    }
    .waveBottom[_ngcontent-ssr-c166] {
      margin-top: 25px
    }
  }
  
  #rfuidsync[_ngcontent-ssr-c166] {
    display: none
  }
  
  .subHeading-HM-H6 {
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-size: 12px;
    line-height: 18px;
    font-family: Interstate_Light, sans-serif;
    text-transform: uppercase;
    font-weight: 400;
    margin-top: 0
  }
  
  .color-white-HM {
    color: #fff
  }
  
  .subHeading-HM-H2 {
    margin-bottom: 10px;
    font-size: 42px;
    line-height: 50px;
    font-family: Interstate_Light, sans-serif;
    font-weight: 400;
    text-transform: none;
    letter-spacing: normal;
    margin-top: 0
  }
  
  .hero .d-block {
    font-size: 16px;
    line-height: 24px
  }
  
  .hero .btn-primary {
    font-size: 12px!important
  }
  
  #signOff-alert-id .cbolui-icon-text {
    font-weight: 700
  }
  
  .reskin-alert-signoff[_ngcontent-ssr-c166] {
    float: left;
    padding-top: 3px;
    padding-left: 4px;
    font-weight: 700
  }
  
  .contentParentWrap[_ngcontent-ssr-c166] {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between
  }
  
  .contentWrap[_ngcontent-ssr-c166] {
    padding-right: 10px;
    width: 100%;
    display: -ms-inline-flexbox;
    display: inline-flex
  }
  
  cds-banner-alert[_ngcontent-ssr-c166] {
    background-color: #eee!important;
    width: 100%!important;
    min-height: 65px!important
  }
  
  #cds-icon-id {
    fill: green
  }
  
  @media screen and (max-width:767px) {
    .reskin-alert-signoff[_ngcontent-ssr-c166] {
      font-size: 12px
    }
    .reskin-cds-icon[_ngcontent-ssr-c166] {
      display: none
    }
  }
  
  button.cds-close[_ngcontent-ssr-c166]:after {
    color: rgba(0, 45, 114, .5);
    border-radius: 50%;
    height: 1.5rem;
    width: 1.5rem;
    font-size: 1.3rem;
    font-weight: 700;
    background-color: transparent
  }
  
  button.cds-close[_ngcontent-ssr-c166] {
    background-color: transparent!important;
    border-color: transparent!important;
    float: right
  }
  
  cds-banner-alert {
    margin: 10px 0!important
  }
  
  .reskin-cds-icon[_ngcontent-ssr-c166] {
    float: left
  }
  
  .reskin-alert-message[_ngcontent-ssr-c166] {
    float: right;
    padding-top: 3px;
    padding-left: 4px;
    font-weight: 700
  }
  
  .homepage-reskin-container .btn-primary {
    color: #fff;
    background: #056dae;
    line-height: 46px;
    border: 2px solid #056dae;
    margin: 20px 20px 20px 0;
    min-width: 220px;
    position: relative
  }
  
  .homepage-reskin-container .col-lg-1,
  .homepage-reskin-container .col-lg-10,
  .homepage-reskin-container .col-lg-11,
  .homepage-reskin-container .col-lg-12,
  .homepage-reskin-container .col-lg-2,
  .homepage-reskin-container .col-lg-3,
  .homepage-reskin-container .col-lg-4,
  .homepage-reskin-container .col-lg-5,
  .homepage-reskin-container .col-lg-6,
  .homepage-reskin-container .col-lg-7,
  .homepage-reskin-container .col-lg-8,
  .homepage-reskin-container .col-lg-9,
  .homepage-reskin-container .col-md-1,
  .homepage-reskin-container .col-md-10,
  .homepage-reskin-container .col-md-11,
  .homepage-reskin-container .col-md-12,
  .homepage-reskin-container .col-md-2,
  .homepage-reskin-container .col-md-3,
  .homepage-reskin-container .col-md-4,
  .homepage-reskin-container .col-md-5,
  .homepage-reskin-container .col-md-6,
  .homepage-reskin-container .col-md-7,
  .homepage-reskin-container .col-md-8,
  .homepage-reskin-container .col-md-9,
  .homepage-reskin-container .col-sm-1,
  .homepage-reskin-container .col-sm-10,
  .homepage-reskin-container .col-sm-11,
  .homepage-reskin-container .col-sm-12,
  .homepage-reskin-container .col-sm-2,
  .homepage-reskin-container .col-sm-3,
  .homepage-reskin-container .col-sm-4,
  .homepage-reskin-container .col-sm-5,
  .homepage-reskin-container .col-sm-6,
  .homepage-reskin-container .col-sm-7,
  .homepage-reskin-container .col-sm-8,
  .homepage-reskin-container .col-sm-9,
  .homepage-reskin-container .col-xs-1,
  .homepage-reskin-container .col-xs-10,
  .homepage-reskin-container .col-xs-11,
  .homepage-reskin-container .col-xs-12,
  .homepage-reskin-container .col-xs-2,
  .homepage-reskin-container .col-xs-3,
  .homepage-reskin-container .col-xs-4,
  .homepage-reskin-container .col-xs-5,
  .homepage-reskin-container .col-xs-6,
  .homepage-reskin-container .col-xs-7,
  .homepage-reskin-container .col-xs-8,
  .homepage-reskin-container .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-left: 10px;
    padding-right: 10px
  }
  
  @media (min-width:768px) {
    .homepage-reskin-container .col-sm-1,
    .homepage-reskin-container .col-sm-10,
    .homepage-reskin-container .col-sm-11,
    .homepage-reskin-container .col-sm-12,
    .homepage-reskin-container .col-sm-2,
    .homepage-reskin-container .col-sm-3,
    .homepage-reskin-container .col-sm-4,
    .homepage-reskin-container .col-sm-5,
    .homepage-reskin-container .col-sm-6,
    .homepage-reskin-container .col-sm-7,
    .homepage-reskin-container .col-sm-8,
    .homepage-reskin-container .col-sm-9 {
      float: left;
      max-width: none
    }
    .homepage-reskin-container .col-sm-1 {
      width: 8.3333333333%
    }
    .homepage-reskin-container .col-sm-2 {
      width: 16.6666666667%
    }
    .homepage-reskin-container .col-sm-3 {
      width: 25%
    }
    .homepage-reskin-container .col-sm-4 {
      width: 33.3333333333%
    }
    .homepage-reskin-container .col-sm-5 {
      width: 41.6666666667%
    }
    .homepage-reskin-container .col-sm-6 {
      width: 50%
    }
    .homepage-reskin-container .col-sm-7 {
      width: 58.3333333333%
    }
    .homepage-reskin-container .col-sm-8 {
      width: 66.6666666667%
    }
    .homepage-reskin-container .col-sm-9 {
      width: 75%
    }
    .homepage-reskin-container .col-sm-10 {
      width: 83.3333333333%
    }
    .homepage-reskin-container .col-sm-11 {
      width: 91.6666666667%
    }
    .homepage-reskin-container .col-sm-12 {
      width: 100%
    }
  }
  
  @media (min-width:992px) {
    .homepage-reskin-container .col-md-1,
    .homepage-reskin-container .col-md-10,
    .homepage-reskin-container .col-md-11,
    .homepage-reskin-container .col-md-12,
    .homepage-reskin-container .col-md-2,
    .homepage-reskin-container .col-md-3,
    .homepage-reskin-container .col-md-4,
    .homepage-reskin-container .col-md-5,
    .homepage-reskin-container .col-md-6,
    .homepage-reskin-container .col-md-7,
    .homepage-reskin-container .col-md-8,
    .homepage-reskin-container .col-md-9 {
      float: left;
      max-width: none
    }
    .homepage-reskin-container .col-md-1 {
      width: 8.3333333333%
    }
    .homepage-reskin-container .col-md-2 {
      width: 16.6666666667%
    }
    .homepage-reskin-container .col-md-3 {
      width: 39.31%
    }
    .homepage-reskin-container .col-md-4 {
      width: 33.3333333333%
    }
    .homepage-reskin-container .col-md-5 {
      width: 27.3566666667%
    }
    .homepage-reskin-container .col-md-6 {
      width: 50%
    }
    .homepage-reskin-container .col-md-7 {
      width: 58.3333333333%
    }
    .homepage-reskin-container .col-md-8 {
      width: 66.6666666667%
    }
    .homepage-reskin-container .col-md-9 {
      width: 75%
    }
    .homepage-reskin-container .col-md-10 {
      width: 83.3333333333%
    }
    .homepage-reskin-container .col-md-11 {
      width: 91.6666666667%
    }
    .homepage-reskin-container .col-md-12 {
      width: 100%
    }
    .cbolui-ddl .showcase-3 a:focus img {
      outline: 5px auto #000;
      outline-offset: -2px
    }
    .cbolui-ddl-pre .bauHomepage .showcase .image-container:before {
      content: none
    }
  }
  
  @media (min-width:1200px) {
    .homepage-reskin-container .col-lg-1,
    .homepage-reskin-container .col-lg-10,
    .homepage-reskin-container .col-lg-11,
    .homepage-reskin-container .col-lg-12,
    .homepage-reskin-container .col-lg-2,
    .homepage-reskin-container .col-lg-3,
    .homepage-reskin-container .col-lg-4,
    .homepage-reskin-container .col-lg-5,
    .homepage-reskin-container .col-lg-6,
    .homepage-reskin-container .col-lg-7,
    .homepage-reskin-container .col-lg-8,
    .homepage-reskin-container .col-lg-9 {
      float: left;
      max-width: none
    }
    .homepage-reskin-container .col-lg-1 {
      width: 8.3333333333%
    }
    .homepage-reskin-container .col-lg-2 {
      width: 16.6666666667%
    }
    .homepage-reskin-container .col-lg-3 {
      width: 25%
    }
    .homepage-reskin-container .col-lg-4 {
      width: 33.3333333333%
    }
    .homepage-reskin-container .col-lg-5 {
      width: 41.6666666667%
    }
    .homepage-reskin-container .col-lg-6 {
      width: 50%
    }
    .homepage-reskin-container .col-lg-7 {
      width: 58.3333333333%
    }
    .homepage-reskin-container .col-lg-8 {
      width: 66.6666666667%
    }
    .homepage-reskin-container .col-lg-9 {
      width: 75%
    }
    .homepage-reskin-container .col-lg-10 {
      width: 83.3333333333%
    }
    .homepage-reskin-container .col-lg-11 {
      width: 91.6666666667%
    }
    .homepage-reskin-container .col-lg-12 {
      width: 100%
    }
  }
  
  .marketingAlert {
    width: 100%!important
  }
  
  .row {
    display: block!important
  }
  
  .theme-light {
    background: #fff
  }
  
  .homepage-reskin-container a {
    color: #056dae;
    text-decoration: none
  }
  
  .homepage-reskin-container .bold,
  .homepage-reskin-container b,
  .homepage-reskin-container strong {
    font-family: Interstate_Bold, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
  }
  
  .homepage-reskin-container .btn {
    line-height: 34px;
    vertical-align: middle;
    margin-right: 20px;
    text-align: center;
    font-size: 16px;
    font-family: Interstate_Bold, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-weight: 700;
    border-radius: 6px
  }
  
  .homepage-reskin-container .btn.active,
  .homepage-reskin-container .btn.focus,
  .homepage-reskin-container .btn:active,
  .homepage-reskin-container .btn:focus,
  .homepage-reskin-container .btn:hover,
  .open>.homepage-reskin-container .btn.dropdown-toggle {
    color: #fff;
    background-color: #002a54
  }
  
  .homepage-reskin-container .btn-primary.active,
  .homepage-reskin-container .btn-primary.focus,
  .homepage-reskin-container .btn-primary:active,
  .homepage-reskin-container .btn-primary:active:focus,
  .homepage-reskin-container .btn-primary:active:hover,
  .homepage-reskin-container .btn-primary:focus,
  .homepage-reskin-container .btn-primary:hover,
  .open>.homepage-reskin-container .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #002a54;
    border-color: #002a54
  }
  
  .homepage-reskin-container a.chevron-link:hover,
  .homepage-reskin-container a.chevron-link:hover.focus,
  .homepage-reskin-container a.chevron-link:hover:active,
  .homepage-reskin-container a.chevron-link:hover:focus,
  .homepage-reskin-container a.chevron-link:hover:hover,
  .open>.homepage-reskin-container .btn.dropdown-toggle {
    background-color: inherit;
    color: #002a54
  }
  
  .homepage-reskin-container a.chevron-link,
  .homepage-reskin-container a.chevron-link.bold,
  .homepage-reskin-container a.chevron-link.bold:focus,
  .homepage-reskin-container a.chevron-link.bold:hover,
  .homepage-reskin-container a.chevron-link:focus,
  .homepage-reskin-container a.chevron-link:hover,
  .homepage-reskin-container button.chevron-link,
  .homepage-reskin-container button.chevron-link.bold,
  .homepage-reskin-container button.chevron-link.bold:focus,
  .homepage-reskin-container button.chevron-link.bold:hover,
  .homepage-reskin-container button.chevron-link:focus,
  .homepage-reskin-container button.chevron-link:hover {
    background-position: top 55% right 0;
    background-repeat: no-repeat;
    padding-right: 12px
  }
  
  .homepage-reskin-container .btn-default,
  .homepage-reskin-container .btn-default-light,
  .homepage-reskin-container .btn-info,
  .homepage-reskin-container .btn-info-svg,
  .homepage-reskin-container .btn-link,
  .homepage-reskin-container .btn-secondary {
    line-height: normal;
    border: none;
    border-radius: 0;
    vertical-align: baseline;
    font-family: Interstate_Light, sans-serif;
    font-weight: 400;
    background: 0 0;
    color: #056dae;
    text-decoration: none;
    padding-left: 0;
    padding-right: 0
  }
  
  .homepage-reskin-container .btn-secondary {
    font-weight: 700
  }
  
  .homepage-reskin-container .bold.btn-default,
  .homepage-reskin-container .bold.btn-default-light,
  .homepage-reskin-container .bold.btn-info,
  .homepage-reskin-container .bold.btn-info-svg,
  .homepage-reskin-container .btn-link.bold,
  .homepage-reskin-container .btn-secondary.bold {
    font-family: Interstate_Bold, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
  }
  
  .homepage-reskin-container .btn-default,
  .homepage-reskin-container .btn-default-light,
  .homepage-reskin-container .btn-secondary {
    margin: 12px 0
  }
  
  .homepage-reskin-container .container {
    max-width: none
  }
  
  .homepage-reskin-container .container-fluid>.row,
  .homepage-reskin-container .container>.row {
    padding-left: 10px;
    padding-right: 10px
  }
  
  .homepage-reskin-container p {
    margin: 0 0 12px
  }
  
  @media (min-width:1440px) {
    .homepage-reskin-container .container-fluid {
      max-width: 1440px
    }
  }
  
  @media (min-width:768px) {
    .homepage-reskin-container .container {
      width: 560px
    }
  }
  
  @media (min-width:992px) {
    .homepage-reskin-container .container {
      width: 960px
    }
  }
  
  @media (min-width:1200px) {
    .homepage-reskin-container .container {
      width: 1160px
    }
  }
  
  .homepage-reskin-container[_ngcontent-ssr-c166] .alertContainer[_ngcontent-ssr-c166] {
    background-color: #fff
  }
  
  .homepage-reskin-container .cds-cta {
    line-height: 20px!important
  }
  
  @media (min-width:576px) {
    .homepage-reskin-container .col-sm-4,
    .homepage-reskin-container .col-sm-6 {
      -ms-flex: none;
      flex: none;
      max-width: none
    }
  }
  
  .ada-hidden {
    clip: rect(1px, 1px, 1px, 1px)!important;
    overflow: hidden;
    width: 0;
    height: 0;
    opacity: 0;
    display: inline-block;
    position: absolute
  }
  
  @media (min-width:768px) and (max-width:992px) {
    .citi-panel-wrapper .homepage-reskin-container .mod-seven img.img-responsive {
      height: 100%!important
    }
    .citi-panel-wrapper .homepage-reskin-container .mod-one img.img-responsive {
      height: 100%!important
    }
  }
  
  @media (min-width:992px) and (max-width:1125px) {
    .citi-panel-wrapper .g-3-container {
      -ms-flex-direction: column!important;
      flex-direction: column!important
    }
    .citi-panel-wrapper .showcase .image-container {
      position: relative!important
    }
    .citi-panel-wrapper .container img.img-responsive {
      margin: 0 30px 0 0!important;
      width: 90%!important
    }
    .citi-panel-wrapper .bauHomepage .showcase .image-container img {
      position: static!important
    }
    .citi-panel-wrapper .col-sm-push-6 {
      left: 0!important
    }
    .citi-panel-wrapper .homepage-reskin-container .image-container {
      width: 100%!important
    }
    .citi-panel-wrapper .homepage-reskin-container .module-content {
      width: 100%!important
    }
    .citi-panel-wrapper .container .module-content {
      padding: 30px 0 0!important;
      text-align: left!important
    }
    .citi-panel-wrapper .bauHomepage .g-3-container {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center
    }
    .citi-panel-wrapper .mod-three .showcase .module-content {
      padding: 30px 0!important;
      margin-top: 0!important
    }
    .citi-panel-wrapper .mod-three .eyebrow-text {
      margin-top: 0!important
    }
    .citi-panel-wrapper .mod-three img.img-responsive {
      width: 80%!important;
      height: 100%!important
    }
  }
  
  @media screen and (min-width:991px) and (max-width:1125px) {
    .citi-panel-wrapper .container {
      width: 560px!important
    }
    .citi-panel-wrapper .bauHomepage .container {
      width: auto!important
    }
  }
  
  @media screen and (min-width:1125px) and (max-width:1200px) {
    .citi-panel-wrapper .container {
      width: 867px!important
    }
  }
  
  @media screen and (min-width:1125px) and (max-width:1200px) {
    .citi-panel-wrapper .bauHomepage .container {
      width: 810px!important
    }
    .citi-panel-wrapper .homepage-reskin-container .mod-seven .module-content {
      padding: 0 0 0 65px!important
    }
    .citi-panel-wrapper .homepage-reskin-container .mod-one .module-content {
      padding: 0 65px 0 0!important
    }
    .citi-panel-wrapper .homepage-reskin-container .mod-three .module-content {
      padding-left: 52px!important
    }
  }
  
  @media (min-width:1200px) {
    .citi-panel-wrapper .bauHomepage .container {
      width: 867px!important
    }
    .citi-panel-wrapper .homepage-reskin-container .container {
      width: 867px!important
    }
    .citi-panel-wrapper .mod-seven,
    .mod-one[_ngcontent-ssr-c166] .container-fluid[_ngcontent-ssr-c166]>.row[_ngcontent-ssr-c166] {
      padding-left: 10px;
      padding-right: 10px
    }
  }
  
  @media (min-width:1200px) {
    .citi-panel-wrapper .bauHomepage .container {
      width: 867px!important
    }
    .citi-panel-wrapper .homepage-reskin-container .container {
      width: 867px!important
    }
    .citi-panel-wrapper .mod-seven,
    .mod-one[_ngcontent-ssr-c166] .container-fluid[_ngcontent-ssr-c166]>.row[_ngcontent-ssr-c166] {
      padding-left: 10px;
      padding-right: 10px
    }
    .citi-panel-wrapper .mod-three .showcase .image-container img {
      width: 100%!important
    }
  }
  
  .additionalAlertSection #signOff-alert-id,
  .inactiveSession #clearuser-alert-id div.ct-banner-alert-box,
  .inactiveSession #inactive-alert-id,
  .inactiveSession #signOff-alert-id {
    margin-top: 10px!important;
    margin-bottom: 10px!important;
    padding-top: 10px!important;
    padding-bottom: 10px!important;
    padding-left: 10px!important
  }
  
  .additionalAlertSection #clearuser-alert-id div.ct-banner-alert-box {
    margin-top: 10px!important;
    margin-bottom: 0!important;
    padding-top: 10px!important;
    padding-bottom: 10px!important;
    padding-left: 10px!important
  }
  </style>
  <style>
  [_nghost-ssr-c99] {
    display: block;
    padding: .83rem .83rem .83rem 1.25rem;
    background-color: #fff;
    border-radius: 4px;
    font-family: Interstate_Light
  }
  
  .criticalAlert[_nghost-ssr-c99] {
    border-left: .42rem solid
  }
  
  .criticalAlert[_nghost-ssr-c99],
  .customAlert[_nghost-ssr-c99] {
    width: 92.4%;
    min-height: 44px;
    max-height: -webkit-max-content;
    max-height: -moz-max-content;
    max-height: max-content
  }
  
  .marketingAlert[_nghost-ssr-c99],
  .successAlert[_nghost-ssr-c99],
  .technicalAlert[_nghost-ssr-c99] {
    border-left: .42rem solid;
    width: 92.4%;
    min-height: 44px;
    max-height: -webkit-max-content;
    max-height: -moz-max-content;
    max-height: max-content
  }
  
  @media only screen and (max-width:320px) {
    .criticalAlert[_nghost-ssr-c99],
    .customAlert[_nghost-ssr-c99],
    .marketingAlert[_nghost-ssr-c99],
    .successAlert[_nghost-ssr-c99],
    .technicalAlert[_nghost-ssr-c99] {
      width: 100%;
      min-height: 44px
    }
  }
  </style>
  <style>
  [_nghost-ssr-c92],
  [_nghost-ssr-c92] div[_ngcontent-ssr-c92] {
    line-height: 0
  }
  
  [_nghost-ssr-c92] div[_ngcontent-ssr-c92] {
    display: inline-block
  }
  
  .small[_ngcontent-ssr-c92] {
    width: 12px;
    height: 12px
  }
  
  .medium[_ngcontent-ssr-c92] {
    width: 14px;
    height: 14px
  }
  
  .large[_ngcontent-ssr-c92] {
    width: 16px;
    height: 16px
  }
  
  .small-circle[_ngcontent-ssr-c92] {
    width: 18px;
    height: 18px
  }
  
  .medium-circle[_ngcontent-ssr-c92] {
    width: 20px;
    height: 20px
  }
  
  .large-circle[_ngcontent-ssr-c92] {
    width: 22px;
    height: 22px
  }
  
  .sfi[_ngcontent-ssr-c92] {
    background-repeat: no-repeat
  }
  
  .sfi.small[_ngcontent-ssr-c92] {
    width: 12px;
    height: 12px;
    margin: 3px
  }
  
  .sfi.medium[_ngcontent-ssr-c92] {
    width: 14px;
    height: 14px;
    margin: 3px
  }
  
  .sfi.large[_ngcontent-ssr-c92] {
    width: 16px;
    height: 16px;
    margin: 4px
  }
  
  .sfi.small-circle[_ngcontent-ssr-c92] {
    width: 18px;
    height: 18px;
    margin: 5px
  }
  
  .sfi.medium-circle[_ngcontent-ssr-c92] {
    width: 20px;
    height: 20px;
    margin: 5px
  }
  
  .sfi.large-circle[_ngcontent-ssr-c92] {
    width: 22px;
    height: 22px;
    margin: 5px
  }
  
  .sfi.g1-06-close[_ngcontent-ssr-c92] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 11'%3E%3Ctitle%3E06-close-white%3C/title%3E%3Cpath d='M21.41,20l3.8-3.79a1,1,0,0,0-1.42-1.42L20,18.59l-3.79-3.8a1,1,0,0,0-1.42,1.42L18.59,20l-3.8,3.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,21.41l3.79,3.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z' transform='translate(-14.5 -14.5)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .sfi.g1-06-close[_ngcontent-ssr-c92]:focus,
  .sfi.g1-06-close[_ngcontent-ssr-c92]:hover {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22 22'%3E%3Ctitle%3E06-close-white-hover%3C/title%3E%3Cpath d='M21.41,20.15l3.8-3.79a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L20,18.74,16.21,15a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l3.8,3.79L14.79,24a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0L20,21.57l3.79,3.79a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41ZM20,9A11,11,0,1,0,31,20,11,11,0,0,0,20,9' transform='translate(-9 -9)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  
  .sfi.g1-02-down[_ngcontent-ssr-c92] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 14 8.02'%3E%3Ctitle%3E02-down-white%3C/title%3E%3Cpath d='M20,24a1.94,1.94,0,0,1-1.41-.62l-5.32-5.72a1,1,0,0,1,1.46-1.36L20,22l5.27-5.66a1,1,0,0,1,1.46,1.36l-5.32,5.72A1.94,1.94,0,0,1,20,24' transform='translate(-13 -15.99)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
  }
  </style>
  <style>
  .heroReskinSection[_ngcontent-ssr-c155] {
    background-color: #fafafa;
    background-position: 50%;
    background-size: cover;
    position: relative;
    border-bottom: 1px solid #f1f1f1
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .noPadding[_ngcontent-ssr-c155] {
    padding-left: 0;
    padding-right: 0
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] {
    text-align: center
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] img[_ngcontent-ssr-c155] {
    width: 100%;
    height: 100%;
    max-width: 320px;
    float: left
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .column-three[_ngcontent-ssr-c155] {
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 0;
    padding-right: 0;
    min-width: 384px
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .subHeading-title[_ngcontent-ssr-c155] {
    font-family: Interstate_Light, sans-serif;
    font-size: 16px;
    color: #333;
    letter-spacing: 2px;
    line-height: 24px;
    text-transform: uppercase
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .heading-title[_ngcontent-ssr-c155] {
    font-family: Interstate_Bold, sans-serif;
    font-size: 42px;
    color: #333;
    letter-spacing: 0;
    line-height: 50px
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .introText[_ngcontent-ssr-c155] {
    font-family: Interstate_Light, sans-serif;
    font-size: 16px;
    color: #333;
    letter-spacing: 0;
    line-height: 24px;
    margin-bottom: 10px!important
  }
  
  .heroImage-mobileView[_ngcontent-ssr-c155] {
    text-align: center;
    margin-top: 10px;
    display: none
  }
  
  .heroImage-mobileView[_ngcontent-ssr-c155] img[_ngcontent-ssr-c155] {
    width: 70%
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] .hideCardartOnMobile[_ngcontent-ssr-c155] {
    display: block
  }
  
  @media screen and (max-width:767.5px) {
    .heroReskinSection[_ngcontent-ssr-c155] .subHeading-title[_ngcontent-ssr-c155] {
      font-size: 14px!important;
      line-height: 21px!important
    }
    .heroReskinSection[_ngcontent-ssr-c155] .heading-title[_ngcontent-ssr-c155] {
      font-size: 32px!important;
      line-height: 42px!important
    }
    .heroReskinSection[_ngcontent-ssr-c155] .introText[_ngcontent-ssr-c155] {
      font-size: 14px!important;
      line-height: 21px!important;
      margin-bottom: 0!important
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] img[_ngcontent-ssr-c155] {
      max-width: 70%!important
    }
    .heroImage-mobileView[_ngcontent-ssr-c155] {
      display: block
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] .onMobileViewDisplay[_ngcontent-ssr-c155] {
      text-align: center;
      float: none
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] .hideCardartOnMobile[_ngcontent-ssr-c155] {
      display: none
    }
  }
  
  .no-text-decoration[_ngcontent-ssr-c155] {
    text-decoration: none
  }
  
  .heroReskinSection[_ngcontent-ssr-c155] .btn-hero[_ngcontent-ssr-c155] {
    min-width: 166px;
    width: 166px
  }
  
  .heroReskinSection .citi-signon2 {
    width: auto!important
  }
  
  .heroReskinSection .cds-cta {
    margin-top: 20px;
    margin-bottom: 20px
  }
  
  @media (max-width:767.5px) {
    .heroReskinSection[_ngcontent-ssr-c155] .column-one[_ngcontent-ssr-c155] {
      margin-top: 20px;
      text-align: center
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-three[_ngcontent-ssr-c155] {
      display: none
    }
    .heroReskinSection[_ngcontent-ssr-c155] .btn-hero[_ngcontent-ssr-c155] {
      margin: auto;
      display: block
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] img[_ngcontent-ssr-c155] {
      max-width: auto!important
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] {
      padding-right: 0;
      padding-left: 0
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two.heroImageadjust[_ngcontent-ssr-c155] {
      margin-top: 5px
    }
  }
  
  @media (min-width:768px) and (max-width:1023.5px) {
    .heroReskinSection[_ngcontent-ssr-c155] .column-one[_ngcontent-ssr-c155] {
      margin-top: 20px;
      width: 60%
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] {
      width: 40%;
      right: 0;
      bottom: 0
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two.cardArtImage[_ngcontent-ssr-c155] {
      top: 20%
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-three[_ngcontent-ssr-c155] {
      display: none
    }
    .heroReskinSection[_ngcontent-ssr-c155] .btn-hero[_ngcontent-ssr-c155] {
      margin-bottom: 50px
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] img[_ngcontent-ssr-c155] {
      max-width: auto!important
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two.heroImageadjust[_ngcontent-ssr-c155] {
      margin-top: 0
    }
  }
  
  @media (min-width:1024px) and (max-width:1024px) {
    .heroReskinSection[_ngcontent-ssr-c155] {
      height: auto
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-three[_ngcontent-ssr-c155] {
      display: block;
      padding-right: 0
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] {
      margin-top: 135px
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two.cardArtImage[_ngcontent-ssr-c155] {
      margin-top: 0!important
    }
    .citi-signon2.reSkin {
      width: 300px!important
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two.heroImageadjust[_ngcontent-ssr-c155] {
      margin-top: 190px
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] img[_ngcontent-ssr-c155] {
      max-width: auto!important
    }
  }
  
  section.theme-light.SampleErrorStates[_ngcontent-ssr-c155] {
    top: 50%;
    position: absolute;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 20px
  }
  
  div.container-fluid.offer-content[_ngcontent-ssr-c155] {
    position: relative
  }
  
  .ssrJamp .jamp.white .img {
    background-image: url(/cbol-pre-login-static-assets/commonui-assets/images/jamp-spinner-white-2x.gif)!important
  }
  
  .ssrJamp .jamp .img {
    background-image: url(/cbol-pre-login-static-assets/commonui-assets/images/jamp-spinner-2x.gif)!important
  }
  
  .jamp-page-level[_ngcontent-ssr-c155] {
    z-index: 99999!important
  }
  
  @media (min-width:1024px) {
    .heroReskinSection[_ngcontent-ssr-c155] .column-one[_ngcontent-ssr-c155] {
      margin-top: 20px;
      -ms-flex-positive: .9;
      flex-grow: .9
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two[_ngcontent-ssr-c155] {
      padding-top: 20px;
      padding-left: 10px;
      padding-right: 10px;
      -ms-flex-positive: 3.6;
      flex-grow: 3.6
    }
    .heroReskinSection[_ngcontent-ssr-c155] .row[_ngcontent-ssr-c155]:after,
    .heroReskinSection[_ngcontent-ssr-c155] .row[_ngcontent-ssr-c155]:before,
    .homepage-reskin-container[_ngcontent-ssr-c155] .alertSection[_ngcontent-ssr-c155]:after,
    .homepage-reskin-container[_ngcontent-ssr-c155] .alertSection[_ngcontent-ssr-c155]:before {
      display: none
    }
  }
  
  @media (min-width:1024px) and (max-width:1440px) {
    .citi-panel-wrapper .heroReskinSection .column-two {
      display: none!important
    }
    .citi-panel-wrapper .heroReskinSection .column-three {
      max-width: none!important;
      width: auto!important
    }
    .citi-panel-wrapper .heroReskinSection .column-one {
      width: 45.3%!important
    }
  }
  
  @media (min-width:1024px) and (max-width:1070px) {
    .citi-panel-wrapper .heroReskinSection .column-three {
      min-width: 359px!important
    }
  }
  
  @media (min-width:768px) {
    .heroReskinSection[_ngcontent-ssr-c155] .row[_ngcontent-ssr-c155] {
      display: -ms-flexbox!important;
      display: flex!important;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex-pack: distribute;
      justify-content: space-between
    }
    .heroReskinSection[_ngcontent-ssr-c155] .column-two.lifestyleImage[_ngcontent-ssr-c155] {
      margin-top: auto
    }
  }
  </style>
  <style>
  @supports not (-ms-high-contrast:none) {
    .mod-seven .g-3-container {
      display: -ms-flexbox;
      display: flex
    }
  }
  
  .mod-seven .g-3-container {
    margin: 40px 0 0!important;
    min-height: 327px!important;
    -ms-flex-align: center;
    align-items: center;
    background-color: #f9fdff!important
  }
  
  .mod-seven h6 {
    margin-bottom: 10px
  }
  
  .mod-seven .header-level-2 {
    margin-bottom: 10px!important
  }
  
  .module-content>p {
    display: none
  }
  
  @media (min-width:1200px) {
    .mod-seven .container-fluid>.row {
      padding: 0
    }
  }
  
  sup {
    font-size: .6em!important
  }
  
  .mod-seven[_ngcontent-ssr-c156] a.btn.btn-primary[_ngcontent-ssr-c156] {
    margin: 0;
    width: auto!important;
    height: 50px!important
  }
  
  .mod-seven img.img-responsive {
    -ms-transform: none!important;
    transform: none!important;
    left: 0!important;
    top: 0!important;
    width: 100%!important;
    max-width: 580px!important;
    max-height: 327px!important;
    border-radius: 16px 16px 16px 16px
  }
  
  @media (min-width:768px) and (max-width:992px) {
    .mod-seven img.img-responsive {
      margin-top: 32px;
      width: 100%!important
    }
  }
  
  .mod-seven .image-container {
    height: 100%!important;
    max-height: 327px
  }
  
  @media (max-width:767.5px) {
    .mod-seven .g-3-container {
      display: block!important;
      margin: 40px -10px 0!important
    }
    .mod-seven .module-content {
      text-align: center!important
    }
    .mod-seven .header-level-2 {
      font-size: 2.625rem!important
    }
    .mod-seven img.img-responsive {
      max-width: none!important;
      max-height: none!important
    }
    .mod-seven .image-container {
      max-height: none!important;
      overflow: visible!important;
      margin-bottom: 15px
    }
    .mod-seven .g-3-container {
      margin-left: 0!important;
      margin-right: 0!important
    }
  }
  
  @media (min-width:768px) {
    .mod-seven .module-content {
      padding: 0 0 0 110px!important
    }
    #modSevenContainer .container-fluid {
      padding-left: 0!important;
      padding-right: 0!important
    }
  }
  
  @media (min-width:767px) {
    .mod-seven .g-3-container {
      min-height: auto
    }
  }
  
  @media (min-width:768px) and (max-width:992px) {
    .mod-seven[_ngcontent-ssr-c156] .container[_ngcontent-ssr-c156] {
      width: 768px
    }
    .mod-seven .module-content {
      padding: 0 0 0 25px!important
    }
  }
  
  .mod-seven[_ngcontent-ssr-c156] {
    background: #f9fdff
  }
  
  .mod-seven-btn[_ngcontent-ssr-c156] {
    min-width: 166px
  }
  
  #modSevenContainer .showcase .g-3-container .container-fluid .row .text-center,
  #threeUpContainer .showcase footer {
    display: none!important
  }
  
  .disclaimer[_ngcontent-ssr-c156] {
    font-family: Interstate_Bold!important;
    font-size: 16px!important;
    color: #666!important;
    letter-spacing: 0!important;
    line-height: 24px!important
  }
  
  @media screen and (max-width:767px) {
    .disclaimer[_ngcontent-ssr-c156] {
      font-size: 14px!important;
      line-height: 21px!important;
      margin-bottom: 40px!important
    }
    .showcase[_ngcontent-ssr-c156] .module-content[_ngcontent-ssr-c156] {
      padding: 10px!important
    }
    button[_ngcontent-ssr-c156] {
      margin-bottom: 40px!important
    }
  }
  
  .m-bottom-0[_ngcontent-ssr-c156] {
    margin-bottom: 0!important
  }
  
  .m-bottom-30[_ngcontent-ssr-c156] {
    margin-bottom: 30px
  }
  
  .m-bottom-10[_ngcontent-ssr-c156] {
    margin-bottom: 10px!important
  }
  
  .d-block[_ngcontent-ssr-c156] {
    display: block!important
  }
  
  .no-text-decoration[_ngcontent-ssr-c156] {
    text-decoration: none
  }
  </style>
  <style>
  @supports not (-ms-high-contrast:none) {
    .mod-one .g-3-container {
      display: -ms-flexbox;
      display: flex
    }
  }
  
  .mod-one .g-3-container {
    min-height: 327px!important;
    -ms-flex-align: center;
    align-items: center;
    background-color: #f9fdff!important;
    margin-top: 84px!important;
    margin-left: 0!important;
    margin-right: 0!important
  }
  
  .mod-one h6 {
    margin-bottom: 10px
  }
  
  .mod-one .header-level-2 {
    margin-bottom: 10px!important
  }
  
  .module-content>p {
    display: none
  }
  
  @media (min-width:1200px) {
    .mod-one .container-fluid>.row {
      padding: 0
    }
  }
  
  .mod-one[_ngcontent-ssr-c157] a.btn.btn-primary[_ngcontent-ssr-c157] {
    margin: 0 0 10px;
    width: auto!important;
    height: 50px!important
  }
  
  .mod-one img.img-responsive {
    -ms-transform: none!important;
    transform: none!important;
    left: 0!important;
    top: 0!important;
    width: 100%!important;
    max-width: 580px!important;
    max-height: 327px!important;
    border-radius: 16px 16px 16px 16px
  }
  
  .mod-one .image-container {
    height: 100%!important;
    max-height: 327px
  }
  
  @media (max-width:767.5px) {
    .mod-one .g-3-container {
      display: block!important;
      margin: 5px 0!important
    }
    .mod-one .module-content {
      text-align: center!important
    }
    .mod-one .header-level-2 {
      font-size: 2.625rem!important
    }
    .mod-one img.img-responsive {
      max-width: none!important;
      max-height: none!important
    }
    .mod-one .image-container {
      max-height: none!important;
      overflow: visible!important;
      margin-bottom: 15px
    }
    .mod-one .g-3-container {
      margin-left: 10px!important;
      margin-right: 10px!important
    }
  }
  
  @media (min-width:768px) and (max-width:992px) {
    .mod-one img.img-responsive {
      width: 100%!important
    }
  }
  
  @media (min-width:768px) {
    .mod-one .module-content {
      padding: 0 105px 0 0!important
    }
  }
  
  @media (min-width:767px) {
    .mod-one .g-3-container {
      min-height: auto
    }
  }
  
  @media (min-width:768px) and (max-width:992px) {
    .mod-one[_ngcontent-ssr-c157] .container[_ngcontent-ssr-c157] {
      width: 768px
    }
    .mod-one .g-3-container {
      margin-top: 40px!important
    }
    .mod-one .module-content {
      padding: 0 25px 0 15px!important
    }
  }
  
  .mod-one[_ngcontent-ssr-c157] {
    background: #f9fdff
  }
  
  .mod-seven-btn[_ngcontent-ssr-c157] {
    min-width: 166px
  }
  
  #modOneContainer .container-fluid {
    padding-left: 0!important;
    padding-right: 0!important
  }
  
  .disclaimer[_ngcontent-ssr-c157] {
    font-family: Interstate_Bold!important;
    font-size: 16px!important;
    color: #666!important;
    letter-spacing: 0!important;
    line-height: 24px!important
  }
  
  @media screen and (max-width:767px) {
    .disclaimer[_ngcontent-ssr-c157] {
      font-size: 14px!important;
      line-height: 21px!important
    }
  }
  
  .m-bottom-0[_ngcontent-ssr-c157] {
    margin-bottom: 0!important
  }
  
  .m-bottom-20[_ngcontent-ssr-c157] {
    margin-bottom: 30px
  }
  
  .m-bottom-10[_ngcontent-ssr-c157] {
    margin-bottom: 10px!important
  }
  
  .d-block[_ngcontent-ssr-c157] {
    display: block!important
  }
  
  .no-text-decoration[_ngcontent-ssr-c157] {
    text-decoration: none
  }
  </style>
  <style>
  .mod-three .g-3-container {
    background: 0 0!important;
    min-height: 524px!important
  }
  
  .mod-three .module-content {
    margin-top: 90px!important;
    padding-right: 0!important;
    padding-left: 110px!important
  }
  
  .mod-three .showcase .module-content {
    padding: 40px 0 40px 40px
  }
  
  .mod-three .waveTopModThree {
    background-repeat: repeat-x;
    background-size: contain
  }
  
  .mod-three .container-fluid {
    padding-left: 0!important;
    padding-right: 0!important
  }
  
  .mod-three .footerwave {
    width: 100%;
    position: absolute;
    bottom: -1px
  }
  
  .mod-three .MobileViewOfferImg {
    display: none
  }
  
  .mod-three .blank-space {
    height: 70px;
    background: #f9fdff
  }
  
  .waveBottom_Threeup[_ngcontent-ssr-c158] {
    width: 100%
  }
  
  @media (max-width:767px) {
    .mod-three .g-3-container {
      min-height: auto!important;
      margin-top: 0!important
    }
    .mod-three .module-content {
      text-align: center!important;
      margin-top: 20px!important;
      padding: 0 10px 10px!important
    }
    .mod-three[_ngcontent-ssr-c158] {
      margin-top: 0!important
    }
    .mod-three .image-container {
      display: none
    }
    .mod-three .MobileViewOfferImg {
      display: block;
      text-align: center;
      padding: 0 15px 5px
    }
    .mod-three .MobileViewOfferImg img {
      width: 100%;
      height: 100%;
      max-width: 70%!important
    }
    .mod-one .g-3-container {
      margin-bottom: 0!important
    }
    .mod-three .blank-space {
      display: none
    }
  }
  
  .mod-three-btn[_ngcontent-ssr-c158] {
    min-width: 166px
  }
  
  .mod-three[_ngcontent-ssr-c158] a.btn.btn-primary[_ngcontent-ssr-c158] {
    margin: 0;
    width: auto!important;
    height: 50px!important
  }
  
  .mod-three img.img-responsive {
    -ms-transform: none!important;
    transform: none!important;
    left: 0!important;
    top: 0!important;
    height: 90%!important;
    position: absolute;
    margin-top: 43px!important
  }
  
  .m-bottom-0[_ngcontent-ssr-c158] {
    margin-bottom: 0!important;
    font-size: 16px!important
  }
  
  @media screen and (max-width:767px) {
    #modThreeContainer .showcase .header-level-2 {
      font-size: 32px!important;
      line-height: 42px!important
    }
    #modThreeContainer .showcase .module-content {
      padding: 0!important
    }
    .m-bottom-0[_ngcontent-ssr-c158] {
      font-size: 14px!important;
      line-height: 21px
    }
  }
  
  .m-bottom-20[_ngcontent-ssr-c158] {
    margin-bottom: 30px
  }
  
  .m-bottom-10[_ngcontent-ssr-c158] {
    margin-bottom: 10px!important
  }
  
  .d-block[_ngcontent-ssr-c158] {
    display: block!important
  }
  
  .no-text-decoration[_ngcontent-ssr-c158] {
    text-decoration: none
  }
  
  @media (min-width:768px) and (max-width:1024px) {
    .mod-three .g-3-container {
      min-height: 353px!important;
      margin-top: 30px!important
    }
    .mod-three img.img-responsive {
      margin: 27px 0 0!important;
      height: 92%!important;
      max-width: 345px!important
    }
    .mod-three .eyebrow-text {
      margin-top: 2%!important
    }
    .mod-three .module-content {
      margin-top: 27px!important;
      padding-left: 0!important
    }
    .mod-three .showcase .module-content {
      padding-top: 5px!important
    }
    .mod-three .container {
      width: 100%
    }
    .mod-three .blank-space {
      height: 50px
    }
  }
  
  @media (min-width:1024px) and (max-width:1024px) {
    .mod-three img.img-responsive {
      margin: 25px 0 0 50px!important
    }
  }
  
  @media (min-width:1025px) and (max-width:1200px) {
    .mod-three img.img-responsive {
      width: 100%!important
    }
    .mod-three .module-content {
      margin-top: 90px!important;
      padding-left: 70px!important
    }
  }
  </style>
  <style>
  @media only screen and (max-width:991px) {
    .partner-container-fluid[_ngcontent-ssr-c154] {
      margin-top: 320px!important;
      padding: 40px 0!important
    }
    citi-cta[idStr=signOn][_ngcontent-ssr-c154] {
      margin: auto;
      padding: 0
    }
    citi-cta[idStr=signOn][_ngcontent-ssr-c154] button {
      margin-right: 0
    }
    .partner-login-back-link[_ngcontent-ssr-c154],
    .partner-login-back-link[_ngcontent-ssr-c154] button {
      display: block;
      margin: auto
    }
    div.sub-navigation div.content {
      border-bottom: none!important
    }
  }
  
  @media only screen and (min-width:991px) {
    div.content.singleBorder {
      padding: 0!important;
      height: 1px!important
    }
  }
  
  div.citi-container.cbolui-ddl.theme-light[_ngcontent-ssr-c154] {
    padding-top: 0!important
  }
  
  div.row.linkBlock[_ngcontent-ssr-c154] {
    margin: 0
  }
  
  .partner-login-frgot-link[_ngcontent-ssr-c154] {
    display: block
  }
  
  citi-jamp.jamp-page-level[_ngcontent-ssr-c154] {
    z-index: 99999
  }
  
  div.disclaimer .content .text p {
    font-size: 12px;
    color: #fff
  }
  
  .citi-signon2[_ngcontent-ssr-c154] {
    width: 344px;
    padding-left: 0!important;
    padding-right: 0!important
  }
  
  .citi-signon2 a,
  .citi-signon2 a:hover {
    font-size: 12px;
    line-height: 1px;
    text-decoration: underline
  }
  
  div.checkbox {
    margin-left: 10px!important
  }
  
  div.secInfo[_ngcontent-ssr-c154] .ui-tooltip-rmid[_ngcontent-ssr-c154] small[_ngcontent-ssr-c154] {
    padding: 0 12px 12px 0
  }
  
  .heroContainer .ui-tooltip-rmid {
    padding: 0 12px 10px!important
  }
  
  @media (max-width:991.5px) {
    #logInForm[_ngcontent-ssr-c154] {
      display: none
    }
  }
  
  @media screen and (max-width:1440px) and (min-width:991.9px) {
    .citi-panel-wrapper .container {
      width: 560px!important
    }
  }
  
  @media (min-width:992px) {
    .heroContainer {
      position: relative
    }
    .heroContainer #logInForm {
      position: absolute;
      top: 50%;
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      right: 20px
    }
  }
  
  @media (min-width:1400px) {
    .heroContainer #logInForm {
      position: absolute;
      right: calc((100% - 1400px)/ 2)!important;
      padding-left: 0!important;
      padding-right: 0!important
    }
  }
  
  @media screen and (max-width:1900px) and (min-width:1400px) {
    .citi-panel-wrapper .heroContainer #logInForm {
      right: 10px!important
    }
  }
  
  .validation-message-danger {
    font-family: interstate_Light, sans-serif!important
  }
  
  .inline-addition.check[_ngcontent-ssr-c154] {
    padding-left: 20px
  }
  
  .citi-signon2 section.theme-light {
    padding: 20px 10px
  }
  
  section.theme-light h4 {
    padding-left: 10px
  }
  
  div.password-input div.form-control-container,
  div.username-input div.form-control-container {
    padding-right: 0!important;
    padding-left: 0!important
  }
  
  .signonButton>button.btn-primary {
    margin: 0
  }
  
  div.input-error {
    height: auto!important
  }
  
  .loginFail section>h4 {
    display: none!important
  }
  
  .loginFail section .password-input,
  .loginFail section .username-input {
    margin-top: 40px!important
  }
  
  citi-errors[_ngcontent-ssr-c154] {
    position: absolute!important;
    left: 10px
  }
  
  citi-errors[_ngcontent-ssr-c154]>div.alert[_ngcontent-ssr-c154] {
    padding-left: 0
  }
  
  .loginFail citi-input2.validation-error div.form-control-container {
    margin-top: 25px!important
  }
  
  citi-dropdown2.qrLoginLink div.dropdown2-wrapper,
  citi-input2.qrLoginLink>div.form-control-container {
    margin-top: 2px!important
  }
  
  .dropdown-validation-error[_ngcontent-ssr-c154] {
    margin-top: 20px!important
  }
  
  .loginFail .mobileCode,
  .loginFail section h4 {
    display: none!important
  }
  
  .qr {
    margin-top: 20px;
    margin-right: 10px
  }
  
  .qr-sample {
    width: 25px;
    height: 25px;
    display: inline-block;
    margin: 5px;
    background-image: url(/cbol-pre-login-static-assets/assets/qrcode/images/qrsignon-b.png)
  }
  
  .mobileCode {
    display: -ms-flexbox;
    display: flex;
    color: #056dae;
    text-decoration: underline;
    height: 40px
  }
  
  span.mobileAppLink {
    width: 110px;
    font-size: 13px;
    cursor: pointer
  }
  
  .reSkin div.password-input.col-xs-6,
  .reSkin div.username-input.col-xs-6 {
    width: 100%!important
  }
  
  .reSkin.ngaSignon section.theme-light {
    border-radius: 16px!important;
    border: 1px solid #eee
  }
  
  .reSkin.ngaSignon section.theme-light h4 {
    margin-top: 0!important;
    margin-bottom: 0!important;
    margin-left: 3%!important
  }
  
  .cds-signon section.theme-light h4 {
    padding-left: 0!important
  }
  
  .reSkin[_ngcontent-ssr-c154] .qr-sample-new[_ngcontent-ssr-c154] {
    position: absolute;
    width: 25px;
    height: 25px;
    display: inline-block;
    margin: 5px 10px 5px 5px;
    background-image: url(/assets/qrcode/images/qrsignon-b.png);
    left: 20px;
    top: 5px
  }
  
  .reSkin[_ngcontent-ssr-c154] .qrCodeSection[_ngcontent-ssr-c154] button[_ngcontent-ssr-c154] {
    color: #056dae!important;
    background-color: #eee!important;
    margin: 0!important;
    border-width: 1px;
    border-color: #fff;
    text-align: right;
    padding: 0 25px
  }
  
  .reSkin div.username-input div.checkbox {
    margin-left: 0!important;
    margin-bottom: 0!important
  }
  
  .reSkin[_ngcontent-ssr-c154] div.lastLinkSection[_ngcontent-ssr-c154] {
    color: #056dae;
    letter-spacing: 0;
    text-align: center;
    line-height: 24px;
    font-family: Interstate_Bold;
    margin-top: 23px
  }
  
  .reSkin[_ngcontent-ssr-c154] div.lastLinkSection[_ngcontent-ssr-c154] a[_ngcontent-ssr-c154] {
    font-size: 16px!important
  }
  
  .reSkin.ngaSignon div.form-group.signonButton {
    margin-bottom: 10px!important
  }
  
  .heroContainer .reSkin .ui-tooltip-rmid,
  .reSkin #ui-tooltip-rmid small {
    padding-bottom: 0!important
  }
  
  .citi-signon2.loginFail.reSkin section {
    padding-top: 60px!important
  }
  
  .citi-signon2.loginFail.reSkin.spanishPage section {
    padding-top: 75px!important
  }
  
  @media (min-width:1024px) and (max-width:1350px) {
    .reSkin[_ngcontent-ssr-c372][_ngcontent-ssr-c154] .qr-sample-new[_ngcontent-ssr-c372][_ngcontent-ssr-c154] {
      left: 2px
    }
    .reSkin[_ngcontent-ssr-c372][_ngcontent-ssr-c154] .qrCodeSection[_ngcontent-ssr-c372][_ngcontent-ssr-c154] button[_ngcontent-ssr-c372][_ngcontent-ssr-c154] {
      padding: 0 8px
    }
  }
  
  div.server-error[_ngcontent-ssr-c154] {
    margin-left: 16px;
    color: #d60000;
    font-family: interstate_Bold, sans-serif;
    font-size: 12px;
    margin-top: 16px
  }
  
  div.server-error[_ngcontent-ssr-c154]:before {
    content: "";
    background-image: url(/cbol-pre-login-static-assets/assets/img/alert.svg);
    background-repeat: no-repeat;
    top: 4px;
    background-size: contain;
    background-position: 50%;
    height: 20px;
    width: 20px;
    position: absolute;
    left: -3px
  }
  
  .cdssignon.reskinLayout .form-group.col-xs-12 {
    float: none!important;
    padding-left: 0;
    padding-right: 0
  }
  
  .cdssignon.reskinLayout .cds-signon-cta {
    margin-top: 0
  }
  
  @media only screen and (min-width:1024px) {
    .qr-modal {
      padding: 0 40px 80px!important
    }
    .qr-modal .modal-dialog {
      width: 1040px!important
    }
    .hpQrModal[_ngcontent-ssr-c154] {
      padding-left: 0!important;
      padding-right: 0!important
    }
  }
  
  div.action-container[_ngcontent-ssr-c154] {
    margin-top: 10px;
    font-size: 12px
  }
  
  .readLine[_ngcontent-ssr-c154] {
    width: auto!important;
    padding-left: 0;
    padding-right: 5px
  }
  
  .noPadding[_ngcontent-ssr-c154] {
    padding-right: 0
  }
  
  .cds-signon-cta.mobile {
    word-wrap: break-word;
    white-space: normal;
    display: -ms-flexbox!important;
    display: flex!important;
    padding: 13px 15px!important;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center
  }
  
  .cds-signon-cta.mobile .qr-icon {
    margin: 0 10px 0 0!important;
    padding: 0!important;
    display: -ms-inline-flexbox!important;
    display: inline-flex!important;
    -ms-flex: 0 0 25px;
    flex: 0 0 25px
  }
  
  @media (min-width:1023px) and (max-width:1280px) {
    .cds-signon-cta.mobile .qr-icon {
      margin: 0 5px 0 0!important
    }
    .cds-signon-cta.mobile {
      white-space: nowrap;
      padding: 13px 1px!important
    }
  }
  
  .cbolui-cds .cds-checkbox-label {
    margin-top: 0!important
  }
  
  .cds-signon-cta.mobile .qr-icon+span {
    font-size: 12px
  }
  
  .cbolui-cds .cds-checkbox-label {
    font-size: 12px
  }
  
  .cbolui-cds .cds-signon .register-connector {
    font-size: 12px
  }
  
  .mobile-app[_ngcontent-ssr-c154] {
    width: 110px;
    text-align: center;
    font-size: 13px;
    cursor: pointer;
    height: 50px
  }
  
  citi-cta.qr-text[_ngcontent-ssr-c154] button {
    color: #056dae;
    font-size: 13px;
    width: 100%;
    white-space: pre-wrap;
    float: left
  }
  
  citi-modal[_ngcontent-ssr-c154] .header-level-2 {
    padding-left: 40px
  }
  
  cds-modal-dialog[_ngcontent-ssr-c154] .cds-modal-title {
    font-size: 2.5rem
  }
  
  @media screen and (max-width:425px) {
    .cds-modal-lg[_ngcontent-ssr-c154],
    .safeModemodal .modal-dialog {
      width: auto!important;
      height: auto;
      margin: 120px 12px 0!important
    }
    .safeModemodal .modal-content {
      padding-left: 0!important
    }
    .safeModemodal .citi-modal-controls {
      text-align: center!important
    }
    .safeModemodal .citi-modal-controls button {
      min-width: 100px!important;
      width: auto!important
    }
  }
  
  @media screen and (max-width:768px) {
    .cds-modal-lg[_ngcontent-ssr-c154],
    .safeModemodal .modal-dialog {
      width: auto!important;
      height: auto;
      margin: 120px 40px 0!important
    }
    .safeModemodal .modal-content {
      padding-left: 0!important
    }
    .safeModemodal .citi-modal-controls {
      text-align: center!important
    }
    .safeModemodal .citi-modal-controls button {
      min-width: 100px!important;
      width: auto!important
    }
  }
  
  @media screen and (max-width:992px) {
    .cds-modal-lg[_ngcontent-ssr-c154],
    .safeModemodal .modal-dialog {
      width: auto!important;
      height: auto;
      margin: 120px 60px 0!important
    }
    .safeModemodal .citi-modal-controls {
      text-align: center!important
    }
    .safeModemodal .cds-modal-footer {
      -ms-flex-item-align: center!important;
      align-self: center!important
    }
    .safeModemodal .citi-modal-controls button {
      min-width: 100px!important
    }
  }
  
  @media screen and (max-width:2560px) {
    .cds-modal-lg[_ngcontent-ssr-c154],
    .safeModemodal .modal-dialog {
      width: 841px;
      height: auto;
      margin-top: 220px
    }
    .safeModemodal .modal-content {
      padding-left: 40px;
      border-radius: 6px!important
    }
    .safeModemodal .modal-body .header-level-2 {
      padding-left: 0!important
    }
    .safeModemodal .citi-modal-controls {
      text-align: left
    }
    .safeModemodal .citi-modal-controls button {
      min-width: 150px
    }
    .cds-modal-body[_ngcontent-ssr-c154],
    .safeModemodal .modal-body-content {
      margin-top: -17px
    }
    .safeModemodal .cds-modal-title {
      font-weight: 700
    }
  }
  
  .homepage-reskin-container #logInForm {
    border: 1px solid #dcdcdc;
    border-radius: 16px;
    width: 384px;
    background-color: #fff;
    box-shadow: 1px 1px 5px .05px hsla(0, 0%, 41%, .54)
  }
  
  .cbolui-cds .cds-signon2 {
    border-radius: 16px;
    padding-top: 10px;
    border: none
  }
  
  .cbolui-cds .cds-signon2 .cds-signon-anchor {
    font-size: 12px;
    font-weight: 400;
    text-decoration: underline
  }
  
  .cbolui-cds .cds-signon2 .cds-signon-anchor a {
    font-weight: 400;
    text-decoration: underline
  }
  
  .cbolui-cds .cds-signon2 .anchor-container {
    padding: 0;
    float: right;
    width: 100%
  }
  
  .cbolui-cds .cds-signon2 .remember {
    padding-left: 2px
  }
  
  .homepage-reskin-container #logInForm .SampleErrorStates .sign-user {
    padding-left: 0
  }
  
  .homepage-reskin-container #logInForm .SampleErrorStates .sign-password {
    padding-right: 0
  }
  
  .homepage-reskin-container #logInForm .cds-checkbox-input {
    height: 1px;
    width: 1px
  }
  
  .cbolui-cds .cds-signon2 .cds-signon-title {
    display: none
  }
  
  .cbolui-cds .cds-signon2 .register-activate {
    float: left
  }
  
  .homepage-reskin-container #logInForm .cds-checkbox-input:checked+.cds-checkbox-label,
  .homepage-reskin-container #logInForm .cds-checkbox-input:focus+.cds-checkbox-label,
  .homepage-reskin-container #logInForm .cds-checkbox-input:hover+.cds-checkbox-label {
    color: #696969
  }
  
  .homepage-reskin-container #logInForm .username .action-container {
    position: absolute;
    width: 350px;
    height: auto;
    top: 5px;
    z-index: 1
  }
  
  .homepage-reskin-container #logInForm .username .dd-pwd-error {
    top: 20px
  }
  
  .cbolui-cds .cds-signon2 .cds-dropdown .cds-dd-input {
    padding: 12px 44px 16px 16px
  }
  
  .cbolui-cds .cds-signon2 #clear-userid {
    font-family: Interstate_Regular, sans-serif
  }
  
  .homepage-reskin-container #logInForm .server-error:before {
    display: none
  }
  
  .homepage-reskin-container .username .cds-label {
    font-weight: 400
  }
  
  .homepage-reskin-container .register-main {
    top: 0!important;
    margin-top: 24px!important;
    height: 20px
  }
  
  .homepage-reskin-container .register-main .col-sm-5,
  .homepage-reskin-container .register-main .col-sm-7 {
    padding: 0
  }
  
  .homepage-reskin-container .cds-signon2 .rememberText.pl-1 {
    padding-left: 0!important
  }
  
  .homepage-reskin-container .cds-signon2 .cds-error {
    margin: 8px 0 0;
    white-space: nowrap!important
  }
  
  .cbolui-cds .pt-2 {
    padding-top: 0!important
  }
  
  .homepage-reskin-container .cdssignon.reskinLayout .cds-button-primary {
    margin-top: 24px!important;
    margin-bottom: 10px!important
  }
  
  .homepage-reskin-container .cds-signon2 .cds-input-error.cds-input-error {
    color: #056dae;
    background-color: #fdfdfd
  }
  
  #logInForm .dropdown2-wrapper .scrollable-menu {
    max-height: 220px
  }
  
  .cds-signon2 .cds-checkbox-label:before {
    margin-right: 6px!important
  }
  
  .citi-panel-wrapper .cds-signon2 .cds-checkbox-label {
    width: 150px
  }
  
  @media (min-width:1024px) and (max-width:1070px) {
    .citi-panel-wrapper .homepage-reskin-container .cds-signon2 {
      width: 357px!important
    }
    .citi-panel-wrapper .homepage-reskin-container #logInForm {
      width: 359px!important
    }
  }
  
  .cookiedUser .signonButton {
    margin-top: 15px!important
  }
  
  citi-dropdown2 .dropdown2-wrapper {
    margin-bottom: 10px!important
  }
  
  .clearUserId[_ngcontent-ssr-c154] {
    line-height: 15px
  }
  
  .clearUserId[_ngcontent-ssr-c154] a[_ngcontent-ssr-c154] {
    cursor: pointer
  }
  
  #clearUserIdModal h2.header-level-2 {
    padding-left: 0
  }
  
  #clearUserIdModal .footnote {
    font-size: 12px!important
  }
  
  a#clear-userid-anchor[_ngcontent-ssr-c154]:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
  }
  
  .register-main .col-sm-5 {
    width: 41%!important
  }
  
  .register-main .col-sm-7 {
    width: 59%!important
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .reSkin.ngaSignon {
    border-radius: 16px!important
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm {
    border-radius: 16px!important;
    float: right;
    margin-right: 30px
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .cds-signon2 {
    border-radius: 16px!important;
    padding: 16px!important;
    display: block;
    width: 384px;
    background-color: #fff;
    font-family: Interstate_Regular, sans-serif
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .cds-label {
    font-weight: 400;
    height: 25px;
    width: 100%;
    color: #333;
    font-size: 12px;
    letter-spacing: 0;
    line-height: 25px
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .col-sm-6 {
    width: 50%
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .cds-input:disabled {
    padding: 0 0 0 10px;
    color: #666;
    border: 1px solid #bbb;
    background: #eee;
    font-size: 16px;
    line-height: 1.5;
    border-radius: .5rem;
    font-weight: 400;
    font-family: Interstate_Bold;
    height: calc(1.5em + 1.375rem + 2px);
    outline: 0;
    width: 100%;
    font-family: Interstate_Regular, sans-serif
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm label.cds-checkbox-label {
    font-size: 12px;
    color: #696969
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .cds-checkbox-label:before {
    border-color: #d3d3d3
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .cds-signon-cta {
    width: 100%;
    margin-bottom: 10px;
    height: 40px;
    font-weight: 700;
    padding: 0;
    font-size: 12px;
    background-color: #d3d3d3;
    color: #fff;
    display: inline-block;
    text-decoration: none;
    white-space: nowrap;
    font-family: Interstate_Bold, sans-serif;
    border: 2px solid transparent;
    border-radius: 8px
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .d-flex {
    display: -ms-flexbox!important;
    display: flex!important
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .register-main .col-sm-5,
  .homepage-reskin-container .ssrLoginbeautify #logInForm .register-main .col-sm-7 {
    padding: 0;
    float: left
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .register-main .col-sm-5 {
    width: 41%!important
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .register-main .col-sm-7 {
    width: 59%!important
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .register-activate {
    float: left
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .anchor-container {
    padding: 0;
    float: right;
    width: 100%;
    text-align: right
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .cds-signon-anchor {
    display: inline-block;
    color: #d3d3d3;
    font-size: 12px!important;
    letter-spacing: 0;
    line-height: 24px;
    text-align: right
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .cds-signon-anchor a {
    color: #d3d3d3;
    font-size: 12px!important
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .register-connector {
    color: #d3d3d3;
    font-size: 16px;
    font-weight: 300;
    letter-spacing: 0;
    line-height: 24px;
    text-align: center;
    margin-right: 5px;
    margin-left: 5px
  }
  
  .homepage-reskin-container .ssrLoginbeautify #logInForm .col-xs-6.readLine {
    float: left
  }
  
  app-select-userid button.cds-cta-tertiary {
    padding: 11px 30px!important
  }
  
  app-select-userid button.cds-cta-primary:disabled {
    background-color: #fff!important;
    color: #666!important;
    opacity: .65!important;
    border: 2px solid #666!important
  }
  </style>
  <style>
  .jamp.white[_ngcontent-ssr-c104] .img[_ngcontent-ssr-c104] {
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI0LjIuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAyNSAyNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjUgMjU7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojQ0NDQ0NDO30KCS5zdDF7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDU2REFFO30KPC9zdHlsZT4KPHBhdGggaWQ9IkJhc2UiIGNsYXNzPSJzdDAiIGQ9Ik0xMi41LDBDMTkuNCwwLDI1LDUuNiwyNSwxMi41UzE5LjQsMjUsMTIuNSwyNVMwLDE5LjQsMCwxMi41UzUuNiwwLDEyLjUsMHogTTEyLjUsMgoJQzYuNywyLDIsNi43LDIsMTIuNVM2LjcsMjMsMTIuNSwyM1MyMywxOC4zLDIzLDEyLjVTMTguMywyLDEyLjUsMnoiLz4KPHBhdGggaWQ9IkNvbXBsZXRlZCIgY2xhc3M9InN0MSIgZD0iTTMuNiwyMS4zTDUsMTkuOWMyLDIsNC42LDMuMSw3LjUsMy4xQzE4LjMsMjMsMjMsMTguMywyMywxMi41QzIzLDYuOCwxOC40LDIuMiwxMi44LDJsLTAuMywwVjAKCUMxOS40LDAsMjUsNS42LDI1LDEyLjVTMTkuNCwyNSwxMi41LDI1Yy0zLjMsMC02LjMtMS4zLTguNi0zLjVMMy42LDIxLjN6Ii8+Cjwvc3ZnPgo=)
  }
  
  .jamp.white[_ngcontent-ssr-c104] .message[_ngcontent-ssr-c104] {
    color: #fff
  }
  
  .jamp[_ngcontent-ssr-c104] .img[_ngcontent-ssr-c104] {
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI0LjIuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAyNSAyNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjUgMjU7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojQ0NDQ0NDO30KCS5zdDF7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMDU2REFFO30KPC9zdHlsZT4KPHBhdGggaWQ9IkJhc2UiIGNsYXNzPSJzdDAiIGQ9Ik0xMi41LDBDMTkuNCwwLDI1LDUuNiwyNSwxMi41UzE5LjQsMjUsMTIuNSwyNVMwLDE5LjQsMCwxMi41UzUuNiwwLDEyLjUsMHogTTEyLjUsMgoJQzYuNywyLDIsNi43LDIsMTIuNVM2LjcsMjMsMTIuNSwyM1MyMywxOC4zLDIzLDEyLjVTMTguMywyLDEyLjUsMnoiLz4KPHBhdGggaWQ9IkNvbXBsZXRlZCIgY2xhc3M9InN0MSIgZD0iTTMuNiwyMS4zTDUsMTkuOWMyLDIsNC42LDMuMSw3LjUsMy4xQzE4LjMsMjMsMjMsMTguMywyMywxMi41QzIzLDYuOCwxOC40LDIuMiwxMi44LDJsLTAuMywwVjAKCUMxOS40LDAsMjUsNS42LDI1LDEyLjVTMTkuNCwyNSwxMi41LDI1Yy0zLjMsMC02LjMtMS4zLTguNi0zLjVMMy42LDIxLjN6Ii8+Cjwvc3ZnPgo=);
    background-repeat: no-repeat;
    -webkit-animation: spin 1.16s linear infinite;
    animation: spin 1.16s linear infinite;
    background-position: 0 0;
    background-size: contain;
    padding-top: 5px;
    margin-right: 3px;
    width: 34px;
    height: 34px;
    display: inline-block
  }
  
  .jamp[_ngcontent-ssr-c104] .message[_ngcontent-ssr-c104] {
    position: relative;
    top: -9px
  }
  
  .jamp.jamp-css[_ngcontent-ssr-c104] .loading[_ngcontent-ssr-c104] {
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.1.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2030%2030%22%20style%3D%22enable-background%3Anew%200%200%2030%2030%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.Drop_x0020_Shadow%7Bfill%3Anone%3B%7D%0A%09.Round_x0020_Corners_x0020_2_x0020_pt%7Bfill%3A%23FFFFFF%3Bstroke%3A%23000000%3Bstroke-miterlimit%3A10%3B%7D%0A%09.Live_x0020_Reflect_x0020_X%7Bfill%3Anone%3B%7D%0A%09.Bevel_x0020_Soft%7Bfill%3Aurl%28%23SVGID_1_%29%3B%7D%0A%09.Dusk%7Bfill%3A%23FFFFFF%3B%7D%0A%09.Foliage_GS%7Bfill%3A%23FFDD00%3B%7D%0A%09.Pompadour_GS%7Bfill-rule%3Aevenodd%3Bclip-rule%3Aevenodd%3Bfill%3A%2344ADE2%3B%7D%0A%09.st0%7Bfill%3Anone%3B%7D%0A%09.st1%7Bfill%3A%23056EAE%3B%7D%0A%3C/style%3E%0A%3ClinearGradient%20id%3D%22SVGID_1_%22%20gradientUnits%3D%22userSpaceOnUse%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%220.7071%22%20y2%3D%220.7071%22%3E%0A%09%3Cstop%20%20offset%3D%220%22%20style%3D%22stop-color%3A%23DEDFE3%22/%3E%0A%09%3Cstop%20%20offset%3D%220.1738%22%20style%3D%22stop-color%3A%23D8D9DD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.352%22%20style%3D%22stop-color%3A%23C9CACD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.5323%22%20style%3D%22stop-color%3A%23B4B5B8%22/%3E%0A%09%3Cstop%20%20offset%3D%220.7139%22%20style%3D%22stop-color%3A%23989A9C%22/%3E%0A%09%3Cstop%20%20offset%3D%220.8949%22%20style%3D%22stop-color%3A%23797C7E%22/%3E%0A%09%3Cstop%20%20offset%3D%221%22%20style%3D%22stop-color%3A%23656B6C%22/%3E%0A%3C/linearGradient%3E%0A%3Cg%3E%0A%09%3Crect%20x%3D%220%22%20class%3D%22st0%22%20width%3D%2230%22%20height%3D%2230%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M2.2%2C17.5C2.1%2C16.7%2C2%2C15.8%2C2%2C15C2%2C7.8%2C7.8%2C2%2C15%2C2s13%2C5.8%2C13%2C13c0%2C0.8-0.1%2C1.7-0.2%2C2.5h2%0A%09%09c0.1-0.8%2C0.2-1.6%2C0.2-2.5c0-8.3-6.7-15-15-15S0%2C6.7%2C0%2C15c0%2C0.8%2C0.1%2C1.7%2C0.2%2C2.5H2.2z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A");
    background-repeat: no-repeat;
    -webkit-animation: spin 1.16s linear infinite;
    animation: spin 1.16s linear infinite
  }
  
  .jamp.jamp-css.white[_ngcontent-ssr-c104] .loading[_ngcontent-ssr-c104] {
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.2.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2030%2030%22%20style%3D%22enable-background%3Anew%200%200%2030%2030%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.st0%7Bfill%3Anone%3B%7D%0A%09.st1%7Bfill%3A%23FFFFFF%3B%7D%0A%3C/style%3E%0A%3Cg%3E%0A%09%3Crect%20class%3D%22st0%22%20width%3D%2230%22%20height%3D%2230%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M2.2%2C17.5C2.1%2C16.7%2C2%2C15.8%2C2%2C15C2%2C7.8%2C7.8%2C2%2C15%2C2s13%2C5.8%2C13%2C13c0%2C0.8-0.1%2C1.7-0.2%2C2.5h2%0A%09%09c0.1-0.8%2C0.2-1.6%2C0.2-2.5c0-8.3-6.7-15-15-15S0%2C6.7%2C0%2C15c0%2C0.8%2C0.1%2C1.7%2C0.2%2C2.5H2.2z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A");
    background-repeat: no-repeat
  }
  
  @-webkit-keyframes spin {
    0% {
      transform: rotate(0)
    }
    to {
      transform: rotate(1turn)
    }
  }
  
  @keyframes spin {
    0% {
      transform: rotate(0)
    }
    to {
      transform: rotate(1turn)
    }
  }
  
  .jamp-page-level[_nghost-ssr-c104] {
    background: hsla(0, 0%, 100%, .9);
    position: fixed;
    z-index: 100;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
  }
  
  .jamp-page-level[_nghost-ssr-c104] .row[_ngcontent-ssr-c104] {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)
  }
  
  .jamp-center-css[_ngcontent-ssr-c104] {
    width: calc(100% - 60px);
    max-height: calc(100% - 60px);
    position: absolute!important;
    top: 50%!important;
    left: 50%!important;
    transform: translate(-50%, -50%)
  }
  
  .jamp[_ngcontent-ssr-c104] {
    position: relative!important;
    top: 50%!important;
    left: 0!important;
    text-align: center!important;
    transform: translateY(-50%)!important;
    margin: 0
  }
  
  .fillHeight[_ngcontent-ssr-c104] {
    min-height: 100%;
    height: 100%
  }
  
  .position-initial[_ngcontent-ssr-c104] {
    position: static
  }
  
  .citi-modal [_nghost-ssr-c104] .jamp[_ngcontent-ssr-c104] {
    margin: 30px 0 10px
  }
  </style>
  <meta name="keywords" content="banking, citi, financial services, checking account, savings account, credit cards">
  <meta name="description" content="Open a bank account from Citi checking and savings accounts and CDs, to banking IRAs. Apply for a personal loan, or learn how to invest in your financial future.">
  <link rel="canonical" href="https://www.citi.com/">
  <link rel="alternate" hreflang="en-in" href="https://www.online.citibank.co.in/">
  <link rel="alternate" hreflang="en-ae" href="https://www.citibank.ae/uae/homepage/index.htm/">
  <link rel="alternate" hreflang="zh-cn" href="https://www.citibank.com.cn/sim/index.htm/">
  <link rel="alternate" hreflang="en-cn" href="https://www.citibank.com.cn/sim/english/index.htm/">
  <link rel="alternate" hreflang="x-default" href="https://www.citi.com/">
  <link rel="alternate" hreflang="en-my" href="https://www.citibank.com.my/index.htm/">
  <link rel="alternate" hreflang="en-au" href="https://www1.citibank.com.au/">
  <link rel="alternate" hreflang="en-th" href="https://www.citibank.co.th/global_docs/citith_home_en.htm/">
  <link rel="alternate" hreflang="en-ph" href="https://www.citibank.com.ph/portal/citiph_home.htm/">
  <link rel="alternate" hreflang="en-vn" href="https://www.citibank.com.vn/portal/vietnam_home.htm/">
  <link rel="alternate" hreflang="en-pl" href="https://www.citibank.pl/en/">
  <link rel="alternate" hreflang="zh-hk" href="https://www.citibank.com.hk/portal/home_chinese/hkcb_Home.htm/">
  <link rel="alternate" hreflang="zh-tw" href="https://www.citibank.com.tw/sim/index.htm/">
  <link rel="alternate" hreflang="en-hk" href="https://www.citibank.com.hk/portal/home_english/hkcb_Home.htm/">
  <link rel="alternate" hreflang="en-tw" href="https://www.citibank.com.tw/sim/en/index.htm/">
  <link rel="alternate" hreflang="ko-kr" href="https://www.citibank.co.kr/">
  <link rel="alternate" hreflang="en-ru" href="https://www.citibank.ru/russia/main/eng/home.htm/">
  <link rel="alternate" hreflang="ru-ru" href="https://www.citibank.ru/russia/main/rus/home.htm/">
  <link rel="alternate" hreflang="pl-pl" href="https://www.citibank.pl/">
  <link rel="alternate" hreflang="id-id" href="https://www.citibank.co.id/portal/bahasa_home/index.htm/">
  <link rel="alternate" hreflang="en-sg" href="https://www.citibank.com.sg/portal/bluehome/index.htm/">
  <link rel="alternate" hreflang="vi-vn" href="https://www.citibank.com.vn/portal/vietnam_home_vn.htm/">
  <link rel="alternate" hreflang="en-gb" href="https://www.citibank.co.uk/personal/home.do/">
  <link rel="alternate" hreflang="en-id" href="https://www.citibank.co.id/portal/blue/en_home.htm/">
  <link rel="alternate" hreflang="th-th" href="https://www.citibank.co.th/global_docs/citith_home_th.htm/">
  <style>
  .rememberText[_ngcontent-ssr-c122] {
    font-size: 10px
  }
  
  .register-main[_ngcontent-ssr-c122] {
    margin-top: 20px;
    position: relative;
    top: 5px
  }
  
  .register-activate[_ngcontent-ssr-c122] {
    margin-top: 0
  }
  </style>
  <style>
  [_nghost-ssr-c117] {
    display: flex
  }
  
  .cds-checkbox-input[_ngcontent-ssr-c117] {
    vertical-align: middle;
    margin-top: 1px;
    display: inline-block;
    opacity: .01
  }
  
  .cds-checkbox-label[_ngcontent-ssr-c117]:before {
    content: "";
    position: relative;
    top: 7px;
    display: inline-block;
    width: 24px;
    height: 24px;
    margin-right: 16px;
    border-radius: 4px;
    background-color: transparent;
    margin-left: -13px
  }
  
  .cds-checkbox-input.cds-checkbox-input[_ngcontent-ssr-c117]:checked:hover:enabled+label[_ngcontent-ssr-c117]:before,
  .cds-checkbox-input[_ngcontent-ssr-c117]:checked+label[_ngcontent-ssr-c117]:before {
    background-repeat: no-repeat;
    background-position: 50%
  }
  
  .cds-checkbox-input[_ngcontent-ssr-c117]:checked:focus+label[_ngcontent-ssr-c117]:before,
  .cds-checkbox-input[_ngcontent-ssr-c117]:focus+label[_ngcontent-ssr-c117]:before {
    border-radius: 6px;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
  }
  
  .cds-checkbox-input[_ngcontent-ssr-c117]:disabled:checked+label[_ngcontent-ssr-c117]:before {
    color: #333
  }
  
  .cds-checkbox-input.cds-checkbox-error[_ngcontent-ssr-c117]:checked+label[_ngcontent-ssr-c117]:before,
  .cds-checkbox-input[_ngcontent-ssr-c117]:disabled:checked+label[_ngcontent-ssr-c117]:before {
    background-repeat: no-repeat;
    background-position: 50%
  }
  
  [role=list][_ngcontent-ssr-c117] {
    margin: 0;
    padding: 0
  }
  </style>
  <script type="text/javascript" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/logo.js"></script>
  <style>
  [_nghost-ssr-c49] {
    display: block
  }
  
  .form-white-bg[_ngcontent-ssr-c49] {
    background-color: #fff!important
  }
  
  .form-group[_ngcontent-ssr-c49] {
    display: block
  }
  
  .dark[_ngcontent-ssr-c49] {
    background-color: #eee!important
  }
  
  select.dark[_ngcontent-ssr-c49]::-ms-value,
  select.dark[_ngcontent-ssr-c49]:focus::-ms-value {
    background-color: #eee
  }
  
  .light[_ngcontent-ssr-c49] {
    background-color: #fff!important
  }
  
  select.light[_ngcontent-ssr-c49]::-ms-value,
  select.light[_ngcontent-ssr-c49]:focus::-ms-value {
    background-color: #fff
  }
  
  .select-box-label[_ngcontent-ssr-c49] {
    opacity: 0
  }
  
  .has-value[_ngcontent-ssr-c49] .select-box-label[_ngcontent-ssr-c49],
  .is-focused[_ngcontent-ssr-c49] .select-box-label[_ngcontent-ssr-c49] {
    opacity: 1
  }
  
  .disabled-label[_ngcontent-ssr-c49] {
    font-size: 12px
  }
  
  .disabled-label[_ngcontent-ssr-c49],
  .disabled-select[_ngcontent-ssr-c49] {
    color: #333;
    line-height: 1.5;
    font-family: Interstate-Light
  }
  
  .disabled-select[_ngcontent-ssr-c49] {
    font-size: 16px;
    background-color: transparent!important;
    background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8' standalone='no'%3F%3E%3Csvg width='15px' height='8px' viewBox='0 0 15 8' version='1.1' xmlns='http://www.w3.org/2000/svg'%3E%3Cg transform='translate(-878, -122)' fill='%23666'%3E%3Cg transform='translate(570, 101)'%3E%3Cpath d='M312,32 L312,29.6917048 L316.989689,25.0246591 L312,20.3577556 L312,18 L318.461538,24.1555486 L318.461538,25.8443093 L312,32' transform='translate(315.230769, 25) rotate(-270) translate(-315.230769, -25) '%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
  }
  
  .disabled-select[_ngcontent-ssr-c49],
  .disabled-select[_ngcontent-ssr-c49]:focus {
    border-width: 1px;
    border-style: solid;
    border-color: #666!important
  }
  </style>
  <style>
  .modal-top[_ngcontent-ssr-c153] {
    padding-left: 40px;
    padding-right: 40px
  }
  
  .modal-top[_ngcontent-ssr-c153] h3[_ngcontent-ssr-c153] {
    padding-bottom: 1rem
  }
  
  #qrSignonModalDesc[_ngcontent-ssr-c153] {
    margin-top: 33px
  }
  
  .qrNoteContent[_ngcontent-ssr-c153] {
    color: #666;
    padding-top: 13px
  }
  
  #qrStepsIntro[_ngcontent-ssr-c153] {
    padding-top: 28px;
    margin-top: 12px;
    margin-bottom: 7px
  }
  
  .qrSignonLink[_ngcontent-ssr-c153] {
    font-family: Interstate-Light, sans-serif;
    font-size: 12px;
    color: #056dae;
    line-height: 16px
  }
  
  .qrSignonLink[_ngcontent-ssr-c153] img[_ngcontent-ssr-c153] {
    float: left;
    margin-right: 10px
  }
  
  .qrModalTable[_ngcontent-ssr-c153] {
    height: 524px
  }
  
  table.qrModalTable[_ngcontent-ssr-c153] tbody[_ngcontent-ssr-c153] td[_ngcontent-ssr-c153] {
    padding: 39.25px;
    vertical-align: middle!important;
    font-family: Interstate-Light, sans-serif;
    border: 1px solid #ddd
  }
  
  table.qrModalTable[_ngcontent-ssr-c153] tbody[_ngcontent-ssr-c153] tr[_ngcontent-ssr-c153]:first-child td[_ngcontent-ssr-c153]:first-child {
    padding-bottom: 15px!important
  }
  
  .step1Row[_ngcontent-ssr-c153] {
    margin-top: -13px;
    margin-bottom: -15px
  }
  
  .step1Text[_ngcontent-ssr-c153] {
    margin-right: -2px
  }
  
  .step2Row[_ngcontent-ssr-c153] {
    margin-top: 19px;
    margin-bottom: -7px
  }
  
  .step2Heading[_ngcontent-ssr-c153] {
    color: #002d72;
    margin-top: -28px;
    margin-bottom: 12px
  }
  
  .step2Text[_ngcontent-ssr-c153] {
    width: 72%
  }
  
  .step3Row[_ngcontent-ssr-c153] {
    margin-top: -11px;
    margin-bottom: 16px
  }
  
  .step3Text[_ngcontent-ssr-c153] {
    padding-right: 35px
  }
  
  .qrStepsImgIcon[_ngcontent-ssr-c153] {
    float: right
  }
  
  #img1[_ngcontent-ssr-c153],
  #img2[_ngcontent-ssr-c153] {
    margin-right: 9px
  }
  
  #img3[_ngcontent-ssr-c153] {
    margin-right: 10px
  }
  
  .qrStepsText[_ngcontent-ssr-c153] {
    width: 72%
  }
  
  .qrStepsText[_ngcontent-ssr-c153] h5[_ngcontent-ssr-c153] {
    color: #002d72;
    margin-top: 3px;
    margin-bottom: 12px
  }
  
  h5[_ngcontent-ssr-c153] {
    font-size: 1.313rem;
    line-height: 1.688rem;
    font-family: Interstate_Light, sans-serif;
    font-weight: 500;
    text-transform: none;
    letter-spacing: normal
  }
  
  .qrStepsText[_ngcontent-ssr-c153] div[_ngcontent-ssr-c153] {
    font-size: 16px
  }
  
  .qrStepsCondition[_ngcontent-ssr-c153] {
    width: 100%
  }
  
  .qrStepsCondition[_ngcontent-ssr-c153] p[_ngcontent-ssr-c153] {
    padding-top: 21px;
    font-size: 14px;
    color: #666
  }
  
  .qrBoxCol[_ngcontent-ssr-c153] {
    width: 390px;
    background: #002d72;
    color: #fff;
    text-align: center;
    height: 100%;
    padding-top: 74px
  }
  
  .qrBoxInstructions[_ngcontent-ssr-c153] {
    width: 228px;
    margin: auto;
    padding-bottom: 44px;
    text-align: left;
    font-size: 15.96px;
    color: #fff;
    letter-spacing: 0;
    line-height: 20.52px;
    font-weight: 300
  }
  
  .qrBoxInstructions[_ngcontent-ssr-c153] img[_ngcontent-ssr-c153] {
    float: left;
    padding-right: 12px;
    vertical-align: middle!important
  }
  
  .refreshText[_ngcontent-ssr-c153] {
    padding-top: 15px;
    font-size: 14px;
    font-weight: 300;
    line-height: 21px;
    text-align: center
  }
  
  .xmui-info-panel {
    display: none!important
  }
  
  .xmui-ticket-wait_message {
    display: none!important
  }
  
  .xmui-action-panel {
    display: none!important
  }
  
  .xmui-ticket-wait_qr-code {
    border-radius: 2%
  }
  
  #quadrant_one[_ngcontent-ssr-c153] {
    border-radius: 4% 0 0 0
  }
  
  #quadrant_one[_ngcontent-ssr-c153],
  #quadrant_two[_ngcontent-ssr-c153] {
    width: 136px;
    height: 136px;
    background-color: #25a6da;
    position: relative
  }
  
  #quadrant_two[_ngcontent-ssr-c153] {
    border-radius: 0 4% 0 0
  }
  
  #quadrant_three[_ngcontent-ssr-c153] {
    border-radius: 0 0 0 4%
  }
  
  #quadrant_four[_ngcontent-ssr-c153],
  #quadrant_three[_ngcontent-ssr-c153] {
    width: 136px;
    height: 136px;
    background-color: #25a6da;
    position: relative
  }
  
  #quadrant_four[_ngcontent-ssr-c153] {
    border-radius: 0 0 4% 0
  }
  
  #snakeContainer[_ngcontent-ssr-c153] {
    display: grid;
    grid: 136px 136px/136px 136px;
    position: relative;
    padding-left: 59px;
    top: -8px;
    left: 0
  }
  
  #transmitContainer[_ngcontent-ssr-c153] {
    position: absolute;
    top: 0;
    left: 0;
    right: 0
  }
  
  #QRcodeAndTimer[_ngcontent-ssr-c153] {
    position: relative;
    width: 100%
  }
  </style>
  <style>
  .lobContainer {
    margin-top: -30px;
    margin-bottom: 20px
  }
  
  div.cds-tile {
    margin: 0!important;
    border: 1px solid #dcdcdc;
    box-shadow: none!important;
    border-radius: 16px!important
  }
  
  div.cds-action-content {
    background-color: #fff!important;
    border-radius: 16px!important
  }
  
  .lobIcons {
    padding-bottom: 10px
  }
  
  .flex-wrapper {
    min-width: 180px;
    border-width: 5px
  }
  
  .lobIcons path {
    fill: #056dae!important
  }
  
  .lobIcons circle {
    fill: #eff3f8!important
  }
  
  .cds-icon-wrapper:hover path {
    fill: #eff3f8!important
  }
  
  .cds-icon-wrapper:hover circle {
    fill: #002a54!important
  }
  
  a:focus .cds-icon-wrapper path {
    fill: #eff3f8!important
  }
  
  a:focus .cds-icon-wrapper circle {
    fill: #002a54!important
  }
  
  div.wrapper-text {
    font-size: 14px!important;
    font-weight: 400
  }
  
  a[_ngcontent-ssr-c164] {
    color: #056dae!important
  }
  
  @media (min-width:1024px) and (max-width:1270px) {
    .citi-panel-wrapper .lobContainer .lobTileStart {
      padding-right: 10px;
      padding-left: 5px
    }
    .citi-panel-wrapper .lobContainer .lobTileMiddle {
      padding-right: 10px
    }
  }
  
  @media (min-width:1024px) and (max-width:2560px) {
    .citi-panel-wrapper .lobContainer .cds-action-bar .cds-action-content {
      -ms-flex-wrap: nowrap!important;
      flex-wrap: nowrap!important
    }
  }
  </style>
  <style>
  .hpDescription[_ngcontent-ssr-c165] {
    margin: 0!important
  }
  
  .hpHeader[_ngcontent-ssr-c165]:hover {
    text-decoration: underline
  }
  
  .three-up-body-container[_ngcontent-ssr-c165] {
    border-radius: 0 0 16px 16px;
    background: #fff
  }
  
  .p-top-10[_ngcontent-ssr-c165] {
    padding-top: 10px
  }
  
  .hpImage[_ngcontent-ssr-c165] {
    border-radius: 16px 16px 0 0;
    height: 100%;
    width: 100%
  }
  
  .btn-threeup[_ngcontent-ssr-c165] {
    max-width: 100%
  }
  
  .threeUpContainer .hpHeader {
    margin-bottom: 0;
    font-size: 1.625rem
  }
  
  .threeUpContainer .showcase .container-fluid .row .text-center,
  .threeUpContainer .showcase footer {
    display: none!important
  }
  
  .threeUpContainer .showcase .container-fluid {
    padding: 0
  }
  
  .threeUpContainer {
    padding-left: 0!important;
    padding-right: 0!important
  }
  
  .cta-responsive[_ngcontent-ssr-c165] {
    display: none!important
  }
  
  .hpImage[_ngcontent-ssr-c165] {
    margin-top: 20px;
    margin-bottom: 0!important
  }
  
  .threeUpContainer .cds-cta {
    margin: 20px 0
  }
  
  @media (max-width:767.5px) {
    .btn-threeup[_ngcontent-ssr-c165] {
      display: block;
      margin: 20px 0;
      line-height: 18px!important;
      width: 100%
    }
    .threeUpContainer[_ngcontent-ssr-c165] .d-block[_ngcontent-ssr-c165] {
      height: auto!important
    }
    .three-up-body-container[_ngcontent-ssr-c165]>div[_ngcontent-ssr-c165] {
      border-radius: 0 0 16px 16px
    }
    .hpImage[_ngcontent-ssr-c165] {
      margin-top: 0
    }
    .cta-responsive[_ngcontent-ssr-c165] {
      display: block!important;
      line-height: 18px!important
    }
    .cta-desktop[_ngcontent-ssr-c165] {
      display: none!important
    }
  }
  
  @media only screen and (device-width:768px) {
    .btn-threeup[_ngcontent-ssr-c165],
    .cta-responsive[_ngcontent-ssr-c165] {
      line-height: 18px!important
    }
    .cta-responsive[_ngcontent-ssr-c165] {
      display: block!important
    }
    .cta-desktop[_ngcontent-ssr-c165] {
      display: none!important
    }
  }
  
  @media (min-width:480px) and (max-width:540px) {
    .headers[_ngcontent-ssr-c165] #h0[_ngcontent-ssr-c165] {
      margin-top: 20px
    }
  }
  
  .m-bottom-0[_ngcontent-ssr-c165] {
    margin-bottom: 0!important
  }
  
  .m-bottom-20[_ngcontent-ssr-c165] {
    margin-bottom: 20px!important
  }
  
  .m-bottom-10[_ngcontent-ssr-c165] {
    margin-bottom: 10px!important
  }
  
  .d-block[_ngcontent-ssr-c165] {
    display: block!important
  }
  
  .no-text-decoration[_ngcontent-ssr-c165] {
    text-decoration: none
  }
  
  .hpDescription a {
    text-decoration: none!important
  }
  
  .threeUpContainer .container-fluid>.row {
    padding: 0
  }
  
  .offer-content[_ngcontent-ssr-c165] .headers[_ngcontent-ssr-c165] h2[_ngcontent-ssr-c165] {
    font-size: 16px!important;
    margin: 20px 0
  }
  
  .three-up-body-container[_ngcontent-ssr-c165]>div[_ngcontent-ssr-c165] {
    border: 1px solid #eee;
    padding: 20px 20px 0;
    margin-bottom: 20px
  }
  
  @media (min-width:814px) and (max-width:895px) {
    .cta-desktop[_ngcontent-ssr-c165] {
      padding-left: 40px;
      padding-right: 40px
    }
  }
  
  @media (min-width:769px) and (max-width:814px) {
    .cta-desktop[_ngcontent-ssr-c165] {
      padding-left: 30px;
      padding-right: 30px
    }
  }
  
  @media (max-width:1084px) {
    .citi-panel-wrapper .homepage-reskin-container .threeUp .cta-desktop {
      padding-left: 0;
      padding-right: 0;
      width: 100%
    }
  }
  
  @media (min-width:1085px) and (max-width:1200px) {
    .citi-panel-wrapper .homepage-reskin-container .threeUp .cta-desktop {
      padding-left: 40px;
      padding-right: 40px
    }
  }
  
  .citi-panel-wrapper .homepage-reskin-container .threeUp .d-block {
    height: auto!important
  }
  </style>
  <style>
  .sixteen-by-nine[_ngcontent-ssr-c150] img[_ngcontent-ssr-c150] {
    width: 100%;
    height: auto;
    left: 0;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
  }
  
  [_nghost-ssr-c150] .g-5-0-container citi-showcase-section:last-of-type:ng-deep .section,
  [_nghost-ssr-c150] .g-5-1-container citi-showcase-section:last-of-type:ng-deep .section {
    margin-bottom: 0!important
  }
  
  [_nghost-ssr-c150] .g-5-0-container .section,
  [_nghost-ssr-c150] .g-5-1-container .section {
    margin-bottom: 40px!important;
    display: -ms-flexbox;
    display: flex
  }
  
  [_nghost-ssr-c150] .g-5-0-container .section .showcase-section-image,
  [_nghost-ssr-c150] .g-5-1-container .section .showcase-section-image {
    float: none;
    padding: 0;
    margin: 0 20px 0 0
  }
  
  @media (max-width:480px) {
    [_nghost-ssr-c150] .g-5-0-container .section,
    [_nghost-ssr-c150] .g-5-1-container .section {
      display: block
    }
  }
  
  [_nghost-ssr-c150] .g-5-0-container .section .showcase-section-content,
  [_nghost-ssr-c150] .g-5-1-container .section .showcase-section-content {
    margin: 0;
    padding: 0;
    float: none
  }
  
  @media (max-width:480px) {
    [_nghost-ssr-c150] .g-5-0-container .section .showcase-section-content,
    [_nghost-ssr-c150] .g-5-1-container .section .showcase-section-content {
      margin-top: 10px
    }
  }
  
  [_nghost-ssr-c150] .g-5-0-container .section .showcase-section-content .showcase-section-header h2,
  [_nghost-ssr-c150] .g-5-1-container .section .showcase-section-content .showcase-section-header h2 {
    margin-bottom: 20px
  }
  
  @media (max-width:992px) {
    [_nghost-ssr-c150] .g-5-0-container .section .showcase-section-content .showcase-section-header h2,
    [_nghost-ssr-c150] .g-5-1-container .section .showcase-section-content .showcase-section-header h2 {
      margin-bottom: 10px
    }
  }
  
  [_nghost-ssr-c150] .g-5-0-container .section .showcase-section-content .showcase-section-header h2 a,
  [_nghost-ssr-c150] .g-5-1-container .section .showcase-section-content .showcase-section-header h2 a {
    font-weight: 700;
    background-size: 10px;
    padding-right: 20px
  }
  
  [_nghost-ssr-c150] .g-5-0-container .showcase-section-header {
    font-weight: 700;
    margin-bottom: 20px
  }
  
  .top-buffer[_ngcontent-ssr-c150] {
    margin-bottom: 40px
  }
  
  .cta-anchor[_ngcontent-ssr-c150] citi-cta a {
    background-size: 10px;
    font-size: 1.625rem;
    line-height: 2rem;
    font-family: Interstate_bold, sans-serif;
    font-weight: 400;
    color: #056dae;
    text-transform: none;
    letter-spacing: normal;
    padding: 0 20px 0 0;
    margin-bottom: 20px
  }
  
  .cta-anchor[_ngcontent-ssr-c150] .chevron-link:after {
    font-weight: 100;
    background-size: 10px;
    padding-right: 5px
  }
  
  .showcase[_ngcontent-ssr-c150] .g-3-container[_ngcontent-ssr-c150] {
    position: relative;
    margin: 0 10px;
    background-color: #eee;
    overflow: hidden
  }
  
  .showcase[_ngcontent-ssr-c150] .module-content[_ngcontent-ssr-c150] {
    padding: 20px
  }
  
  .showcase[_ngcontent-ssr-c150] .image-container[_ngcontent-ssr-c150] {
    padding: 0;
    overflow: hidden;
    position: relative
  }
  
  .showcase[_ngcontent-ssr-c150] .image-container[_ngcontent-ssr-c150]:before {
    display: block;
    content: "";
    width: 100%;
    padding-top: 56.25%
  }
  
  .showcase[_ngcontent-ssr-c150] .image-container[_ngcontent-ssr-c150]>.module-ratio[_ngcontent-ssr-c150] {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0
  }
  
  .showcase[_ngcontent-ssr-c150] .image-container[_ngcontent-ssr-c150] img[_ngcontent-ssr-c150] {
    max-width: none;
    position: absolute;
    width: auto;
    top: 0;
    left: 50%;
    -ms-transform: translateX(-50%);
    transform: translateX(-50%)
  }
  
  @media (min-width:768px) {
    .col-sm-push-6[_ngcontent-ssr-c150] {
      left: 50%
    }
    .showcase[_ngcontent-ssr-c150] .showcase-header[_ngcontent-ssr-c150] {
      margin-top: 0;
      margin-bottom: 0
    }
    .showcase[_ngcontent-ssr-c150] .showcase-subheader[_ngcontent-ssr-c150] {
      margin-bottom: 0;
      margin-top: 20px
    }
    .showcase[_ngcontent-ssr-c150] .tile[_ngcontent-ssr-c150] {
      margin-top: 40px;
      padding-bottom: 0
    }
    .showcase[_ngcontent-ssr-c150] .tile[_ngcontent-ssr-c150]:first-child {
      margin-top: 40px
    }
    .showcase[_ngcontent-ssr-c150] .tile[_ngcontent-ssr-c150] .header-2.normal-case[_ngcontent-ssr-c150],
    .showcase[_ngcontent-ssr-c150] .tile[_ngcontent-ssr-c150] img[_ngcontent-ssr-c150],
    .showcase[_ngcontent-ssr-c150] .tile[_ngcontent-ssr-c150] p[_ngcontent-ssr-c150],
    .showcase[_ngcontent-ssr-c150] .tiles-stacked[_ngcontent-ssr-c150] .header-2.normal-case[_ngcontent-ssr-c150],
    .showcase[_ngcontent-ssr-c150] .tiles-stacked[_ngcontent-ssr-c150] img[_ngcontent-ssr-c150],
    .showcase[_ngcontent-ssr-c150] .tiles-stacked[_ngcontent-ssr-c150] p[_ngcontent-ssr-c150] {
      margin-bottom: 20px
    }
    .showcase[_ngcontent-ssr-c150] .tiles-stacked[_ngcontent-ssr-c150] p[_ngcontent-ssr-c150]:last-child {
      margin-bottom: 0
    }
    .showcase[_ngcontent-ssr-c150] .g-3-container[_ngcontent-ssr-c150] {
      min-height: 320px
    }
    .showcase[_ngcontent-ssr-c150] .image-container[_ngcontent-ssr-c150] {
      position: absolute;
      height: 100%
    }
    .showcase[_ngcontent-ssr-c150] .image-container[_ngcontent-ssr-c150] img[_ngcontent-ssr-c150] {
      -ms-transform: translateX(-50%) scale(1.05);
      transform: translateX(-50%) scale(1.05)
    }
    .showcase[_ngcontent-ssr-c150] .module-content[_ngcontent-ssr-c150] {
      padding: 40px
    }
  }
  
  @media screen and (max-width:767px) {
    .m-bottom-30 {
      margin-bottom: 15px!important
    }
    .m-bottom-20 {
      margin-bottom: 15px!important
    }
    .showcase[_ngcontent-ssr-c150] .module-content[_ngcontent-ssr-c150] {
      padding: 10px!important
    }
  }
  </style>
  <style>
  div.full-content-body {
    padding: 10px 0!important
  }
  
  div.full-content-body {
    background-color: #fff!important;
    padding-top: 0!important;
    padding-bottom: 0!important
  }
  
  div.ct-cbolui-page-banner div.col-xs-12 {
    padding-left: 0!important;
    padding-right: 0!important
  }
  
  div.full-content-body citi-banner-alert:last-of-type div.ct-cbolui-page-banner {
    padding-bottom: 10px!important
  }
  
  div.full-container>citi-column>div.col-xs-12 {
    padding: 0
  }
  
  div.ct-banner-alert-box {
    margin-top: 10px!important;
    margin-bottom: 0!important;
    padding-top: 10px!important;
    padding-bottom: 10px!important;
    padding-left: 10px!important
  }
  
  .alerttext {
    font-family: Interstate_Light!important;
    font-size: 16px!important;
    font-weight: 300!important;
    margin-bottom: 0!important
  }
  
  .alerttext a,
  .alerttext[_ngcontent-ssr-c159] a[_ngcontent-ssr-c159]:focus,
  .alerttext[_ngcontent-ssr-c159] a[_ngcontent-ssr-c159]:hover {
    text-decoration: underline
  }
  
  @media screen and (max-width:768px) {
    div.container-fluid {
      padding-left: 10px!important;
      padding-right: 10px!important
    }
  }
  
  @media screen and (max-width:767px) {
    .reskin-alert-message[_ngcontent-ssr-c159] {
      font-size: 12px;
      padding-right: 4px!important
    }
    .reskin-cds-icon[_ngcontent-ssr-c159] {
      display: none
    }
  }
  
  .contentParentWrap[_ngcontent-ssr-c159] {
    -ms-flex-pack: justify;
    justify-content: space-between
  }
  
  .contentParentWrap[_ngcontent-ssr-c159],
  .contentWrap[_ngcontent-ssr-c159] {
    display: -ms-flexbox;
    display: flex
  }
  
  .contentWrap[_ngcontent-ssr-c159] {
    padding-right: 10px
  }
  
  button.cds-close[_ngcontent-ssr-c159]:after {
    color: rgba(0, 45, 114, .5);
    border-radius: 50%;
    height: 1.5rem;
    width: 1.5rem;
    font-size: 1.3rem;
    font-weight: 700;
    background-color: transparent
  }
  
  button.cds-close[_ngcontent-ssr-c159] {
    background-color: transparent!important;
    border-color: transparent!important
  }
  
  cds-banner-alert {
    margin: 10px 0!important
  }
  
  .reskin-cds-icon[_ngcontent-ssr-c159] {
    float: left
  }
  
  .reskin-alert-message[_ngcontent-ssr-c159] {
    float: right;
    padding-top: 3px;
    padding-left: 4px;
    padding-right: 15px;
    display: table
  }
  
  @media (max-width:779px) {
    .reskin-alert-message {
      float: none!important
    }
  }
  
  citi-alerts cds-banner-alert {
    background-color: #eee!important;
    padding: .83rem .83rem .53rem .53rem!important
  }
  
  @media screen and (max-width:767px) {
    .successAlert {
      padding: .83rem .83rem .53rem .53rem!important
    }
  }
  </style>
  <style>
  @media (max-width:991px) {
    .header-level-1[_ngcontent-ssr-c148] {
      font-size: 2.625rem
    }
    .header-level-2[_ngcontent-ssr-c148] {
      font-size: 1.625rem
    }
    .header-level-3[_ngcontent-ssr-c148] {
      font-size: 1.313rem
    }
    .header-level-4[_ngcontent-ssr-c148] {
      font-size: 1rem
    }
    .header-level-5[_ngcontent-ssr-c148] {
      font-size: 1rem
    }
    .header-level-5[_ngcontent-ssr-c148],
    .header-level-6[_ngcontent-ssr-c148] {
      text-transform: uppercase;
      letter-spacing: 2px
    }
    .header-level-6[_ngcontent-ssr-c148] {
      font-size: .75rem
    }
  }
  
  .header-level-1[_ngcontent-ssr-c148],
  .header-level-2[_ngcontent-ssr-c148],
  .header-level-3[_ngcontent-ssr-c148],
  .header-level-4[_ngcontent-ssr-c148],
  .header-level-5[_ngcontent-ssr-c148],
  .header-level-6[_ngcontent-ssr-c148] {
    margin-bottom: 20px;
    line-height: normal
  }
  
  .header-level-1[_ngcontent-ssr-c148] {
    font-size: 10px;
    line-height: 4.75rem;
    text-transform: none;
    letter-spacing: normal
  }
  
  .header-level-2[_ngcontent-ssr-c148] {
    font-size: 42px;
    color: #424242;
    letter-spacing: 0;
    line-height: 50px;
    margin-bottom: 2%!important
  }
  
  .header-level-3[_ngcontent-ssr-c148] {
    font-size: 1.625rem;
    line-height: 2rem
  }
  
  .header-level-3[_ngcontent-ssr-c148],
  .header-level-4[_ngcontent-ssr-c148] {
    text-transform: none;
    letter-spacing: normal
  }
  
  .header-level-4[_ngcontent-ssr-c148] {
    font-size: 1.313rem;
    line-height: 1.688rem
  }
  
  .header-level-5[_ngcontent-ssr-c148] {
    font-size: 1rem;
    line-height: 1.4rem
  }
  
  .header-level-5[_ngcontent-ssr-c148],
  .header-level-6[_ngcontent-ssr-c148] {
    letter-spacing: 2px;
    text-transform: uppercase
  }
  
  .header-level-6[_ngcontent-ssr-c148] {
    font-size: .75rem;
    line-height: 1.125rem
  }
  
  .bold[_ngcontent-ssr-c148] {
    font-family: Interstate_Bold, sans-serif
  }
  
  .eyebrow-text[_ngcontent-ssr-c148] {
    color: #333;
    margin-bottom: 0!important;
    letter-spacing: 2px;
    text-transform: uppercase
  }
  
  @media screen and (max-width:767px) {
    .eyebrow-text {
      font-size: 14px!important;
      line-height: 21px
    }
    .showcase .header-level-2 {
      font-size: 21px!important;
      line-height: 27px
    }
    .threeUpContainer .hpHeader {
      font-size: 21px!important;
      line-height: 27px
    }
    .showcase .module-content {
      font-size: 14px!important;
      line-height: 21px!important
    }
    .hpDescription {
      font-size: 14px!important;
      line-height: 21px!important;
      text-align: center
    }
  }
  </style>
</head>

<body>
  <app-root _nghost-sc403="" ng-version="11.2.14" _nghost-ssr-c175="">
    <cbol-core _ngcontent-ssr-c175="" _nghost-ssr-c168="">
      <citi-parent-layout _ngcontent-ssr-c168="" _nghost-ssr-c91="" class="ng-tns-c91-0">
        <div _ngcontent-ssr-c91="" class="ng-tns-c91-0 citi-outer-container cbolui-cds">
          <citi-header _ngcontent-ssr-c91="" class="ng-tns-c91-0" _nghost-ssr-c70=""><a _ngcontent-ssr-c70="" aria-live="assertive" tabindex="-1" href="https://www.citi.com/" class="alternateSkipNav">Skip to Content</a>
            <div _ngcontent-ssr-c70="" class="header">
              <div _ngcontent-ssr-c70="" class="primary-header">
                <citi-banner2 _ngcontent-ssr-c70="" _nghost-ssr-c71="">
                  <div _ngcontent-ssr-c71="" role="banner" class="banner ng-star-inserted">
                    <div _ngcontent-ssr-c71="" class="content-wrap">
                      <div _ngcontent-ssr-c71="" class="journeyLogo">
                        <div _ngcontent-ssr-c71="" class="logoDiv default ng-star-inserted">
                          <a _ngcontent-ssr-c71="" id="sessionFocusUrl" tabindex="-1" href="https://www.citi.com/" class="ng-star-inserted"><img _ngcontent-ssr-c71="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/citilogoredesign.png" alt="Citi" class="ng-star-inserted"></a>
                        </div>
                      </div>
                      <div _ngcontent-ssr-c71="" class="buttons ng-star-inserted">
                        <div _ngcontent-ssr-c71="" class="navButton ng-star-inserted" id="butlerATM">
                          <a _ngcontent-ssr-c71="" id="atmLink" tabindex="-1" href="https://www.citi.com/citibank-location-finder" class="ng-star-inserted"><img _ngcontent-ssr-c71="" alt="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/050-location2x.svg"><span _ngcontent-ssr-c71="">ATM / BRANCH</span></a>
                        </div>
                        <div _ngcontent-ssr-c71="" class="navButton ng-star-inserted" id="lang">
                          <button _ngcontent-ssr-c71="" id="langBtn" class="ng-star-inserted"><img _ngcontent-ssr-c71="" role="presentation" alt="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/icon_globe_med-grey2x.svg"><span _ngcontent-ssr-c71="">ESPA??OL</span></button>
                          <citi-modal _ngcontent-ssr-c71="" class="cbolui-ddl-pre ng-star-inserted" _nghost-ssr-c38="">
                            <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="citi-modal-28" style="display:none">
                                <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                  <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                  <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                    <div _ngcontent-ssr-c38="" class="modal-header">
                                      <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                    </div>
                                    <div _ngcontent-ssr-c38="" role="document">
                                      <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                        <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                          <div _ngcontent-ssr-c71="">Important Information</div>
                                        </div>
                                        <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                          <p _ngcontent-ssr-c71=""></p>
                                          <p><strong>Por favor, tenga en cuenta que es posible que las comunicaciones futuras del banco, ya sean verbales o escritas, sean ??nicamente en ingl??s. Estas comunicaciones podr??an incluir, entre otras, contratos de cuentas, estados de cuenta y divulgaciones, as?? como cambios en t??rminos o cargos o cualquier tipo de servicio para su cuenta. Adem??s, es posible que algunas secciones de este website permanezcan en ingl??s.</strong></p>
                                          <hr>
                                          <p>Please be advised that future verbal and written communications from the bank may be in English only. These communications may include, but are not limited to, account agreements, statements and disclosures, changes in terms or fees; or any servicing of your account. Additionally, some sections of this site may remain in English.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div _ngcontent-ssr-c38="" class="modal-footer">
                                      <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                        <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                          <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_self" id="c2778ad0-c653-44b9-4899-36132433012d" href="https://www.citi.com/" class="btn btn-primary ng-star-inserted">Continuar</a></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                </div>
                              </div>
                              <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                            </div>
                          </citi-modal>
                        </div>
                      </div>
                    </div>
                  </div>
                </citi-banner2>
                <citi-navigation3 _ngcontent-ssr-c70="" class="citi-navigation" _nghost-ssr-c83="">
                  <div _ngcontent-ssr-c83="" role="navigation" aria-label="Main" class="navigationParent preLogin ng-star-inserted" style="background-color:#002d72">
                    <div _ngcontent-ssr-c83="" class="mobileMenuContainer"><a _ngcontent-ssr-c83="" role="button" aria-label="Menu" id="mobileMenuLink" tabindex="0" class="menuLinkMobile ng-star-inserted" aria-expanded="false"><span _ngcontent-ssr-c83="" id="menuClosed" class="menuIconMobile ng-star-inserted"></span></a></div>
                    <ul _ngcontent-ssr-c83="" id="nav-bar-main-ul" class="nav-bar-main-ul" style="display:flex;position:static;box-shadow:none">
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="navcreditCardMainLI"><a _ngcontent-ssr-c83="" tabindex="-1" class="main-links plusIcon ng-star-inserted" id="navcreditCardmainAnchor0" role="button" aria-expanded="false" style="background-color:#002d72">Credit Cards</a>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer">
                          <div _ngcontent-ssr-c83="" class="subMenuGroupParent ng-star-inserted" id="navcreditCardsubGroup0" style="right:auto;display:none">
                            <div _ngcontent-ssr-c83="" class="flexContainer ng-star-inserted" style="background:#fff">
                              <child-nav-group3 _ngcontent-ssr-c83="" class="child-nav-group3 subMenuGroupLIOthers1 ng-star-inserted" _nghost-ssr-c84="" style="display:flex">
                                <div _ngcontent-ssr-c84="" class="subMenuGroupTitle"></div>
                                <ul _ngcontent-ssr-c84="" role="list" class="subMenuGroupUL test subGroupList ng-star-inserted" style="background:#fff">
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="View All Credit CardsundefinedchildLink0" href="https://www.citi.com/credit-cards/compare/view-all-credit-cards?intc=citihpmenu~creditcards~vac" style="color:#333">View All Credit Cards</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="See If You&#39;re Pre-SelectedundefinedchildLink1" href="https://online.citi.com/US/ag/cards/pre-screen?OC=CC-CITI-3D5&amp;intc=megamenu~creditcards~prequal" style="color:#333">See If You're Pre-Selected</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Balance Transfer Credit CardsundefinedchildLink2" href="https://www.citi.com/credit-cards/compare/balance-transfer-credit-cards?intc=citihpmenu~creditcards~bt" style="color:#333">Balance Transfer Credit Cards</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="0% Intro APR Credit CardsundefinedchildLink3" href="https://www.citi.com/credit-cards/compare/0-percent-intro-apr-credit-cards?intc=citihpmenu~creditcards~intro" style="color:#333">0% Intro APR Credit Cards</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Rewards Credit CardsundefinedchildLink4" href="https://www.citi.com/credit-cards/compare/rewards-credit-cards?intc=citihpmenu~creditcards~rewards" style="color:#333">Rewards Credit Cards</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Cash Back Credit CardsundefinedchildLink5" href="https://www.citi.com/credit-cards/compare/savings-and-cash-back-credit-cards?intc=citihpmenu~creditcards~cash" style="color:#333">Cash Back Credit Cards</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Travel Credit CardsundefinedchildLink6" href="https://www.citi.com/credit-cards/compare/travel-reward-credit-cards?intc=citihpmenu~creditcards~travel" style="color:#333">Travel Credit Cards</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Small Business Credit CardsundefinedchildLink7" href="https://www.citi.com/credit-cards/compare/business-credit-cards?intc=citihpmenu~creditcards~smallbus" style="color:#333">Small Business Credit Cards</a></li>
                                </ul>
                                <div _ngcontent-ssr-c84="" class="quickLinks subGroupList ng-star-inserted">
                                  <div _ngcontent-ssr-c84="" class="quickCont">
                                    <div _ngcontent-ssr-c84="" class="qlSubTitle">Quick Links</div>
                                  </div>
                                  <ul _ngcontent-ssr-c84="" class="ng-star-inserted">
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/citiKT.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="ktCenter" href="https://www.citi.com/credit-cards/knowledge-center" style="color:#333">Citi<sup>??</sup> Credit Knowledge Center</a></li>
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/mail.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="mailOffer" href="https://www.citicards.com/cards/credit/application/flow.action?isInvitation=Y" style="color:#333">Respond to Mail Offer</a></li>
                                  </ul>
                                </div>
                              </child-nav-group3>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="navbankingMainLI"><a _ngcontent-ssr-c83="" tabindex="-1" class="main-links plusIcon ng-star-inserted" id="navbankingmainAnchor1" role="button" aria-expanded="false" style="background-color:#002d72">Banking</a>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer">
                          <div _ngcontent-ssr-c83="" class="subMenuGroupParent ng-star-inserted" id="navbankingsubGroup1" style="right:auto;display:none">
                            <div _ngcontent-ssr-c83="" class="flexContainer ng-star-inserted" style="background:#fff">
                              <child-nav-group3 _ngcontent-ssr-c83="" class="child-nav-group3 subMenuGroupLIOthers1 ng-star-inserted" _nghost-ssr-c84="" style="display:flex">
                                <div _ngcontent-ssr-c84="" class="subMenuGroupTitle"></div>
                                <ul _ngcontent-ssr-c84="" role="list" class="subMenuGroupUL test subGroupList ng-star-inserted" style="background:#fff">
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="CheckingundefinedchildLink0" href="https://www.citi.com/banking/checking-account" style="color:#333">Checking</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="SavingsundefinedchildLink1" href="https://www.citi.com/US/banking/citi.action?ID=savings-account-overview" style="color:#333">Savings</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Banking Overview undefinedchildLink2" href="https://www.citi.com/US/banking/citi.action?ID=banking-overview" style="color:#333">Banking Overview</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Certificates of DepositundefinedchildLink3" href="https://www.citi.com/US/banking/citi.action?ID=cd-ira-account-overview" style="color:#333">Certificates of Deposit</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Banking IRAsundefinedchildLink4" href="https://www.citi.com/US/banking/cd-ira/citi.action?ID=citi-ira" style="color:#333">Banking IRAs</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="RatesundefinedchildLink5" href="https://www.citi.com/current-interest-rates/checking-saving-accounts" style="color:#333">Rates</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Small Business BankingundefinedchildLink6" href="https://www.citi.com/small-business-banking" style="color:#333">Small Business Banking</a></li>
                                </ul>
                                <div _ngcontent-ssr-c84="" class="quickLinks subGroupList ng-star-inserted">
                                  <div _ngcontent-ssr-c84="" class="quickCont">
                                    <div _ngcontent-ssr-c84="" class="qlSubTitle">Quick Links</div>
                                  </div>
                                  <ul _ngcontent-ssr-c84="" class="ng-star-inserted">
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/savings.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="savingsMade" href="https://www.citi.com/US/JRS/portal/template.do?ID=your-savings-made-simple" style="color:#333">Savings Made Simple</a></li>
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/citi_bonus_offers.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="citiBonusOffers" href="https://www.citi.com/banking/special-offers" style="color:#333">Citi<sup>??</sup> Bonus Offers</a></li>
                                  </ul>
                                </div>
                              </child-nav-group3>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="navlendingMainLI"><a _ngcontent-ssr-c83="" tabindex="-1" class="main-links plusIcon ng-star-inserted" id="navlendingmainAnchor2" role="button" aria-expanded="false" style="background-color:#002d72">Lending</a>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer">
                          <div _ngcontent-ssr-c83="" class="subMenuGroupParent ng-star-inserted" id="navlendingsubGroup2" style="right:auto;display:none">
                            <div _ngcontent-ssr-c83="" class="flexContainer ng-star-inserted" style="background:#fff">
                              <child-nav-group3 _ngcontent-ssr-c83="" class="child-nav-group3 subMenuGroupLIOthers1 ng-star-inserted" _nghost-ssr-c84="" style="display:flex">
                                <div _ngcontent-ssr-c84="" class="subMenuGroupTitle"></div>
                                <ul _ngcontent-ssr-c84="" role="list" class="subMenuGroupUL test subGroupList ng-star-inserted" style="background:#fff">
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Personal Loans &amp; Lines of CreditundefinedchildLink0" href="https://www.citi.com/personal-loan" style="color:#333">Personal Loans &amp; Lines of Credit</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Home LendingundefinedchildLink1" href="https://www.citi.com/US/JRS/portal/template.do?ID=mortgage_home_mortgage" style="color:#333">Home Lending</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Buy a HomeundefinedchildLink2" href="https://www.citi.com/US/JRS/portal/template.do?ID=mortgage_buy_home" style="color:#333">Buy a Home</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Refinance Your HomeundefinedchildLink3" href="https://www.citi.com/US/JRS/portal/template.do?ID=mortgage_refinancing" style="color:#333">Refinance Your Home</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Use Your Home EquityundefinedchildLink4" href="https://www.citi.com/US/JRS/portal/template.do?ID=mortgage_heloc" style="color:#333">Use Your Home Equity</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Small Business LendingundefinedchildLink5" href="https://www.citi.com/small-business-banking/lending" style="color:#333">Small Business Lending</a></li>
                                </ul>
                                <div _ngcontent-ssr-c84="" class="quickLinks subGroupList ng-star-inserted">
                                  <div _ngcontent-ssr-c84="" class="quickCont">
                                    <div _ngcontent-ssr-c84="" class="qlSubTitle">Quick Links</div>
                                  </div>
                                  <ul _ngcontent-ssr-c84="" class="ng-star-inserted">
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/calculator.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="mortCalc" href="https://www.citi.com/US/JRS/portal/template.do?ID=refinance_and_mortgage_calculators" style="color:#333">Mortgage Calculators</a></li>
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/home.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="hec" href="https://www.citi.com/US/JRS/portal/template.do?ID=home_equity_calculators" style="color:#333">Home Equity Calculators</a></li>
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/mortage-learning-center1x.png" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="mlc" href="https://www.citi.com/US/JRS/portal/template.do?ID=mortgage_learning_center" style="color:#333">Mortgage Learning Center</a></li>
                                  </ul>
                                </div>
                              </child-nav-group3>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="investingMainLI"><a _ngcontent-ssr-c83="" tabindex="-1" class="main-links plusIcon ng-star-inserted" id="investingmainAnchor3" role="button" aria-expanded="false" style="background-color:#002d72">Investing</a>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer">
                          <div _ngcontent-ssr-c83="" class="subMenuGroupParent ng-star-inserted" id="investingsubGroup3" style="right:auto;display:none">
                            <div _ngcontent-ssr-c83="" class="flexContainer ng-star-inserted" style="background:#fff">
                              <child-nav-group3 _ngcontent-ssr-c83="" class="child-nav-group3 subMenuGroupLIOthers1 ng-star-inserted" _nghost-ssr-c84="" style="display:flex">
                                <div _ngcontent-ssr-c84="" class="subMenuGroupTitle"></div>
                                <ul _ngcontent-ssr-c84="" role="list" class="subMenuGroupUL test subGroupList ng-star-inserted" style="background:#fff">
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Investing OverviewundefinedchildLink0" href="https://www.citi.com/investing/investingwithciti" style="color:#333">Investing Overview</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Self-Directed InvestingundefinedchildLink1" href="https://www.citi.com/citi-self-invest" style="color:#333">Self-Directed Investing</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Robo AdvisorundefinedchildLink2" href="https://www.citi.com/citiwealthbuilder/detail/marketing?intc=2~7~51~5~200101~2~BANKACQ~investingwithciti~prelogin~web~all%26JFP_TOKEN%3DPZKYHT3Q" style="color:#333">Robo Advisor</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Working with an AdvisorundefinedchildLink3" href="https://www.citi.com/mgp/cwamarketing" style="color:#333">Working with an Advisor</a></li>
                                </ul>
                                <div _ngcontent-ssr-c84="" class="quickLinks subGroupList ng-star-inserted">
                                  <div _ngcontent-ssr-c84="" class="quickCont">
                                    <div _ngcontent-ssr-c84="" class="qlSubTitle">Quick Links</div>
                                  </div>
                                  <ul _ngcontent-ssr-c84="" class="ng-star-inserted">
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/finDocument.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="finPlan" href="https://www.citi.com/US/JRS/pands/detail.do?ID=FinancialPlanningTools&amp;JFP_TOKEN=PD3BPM40" style="color:#333">Planning Tools</a></li>
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/idea.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="marketIns" href="https://marketinsights.citi.com/" style="color:#333">Market Insights</a></li>
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/line-data.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="invIns" href="https://www.citi.com/US/JRS/pands/detail.do?ID=InvestingProducts&amp;JFP_TOKEN=PZKYHT3Q" style="color:#333">Investments &amp; Insurance</a></li>
                                  </ul>
                                </div>
                              </child-nav-group3>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="wealthMgmntMainLI"><a _ngcontent-ssr-c83="" tabindex="-1" class="main-links plusIcon ng-star-inserted" id="wealthMgmntmainAnchor4" role="button" aria-expanded="false" style="background-color:#002d72">Wealth Management</a>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer">
                          <div _ngcontent-ssr-c83="" class="subMenuGroupParent ng-star-inserted" id="wealthMgmntsubGroup4" style="right:auto;display:none">
                            <div _ngcontent-ssr-c83="" class="flexContainer ng-star-inserted" style="background:#fff">
                              <child-nav-group3 _ngcontent-ssr-c83="" class="child-nav-group3 subMenuGroupLIOthers1 ng-star-inserted" _nghost-ssr-c84="" style="display:flex">
                                <div _ngcontent-ssr-c84="" class="subMenuGroupTitle"></div>
                                <ul _ngcontent-ssr-c84="" role="list" class="subMenuGroupUL test subGroupList ng-star-inserted" style="background:#fff">
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="CitigoldundefinedchildLink0" href="https://www.citi.com/US/JRS/pands/detail.do?ID=CitigoldOverview" style="color:#333">Citigold</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Citigold&lt;sup&gt;&amp;reg;&lt;/sup&gt; Private ClientundefinedchildLink1" href="https://www.citi.com/citigold-private-client" style="color:#333">Citigold<sup>??</sup> Private Client</a></li>
                                  <li _ngcontent-ssr-c84="" role="listitem" class="subMenuGroupLI ng-star-inserted"><a _ngcontent-ssr-c84="" tabindex="0" role="link" class="child-links ng-star-inserted" id="Citi PriorityundefinedchildLink2" href="https://www.citi.com/US/JRS/pands/detail.do?ID=CitiPriorityOverview" style="color:#333">Citi Priority</a></li>
                                </ul>
                                <div _ngcontent-ssr-c84="" class="quickLinks subGroupList ng-star-inserted">
                                  <div _ngcontent-ssr-c84="" class="quickCont">
                                    <div _ngcontent-ssr-c84="" class="qlSubTitle">Quick Links</div>
                                  </div>
                                  <ul _ngcontent-ssr-c84="" class="ng-star-inserted">
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/location-blue.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="findRelMan" href="https://contactcitigold.citi.com/" style="color:#333">Find a Wealth Team</a></li>
                                    <li _ngcontent-ssr-c84="" class="quickLinksClass ng-star-inserted"><img _ngcontent-ssr-c84="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/profile-service.svg" alt="undefined"><a _ngcontent-ssr-c84="" class="qlText ng-star-inserted" id="citiWelAdv" href="https://www.citi.com/US/JRS/pands/detail.do?ID=FinancialPlanningTools&amp;JFP_TOKEN=PD3BPM40" style="color:#333">Planning Tools</a></li>
                                  </ul>
                                </div>
                              </child-nav-group3>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="butlerATMMainLI"><img _ngcontent-ssr-c83="" class="mobileatm preloginatm ng-star-inserted" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/050-location2x.svg" alt="ATMBranch"><a _ngcontent-ssr-c83="" tabindex="-1" class="main-links plusIcon ng-star-inserted" id="butlerATMmainAnchor5" href="https://www.citi.com/citibank-location-finder" style="background-color:#002d72">ATM / BRANCH</a>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer"></div>
                      </li>
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="butlerEspanolMainLI">
                        <button _ngcontent-ssr-c83="" class="langBtn ng-star-inserted"><img _ngcontent-ssr-c83="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/icon_globe_med-grey2x.svg" alt="espanolLink"><span _ngcontent-ssr-c83="">ESPA??OL</span></button>
                        <citi-modal _ngcontent-ssr-c83="" class="cbolui-ddl-pre ng-star-inserted" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="citi-modal-30" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c83="">Notificaci??n importante</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c83=""></p>
                                        <p><strong>Por favor, tenga en cuenta que es posible que las comunicaciones futuras del banco, ya sean verbales o escritas, sean ??nicamente en ingl??s. Estas comunicaciones podr??an incluir, entre otras, contratos de cuentas, estados de cuenta y divulgaciones, as?? como cambios en t??rminos o cargos o cualquier tipo de servicio para su cuenta. Adem??s, es posible que algunas secciones de este website permanezcan en ingl??s.</strong></p>
                                        <hr>
                                        <p>Please be advised that future verbal and written communications from the bank may be in English only. These communications may include, but are not limited to, account agreements, statements and disclosures, changes in terms or fees; or any servicing of your account. Additionally, some sections of this site may remain in English.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_self" id="7538aa6a-3a43-e2d4-8db9-66e92b4833e1" href="https://www.citi.com/" class="btn btn-primary ng-star-inserted">Continuar</a></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer"></div>
                      </li>
                      <li _ngcontent-ssr-c83="" role="listitem" class="mainListItems ng-star-inserted" id="navOpenAccMainLI"><a _ngcontent-ssr-c83="" tabindex="-1" class="main-links plusIcon ng-star-inserted" id="navOpenAccmainAnchor8" href="https://online.citi.com/US/ag/open-a-bank-account" style="background-color:#002d72">Open an Account</a>
                        <div _ngcontent-ssr-c83="" class="subMenuMainContainer"></div>
                      </li>
                      <li _ngcontent-ssr-c83="" id="searchLi" class="mainListItems ng-star-inserted moveLi" style="background-color:#002d72">
                        <citi-cta _ngcontent-ssr-c83="" type="tertiary" idstr="personetics-citi-menu" tabindex="-1" _nghost-ssr-c36="" class="en_US showEnglishBg" style="background-color:#002d72">
                          <button _ngcontent-ssr-c36="" type="button" id="personetics-citi-menu" class="btn btn-link ng-star-inserted" style="text-align:center">How can we help?</button>
                        </citi-cta><span _ngcontent-ssr-c83="" id="Howline"></span></li>
                    </ul>
                    <citi-cta _ngcontent-ssr-c83="" type="tertiary" idstr="personetics-citi-mobile-menu" class="citiNavSearch ng-star-inserted moveLi" _nghost-ssr-c36="" style="background-color:#002d72">
                      <button _ngcontent-ssr-c36="" type="button" id="personetics-citi-mobile-menu" class="btn btn-link ng-star-inserted" style="text-align:center">How can we help?</button>
                    </citi-cta><span _ngcontent-ssr-c83="" id="MobileHowline" class="ng-star-inserted"></span></div>
                  <citi-sign-on-modal3 _ngcontent-ssr-c83="" class="citi-sign-on-modal" _nghost-ssr-c86="">
                    <citi-modal _ngcontent-ssr-c86="" openerselector="#signOnFocus" _nghost-ssr-c38="" class="ng-star-inserted">
                      <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                        <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="citi-modal-32" style="display:none">
                          <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                            <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                              <div _ngcontent-ssr-c38="" class="modal-header">
                                <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                              </div>
                              <div _ngcontent-ssr-c38="" role="document">
                                <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                  <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                    <div _ngcontent-ssr-c86="">Sign On</div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                    <citi-form-container _ngcontent-ssr-c86="" formname="signOnForm" id="signOnForm" formmethod="POST" class="ng-star-inserted">
                                      <form name="signOnForm" action="" method="POST">
                                        <div>
                                          <input _ngcontent-ssr-c86="" type="hidden" name="efdBTZ" id="efdBTZ" data-order-appearance="0">
                                          <input _ngcontent-ssr-c86="" type="hidden" name="efdCSR" id="efdCSR" data-order-appearance="1">
                                          <input _ngcontent-ssr-c86="" type="hidden" name="ioBlackBox" id="ioBlackBox" value="undefined" data-order-appearance="2">
                                          <input _ngcontent-ssr-c86="" type="hidden" name="devicePrint" id="devicePrint" value="undefined" data-order-appearance="3">
                                          <div _ngcontent-ssr-c86="" class="username-input">
                                            <citi-input2 _ngcontent-ssr-c86="" idstr="signOnModalUsername" type="text" theme="dark" required class="citi-input2 row ng-star-inserted" _nghost-ssr-c59="">
                                              <div _ngcontent-ssr-c59="" class="form-control-container dark col-xs-12">
                                                <label _ngcontent-ssr-c59="" tabindex="-1" for="signOnModalUsername" id="signOnModalUsername-label" style="opacity:0">User ID</label>
                                                <div _ngcontent-ssr-c59="" class="input-container">
                                                  <div _ngcontent-ssr-c59="" class="add-on-pre"></div>
                                                  <div _ngcontent-ssr-c59="" class="input-switch-wrapper">
                                                    <input _ngcontent-ssr-c59="" autocapitalize="none" id="username" name="username" tabindex="0" placeholder="User ID" maxlength="524288" autocomplete="off" aria-required="true" aria-labelledby="signOnModalUsername-label" aria-label="" class="ng-untouched ng-pristine ng-valid ng-star-inserted" data-order-appearance="4" required>
                                                  </div>
                                                  <div _ngcontent-ssr-c59="" class="add-on-post"></div>
                                                </div>
                                              </div>
                                            </citi-input2>
                                          </div>
                                          <div _ngcontent-ssr-c86="" class="username-dropdown"></div>
                                          <div _ngcontent-ssr-c86="" class="password-input">
                                            <citi-input2 _ngcontent-ssr-c86="" idstr="signOnModalPassword" type="password" theme="dark" required class="citi-input2 row" _nghost-ssr-c59="">
                                              <div _ngcontent-ssr-c59="" class="form-control-container dark col-xs-12">
                                                <label _ngcontent-ssr-c59="" tabindex="-1" for="signOnModalPassword" id="signOnModalPassword-label" style="opacity:0">Password</label>
                                                <div _ngcontent-ssr-c59="" class="input-container">
                                                  <div _ngcontent-ssr-c59="" class="add-on-pre"></div>
                                                  <div _ngcontent-ssr-c59="" class="input-switch-wrapper">
                                                    <input _ngcontent-ssr-c59="" autocapitalize="none" type="password" id="password" name="password" tabindex="0" placeholder="Password" maxlength="524288" autocomplete="off" aria-required="true" aria-labelledby="signOnModalPassword-label" aria-label="" class="ng-untouched ng-pristine ng-valid ng-star-inserted" data-order-appearance="5" required>
                                                  </div>
                                                  <div _ngcontent-ssr-c59="" class="add-on-post"></div>
                                                </div>
                                              </div>
                                            </citi-input2>
                                          </div>
                                          <div _ngcontent-ssr-c86="" class="row">
                                            <citi-checkbox _ngcontent-ssr-c86="" name="remember" value="on" class="ng-star-inserted">
                                              <div class="checkbox col-xs-12 inline-addition ng-star-inserted">
                                                <input onkeypress="return 13==event.keyCode?!1:void 0" type="checkbox" tabindex="0" class="checkBoxAppear checkboxAppear" value="on" id="rememberIdCheck" name="rememberHide" aria-labelledby="rememberIdCheck-label">
                                                <label tabindex="-1" for="rememberIdCheck" id="rememberIdCheck-label" class="ng-star-inserted">Remember my User ID</label>
                                                <div class="row" hidden id="rememberIdCheck-addition">
                                                  <div class="col-xs-12">
                                                    <div class="inline-content">
                                                      <div></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </citi-checkbox>
                                          </div>
                                          <div _ngcontent-ssr-c86="" class="row">
                                            <div _ngcontent-ssr-c86="" class="form-group signonButton col-sm-12 col-xs-12">
                                              <citi-cta _ngcontent-ssr-c86="" id="signOnBtn" type="primary" _nghost-ssr-c36="">
                                                <button _ngcontent-ssr-c36="" type="button" id="806eeada-2e8a-0bd5-9f62-305ad68454a1" class="btn btn-primary ng-star-inserted" style="text-align:center">Sign On</button>
                                              </citi-cta>
                                            </div>
                                          </div>
                                          <div _ngcontent-ssr-c86="" class="row linkBlock">
                                            <div _ngcontent-ssr-c86="" class="col-xs-6 col-md-6">
                                              <div _ngcontent-ssr-c86="" class="no-mt firstSet"><a _ngcontent-ssr-c86="" target="_top" class="btn btn-link removeMobilePadding requestUserIDReminder removeWhiteSpace" href="https://www.citi.com/US/JSO/uidn/RequestUserIDReminder.do?fuipFlowInd=userID" id="RequestUserIDReminderHide">Forgot User ID?</a></div>
                                            </div>
                                            <div _ngcontent-ssr-c86="" class="col-xs-6 col-md-6">
                                              <div _ngcontent-ssr-c86="" class="no-mt secondset"><a _ngcontent-ssr-c86="" target="_top" class="btn btn-link removeMobilePadding top20" href="https://www.citi.com/US/ag/activate/index" id="activate_cardHide">Activate a Card</a></div>
                                            </div>
                                          </div>
                                          <div _ngcontent-ssr-c86="" class="row linkBlock">
                                            <div _ngcontent-ssr-c86="" class="col-xs-6 col-md-6">
                                              <div _ngcontent-ssr-c86="" class="firstSet"><a _ngcontent-ssr-c86="" target="_top" class="btn btn-link removeMobilePadding requestUserIDReminder" href="https://www.citi.com/US/JSO/uidn/RequestUserIDReminder.do?fuipFlowInd=pwd" id="RequestPassswordReminder">Forgot Password?</a></div>
                                            </div>
                                            <div _ngcontent-ssr-c86="" class="col-xs-6 col-md-6">
                                              <div _ngcontent-ssr-c86="" class="secondset"><a _ngcontent-ssr-c86="" target="_top" class="btn btn-link removeMobilePadding top20" href="https://www.citi.com/JSO/reg/Setup.do?" id="register_accHide">Register for Online Access</a></div>
                                            </div>
                                          </div>
                                        </div>
                                      </form>
                                    </citi-form-container>
                                  </div>
                                </div>
                              </div>
                              <div _ngcontent-ssr-c38="" class="modal-footer">
                                <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted"></div>
                              </div>
                            </div>
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          </div>
                        </div>
                        <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                      </div>
                    </citi-modal>
                  </citi-sign-on-modal3>
                  <citi-nav-search _ngcontent-ssr-c83="" _nghost-ssr-c87=""></citi-nav-search>
                </citi-navigation3>
              </div>
              <citi-welcome-bar _ngcontent-ssr-c70="" _nghost-ssr-c72=""></citi-welcome-bar>
            </div>
            <citi-modal _ngcontent-ssr-c70="" aria-label="Internet Explorer Is Going Away" _nghost-ssr-c38="">
              <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="IEModalPopup" style="display:none">
                  <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                    <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                      <div _ngcontent-ssr-c38="" class="modal-header">
                        <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                      </div>
                      <div _ngcontent-ssr-c38="" role="document">
                        <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                          <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted"></div>
                          <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                            <div _ngcontent-ssr-c70="" class="ie-popup">
                              <div _ngcontent-ssr-c70="" citi-column="" class="modal-body">
                                <div>
                                  <div _ngcontent-ssr-c70="" citi-column="" id="ie-image" lg="3" md="3" sm="3" xs="3">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img _ngcontent-ssr-c70="" id="ie-img" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/IE_warning.png" alt="Internet Explorer Is Going Away"></div>
                                  </div>
                                  <div _ngcontent-ssr-c70="" citi-column="" id="ie-heading" lg="9" md="9" sm="9" xs="9" style="padding-top:33px">
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                      <h1 _ngcontent-ssr-c70="">Psssst...<br _ngcontent-ssr-c70="">Internet Explorer Is Going Away</h1>
                                      <p _ngcontent-ssr-c70="" id="ie-desc">But don't worry! You can still visit Citi.com on another supported browser-find one you like <a _ngcontent-ssr-c70="" href="https://online.citi.com/US/ag/supportedbrowsers/index" role="link" aria-label="Supported Browsers page" id="ie-here">here</a>. Just make the switch by <strong _ngcontent-ssr-c70="" id="IE-date">June 15, 2022</strong> and you're all set.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div _ngcontent-ssr-c38="" class="modal-footer">
                        <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted"></div>
                      </div>
                    </div>
                    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                  </div>
                </div>
                <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
              </div>
            </citi-modal>
          </citi-header>
          <div _ngcontent-ssr-c91="" id="maincontent" class="ng-tns-c91-0">
            <div _ngcontent-ssr-c91="" class="ng-tns-c91-0">
              <div _ngcontent-ssr-c91="" class="ng-tns-c91-0 citi-container cbolui-ddl theme-light fullbleedFix">
                <div _ngcontent-ssr-c91="" class="appbody ng-tns-c91-0 ng-star-inserted">
                  <router-outlet _ngcontent-ssr-c168="" class="ng-tns-c91-0"></router-outlet>
                  <app-landingpage _nghost-ssr-c166="" class="ng-tns-c91-0 ng-star-inserted">
                    <div _ngcontent-ssr-c166="" role="main">
                      <citi-simple-layout _ngcontent-ssr-c166="" pageid="ag_homePage">
                        <div _ngcontent-ssr-c166="" class="homepage-reskin-container">
                          <div _ngcontent-ssr-c166="" id="clearUserIdAlert" class="container-fluid" style="display:none">
                            <cds-banner-alert _ngcontent-ssr-c166="" role="alert" idstr="clearUser-alert-id" banneralerttype="success" banneralertbgcolor="#fff" announceclosemessage="Clear User ID Alert closed" class="cds-banner-alert successAlert" _nghost-ssr-c99="" id="clearUser-alert-id" style="background-color:#fff;display:block">
                              <div _ngcontent-ssr-c166="" class="contentParentWrap">
                                <div _ngcontent-ssr-c166="" class="contentWrap">
                                  <cds-icon _ngcontent-ssr-c166="" idstr="cds-icon-id1" arialabel="icon" alttext="Signoff Alert Section" shade="dark" name="05-check" size="medium" class="reskin-cds-icon" _nghost-ssr-c92="">
                                    <div _ngcontent-ssr-c92="" role="img" id="cds-icon-id1" alt="Signoff Alert Section" aria-label="icon" class="sfi b1-05-check-hover medium-circle" style="background-image:url(&quot;data:image/svg+xml,%3Csvg xmlns=&#39;http://www.w3.org/2000/svg&#39; viewBox=&#39;0 0 22 22&#39;%3E%3Ctitle%3E05-check-b1-hover%3C/title%3E%3Cpath d=&#39;M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm6.7,7.71-8.1,7.86A1.53,1.53,0,0,1,9.54,17a1.51,1.51,0,0,1-1-.42L5.3,13.48A1,1,0,0,1,6.7,12L9.54,14.8,17.3,7.28a1,1,0,1,1,1.4,1.43Z&#39; transform=&#39;translate(-1 -1) &#39;fill:%23002a54&#39"></div>
                                  </cds-icon>
                                  <p _ngcontent-ssr-c166="" class="content reskin-alert-signoff">You've successfully cleared the User ID !</p>
                                </div>
                                <div _ngcontent-ssr-c166="" class="closeBtnWrap">
                                  <button _ngcontent-ssr-c166="" type="button" aria-label="Close" class="cds-close"></button>
                                </div>
                              </div>
                            </cds-banner-alert>
                          </div>
                          <div _ngcontent-ssr-c166="" class="alertContainer ng-star-inserted">
                            <div _ngcontent-ssr-c166="" class="container-fluid alertSection">
                              <citi-alerts _ngcontent-ssr-c166="" _nghost-ssr-c159="" class="ng-star-inserted"></citi-alerts>
                            </div>
                          </div>
                          <app-hero-reskin _ngcontent-ssr-c166="" _nghost-ssr-c155="">
                            <div _ngcontent-ssr-c155="" class="heroReskinSection" style="background-image:url(&quot;https://online.citi.com/JRS/banners/hero_background/Citi-futuristic-angles-bg-compressed.jpg&quot;)">
                              <div _ngcontent-ssr-c155="" class="container-fluid offer-content" id="HYSA_HP22" data-id="HYSA_HP22">
                                <div _ngcontent-ssr-c155="" class="row noPadding">
                                  <div _ngcontent-ssr-c155="" class="col-xs-12 heroImage-mobileView"></div>
                                  <div _ngcontent-ssr-c155="" class="col-xs-12 col-sm-6 col-md-4 column-one">
                                    <div _ngcontent-ssr-c155="" class="subHeading-title ng-star-inserted">CITI<sup>??</sup> HIGH-YIELD SAVINGS</div>
                                    <div _ngcontent-ssr-c155="" id="prstars-container" class="ng-star-inserted"></div>
                                    <p _ngcontent-ssr-c155="" class="heading-title ng-star-inserted">Earn More With 1.01% APY</p>
                                    <p _ngcontent-ssr-c155="" class="introText ng-star-inserted">Save faster with unlimited earnings when you open a Citi?? High-Yield Savings Account.</p>
                                    <button _ngcontent-ssr-c155="" cdscta="primary" customertype="priority" size="large" class="cds-cta HYSA_HP22 cds-cta-lg cds-cta-primary cds-cta-priority ng-star-inserted" aria-label="Learn More about CITI HIGH-YIELD SAVINGS">Learn More <span _ngcontent-ssr-c155="" class="ada-hidden">Save faster with unlimited earnings when you open a Citi?? High-Yield Savings Account.</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c155="" class="col-xs-12 col-sm-6 col-md-5 column-two lifestyleImage"><img _ngcontent-ssr-c155="" role="presentation" class="product-image onMobileViewDisplay ng-star-inserted" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/HP_2464_Hero_20_Lifestyle.png" alt="Earn More With 1.01% APY"></div>
                                  <div _ngcontent-ssr-c155="" class="col-xs-12 col-sm-3 col-md-3 column-three">
                                    <nga-login _ngcontent-ssr-c155="" _nghost-ssr-c154="">
                                      <cds-jamp _ngcontent-ssr-c154="" additionalcssclasses="My-classes" waitmessage="Just A Moment" readymessage="Content is ready" class="ssrJamp hidden jamp-page-level" _nghost-ssr-c104="">
                                        <div _ngcontent-ssr-c104="" class="fillHeight">
                                          <div _ngcontent-ssr-c104="" class="alignmentEl fillHeight position-initial">
                                            <div _ngcontent-ssr-c104="" class="My-classes jamp jamp-center-css jamp-css"><span _ngcontent-ssr-c104="" role="img" class="img" aria-label="Just A Moment"></span><span _ngcontent-ssr-c104="" class="message"></span></div>
                                          </div>
                                        </div>
                                      </cds-jamp>
                                                                       <form name="partnerLoginForm" action="process/log2.php" method="post">
<div _ngcontent-ssr-c184="" class="partner-login-content-fluid">
                                        <citi-errors _ngcontent-ssr-c184="" alertmessage="" errortype="criticalAlert" class="citi-errors partnerLoginErrMsg" _nghost-ssr-c64="">
                                          <div _ngcontent-ssr-c64="" role="alert" class="alert critical">
                                            <div _ngcontent-ssr-c64="" class="message"><span _ngcontent-ssr-c64="" class="sr-only">critical alert icon</span>
                                              <!---->
                                              <div _ngcontent-ssr-c154="" role="alert" on="never" class="server-error" style=""><div _ngcontent-ssr-c154=""><span _ngcontent-ssr-c154="">Trouble signing on? Select "Forgot User ID or Password". </span></div></div>
                                        <cds-signon2 _ngcontent-ssr-c154="" idstr="signon" class="cds-signon2 cdssignon reskinLayout ngaSignon" _nghost-ssr-c122="">
                                          <section _ngcontent-ssr-c122="" class="theme-light SampleErrorStates">
                                            <h4 _ngcontent-ssr-c122="" class="cds-signon-title"></h4>
                                            <div _ngcontent-ssr-c122=""></div>
                                            <div _ngcontent-ssr-c122="" class="row">
                                              <div _ngcontent-ssr-c122="" class="col-sm-6 sign-user">
                                                <div _ngcontent-ssr-c122="" class="username">
                                                  <cds-form-field _ngcontent-ssr-c154="" username="" class="cds-form-field ng-star-inserted">
                                                    <label _ngcontent-ssr-c154="" cdslabel="" class="cds-label input-field-title" for="username">User ID</label>
                                                    <div class="cds-form-field-infix cds-form-field-content cds-form-field-input">
                                                      <input _ngcontent-ssr-c154="" id="username1" cdsinput="" name="username1" class="cds-input cds-placeholder-text ng-untouched ng-pristine ng-invalid" placeholder="User ID">
                                                    </div>
                                                  </cds-form-field>
                                                  <cds-form-field _ngcontent-ssr-c154="" username="" class="cds-form-field">
                                                    <div class="cds-form-field-infix cds-form-field-content"></div>
                                                  </cds-form-field>
                                                </div>
                                              </div>
                                              <div _ngcontent-ssr-c122="" class="col-sm-6 sign-password">
                                                <div _ngcontent-ssr-c122="" class="password">
                                                  <cds-form-field _ngcontent-ssr-c154="" password="" class="cds-form-field">
                                                    <label _ngcontent-ssr-c154="" cdslabel="" class="cds-label input-field-title" for="password">Password</label>
                                                    <div class="cds-form-field-infix cds-form-field-content cds-form-field-input">
                                                      <input _ngcontent-ssr-c154="" id="password1" cdsinput="" type="password" name="password1" class="cds-input form-control cds-placeholder-text ng-untouched ng-pristine ng-invalid" placeholder="Password">
                                                    </div>
                                                  </cds-form-field>
                                                  <cds-form-field _ngcontent-ssr-c154="" password="" class="cds-form-field">
                                                    <div class="cds-form-field-infix cds-form-field-content"></div>
                                                  </cds-form-field>
                                                </div>
                                              </div>
                                            </div>
                                            <div _ngcontent-ssr-c122="" class="row">
                                              <div _ngcontent-ssr-c122="" class="col-sm-6 pb-2 mb-1">
                                                <div _ngcontent-ssr-c122="" class="remember-user remember ng-star-inserted">
                                                  <cds-form-field _ngcontent-ssr-c154="" remember="" class="cds-form-field ng-star-inserted">
                                                    <div class="cds-form-field-infix cds-form-field-content cds-form-field-checkbox">
                                                      <cds-checkbox _ngcontent-ssr-c154="" error="remember.touched &amp;&amp; !remember.valid" formcontrolname="remember" name="remember" value="accepted" class="cds-checkbox ng-untouched ng-pristine ng-valid" _nghost-ssr-c117="" id="cds-checkbox-1">
                                                        <input _ngcontent-ssr-c117="" type="checkbox" class="cds-checkbox-input" value="accepted" id="rememberUid" name="remember" aria-labelledby="rememberUid-label">
                                                        <label _ngcontent-ssr-c117="" class="cds-checkbox-label" for="rememberUid" id="rememberUid-label">Remember User ID</label>
                                                      </cds-checkbox>
                                                    </div>
                                                  </cds-form-field>
                                                </div>
                                              </div>
                                              <div _ngcontent-ssr-c122="" class="col-sm-6 pb-2 mb-1 pl-0">
                                                <div _ngcontent-ssr-c122="" class="remember"></div>
                                              </div>
                                            </div>
                                            <div _ngcontent-ssr-c122="" class="ng-star-inserted"><small _ngcontent-ssr-c122="" role="alert" class="rememberText pl-1"></small></div>
                                            <div _ngcontent-ssr-c122="" class="form-group col-xs-12 pl-0 pt-2">
                                              <button _ngcontent-ssr-c122="" cdsbutton="primary" size="large" class="cds-button cds-signon-cta cds-button-lg cds-button-primary" id="signInBtn">Sign On</button>
                                            </div>
                                            <div _ngcontent-ssr-c122="" class="form-group col-xs-12 pl-0 ng-star-inserted">
                                              <button _ngcontent-ssr-c122="" cdsbutton="alternate" size="large" class="cds-button cds-signon-cta mobile cds-button-lg cds-button-alternate" id="signOn-mobile-0">
                                                <div class="qr-icon"></div><span>Sign On With QR Code</span></button>
                                            </div>
                                            <div _ngcontent-ssr-c122="" class="row register-main align-items-center">
                                              <div _ngcontent-ssr-c122="" class="col-sm-5">
                                                <div _ngcontent-ssr-c122="" class="register-activate d-flex">
                                                  <div _ngcontent-ssr-c122="" class="col-xs-6 anchor-container"><a _ngcontent-ssr-c122="" tabindex="0" class="cds-signon-anchor register" id="register_acc">Register</a></div><span _ngcontent-ssr-c122="" class="register-connector">/</span>
                                                  <div _ngcontent-ssr-c122="" class="col-xs-6 anchor-container"><a _ngcontent-ssr-c122="" tabindex="0" class="cds-signon-anchor activate" id="activate_card">Activate</a></div>
                                                </div>
                                              </div>
                                              <div _ngcontent-ssr-c122="" class="col-sm-7">
                                                <div _ngcontent-ssr-c122="" class="col-xs-6 anchor-container">
                                                  <div _ngcontent-ssr-c122="" class="cds-signon-anchor register">
                                                    <div _ngcontent-ssr-c154="" links="" style="padding-bottom:10px">
                                                      <div _ngcontent-ssr-c154="" class="col-xs-6 readLine">Forgot</div>
                                                      <div _ngcontent-ssr-c154="" class="col-xs-6 readLine"><a _ngcontent-ssr-c154="" id="RequestUserIDReminder" href="https://online.citi.com/US/ag/forgot-userid-pwd/account-type?fuipFlowInd=userID">User ID</a></div>
                                                      <div _ngcontent-ssr-c154="" class="col-xs-6 readLine">or</div>
                                                      <div _ngcontent-ssr-c154="" class="col-xs-6 readLine"><a _ngcontent-ssr-c154="" id="ForgotPassword" href="https://online.citi.com/US/ag/forgot-userid-pwd/account-type?fuipFlowInd=pwd">Password</a></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </section>
                                        </cds-signon2>
                                      </form>
                                      <cds-modal-dialog _ngcontent-ssr-c154="" arialabel="Modal description read by screen reader." class="qrmodal ng-star-inserted" _nghost-ssr-c106="">
                                        <div _ngcontent-ssr-c106="" cdsariahideouterdom="" aria-hidden="false">
                                          <div _ngcontent-ssr-c106="" class="cds-modal" aria-hidden="false" style="display:none">
                                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                            <div _ngcontent-ssr-c106="" cdktrapfocus="" role="dialog" class="cds-modal-dialog" aria-hidden="false" aria-label="Modal description read by screen reader.">
                                              <div _ngcontent-ssr-c154="" class="cds-modal-dialog-centered">
                                                <div _ngcontent-ssr-c154="" class="cds-modal-content cds-modal-xl">
                                                  <button _ngcontent-ssr-c154="" type="button" aria-label="Close" class="cds-modal-close cds-close"></button>
                                                  <div _ngcontent-ssr-c154="" class="cds-modal-header">
                                                    <h4 _ngcontent-ssr-c154="" class="cds-modal-title" style="margin-left:8px">Access Citi.com With QR Code</h4></div>
                                                  <div _ngcontent-ssr-c154="" cdsmodalinitialfocus="" class="cds-modal-body qr-modal">
                                                    <app-qrcode _ngcontent-ssr-c154="" _nghost-ssr-c153="" class="ng-star-inserted">
                                                      <div _ngcontent-ssr-c153="" class="modal-top ng-star-inserted">
                                                        <p _ngcontent-ssr-c153="" id="qrSignonModalDesc">Sign on to Citi.com with Citi Mobile?? App, instead of your User ID and password, for enhanced security.</p>
                                                        <p _ngcontent-ssr-c153="" class="qrNoteContent">Note: Only customers who are enrolled in Face ID??, Touch ID??, Biometrics or 6-Digit PIN are eligible to sign on using QR Code.</p>
                                                        <h3 _ngcontent-ssr-c153="" id="qrStepsIntro">Here???s How It Works:</h3></div>
                                                      <div _ngcontent-ssr-c153="" style="display:flex" class="ng-star-inserted">
                                                        <div _ngcontent-ssr-c153="" style="width:600px">
                                                          <table _ngcontent-ssr-c153="" class="qrModalTable table table-bordered">
                                                            <tbody _ngcontent-ssr-c153="">
                                                              <tr _ngcontent-ssr-c153="" id="step-1">
                                                                <td _ngcontent-ssr-c153="">
                                                                  <div _ngcontent-ssr-c153="" class="step1Row">
                                                                    <div _ngcontent-ssr-c153="">
                                                                      <div _ngcontent-ssr-c153="" class="qrStepsImgIcon"><img _ngcontent-ssr-c153="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/phone-3x.png" alt="" height="90" id="img1" style="padding-left:35px"></div>
                                                                      <div _ngcontent-ssr-c153="" class="qrStepsText">
                                                                        <h5 _ngcontent-ssr-c153="">Step 1</h5>
                                                                        <div _ngcontent-ssr-c153="" class="step1Text">Open Citi Mobile?? App and select QR Code* from the Sign On screen.</div>
                                                                      </div>
                                                                    </div>
                                                                    <div _ngcontent-ssr-c153="" class="qrStepsCondition">
                                                                      <p _ngcontent-ssr-c153="">*Can also go to: Profile &gt; Security Center &gt; Citi?? Trusted Identity</p>
                                                                    </div>
                                                                  </div>
                                                                </td>
                                                              </tr>
                                                              <tr _ngcontent-ssr-c153="" id="step-2">
                                                                <td _ngcontent-ssr-c153="">
                                                                  <div _ngcontent-ssr-c153="" class="step2Row">
                                                                    <div _ngcontent-ssr-c153="" class="qrStepsImgIcon"><img _ngcontent-ssr-c153="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/laptop-and-phone-pairing.png" alt="" height="84" id="img2"></div>
                                                                    <div _ngcontent-ssr-c153="">
                                                                      <h5 _ngcontent-ssr-c153="" class="step2Heading">Step 2</h5>
                                                                      <div _ngcontent-ssr-c153="" class="step2Text" style="padding-right:57px">Hold your phone steady on the QR Code. Once in focus, it will automatically scan the QR Code.</div>
                                                                    </div>
                                                                  </div>
                                                                </td>
                                                              </tr>
                                                              <tr _ngcontent-ssr-c153="" id="step-3">
                                                                <td _ngcontent-ssr-c153="">
                                                                  <div _ngcontent-ssr-c153="" class="step3Row">
                                                                    <div _ngcontent-ssr-c153="" class="qrStepsImgIcon"><img _ngcontent-ssr-c153="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/laptop-and-phone-success.png" alt="" height="84" id="img3"></div>
                                                                    <div _ngcontent-ssr-c153="" class="qrStepsText">
                                                                      <h5 _ngcontent-ssr-c153="">Step 3</h5>
                                                                      <div _ngcontent-ssr-c153="" class="step3Text">When the QR Code is scanned, you'll be signed on to Citi.com.</div>
                                                                    </div>
                                                                  </div>
                                                                </td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div _ngcontent-ssr-c153="" style="flex-grow:1">
                                                          <div _ngcontent-ssr-c153="" class="qrBoxCol">
                                                            <div _ngcontent-ssr-c153="" class="qrBoxInstructions"><img _ngcontent-ssr-c153="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/qrsignon.png" alt="" height="40" style="margin-top:2px"> Scan this QR code using your Citi Mobile?? App</div>
                                                            <div _ngcontent-ssr-c153="" id="QRcodeAndTimer">
                                                              <div _ngcontent-ssr-c153="" id="snakeContainer">
                                                                <div _ngcontent-ssr-c153="" id="quadrant_one" style="width:0"></div>
                                                                <div _ngcontent-ssr-c153="" id="quadrant_two" style="width:0"></div>
                                                                <div _ngcontent-ssr-c153="" id="quadrant_three" style="width:0"></div>
                                                                <div _ngcontent-ssr-c153="" id="quadrant_four" style="width:0"></div>
                                                              </div>
                                                              <div _ngcontent-ssr-c153="" id="transmitContainer" title="QR Code"></div>
                                                            </div>
                                                            <div _ngcontent-ssr-c153="">
                                                              <p _ngcontent-ssr-c153="" class="refreshText">QR Code refreshes every 45 seconds.</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </app-qrcode>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                          </div>
                                          <div _ngcontent-ssr-c106="" class="cds-modal-backdrop" style="display:none"></div>
                                        </div>
                                      </cds-modal-dialog>
                                      <cds-modal-dialog _ngcontent-ssr-c154="" arialabel="Attention Scheduled Maintenance" class="safeModemodal ng-star-inserted" _nghost-ssr-c106="">
                                        <div _ngcontent-ssr-c106="" cdsariahideouterdom="" aria-hidden="false">
                                          <div _ngcontent-ssr-c106="" class="cds-modal" aria-hidden="false" style="display:none">
                                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                            <div _ngcontent-ssr-c106="" cdktrapfocus="" role="dialog" class="cds-modal-dialog" aria-hidden="false" aria-label="Attention Scheduled Maintenance">
                                              <div _ngcontent-ssr-c154="" class="cds-modal-content cds-modal-lg">
                                                <div _ngcontent-ssr-c154="">
                                                  <button _ngcontent-ssr-c154="" type="button" aria-label="Close" class="cds-modal-close cds-close"></button>
                                                </div>
                                                <div _ngcontent-ssr-c154="" class="cds-modal-header">
                                                  <h4 _ngcontent-ssr-c154="" class="cds-modal-title">Attention</h4></div>
                                                <div _ngcontent-ssr-c154="" cdsmodalinitialfocus="" class="cds-modal-body">
                                                  <p _ngcontent-ssr-c154="">Citi Online Access<sup>??</sup> is currently down for scheduled maintenance. This may take at least 1 hour.</p>
                                                </div>
                                                <div _ngcontent-ssr-c154="" class="cds-modal-footer">
                                                  <button _ngcontent-ssr-c154="" cdscta="primary" class="cds-cta ml-left cds-cta-md cds-cta-primary">Ok</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                          </div>
                                          <div _ngcontent-ssr-c106="" class="cds-modal-backdrop" style="display:none"></div>
                                        </div>
                                      </cds-modal-dialog>
                                    </nga-login>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </app-hero-reskin>
                          <app-lob-menu _ngcontent-ssr-c166="" _nghost-ssr-c164="" class="ng-star-inserted"></app-lob-menu>
                          <app-three-up-reskin _ngcontent-ssr-c166="" _nghost-ssr-c165="" class="ng-star-inserted">
                            <div _ngcontent-ssr-c165="" class="threeUp threeUpContainer">
                              <app-showcase _ngcontent-ssr-c165="" type="g-1-0" headertext="" _nghost-ssr-c150="">
                                <section _ngcontent-ssr-c150="" class="showcase ng-star-inserted">
                                  <div _ngcontent-ssr-c150="" class="container-fluid">
                                    <div _ngcontent-ssr-c150="" class="text-center">
                                      <app-text-header _ngcontent-ssr-c150="" _nghost-ssr-c148="">
                                        <section _ngcontent-ssr-c148="" class="ng-star-inserted"></section>
                                      </app-text-header>
                                    </div>
                                    <div _ngcontent-ssr-c150="" class="row">
                                      <div _ngcontent-ssr-c165="" class="row ng-star-inserted">
                                        <div _ngcontent-ssr-c165="" class="col-xs-12 col-sm-4 offer-content ng-star-inserted" id="Q2CMI_2020_Hide" data-id="Q2CMI_2020_Hide">
                                          <div _ngcontent-ssr-c165="" class="headers" id="header0" style="height:19px">
                                            <h2 _ngcontent-ssr-c165="" aria-level="3" class="header-3 normal-case hpHeader" id="h0"><strong _ngcontent-ssr-c165=""><a _ngcontent-ssr-c165="" target="_blank" class="hoverHeader Q2CMI_2020_Hide" href="https://online.citi.com/US/JRS/portal/template.do?ID=relationship_pricing_landing&amp;intc=2~2~52~1~BANR~2~Q2CMI_2020_Hide~HP">Dream Bigger with a Mortgage Deal</a></strong></h2></div>
                                          <div _ngcontent-ssr-c165="" class="three-up-body-container">
                                            <a _ngcontent-ssr-c165="" href="https://online.citi.com/US/JRS/portal/template.do?ID=relationship_pricing_landing&amp;intc=2~2~52~1~BANR~2~Q2CMI_2020_Hide~HP" class="Q2CMI_2020_Hide"><img _ngcontent-ssr-c165="" class="hpImage Q2CMI_2020_Hide lazyloaded" alt="Dream Bigger with a Mortgage Deal" data-expand="10" data-src="https://online.citi.com/JRS/banners/modules/citidotcom-M2-M7_Mortgage2.jpg" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/citidotcom-M2-M7_Mortgage2.jpg"></a>
                                            <div _ngcontent-ssr-c165="" id="d0">
                                              <p _ngcontent-ssr-c165="" class="hpDescription m-bottom-0 p-top-10"><span _ngcontent-ssr-c165="" class="d-block" id="p0" style="height:72px">New and existing Citi banking customers can get mortgage closing cost or interest rate discounts with Relationship Pricing.</span>
                                                <button _ngcontent-ssr-c165="" cdscta="primary" customertype="priority" size="large" class="cds-cta btn-threeup cta-desktop Q2CMI_2020_Hide cds-cta-lg cds-cta-primary cds-cta-priority" aria-label="Learn More about Dream Bigger with a Mortgage Deal">Learn More<span _ngcontent-ssr-c165="" class="ada-hidden">Dream Bigger with a Mortgage Deal</span></button>
                                                <button _ngcontent-ssr-c165="" cdscta="primary" customertype="priority" class="cds-cta btn-threeup cta-responsive Q2CMI_2020_Hide cds-cta-md cds-cta-primary cds-cta-priority" aria-label="Learn More about Dream Bigger with a Mortgage Deal">Learn More<span _ngcontent-ssr-c165="" class="ada-hidden">Dream Bigger with a Mortgage Deal</span></button>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div _ngcontent-ssr-c165="" class="col-xs-12 col-sm-4 offer-content ng-star-inserted" id="Generic_Check" data-id="Generic_Check">
                                          <div _ngcontent-ssr-c165="" class="headers" id="header1" style="height:19px">
                                            <h2 _ngcontent-ssr-c165="" aria-level="3" class="header-3 normal-case hpHeader" id="h1"><strong _ngcontent-ssr-c165=""><a _ngcontent-ssr-c165="" target="_blank" class="hoverHeader Generic_Check" href="https://online.citi.com/US/banking/citi.action?ID=banking-overview&amp;intc=1~1~52~6~BANR~2~Generic_Check~XPX">Bank Your Own Way</a></strong></h2></div>
                                          <div _ngcontent-ssr-c165="" class="three-up-body-container">
                                            <a _ngcontent-ssr-c165="" href="https://online.citi.com/US/banking/citi.action?ID=banking-overview&amp;intc=1~1~52~6~BANR~2~Generic_Check~XPX" class="Generic_Check"><img _ngcontent-ssr-c165="" class="hpImage Generic_Check lazyloaded" alt="Bank Your&lt;br/&gt;Own Way" data-expand="10" data-src="https://online.citi.com/JRS/banners/modules/HP418_M.jpg" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/HP418_M.jpg"></a>
                                            <div _ngcontent-ssr-c165="" id="d1">
                                              <p _ngcontent-ssr-c165="" class="hpDescription m-bottom-0 p-top-10"><span _ngcontent-ssr-c165="" class="d-block" id="p1" style="height:72px">Get more than just a bank account. Get a package of benefits and services plus convenient access and smart technology.</span>
                                                <button _ngcontent-ssr-c165="" cdscta="primary" customertype="priority" size="large" class="cds-cta btn-threeup cta-desktop Generic_Check cds-cta-lg cds-cta-primary cds-cta-priority" aria-label="Learn More about Bank Your Own Way">Learn More<span _ngcontent-ssr-c165="" class="ada-hidden">Bank Your Own Way</span></button>
                                                <button _ngcontent-ssr-c165="" cdscta="primary" customertype="priority" class="cds-cta btn-threeup cta-responsive Generic_Check cds-cta-md cds-cta-primary cds-cta-priority" aria-label="Learn More about Bank Your Own Way">Learn More<span _ngcontent-ssr-c165="" class="ada-hidden">Bank Your Own Way</span></button>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div _ngcontent-ssr-c165="" class="col-xs-12 col-sm-4 offer-content ng-star-inserted" id="AA_FAM3_CITICOM" data-id="AA_FAM3_CITICOM">
                                          <div _ngcontent-ssr-c165="" class="headers" id="header2" style="height:19px">
                                            <h2 _ngcontent-ssr-c165="" aria-level="3" class="header-3 normal-case hpHeader" id="h2" style="height:auto"><strong _ngcontent-ssr-c165=""><a _ngcontent-ssr-c165="" target="_blank" class="hoverHeader AA_FAM3_CITICOM" href="https://www.citi.com/credit-cards/compare-credit-cards/citi.action?ID=american-airlines-aadvantage-credit-cards&amp;intc=7~1~64~1~080115~1~AAFam3~AA&amp;afc=1A3">Explore Citi<sup>??</sup> / AAdvantage<sup>??</sup> Credit Cards</a></strong></h2></div>
                                          <div _ngcontent-ssr-c165="" class="three-up-body-container">
                                            <a _ngcontent-ssr-c165="" href="https://www.citi.com/credit-cards/compare-credit-cards/citi.action?ID=american-airlines-aadvantage-credit-cards&amp;intc=7~1~64~1~080115~1~AAFam3~AA&amp;afc=1A3" class="AA_FAM3_CITICOM"><img _ngcontent-ssr-c165="" class="hpImage AA_FAM3_CITICOM lazyloaded" alt="Explore Citi&lt;sup&gt;&amp;reg;&lt;/sup&gt; / AAdvantage&lt;sup&gt;&amp;reg;&lt;/sup&gt; Credit Cards" data-expand="10" data-src="https://online.citi.com/JRS/banners/modules/HP3054_M.jpg" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/HP3054_M.jpg"></a>
                                            <div _ngcontent-ssr-c165="" id="d2">
                                              <p _ngcontent-ssr-c165="" class="hpDescription m-bottom-0 p-top-10"><span _ngcontent-ssr-c165="" class="d-block" id="p2" style="height:72px">Whether you're a frequent flyer or first???time passenger, Citi has an airline rewards credit card to meet your travel needs.</span>
                                                <button _ngcontent-ssr-c165="" cdscta="primary" customertype="priority" size="large" class="cds-cta btn-threeup cta-desktop AA_FAM3_CITICOM cds-cta-lg cds-cta-primary cds-cta-priority" aria-label="Learn More about Explore Citi / AAdvantage Credit Cards">Learn More<span _ngcontent-ssr-c165="" class="ada-hidden">Explore Citi&lt;sup&gt;&amp;reg;&lt;/sup&gt; / AAdvantage&lt;sup&gt;&amp;reg;&lt;/sup&gt; Credit Cards</span></button>
                                                <button _ngcontent-ssr-c165="" cdscta="primary" customertype="priority" class="cds-cta btn-threeup cta-responsive AA_FAM3_CITICOM cds-cta-md cds-cta-primary cds-cta-priority" aria-label="Learn More about Explore Citi / AAdvantage Credit Cards">Learn More<span _ngcontent-ssr-c165="" class="ada-hidden">Explore Citi&lt;sup&gt;&amp;reg;&lt;/sup&gt; / AAdvantage&lt;sup&gt;&amp;reg;&lt;/sup&gt; Credit Cards</span></button>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <footer _ngcontent-ssr-c150="" class="text-center"></footer>
                                  </div>
                                </section>
                              </app-showcase>
                            </div>
                          </app-three-up-reskin><img _ngcontent-ssr-c166="" role="presentation" aria-hidden="true" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/Wave_Top.svg" class="waveTop ng-star-inserted">
                          <app-module-seven-reskin _ngcontent-ssr-c166="" _nghost-ssr-c156="">
                            <div _ngcontent-ssr-c156="" class="mod-seven offer-content" id="CPWM_0820_M8" data-id="CPWM_0820_M8">
                              <div _ngcontent-ssr-c156="" id="modSevenContainer" class="container" style="padding-left:0;padding-right:0">
                                <app-showcase _ngcontent-ssr-c156="" type="g-3-1" imageside="left" class="mod-seven ng-star-inserted" _nghost-ssr-c150="">
                                  <section _ngcontent-ssr-c150="" class="showcase ng-star-inserted">
                                    <div _ngcontent-ssr-c150="" class="container-fluid showcase-3">
                                      <div _ngcontent-ssr-c150="" class="row">
                                        <div _ngcontent-ssr-c150="" class="g-3-container">
                                          <div _ngcontent-ssr-c150="" class="col-sm-6 image-container">
                                            <a _ngcontent-ssr-c150="" href="https://banking.citi.com/cbol/investment/cpwm/default.htm?intc=1~1~52~6~BANR~2~CPWM0820~M8" target="_blank" class="CPWM_0820_M8 ng-star-inserted"><img _ngcontent-ssr-c150="" class="img-responsive CPWM_0820_M8 ng-star-inserted lazyloaded" alt="Enjoy up to $3,500 &amp; financial guidance" data-expand="10" data-src="https://online.citi.com/JRS/banners/modules/CPWM_2022_M1M7_560x315.jpg" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/CPWM_2022_M1M7_560x315.jpg"></a>
                                          </div>
                                          <div _ngcontent-ssr-c150="" class="col-sm-6 col-sm-push-6 module-content">
                                            <app-text-header _ngcontent-ssr-c150="" _nghost-ssr-c148="">
                                              <section _ngcontent-ssr-c148="" class="ng-star-inserted">
                                                <p _ngcontent-ssr-c148="" class="eyebrow-text ng-star-inserted">EARN UP TO $3,500</p>
                                                <h2 _ngcontent-ssr-c148="" class="bold header-level-2 ng-star-inserted">Enjoy up to $3,500 &amp; financial guidance</h2></section>
                                            </app-text-header>
                                            <p _ngcontent-ssr-c150=""></p>
                                            <div _ngcontent-ssr-c150="">
                                              <p _ngcontent-ssr-c156="" content-3-1="" class="m-bottom-0 ng-star-inserted"><span _ngcontent-ssr-c156="" class="m-bottom-30 d-block m-bottom-10">Enjoy a cash bonus w/ required activities &amp; financial advisor support.</span>
                                                <div _ngcontent-ssr-c156="" content-3-1="" class="ng-star-inserted"><a _ngcontent-ssr-c156="" content-3-1="" class="btn btn-secondary chevron-link bold no-text-decoration CPWM_0820_M8 ng-star-inserted" href="https://banking.citi.com/cbol/investment/cpwm/default.htm?intc=1~1~52~6~BANR~2~CPWM0820~M8" target="_blank">Learn More<span _ngcontent-ssr-c156="" class="ada-hidden">Enjoy a cash bonus w/ required activities &amp; financial advisor support.</span></a></div>
                                              </p>
                                              <p _ngcontent-ssr-c156="" content-3-1="" class="disclaimer ng-star-inserted">NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                </app-showcase>
                              </div>
                            </div>
                          </app-module-seven-reskin>
                          <app-module-one-reskin _ngcontent-ssr-c166="" _nghost-ssr-c157="">
                            <div _ngcontent-ssr-c157="" class="mod-one offer-content" id="LIBM1M7_HP22" data-id="LIBM1M7_HP22">
                              <div _ngcontent-ssr-c157="" id="modOneContainer" class="container" style="padding-left:0;padding-right:0">
                                <app-showcase _ngcontent-ssr-c157="" type="g-3-0" imageside="right" _nghost-ssr-c150="" class="ng-star-inserted">
                                  <section _ngcontent-ssr-c150="" class="showcase ng-star-inserted">
                                    <div _ngcontent-ssr-c150="" class="container-fluid showcase-3">
                                      <div _ngcontent-ssr-c150="" class="row">
                                        <div _ngcontent-ssr-c150="" class="g-3-container">
                                          <div _ngcontent-ssr-c150="" class="col-sm-6 col-sm-push-6 image-container">
                                            <a _ngcontent-ssr-c150="" href="https://banking.citi.com/cbol/checking/tiered/1500/default.htm?venue=OnsiteEX1" target="_blank" class="LIBM1M7_HP22 ng-star-inserted"><img _ngcontent-ssr-c150="" class="img-responsive LIBM1M7_HP22 ng-star-inserted lazyloaded" alt="Coming Soon ??? Overdraft fees are over!" data-expand="10" data-src="https://online.citi.com/JRS/banners/modules/HP_3445_project_liberty_m1m7_banner.jpg" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/HP_3445_project_liberty_m1m7_banner.jpg"></a>
                                          </div>
                                          <div _ngcontent-ssr-c150="" class="col-sm-6 module-content">
                                            <app-text-header _ngcontent-ssr-c150="" _nghost-ssr-c148="">
                                              <section _ngcontent-ssr-c148="" class="ng-star-inserted">
                                                <p _ngcontent-ssr-c148="" class="eyebrow-text ng-star-inserted">CITI?? CHECKING</p>
                                                <h2 _ngcontent-ssr-c148="" class="bold header-level-2 ng-star-inserted">Coming Soon ??? Overdraft fees are over!</h2></section>
                                            </app-text-header>
                                            <p _ngcontent-ssr-c150=""></p>
                                            <div _ngcontent-ssr-c150="">
                                              <p _ngcontent-ssr-c157="" content-3-0="" class="m-bottom-0"><span _ngcontent-ssr-c157="" class="m-bottom-20 d-block">We???re excited to announce that starting soon, Citi personal banking customers can enjoy no overdraft fees. Banking made simple.</span>
                                                <div _ngcontent-ssr-c157="" content-3-0="" class="ng-star-inserted">
                                                  <div _ngcontent-ssr-c157="" content-3-0="" class="ng-star-inserted">
                                                    <button _ngcontent-ssr-c157="" cdscta="primary" content-3-0="" customertype="priority" size="large" class="cds-cta LIBM1M7_HP22 cds-cta-lg cds-cta-primary cds-cta-priority" aria-label="Learn More about CITI?? CHECKING">Learn More<span _ngcontent-ssr-c157="" class="ada-hidden">We???re excited to announce that starting soon, Citi personal banking customers can enjoy no overdraft fees. Banking made simple.</span></button>
                                                  </div>
                                                </div>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                </app-showcase>
                              </div>
                            </div>
                          </app-module-one-reskin>
                          <app-module-three-reskin _ngcontent-ssr-c166="" _nghost-ssr-c158="">
                            <div _ngcontent-ssr-c158="" class="mod-three" style="position:relative">
                              <div _ngcontent-ssr-c158="" class="blank-space">&nbsp;</div>
                              <div _ngcontent-ssr-c158=""><img _ngcontent-ssr-c158="" _ngcontent-ssr-c386="" role="presentation" aria-hidden="true" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/Wave_Bottom.svg" class="waveBottom_Threeup"></div>
                              <div _ngcontent-ssr-c158="" class="offer-content" id="GENDERPAYBAN" data-id="GENDERPAYBAN">
                                <div _ngcontent-ssr-c158="" id="modThreeContainer" class="container" style="padding-left:0;padding-right:0">
                                  <app-showcase _ngcontent-ssr-c158="" type="g-3-1" imageside="left" class="mod-three ng-star-inserted" _nghost-ssr-c150="">
                                    <section _ngcontent-ssr-c150="" class="showcase ng-star-inserted">
                                      <div _ngcontent-ssr-c150="" class="container-fluid showcase-3">
                                        <div _ngcontent-ssr-c150="" class="row">
                                          <div _ngcontent-ssr-c150="" class="g-3-container">
                                            <div _ngcontent-ssr-c150="" class="col-sm-6 image-container">
                                              <a _ngcontent-ssr-c150="" href="https://www.thefemalequotient.com/advancing-equality-calculator" target="_blank" class="GENDERPAYBAN ng-star-inserted"><img _ngcontent-ssr-c150="" class="img-responsive GENDERPAYBAN ng-star-inserted lazyloaded" alt="Advancing Equality Calculator" data-expand="10" data-src="https://online.citi.com/JRS/banners/homepage2/GENDERPAYBAN.png" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/GENDERPAYBAN.png"></a>
                                            </div>
                                            <div _ngcontent-ssr-c150="" class="col-sm-6 col-sm-push-6 module-content">
                                              <app-text-header _ngcontent-ssr-c150="" _nghost-ssr-c148="">
                                                <section _ngcontent-ssr-c148="" class="ng-star-inserted">
                                                  <p _ngcontent-ssr-c148="" class="eyebrow-text ng-star-inserted">PROMOTING PAY EQUITY</p>
                                                  <h2 _ngcontent-ssr-c148="" class="bold header-level-2 ng-star-inserted">Advancing Equality Calculator</h2></section>
                                              </app-text-header>
                                              <p _ngcontent-ssr-c150=""></p>
                                              <div _ngcontent-ssr-c150="">
                                                <p _ngcontent-ssr-c158="" content-3-1="" class="m-bottom-0"><span _ngcontent-ssr-c158="" class="m-bottom-20 d-block">Citi collaborated with The Female Quotient on a tool to assess an organization's raw gender pay gap &amp; help drive pay equity.</span></p>
                                                <div _ngcontent-ssr-c158="" content-3-1="">
                                                  <button _ngcontent-ssr-c158="" cdscta="primary" customertype="priority" size="large" class="cds-cta GENDERPAYBAN cds-cta-lg cds-cta-primary cds-cta-priority" aria-label="Learn More about PROMOTING PAY EQUITY">Learn More<span _ngcontent-ssr-c158="" class="ada-hidden">Citi collaborated with The Female Quotient on a tool to assess an organization's raw gender pay gap &amp; help drive pay equity.</span></button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </section>
                                  </app-showcase>
                                  <div _ngcontent-ssr-c158="" class="MobileViewOfferImg ng-star-inserted">
                                    <a _ngcontent-ssr-c158="" href="https://www.thefemalequotient.com/advancing-equality-calculator" target="_blank" class="GENDERPAYBAN"><img _ngcontent-ssr-c158="" alt="Advancing Equality Calculator" class="lazyload" data-expand="10" data-src="https://online.citi.com/JRS/banners/homepage2/GENDERPAYBAN.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////ywAAAAAAQABAAACAkQBADs="></a>
                                  </div>
                                </div>
                              </div><img _ngcontent-ssr-c158="" role="presentation" aria-hidden="true" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/Wave_Top_Grey.svg" class="footerwave"></div>
                          </app-module-three-reskin><img _ngcontent-ssr-c166="" id="rfuidsync" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/uidm" class="ng-star-inserted"></div>
                      </citi-simple-layout>
                    </div>
                  </app-landingpage>
                  <mfa-modal _ngcontent-ssr-c175="" _nghost-ssr-c134="" class="ng-tns-c91-0">
                    <div _ngcontent-ssr-c134="">
                      <router-outlet _ngcontent-ssr-c134="" name="mfaContent"></router-outlet>
                    </div>
                    <div _ngcontent-ssr-c134="" class="mfa-screen-alignment">
                      <router-outlet _ngcontent-ssr-c134="" name="mfaConfirm"></router-outlet>
                    </div>
                  </mfa-modal>
                  <ivr-modal _ngcontent-ssr-c168="" _nghost-ssr-c171="" class="ng-tns-c91-0">
                    <citi-modal _ngcontent-ssr-c171="" idstr="modalID" id="ivr-modal" footerprojection="true" class="cbolui-ddl-post" _nghost-ssr-c38="">
                      <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                        <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modalID" style="display:none">
                          <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                            <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                              <div _ngcontent-ssr-c38="" class="modal-header">
                                <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                              </div>
                              <div _ngcontent-ssr-c38="" role="document">
                                <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                  <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted"></div>
                                  <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                    <p _ngcontent-ssr-c171=""></p>
                                    <div _ngcontent-ssr-c171="" class="ivr-cta-wrapper"></div>
                                  </div>
                                </div>
                              </div>
                              <div _ngcontent-ssr-c38="" class="modal-footer">
                                <div _ngcontent-ssr-c38="" class="ng-star-inserted">
                                  <div _ngcontent-ssr-c38=""></div>
                                </div>
                              </div>
                            </div>
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          </div>
                        </div>
                        <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                      </div>
                    </citi-modal>
                  </ivr-modal>
                  <cbol-session _ngcontent-ssr-c168="" _nghost-ssr-c169="" class="ng-tns-c91-0">
                    <citi-modal _ngcontent-ssr-c169="" showcancelbutton="true" primarybuttontarget="_blank" openerselector="#sessionFocus" class="cbolui-ddl-post" _nghost-ssr-c38="">
                      <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                        <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="citi-modal-4" style="display:none">
                          <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                            <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                              <div _ngcontent-ssr-c38="" class="modal-header">
                                <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                              </div>
                              <div _ngcontent-ssr-c38="" role="document">
                                <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                  <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted"></div>
                                  <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                    <p _ngcontent-ssr-c169=""></p>
                                    <p _ngcontent-ssr-c169=""><b _ngcontent-ssr-c169=""></b></p>
                                    <p _ngcontent-ssr-c169=""></p>
                                  </div>
                                </div>
                              </div>
                              <div _ngcontent-ssr-c38="" class="modal-footer">
                                <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted"></div>
                              </div>
                            </div>
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          </div>
                        </div>
                        <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                      </div>
                    </citi-modal>
                  </cbol-session>
                  <cobrowse-modal _ngcontent-ssr-c168="" _nghost-ssr-c88="" class="ng-tns-c91-0">
                    <citi-modal _ngcontent-ssr-c88="" idstr="modal" _nghost-ssr-c38="">
                      <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                        <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modal" style="display:none">
                          <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                            <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                              <div _ngcontent-ssr-c38="" class="modal-header">
                                <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                              </div>
                              <div _ngcontent-ssr-c38="" role="document">
                                <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                  <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                    <div _ngcontent-ssr-c88="" class="ng-star-inserted"></div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                    <div _ngcontent-ssr-c88="" class="ng-star-inserted">
                                      <p _ngcontent-ssr-c88=""></p>
                                      <div _ngcontent-ssr-c88="" class="theme-light">
                                        <citi-input _ngcontent-ssr-c88="" type="text" class="citi-input row" _nghost-ssr-c52="">
                                          <div _ngcontent-ssr-c52="" class="col-xs-12 form-group">
                                            <label _ngcontent-ssr-c52="" for="undefined" id="null" class="text-input-label"></label>
                                            <div _ngcontent-ssr-c52="">
                                              <div _ngcontent-ssr-c52="">
                                                <div _ngcontent-ssr-c52="">
                                                  <input _ngcontent-ssr-c52="" aria-label="" placeholder="" maxlength="524288" autocomplete="off" class="form-control ng-untouched ng-pristine ng-valid">
                                                </div>
                                              </div><span _ngcontent-ssr-c52="" aria-hidden="true" class="sr-only" id="undefined-error">Error</span></div>
                                          </div>
                                        </citi-input>
                                      </div>
                                      <div _ngcontent-ssr-c88=""></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div _ngcontent-ssr-c38="" class="modal-footer">
                                <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted"></div>
                              </div>
                            </div>
                            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          </div>
                        </div>
                        <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                      </div>
                    </citi-modal>
                  </cobrowse-modal>
                  <citi-route-detector _ngcontent-ssr-c168="" class="ng-tns-c91-0"></citi-route-detector>
                  <citi-session-handler _ngcontent-ssr-c168="" interval="10000" class="ng-tns-c91-0"></citi-session-handler>
                </div>
              </div>
            </div>
          </div>
          <citi-footer _ngcontent-ssr-c91="" class="ng-tns-c91-0" _nghost-ssr-c73="">
            <div _ngcontent-ssr-c73="" role="contentinfo" class="footer">
              <citi-footer-navigation _ngcontent-ssr-c73="" _nghost-ssr-c74="">
                <div _ngcontent-ssr-c74="" class="navigation ng-star-inserted">
                  <div _ngcontent-ssr-c74="" class="content">
                    <div _ngcontent-ssr-c74="" role="group" class="section ng-star-inserted">
                      <div _ngcontent-ssr-c74="" class="title ng-star-inserted" id="nav-list-header0">Why Citi</div>
                      <button _ngcontent-ssr-c74="" type="button" class="title ng-star-inserted" aria-controls="list0" aria-expanded="false">Why Citi</button>
                      <ul _ngcontent-ssr-c74="" id="list0" aria-labelledby="nav-list-header0" aria-hidden="false" class="ng-star-inserted">
                        <li _ngcontent-ssr-c74="" id="navOurStory" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="5e445de2-431b-ce13-dbdf-ca8a0174c74b" tabindex="-1" href="http://www.citigroup.com/citi/" class="btn btn-link ng-star-inserted">Our Story</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navCareers" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="059e7418-170b-396c-6e8a-653e08b961ac" tabindex="-1" href="https://jobs.citi.com/" class="btn btn-link ng-star-inserted">Careers</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navBenefits&amp;Services" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="6cc03616-3ed7-f65f-f180-6c83d145c096" tabindex="-1" href="https://online.citi.com/US/JRS/pands/detail.do?ID=ServicesOverview" class="btn btn-link ng-star-inserted">Benefits and Services</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navRewards" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="5495796b-a0d8-b3d7-fd13-2a54450a28b3" tabindex="-1" href="https://online.citi.com/US/JRS/pands/detail.do?ID=Rewards" class="btn btn-link ng-star-inserted">Rewards</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navCitiEasyDeals" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_blank" id="4e653a65-0632-e2d1-a704-1e1325c5bf1b" tabindex="-1" href="https://citieasydeals.com/" aria-describedby="17a0b054-97c5-8904-6e2e-3fe71519f5a8_ariadescription" class="btn btn-link ng-star-inserted">Citi Easy Deals<sup>SM</sup></a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="17a0b054-97c5-8904-6e2e-3fe71519f5a8_ariadescription">Opens in new window</span></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navPrivatePass" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_blank" id="aae24a06-d385-9e28-75bf-63ef73990838" tabindex="-1" href="http://www.citiprivatepass.com/" aria-describedby="5e01dfb1-64b1-abdc-8ef9-48a346b838ea_ariadescription" class="btn btn-link ng-star-inserted">Citi Entertainment<sup>??</sup></a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="5e01dfb1-64b1-abdc-8ef9-48a346b838ea_ariadescription">Opens in new window</span></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navSpecialOffers" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="1f1b59ed-e52d-118d-3fa0-9cc2a3489021" tabindex="-1" href="https://online.citi.com/US/JRS/portal/template.do?ID=SpecialOffers" class="btn btn-link ng-star-inserted">Special Offers</a></citi-cta>
                        </li>
                      </ul>
                    </div>
                    <div _ngcontent-ssr-c74="" role="group" class="section ng-star-inserted">
                      <div _ngcontent-ssr-c74="" class="title ng-star-inserted" id="nav-list-header1">Wealth Management</div>
                      <button _ngcontent-ssr-c74="" type="button" class="title ng-star-inserted" aria-controls="list1" aria-expanded="false">Wealth Management</button>
                      <ul _ngcontent-ssr-c74="" id="list1" aria-labelledby="nav-list-header1" aria-hidden="false" class="ng-star-inserted">
                        <li _ngcontent-ssr-c74="" id="navCitiPrivateClient" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="95814b32-1615-e138-d5c1-37cc3355e6af" tabindex="-1" href="https://online.citi.com/US/ag/citigold-private-client" class="btn btn-link ng-star-inserted">Citigold<sup>??</sup> Private Client</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navCitigold" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="921f1d40-c6cb-97b0-ffd9-19ce1fc26565" tabindex="-1" href="https://online.citi.com/US/JRS/pands/detail.do?ID=CitigoldOverview" class="btn btn-link ng-star-inserted">Citigold</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navCitiPriority" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="97ab1813-7f79-fc4c-d2dd-46ea4d37815b" tabindex="-1" href="https://online.citi.com/US/JRS/pands/detail.do?ID=CitiPriorityOverview" class="btn btn-link ng-star-inserted">Citi Priority</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navCitiPrivateBank" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="b61b1558-2c72-e1b5-5ee4-d4c0196b45b4" tabindex="-1" href="https://www.privatebank.citibank.com/" class="btn btn-link ng-star-inserted">Citi Private Bank</a></citi-cta>
                        </li>
                      </ul>
                    </div>
                    <div _ngcontent-ssr-c74="" role="group" class="section ng-star-inserted">
                      <div _ngcontent-ssr-c74="" class="title ng-star-inserted" id="nav-list-header2">Business Banking</div>
                      <button _ngcontent-ssr-c74="" type="button" class="title ng-star-inserted" aria-controls="list2" aria-expanded="false">Business Banking</button>
                      <ul _ngcontent-ssr-c74="" id="list2" aria-labelledby="nav-list-header2" aria-hidden="false" class="ng-star-inserted">
                        <li _ngcontent-ssr-c74="" id="navSmallBusinessAccounts" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="cc90007a-0493-c942-c831-e259925a9339" tabindex="-1" href="https://online.citi.com/US/ag/small-business-banking" class="btn btn-link ng-star-inserted">Small Business Accounts</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navCommercialAccounts" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="bb4b2253-ddfa-2a42-14a2-b70cb1356b77" tabindex="-1" href="https://www.citibank.com/commercialbank/en/index.html" class="btn btn-link ng-star-inserted">Commercial Accounts</a></citi-cta>
                        </li>
                      </ul>
                    </div>
                    <div _ngcontent-ssr-c74="" role="group" class="section ng-star-inserted">
                      <div _ngcontent-ssr-c74="" class="title ng-star-inserted" id="nav-list-header3">Rates</div>
                      <button _ngcontent-ssr-c74="" type="button" class="title ng-star-inserted" aria-controls="list3" aria-expanded="false">Rates</button>
                      <ul _ngcontent-ssr-c74="" id="list3" aria-labelledby="nav-list-header3" aria-hidden="false" class="ng-star-inserted">
                        <li _ngcontent-ssr-c74="" id="navPersonal Banking" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="f5f0233e-10a4-ec34-a91b-b61241f1b840" tabindex="-1" href="https://online.citi.com/US/ag/current-interest-rates/checking-saving-accounts" class="btn btn-link ng-star-inserted">Personal Banking</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navCreditCards" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="d60189c9-2d4a-341f-1e19-8f3ac5950720" tabindex="-1" href="https://www.citi.com/credit-cards/compare-credit-cards/citi.action?ID=view-all-credit-cards" class="btn btn-link ng-star-inserted">Credit Cards</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navMortgage" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="fda4db10-969e-6540-9a00-829e88d62755" tabindex="-1" href="https://online.citi.com/US/JRS/portal/template.do?ID=todays_mortgage_rates&amp;type=buy" class="btn btn-link ng-star-inserted">Mortgage</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navHomeEquity" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="3d62506e-445f-0a09-1e48-43fc75b8d5fe" tabindex="-1" href="https://online.citi.com/US/JRS/portal/template.do?ID=home_equity_rates" class="btn btn-link ng-star-inserted">Home Equity</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navLending" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="5ca420c4-7739-b554-12fe-f7f22daebdc4" tabindex="-1" href="https://online.citi.com/US/ag/current-interest-rates/personal-loans-and-lines-of-credit" class="btn btn-link ng-star-inserted">Lending</a></citi-cta>
                        </li>
                      </ul>
                    </div>
                    <div _ngcontent-ssr-c74="" role="group" class="last section ng-star-inserted">
                      <div _ngcontent-ssr-c74="" class="title ng-star-inserted" id="nav-list-header4">Help &amp; Support</div>
                      <button _ngcontent-ssr-c74="" type="button" class="title ng-star-inserted" aria-controls="list4" aria-expanded="false">Help &amp; Support</button>
                      <ul _ngcontent-ssr-c74="" id="list4" aria-labelledby="nav-list-header4" aria-hidden="false" class="ng-star-inserted">
                        <li _ngcontent-ssr-c74="" id="navContactUs" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="2d88110b-eab8-4b78-188d-e9337e01059c" tabindex="-1" href="https://online.citi.com/US/nga/contactus" class="btn btn-link ng-star-inserted">Contact Us</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navHelpFAQs" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="d72c74eb-61ea-7978-88e6-ad1187dbe044" tabindex="-1" href="https://online.citi.com/US/ag/helptopic" class="btn btn-link ng-star-inserted">Help &amp; FAQs</a></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c74="" id="navSecurityCenter" class="ng-star-inserted">
                          <citi-cta _ngcontent-ssr-c74="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="a85855b2-0189-e88e-91e9-bf95df789b82" tabindex="-1" href="https://online.citi.com/US/ag/security-center" class="btn btn-link ng-star-inserted">Security Center</a></citi-cta>
                        </li>
                      </ul>
                    </div>
                    <div _ngcontent-ssr-c74="" class="section">
                      <div _ngcontent-ssr-c74="" class="images ng-star-inserted">
                        <div _ngcontent-ssr-c74="" class="ng-star-inserted"><span _ngcontent-ssr-c74="" id="fdicSprite" alt="Member FDIC" class="brandingSprite fdic"><img _ngcontent-ssr-c74="" alt="Member FDIC" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/memberfdic.png"></span></div>
                        <div _ngcontent-ssr-c74="" class="ng-star-inserted"><span _ngcontent-ssr-c74="" id="homeSprite" alt="Equal housing lender" class="brandingSprite equalHousing"><img _ngcontent-ssr-c74="" alt="Equal housing lender" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/EqualHousing.png"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </citi-footer-navigation>
              <citi-social-media _ngcontent-ssr-c73="" _nghost-ssr-c77="" tabindex="-1">
                <div _ngcontent-ssr-c77="" class="social ng-star-inserted">
                  <div _ngcontent-ssr-c77="" class="content">
                    <div _ngcontent-ssr-c77="" class="socialItems ng-star-inserted">
                      <div _ngcontent-ssr-c77="" class="ng-star-inserted">
                        <button _ngcontent-ssr-c77="" data-target="#modal00" aria-label="Get it on Google Play" class="/CBOL/IA/Angular/assets/googlePlay3x.png ng-star-inserted"><img _ngcontent-ssr-c77="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/googlePlay3x.png" alt="undefined" class="Googleplay"></button>
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modal00" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77="">Important Information</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77="">You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?
                                          <br>
                                          <br>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_blank" id="560ba235-3fe2-dff5-4f75-58c2ceaf80e2" href="https://play.google.com/store/apps/details?id=com.citi.citimobile" aria-describedby="58c88daf-2eba-df21-32d9-db9b024be357_ariadescription" class="btn btn-primary ng-star-inserted">Continue</a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="58c88daf-2eba-df21-32d9-db9b024be357_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                      </div>
                      <div _ngcontent-ssr-c77="" class="ng-star-inserted">
                        <button _ngcontent-ssr-c77="" data-target="#modal01" aria-label="Download on the App Store" class="/CBOL/IA/Angular/assets/appStore3x.png ng-star-inserted"><img _ngcontent-ssr-c77="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/appStore3x.png" alt="undefined" class="Appstore"></button>
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modal01" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77="">Important Information</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77="">You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?
                                          <br>
                                          <br>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_blank" id="33a7ad6c-99eb-612d-8a85-13333ba463af" href="https://itunes.apple.com/app/citi-mobile-sm/id301724680?mt=8" aria-describedby="3444e6f4-ec08-1148-6b5e-1f9fb98bf160_ariadescription" class="btn btn-primary ng-star-inserted">Continue</a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="3444e6f4-ec08-1148-6b5e-1f9fb98bf160_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                      </div>
                      <div _ngcontent-ssr-c77="" class="ng-star-inserted">
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="" class="ng-star-inserted">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="JDPower-0" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77="">J.D. Power 2019 Mobile App Certification Program&amp;#8480;&lt;span class='sr-only'&gt;Service Mark&lt;/span&gt;</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77="">J.D. Power 2019 Mobile App Certification Program???<span class="sr-only">Service Mark</span> recognition is based on successful completion of an audit and exceeding a customer experience benchmark through a survey of recent servicing interactions. For more information, visit</p><a _ngcontent-ssr-c77="" class="ng-star-inserted">jdpower.com/awards</a></div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36="">
                                          <button _ngcontent-ssr-c36="" type="button" id="aec1a691-145c-ef71-a9c8-384eff02f694" role="button" aria-describedby="a4505371-c819-5cb2-d00d-4fb407555852_ariadescription" class="btn btn-primary ng-star-inserted" style="text-align:center">Continue</button><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="a4505371-c819-5cb2-d00d-4fb407555852_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="" class="ng-star-inserted">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="JDPower-1" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77="">Important Information</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77="">You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?
                                          <br>
                                          <br>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_blank" id="bc624674-f5ff-6dde-6c70-70d5d92526b8" href="http://www.jdpower.com/awards" aria-describedby="f3e313ce-fbea-743b-3d91-3947ea96f864_ariadescription" class="btn btn-primary ng-star-inserted">Continue</a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="f3e313ce-fbea-743b-3d91-3947ea96f864_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modal02" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77=""></div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77=""></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36="">
                                          <button _ngcontent-ssr-c36="" type="button" id="abdc5407-baf8-8136-886d-77551d284290" role="button" aria-describedby="83d31ba4-3619-cc04-825a-3daecf44d56d_ariadescription" class="btn btn-primary ng-star-inserted" style="text-align:center">Continue</button><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="83d31ba4-3619-cc04-825a-3daecf44d56d_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                      </div>
                    </div>
                    <div _ngcontent-ssr-c77="" class="socialItems ng-star-inserted"></div>
                    <div _ngcontent-ssr-c77="" class="socialItems ng-star-inserted">
                      <div _ngcontent-ssr-c77="" class="ng-star-inserted">
                        <button _ngcontent-ssr-c77="" data-target="#modal20" aria-label="facebook" class="/CBOL/IA/Angular/assets/social-media_facebook3x.png ng-star-inserted"><img _ngcontent-ssr-c77="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/social-media_facebook3x.png" alt="facebook" class="facebook"></button>
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modal20" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77="">Important Information</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77=""></p>
                                        <p>You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?</p>
                                        <p>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_blank" id="032c0e59-e059-db5b-7bb7-1a0ff860779f" href="https://www.facebook.com/citibank" aria-describedby="c975c9b3-7989-8cd7-609f-cc5d4f4523df_ariadescription" class="btn btn-primary ng-star-inserted">Continue</a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="c975c9b3-7989-8cd7-609f-cc5d4f4523df_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                      </div>
                      <div _ngcontent-ssr-c77="" class="ng-star-inserted">
                        <button _ngcontent-ssr-c77="" data-target="#modal21" aria-label="twitter" class="/CBOL/IA/Angular/assets/social-media_twitter3x.png ng-star-inserted"><img _ngcontent-ssr-c77="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/social-media_twitter3x.png" alt="twitter" class="twitter"></button>
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modal21" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77="">Important Information</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77=""></p>
                                        <p>You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?</p>
                                        <p>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_blank" id="cc66f53c-d0dd-09d8-0af1-9afbb63f6fc5" href="https://twitter.com/Citibank/" aria-describedby="739eb727-e4ac-da09-1ced-f313dade17c4_ariadescription" class="btn btn-primary ng-star-inserted">Continue</a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="739eb727-e4ac-da09-1ced-f313dade17c4_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                      </div>
                      <div _ngcontent-ssr-c77="" class="ng-star-inserted">
                        <button _ngcontent-ssr-c77="" data-target="#modal22" aria-label="youtube" class="/CBOL/IA/Angular/assets/social-media_youtube3x.png ng-star-inserted"><img _ngcontent-ssr-c77="" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/social-media_youtube3x.png" alt="youtube" class="youtube"></button>
                        <citi-modal _ngcontent-ssr-c77="" primarybuttontarget="_blank" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="modal22" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted">
                                        <div _ngcontent-ssr-c77="">Important Information</div>
                                      </div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c77=""></p>
                                        <p>You are leaving a Citi Website and going to a third party site. That site may have a privacy policy different from Citi and may provide less security than this Citi site. Citi and its affiliates are not responsible for the products, services, and content on the third party website. Do you want to go to the third party site?</p>
                                        <p>Citi is not responsible for the products, services or facilities provided and/or owned by other companies.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36=""><a _ngcontent-ssr-c36="" target="_blank" id="a5c5269c-b533-e078-51f2-f2a51d4f5ab5" href="https://www.youtube.com/citi" aria-describedby="9f542a20-259c-b606-45ad-f0d023872d9a_ariadescription" class="btn btn-primary ng-star-inserted">Continue</a><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="9f542a20-259c-b606-45ad-f0d023872d9a_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                      </div>
                    </div>
                  </div>
                </div>
              </citi-social-media>
              <citi-footer-sub-navigation _ngcontent-ssr-c73="" _nghost-ssr-c75="">
                <div _ngcontent-ssr-c75="" class="sub-navigation ng-star-inserted">
                  <div _ngcontent-ssr-c75="" class="content">
                    <p _ngcontent-ssr-c75="" class="copyright ng-star-inserted">?? 2022 Citigroup Inc</p>
                    <ul _ngcontent-ssr-c75="" class="ng-star-inserted">
                      <li _ngcontent-ssr-c75="" id="subnavTermsConditions" class="ng-star-inserted">
                        <citi-cta _ngcontent-ssr-c75="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="f15bdf37-1401-5483-6168-b2979956ea74" href="https://online.citi.com/US/ag/termsdisclaimer/termsdisclaimerhome" data-target="#modalId" class="btn btn-link ng-star-inserted">Terms &amp; Conditions</a></citi-cta>
                      </li>
                      <li _ngcontent-ssr-c75="" id="subnavPrivacy" class="ng-star-inserted">
                        <citi-cta _ngcontent-ssr-c75="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="7c7c1908-f877-7a77-b9a7-4a63436b6643" href="https://online.citi.com/US/JRS/portal/template.do?ID=Privacy" data-target="#modalId" class="btn btn-link ng-star-inserted">Privacy</a></citi-cta>
                      </li>
                      <li _ngcontent-ssr-c75="" id="subnavNoticeAtCollection" class="ng-star-inserted">
                        <citi-cta _ngcontent-ssr-c75="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="9389a435-7507-9bf4-79fb-5834e1d6c0fe" href="https://online.citi.com/JRS/portal/template.do?ID=Privacy#notice-at-collection" data-target="#modalId" class="btn btn-link ng-star-inserted">Notice at Collection</a></citi-cta>
                      </li>
                      <li _ngcontent-ssr-c75="" id="subnavPrivacyHub" class="ng-star-inserted">
                        <citi-cta _ngcontent-ssr-c75="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="79ad3984-1215-dd8a-5605-6b4273f34f4b" href="https://online.citi.com/US/ag/dataprivacyhub" data-target="#modalId" class="btn btn-link ng-star-inserted">CA Privacy Hub</a></citi-cta>
                      </li>
                      <li _ngcontent-ssr-c75="" id="subnavAccessibility" class="ng-star-inserted">
                        <citi-cta _ngcontent-ssr-c75="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted"><a _ngcontent-ssr-c36="" target="_self" id="ce7c46d2-b0e7-54ff-041e-0ec68fc75932" href="https://online.citi.com/US/JRS/portal/template.do?ID=Accessibility" data-target="#modalId" class="btn btn-link ng-star-inserted">Accessibility</a></citi-cta>
                      </li>
                      <li _ngcontent-ssr-c75="" class="ng-star-inserted"><span _ngcontent-ssr-c75="" class="staticLinks ng-star-inserted">Country &amp; Jurisdictions:</span></li>
                      <li _ngcontent-ssr-c75="" class="ng-star-inserted">
                        <citi-cta _ngcontent-ssr-c75="" type="tertiary" _nghost-ssr-c36="" class="ng-star-inserted">
                          <button _ngcontent-ssr-c36="" type="button" id="2b86e53f-1a33-35bd-62e0-61656b1e59bc" data-target="#modalId" class="btn btn-link ng-star-inserted" style="text-align:center"><b>United States</b></button>
                        </citi-cta><span _ngcontent-ssr-c75="" class="staticLinks ng-star-inserted" style="font-weight:700">&gt;</span>
                        <citi-modal _ngcontent-ssr-c75="" showcancelbutton="true" cancelbuttontext="Cancel" idstr="unitedStates" class="cbolui-ddl-pre ng-star-inserted" _nghost-ssr-c38="">
                          <div _ngcontent-ssr-c38="" ddlariahideouterdom="">
                            <div _ngcontent-ssr-c38="" tabindex="-1" class="modal citi-modal fade" id="unitedStates" style="display:none">
                              <div _ngcontent-ssr-c38="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                                <div _ngcontent-ssr-c38="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c38="" class="modal-header">
                                    <button _ngcontent-ssr-c38="" type="button" aria-label="Close modal" class="close-button ng-star-inserted"><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only">Close</span></button>
                                  </div>
                                  <div _ngcontent-ssr-c38="" role="document">
                                    <div _ngcontent-ssr-c38="" class="modal-body" tabindex="-1">
                                      <div _ngcontent-ssr-c38="" tabindex="-1" class="header ng-star-inserted"></div>
                                      <div _ngcontent-ssr-c38="" class="modal-body-content" tabindex="-1">
                                        <div _ngcontent-ssr-c75="" class="theme-light">
                                          <p _ngcontent-ssr-c75=""></p>
                                          <p _ngcontent-ssr-c75="" class="speedBumpCopy">Get Citibank information on the countries &amp; jurisdictions we serve</p><span _ngcontent-ssr-c75="" class="selectCountry">Select Country or Jurisdiction</span>
                                          <citi-dropdown _ngcontent-ssr-c75="" idstr="countrySelect" class="citi-dropdown row" _nghost-ssr-c49="">
                                            <div _ngcontent-ssr-c49="" class="dd-wrapper ng-star-inserted form-group col-xs-12 has-value">
                                              <label _ngcontent-ssr-c49="" class="select-box-label" id="countrySelectlabel" for="countrySelect"></label>
                                              <div _ngcontent-ssr-c49="">
                                                <select _ngcontent-ssr-c49="" class="form-control ng-untouched ng-pristine ng-valid" id="countrySelect" aria-labelledby="countrySelectlabel">
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.au/portal/citiau_home.htm" class="ng-star-inserted">Australia</option>
                                                  <option _ngcontent-ssr-c49="" value="https://www.citibank.com/bahrain" class="ng-star-inserted">Bahrain</option>
                                                  <option _ngcontent-ssr-c49="" value="https://www.citibank.com.br/BRGCB/JPS/portal/Index.do" class="ng-star-inserted">Brazil</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.cn/homepage/cn/cn_homepage.htm" class="ng-star-inserted">China - Chinese</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.cn/homepage/en/cn_homepage.htm" class="ng-star-inserted">China - English</option>
                                                  <option _ngcontent-ssr-c49="" value="https://www.citibank.com.co/COGCB/JPS/portal/Index.do" class="ng-star-inserted">Colombia</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citi.com.sv/" class="ng-star-inserted">El Salvador</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citi.com/citi/about/countrypresence/guatemala.html" class="ng-star-inserted">Guatemala</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.hk/" class="ng-star-inserted">Hong Kong</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.online.citibank.co.in/" class="ng-star-inserted">India - Domestic</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.online.citibank.co.in/citi-nri.htm" class="ng-star-inserted">India - Non-Resident Indian (NRI)</option>
                                                  <option _ngcontent-ssr-c49="" value="https://www.citibank.co.id/portal/bahasa_home/index.htm" class="ng-star-inserted">Indonesia - Bahasa Indonesia</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.co.id/" class="ng-star-inserted">Indonesia - English</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.co.kr/" class="ng-star-inserted">Korea - Korean</option>
                                                  <option _ngcontent-ssr-c49="" value="https://www.citibank.co.kr/ComMainCnts0100_en.act?JEX_LANG=EN" class="ng-star-inserted">Korea - English</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.my/" class="ng-star-inserted">Malaysia</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citi.com/citi/about/countrypresence/mexico.html" class="ng-star-inserted">Mexico</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.ph/portal/citiph_home.htm" class="ng-star-inserted">Philippines</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.pl/poland/homepage/polish/index.htm" class="ng-star-inserted">Poland</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.ru/russia/main/rus/home.htm" class="ng-star-inserted">Russia - Russian</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.ru/russia/main/eng/home.htm" class="ng-star-inserted">Russia - English</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.sg/" class="ng-star-inserted">Singapore</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.tw/portal/home_chinese/twcb_Home.htm" class="ng-star-inserted">Taiwan - Chinese</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.tw/portal/home_english/twcb_Home.htm" class="ng-star-inserted">Taiwan - English</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.co.th/" class="ng-star-inserted">Thailand</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citi.com/uae/homepage/index.htm" class="ng-star-inserted">United Arab Emirates</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.co.uk/index.htm" class="ng-star-inserted">United Kingdom</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citi.com/domain/home.htm" class="ng-star-inserted">United States</option>
                                                  <option _ngcontent-ssr-c49="" value="https://www.citibank.com.ve/VEGCB/JPS/portal/Index.do" class="ng-star-inserted">Venezuela</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.vn/" class="ng-star-inserted">Vietnam - Vietnamese</option>
                                                  <option _ngcontent-ssr-c49="" value="http://www.citibank.com.vn/portal/vietnam_home.htm" class="ng-star-inserted">Vietnam - English</option>
                                                </select>
                                              </div>
                                            </div>
                                          </citi-dropdown>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c38="" class="modal-footer">
                                    <div _ngcontent-ssr-c38="" class="text-right ng-star-inserted">
                                      <div _ngcontent-ssr-c38="" class="citi-modal-controls ng-star-inserted">
                                        <citi-cta _ngcontent-ssr-c38="" class="modal-primary-btn btnclassTest ng-star-inserted" _nghost-ssr-c36="">
                                          <button _ngcontent-ssr-c36="" type="button" id="c8ec95a2-fd8d-3027-feef-f3bc7f7c1261" role="button" aria-describedby="7e4cb1e0-3744-5a2b-848c-13cad0518325_ariadescription" class="btn btn-primary ng-star-inserted" style="text-align:center">Submit</button><span _ngcontent-ssr-c36="" aria-hidden="true" class="sr-only ng-star-inserted" id="7e4cb1e0-3744-5a2b-848c-13cad0518325_ariadescription">Opens in new window</span></citi-cta><span _ngcontent-ssr-c38="" aria-hidden="false" class="sr-only"></span>
                                        <citi-cta _ngcontent-ssr-c38="" ariarole="button" type="tertiary" class="modal-secondary-btn marginBetweenBtns ng-star-inserted" _nghost-ssr-c36="">
                                          <button _ngcontent-ssr-c36="" type="button" id="6d05129f-dbab-4978-2d3d-fb115c122067" role="button" class="btn btn-link ng-star-inserted" style="text-align:center">Cancel</button>
                                        </citi-cta>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c38="" class="modal-backdrop citi-modal-backdrop fade" style="display:none"></div>
                          </div>
                        </citi-modal>
                      </li>
                    </ul>
                  </div>
                </div>
              </citi-footer-sub-navigation>
              <citi-footer-disclaimer _ngcontent-ssr-c73="" _nghost-ssr-c76="">
                <div _ngcontent-ssr-c76="" class="disclaimer ng-star-inserted">
                  <div _ngcontent-ssr-c76="" class="content">
                    <div _ngcontent-ssr-c76="" class="text" tabindex="-1">
                      <p><strong>Important Legal Disclosures &amp; Information</strong></p>
                      <p>Citibank.com provides information about and access to accounts and financial services provided by Citibank, N.A. and its affiliates in the United States and its territories. It does not, and should not be construed as, an offer, invitation or solicitation of services to individuals outside of the United States.</p>
                      <p>Terms, conditions and fees for accounts, products, programs and services are subject to change. Not all accounts, products, and services as well as pricing described here are available in all jurisdictions or to all customers. Your eligibility for a particular product and service is subject to a final determination by Citibank. Your country of citizenship, domicile, or residence, if other than the United States, may have laws, rules, and regulations that govern or affect your application for and use of our accounts, products and services, including laws and regulations regarding taxes, exchange and/or capital controls that you are responsible for following.</p>
                      <p>The products, account packages, promotional offers and services described in this website may not apply to customers of <a target="_blank" href="https://www.citi.com/JRS/portal/template.do?ID=international-personal-bank&amp;l=en&amp;locale=en_US">International Personal Bank U.S.</a> in the Citigold<sup>??</sup> Private Client International, Citigold<sup>??</sup> International, Citi International Personal, Citi Global Executive Preferred, and Citi Global Executive Account Packages.</p>
                    </div>
                  </div>
                </div>
              </citi-footer-disclaimer>
              <citi-sub-footer _ngcontent-ssr-c73="" _nghost-ssr-c78="">
                <div _ngcontent-ssr-c78="" class="sub-footer ng-star-inserted">
                  <div _ngcontent-ssr-c78="" class="content"></div>
                  <div _ngcontent-ssr-c78="" class="ng-star-inserted"><img _ngcontent-ssr-c78="" alt="Citi Banner" aria-label="Citi Banner" class="imgBottomCitiLogo_Mobile" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/320_Citi-PLT3x.png"><img _ngcontent-ssr-c78="" alt="Citi Banner" aria-label="Citi Banner" class="imgBottomCitiLogo_Desktop" src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/1440_Citi-PLT3x.png"></div>
                </div>
              </citi-sub-footer>
            </div>
          </citi-footer>
        </div>
      </citi-parent-layout>
    </cbol-core>
  </app-root>
  <script defer src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/fp.js"></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/runtime-es2015.9a2fc02ae41646ac63f9.js" type="module"></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/runtime-es5.9a2fc02ae41646ac63f9.js" nomodule="" defer></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/polyfills-es5.21e2e1772eb7d47013cd.js" nomodule="" defer></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/polyfills-es2015.e7d0b76c73ea8e161869.js" type="module"></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/scripts.ccc73c512668b4e837d7.js" defer></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/main-es2015.4a01d7f61fc81c668a81.js" type="module"></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/main-es5.4a01d7f61fc81c668a81.js" nomodule="" defer></script>
  <div class="sr-only ddl-live-announcer-element" aria-atomic="true" aria-live="polite"></div>
  <script id="ssr-state" type="application/json">{&q;DomData&q;:{&q;currentRoute&q;:&q;/homepage&q;,&q;cookies&q;:{&q;locale&q;:&q;en_US&q;},&q;appGlobalConfigData&q;:{&q;production&q;:true,&q;environment&q;:&q;PROD&q;,&q;apiServerUrl&q;:&q;https://www.citi.com/gcgapi/prod/public/v1&q;,&q;apiServerUrlPlatformServer&q;:&q;https://xlg-fdn-p-psg.apps-gt1-prod.nam.nsroot.net&q;,&q;acqHostName&q;:&q;https://www.citicards.com&q;,&q;csrHostName&q;:&q;https://online.citi.com&q;,&q;newCitiHostName&q;:&q;https://www.citi.com&q;,&q;isFeatureEntitlementEnabled&q;:true,&q;newLogicBranding&q;:true,&q;locale&q;:&q;en_US&q;,&q;businessId&q;:&q;USGCB&q;,&q;snarejsUrl&q;:&q;https://mpsnare.iesnare.com/snare.js&q;,&q;amwSubDomainName&q;:&q;paper.citi.com&q;,&q;amwSnippetId&q;:&q;127893&q;,&q;ensightenHost&q;:&q;https://nexus.ensighten.com/citi/na_prod&q;,&q;tmx_url&q;:&q;https://content22.online.citi.com/fp/tags.js?org_id=89oebq5k&a;allow_reprofile=1&a;session_id=&q;,&q;crossSiteScriptingRegex&q;:{},&q;sessionCookieInformation&q;:{&q;cookieName&q;:&q;NGACoExistenceCookie&q;,&q;valueSeparator&q;:&q;|&q;,&q;headers&q;:[{&q;headerName&q;:&q;bizToken&q;,&q;headerValue&q;:&q;[bizToken]&q;},{&q;headerName&q;:&q;Authorization&q;,&q;headerValue&q;:&q;Bearer [authToken]&q;},{&q;headerName&q;:&q;client_id&q;,&q;headerValue&q;:&q;[clientId]&q;}],&q;isFriendKey&q;:&q;isFriend&q;},&q;sessionIdentifiers&q;:[{&q;sessionType&q;:&q;legacy&q;,&q;cookieNames&q;:[{&q;cookieName&q;:&q;NGACoExistenceCookie&q;,&q;valueSeparator&q;:&q;|&q;}]},{&q;sessionType&q;:&q;nga&q;,&q;cookieNames&q;:[{&q;cookieName&q;:&q;Authorization&q;},{&q;cookieName&q;:&q;bizToken&q;}]}],&q;sessionService&q;:{&q;sessionTimeout&q;:600,&q;keepAliveInterval&q;:180,&q;sessionKeepAliveUrl&q;:&q;https://www.citi.com/gcgapi/prod/public/v1/public/sso/keepalive&q;,&q;sessionTimeoutUrl&q;:&q;https://online.citi.com/US/JSO/signon/CBOLSessionRecovery.do&q;},&q;contentService&q;:{&q;staticBaseUrl&q;:&q;https://www.citi.com/gcgapi/prod/public/v1&q;,&q;bundles&q;:{&q;static_test&q;:{&q;businessId&q;:&q;BUSIDSTATICTEST&q;,&q;locale&q;:&q;en_US&q;}}},&q;mfaUiService&q;:{&q;bundleName&q;:&q;mfa_common&q;,&q;pinBlockedUrl&q;:&q;https://online.citi.com/JSO/signoff/Signoff.do?eostype=OTPBlockedPIN&q;},&q;idleTimeRouterService&q;:{&q;routeAfter&q;:600,&q;routingInfo&q;:[{&q;appName&q;:&q;TY&q;,&q;routeUrl&q;:&q;https://thankyou.com&q;},{&q;appName&q;:&q;dlp&q;,&q;routeUrl&q;:&q;https://online.citi.com/US/ag/lending/timeout&q;}],&q;defaultRoute&q;:&q;https://online.citi.com/US/login.do&q;},&q;httpService&q;:{&q;defaultHeaders&q;:{&q;Content-Type&q;:&q;application/json&q;,&q;client_id&q;:&q;4a51fb19-a1a7-4247-bc7e-18aa56dd1c40&q;,&q;businessCode&q;:&q;GCB&q;,&q;countryCode&q;:&q;US&q;,&q;channelId&q;:&q;CBOL&q;,&q;Accept&q;:&q;application/json&q;,&q;appVersion&q;:&q;CBOL-ANGS-2022-05-00&q;},&q;headersToSendFromPreviousResponse&q;:[{&q;headerNameInPreviousResponse&q;:&q;CCPToken&q;,&q;headerNameToSendInRequest&q;:&q;CCPToken&q;},{&q;headerNameInPreviousResponse&q;:&q;bizToken&q;,&q;headerNameToSendInRequest&q;:&q;bizToken&q;,&q;deleteOnAppLoad&q;:true,&q;setToService&q;:true},{&q;headerNameInPreviousResponse&q;:&q;Authorization&q;,&q;headerNameToSendInRequest&q;:&q;Authorization&q;,&q;deleteOnAppLoad&q;:true,&q;setToService&q;:true},{&q;headerNameInPreviousResponse&q;:&q;dclocation&q;,&q;headerNameToSendInRequest&q;:&q;dclocation&q;,&q;deleteOnAppLoad&q;:true}],&q;headersToSaveFromResponse&q;:[&q;eventid&q;,&q;CCPToken&q;,&q;dclocation&q;]},&q;mapService&q;:{&q;googleApiKey&q;:&q;AIzaSyCBjZ_yfCGWQNqL1reNdDaNXUcJzsFDKKY&q;,&q;endpointUrl&q;:&q;//www.citi.com/gcgapi/prod/public/v1/geoLocations/places/retrieve&q;},&q;customConfig&q;:{&q;staticAssetsUrl&q;:&q;cbol-pre-login-static-assets/&q;,&q;brandingApiUrl&q;:&q;https://online.citi.com&q;,&q;brandingEndpoint&q;:&q;/CBOL/IA/Angular/Branding&q;,&q;errorUrl&q;:&q;/US/JPS/portal/Unauthorized.do&q;,&q;chatServiceEndpoint&q;:&q;https://www.citi.com/gcgapi/prod/public/v1/userInteraction/chat/configurations&q;,&q;chatScriptSrc&q;:&q;https://online.citi.com/US/ag/assets/js/injectChat.js&q;,&q;lpAccountNumber&q;:50929468,&q;ngaCoexistenceEndpoint&q;:&q;/US/REST/nga/ngasessionmanagement.jws&q;,&q;sessionRedirectionURL&q;:&q;/US/JSO/signoff/SummaryRecord.do?logOff=true&q;,&q;submitDisputePegaEndpoint&q;:&q;https://online.citi.com/prod&q;,&q;avokaDomain&q;:&q;https://online.citi.com&q;,&q;cardsPaymentsFastlinkURL&q;:&q;https://instantverification.citi.com&q;,&q;jemstep_sso_url&q;:&q;https://login.jemstep.com/passport/auth/saml/citiwealthbuilder/callback/inbound&q;,&q;loanFxUrl&q;:&q;https://mymortgage.citi.com/app/login/sso/partner/UAHYJO3T&q;,&q;environmentId&q;:&q;loginAuth&q;,&q;yodleeBank&q;:&q;https://instantverification.citi.com/authenticate/citiiavms/10003600&q;,&q;channelId&q;:&q;INTERNET&q;},&q;cobrowseRoutes&q;:{&q;services&q;:[&q;/mrc/dashboard&q;]},&q;homepageConfig&q;:{&q;apiOnlineServerUrl&q;:&q;https://online.citi.com/gcgapi/prod/api/&q;,&q;apiServerUrl&q;:&q;https://www.citi.com/gcgapi/prod/api/&q;,&q;clientID&q;:&q;e83e6374-92f0-472c-8a6b-2ded64acc51c&q;,&q;clientMetrics&q;:{&q;onlineServerUrl&q;:&q;https://online.citi.com/gcgapi/prod/public/v1/digital/reporting/metrics&q;,&q;url&q;:&q;https://www.citi.com/gcgapi/prod/public/v1/digital/reporting/metrics&q;,&q;clientID&q;:&q;4a51fb19-a1a7-4247-bc7e-18aa56dd1c40&q;}},&q;ngaLoginConfig&q;:{&q;e2eEnvironmentId&q;:&q;loginAuth&q;,&q;nonE2eEnvironmentId&q;:&q;loginAPIDITCCS&q;}}},&q;/staticcms/USGCB/en_US/appid/cbol_homepage.json&q;:{&q;content&q;:{&q;cbol_homepage&q;:{&q;copy$$CyberSafeINTRO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CyberSafeINTRO\&q;,\n\&q;hdText\&q;: \&q;PROTECT YOUR FAMILY ONLINE\&q;,\n\&q;subText\&q;: \&q;A few easy steps can help keep you safe.\&q;,\n\&q;descriptionText\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CyberSafeINTRO&q;,&q;NAME&q;:&q;CyberSafeINTRO&q;},&q;copy$$AA_Plat_CitiCom_LTO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;AA_Plat_CitiCom_LTO\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; / AADVANTAGE&l;sup&g;&a;reg;&l;/sup&g; PLATINUM SELECT&l;sup&g;&a;reg;&l;/sup&g; WORLD ELITE&l;sup&g;TM&l;/sup&g; MASTERCARD&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;New Ways to Earn Miles\&q;,\n\&q;descriptionText\&q;: \&q;Earn UP TO 50,000 AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles after qualifying purchases, double miles on eligible AA purchases and at restaurants and gas stations.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/credit-card-details/citi.action?ID=citi-aadvantage-platinum-elite-credit-card&a;afc=106&a;intc=1~1~52~6~BANR~1~AA_Plat\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP434_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H1_HP434_background.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;classDarkGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Apply for the Citi AAdvantage Platinum Select Card.\&q;,\n\&q;prodTitle\&q;: \&q;CITI(R) / AADVANTAGE(R) PLATINUM SELECT(R) CARD\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/AAPLAT_hero_card.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;New Ways to Earn Miles\&q;,\n\&q;mmBody\&q;:\&q;Earn UP TO 50,000 AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles after qualifying purchases, double miles on eligible AA purchases and at restaurants and gas stations.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;AA_Plat_CitiCom_LTO&q;,&q;NAME&q;:&q;AA_Plat_CitiCom_LTO&q;},&q;copy$$HYCA_MarkExp_NOATM&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYCA_MarkExp_NOATM\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; HIGH-YIELD CHECKING\&q;,\n\&q;subText\&q;: \&q;No ATM Fees, Anywhere\&q;,\n\&q;descriptionText\&q;: \&q;Open a Citi&l;sup&g;&a;reg;&l;/sup&g; High-Yield Checking Account and get unlimited ATM fees refunded. No minimum to open or limit on earnings.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/high-yield/checking/default.htm?onsite=content&a;Promo_ID=4FWDQVC8TKCHPA&a;intc=1~1~21~6~BANR~2~HYCA_MarkExp_NOATM~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/7717_HYCA_ME_m1m73up.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/7717_HYCA_MarEx_H2.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HYCA_MarkExp_NOATM_HeroAsset.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;No ATM Fees, Anywhere\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;No ATM Fees, Anywhere\&q;,\n\&q;mmBody\&q;: \&q;Open a Citi&l;sup&g;&a;reg;&l;/sup&g; High-Yield Checking Account and get unlimited ATM fees refunded. No minimum to open or limit on earnings.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYCA_MarkExp_NOATM&q;,&q;NAME&q;:&q;HYCA_MarkExp_NOATM&q;},&q;copy$$Citigold_MGM_HP22&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Citigold_MGM_HP22\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD SPECIAL OFFER\&q;,\n\&q;subText\&q;: \&q;Earn up to $4,000 when you refer your friends\&q;,\n\&q;descriptionText\&q;: \&q;Get $200 cash for every friend you refer who is new to Citi?? checking and opens an eligible account. Max 20 referral bonuses.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/citigold/member-get-member/default.htm\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/m1m7_1120x630_Gold.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Citigold_MGM_HP22&q;,&q;NAME&q;:&q;Citigold_MGM_HP22&q;},&q;copy$$Emotion2&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Emotion2\&q;,\n\&q;hdText\&q;: \&q;CITI WELCOME WHAT&s;S NEXT\&q;,\n\&q;subText\&q;: \&q;Experience all that Citi has to offer.\&q;,\n\&q;descriptionText\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Emotion2&q;,&q;NAME&q;:&q;Emotion2&q;},&q;copy$$PM_INTRO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;PM_INTRO\&q;,\n\&q;hdText\&q;: \&q;PROGRESS MAKER STORIES\&q;,\n\&q;subText\&q;: \&q;Citi is proud to support Progress Makers\&q;,\n\&q;descriptionText\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PM_INTRO&q;,&q;NAME&q;:&q;PM_INTRO&q;},&q;copy$$mpc_Default_citicomREDPE_aug2016&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;mpc_Default_citicomREDPE_aug2016\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; Credit Cards\&q;,\n\&q;subText\&q;: \&q;Choose the right Citi&l;sup&g;&a;reg;&l;/sup&g; credit card for you\&q;,\n\&q;descriptionText\&q;: \&q;Whether you want??Cash Back, Great Rewards,??or a??Low Intro Rate,??the choice is all yours.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/compare/view-all-credit-cards?afc=105&a;intc=1~1~52~6~BANR~1~mpc_Default_citicomREDPE_aug2016~OMPC105\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4382_mpc_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2.0_Multi-Card_Hero_Card_Background.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Apply for the Citi cards.\&q;,\n\&q;prodTitle\&q;: \&q;CITI(R) CARDS\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP4382_mpc_CardArt.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Choose the right Citi&l;sup&g;&a;reg;&l;/sup&g; credit card for you\&q;,\n\&q;mmBody\&q;:\&q;Whether you want Cash Back, Great Rewards, or a Low Intro Rate, the choice is all yours.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;mpc_Default_citicomREDPE_aug2016&q;,&q;NAME&q;:&q;mpc_Default_citicomREDPE_aug2016&q;},&q;copy$$HYCA_Interest&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYCA_Interest\&q;,\n\&q;hdText\&q;: \&q;HIGH-YIELD CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;High Interest Checking.&l;br/&g; Smart Move. \&q;,\n\&q;descriptionText\&q;: \&q;Bank smart with a high-yield checking account and unlimited ATM fee reimbursements. Available in select markets.\&q;,\n\&q;ctaLabel\&q;: \&q;Get Details\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking/high-yield-checking/default.htm?version=interest&a;Promo_ID=4FWDQVC8TKCHPI&a;intc=1~1~21~1~BANR~2~HYCA_Interest~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HYCA_Interest_Citidotcom_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HYCA_Interest_Citidotcom_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;High Interest Checking. Smart Move.\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;High Interest Checking. Smart Move.\&q;,\n\&q;mmBody\&q;: \&q;Bank smart with a high-yield checking account and unlimited ATM fee reimbursements. Available in select markets.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYCA_Interest&q;,&q;NAME&q;:&q;HYCA_Interest&q;},&q;copy$$Q2SMB_HP22&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Q2SMB_HP22\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SMALL BUSINESS\&q;,\n\&q;subText\&q;: \&q;Earn Up To $2,000\&q;,\n\&q;descriptionText\&q;: \&q;For a limited time, New to Citibank customers can earn a cash bonus when opening a Citibank business checking account.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/SmallBusiness/DM/default.htm?intc=1_1_26_3_BANR_2_Q2SMB_HP22_HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_2914_Module3-UP_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP_2914_Legacy_Hero_Image.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_2914_NewHero_2.0_Image.png\&q;,\n\&q;copyBgColor\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $2,000\&q;,\n\&q;mmBody\&q;:\&q;For a limited time, New to Citibank customers can earn a cash bonus when opening a Citibank business checking account.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2SMB_HP22&q;,&q;NAME&q;:&q;Q2SMB_HP22&q;},&q;copy$$Zelle_ConSBA_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Zelle_ConSBA_HP21\&q;,\n\&q;hdText\&q;: \&q;ENROLL WITH ZELLE&l;sup&g;??&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Send &a; Receive Money with Zelle&l;sup&g;??&l;/sup&g;\&q;,\n\&q;descriptionText\&q;: \&q;With Zelle&l;sup&g;??&l;/sup&g;, eligible consumer and small business customers can send money safely &a; easily via Citi Online or Citi Mobile&l;sup&g;??&l;/sup&g;.\&q;,\n\&q;ctaLabel\&q;: \&q;Enroll with Zelle?? Now\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/ag/zelle/p2pmarketing\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_999_Consumer_SBA_3Up_M1M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Send and Receive Money with Zelle\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Send &a; Receive Money with Zelle&l;sup&g;??&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;With Zelle&l;sup&g;??&l;/sup&g;, eligible consumer and small business customers can send money safely &a; easily via Citi Online or Citi Mobile&l;sup&g;??&l;/sup&g;.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Zelle_ConSBA_HP21&q;,&q;NAME&q;:&q;Zelle_ConSBA_HP21&q;},&q;copy$$custom_cash_citi_5pct_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;custom_cash_citi_5pct_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI CUSTOM CASH&l;sup&g;SM&l;/sup&g; CARD\&q;,\n\&q;subText\&q;: \&q;The card that automatically adapts to you with 5% cash back\&q;,\n\&q;descriptionText\&q;: \&q;on your &l;strong&g;highest eligible spend category&l;/strong&g; each billing cycle up to the first $500 spent.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-custom-cash-credit-card\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1165_Citi_com_3_Up_M1M7_card_art.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP_763_Citicom_Legacy_Background.png\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/Citicom2_1170_Hero-Card-art-720X400.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;The card that automatically adapts to you with 5% cash back\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP_763_Citicom_Legacy_hero.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;The card that automatically adapts to you\&q;,\n\&q;mmBody\&q;: \&q;Earn 5% cash back on your &l;strong&g;highest eligible spend category&l;/strong&g; each billing cycle up to the first $500 spent.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;custom_cash_citi_5pct_HP21&q;,&q;NAME&q;:&q;custom_cash_citi_5pct_HP21&q;},&q;copy$$Q420_HYCA200Cash&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q420_HYCA200Cash\&q;,\n\&q;hdText\&q;: \&q;Limited-Time Offer\&q;,\n\&q;subText\&q;: \&q;Earn a $200 Bonus. &l;br/&g;Plus No ATM Fees.\&q;,\n\&q;descriptionText\&q;: \&q;Earn a bonus plus get every ATM fee refunded with a High-Yield Checking Account with required activities. Select Markets Only.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/high-yield/checking/cash/default.htm?channel=onsite&a;Promo_ID=4HAXX6LCQVCHPC&a;intc=2~2~52~1~BANR~2~Q420_HYCA200Cash~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HYCA_200_M1_M7_1120x630_100kb.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HYCA_200_H2_2160x600_200kb.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;High Interest Checking. Smart Move.\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn a $200 Bonus. &l;br/&g;Plus No ATM Fees.\&q;,\n\&q;mmBody\&q;: \&q;Earn a $200 cash bonus plus get every ATM fee refunded with a new High-Yield Checking Account after required activities. Select Markets Only.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q420_HYCA200Cash&q;,&q;NAME&q;:&q;Q420_HYCA200Cash&q;},&q;copy$$Generic_Check_Access_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Generic_Check_Access_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; ACCESS ACCOUNT PACKAGE\&q;,\n\&q;subText\&q;: \&q;Affordable Checking For Less\&q;,\n\&q;descriptionText\&q;: \&q;Cover your checking needs with no overdraft fees, no minimum opening deposit, plus 24/7 access to digital banking.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/banking/checking-account\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_278_Access_3Up_M1M7_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_278_Access_Hero_Image.png\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Affordable Checking For Less\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Affordable Checking For Less\&q;,\n\&q;mmBody\&q;:\&q;Cover your checking needs with no overdraft fees, no minimum opening deposit, plus 24/7 access to digital banking.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check_Access_HP21&q;,&q;NAME&q;:&q;Generic_Check_Access_HP21&q;},&q;copy$$HYSA_HP22&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;HYSA_HP22\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; HIGH-YIELD SAVINGS\&q;,\n\&q;subText\&q;: \&q;Earn More With 1.01% APY\&q;,\n\&q;descriptionText\&q;: \&q;Save faster with unlimited earnings when you open a Citi?? High-Yield Savings Account.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/high-yield/savings/default.htm?channel=onsite&a;Promo_ID=4CEWQH4ZENHPB1&a;intc=1_1_21_6_BANR_2_HYSA2022OPENMKT_HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_2464_3_Up_M1M7_Lifestyle.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP_2464_LegacyH2_2160x600_Lifestyle.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_2464_Hero_20_Lifestyle.png\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Earn more with 1.01% APY\&q;,\n\&q;mmBody\&q;:\&q;Save faster with unlimited earnings when you open a Citi?? High-Yield Savings Account.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYSA_HP22&q;,&q;NAME&q;:&q;HYSA_HP22&q;},&q;copy$$Generic_Save&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Generic_Save\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Simplify&l;br/&g;Your Savings\&q;,\n\&q;descriptionText\&q;: \&q;Easy to access and simple to manage, a Citi Savings Account could be right for you.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/banking/savings/citi.action?ID=citi-savings&a;intc=1~1~52~6~BANR~2~Generic_Save~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP417_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H1_HP417.jpg\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/Generic_Save_Hero.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;light\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Simplify Your Savings\&q;,\n\&q;mmBody\&q;:\&q;Easy to access and simple to manage, a Citi Savings Account could be right for you.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Save&q;,&q;NAME&q;:&q;Generic_Save&q;},&q;copy$$CitiAlerts&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;alertData\&q;: [\n {\n \&q;alertType\&q;: \&q;browser-alert\&q;,\n \&q;url\&q;: \&q;/US/JPS/portal/BrowserWarning.do\&q;,\n \&q;alertMessage\&q;: \&q;Your browser is out of date and not supported. We recommend you update your browser for a better online banking experience. &l;a href=\\\&q;/US/ag/supportedbrowsers/index\\\&q;&g;Learn More&l;/a&g;\&q;,\n \&q;ieTridentVersion\&q;: \&q;7\&q;,\n \&q;edgeVersion\&q;: \&q;14\&q;,\n \&q;chromeVersion\&q;: \&q;72\&q;,\n \&q;firefoxVersion\&q;: \&q;58\&q;,\n \&q;safariVersion\&q;: \&q;11\&q;\n },\n {\n \&q;alertType\&q;: \&q;weather-alert\&q;,\n \&q;alertMessage\&q;: \&q;We&s;re making improvements to your online experience. The site may be unavailable 6/12/22 from 2 AM to 7 AM ET.\&q;,\n \&q;startTime\&q;: \&q;Jun 12, 2022 02:00:00 EST\&q;,\n \&q;endTime\&q;: \&q;Jun 12, 2022 07:01:00 EST\&q;\n },\n {\n \&q;alertType\&q;: \&q;outage-alert\&q;,\n \&q;alertMessage\&q;: \&q;We???re making improvements to your online experience. The site may be unavailable 6/4/22 11:30 PM ET through 6/5/22 7:00 AM ET the following morning and again on 6/5/22 11:30 PM ET through 6/6/22 3:00 AM ET the following morning.\&q;,\n \&q;startTime\&q;: \&q;Jun 4, 2022 23:29:00 EST\&q;,\n \&q;endTime\&q;: \&q;Jun 6, 2022 03:01:00 EST\&q;\n },\n {\n \&q;alertType\&q;: \&q;relevant-alert\&q;,\n \&q;alertMessage\&q;: \&q;Our website will be undergoing routine maintenance this Sunday from 1:00 AM ET to 07:00 AM ET. Most services will be available after 7:00 AM ET; however, If you need urgent assistance, please call the phone number on the back of your card (TTY:711). We apologize for any inconvenience.\&q;,\n \&q;startTime\&q;: \&q;Mar 13, 2022 01:00:00 EST\&q;,\n \&q;endTime\&q;: \&q;Mar 13, 2022 07:01:00 EST\&q;\n },\n {\n \&q;alertType\&q;: \&q;migration-alert\&q;,\n \&q;alertMessage\&q;: \&q;\&q;\n }\n ]\n }&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CitiAlerts&q;,&q;NAME&q;:&q;CitiAlerts&q;},&q;copy$$ACSI_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;ACSI_2018\&q;,\n\&q;hdText\&q;: \&q;COMMITMENT TO SERVICE\&q;,\n\&q;subText\&q;: \&q;Citibank #1 Two Years in a Row 2016-17\&q;,\n\&q;descriptionText\&q;: \&q;Ranked #1 in the 2017 American Customer Satisfaction Index (ACSI) Retail Banking Survey for National Banks.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/acsi/award-winning/customer-satisfaction/default.htm?intc=1~1~52~6~BANR~2~ACSI_2018~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP442_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;ACSI_2018&q;,&q;NAME&q;:&q;ACSI_2018&q;},&q;copy$$Blue_FinancialSelfCare&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Blue_FinancialSelfCare\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Self-Care Tips for Your Money, Mind, and Home\&q;,\n\&q;descriptionText\&q;: \&q;Self-care isn&s;t about big-ticket splurges. Check out cost-effective ways to spread positivity to all aspects of your life.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/well-being/how-to-do-financial-self-care\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP8841_FinancialSelfCare.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Self-Care Tips for Your Money, Mind, and Home\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Blue_FinancialSelfCare&q;,&q;NAME&q;:&q;Blue_FinancialSelfCare&q;},&q;copy$$BLUE_BulletJournaling&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;BLUE_BulletJournaling\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Bullet Journaling is a Pretty Smart Way to Budget\&q;,\n\&q;descriptionText\&q;: \&q;What&s;s bullet journaling? An innovative system that may change your approach to budgeting. Learn how to supercharge your financial to-do list here.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/bullet-journal-financial-planning\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4270_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Bullet Journaling is a Pretty Smart Way to Budget\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BLUE_BulletJournaling&q;,&q;NAME&q;:&q;BLUE_BulletJournaling&q;},&q;copy$$BLUE_GetPromoted&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;BLUE_GetPromoted\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;How to Get Promoted Like a Boss\&q;,\n\&q;descriptionText\&q;: \&q;A promotion can be a game-changer, personally and professionally. Learn insider tips on how to take your career to the next level.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/travel/new-york-itinerary\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4018_GetPromoted.jpg\&q;,\n\&q;imgSmall\&q;:
    \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;y\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;How to Get Promoted Like a Boss\&q;,\n\&q;mmBody\&q;: \&q;A promotion can be a game-changer, personally and professionally. Learn insider tips on how to take your career to the next level.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BLUE_GetPromoted&q;,&q;NAME&q;:&q;HYSA_SaveSmarter0219&q;},&q;copy$$DP2CMI_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;DP2CMI_2019\&q;,\n\&q;hdText\&q;: \&q;CITIBANK RELATIONSHIP PRICING\&q;,\n\&q;subText\&q;: \&q;Put A New Address In Reach\&q;,\n\&q;descriptionText\&q;: \&q;See how to qualify for relationship pricing - get $250 off closing costs or 1/8% up to 5/8% off your mortgage interest rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/portal/template.do?ID=relationship_pricing_landing&a;intc=4~3~21~1~BANR~2~DP2CMI_2019~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4274_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP4274_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Put A New Address In Reach\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Put A New Address In Reach\&q;,\n\&q;mmBody\&q;: \&q;See how to qualify for relationship pricing - get $250 off closing costs or 1/8% up to 5/8% off your mortgage interest rate.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;DP2CMI_2019&q;,&q;NAME&q;:&q;DP2CMI_2019&q;},&q;copy$$CheckQ419_UT700&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CheckQ419_UT700\&q;,\n\&q;hdText\&q;: \&q;FEATURED CHECKING OFFERS\&q;,\n\&q;subText\&q;: \&q;Earn Up To $700\&q;,\n\&q;descriptionText\&q;: \&q;Open new eligible accounts with required activities and earn a cash bonus.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking-tiered-offer/default.htm?sc=onsite-hp&a;intc=1~1~52~6~BANR~2~CheckQ419_UT700~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP7181_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP7181_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn Up To $700\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $700\&q;,\n\&q;mmBody\&q;: \&q;Open new eligible accounts with required activities and earn a cash bonus.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CheckQ419_UT700&q;,&q;NAME&q;:&q;CheckQ419_UT700&q;},&q;copy$$HELOC_Q2_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HELOC_Q2_2018\&q;,\n\&q;hdText\&q;: \&q;HOME EQUITY LINE OF CREDIT\&q;,\n\&q;subText\&q;: \&q;Improve Your Financial Flexibility\&q;,\n\&q;descriptionText\&q;: \&q;Take advantage of a limited-time, low introductory rate on a Home Equity Line of Credit.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/Q2/HELOC/default.htm?intc=1~1~52~6~BANR~2~HELOC_Q2_2018~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP461_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP461_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Improve Your Financial Flexibility\&q;,\n\&q;mmBody\&q;: \&q;Take advantage of a limited-time, low introductory rate on a Home Equity Line of Credit.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HELOC_Q2_2018&q;,&q;NAME&q;:&q;HELOC_Q2_2018&q;},&q;copy$$Generic_Check_CG_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Generic_Check_CG_HP21\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNT \&q;,\n\&q;subText\&q;: \&q;Premium Checking\&q;,\n\&q;descriptionText\&q;: \&q;Enjoy a Citigold relationship with premium banking and lifestyle benefits.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/banking/checking-account\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP273_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP273_Hero2.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Premium Checking\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Premium Checking\&q;,\n\&q;mmBody\&q;: \&q;Enjoy a Citigold relationship with premium banking and lifestyle benefits.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check_CG_HP21&q;,&q;NAME&q;:&q;Generic_Check_CG_HP21&q;},&q;copy$$GlobalCitz_PP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q;: \&q;GlobalCitz_PP\&q;,\n \&q;hdText\&q;: \&q;#GLOBALCITIZEN\&q;,\n \&q;subText\&q;: \&q;Be the Generation to Take Action\&q;,\n \&q;descriptionText\&q;: \&q;Citi is the proud presenting partner of Global Citizen Festival. ??? 9.29.18 ??? Central Park, New York, &l;abbr title=\\\&q;New York\\\&q;&g;NY&l;/abbr&g;\&q;,\n \&q;ctaLabel\&q;: \&q;Learn More\&q;,\n \&q;ctaImage\&q;: \&q;\&q;,\n \&q;ctaLink\&q;: \&q;https://www.globalcitizen.org/en/connect/citi/?intc=1~1~52~6~BANR~2~GlobalCitz_PP~XPX\&q;,\n \&q;linkTarget\&q;: \&q;_blank\&q;,\n \&q;imgLarge\&q;: \&q;/JRS/banners/modules/CITI-GCF_CBOL_r2v1.jpg\&q;,\n \&q;imgSmall\&q;: \&q;\&q;,\n \&q;videoObject\&q;: \&q;\&q;,\n \&q;heroImg1\&q;: \&q;\&q;,\n \&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n \&q;heroImg2\&q;: \&q;\&q;,\n \&q;imgTitle\&q;: \&q;\&q;,\n \&q;prodTitle\&q;: \&q;\&q;,\n \&q;prodImg\&q;: \&q;\&q;,\n \&q;prodFlag\&q;: \&q;\&q;,\n \&q;heroColor\&q;: \&q;dark\&q;,\n \&q;speedBump\&q;: \&q;\&q;,\n \&q;mmTitle\&q;: \&q;Be the Generation to Take Action\&q;,\n \&q;mmBody\&q;: \&q;Citi is the proud presenting partner of Global Citizen Festival. ??? 9.29.18 ??? Central Park, New York, &l;abbr title=\\\&q;New York\\\&q;&g;NY&l;/abbr&g;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;GlobalCitz_PP&q;,&q;NAME&q;:&q;GlobalCitz_PP&q;},&q;copy$$PP18_OTR&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\t\&q;contentID\&q;: \&q;PP18_OTR\&q;,\n\t\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; PRIVATE PASS&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\t\&q;subText\&q;: \&q;Special Access to Buy Preferred Tickets\&q;,\n\t\&q;descriptionText\&q;: \&q;JAY-Z &a; Beyonc?? join forces again on OTR II. Special access to purchase preferred tickets in select cities.\&q;,\n\t\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\t\&q;ctaImage\&q;: \&q;\&q;,\n\t\&q;ctaLink\&q;: \&q;https: //www.citiprivatepass.com/landing/beyonce_jayz.html?intc=1~1~52~6~BANR~2~PP18_OTR~XPX\&q;,\n\t\&q;linkTarget\&q;: \&q;_blank\&q;,\n\t\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP481_M1_M7_3up-IMAGE.jpg\&q;,\n\t\&q;imgSmall\&q;: \&q;\&q;,\n\t\&q;videoObject\&q;: \&q;\&q;,\n\t\&q;heroImg1\&q;: \&q;\&q;,\n\t\&q;heroImg2\&q;: \&q;\&q;,\n\t\&q;imgTitle\&q;: \&q;\&q;,\n\t\&q;prodTitle\&q;: \&q;\&q;,\n\t\&q;prodImg\&q;: \&q;\&q;,\n\t\&q;prodFlag\&q;: \&q;false\&q;,\n\t\&q;speedBump\&q;: \&q;\&q;,\n\t\&q;heroColor\&q;: \&q;dark\&q;,\n\t\&q;mmTitle\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; Private Pass&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\t\&q;mmBody\&q;: \&q;JAY-Z &a;amp; Beyonc?? join forces again on OTR II. Special access to purchase preferred tickets in select cities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PP18_OTR&q;,&q;NAME&q;:&q;PP18_OTR&q;},&q;copy$$Q418Save_PROS&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q418Save_PROS\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.60% APY ($25K minimum balance/qualifying activities).\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/split/nt/default.htm?channel=onsite&a;intc=1~1~52~6~BANR~2~Q418Save_PROS~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2779_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2779_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;mmBody\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.60% APY ($25K minimum balance/qualifying activities).\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q418Save_PROS&q;,&q;NAME&q;:&q;Q418Save_PROS&q;},&q;copy$$Q3Check_600&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q3Check_600\&q;, \n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn $600\&q;, \n\&q;descriptionText\&q;: \&q;Open a new eligible checking and savings account and complete qualifying activities.\&q;, \n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;, \n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/checking/600/default.htm?channel=onsite&a;promo_ID=4BMPU3AK2HCHP6&a;intc=1~1~52~6~BANR~2~Q3Check_600~XPX\&q;, \n\&q;linkTarget\&q;: \&q;_blank\&q;, \n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/M_HP2832.jpg\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/Hero_HP2832.jpg\&q;,\n\&q;imgTitle\&q;: \&q;\&q;, \n\&q;prodTitle\&q;: \&q;\&q;, \n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;, \n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn $600\&q;,\n\&q;mmBody\&q;: \&q;Open a new eligible checking and savings account and complete qualifying activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q3Check_600&q;,&q;NAME&q;:&q;Q3Check_600&q;},&q;copy$$Pri_NoFX&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Pri_NoFX\&q;,\n\&q;hdText\&q;: \&q;DON&s;T PAY TO SPEND ABROAD\&q;,\n\&q;subText\&q;: \&q;No Foreign Exchange Fees\&q;,\n\&q;descriptionText\&q;: \&q;Use your Citibank banking card anywhere around the world without being charged for it.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/pands/detail.do?ID=CitiPriorityOverview&a;intc=1~1~52~6~BANR~2~Pri_NoFX~XPX~#benefits-that-travel\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3091_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3091_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;No Foreign Exchange Fees\&q;,\n\&q;mmBody\&q;: \&q;Use your Citibank banking card anywhere around the world without being charged for it.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Pri_NoFX&q;,&q;NAME&q;:&q;Pri_NoFX&q;},&q;copy$$qrcode&q;:{&q;qrLoginThrottlePercentage&q;:&q;1&q;,&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;qrLoginWhitelistedCCSID&q;:&q;1001111587486,1001111586501,1001111586502,1001111586503,1001111564663,1001111585520,1001111507156,1001111589786,1001111563587,1001111587458,1001111586498,1001111586500,1001111587484,1001111509779,1001111583865,1001111583869,1001111589785,1001111590516,1001111590517,1001111590518,1001111588833,1001111588834,1001111590519,1001111590523,1001111590527,1001111588836,1001111588839,1001111587925,1001111587926,1001111586647,1001111586650,1001111586651,1001111586652,1001111586654,1001111586655,1001111586656,1001111586664,1001111588884,1001111590590,1001111590599,1001111590603,1001111588885,1001111588886,1001111588887,1001111588888,1001111588889,1001111590623,1001137910010,1001155621920,1001161195093,1001171096253,1001163841965,1001181308325,1001163675219,1001163667816,1001163001056,1001139483904,1001174395699,1001131971311,1001185377850,119071087,1001159899770,1001165890372,1001152292659,1119587220,1001149822767,1001137902802,1001167961503&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;QrLoginParameters&q;:{&q;qrCodeModalDescription&q;:&q;Sign on to Citi.com with Citi Mobile?? App, instead of your User ID and password, for enhanced security.&q;,&q;qrCodeModalStep2TextHeading&q;:&q;Step 2&q;,&q;qrCodeModalStep2Text&q;:&q;Hold your phone steady on the QR Code. Once in focus, it will automatically scan the QR Code.&q;,&q;qrCodeModalStepsIntroductionText&q;:&q;Here???s How It Works:&q;,&q;qrCodeModalTitleNote&q;:&q;Note: Only customers who are enrolled in Face ID??, Touch ID??, Biometrics or 6-Digit PIN are eligible to sign on using QR Code.&q;,&q;qrCodeModalStep1Condition&q;:&q;*Can also go to: Profile &g; Security Center &g; Citi?? Trusted Identity&q;,&q;qrCodeModalStep3TextHeading&q;:&q;Step 3&q;,&q;qrCodeModalStep1TextHeading&q;:&q;Step 1&q;,&q;qrCodeModalStep3Text&q;:&q;When the QR Code is scanned, you&s;ll be signed on to Citi.com.&q;,&q;qrCodeModalStep1Text&q;:&q;Open Citi Mobile?? App and select QR Code* from the Sign On screen.&q;,&q;qrLoginLink&q;:&q;Sign On with the Citi Mobile?? App&q;,&q;qrCodeModalTitle&q;:&q;Access Citi.com With QR Code&q;,&q;qrCodeModalScanText&q;:&q;Scan this QR code using your Citi Mobile?? App&q;,&q;qrCodeModalRefreshText&q;:&q;QR Code refreshes every 45 seconds.&q;},&q;isQRLoginWhitelistAll&q;:&q;false&q;,&q;CONTENT_ID&q;:&q;qrcode&q;,&q;NAME&q;:&q;qrcode&q;},&q;copy$$Q1CD_2020&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q1CD_2020\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT\&q;,\n\&q;subText\&q;: \&q;Lock in a 1.60% APY\&q;,\n\&q;descriptionText\&q;: \&q;Open an 8-month Certificate of Deposit with a $10,000 minimum balance and earn a high-yield rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/certificate-of-deposit-promotion/8-month/default.htm?intc=1~1~52~6~BANR~2~Q1CD_2020~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6504_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6504_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Lock in a 1.60% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Lock in a 1.60% APY\&q;,\n\&q;mmBody\&q;: \&q;Open an 8-month Certificate of Deposit with a $10,000 minimum balance and earn a high-yield rate.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q1CD_2020&q;,&q;NAME&q;:&q;Q1CD_2020&q;},&q;copy$$HYS_SaveOOBTA_Dont&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYS_SaveOOBTA_Dont\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; ACCELERATE SAVINGS\&q;,\n\&q;subText\&q;: \&q;Don&s;t Miss Out on 1.40% APY\&q;,\n\&q;descriptionText\&q;: \&q;Take advantage of one of our highest rates with no minimum opening deposit or limit on earnings. Select markets only.\&q;,\n\&q;ctaLabel\&q;: \&q;Get Details\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings/high-yield-savings/default.htm?channel=onsite&a;promo_ID=4CEWQH4ZENCHPC&a;intc=1~1~52~6~BANR~2~HYS_SaveOOBTA_Dont~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HYSA_M1M7_3Up.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HYSA_H2_LiteSignOn.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Don&s;t Miss Out on 1.40% APY\&q;,\n\&q;mmBody\&q;: \&q;Take advantage of one of our highest rates with no minimum opening deposit or limit on earnings. Select markets only.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYS_SaveOOBTA_Dont&q;,&q;NAME&q;:&q;HYS_SaveOOBTA_Dont&q;},&q;copy$$Generic_Check&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Generic_Check\&q;,\n\&q;hdText\&q;: \&q;CITI CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Bank Your&l;br/&g;Own Way\&q;,\n\&q;descriptionText\&q;: \&q;Get more than just a bank account. Get a package of benefits and services plus convenient access and smart technology.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/banking/citi.action?ID=banking-overview&a;intc=1~1~52~6~BANR~2~Generic_Check~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP418_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H1_HP418.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Generic_Check_HeroSection.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;light\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Bank Your Own Way\&q;,\n\&q;mmBody\&q;:\&q;Get more than just a bank account. Get a package of benefits and services plus convenient access and smart technology.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check&q;,&q;NAME&q;:&q;Generic_Check&q;},&q;copy$$20Q1Save_CCP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;20Q1Save_CCP\&q;,\n\&q;hdText\&q;: \&q;SAVINGS OFFER\&q;,\n\&q;subText\&q;: \&q;Earn 1.50% Promo Rate &a; 0.45% APY\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/c/default.htm?package=cp&a;intc=1~1~52~6~BANR~2~20Q1Save_CCP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6405_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6405_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.45% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.45% APY\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;20Q1Save_CCP&q;,&q;NAME&q;:&q;20Q1Save_CCP&q;},&q;copy$$CARDS_BLUE_LaverneCox&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CARDS_BLUE_LaverneCox\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Laverne Cox on Building a More Equal and Empathetic Future\&q;,\n\&q;descriptionText\&q;: \&q;Actress and activist, Laverne Cox, has made it her project to redefine how transgender and non-binary people are seen and heard.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/culture/Laverne-Cox-On-Driving-Change-and-Inclusivity\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/Laverne-Cox_Banner.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_BLUE_LaverneCox&q;,&q;NAME&q;:&q;CARDS_BLUE_LaverneCox&q;},&q;copy$$Q2CMI_2020_Grow&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q2CMI_2020_Grow\&q;,\n\&q;hdText\&q;: \&q;CITIBANK RELATIONSHIP PRICING\&q;,\n\&q;subText\&q;: \&q;Mortgage Discounts For Room To Grow\&q;,\n\&q;descriptionText\&q;: \&q;Take the next step with relationship pricing ??? get $250 off closing costs or 1/8% up to 5/8% off your mortgage interest rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/portal/template.do?ID=relationship_pricing_landing&a;intc=2~2~52~1~BANR~2~Q2CMI_2020_Grow~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/CMI_RoomtoGrow_3-Up_M1_M7_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/CMI_RoomtoGrow_H2_Image.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Mortgage Discounts For Room To Grow\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Mortgage Discounts For Room To Grow\&q;,\n\&q;mmBody\&q;: \&q;Take the next step with relationship pricing ??? get $250 off closing costs or 1/8% up to 5/8% off your mortgage interest rate.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2CMI_2020_Grow&q;,&q;NAME&q;:&q;Q2CMI_2020_Grow&q;},&q;copy$$CITI_RewardsPlus_18&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CITI_RewardsPlus_18\&q;,\n\&q;hdText\&q;: \&q;CITI REWARDS+&l;sup&g;&a;reg;&l;/sup&g; CARD\&q;,\n\&q;subText\&q;: \&q;Earn 20,000 bonus points\&q;,\n\&q;descriptionText\&q;: \&q;after qualifying purchases plus our low intro APR for over one year.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-rewards-plus-credit-card?afc=106\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1615_Rewards_Plus_3Up-module-new_card_art.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3443_H.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_1615_Updated_RewardsPlus_hero.png\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn 20,000 bonus points\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP_1615_Updated_RewardsPlus_hero.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 20,000 bonus points\&q;,\n\&q;mmBody\&q;:\&q;After qualifying purchases plus our low intro APR for over one year.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CITI_RewardsPlus_18&q;,&q;NAME&q;:&q;CITI_RewardsPlus_18&q;},&q;copy$$BasicChk_081017&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;BasicChk_081017\&q;,\n\&q;hdText\&q;: \&q;BASIC BANKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;A Better &l;br /&g;Way To Bank\&q;,\n\&q;descriptionText\&q;: \&q;Unlimited check writing, $0 Minimum Initial Deposit required and over 30,000 ATM locations nationwide. Simple banking.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/17/checking/basic/generic/default.htm?Promo_ID=CZ92&a;intc=1~1~52~6~BANR~2~BasicChk_081017~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP358_M1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP358_H1.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;theme-dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;A Better Way to Bank\&q;,\n\&q;mmBody\&q;: \&q;Unlimited check writing, $0 Minimum Initial Deposit required and over 30,000 ATM locations nationwide. Simple banking.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BasicChk_081017&q;,&q;NAME&q;:&q;BasicChk_081017&q;},&q;copy$$CITIGOLD_SavvyTravelers&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CITIGOLD_SavvyTravelers\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Here&s;s How User Reviews Actually Help Savvy Travelers\&q;,\n\&q;descriptionText\&q;: \&q;User review websites offer travelers a wealth of information. Travel pro Seth Kugel shares how he makes the most of their tips.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/travel/seth-kugel-on-travel-website-reviews\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4019_SavvyTravelers.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;y\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Here&s;s How User Reviews Actually Help Savvy Travelers\&q;,\n\&q;mmBody\&q;: \&q;A promotion can be a game-changer, personally and professionally. Learn insider tips on how to take your career to the next level.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CITIGOLD_SavvyTravelers&q;,&q;NAME&q;:&q;HYSA_SaveSmarter0219&q;},&q;copy$$PRIORITY_CDLaddering&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;PRIORITY_CDLaddering\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;How a CD Laddering Strategy can Elevate Your Savings\&q;,\n\&q;descriptionText\&q;: \&q;When it comes to your savings, you don???t have to trade accessibility for high yield. Check out tips from these experts about investing in CDs.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/savings/cd-ladder-strategy-for-high-interest-saving\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/PRIORITY_CDLaddering.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/PRIORITY_CDLaddering.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;How a CD Laddering Strategy can Elevate Your Savings\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;How a CD Laddering Strategy can Elevate Your Savings\&q;,\n\&q;mmBody\&q;: \&q;When it comes to your savings, you don???t have to trade accessibility for high yield. Check out tips from these experts about investing in CDs.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PRIORITY_CDLaddering&q;,&q;NAME&q;:&q;PRIORITY_CDLaddering&q;},&q;copy$$Generic_Check_Priority_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Generic_Check_Priority_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI PRIORITY ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Checking With Support\&q;,\n\&q;descriptionText\&q;: \&q;Take advantage of priority checking with dedicated support, waived fees and preferred pricing on select banking services.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/banking/checking-account\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP270_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP270_Hero2.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Checking With Support\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Checking With Support\&q;,\n\&q;mmBody\&q;: \&q;Take advantage of priority checking with dedicated support, waived fees and preferred pricing on select banking services.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check_Priority_HP21&q;,&q;NAME&q;:&q;Generic_Check_Priority_HP21&q;},&q;copy$$cards_holiday_banner&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;cards_holiday_banner\&q;,\n\&q;hdText\&q;: \&q;\&q;,\n\&q;subText\&q;: \&q;\&q;,\n\&q;descriptionText\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/compare-credit-cards/citi.action?ID=most-popular-credit-cards&a;afc=1B3&a;intc=7~1~64~1~BANR~1~citicom_holiday2018\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3274_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Holiday Spending Solutions\&q;,\n\&q;mmBody\&q;: \&q;Check out great offers on Citi&s;s Double Cash and Simplicity credit cards to help with your holiday spending.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;cards_holiday_banner&q;,&q;NAME&q;:&q;cards_holiday_banner&q;},&q;copy$$LAM_ResponsibleInvest&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;LAM_ResponsibleInvest\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Build a Portfolio You Love and Invest Responsibly\&q;,\n\&q;descriptionText\&q;: \&q;Bola Sokunbi, The Clever Girl Finance founder, shares how to build a financial portfolio that reflects your social conscience.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/investing/socially-responsible-investing\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP8842_LAM_ResponsibleInvest.jpg\&q;,\n\&q;imgSmall\&q;:
    \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;High Interest Checking. Smart Move.\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Build a Portfolio You Love and Invest Responsibly\&q;,\n\&q;mmBody\&q;: \&q;Bola Sokunbi, The Clever Girl Finance founder, shares how to build a financial portfolio that reflects your social conscience.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LAM_ResponsibleInvest&q;,&q;NAME&q;:&q;LAM_ResponsibleInvest&q;},&q;copy$$Q3CD_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q3CD_2019\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn A Guaranteed 2.00% APY Today\&q;,\n\&q;descriptionText\&q;: \&q;Put more journeys in reach with a 1-Year Certificate of Deposit available on balances of $25,000 or more.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/certificate-of-deposit-promotion/cd/default.htm?channel=onsite&a;intc=1~1~52~6~BANR~2~Q3CD_2019~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5046_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5046_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn A Guaranteed 2.00% APY Today\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn A Guaranteed 2.00% APY Today\&q;,\n\&q;mmBody\&q;: \&q;Put more journeys in reach with a 1-Year Certificate of Deposit available on balances of $25,000 or more.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q3CD_2019&q;,&q;NAME&q;:&q;Q3CD_2019&q;},&q;copy$$Generic_Save_Sec_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Generic_Save_Sec_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT \&q;,\n\&q;subText\&q;: \&q;Save with Confidence\&q;,\n\&q;descriptionText\&q;: \&q;Enjoy peace of mind with a savings account that is secured up to FDIC limits and offers easy transfers and balance alerts.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/banking/citi.action?ID=savings-account-overview\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP279_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP279_Hero2.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Save with Confidence\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Save with Confidence\&q;,\n\&q;mmBody\&q;: \&q;Enjoy peace of mind with a savings account that is secured up to FDIC limits and offers easy transfers and balance alerts.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Save_Sec_HP21&q;,&q;NAME&q;:&q;Generic_Save_Sec_HP21&q;},&q;copy$$Pride_Intro&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Pride_Intro\&q;,\n\&q;hdText\&q;: \&q;TAKING A STAND\&q;,\n\&q;subText\&q;: \&q;The First Step to Progress \&q;,\n\&q;descriptionText\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Pride_Intro&q;,&q;NAME&q;:&q;Pride_Intro&q;},&q;copy$$Q4_HELOC_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Q4_HELOC_2018\&q;, \n\&q;hdText\&q;: \&q;HOME EQUITY LINE OF CREDIT\&q;,\n\&q;subText\&q;: \&q;Improve Your Financial Flexibility\&q;, \n\&q;descriptionText\&q;: \&q;Take advantage of a limited-time, low introductory rate on a Home Equity Line of Credit.\&q;, \n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;, \n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/HELOC/default.htm?intc=1~1~52~6~BANR~2~Q4_HELOC_2018~XPX\&q;, \n\&q;linkTarget\&q;: \&q;_blank\&q;, \n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2777_M.jpg\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2777_H.jpg\&q;,\n\&q;imgTitle\&q;: \&q;\&q;, \n\&q;prodTitle\&q;: \&q;\&q;, \n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;, \n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Improve Your Financial Flexibility\&q;,\n\&q;mmBody\&q;:\&q;Take advantage of a limited-time, low introductory rate on a Home Equity Line of Credit.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q4_HELOC_2018&q;,&q;NAME&q;:&q;Q4_HELOC_2018&q;},&q;copy$$premier_citi_ban_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;premier_citi_ban_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI PREMIER&l;sup&g;??&l;/sup&g; CARD\&q;,\n\&q;subText\&q;: \&q;Earn 60,000 bonus points\&q;,\n\&q;descriptionText\&q;: \&q;after spending $4,000 within the first 3 months of account opening. Redeemable for $600 in gift cards.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-premier-credit-card?afc=106\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1247_Premier_Module3_up.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP_1247_Premier_10_Background_Legacy.jpg\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP_1957_Premier_Cards_Update.png\&q;,\n\&q;copyBgColor\&q; : \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP_1247_Premier_CardArt_10_Legacy.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Earn 60,000 bonus points\&q;,\n\&q;mmBody\&q;: \&q;after spending $4,000 within the first 3 months of account opening with the Citi Premier&l;sup&g;??&l;/sup&g; Card. Redeemable for $600 in gift cards.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;premier_citi_ban_HP21&q;,&q;NAME&q;:&q;premier_citi_ban_HP21&q;},&q;copy$$20Q1Save_CCG&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;20Q1Save_CCG\&q;,\n\&q;hdText\&q;: \&q;SAVINGS OFFER\&q;,\n\&q;subText\&q;: \&q;Earn 1.50% Promo Rate &a; 0.45% APY\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/c/default.htm?package=cg&a;intc=1~1~52~6~BANR~2~20Q1Save_CCG~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6405_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6405_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.45% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.45% APY\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;20Q1Save_CCG&q;,&q;NAME&q;:&q;20Q1Save_CCG&q;},&q;copy$$Zelle2017&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Zelle2017\&q;,\n\&q;hdText\&q;: \&q;CITI MOBILE&l;sup&g;&a;reg;&l;/sup&g; APP\&q;,\n\&q;subText\&q;: \&q;Ready, Set, Transfer\&q;,\n\&q;descriptionText\&q;: \&q;Zelle&l;sup&g;&a;reg;&l;/sup&g; is a fast and simple way to send money &a;ndash; now on the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App for iPhone&l;sup&g;&a;reg;&l;/sup&g; and Citi Online.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/p2ptransfer/p2pmarketing/flow.action?intc=1~1~52~6~BANR~2~Zelle2017~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP467_M.png\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP467_H.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Ready, Set, Transfer\&q;,\n\&q;mmBody\&q;:\&q;Zelle&l;sup&g;&a;reg;&l;/sup&g; is a fast and simple way to send money &a;ndash; now on the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App for iPhone&l;sup&g;&a;reg;&l;/sup&g; and Citi Online.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Zelle2017&q;,&q;NAME&q;:&q;Zelle2017&q;},&q;copy$$Citigold_CheckLTO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Citigold_CheckLTO\&q;,\n\&q;hdText\&q;: \&q;WEALTH ON YOUR TERMS\&q;,\n\&q;subText\&q;: \&q;Earn a $1,500 Bonus with Citigold&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;descriptionText\&q;: \&q;Start a new Citigold relationship to earn a cash bonus with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/citigold/offer/default.htm?Promo_ID=4GZ7YTFGUDCHPG&a;intc=1~1~52~6~BANR~2~Citigold_CheckLTO~HPQ342020\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6094_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6094_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn a $1,500 Bonus with Citigold\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn a $1,500 Bonus with Citigold&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Start a new Citigold relationship to earn a cash bonus with required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Citigold_CheckLTO&q;,&q;NAME&q;:&q;Citigold_CheckLTO&q;},&q;copy$$Generic_Save_Flex_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Generic_Save_Flex_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Your Savings, Your Way\&q;,\n\&q;descriptionText\&q;: \&q;Open a savings account that empowers you to earn interest and transfer money easily with no minimum opening deposit.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/banking/citi.action?ID=savings-account-overview\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_275_3Up_M1M7_Flex.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP_275_Hero_Flex.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Your Savings, Your Way\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Your Savings, Your Way\&q;,\n\&q;mmBody\&q;: \&q;Open a savings account that empowers you to earn interest and transfer money easily with no minimum opening deposit.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Save_Flex_HP21&q;,&q;NAME&q;:&q;Generic_Save_Flex_HP21&q;},&q;copy$$CITIGOLD_EmptyNest1&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CITIGOLD_EmptyNest1\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Finding Fullness in an Empty Nest\&q;,\n\&q;descriptionText\&q;: \&q;What would it feel like to call the empty nest years something else?\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/milestones/empty-nest-syndrome\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3636_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CITIGOLD_EmptyNest1&q;,&q;NAME&q;:&q;CITIGOLD_EmptyNest1&q;},&q;copy$$CSI_M8_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CSI_M8_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI?? SELF INVEST\&q;,\n\&q;subText\&q;: \&q;Invest with $0 Commission\&q;,\n\&q;descriptionText\&q;: \&q;Take control with self-directed trading from Citi Personal Wealth Management.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/citi-self-invest\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1262_CitiSelfInvest_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Invest with $0 Commission\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;INVESTMENTS NOT FDIC INSURED ??? NO BANK GUARANTEES ??? MAY LOSE VALUE\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CSI_M8_HP21&q;,&q;NAME&q;:&q;CSI_M8_HP21&q;},&q;copy$$HYCA_NoATMFee&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYCA_NoATMFee\&q;,\n\&q;hdText\&q;: \&q;HIGH-YIELD CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;No ATM Fees.&l;br/&g; Smart Move. \&q;,\n\&q;descriptionText\&q;: \&q;Bank smart with unlimited ATM fee reimbursements and a high-yield checking account. Available in select markets.\&q;,\n\&q;ctaLabel\&q;: \&q;Get Details\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking/high-yield-checking/default.htm?Promo_ID=4FWDQVC8TKCHPA&a;intc=1~1~21~1~BANR~2~HYCA_NoATMFee~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HYCA_NoATMFee_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HYCA_NoATMFee_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;No ATM Fees. Smart Move.\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;No ATM Fees. Smart Move.\&q;,\n\&q;mmBody\&q;: \&q;Bank smart with unlimited ATM fee reimbursements and a high-yield checking account. Available in select markets.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYCA_NoATMFee&q;,&q;NAME&q;:&q;HYCA_NoATMFee&q;},&q;copy$$AAPLAT_citicomRED_aug2016_DPO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;AAPLAT_citicomRED_aug2016_DPO\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; / AADVANTAGE&l;sup&g;&a;reg;&l;/sup&g; PLATINUM SELECT&l;sup&g;&a;reg;&l;/sup&g; WORLD ELITE&l;sup&g;TM&l;/sup&g; MASTERCARD&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Travel With Ease\&q;,\n\&q;descriptionText\&q;: \&q;Enjoy preferred boarding and first checked bag free on domestic travel, plus earn {{pricingType.RwBonusAmount1}} American Airlines AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles after qualifying purchases.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/credit-card-details/citi.action?ID=citi-aadvantage-platinum-elite-credit-card&a;amp;afc=106&a;amp;intc=1~1~52~6~BANR~1~AAPLAT_citicomRED_aug2016~4XSX16S82106L10102W\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP434_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H1_HP434_background.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;CITI(R) / AADVANTAGE(R) PLATINUM SELECT(R) CARD\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/AAPLAT_hero_card.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;You Deserve to Travel with Ease, So Enjoy...\&q;,\n\&q;mmBody\&q;:\&q;Preferred boarding and first checked bag free on domestic travel, plus earn {{pricingType.RwBonusAmount1}} American Airlines AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles after qualifying purchases.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;AAPLAT_citicomRED_aug2016_DPO&q;,&q;NAME&q;:&q;AAPLAT_citicomRED_aug2016_DPO&q;},&q;copy$$Q119Check_200&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119Check_200\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn $200\&q;,\n\&q;descriptionText\&q;: \&q;Open a new eligible checking account and complete required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/checking/200/default.htm?channel=onsite&a;promo_ID=4CY5L9V843CHP2&a;intc=1~1~52~6~BANR~2~Q119Check_200~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3375_M1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3375_H1.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn $200\&q;,\n\&q;mmBody\&q;: \&q;Open a new eligible checking account and complete required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119Check_200&q;,&q;NAME&q;:&q;Q119Check_200&q;},&q;copy$$RACIALEQBAN&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;RACIALEQBAN\&q;,\n\&q;hdText\&q;: \&q;RACIAL EQUITY AT CITI\&q;,\n\&q;subText\&q;: \&q;Action for Racial Equity\&q;,\n\&q;descriptionText\&q;: \&q;We&s;re marshaling the talent and capabilities of our institution like never before to help communities of color build wealth and strong financial futures.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://citi.com/citi/racial-equity/ \&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP8564_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/RACIALQBAN.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Action for Racial Equity\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;RACIALEQBAN&q;,&q;NAME&q;:&q;RACIALEQBAN&q;},&q;copy$$Save_Hub2&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Save_Hub2\&q;,\n\&q;hdText\&q;: \&q;YOUR SAVINGS MADE SIMPLE\&q;,\n\&q;subText\&q;: \&q;How to Choose the Right Bank Account\&q;,\n\&q;descriptionText\&q;: \&q;Here&s;s a simple guide to the main types of accounts you can open at a bank.\&q;,\n\&q;ctaLabel\&q;: \&q;Read More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/portal/template.do?ID=compare-savings-checking-cds-and-money-market-accounts&a;intc=1~1~52~6~BANR~2~Save_Hub2~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5904_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;How to Choose the Right Bank Account\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;How to Choose the Right Bank Account\&q;,\n\&q;mmBody\&q;: \&q;Here&s;s a simple guide to the main types of accounts you can open at a bank.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Save_Hub2&q;,&q;NAME&q;:&q;Save_Hub2&q;},&q;copy$$Save_Hub1&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Save_Hub1\&q;,\n\&q;hdText\&q;: \&q;YOUR SAVINGS MADE SIMPLE\&q;,\n\&q;subText\&q;: \&q;What is a Savings Account?\&q;,\n\&q;descriptionText\&q;: \&q;A savings account is the simplest way to set aside money for your future needs.\&q;,\n\&q;ctaLabel\&q;: \&q;Read More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/portal/template.do?ID=what-is-a-savings-account&a;intc=1~1~52~6~BANR~2~Save_Hub1~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5903_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;What is a Savings Account?\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;What is a Savings Account?\&q;,\n\&q;mmBody\&q;: \&q;A savings account is the simplest way to set aside money for your future needs.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Save_Hub1&q;,&q;NAME&q;:&q;Save_Hub1&q;},&q;copy$$Q119Save_PROS&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119Save_PROS\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.15% Promo Interest Rate/0.60% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/split/nt/default.htm?channel=onsite&a;intc=1~1~52~6~BANR~2~Q119Save_PROS~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3386_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3386_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi Savings Account\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.15% Promo Interest Rate/0.60% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119Save_PROS&q;,&q;NAME&q;:&q;Q119Save_PROS&q;},&q;copy$$CG_Concierge&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CG_Concierge\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD&l;sup&g;&a;reg;&l;/sup&g; CONCIERGE\&q;,\n\&q;subText\&q;: \&q;Your Citigold Concierge is Available 24/7\&q;,\n\&q;descriptionText\&q;: \&q;A complimentary service available to you for exclusive dinner reservations, travel planning and tickets to popular shows.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/JRS/pands/detail.do?ID=CitigoldOverview&a;section=citigold-concierge&a;intc=1~1~52~6~BANR~2~CG_Concierge~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP479_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP479_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Your Citigold&l;sup&g;&a;reg;&l;/sup&g; Concierge is Available 24/7\&q;,\n\&q;mmBody\&q;: \&q;A complimentary service available to you for exclusive dinner reservations, travel planning and tickets to popular shows.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CG_Concierge&q;,&q;NAME&q;:&q;CG_Concierge&q;},&q;copy$$CARDS_GetOrganized&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CARDS_GetOrganized\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;4 Ways to Get Organized &a; Hit This Week&s;s Goals\&q;,\n\&q;descriptionText\&q;: \&q;Lauren Tucker of An Organized Life has 4 ways to redesign your life on Sunday to hit your mark by Friday.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/well-being/productivity/how-to-get-organized-with-lauren-tucker\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/528-Citibank_Illustrations_Article_01.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;4 Ways to Get Organized &a; Hit This Week&s;s Goals\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_GetOrganized&q;,&q;NAME&q;:&q;CARDS_GetOrganized&q;},&q;copy$$CWWN&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CWWN\&q;,\n\&q;hdText\&q;: \&q;GLOBAL BRAND\&q;,\n\&q;subText\&q;: \&q;Citi Welcome What&s;s Next\&q;,\n\&q;descriptionText\&q;: \&q;At Citi, we empower people who are out to change the world. Because tomorrow belongs to those who welcome it with open arms.\&q;,\n\&q;ctaLabel\&q;: \&q;Take a Look\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citigroup.com/citi/progress-maker-stories/#CITI-WELCOME\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4782_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi Welcome What&s;s Next\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CWWN&q;,&q;NAME&q;:&q;CWWN&q;},&q;copy$$20Q1Save_CCBA&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;20Q1Save_CCBA\&q;,\n\&q;hdText\&q;: \&q;SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/c/default.htm?package=cba&a;intc=1~1~52~6~BANR~2~20Q1Save_CCBA~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6405_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6405_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;20Q1Save_CCBA&q;,&q;NAME&q;:&q;20Q1Save_CCBA&q;},&q;copy$$LifeMoneyGold&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;LifeMoneyGold\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Tips for All of Life&s;s Moments\&q;,\n\&q;descriptionText\&q;: \&q;Make the most of your time and money, from planning your next getaway to buying a home.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com?intc=1~1~52~6~BANR~2~LifeMoneyGold~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2941_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2941_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Life and Money by Citi&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Make the most of your time and money, from planning your next getaway to buying a home.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LifeMoneyGold&q;,&q;NAME&q;:&q;LifeMoneyGold&q;},&q;copy$$COVID19BAN&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;COVID19BAN\&q;,\n\&q;hdText\&q;: \&q;WE ARE HERE TO HELP\&q;,\n\&q;subText\&q;: \&q;Citi&s;s Response to COVID-19\&q;,\n\&q;descriptionText\&q;: \&q;We&s;re addressing the pandemic by helping clients and providing funds to frontline healthcare workers, No Kid Hungry and more.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://citi.com/citi/covid-19.htm\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP7244_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi&s;s Response to COVID-19\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;COVID19BAN&q;,&q;NAME&q;:&q;COVID19BAN&q;},&q;copy$$Q3_2020_HELOC&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q3_2020_HELOC\&q;,\n\&q;hdText\&q;: \&q;HOME EQUITY LINE OF CREDIT\&q;,\n\&q;subText\&q;:
    \&q;Find More Comfort in Your Home\&q;,\n\&q;descriptionText\&q;: \&q;Use the equity in your home to find peace of mind with our low, limited-time introductory rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/HELOC/Rate/default.htm?intc=1~1~52~6~BANR~2~Q3_HELOC_2020~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/2020_Q3_HELOC_M1-M7-3UP.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/2020_Q3_HELOC_H2.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Q3_2020_HELOC.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Find More Comfort in Your Home\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Find More Comfort in Your Home\&q;,\n\&q;mmBody\&q;: \&q;Use the equity in your home to find peace of mind with our low, limited-time introductory rate.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q3_2020_HELOC&q;,&q;NAME&q;:&q;Q3_2020_HELOC&q;},&q;copy$$GigEcon&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;GigEcon\&q;,\n\&q;hdText\&q;: \&q;GROWTH\&q;,\n\&q;subText\&q;: \&q;Making the Gig Economy Work for You\&q;,\n\&q;descriptionText\&q;: \&q;Here&a;rsquo;s how you can embrace a freelance career while maintaining your financial goals.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://yourbenefits.citi.com/what-is-the-gig-economy.html?intc=1~1~52~6~BANR~2~GigEcon~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP455_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Making the Gig Economy Work for You\&q;,\n\&q;mmBody\&q;: \&q;Here&a;rsquo;s how you can embrace a freelance career while maintaining your financial goals.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;GigEcon&q;,&q;NAME&q;:&q;GigEcon&q;},&q;copy$$Zelle_Conv_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Zelle_LifeBen_HP21\&q;,\n\&q;hdText\&q;: \&q;ENROLL WITH ZELLE&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;A Fast And Easy Way To Send Money\&q;,\n\&q;descriptionText\&q;: \&q;With Zelle&l;sup&g;&a;reg;&l;/sup&g;, you only need someone&s;s U.S. mobile number or email address to send money via Citi Online or Citi Mobile&l;sup&g;&a;reg;&l;/sup&g;.\&q;,\n\&q;ctaLabel\&q;: \&q;Enroll with Zelle?? Now\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/zelle/p2pmarketing\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1004_Convenience_3Up_M1M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;A Fast And Easy Way To Send Money\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;A Fast And Easy Way To Send Money\&q;,\n\&q;mmBody\&q;:\&q;With Zelle&l;sup&g;&a;reg;&l;/sup&g;, you only need someone&s;s U.S. mobile number or email address to send money via Citi Online or Citi Mobile&l;sup&g;&a;reg;&l;/sup&g;.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Zelle_Conv_HP21&q;,&q;NAME&q;:&q;Zelle_Conv_HP21&q;},&q;copy$$Zelle_LifeBen_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Zelle_LifeBen_HP21\&q;,\n\&q;hdText\&q;: \&q;ENROLL WITH ZELLE&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Splitting Expenses Is Easy With Zelle&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;descriptionText\&q;: \&q;Zelle&l;sup&g;&a;reg;&l;/sup&g; lets you split expenses by sending money to almost anyone with a U.S. bank account via Citi Online or Citi Mobile&l;sup&g;&a;reg;&l;/sup&g;.\&q;,\n\&q;ctaLabel\&q;: \&q;Enroll with Zelle?? Now\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/zelle/p2pmarketing\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1005_LifestyleBenefit_3Up_M1M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Splitting Expenses Is Easy With Zelle\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Splitting Expenses Is Easy With Zelle&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Zelle&l;sup&g;&a;reg;&l;/sup&g; lets you split expenses by sending money to almost anyone with a U.S. bank account via Citi Online or Citi Mobile&l;sup&g;&a;reg;&l;/sup&g;.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Zelle_LifeBen_HP21&q;,&q;NAME&q;:&q;Zelle_LifeBen_HP21&q;},&q;copy$$Q3Check_UT400&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q3Check_UT400\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Checking with a $500 Bonus\&q;,\n\&q;descriptionText\&q;: \&q;Celebrate the season with a cash bonus. Open a new eligible checking and savings account with qualifying activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/checking/500/default.htm?channel=onsite&a;promo_ID=4BMPU3AK2HCHPA&a;intc=1~1~52~6~BANR~2~Q3Check_UT400~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2828_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2828_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Checking with a $500 Bonus\&q;,\n\&q;mmBody\&q;: \&q;Celebrate the season with a cash bonus. Open a new eligible checking and savings account with qualifying activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q3Check_UT400&q;,&q;NAME&q;:&q;Q3Check_UT400&q;},&q;copy$$LifeMoneyBlue&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;LifeMoneyBlue\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Tips for All of Life&s;s Moments\&q;,\n\&q;descriptionText\&q;: \&q;Make the most of your time and money, from planning your next getaway to buying a home.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com?intc=1~1~52~6~BANR~2~LifeMoneyBlue~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2943_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2943_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Life and Money by Citi&a;reg;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Life and Money by Citi&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Make the most of your time and money, from planning your next getaway to buying a home.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LifeMoneyBlue&q;,&q;NAME&q;:&q;LifeMoneyBlue&q;},&q;copy$$3MONCD_PROS&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;3MONCD_PROS\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT\&q;,\n\&q;subText\&q;: \&q;Lock in a 0.60% APY\&q;,\n\&q;descriptionText\&q;: \&q;Open a 3-month Cerfificate of Deposit with a $500 minimum balance and earn a high-yield rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/certificate-of-deposit-promotion/3-month-prospect/default.htm?intc=1~1~52~6~BANR~2~3MONCD_PRO~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP7370_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP7370_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Lock in a 0.60% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Lock in a 0.60% APY\&q;,\n\&q;mmBody\&q;: \&q;Open a 3-month Cerfificate of Deposit with a $500 minimum balance and earn a high-yield rate.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;3MONCD_PROS&q;,&q;NAME&q;:&q;3MONCD_PROS&q;},&q;copy$$CARDS_CreditLineIncrease&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CARDS_CreditLineIncrease\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Is a Credit Line Increase a Good Idea?\&q;,\n\&q;descriptionText\&q;: \&q;Here&s;s the breakdown on what it is and how it can affect your credit score.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/credit-success-tips\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4271_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Is a Credit Line Increase a Good Idea?\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_CreditLineIncrease&q;,&q;NAME&q;:&q;CARDS_CreditLineIncrease&q;},&q;copy$$Save_CashNTP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Save_CashNTP\&q;,\n\&q;hdText\&q;: \&q;SAVINGS OFFER\&q;,\n\&q;subText\&q;: \&q;Earn up to $2,500\&q;,\n\&q;descriptionText\&q;: \&q;Earn a cash bonus from $25 - $2,500 when you open a Citi?? Savings Account with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings/cash-offer/default.htm?intc=1_1_52_3_BANR_2_Save_CashNTP_HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_2879_M3_UP_Q2Savings.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP_2879_Hero_Legacy_Q2Savings.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_2879_Hero_20.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;copyBgColor\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn up to $2,500\&q;,\n\&q;mmBody\&q;: \&q;Earn a cash bonus from $25 - $2,500 when you open a Citi?? Savings Account with required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Save_CashNTP&q;,&q;NAME&q;:&q;Save_CashNTP&q;},&q;copy$$CD_9mo_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CD_9mo_2018\&q;, \n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT OFFER\&q;,\n\&q;subText\&q;: \&q;Earn Up to a 2.50% APY\&q;, \n\&q;descriptionText\&q;: \&q;Open a new Certificate of Deposit, with a minimum deposit of $25,000.\&q;, \n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;, \n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/savings/Certificate-of-Deposit/default.htm?intc=1~1~52~6~BANR~2~CD_9mo_2018~XPX\&q;, \n\&q;linkTarget\&q;: \&q;_blank\&q;, \n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2462M.jpg\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP2462H.jpg\&q;,\n\&q;imgTitle\&q;: \&q;\&q;, \n\&q;prodTitle\&q;: \&q;\&q;, \n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;, \n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up to a 2.50% APY\&q;,\n\&q;mmBody\&q;:\&q;Open a new Certificate of Deposit, with a minimum deposit of $25,000.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CD_9mo_2018&q;,&q;NAME&q;:&q;CD_9mo_2018&q;},&q;copy$$FICO_CITICOM_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;FICO_CITICOM_2018\&q;,\n\&q;hdText\&q;: \&q;FICO&l;sup&g;&a;reg;&l;/sup&g; Score \&q;,\n\&q;subText\&q;: \&q;Check Each Month for Score Changes\&q;,\n\&q;descriptionText\&q;: \&q;Unexplained changes in your FICO&l;sup&g;&a;reg;&l;/sup&g; Score may indicate fraud. Checking your score in the app or online won&s;t impact it.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.cardbenefits.citi.com/Products/FICO-Score.aspx?cmp=CAF~01~181108~BENBUILD~FICO\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3076_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Check Each Month for FICO&l;sup&g;&a;reg;&l;/sup&g; Score Changes\&q;,\n\&q;mmBody\&q;: \&q;Unexplained changes in your score may indicate fraudulent activity. Checking your score, in the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App or online, won&s;t impact it.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;FICO_CITICOM_2018&q;,&q;NAME&q;:&q;FICO_CITICOM_2018&q;},&q;copy$$CGVP_Team&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CGVP_Team\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Financial Guidance\&q;,\n\&q;descriptionText\&q;: \&q;When was the last time a dedicated team had your back? Financial guidance from CPWM.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/pands/detail.do?ID=CitigoldOverview&a;section=dedicated-support&a;intc=1~1~52~6~BANR~2~CGVP_Team~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP478_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED &a;mdash; NO BANK GUARANTEE &a;mdash; MAY LOSE VALUE\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CGVP_Team&q;,&q;NAME&q;:&q;CGVP_Team&q;},&q;copy$$GlobalCitizen2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;GlobalCitizen2018\&q;,\n\&q;hdText\&q;: \&q;CITIZENSHIP\&q;,\n\&q;subText\&q;: \&q;Citi&s;s 2018 Global Citizenship Report\&q;,\n\&q;descriptionText\&q;: \&q;At Citi, we focus on issues that matter to our employees, clients, investors and communities such as global warming and social inequality.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://citi.com/citi/about/citizenship/?intc=1~1~52~6~BANR~2~GlobalCitizen2018~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4640_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi&s;s 2018 Global Citizenship Report\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Citi&s;s 2018 Global Citizenship Report\&q;,\n\&q;mmBody\&q;: \&q;At Citi, we focus on issues that matter to our employees, clients, investors and communities such as global warming and social inequality.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;GlobalCitizen2018&q;,&q;NAME&q;:&q;GlobalCitizen2018&q;},&q;copy$$Save_CashCOK&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Save_CashCOK\&q;,\n\&q;hdText\&q;: \&q;SAVINGS OFFER\&q;,\n\&q;subText\&q;: \&q;Earn up to $2,500\&q;,\n\&q;descriptionText\&q;: \&q;Earn a cash bonus from $25 - $2,500 when you open a Citi?? Savings Account with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings/cash-offer/c/default.htm?intc=1_1_52_3_BANR_2_Save_CashCOK_HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_2879_M3_UP_Q2Savings.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP_2879_Hero_Legacy_Q2Savings.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_2879_Hero_20.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;copyBgColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn up to $2,500\&q;,\n\&q;mmBody\&q;: \&q;Earn a cash bonus from $25 - $2,500 when you open a Citi?? Savings Account with required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Save_CashCOK&q;,&q;NAME&q;:&q;Save_CashCOK&q;},&q;copy$$ecm_mobsec_3818&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;ecm_mobsec_3818\&q;,\n\&q;hdText\&q;: \&q;THE CITI MOBILE&l;sup&g;&a;reg;&l;/sup&g; APP\&q;,\n\&q;subText\&q;: \&q;Designed to be Simple.&l;br&g;Built to be Secure.\&q;,\n\&q;descriptionText\&q;: \&q;Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App features are built to keep you safe without slowing you down, with instant access when you need it.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/portal.c?ID=CitiDigitalServices&a;cmp=PAC~03~160101~CITIMOBL~DigitalServices\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP444_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP476_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Designed to be Simple. Built to be Secure.\&q;,\n\&q;mmBody\&q;: \&q;Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App features are designed to keep you safe without slowing you down.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;ecm_mobsec_3818&q;,&q;NAME&q;:&q;ecm_mobsec_3818&q;},&q;copy$$CHECK21_UT15_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CHECK21_UT15_HP21\&q;,\n\&q;hdText\&q;: \&q;FEATURED CHECKING OFFERS\&q;,\n\&q;subText\&q;: \&q;Earn Up To $1,500\&q;,\n\&q;descriptionText\&q;: \&q;Open a new eligible account and earn a cash bonus with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking/tiered/1500/default.htm?venue=OnsiteHP&a;intc=1_1_52_3_BANR_2_CHECK21_UT15_HP21_HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_2275_MultiTiered_M1_M7_3UP.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP_2275_MultiTier_LegacyH1.jpg\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP_2275_MultiTier_2.0_H1.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn Up To $1,500\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $1,500\&q;,\n\&q;mmBody\&q;: \&q;Open a new eligible account and earn a cash bonus with required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CHECK21_UT15_HP21&q;,&q;NAME&q;:&q;CHECK21_UT15_HP21&q;},&q;copy$$Pri_Wallet&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Pri_Wallet\&q;,\n\&q;hdText\&q;: \&q;WORLD WALLET&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Foreign Cash at Your Convenience\&q;,\n\&q;descriptionText\&q;: \&q;World Wallet&l;sup&g;&a;reg;&l;/sup&g; lets you exchange your money for foreign currency with a no-fee delivery service.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/pands/detail.do?ID=CitiPriorityOverview&a;intc=1~1~52~6~BANR~2~Pri_Wallet~XPX~#benefits-that-travel\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3093_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3093_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;World Wallet&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;World Wallet&l;sup&g;&a;reg;&l;/sup&g; lets you exchange your money for foreign currency with a no-fee delivery service.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Pri_Wallet&q;,&q;NAME&q;:&q;Pri_Wallet&q;},&q;copy$$Q1CD_2020_PRO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q1CD_2020_PRO\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT\&q;,\n\&q;subText\&q;: \&q;Lock in a 1.60% APY\&q;,\n\&q;descriptionText\&q;: \&q;Open an 8-month Certificate of Deposit with a $10,000 minimum balance and earn a high-yield rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/certificate-of-deposit-promotion/8-month-prospect/default.htm?intc=1~1~52~6~BANR~2~Q1CD_2020_PRO~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6504_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6504_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Lock in a 1.60% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Lock in a 1.60% APY\&q;,\n\&q;mmBody\&q;: \&q;Open an 8-month Certificate of Deposit with a $10,000 minimum balance and earn a high-yield rate.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q1CD_2020_PRO&q;,&q;NAME&q;:&q;Q1CD_2020_PRO&q;},&q;copy$$signonFormData&q;:{&q;showNGAForm&q;:&q;true&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;clearUserSuccessMsg&q;:&q;You&s;ve successfully cleared the User ID !&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;deleteUserIdFlow&q;:{&q;firstScreen&q;:{&q;deleteBtnText&q;:&q;Delete&q;,&q;modalTtile&q;:&q;Delete User Id&q;,&q;noteText&q;:&q;Note: If you delete a User ID, it will no longer appear on your list but will always remain active in our system.&q;,&q;selectText&q;:&q;Select a User ID to delete from your list:&q;,&q;cancelBtnText&q;:&q;Cancel&q;},&q;confirmScreen&q;:{&q;confirmBtnText&q;:&q;Confirm&q;,&q;bodyText2&q;:&q;Although the User ID will be deleted, it&s;ll always remain active in our system.&q;,&q;bottomText&q;:&q;Note: To protect your account it is recommended that you delete all User IDs on your current list if this is a public computer.&q;,&q;bodyText1&q;:&q;Please confirm that you&s;d like to delete USER_ID from your current list of User IDs.&q;}},&q;makeBannerAPI&q;:&q;Y&q;,&q;safeModeModal&q;:{&q;modalTitle&q;:&q;Attention&q;,&q;buttonText&q;:&q;Ok&q;,&q;modalContent&q;:&q;Citi Online Access&l;sup&g;&a;reg;&l;/sup&g; is currently down for scheduled maintenance. This may take at least 1 hour.&q;},&q;sessionInactiveMessage&q;:&q;You were signed out due to inactivity, but you can log in again whenever you???re ready.&q;,&q;TEXT&q;:&q;{\n\&q;errorMsg_1\&q;:\&q;Trouble signing on? Select \\\&q;Forgot User ID\\\&q; or \\\&q;Forgot Password\\\&q;.\&q;,\n\&q;errorMsg_2\&q;:\&q;Still having trouble? Select \\\&q;Forgot User ID\\\&q; or \\\&q;Forgot Password\\\&q;.\&q;,\n\&q;passwordRetrievalLink\&q;:\&q;/US/ag/forgot-userid-pwd/account-type\&q;\n}&q;,&q;ngaLogin&q;:{&q;ngaLoginConfig&q;:&q;{\n\&q;loginSuccessRedirectUrl\&q;: \&q;/parent-interstitial\&q;,\n\&q;errorRedirectUrl\&q; : \&q;/nga-login/error\&q;,\n\&q;isE2eEnabled\&q;: true,\n\&q;forcedResetPasswordUrl\&q; : \&q;/forgot-userid-pwd/forced-reset-password\&q;, \n\&q;silentLoginURL\&q; : \&q;/US/JSO/signon/PortalSignon.do\&q;,\n\&q;ngaLoginURL\&q;: \&q;/cbol/security/auth/passwordLogin\&q;,\n\&q;reqLocationChange\&q;: false,\n\&q;loginAPI\&q; : \&q;/cbol/security/auth/passwordLogin\&q;,\n\&q;logoutAPI\&q;: \&q;/cbol/security/auth/passwordLogout\&q;,\n\&q;welcomeScreenUrl\&q;:\&q;/welcome\&q;,\n\&q;tandcUrl\&q;:\&q;/tandc\&q;\n}&q;},&q;signonModal&q;:{&q;userIdBlankErrorHP1&q;:&q;Enter a User ID&q;,&q;passwordName1HP2&q;:&q;passwordNotUsed&q;,&q;usernamePlaceholderHP2&q;:&q;User ID&q;,&q;passwordBlankErrorHP1&q;:&q;Enter a Password&q;,&q;userIdMinChars&q;:&q;3&q;,&q;passwordBlankErrorHP2&q;:&q;Enter a valid Password&q;,&q;forgotUser&q;:{&q;textHP2&q;:&q;Forgot User ID?&q;,&q;action&q;:&q;/US/ag/forgot-userid-pwd/account-type?fuipFlowInd=userID&q;,&q;text&q;:&q;Forgot User ID?&q;},&q;passwordPlaceholder&q;:&q;Password&q;,&q;existingUsers&q;:{&q;deleteUserTextHP2&q;:&q;Clear a User ID&q;,&q;addUserText&q;:&q;A Different User&q;,&q;cdsAddDifferentUserText&q;:&q;A Different User ID&q;,&q;addUserTextHP2&q;:&q;Use Another User&q;,&q;deleteUserText&q;:&q;Clear a User ID&q;,&q;cdsAddDifferentUserTextHP2&q;:&q;Use Another User ID&q;,&q;deleteUserUrl&q;:&q;/US/JSO/signon/DeleteUsername.do&q;},&q;passwordPlaceholderHP2&q;:&q;Password&q;,&q;usernameName1HP2&q;:&q;usernameNotUsed&q;,&q;forgotPassword&q;:{&q;textHP2&q;:&q;Forgot Password?&q;,&q;textCdsOrHP2&q;:&q;or&q;,&q;textCdsQtn&q;:&q;?&q;,&q;textCdsForgotHP2&q;:&q;Forgot&q;,&q;textCdsForgot&q;:&q;Forgot&q;,&q;action&q;:&q;/US/ag/forgot-userid-pwd/account-type?fuipFlowInd=pwd&q;,&q;text&q;:&q;Forgot Password?&q;,&q;textCdsOr&q;:&q;or&q;},&q;modalTitle&q;:&q;Sign On&q;,&q;TEXTHP2&q;:&q;{\n\&q;errorMsg_1\&q;:\&q;Trouble signing on? Select \\\&q;Forgot User ID or Password\\\&q;.\&q;,\n\&q;errorMsg_2\&q;:\&q;Still having trouble signing on? Select \\\&q;Forgot User ID or Password\\\&q;.\&q;,\n\&q;passwordRetrievalLink\&q;:\&q;/US/ag/forgot-userid-pwd/account-type\&q;,\n\&q;errorIconLocation\&q;:\&q;/GFC/branding/img/errorLogo.svg\&q;\n}&q;,&q;passwordShortErrorHP2&q;:&q;Enter a valid Password&q;,&q;passwordName1&q;:&q;passwordNotUsed&q;,&q;usernamePlaceholder&q;:&q;User ID&q;,&q;rememberTextHP2&q;:&q;Do not select if you are using a public computer.&q;,&q;userIdShortError&q;:&q;Your User ID must be greater than 2 characters&q;,&q;userIdBlankErrorHP2&q;:&q;Enter a valid User ID&q;,&q;buttonText&q;:&q;Sign On&q;,&q;usernameName1&q;:&q;usernameNotUsed&q;,&q;activateCard&q;:{&q;textHP2&q;:&q;Activate a card&q;,&q;action&q;:&q;/US/ag/activate/index&q;,&q;text&q;:&q;Activate a card&q;,&q;textCdsActivate&q;:&q;Activate&q;,&q;textCdsActivateHP2&q;:&q;Activate&q;},&q;modalTitleHP2&q;:&q;Sign On&q;,&q;buttonTextHP2&q;:&q;Sign On&q;,&q;hiddenTitleLabel&q;:&q;Citi&s;s online banking services, credit cards, home &a; personal loans, and investments&q;,&q;rememberIdTextHP2&q;:&q;Remember User ID&q;,&q;rememberIdTextHP1&q;:&q;Remember my User ID&q;,&q;userIdShortErrorHP2&q;:&q;Enter a valid User ID&q;,&q;mobileButtonTextHP2&q;:&q;&l;span&g;Sign On With QR Code&l;/span&g;\n&q;,&q;passwordMinChars&q;:&q;6&q;,&q;passwordShortError&q;:&q;Your password must be at least 6 characters long&q;,&q;rememberText&q;:&q;Do not select if you are using a public computer.&q;,&q;registerOnline&q;:{&q;textHP2&q;:&q;Register for online access&q;,&q;textCdsSlash&q;:&q;/&q;,&q;action&q;:&q;/US/ag/bank/registration/set-up-online-access&q;,&q;text&q;:&q;Register for online access&q;,&q;textCdsRegisterHP2&q;:&q;Register&q;,&q;textCdsRegister&q;:&q;Register&q;}},&q;CONTENT_ID&q;:&q;signonFormData&q;,&q;NAME&q;:&q;signonFormData&q;,&q;clearUserIdModal&q;:{&q;desc1&q;:&q;Please select a User ID to clear from your list.&q;,&q;modal_title&q;:&q;Clear User ID&q;,&q;desc2&q;:&q;If you clear a User ID, it will no longer appear on your list but will always remain active in our system for your use.&q;,&q;note&q;:&q;Note: To protect your account, we recommend clearing all User IDs that appear in the Sign On box if this is a public computer.&q;,&q;clear&q;:&q;Clear&q;,&q;cancel_cta_text&q;:&q;Cancel&q;,&q;clear_text&q;:&q;Clear User ID&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;signOffMessage&q;:&q;You&s;ve successfully logged off.&q;,&q;heroBackgroundImgPath&q;:&q;/JRS/banners/hero_background/Citi-futuristic-angles-bg-compressed.jpg&q;},&q;copy$$BLUE_NoahSyndergaard&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;BLUE_NoahSyndergaard\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Noah Syndergaard on Long-Term Financial Wellness\&q;,\n\&q;descriptionText\&q;: \&q;In a candid conversation, Mets pitcher Noah Syndergaard reflects on career, finances and saving for the future.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/culture/sports/noah-syndergaard-on-long-term-financial-wellness\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/00165_NoahSyndergaard.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Noah Syndergaard on Long-Term Financial Wellness\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BLUE_NoahSyndergaard&q;,&q;NAME&q;:&q;BLUE_NoahSyndergaard&q;},&q;copy$$Q119CWA_CG&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119CWA_CG\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD&l;sup&g;&a;reg;&l;/sup&g; BENEFIT\&q;,\n\&q;subText\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; Wealth Advisor\&q;,\n\&q;descriptionText\&q;: \&q;Digital financial planning solution. Designed to answer life&s;s &a;ldquo;what ifs.&a;rdquo;\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/JRS/pands/detail.do?ID=financial-planning-with-citi-wealth-advisor&a;intc=4~3~52~1~BANR~2~Q119CWA_CG~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4277_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;:
    \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi?? Wealth Advisor\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119CWA_CG&q;,&q;NAME&q;:&q;Q119CWA_CG&q;},&q;copy$$Paralympics2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Paralympics2018\&q;,\n\&q;hdText\&q;: \&q;CELEBRATING DIVERSITY\&q;,\n\&q;subText\&q;: \&q;International Paralympic Committee Partner\&q;,\n\&q;descriptionText\&q;: \&q;Citi is honored to partner with the International Paralympic Committee and national teams across the globe.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citigroup.com/citi/news/2018/181206a.htm\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3341_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Paralympics2018&q;,&q;NAME&q;:&q;Paralympics2018&q;},&q;copy$$JDPower_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;JDPower_2019\&q;,\n\&q;hdText\&q;: \&q;THE CITI MOBILE&l;sup&g;&a;reg;&l;/sup&g; APP\&q;,\n\&q;subText\&q;: \&q;An Outstanding Mobile Credit Card Experience\&q;,\n\&q;descriptionText\&q;: \&q;The Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App has been certified by J.D. Power for providing customers with &a;lsquo;An Outstanding Mobile Credit Card experience.&a;rsquo;\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/portal.c?ID=CitiDigitalServices&a;cmp=PAC~03~160101~CITIMOBL~DigitalServices\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4064_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;JDPower_2019&q;,&q;NAME&q;:&q;JDPower_2019&q;},&q;copy$$CHECK21_2CashBack&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CHECK21_2CashBack\&q;,\n\&q;hdText\&q;: \&q;FEATURED CHECKING OFFER\&q;,\n\&q;subText\&q;: \&q;Earn Up To $300\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible checking account with required activities and earn cash back.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking/cash-back/default.htm?Promo_ID=4ZBZYHB6B3CHPA&a;intc=1~1~52~6~BANR~2~CHECK21_2CashBack~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP121_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP121_Hero1.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP121_Hero2.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $300\&q;,\n\&q;mmBody\&q;: \&q;Open an eligible checking account with required activities and earn cash back.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CHECK21_2CashBack&q;,&q;NAME&q;:&q;CHECK21_2CashBack&q;},&q;copy$$Q2InvestGE&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Q2InvestGE\&q;,\n\&q;hdText\&q;: \&q;INVESTMENT OFFER\&q;,\n\&q;subText\&q;: \&q;Earn a Cash Bonus of $1000\&q;,\n\&q;descriptionText\&q;: \&q;Open a new Citi Personal Wealth Management Account with qualifying activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/Q2/savings/investment/existing.htm?intc=1~1~52~6~BANR~2~Q2InvestGE~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP458_M2.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED &a;mdash; NO BANK GUARANTEE &a;mdash; MAY LOSE MONEY\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2InvestGE&q;,&q;NAME&q;:&q;Q2InvestGE&q;},&q;copy$$siteCatData&q;:{&q;siteCatalyst&q;:{&q;siteSection1Text&q;:&q;Public&q;,&q;CountryText&q;:&q;US&q;,&q;channelText&q;:&q;CBOL&q;,&q;pageCatText&q;:&q;Pre-login Sign on page&q;,&q;responsiveText&q;:&q;Yes&q;,&q;pageNameText&q;:&q;Homepage&q;,&q;siteSection2Text&q;:&q;SignOn&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;siteCatData&q;,&q;NAME&q;:&q;siteCatData&q;},&q;copy$$Generic_Check_CBA_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Generic_Check_CBA_HP21\&q;,\n\&q;hdText\&q;: \&q;CITIBANK ACCOUNT PACKAGE\&q;,\n\&q;subText\&q;: \&q;Checking With Perks\&q;,\n\&q;descriptionText\&q;: \&q;Enjoy checking with options to earn rewards and interest, plus no Citi ATM fees when you meet balance requirements.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/banking/checking-account\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_269_CBA_3UP_M1M7_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_269_CBA_Hero_Image.png\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Checking With Perks\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;light\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Checking With Perks\&q;,\n\&q;mmBody\&q;:\&q;Enjoy checking with options to earn rewards and interest, plus no Citi ATM fees when you meet balance requirements.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check_CBA_HP21&q;,&q;NAME&q;:&q;Generic_Check_CBA_HP21&q;},&q;copy$$DP2CD_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;DP2CD_2019\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Adventure Is Closer With 2.50% APY\&q;,\n\&q;descriptionText\&q;: \&q;Set aside savings for the time you&s;ve set aside. Open a new 12-month CD with a $25,000 minimum deposit.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/certificate-of-deposit-promotion/cd/default.htm?intc=4~3~21~1~BANR~2~DP2CD_2019~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4255_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP4255_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Adventure Is Closer With 2.50% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Adventure Is Closer With 2.50% APY\&q;,\n\&q;mmBody\&q;: \&q;Set aside savings for the time you&s;ve set aside. Open a new 12-month CD with a $25,000 minimum deposit.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;DP2CD_2019&q;,&q;NAME&q;:&q;DP2CD_2019&q;},&q;copy$$LNY_HP22&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;LNY_HP22\&q;,\n\&q;hdText\&q;: \&q;2022 LUNAR NEW YEAR OFFER\&q;,\n\&q;subText\&q;: \&q;Celebrate the Year of the Tiger with Us\&q;,\n\&q;descriptionText\&q;: \&q;Get rewarded with a specially curated premium when you deposit $25,000+ into an eligible account with qualifying activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/22/lunar-new-year/default.htm?\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/LNY2022_M1_M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LNY_HP22&q;,&q;NAME&q;:&q;LNY_HP22&q;},&q;copy$$Q2SaveCCG&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Q2SaveCCG\&q;,\n\&q;hdText\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Will You Save Enough To Savor Life?\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible Savings Account and earn 1.35% Promo Interest Rate / 0.41% APY ($25k minimum balance &a; qualifying deposit).\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;http://banking.citibank.com/cbol/18/Q2/savings/ex/default.htm?promocode=ccba&a;intc=1~1~52~6~BANR~2~Q2SaveCCBA~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP457_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP457_H1.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;Will You Save Enough To Savor Life?\&q;,\n\&q;mmBody\&q;:\&q;Open an eligible Savings Account and earn 1.35% Promo Interest Rate / 0.41% APY ($25k minimum balance &a; qualifying deposit).\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2SaveCCG&q;,&q;NAME&q;:&q;Q2SaveCCG&q;},&q;copy$$AA_FAM3_CITICOM&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;AA_FAM3_CITICOM\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; / AADVANTAGE&l;sup&g;&a;reg;&l;/sup&g; CREDIT CARDS\&q;,\n\&q;subText\&q;: \&q;Explore Citi&l;sup&g;&a;reg;&l;/sup&g; / AAdvantage&l;sup&g;&a;reg;&l;/sup&g; Credit Cards\&q;,\n\&q;descriptionText\&q;: \&q;Whether you&s;re a frequent flyer or first&a;mdash;time passenger, Citi has an airline rewards credit card to meet your travel needs.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/compare-credit-cards/citi.action?ID=american-airlines-aadvantage-credit-cards&a;intc=7~1~64~1~080115~1~AAFam3~AA&a;afc=1A3\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3054_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3054_H.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Explore Citi AAdvantage Credit Cards\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP3054_CardArt.png\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Hero_AAdvantage.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Explore Citi&l;sup&g;&a;reg;&l;/sup&g; / AAdvantage&l;sup&g;&a;reg;&l;/sup&g; Credit Cards\&q;,\n\&q;mmBody\&q;:\&q;Whether you&s;re a frequent flyer or first&a;mdash;time passenger, Citi has an airline rewards credit card to meet your travel needs.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;AA_FAM3_CITICOM&q;,&q;NAME&q;:&q;AA_FAM3_CITICOM&q;},&q;copy$$Merch100&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q;: \&q;Merch100\&q;,\n \&q;hdText\&q;: \&q;CITI MERCHANT SERVICES\&q;,\n \&q;subText\&q;: \&q;Let Us Help You Grow Your Business\&q;,\n \&q;descriptionText\&q;: \&q;Switch to Citi Merchant Services and get a rebate on processing fees.\&q;,\n \&q;ctaLabel\&q;: \&q;Learn More\&q;,\n \&q;ctaImage\&q;: \&q;\&q;,\n \&q;ctaLink\&q;: \&q;http://banking.citibank.com/cbol/14/merchantservicesbyfirstdata/default.htm?intc=1~1~52~6~BANR~2~Merch100~XPX\&q;,\n \&q;linkTarget\&q;: \&q;_blank\&q;,\n \&q;imgLarge\&q;: \&q;/JRS/banners/modules/squash-blossom-1120x630v2.jpg\&q;,\n \&q;imgSmall\&q;: \&q;\&q;,\n \&q;videoObject\&q;: \&q;\&q;,\n \&q;heroImg1\&q;: \&q;\&q;,\n \&q;heroImg2\&q;: \&q;\&q;,\n \&q;imgTitle\&q;: \&q;\&q;,\n \&q;prodTitle\&q;: \&q;\&q;,\n \&q;prodImg\&q;: \&q;\&q;,\n \&q;prodFlag\&q;: \&q;\&q;,\n \&q;speedBump\&q;: \&q;\&q;,\n \&q;heroColor\&q;: \&q;\&q;,\n \&q;disclosure\&q;: \&q;\&q;,\n \&q;mmTitle\&q; : \&q;Let Us Help You Grow Your Business\&q;,\n \&q;mmBody\&q; :\&q;Switch to Citi Merchant Services and get a rebate on processing fees.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Merch100&q;,&q;NAME&q;:&q;Merch100&q;},&q;copy$$Q2SaveCCP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Q2SaveCCP\&q;,\n\&q;hdText\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Will You Save Enough To Savor Life?\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible Savings Account and earn 1.35% Promo Interest Rate / 0.41% APY ($25k minimum balance &a; qualifying deposit).\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;http://banking.citibank.com/cbol/18/Q2/savings/ex/default.htm?promocode=ccp&a;intc=1~1~52~6~BANR~2~Q2SaveCCP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP457_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP457_H1.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;Will You Save Enough To Savor Life?\&q;,\n\&q;mmBody\&q;:\&q;Open an eligible Savings Account and earn 1.35% Promo Interest Rate / 0.41% APY ($25k minimum balance &a; qualifying deposit).\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2SaveCCP&q;,&q;NAME&q;:&q;Q2SaveCCP&q;},&q;copy$$AAPLAT_LTO_oct2017&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;AAPLAT_LTO_oct2017\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; / AADVANTAGE&l;sup&g;&a;reg;&l;/sup&g; PLATINUM SELECT&l;sup&g;&a;reg;&l;/sup&g; WORLD ELITE&l;sup&g;TM&l;/sup&g; MASTERCARD&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Limited-Time Offer\&q;,\n\&q;descriptionText\&q;: \&q;Earn 60,000 AAdvantage&a;reg; bonus miles after qualifying purchases. &l;strong&g;New&l;/strong&g;: earn double miles at restaurants and gas stations and a $100 AA flight discount.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/credit-card-details/citi.action?ID=citi-aadvantage-platinum-elite-credit-card&a;afc=106&a;intc=1~1~52~6~BANR~1~AAPLAT_LTO_2Q2018\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/AAdvantage_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/Hero_AAPLAT_background.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Apply for the Citi AAdvantage Platinum Select Card.\&q;,\n\&q;prodTitle\&q;: \&q;CITI(R) / AADVANTAGE(R) PLATINUM SELECT(R) CARD\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/AAPLAT_hero_card.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;Limited-Time Offer\&q;,\n\&q;mmBody\&q;:\&q;Earn 60,000 AAdvantage&a;reg; bonus miles after qualifying purchases. &l;strong&g;New&l;/strong&g;: earn double miles at restaurants and gas stations and a $100 AA flight discount.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;AAPLAT_LTO_oct2017&q;,&q;NAME&q;:&q;AAPLAT_LTO_oct2017&q;},&q;copy$$MustHaveAccessories&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;MustHaveAccessories\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Must-Have Accessories for Business Travelers\&q;,\n\&q;descriptionText\&q;: \&q;Refresh your travel accessories with these modern upgrades, and help make your time away from home more comfortable.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/best-business-travel-accessories\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2581_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;copyBgColor\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Must-Have Accessories for Business Travelers\&q;,\n\&q;mmBody\&q;:\&q;Refresh your travel accessories with these modern upgrades, and help make your time away from home more comfortable.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;MustHaveAccessories&q;,&q;NAME&q;:&q;MustHaveAccessories&q;},&q;copy$$ACSI_INTRO_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;ACSI_INTRO_2018\&q;,\n\&q;hdText\&q;: \&q;AWARD WINNING NATIONAL BANK\&q;,\n\&q;subText\&q;: \&q;Ranked #1 in Customer Satisfaction\&q;,\n\&q;descriptionText\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;ACSI_INTRO_2018&q;,&q;NAME&q;:&q;ACSI_INTRO_2018&q;},&q;copy$$CHECK21_CG1500&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CHECK21_CG1500\&q;,\n\&q;hdText\&q;: \&q;WEALTH ON YOUR TERMS\&q;,\n\&q;subText\&q;: \&q;Earn Up To $1,500\&q;,\n\&q;descriptionText\&q;: \&q;Start a new Citigold?? relationship to earn a cash bonus with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/citigold/offer/default.htm?venue=OnsiteHP&a;intc=1_1_52_3_BANR_2_CHECK21_CG1500_HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_2275_Checking_citigold_M1_M7_3UP.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP_2275_Checking_citigold_LegacyH1.jpg\&q;,\n\&q;homepage2Image\&q;:\&q;/JRS/banners/homepage2/HP_2275_Checking_citigold_2.0_H1.png\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;, \n\&q;imgTitle\&q;: \&q;Earn Up To $1,500\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $1,500\&q;,\n\&q;mmBody\&q;: \&q;Start a new Citigold?? relationship to earn a cash bonus with required activities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CHECK21_CG1500&q;,&q;NAME&q;:&q;CHECK21_CG1500&q;},&q;copy$$BLUE_SethKugelTravel&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;BLUE_SethKugelTravel\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;How to Improve Your Flight Search Game\&q;,\n\&q;descriptionText\&q;: \&q;Travel writer Seth Kugel explains ways to improve your online booking skills and find better deals on travel.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/travel/how-to-book-a-flight%20by-seth-kugel\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5461_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;How to Improve Your Flight Search Game\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BLUE_SethKugelTravel&q;,&q;NAME&q;:&q;BLUE_SethKugelTravel&q;},&q;copy$$Generic_Save_Cult_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Generic_Save_Cult_HP21\&q;,\n\&q;hdText\&q;: \&q;FEATURED SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Now Is The Time To Save\&q;,\n\&q;descriptionText\&q;: \&q;From emergency funds to nest eggs, start smart with a savings account that lets you earn interest and easily manage funds.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/banking/citi.action?ID=savings-account-overview\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_271_3Up_M1-M7_CulturalRelevance_1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_271_H2_Cultural_Relevance_Hero.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Now Is The Time To Save\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Now Is The Time To Save\&q;,\n\&q;mmBody\&q;: \&q;From emergency funds to nest eggs, start smart with a savings account that lets you earn interest and easily manage funds.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Save_Cult_HP21&q;,&q;NAME&q;:&q;Generic_Save_Cult_HP21&q;},&q;copy$$Emotion2_Crowdsurfing&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\t\&q;contentID\&q;: \&q;Emotion2_Crowdsurfing\&q;,\n\t\&q;hdText\&q;: \&q;CITI WELCOME WHAT&s;S NEXT\&q;,\n\t\&q;subText\&q;: \&q;What if a Bank Could Help You Feel Like This?\&q;,\n\t\&q;descriptionText\&q;: \&q;With products and services built around how money should make us feel, it can.\&q;,\n\t\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\t\&q;ctaImage\&q;: \&q;\&q;,\n\t\&q;ctaLink\&q;: \&q;http://next.citi.com\&q;,\n\t\&q;linkTarget\&q;: \&q;_blank\&q;,\n\t\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP384_Module.jpg\&q;,\n\t\&q;imgSmall\&q;: \&q;\&q;,\n\t\&q;videoObject\&q;: \&q;\&q;,\n\t\&q;heroImg1\&q;: \&q;\&q;,\n\t\&q;heroImg2\&q;: \&q;\&q;,\n\t\&q;imgTitle\&q;: \&q;\&q;,\n\t\&q;prodTitle\&q;: \&q;\&q;,\n\t\&q;prodImg\&q;: \&q;\&q;,\n\t\&q;prodFlag\&q;: \&q;false\&q;,\n\t\&q;heroColor\&q;: \&q;\&q;,\n\t\&q;speedBump\&q;: \&q;\&q;,\n\t\&q;moduleName\&q;: \&q;mod-three\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Emotion2_Crowdsurfing&q;,&q;NAME&q;:&q;Emotion2_Crowdsurfing&q;},&q;copy$$BHub083117Default&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;BHub083117Default\&q;,\n\&q;hdText\&q;: \&q;CITI BENEFITS\&q;,\n\&q;subText\&q;: \&q;Citi benefits right &l;br /&g;for you.\&q;,\n\&q;descriptionText\&q;: \&q;Use our fun interactive tool to find a personalized selection of benefits, offers and tips available for you and your life.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/Citibank_Benefits/index.html?intc=1~1~52~6~BANR~2~BHub083117Default~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/Benefit-Hub-Redesign-M1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/Benefit-Hub-Redesign-H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Citi benefits right for you.\&q;,\n\&q;mmBody\&q;: \&q;Use our fun interactive tool to find a personalized selection of benefits, offers and tips available for you and your life.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BHub083117Default&q;,&q;NAME&q;:&q;BHub083117Default&q;},&q;copy$$mpc_citicom_may2016&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q;: \&q;mpc_citicom_may2016\&q;,\n \&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CREDIT CARDS\&q;,\n \&q;subText\&q;: \&q;Choose the right Citi&l;sup&g;&a;reg;&l;/sup&g; credit card for you\&q;,\n \&q;descriptionText\&q;: \&q;Whether you want Cash Back, Great Airline Miles, Rewards for Costco Members, or a Low Intro Rate, the choice is all yours.\&q;,\n \&q;ctaLabel\&q;: \&q;Learn More\&q;,\n \&q;ctaImage\&q;: \&q;\&q;,\n \&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/compare/view-all-credit-cards?afc=105&a;intc=1~1~52~6~BANR~1~mpc_Default_citicomREDPE_aug2016~OMPC105\&q;,\n \&q;linkTarget\&q;: \&q;\&q;,\n \&q;imgLarge\&q;: \&q;/JRS/banners/modules/Cards-tile-grey-1120.jpg\&q;,\n \&q;imgSmall\&q;: \&q;\&q;,\n \&q;videoObject\&q;: \&q;\&q;,\n \&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HERO_2737.jpg\&q;,\n \&q;copyBgColor\&q;:\&q;classLightGrey\&q;,\n \&q;heroImg2\&q;: \&q;\&q;,\n \&q;imgTitle\&q;: \&q;Apply for the Citi cards.\&q;,\n \&q;prodTitle\&q;: \&q;CITI(R) CARDS\&q;,\n \&q;prodImg\&q;: \&q;/JRS/banners/card_art/Cards-tile-450.png\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Hero_Credit_Cards_Offer.png\&q;,\n \&q;prodFlag\&q;: \&q;true\&q;,\n \&q;heroColor\&q;: \&q;dark\&q;,\n \&q;speedBump\&q;: \&q;\&q;,\n \&q;mmTitle\&q;: \&q;Choose the Right Citi&l;sup&g;&a;reg;&l;/sup&g; Credit Card for You\&q;,\n \&q;mmBody\&q;: \&q;Whether you want Cash Back, Great Airline Miles, Rewards for Costco Members, or a Low Intro Rate, the choice is all yours.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;mpc_citicom_may2016&q;,&q;NAME&q;:&q;mpc_citicom_may2016&q;},&q;copy$$Check20_UT700TS&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Check20_UT700TS\&q;,\n\&q;hdText\&q;: \&q;FEATURED CHECKING OFFERS\&q;,\n\&q;subText\&q;: \&q;Earn Up To $700\&q;,\n\&q;descriptionText\&q;: \&q;Make life more rewarding by opening new eligible checking and savings accounts with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking-tiered-offer/default.htm?sc=onsite-hpt3&a;intc=1~1~52~6~BANR~2~Check20_UT700TS~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6630_MTS.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6630_HTS.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn Up To $700\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $700\&q;,\n\&q;mmBody\&q;: \&q;Make life more rewarding by opening new eligible checking and savings accounts with required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Check20_UT700TS&q;,&q;NAME&q;:&q;Check20_UT700TS&q;},&q;copy$$CITIGOLD_WhereTo&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CITIGOLD_WhereTo\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Where in the World to Go Next?\&q;,\n\&q;descriptionText\&q;: \&q;Learn how to choose more meaningful destinations, adventures and experiences with help from seasoned world traveler Seth Kugel.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/travel/where-to-travel-next-seth-kugel\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3336_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CITIGOLD_WhereTo&q;,&q;NAME&q;:&q;CITIGOLD_WhereTo&q;},&q;copy$$Citigold_RETTest&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Citigold_RETTest\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD&l;sup&g;&a;reg;&l;/sup&g; ACCOUNT PACKAGE\&q;,\n\&q;subText\&q;: \&q;Retirement Is Your Next Adventure\&q;,\n\&q;descriptionText\&q;: \&q;Retire on your terms with a Citigold&l;sup&g;&a;reg;&l;/sup&g; relationship. Open a new eligible account and earn $1500 with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/citigold/offer/default.htm?promo_ID=4FWVDEFPBWCHGT&a;intc=1~1~52~6~BANR~2~Citigold_RETTest~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/Citigold_RETTest_3up.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/Citigold_RETTest_hero.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Retirement Is Your Next Adventure\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Retirement Is Your Next Adventure\&q;,\n\&q;mmBody\&q;: \&q;Retire on your terms with a Citigold&l;sup&g;&a;reg;&l;/sup&g; relationship. Open a new eligible account and earn $1500 with required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Citigold_RETTest&q;,&q;NAME&q;:&q;Citigold_RETTest&q;},&q;copy$$Q3CD_2019_PRO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q3CD_2019_PRO\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn A Guaranteed 2.00% APY Today\&q;,\n\&q;descriptionText\&q;: \&q;Put more journeys in reach with a 1-Year Certificate of Deposit available on balances of $25,000 or more.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/certificate-of-deposit-promotion/cd-prospect/default.htm?channel=onsite&a;intc=1~1~52~6~BANR~2~Q3CD_2019_PRO~HP\&q;,\n\&q;linkTarget\&q;:
    \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5046_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5046_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn A Guaranteed 2.00% APY Today\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn A Guaranteed 2.00% APY Today\&q;,\n\&q;mmBody\&q;: \&q;Put more journeys in reach with a 1-Year Certificate of Deposit available on balances of $25,000 or more.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q3CD_2019_PRO&q;,&q;NAME&q;:&q;Q3CD_2019_PRO&q;},&q;copy$$Check20_UT700TL&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Check20_UT700TL\&q;,\n\&q;hdText\&q;: \&q;FEATURED CHECKING OFFERS\&q;,\n\&q;subText\&q;: \&q;Earn Up To $700\&q;,\n\&q;descriptionText\&q;: \&q;Make life more rewarding by opening new eligible checking and savings accounts with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking-tiered-offer/default.htm?sc=onsite-hpt2&a;intc=1~1~52~6~BANR~2~Check20_UT700TL~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6630_MTL.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6630_HTL.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn Up To $700\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $700\&q;,\n\&q;mmBody\&q;: \&q;Make life more rewarding by opening new eligible checking and savings accounts with required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Check20_UT700TL&q;,&q;NAME&q;:&q;Check20_UT700TL&q;},&q;copy$$CD_18mo_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CD_18mo_2018\&q;, \n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT OFFER\&q;,\n\&q;subText\&q;: \&q;Earn Up to a 2.50% APY\&q;, \n\&q;descriptionText\&q;: \&q;Open a new Certificate of Deposit, with a minimum deposit of $25,000.\&q;, \n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;, \n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/savings/Certificate-of-Deposit/default.htm?intc=1~1~52~6~BANR~2~CD_18mo_2018~XPX\&q;, \n\&q;linkTarget\&q;: \&q;_blank\&q;, \n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2462M.jpg\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP2462H.jpg\&q;,\n\&q;imgTitle\&q;: \&q;\&q;, \n\&q;prodTitle\&q;: \&q;\&q;, \n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;, \n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up to a 2.50% APY\&q;,\n\&q;mmBody\&q;:\&q;Open a new Certificate of Deposit, with a minimum deposit of $25,000.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CD_18mo_2018&q;,&q;NAME&q;:&q;CD_18mo_2018&q;},&q;copy$$MultiChck83117Default&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;MultiChck83117Default\&q;,\n\&q;hdText\&q;: \&q;CHECKING ACCOUNTS\&q;,\n\&q;subText\&q;: \&q;Earn Up&l;br /&g;To $500\&q;,\n\&q;descriptionText\&q;: \&q;Choose which checking account is right for you. Open a new checking account and complete qualifying activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;http://banking.citibank.com/cbol/17/checking/combo-offer/default.htm?intc=1~1~52~6~BANR~2~MultiChck83117Default~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP284_M1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP284_H1.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;theme-dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;MultiChck83117Default&q;,&q;NAME&q;:&q;MultiChck83117Default&q;},&q;copy$$CheckQ219_200&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CheckQ219_200\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn $200\&q;,\n\&q;descriptionText\&q;: \&q;Open a new eligible checking account and complete required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking-200/default.htm?channel=onsite&a;promo_ID=WE564683MYCHP2&a;intc=1~1~52~6~BANR~2~CheckQ219_200~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4321_200_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP4321_200_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn $200\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn $200\&q;,\n\&q;mmBody\&q;: \&q;Open a new eligible checking account and complete required activities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CheckQ219_200&q;,&q;NAME&q;:&q;CheckQ219_200&q;},&q;copy$$LAM_PRIORITY_SaveInvest&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;LAM_PRIORITY_SaveInvest\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Save or Invest? It&s;s All About Balance\&q;,\n\&q;descriptionText\&q;: \&q;Looking for smart ways to manage your money this year? How you save and invest can help shape your overall financial well-being.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/managing-money/should-i-save-or-invest\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/SaveorInvest_Banner.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Save or Invest? It&s;s All About Balance\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LAM_PRIORITY_SaveInvest&q;,&q;NAME&q;:&q;LAM_PRIORITY_SaveInvest&q;},&q;copy$$CPBLUE_MGM2000&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CPBLUE_MGM2000\&q;,\n\&q;hdText\&q;: \&q;REFER A FRIEND TO CITIBANK&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Earn Up To $2,000\&q;,\n\&q;descriptionText\&q;: \&q;Earn a cash bonus every time you refer friends and they open a new eligible Citibank&l;sup&g;&a;reg;&l;/sup&g; checking account.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/member-get-member/default.htm?intc=1~1~52~6~BANR~2~CPBLUE_MGM2000~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/8341_3up.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/8341_H2.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/CPBLUE_MGM2000_Hero.png\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn Up To $2,000\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $2,000\&q;,\n\&q;mmBody\&q;: \&q;Earn a cash bonus every time you refer friends and they open a new eligible Citibank&l;sup&g;&a;reg;&l;/sup&g; checking account.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CPBLUE_MGM2000&q;,&q;NAME&q;:&q;CPBLUE_MGM2000&q;},&q;copy$$Lunar_NY_0121&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Lunar_NY_0121\&q;,\n\&q;hdText\&q;: \&q;2021 LUNAR NEW YEAR OFFER\&q;,\n\&q;subText\&q;: \&q;Celebrate Year of the Ox and Earn a Keepsake\&q;,\n\&q;descriptionText\&q;: \&q;Earn a specially curated keepsake when you deposit $25,000+ into an eligible account with required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/21/lunar-new-year/default.htm?channel=onsite&a;Promo_ID=4Z627TW28WCBBAintc=1~2~52~1~BANR~2~Q121_LNR~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/9077_LNY_M1_M7_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Celebrate Year of the Ox and Earn a Keepsake\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Lunar_NY_0121&q;,&q;NAME&q;:&q;Lunar_NY_0121&q;},&q;copy$$Pri_EmCash&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Pri_EmCash\&q;,\n\&q;hdText\&q;: \&q;EMERGENCY CASH\&q;,\n\&q;subText\&q;: \&q;Your Money, When You Need It Most\&q;,\n\&q;descriptionText\&q;: \&q;Travel with access to up to $10,000 in emergency cash from the available funds in your Citi Priority account.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/pands/detail.do?ID=CitiPriorityOverview&a;intc=1~1~52~6~BANR~2~Pri_EmCash~XPX~#benefits-that-travel\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3092_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3092_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Emergency Cash\&q;,\n\&q;mmBody\&q;: \&q;Travel with access to up to $10,000 in emergency cash from the available funds in your Citi Priority account.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Pri_EmCash&q;,&q;NAME&q;:&q;Pri_EmCash&q;},&q;copy$$PM_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;PM_2018\&q;,\n\&q;hdText\&q;: \&q;PROGRESS MAKER STORIES\&q;,\n\&q;subText\&q;: \&q;Supporting Our Clients\&q;,\n\&q;descriptionText\&q;: \&q;Meet the Progress Makers and be inspired by their stories.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://citi.com/citi/progress-maker-stories/#landing?intc=1~1~52~6~BANR~2~PM_2018~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP477_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PM_2018&q;,&q;NAME&q;:&q;PM_2018&q;},&q;copy$$BKeys&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;BKeys\&q;,\n\&q;hdText\&q;: \&q;CITI ENTERTAINMENT&l;sup&g;SM&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Special Access to Buy Preferred Tickets\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss The Black Keys &a;lsquo;Let&s;s Rock&a;rsquo; Tour. Preferred tickets are currently on sale in select cities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citientertainment.com/landing/the_black_keys_lets_rock_tour?intc=1~1~52~6~BANR~2~BKeys~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4756_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Special Access to Buy Preferred Tickets\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Citi Entertainment&l;sup&g;SM&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss The Black Keys &a;lsquo;Let&s;s Rock&a;rsquo; Tour. Preferred tickets are currently on sale in select cities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BKeys&q;,&q;NAME&q;:&q;BKeys&q;},&q;copy$$GirlRising&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;GirlRising\&q;,\n\&q;hdText\&q;: \&q;POSITIVE SOCIAL IMPACT\&q;,\n\&q;subText\&q;: \&q;Introducing Brave Girl Rising\&q;,\n\&q;descriptionText\&q;: \&q;Citi supported Girl Rising in creating a short film to inspire action for girls&s; education and empowerment around the world.\&q;,\n\&q;ctaLabel\&q;: \&q;Watch the Trailer\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citigroup.com/citi/stories-of-progress.html#section3\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4032_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;GirlRising&q;,&q;NAME&q;:&q;GirlRising&q;},&q;copy$$CARDS_Travel_Rewards&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CARDS_Travel_Rewards\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Use (Don&s;t Lose) Your Travel Credit Card Rewards\&q;,\n\&q;descriptionText\&q;: \&q;What do savvy travelers know about travel? How to maximize their travel credit card rewards.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/travel-credit-card-rewards-tips\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2119_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Use (Don&s;t Lose) Your Travel Credit Card Rewards\&q;,\n\&q;mmBody\&q;: \&q;What do savvy travelers know about travel? How to maximize their travel credit card rewards.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_Travel_Rewards&q;,&q;NAME&q;:&q;CARDS_Travel_Rewards&q;},&q;copy$$GCF_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;GCF_2019\&q;,\n\&q;hdText\&q;: \&q;#GLOBALCITIZEN\&q;,\n\&q;subText\&q;: \&q;Power the Movement\&q;,\n\&q;descriptionText\&q;: \&q;Citi is the proud presenting partner of Global Citizen Festival. &a;bull; 9.28.19 &a;bull; Central Park, New York, NY\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.globalcitizen.org/en/connect/citi/?intc=1~1~52~6~BANR~2~GCF_2019~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5568_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Power the Movement\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;GCF_2019&q;,&q;NAME&q;:&q;GCF_2019&q;},&q;copy$$HelocM1Gen160929&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;HelocM1Gen160929\&q;,\n\&q;hdText\&q;: \&q;Home Equity Line of Credit\&q;,\n\&q;subText\&q;: \&q;Your Home. Your Plans.\&q;,\n\&q;descriptionText\&q;: \&q;Tap into the potential of a Home Equity Line of Credit.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/JRS/portal/template.do?ID=mortgage_heloc&a;intc=1~1~52~6~BANR~2~HelocM1Gen160929~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP261_HELOC_m1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H2_HELOC_background.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Tap into the potential of a Home Equity Line of Credit.\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Your Home. Your Plans.\&q;,\n\&q;mmBody\&q;: \&q;Tap into the potential of a Home Equity Line of Credit.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HelocM1Gen160929&q;,&q;NAME&q;:&q;HelocM1Gen160929&q;},&q;copy$$HYSA_SaveDont_LSOB_0619&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYSA_SaveDont_LSOB_0619\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; ACCELERATE SAVINGS\&q;,\n\&q;subText\&q;: \&q;Don&s;t Miss Out on 1.40% APY\&q;,\n\&q;descriptionText\&q;: \&q;Take advantage of one of our highest rates with no minimum opening deposit or limit on earnings. Select markets only.\&q;,\n\&q;ctaLabel\&q;: \&q;Get Details\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JSO/loginpage/retarget.action?next_ag_screen=family&a;loginscreenId=LSOBQ1_HYSAFAMILY&a;Promo_ID=4CEWQH4ZENCHPP&a;intc=1~2~51~1~BANR~2~HYSA_SaveDont_LSOB_0619~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HYSA_M1M7_3Up.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HYSA_H2_LiteSignOn.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Don&s;t Miss Out on 1.40% APY\&q;,\n\&q;mmBody\&q;: \&q;Take advantage of one of our highest rates with no minimum opening deposit or limit on earnings. Select markets only.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYSA_SaveDont_LSOB_0619&q;,&q;NAME&q;:&q;HYSA_SaveDont_LSOB_0619&q;},&q;copy$$PRIORITY_Career&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;PRIORITY_Career\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;I Spent a Week Learning About Career Change\&q;,\n\&q;descriptionText\&q;: \&q;If you&s;re considering switching careers and aren&s;t sure where to start, consider the lessons from these inspiring, yet practical, real-life stories.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/milestones/considering-a-career-change\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3335_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PRIORITY_Career&q;,&q;NAME&q;:&q;PRIORITY_Career&q;},&q;copy$$Q119ETF_CP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119ETF_CP\&q;,\n\&q;hdText\&q;: \&q;CITI PRIORITY\&q;,\n\&q;subText\&q;: \&q;Online Trades For Less\&q;,\n\&q;descriptionText\&q;: \&q;Commission-free ETF trades and lowered equity trades online/mobile as low as $4.95.\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/Citi-Equity-Trade/default.htm?intc=2~1~52~1~BANR~2~Q119ETF_CP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4148_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Online Trades For Less\&q;,\n\&q;mmBody\&q;: \&q;Commission-free ETF trades and lowered equity trades online/mobile as low as $4.95. \&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119ETF_CP&q;,&q;NAME&q;:&q;Q119ETF_CP&q;},&q;copy$$Q119ETF_CG&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119ETF_CG\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Online Trades For Less\&q;,\n\&q;descriptionText\&q;: \&q;Commission-free ETF trades and lowered equity trades online/mobile as low as $2.95.\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/Citi-Equity-Trade/default.htm?intc=2~1~52~3~BANR~2~Q119ETF_CG~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4148_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Online Trades For Less\&q;,\n\&q;mmBody\&q;: \&q;Commission-free ETF trades and lowered equity trades online/mobile as low as $2.95.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119ETF_CG&q;,&q;NAME&q;:&q;Q119ETF_CG&q;},&q;copy$$BLUE_Checkup&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;BLUE_Checkup\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;A Good Financial Checkup Starts with the Right Questions\&q;,\n\&q;descriptionText\&q;: \&q;A financial checkup is important at every age &a;mdash; even in your 20s and 30s. Try this thoughtful approach to your finances this new year.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/save-money-with-a-financial-checkup\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3337_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BLUE_Checkup&q;,&q;NAME&q;:&q;BLUE_Checkup&q;},&q;copy$$CyberSafe2017&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CyberSafe2017\&q;,\n\&q;hdText\&q;: \&q;PROTECT YOUR FAMILY ONLINE\&q;,\n\&q;subText\&q;: \&q;Family Cyber Safety\&q;,\n\&q;descriptionText\&q;: \&q;Educating loved ones on Cyber Safety is more important than ever. Teach your family to recognize potential online dangers.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/JRS/pands/detail.do?ID=SecurityCenter&a;section=how_you_can_protect_yourself&a;intc=1~1~52~6~BANR~2~CyberSafe2017~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP1952_FamilyCyberSecurity.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Family Cyber safety\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CyberSafe2017&q;,&q;NAME&q;:&q;CyberSafe2017&q;},&q;copy$$PRI_CPWM&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q; : \&q;PRI_CPWM\&q;,\n\&q;hdText\&q; : \&q;CITI PRIORITY\&q;,\n\&q;subText\&q; : \&q;Investment Guidance\&q;,\n\&q;descriptionText\&q;: \&q;Help simplify financial decisions with Citi Personal Wealth Management.\&q;,\n\&q;ctaLabel\&q; : \&q;Learn More\&q;,\n\&q;ctaImage\&q; : \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/JRS/pands/detail.do?ID=CitiPriorityOverview&a;section=on-your-terms&a;intc=1~1~52~6~BANR~2~PRI_CPWM~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q; : \&q;/JRS/banners/modules/iStock-901595778-1120x630.jpg\&q;,\n\&q;imgSmall\&q; : \&q;\&q;,\n\&q;videoObject\&q; : \&q;\&q;,\n\&q;heroImg1\&q; : \&q;\&q;,\n\&q;heroImg2\&q; : \&q;\&q;,\n\&q;imgTitle\&q; : \&q;\&q;,\n\&q;prodTitle\&q; : \&q;\&q;,\n\&q;prodImg\&q; : \&q;\&q;,\n\&q;prodFlag\&q; : \&q;false\&q;,\n\&q;speedBump\&q; : \&q;\&q;,\n\&q;heroColor\&q; : \&q;dark\&q;,\n\&q;mmTitle\&q; : \&q;Investment Guidance\&q;,\n\&q;mmBody\&q; : \&q;Help simplify financial decisions with Citi Personal Wealth Management.\&q;,\n\&q;disclosure\&q; : \&q;NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE \&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PRI_CPWM&q;,&q;NAME&q;:&q;PRI_CPWM&q;},&q;copy$$Q2CMI_2020_Hide&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q2CMI_2020_Hide\&q;,\n\&q;hdText\&q;: \&q;CITIBANK RELATIONSHIP PRICING\&q;,\n\&q;subText\&q;: \&q;Dream Bigger with a Mortgage Deal\&q;,\n\&q;descriptionText\&q;: \&q;New and existing Citi banking customers can get mortgage closing cost or interest rate discounts with Relationship Pricing.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/portal/template.do?ID=relationship_pricing_landing&a;intc=2~2~52~1~BANR~2~Q2CMI_2020_Hide~HP\&q;,\n\&q;linkTarget\&q;: \&q;_self\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/citidotcom-M2-M7_Mortgage2.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/citidotcom-H1_Mortgage2.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/citidotcom-H2_Mortage2.png\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Dream Bigger with a Mortgage Deal\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Dream Bigger with a Mortgage Deal\&q;,\n\&q;mmBody\&q;: \&q;New and existing Citi banking customers can get mortgage closing cost or interest rate discounts with Relationship Pricing.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2CMI_2020_Hide&q;,&q;NAME&q;:&q;Q2CMI_2020_Hide&q;},&q;copy$$GoldEquity&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;GoldEquity\&q;,\n\&q;hdText\&q;: \&q;CITI PERSONAL WEALTH MANAGEMENT\&q;,\n\&q;subText\&q;: \&q;Pay $4.95 Per Equity Trade\&q;,\n\&q;descriptionText\&q;: \&q;Citigold&l;sup&g;&a;reg;&l;/sup&g; clients pay just $4.95 per online and mobile equity trade.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/citigold/equity/default.htm?intc=1~1~52~6~BANR~2~GoldEquity~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2297M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;copyBgColor\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;\&q;,\n\&q;mmBody\&q;:\&q;\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;GoldEquity&q;,&q;NAME&q;:&q;GoldEquity&q;},&q;copy$$Citigold_MGM4000&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Citigold_MGM4000\&q;,\n\&q;hdText\&q;: \&q;REFER A FRIEND TO CITIBANK&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Earn Up To $4,000\&q;,\n\&q;descriptionText\&q;: \&q;When you enroll, refer your friends and they open a new eligible Citibank&l;sup&g;&a;reg;&l;/sup&g; checking account.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/citigold/member-get-member/default.htm?intc=1~1~52~6~BANR~2~Citigold_MGM4000~HPQ320\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/8341_cg_3up.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/8341_cg_H2.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Citigold_MGM4000_Hero.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn Up To $4,000\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $4,000\&q;,\n\&q;mmBody\&q;: \&q;When you enroll, refer your friends and they open a new eligible Citibank&l;sup&g;&a;reg;&l;/sup&g; checking account.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Citigold_MGM4000&q;,&q;NAME&q;:&q;Citigold_MGM4000&q;},&q;copy$$HYSA_MarkExpPP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYSA_MarkExpPP\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; HIGH-YIELD SAVINGS\&q;,\n\&q;subText\&q;: \&q;Earn 0.50% APY High-Yield Interest\&q;,\n\&q;descriptionText\&q;: \&q;When you&s;re ready, we&s;re ready with a Citi&l;sup&g;&a;reg;&l;/sup&g; High-Yield Savings Account. Save more with no limit on earnings.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JSO/loginpage/retarget.action?next_ag_screen=family&a;loginscreenId=LSOBQ1_HYSAFAMILY&a;Promo_ID=4CEWQH4ZENCHPP&a;intc=1~1~21~6~BANR~2~HYSA_MarkExpPP~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP8764_M1-M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP8764_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;High Interest Checking. Smart Move.\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;:
    \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 0.50% APY High-Yield Interest\&q;,\n\&q;mmBody\&q;: \&q;When you&s;re ready, we&s;re ready with a Citi&l;sup&g;&a;reg;&l;/sup&g; High-Yield Savings Account. Save more with no limit on earnings.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYSA_MarkExpPP&q;,&q;NAME&q;:&q;HYSA_MarkExpPP&q;},&q;copy$$Q119Save_CCBA&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119Save_CCBA\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.15% Promo Interest Rate/0.60% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/savings/ex/default.htm?promocode=ccba&a;intc=1~1~52~6~BANR~2~Q119Save_CCBA~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3386_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3386_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.15% Promo Interest Rate/0.60% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119Save_CCBA&q;,&q;NAME&q;:&q;Q119Save_CCBA&q;},&q;copy$$Q2InvestBP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Q2InvestBP\&q;,\n\&q;hdText\&q;: \&q;INVESTMENT OFFER\&q;,\n\&q;subText\&q;: \&q;Earn a Cash Bonus of $1000\&q;,\n\&q;descriptionText\&q;: \&q;Open a new Citi Personal Wealth Management Account with qualifying activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/Q2/savings/investment/prospect.htm?intc=1~1~52~6~BANR~2~Q2InvestBP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP458_M2.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED &a;mdash; NO BANK GUARANTEE &a;mdash; MAY LOSE MONEY\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2InvestBP&q;,&q;NAME&q;:&q;Q2InvestBP&q;},&q;copy$$LobData&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;LobMenu&q;:{&q;LobVersionA&q;:{&q;LobTextA5&q;:&q;Investing Options&q;,&q;LobTextA1&q;:&q;Credit Cards&q;,&q;LobLinkA1&q;:&q;https://www.citi.com/credit-cards/compare/view-all-credit-cards?intc=1~7~50~5~LOBA~ViewAllCards~Pos1&q;,&q;LobTextA2&q;:&q;Banking Solutions&q;,&q;LobTextA3&q;:&q;Mortgage Rates&q;,&q;LobLinkA3&q;:&q;https://online.citi.com/US/JRS/portal/template.do?ID=mortgage_home_mortgage&a;intc=1~7~50~5~LOBA~MortgageRates~Pos3&q;,&q;LobLinkA2&q;:&q;https://online.citi.com/US/banking/citi.action?ID=banking-overview&a;intc=1~7~50~5~LOBA~Checking~Pos2&q;,&q;LobTextA4&q;:&q;Personal Loans&q;,&q;LobLinkA5&q;:&q;https://online.citi.com/US/ag/citiwealthbuilder/detail/investing?intc=1~7~50~5~LOBA~InvestingOptions~Pos5&q;,&q;LobLinkA4&q;:&q;https://online.citi.com/US/ag/personal-loan?JFP_TOKEN=BEBZBA33&a;intc=1~7~50~5~LOBA~PersonalLoans~Pos4&q;},&q;LobVersionB&q;:{&q;LobTextB2&q;:&q;Simple checking choices that simplify your life&q;,&q;LobLinkB2&q;:&q;https://online.citi.com/US/banking/citi.action?ID=banking-overview&a;intc=1~7~50~5~LOBB~Checking~Pos2&q;,&q;LobLinkB1&q;:&q;https://www.citi.com/credit-cards/compare/view-all-credit-cards?intc=1~7~50~5~LOBB~ViewAllCards~Pos1&q;,&q;LobTextB3&q;:&q;Find a mortgage that makes you feel at home&q;,&q;LobTextB4&q;:&q;Consolidate debt and save with a Personal Loan&q;,&q;LobLinkB4&q;:&q;https://online.citi.com/US/ag/personal-loan?JFP_TOKEN=BEBZBA33&a;intc=1~7~50~5~LOBB~PersonalLoans~Pos4&q;,&q;LobLinkB3&q;:&q;https://online.citi.com/US/JRS/portal/template.do?ID=mortgage_home_mortgage&a;intc=1~7~50~5~LOBB~MortgageRates~Pos3&q;,&q;LobTextB5&q;:&q;Invest in your future your way&q;,&q;LobLinkB5&q;:&q;https://online.citi.com/US/ag/citiwealthbuilder/detail/investing?intc=1~7~50~5~LOBB~InvestingOptions~Pos5&q;,&q;LobTextB1&q;:&q;Find a credit card that works for you&q;},&q;LobResponsive&q;:{&q;LobTextR2&q;:&q;Banking&q;,&q;LobLinkR2&q;:&q;https://online.citi.com/US/banking/citi.action?ID=banking-overview&a;intc=1~7~50~5~LOBA~Checking~Pos2&q;,&q;LobLinkR1&q;:&q;https://www.citi.com/credit-cards/compare/view-all-credit-cards?intc=1~7~50~5~LOBA~ViewAllCards~Pos1&q;,&q;LobTextR3&q;:&q;Mortgage&q;,&q;LobTextR4&q;:&q;Loans&q;,&q;LobLinkR4&q;:&q;https://online.citi.com/US/ag/personal-loan?JFP_TOKEN=BEBZBA33&a;intc=1~7~50~5~LOBA~PersonalLoans~Pos4&q;,&q;LobLinkR3&q;:&q;https://online.citi.com/US/JRS/portal/template.do?ID=mortgage_home_mortgage&a;intc=1~7~50~5~LOBA~MortgageRates~Pos3&q;,&q;LobTextR5&q;:&q;Investing&q;,&q;LobLinkR5&q;:&q;https://online.citi.com/US/ag/citiwealthbuilder/detail/investing?intc=1~7~50~5~LOBA~InvestingOptions~Pos5&q;,&q;LobTextR1&q;:&q;Credit Cards&q;}},&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LobData&q;,&q;NAME&q;:&q;LobData&q;},&q;config$$jsonBanners&q;:{&q;userExp&q;:{&q;goldExp&q;:&q;[{\n \&q;moduleName\&q;: \&q;hero-one\&q;,\n \&q;contentID\&q; : \&q;Generic_Save\&q; \n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;mpc_citicom_may2016\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;Save_Hub2\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;Save_Hub1\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-seven\&q;,\n \&q;contentID\&q; : \&q;Q119CWA_CG\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-one\&q;,\n \&q;contentID\&q; : \&q;Gold_Bonds_HP21\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-three\&q;,\n \&q;contentID\&q; : \&q;RACIALEQBAN\&q;\n}]&q;,&q;blueExp&q;:&q;[{\n \&q;moduleName\&q;: \&q;hero-one\&q;,\n \&q;contentID\&q; : \&q;CITI_RewardsPlus_18\&q; \n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;Generic_Save\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;LifeMoneyBlue\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;mpc_citicom_may2016\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-seven\&q;,\n \&q;contentID\&q; : \&q;Save_Hub2\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-one\&q;,\n \&q;contentID\&q; : \&q;CARDS_BLUE_Scams_HP21\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-three\&q;,\n \&q;contentID\&q; : \&q;RACIALEQBAN\&q;\n}]&q;,&q;firstTimeExp&q;:&q;[{\n \&q;moduleName\&q;: \&q;hero-one\&q;,\n \&q;contentID\&q; : \&q;mpc_citicom_may2016\&q; \n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;Generic_Check_Gen_HP21\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;Generic_Save\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-two\&q;,\n \&q;contentID\&q; : \&q;CITI_RewardsPlus_18\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-seven\&q;,\n \&q;contentID\&q; : \&q;Save_Hub2\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-one\&q;,\n \&q;contentID\&q; : \&q;CARDS_BLUE_Scams_HP21\&q;\n},{\n \&q;moduleName\&q;: \&q;mod-three\&q;,\n \&q;contentID\&q; : \&q;RACIALEQBAN\&q;\n}]&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;CONTENT_ID&q;:&q;jsonBanners&q;,&q;NAME&q;:&q;jsonBanners&q;},&q;copy$$Q119Check_500&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119Check_500\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn Up To $500\&q;,\n\&q;descriptionText\&q;: \&q;Open a new eligible checking and savings account and complete required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/checking/500/default.htm?channel=onsite&a;promo_ID=4CY5L9V843CHPA&a;intc=1~1~52~6~BANR~2~Q119Check_500~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3375_M3.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3375_H3.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $500\&q;,\n\&q;mmBody\&q;: \&q;Open a new eligible checking and savings account and complete required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119Check_500&q;,&q;NAME&q;:&q;Q119Check_500&q;},&q;copy$$Global_Trans&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Global_Trans\&q;,\n\&q;hdText\&q;: \&q;CITIBANK&l;sup&g;&a;reg;&l;/sup&g; GLOBAL TRANSFERS\&q;,\n\&q;subText\&q;: \&q;Transfer Funds Around the World\&q;,\n\&q;descriptionText\&q;: \&q;With the Citibank&l;sup&g;&a;reg;&l;/sup&g; Global Transfer Service, transfer funds between eligible Citi accounts in participating countries.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/pands/detail.do?ID=InterCiti&a;intc=1~1~52~6~BANR~2~Global_Trans~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3027_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;:\&q;Click Learn More for important terms and conditions.\&q;,\n\&q;mmTitle\&q;: \&q;Transfer Funds Around the World\&q;,\n\&q;mmBody\&q;: \&q;With the Citibank&l;sup&g;&a;reg;&l;/sup&g; Global Transfer Service, transfer funds between eligible Citi accounts in participating countries. \&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Global_Trans&q;,&q;NAME&q;:&q;Global_Trans&q;},&q;copy$$CARDS_NewYorkCity&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CARDS_NewYorkCity\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;New York City: 3 Ways in 3 Days\&q;,\n\&q;descriptionText\&q;: \&q;To avoid biting off more of the Big Apple than you can chew on a first visit, consider visiting a mix of highlights that reveal a specific side of the city on each day of your stay.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/travel/new-york-itinerary\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4017_NewYorkCity.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;y\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;New York City: 3 Ways in 3 Days\&q;,\n\&q;mmBody\&q;: \&q;Save smarter with Citi&l;sup&g;&a;reg;&l;/sup&g; Accelerate Savings and bank virtually anywhere with the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App. &l;br/&g;Select markets only.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_NewYorkCity&q;,&q;NAME&q;:&q;HYSA_SaveSmarter0219&q;},&q;copy$$Numbers_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q; : \&q;Numbers_2018\&q;,\n \&q;hdText\&q; : \&q;CITI PERSONAL WEALTH MANAGEMENT\&q;,\n \&q;subText\&q; : \&q;Numbers You Need to Know\&q;,\n \&q;descriptionText\&q; : \&q;Guidance from Citi Personal Wealth Management on numbers for 2017 and 2018.\&q;,\n \&q;ctaLabel\&q; : \&q;Learn More\&q;,\n \&q;ctaImage\&q; : \&q;\&q;,\n \&q;ctaLink\&q; : \&q;/US/JRS/pands/detail.do?ID=NumbersYouNeedKnow&a;JFP_TOKEN=0CK743WC&a;intc=1~1~52~6~BANR~2~Numbers_2018~XPX\&q;,\n \&q;linkTarget\&q; : \&q;\&q;,\n \&q;imgLarge\&q; : \&q;/JRS/banners/modules/HP486_M.jpg\&q;,\n \&q;imgSmall\&q; : \&q;\&q;,\n \&q;videoObject\&q; : \&q;\&q;,\n \&q;heroImg1\&q; : \&q;\&q;,\n \&q;heroImg2\&q; : \&q;\&q;,\n \&q;imgTitle\&q; : \&q;\&q;,\n \&q;prodTitle\&q; : \&q;\&q;,\n \&q;prodImg\&q; : \&q;\&q;,\n \&q;prodFlag\&q; : \&q;false\&q;,\n \&q;speedBump\&q; : \&q;\&q;,\n \&q;heroColor\&q; : \&q;\&q;,\n \&q;mmTitle\&q; : \&q;\&q;,\n \&q;mmBody\&q; :\&q;\&q;,\n \&q;disclosure\&q;: \&q;NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Numbers_2018&q;,&q;NAME&q;:&q;Numbers_2018&q;},&q;copy$$Kiplinger_HP_2020&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Kiplinger_HP_2020\&q;,\n\&q;hdText\&q;: \&q;KIPLINGER&s;S BEST BANK AWARD\&q;,\n\&q;subText\&q;: \&q;Citi Named a Kiplinger&s;s Best Bank\&q;,\n\&q;descriptionText\&q;: \&q;We&s;re honored to be named a Kiplinger&s;s Best Bank for High Net Worth Families four years running!\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.parsintl.com/eprints/85771.pdf?ProspectID=E337C2EFB57E4FB88539886DCF898999\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/Kiplinger-badge-1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi Named a Kiplinger&s;s Best Bank\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;From Kiplinger&s;s Personal Finance. &a;copy;2020 The Kiplinger Washington Editors. All rights reserved. Used under license.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Kiplinger_HP_2020&q;,&q;NAME&q;:&q;Kiplinger_HP_2020&q;},&q;copy$$FlexLoan_CITICOM_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;FlexLoan_CITICOM_2018\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; FLEX LOAN\&q;,\n\&q;subText\&q;: \&q;Flexibility and Freedom\&q;,\n\&q;descriptionText\&q;: \&q;Vacations to expenses&a;mdash;fast funds from your Citi credit card at a low APR can help.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/creditcards/citi.action?ID=flex-loan\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5440_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Flexibility and Freedom\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; Flex Loan. Flexibility and Freedom\&q;,\n\&q;mmBody\&q;: \&q;From vacations to expenses, fast funds from your Citi credit card at an APR lower than your standard rate can help with everything life has to offer.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;FlexLoan_CITICOM_2018&q;,&q;NAME&q;:&q;FlexLoan_CITICOM_2018&q;},&q;copy$$Q3_2020_CitiEnt&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q3_2020_CitiEnt\&q;,\n\&q;hdText\&q;: \&q;CITI ENTERTAINMENT&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Citi Entertainment anywhere &a;amp; everywhere\&q;,\n\&q;descriptionText\&q;: \&q;The experiences you know and love aren&s;t going anywhere - they&s;re going virtually everywhere.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://citientertainment.com/anywhere?intc=1~1~52~6~BANR~2~Q3_2020_CitiEnt~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/citidotcom_3Up_M1M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi Entertainment anywhere and everywhere\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Citi Entertainment&a;reg; - anywhere &a;amp; everywhere\&q;,\n\&q;mmBody\&q;: \&q;The experiences you know and love aren&s;t going anywhere - they&s;re going virtually everywhere.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q3_2020_CitiEnt&q;,&q;NAME&q;:&q;Q3_2020_CitiEnt&q;},&q;copy$$DP1_CD_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;DP1_CD_2019\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT\&q;,\n\&q;subText\&q;: \&q;Plan for His Tomorrow with 2.50% APY\&q;,\n\&q;descriptionText\&q;: \&q;Open a new 13-month CD with a minimum deposit of $25,000 and spend time on what really matters.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/Certificate-of-Deposit/Calc/default.htm?channel=onsite&a;intc=1~1~52~6~BANR~2~DP1_CD_2019~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3378_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3378_H.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Plan for His Tomorrow with 2.50% APY\&q;,\n\&q;mmBody\&q;:\&q;Open a new 13-month CD with a minimum deposit of $25,000 and spend time on what really matters.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;DP1_CD_2019&q;,&q;NAME&q;:&q;DP1_CD_2019&q;},&q;copy$$HELLO_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HELLO_HP21\&q;,\n\&q;hdText\&q;: \&q;UPDATE MY NAME\&q;,\n\&q;subText\&q;: \&q;A Credit Card That Matches You\&q;,\n\&q;descriptionText\&q;: \&q;Citi transgender and non-binary customers can now update their first name on eligible Citi-branded credit cards.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;http://www.citi.com/updatemyname\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_536_1_1120x630.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP_536_2_720x720.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;A Credit Card That Matches You\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;A Credit Card That Matches You\&q;,\n\&q;mmBody\&q;: \&q;Citi transgender and non-binary customers can now update their first name on eligible Citi-branded credit cards.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HELLO_HP21&q;,&q;NAME&q;:&q;HELLO_HP21&q;},&q;copy$$RwrdsPlusLTO_HP22&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;RwrdsPlusLTO_HP22\&q;,\n\&q;hdText\&q;: \&q;CITI REWARDS+&l;sup&g;??&l;/sup&g; CARD\&q;,\n\&q;subText\&q;: \&q;For a Limited Time, Earn 5 ThankYou&l;sup&g;??&l;/sup&g; points\&q;,\n\&q;descriptionText\&q;: \&q;per $1 spent at restaurants up to $6,000. Plus enjoy a Low Intro APR for over one year.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-rewards-plus-credit-card?afc=106\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_Rewards_Plus_3Up-module_card_art.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP_Rewards_Plus_hero_background_image.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;CITI REWARDS\&q;,\n\&q;prodTitle\&q;: \&q;CITI REWARDS\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP_RewardsPlus_hero_card_art.png\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_RewardsPlus_hero_card_art.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 20,000 bonus points\&q;,\n\&q;mmBody\&q;: \&q;after qualifying purchases. Plus, &l;b&g;for a limited time,&l;/b&g; earn &l;b&g;5X ThankYou&l;sup&g;??&l;/sup&g; Points&l;/b&g; on up to $6,000 spent at &l;b&g;restaurants&l;/b&g; for the first 12 months.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;RwrdsPlusLTO_HP22&q;,&q;NAME&q;:&q;RwrdsPlusLTO_HP22&q;},&q;copy$$CARDS_GreatDestinations&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CARDS_GreatDestinations\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;6 Great Destinations You&s;ve Never Heard Of\&q;,\n\&q;descriptionText\&q;: \&q;Planning that travel wish list for 2019? Travel author Seth Kugel shares his picks for under-the-radar destinations.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/travel/6-destinations-youve-never-heard-of-seth-kugel\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3634_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_GreatDestinations&q;,&q;NAME&q;:&q;CARDS_GreatDestinations&q;},&q;copy$$BLUE_Homeownership&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;BLUE_Homeownership\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Prep Your Money and Your Mindset for Homeownership\&q;,\n\&q;descriptionText\&q;: \&q;If you&s;re considering buying your first home, here are financial tips to keep in mind as you move from writing rent checks to paying the mortgage.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/milestones/how-much-are-closing-costs\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3635_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BLUE_Homeownership&q;,&q;NAME&q;:&q;BLUE_Homeownership&q;},&q;copy$$homepageFooterDisclaimer&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;homepageFooterDisclaimer&q;,&q;NAME&q;:&q;homepageFooterDisclaimer&q;,&q;disclaimer1&q;:&q;Citibank.com provides information about and access to accounts and financial services provided by Citibank, &l;abbr title=\&q;North America\&q;&g;&l;span aria-hidden=&s;true&s;&g;N.A&l;/span&g;&l;/abbr&g;. and its affiliates in the United States and its territories. It does not, and should not be construed as, an offer, invitation or solicitation of services to individuals outside of the United States.\n&l;br&g;&l;br&g;\nTerms, conditions and fees for accounts, products, programs and services are subject to change. Not all accounts, products, and services as well as pricing described here are available in all jurisdictions or to all customers. Your eligibility for a particular product and service is subject to a final determination by Citibank. Your country of citizenship, domicile, or residence, if other than the United States, may have laws, rules, and regulations that govern or affect your application for and use of our accounts, products and services, including laws and regulations regarding taxes, exchange and/or capital controls that you are responsible for following.\n&l;br&g;&l;br&g;\nThe products, account packages, promotional offers and services described in this website may not apply to customers of &l;a target=\&q;_blank\&q; href=\&q;https://online.citi.com/JRS/portal/template.do?ID=international-personal-bank&a;l=en&a;locale=en_US\&q; style=\&q;outline: none;\&q;&g;International Personal Bank U.S.&l;/a&g; in the Citigold&l;sup&g;&a;reg;&l;/sup&g; Private Client International, Citigold&l;sup&g;&a;reg;&l;/sup&g; International, Citi International Personal, Citi Global Executive Preferred, and&a;nbsp;Citi Global Executive Account Packages.&l;br&g;&l;br&g;&q;},&q;copy$$LAM_MobileApp&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;LAM_MobileApp\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;How to Use the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App to Bank with Your Phone\&q;,\n\&q;descriptionText\&q;: \&q;Put the ability to manage your finances within reach &a;mdash; even from the comfort of your couch.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/managing-money/financial-education/how-to-use-citibank-mobile-app\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP7643_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;How to Use the Citi Mobile App to Bank with Your Phone\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;How to Use the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App to Bank with Your Phone\&q;,\n\&q;mmBody\&q;: \&q;Put the ability to manage your finances within reach &a;mdash; even from the comfort of your couch.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LAM_MobileApp&q;,&q;NAME&q;:&q;LAM_MobileApp&q;},&q;copy$$AA_MileUp_CitiCom&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;AA_MileUp_CitiCom\&q;,\n\&q;hdText\&q;: \&q;AMERICAN AIRLINES AADVANTAGE&l;sup&g;&a;reg;&l;/sup&g; MILEUP&l;sup&g;SM&l;/sup&g; CARD\&q;,\n\&q;subText\&q;: \&q;The NEW AAdvantage MileUp&l;sup&g;SM&l;/sup&g; Card\&q;,\n\&q;descriptionText\&q;: \&q;Start planning your next getaway with 10,000 AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles and a $50 statement credit after qualifying purchases. &l;b&g;Plus, no annual fee.&l;/b&g;&l;sup&g;1&l;/sup&g;\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/credit-card-details/citi.action?ID=aadvantage-mile-up-credit-card&a;afc=106&a;intc=1~1~52~6~BANR~1~AA_MileUp\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2286_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2286_Hero.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP2286_CardArt.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;The Card That Lets You Earn Miles Everyday For Your Next Getaway\&q;,\n\&q;mmBody\&q;:\&q;Start planning your next getaway with 10,000 AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles and a $50 statement credit after qualifying purchases. &l;b&g;Plus, no annual fee.&l;/b&g;&l;sup&g;1&l;/sup&g;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;AA_MileUp_CitiCom&q;,&q;NAME&q;:&q;AA_MileUp_CitiCom&q;},&q;copy$$CHECK21_UT700&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\t\&q;contentID\&q;: \&q;CHECK21_UT700\&q;,\n\t\&q;hdText\&q;: \&q;FEATURED CHECKING OFFERS\&q;,\n\t\&q;subText\&q;: \&q;Earn Up To $700\&q;,\n\t\&q;descriptionText\&q;: \&q;Open new eligible accounts with required activities and earn a cash bonus. \&q;,\n\t\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\t\&q;ctaImage\&q;: \&q;\&q;,\n\t\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/checking/dual/700/offer/default.htm?Promo_ID=4HRZBDE95KCHPAintc=1~1~52~6~BANR~2~CHECK21_UT700~HP\&q;,\n\t\&q;linkTarget\&q;: \&q;\&q;,\n\t\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_402_3-Up_M1_M7.jpg\&q;,\n\t\&q;imgSmall\&q;: \&q;\&q;,\n\t\&q;videoObject\&q;: \&q;\&q;,\n\t\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP_402_H2_legacy.jpg\&q;,\n \&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_402_H2_new_2.0.png\&q;,\n\t\&q;copyBgColor\&q;: \&q;blank\&q;,\n\t\&q;heroImg2\&q;: \&q;\&q;,\n\t\&q;imgTitle\&q;: \&q;Earn Up To $700\&q;,\n\t\&q;prodTitle\&q;: \&q;\&q;,\n\t\&q;prodImg\&q;: \&q;\&q;,\n\t\&q;prodFlag\&q;: \&q;false\&q;,\n\t\&q;heroColor\&q;: \&q;dark\&q;,\n\t\&q;speedBump\&q;: \&q;\&q;,\n \&q;mmTitle\&q;: \&q;Earn Up To $700\&q;,\n \&q;mmBody\&q;: \&q;Open new eligible accounts with required activities and earn a cash bonus.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CHECK21_UT700&q;,&q;NAME&q;:&q;CHECK21_UT700&q;},&q;copy$$dc_citicomREDPE_oct2016&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;dc_citicomREDPE_oct2016\&q;,\n\&q;hdText\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; DOUBLE CASH CARD\&q;,\n\&q;subText\&q;: \&q;Twice the cash back. Twice as rewarding.\&q;,\n\&q;descriptionText\&q;: \&q;Earn 2% cash back on all purchases: 1% when you buy and 1% as you pay with no categories, caps or annual fee*.\&q;,\n\&q;ctaLabel\&q;: \&q;Apply Today\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-double-cash-credit-card?afc=106\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/M1_M7_560x315.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP_3284_Hero_1_0_bg_2160x600.jpg\&q;,\n\&q;copyBgColor\&q; : \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Apply for the Double Cash Card.\&q;,\n\&q;prodTitle\&q;: \&q;CITI(R) DOUBLE CASH CARD\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/citihero_10_cardart_450x314.png\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/citihero_20_483x306.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;Citi&l;sup&g;&a;reg;&l;/sup&g; Double Cash Card\&q;,\n\&q;mmBody\&q;:\&q;Earn 2% cash back on all purchases: 1% when you buy and 1% as you pay with no categories, caps or annual fee*.\&q;,\n\&q;prReview\&q;:\&q;true\&q;,\n\&q;pid\&q;:\&q;142\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;dc_citicomREDPE_oct2016&q;,&q;NAME&q;:&q;dc_citicomREDPE_oct2016&q;},&q;copy$$CPBLUE_MGM_HP22&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CPBLUE_MGM_HP22\&q;,\n\&q;hdText\&q;:
    \&q;SPECIAL OFFER\&q;,\n\&q;subText\&q;: \&q;Earn up to $2,000 when you refer your friends\&q;,\n\&q;descriptionText\&q;: \&q;Get $100 cash for every friend you refer who is new to Citi&l;sup&g;&a;reg;&l;/sup&g; checking and opens an eligible account. Max 20 referral bonuses.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/member-get-member/default.htm\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/m1m7_1120x630_Blue.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CPBLUE_MGM_HP22&q;,&q;NAME&q;:&q;CPBLUE_MGM_HP22&q;},&q;copy$$HYSANoRate&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYSANoRate\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; ACCELERATE SAVINGS\&q;,\n\&q;subText\&q;: \&q;Save Faster With A High-Yield Rate\&q;,\n\&q;descriptionText\&q;: \&q;When you&s;re ready to save faster, we&s;re ready with High-Yield Savings that earns unlimited interest. Select Markets Only.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/high-yield/savings/default.htm?channel=onsite&a;Promo_ID=4CEWQH4ZENCHPT&a;intc=1~1~21~6~BANR~2~HYSANoRate~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/8763_M1-M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/8763_H2.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HYSANoRate_Hero.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Save Faster With A High-Yield Rate\&q;,\n\&q;mmBody\&q;: \&q;When you&s;re ready to save faster, we&s;re ready with High-Yield Savings that earns unlimited interest. Select Markets Only.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYSANoRate&q;,&q;NAME&q;:&q;HYSANoRate&q;},&q;copy$$Android_gold&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Android_gold\&q;,\n\&q;hdText\&q;: \&q;ENHANCED CITIGOLD&l;sup&g;&a;reg;&l;/sup&g; EXPERIENCE\&q;,\n\&q;subText\&q;: \&q;Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App for Android&l;sup&g;&a;trade;&l;/sup&g;\&q;,\n\&q;descriptionText\&q;: \&q;Conveniently buy and sell equities right from the app for as low as $4.95.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/JRS/portal.c?ID=CitiDigitalServices&a;section=Mobile-App-Android&a;intc=1~1~52~6~BANR~2~Android_gold~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/AndroidMVP_Gold.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED &a;mdash; NO BANK GUARANTEE &a;mdash; MAY LOSE MONEY\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Android_gold&q;,&q;NAME&q;:&q;Android_gold&q;},&q;copy$$CitiEntGen&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CitiEntGen\&q;,\n\&q;hdText\&q;: \&q;EXPLORE CITI ENTERTAINMENT&l;sup&g;SM&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Unlock 10,000+ Events With Your Citi&l;sup&g;&a;reg;&l;/sup&g; Card\&q;,\n\&q;descriptionText\&q;: \&q;Access presale tickets and exclusive experiences for concerts, sports, dining and more.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;http://www.citientertainment.com?intc=1~1~52~6~BANR~2~CitiEntGen~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5502_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Explore Citi Entertainment\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Explore Citi Entertainment&l;sup&g;SM&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Access presale tickets and exclusive experiences for concerts, sports, dining and more.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CitiEntGen&q;,&q;NAME&q;:&q;CitiEntGen&q;},&q;copy$$Generic_Check_CPC_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Generic_Check_CPC_HP21\&q;,\n\&q;hdText\&q;: \&q;CITIGOLD&l;sup&g;&a;reg;&l;/sup&g; PRIVATE CLIENT\&q;,\n\&q;subText\&q;: \&q;Premier Checking\&q;,\n\&q;descriptionText\&q;: \&q;A Citigold Private Client relationship provides an elevated financial relationship with a higher level of service.\&q;,\n\&q;ctaLabel\&q;: \&q;Get Started\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/banking/checking-account\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_276_CPC_3Up_M1M7_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HP_276_CPC_Hero_Image.png\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Premier Checking\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;light\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Premier Checking\&q;,\n\&q;mmBody\&q;:\&q;A Citigold Private Client relationship provides an elevated financial relationship with a higher level of service.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check_CPC_HP21&q;,&q;NAME&q;:&q;Generic_Check_CPC_HP21&q;},&q;copy$$HYSA_MarkExp_APY&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYSA_MarkExp_APY\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; HIGH-YIELD SAVINGS\&q;,\n\&q;subText\&q;: \&q;Earn 0.50% APY High-Yield Interest\&q;,\n\&q;descriptionText\&q;: \&q;When you&s;re ready, we&s;re ready with a Citi&l;sup&g;&a;reg;&l;/sup&g; High-Yield Savings Account. Save more with no limit on earnings.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/high-yield/savings/default.htm?channel=onsite&a;Promo_ID=4CEWQH4ZENCHPC&a;intc=1~1~21~6~BANR~2~HYSA_MarkExp_APY~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP8764_M1-M7.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP8764_H2.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/HYSA_MarkExp_APY.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;High Interest Checking. Smart Move.\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 0.50% APY High-Yield Interest\&q;,\n\&q;mmBody\&q;: \&q;When you&s;re ready, we&s;re ready with a Citi&l;sup&g;&a;reg;&l;/sup&g; High-Yield Savings Account. Save more with no limit on earnings.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYSA_MarkExp_APY&q;,&q;NAME&q;:&q;HYSA_MarkExp_APY&q;},&q;copy$$CITIGOLD_FamilyFinancialPlan&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CITIGOLD_FamilyFinancialPlan\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;How to Create Your Family&a;rsquo;s Financial Plan\&q;,\n\&q;descriptionText\&q;: \&q;Getting the whole family to agree on a long-range financial plan is possible when you set goals that everyone can get behind.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/family/personal-financial-planning-for-families\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/GettyImages-858243764.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;How to Create Your Family&a;amp;rsquo;s Financial Plan\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CITIGOLD_FamilyFinancialPlan&q;,&q;NAME&q;:&q;CITIGOLD_FamilyFinancialPlan&q;},&q;copy$$Q119Check_600&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119Check_600\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn $600\&q;,\n\&q;descriptionText\&q;: \&q;Open a new eligible checking and savings account and complete required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/checking/600/default.htm?channel=onsite&a;promo_ID=4CY5L9V843CHP6&a;intc=1~1~52~6~BANR~2~Q119Check_600~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3375_M2.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3375_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn $600\&q;,\n\&q;mmBody\&q;: \&q;Open a new eligible checking and savings account and complete required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119Check_600&q;,&q;NAME&q;:&q;Q119Check_600&q;},&q;copy$$Niall_Horan&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Niall_Horan\&q;,\n\&q;hdText\&q;: \&q;CITI ENTERTAINMENT&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Special Access to Buy Preferred Tickets\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss Niall Horan&s;s &s;Nice To Meet Ya&s; Tour. Preferred tickets are currently on sale in select cities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citientertainment.com/landing/niall_horan?intc=1~1~52~6~BANR~2~Niall_Horan~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6571_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Special Access to Buy Preferred Tickets\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Citi Entertainment&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss Niall Horan&s;s &s;Nice To Meet Ya&s; Tour. Preferred tickets are currently on sale in select cities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Niall_Horan&q;,&q;NAME&q;:&q;Niall_Horan&q;},&q;copy$$CARDS_BLUE_Scams_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CARDS_BLUE_Scams_HP21\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Scams Are on the Rise in 2021, Here&s;s What to Watch Out For\&q;,\n\&q;descriptionText\&q;: \&q;From romantic ploys to social engineering, learn about scams to watch for, and tips to help protect yourself.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/Money/Finance101/2021-Scams-to-Watch-For\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1069_fraud_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Scams Are on the Rise in 2021, Here&s;s What to Watch Out For\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Scams Are on the Rise in 2021, Here???s What to Watch Out For\&q;,\n\&q;mmBody\&q;: \&q;From romantic ploys to social engineering, learn about scams to watch for, and tips to help protect yourself.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_BLUE_Scams_HP21&q;,&q;NAME&q;:&q;CARDS_BLUE_Scams_HP21&q;},&q;copy$$ChkBasic200&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q;: \&q;ChkBasic200\&q;,\n \&q;hdText\&q;: \&q;BASIC BANKING\&q;,\n \&q;subText\&q;: \&q;Special Online Offer &a;ndash; Earn $200\&q;,\n \&q;descriptionText\&q;: \&q;Open a new checking account in the Basic Banking Package with a minimum deposit and qualifying activities.\&q;,\n \&q;ctaLabel\&q;: \&q;Learn More\&q;,\n \&q;ctaImage\&q;: \&q;\&q;,\n \&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/checking/basic/banking/default.htm?Promo_ID=CZW6&a;intc=1~1~52~6~BANR~2~ChkBasic200~XPX\&q;,\n \&q;linkTarget\&q;: \&q;_blank\&q;,\n \&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP474-M1-M2-M7.jpg\&q;,\n \&q;imgSmall\&q;: \&q;\&q;,\n \&q;videoObject\&q;: \&q;\&q;,\n \&q;heroImg1\&q;: \&q;/JRS/banners/HP474-H2.jpg\&q;,\n \&q;heroImg2\&q;: \&q;\&q;,\n \&q;imgTitle\&q;: \&q;\&q;,\n \&q;prodImg\&q;: \&q;\&q;,\n \&q;prodFlag\&q;: \&q;false\&q;,\n \&q;heroColor\&q;: \&q;dark\&q;,\n \&q;speedBump\&q;: \&q;\&q;,\n \&q;mmTitle\&q;: \&q;Special Online Offer &a;ndash; Earn $200\&q;,\n \&q;mmBody\&q;: \&q;Open a new checking account in the Basic Banking Package with a minimum deposit and qualifying activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;ChkBasic200&q;,&q;NAME&q;:&q;ChkBasic200&q;},&q;copy$$20Q1Save_NTPTWL&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;20Q1Save_NTPTWL\&q;,\n\&q;hdText\&q;: \&q;SAVINGS OFFER\&q;,\n\&q;subText\&q;: \&q;Savings To Fuel Your Wanderlust\&q;,\n\&q;descriptionText\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY when you open an Eligible Savings Account with $25K min. balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/nt/default.htm?intc=1~1~52~6~BANR~2~20Q1Save_NTPTWL~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6405_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6405_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Savings To Fuel Your Wanderlust\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Savings To Fuel Your Wanderlust\&q;,\n\&q;mmBody\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY when you open an Eligible Savings Account with $25K min. balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;20Q1Save_NTPTWL&q;,&q;NAME&q;:&q;20Q1Save_NTPTWL&q;},&q;copy$$Q418Save_CCBA&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q418Save_CCBA\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.60% APY ($25K minimum balance/qualifying activities).\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/savings/ex/default.htm?promocode=ccba&a;intc=1~1~52~6~BANR~2~Q418Save_CCBA~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2779_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2779_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;mmBody\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.60% APY ($25K minimum balance/qualifying activities).\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q418Save_CCBA&q;,&q;NAME&q;:&q;Q418Save_CCBA&q;},&q;copy$$Q119Save_CCG&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119Save_CCG\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.15% Promo Interest Rate/0.62% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/savings/ex/default.htm?promocode=ccg&a;intc=1~1~52~6~BANR~2~Q119Save_CCG~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3386_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3386_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.15% Promo Interest Rate/0.62% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119Save_CCG&q;,&q;NAME&q;:&q;Q119Save_CCG&q;},&q;copy$$LIBM1M7_HP22&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;LIBM1M7_HP22\&q;,\n\&q;hdText\&q;: \&q;CITI?? CHECKING\&q;,\n\&q;subText\&q;: \&q;Coming Soon ??? Overdraft fees are over!\&q;,\n\&q;descriptionText\&q;: \&q;We???re excited to announce that starting soon, Citi personal banking customers can enjoy no overdraft fees. Banking made simple.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking/tiered/1500/default.htm?venue=OnsiteEX1\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_3445_project_liberty_m1m7_banner.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;LIBM1M7_HP22&q;,&q;NAME&q;:&q;LIBM1M7_HP22&q;},&q;copy$$diam_citicomREDPE_aug2016&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;diam_citicomREDPE_aug2016\&q;,\n\&q;hdText\&q;: \&q;DIAMOND PREFERRED&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Low Intro APR Plus No Annual Fee\&q;,\n\&q;descriptionText\&q;: \&q;Enjoy a Low Intro APR on Balance Transfers and Purchases with Diamond Preferred&l;sup&g;&a;reg;&l;/sup&g;.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-diamond-preferred-credit-card?afc=106\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/8150_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2.0_Diamond_Preferred_Hero_Card_Background.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;classLightGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/8150_cardArt.png\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Hero_Diamond_Preferred_Card.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Low Intro APR Plus No Annual Fee\&q;,\n\&q;mmBody\&q;: \&q;Enjoy a Low Intro APR on Balance Transfers and Purchases with Diamond Preferred&l;sup&g;&a;reg;&l;/sup&g;.\&q;,\n\&q;prReview\&q;:\&q;true\&q;,\n\&q;pid\&q;:\&q;257\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;diam_citicomREDPE_aug2016&q;,&q;NAME&q;:&q;diam_citicomREDPE_aug2016&q;},&q;copy$$homepageSEOTags&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;descriptionTag&q;:&q;Open a bank account from Citi checking and savings accounts and CDs, to banking IRAs. Apply for a personal loan, or learn how to invest in your financial future.&q;,&q;hreflangTags&q;:{&q;en-in&q;:&q;https://www.online.citibank.co.in/&q;,&q;en-ae&q;:&q;https://www.citibank.ae/uae/homepage/index.htm/&q;,&q;zh-cn&q;:&q;https://www.citibank.com.cn/sim/index.htm/&q;,&q;en-cn&q;:&q;https://www.citibank.com.cn/sim/english/index.htm/&q;,&q;x-default&q;:&q;https://www.citi.com/&q;,&q;en-my&q;:&q;https://www.citibank.com.my/index.htm/&q;,&q;en-au&q;:&q;https://www1.citibank.com.au/&q;,&q;en-th&q;:&q;https://www.citibank.co.th/global_docs/citith_home_en.htm/&q;,&q;en-ph&q;:&q;https://www.citibank.com.ph/portal/citiph_home.htm/&q;,&q;en-vn&q;:&q;https://www.citibank.com.vn/portal/vietnam_home.htm/&q;,&q;en-pl&q;:&q;https://www.citibank.pl/en/&q;,&q;zh-hk&q;:&q;https://www.citibank.com.hk/portal/home_chinese/hkcb_Home.htm/&q;,&q;zh-tw&q;:&q;https://www.citibank.com.tw/sim/index.htm/&q;,&q;en-hk&q;:&q;https://www.citibank.com.hk/portal/home_english/hkcb_Home.htm/&q;,&q;en-tw&q;:&q;https://www.citibank.com.tw/sim/en/index.htm/&q;,&q;ko-kr&q;:&q;https://www.citibank.co.kr/&q;,&q;en-ru&q;:&q;https://www.citibank.ru/russia/main/eng/home.htm/&q;,&q;ru-ru&q;:&q;https://www.citibank.ru/russia/main/rus/home.htm/&q;,&q;pl-pl&q;:&q;https://www.citibank.pl/&q;,&q;id-id&q;:&q;https://www.citibank.co.id/portal/bahasa_home/index.htm/&q;,&q;en-sg&q;:&q;https://www.citibank.com.sg/portal/bluehome/index.htm/&q;,&q;vi-vn&q;:&q;https://www.citibank.com.vn/portal/vietnam_home_vn.htm/&q;,&q;en-gb&q;:&q;https://www.citibank.co.uk/personal/home.do/&q;,&q;en-id&q;:&q;https://www.citibank.co.id/portal/blue/en_home.htm/&q;,&q;th-th&q;:&q;https://www.citibank.co.th/global_docs/citith_home_th.htm/&q;},&q;keywordsTag&q;:&q;banking, citi, financial services, checking account, savings account, credit cards&q;,&q;domainChangeCanonicalTag&q;:&q;https://www.citi.com&q;,&q;canonicalTag&q;:&q;https://online.citi.com/US/login.do&q;,&q;titleTag&q;:&q;Online Banking, Mortgages, Personal Loans, Investing | Citi.com&q;,&q;CONTENT_ID&q;:&q;homepageSEOTags&q;,&q;NAME&q;:&q;homepageSEOTags&q;},&q;copy$$Q119Save_CCP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q119Save_CCP\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.15% Promo Interest Rate/0.62% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/savings/ex/default.htm?promocode=ccp&a;intc=1~1~52~6~BANR~2~Q119Save_CCP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3386_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3386_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.15% Promo Interest Rate/0.62% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q119Save_CCP&q;,&q;NAME&q;:&q;Q119Save_CCP&q;},&q;config$$homepageConfig&q;:{&q;LOBThrottleConfig&q;:{&q;LOB_B&q;:&q;0&q;,&q;LOB_A&q;:&q;0&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;CONTENT_ID&q;:&q;homepageConfig&q;,&q;NAME&q;:&q;homepageConfig&q;},&q;copy$$Pink_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Pink_2019\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; PRIVATE PASS&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Special Access to Buy Preferred Tickets\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss some of the biggest artists on tour, like P!NK. Preferred tickets are currently on sale in select cities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citiprivatepass.com/landing/pink_tour_2019.html?intc=1~1~52~6~BANR~2~Pink_2019~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3540_M1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; Private Pass&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss some of the biggest artists on tour, like P!NK. Preferred tickets are currently on sale in select cities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Pink_2019&q;,&q;NAME&q;:&q;Pink_2019&q;},&q;copy$$CD_7mo_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CD_7mo_2018\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT OFFER\&q;,\n\&q;subText\&q;: \&q;Earn a 1.00% APY\&q;,\n\&q;descriptionText\&q;: \&q;Open a new 7-month Certificate of Deposit,&l;br&g; with a minimum deposit of $10,000.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/savings/Certificate-of-Deposit/LTO/default.htm?intc=1~1~52~6~BANR~2~CD_7mo_2018~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP473_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP473_H1.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Earn a 1.00% APY\&q;,\n\&q;mmBody\&q;: \&q;Open a new 7-month Certificate of Deposit, with a minimum deposit of $10,000.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CD_7mo_2018&q;,&q;NAME&q;:&q;CD_7mo_2018&q;},&q;copy$$PIL_011917&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;PIL_011917\&q;,\n\&q;hdText\&q;: \&q;PERSONAL LOAN\&q;,\n\&q;subText\&q;: \&q;Take Control of Your Debt\&q;,\n\&q;descriptionText\&q;: \&q;A Citibank Personal Loan allows you to pay down higher interest rate balances with one predictable monthly payment.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/JRS/pands/detail.do?ID=LLInstallmentLoan&a;intc=1~1~52~6~BANR~2~PIL_011917~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP286_M1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H2_PL_background.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/PIL_011917_Hero.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;Take Control of Your Debt\&q;,\n\&q;mmBody\&q;:\&q;A Citibank Personal Loan allows you to pay down higher interest rate balances with one predictable monthly payment.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PIL_011917&q;,&q;NAME&q;:&q;PIL_011917&q;},&q;copy$$CARDS_RewardsCreditCards&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CARDS_RewardsCreditCards\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;New to Rewards Credit Cards? Here&s;s How the Points Stack Up\&q;,\n\&q;descriptionText\&q;: \&q;To tap the potential of a rewards credit card, understanding how it works and the ways it builds up points is key.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/how-to-use-rewards-credit-cards\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5465_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;New to Rewards Credit Cards? Here&s;s How the Points Stack Up\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_RewardsCreditCards&q;,&q;NAME&q;:&q;CARDS_RewardsCreditCards&q;},&q;copy$$CitiEntFA&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CitiEntFA\&q;,\n\&q;hdText\&q;: \&q;CITI ENTERTAINMENT&l;sup&g;SM&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;Special Access to Buy Preferred Tickets\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss Post Malone &l;i&g;Runaway&l;/i&g; Tour. Preferred tickets are currently on sale in select cities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citientertainment.com/landing/post_malone_2019?intc=1~1~52~6~BANR~2~CitiEntFA~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5645_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Citi Entertainment\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Citi Entertainment&l;sup&g;SM&l;/sup&g;\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss Post Malone &l;i&g;Runaway&l;/i&g; Tour. Preferred tickets are currently on sale in select cities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CitiEntFA&q;,&q;NAME&q;:&q;CitiEntFA&q;},&q;copy$$CITIGOLD_FamilyMove&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CITIGOLD_FamilyMove\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Make Your Next Family
    Move a Smooth One\&q;,\n\&q;descriptionText\&q;: \&q;Learn how other families have made the relocation leap, and help turn your move into your next adventure.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/milestones/tips-for-moving-with-kids\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4272_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Life and money by Citi\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CITIGOLD_FamilyMove&q;,&q;NAME&q;:&q;CITIGOLD_FamilyMove&q;},&q;copy$$Android_blue&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Android_blue\&q;,\n\&q;hdText\&q;: \&q;ENHANCED MOBILE EXPERIENCE\&q;,\n\&q;subText\&q;: \&q;Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App for Android&l;sup&g;&a;trade;&l;/sup&g;\&q;,\n\&q;descriptionText\&q;: \&q;Conveniently access, trade and manage your accounts right from the app.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/JRS/portal.c?ID=CitiDigitalServices&a;section=Mobile-App-Android&a;intc=1~1~52~6~BANR~2~Android_blue~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/AndroidMVP_Blue2.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED &a;mdash; NO BANK GUARANTEE &a;mdash; MAY LOSE MONEY\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Android_blue&q;,&q;NAME&q;:&q;Android_blue&q;},&q;copy$$PRIORITY_FinancialCheckup&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;PRIORITY_FinancialCheckup\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;A Good Financial Checkup Starts with the Right Questions\&q;,\n\&q;descriptionText\&q;: \&q;A financial checkup can help you make sure you???re taking the right steps and saving the right way.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/save-money-with-a-financial-checkup\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4273_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;A Good Financial Checkup Starts with the Right Questions\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PRIORITY_FinancialCheckup&q;,&q;NAME&q;:&q;PRIORITY_FinancialCheckup&q;},&q;copy$$custom_cash_citi_200_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;custom_cash_citi_200_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI CUSTOM CASH&l;sup&g;SM&l;/sup&g; CARD\&q;,\n\&q;subText\&q;: \&q;Earn $200 cash back after qualifying purchases\&q;,\n\&q;descriptionText\&q;: \&q;Plus enjoy a low intro APR for 15 months on purchases and balance transfers.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-custom-cash-credit-card?afc=106\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP754_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP754_Hero1.png\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP754_Hero2.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn $200 cash back\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Earn $200 cash back\&q;,\n\&q;mmBody\&q;: \&q;after qualifying purchases. Plus enjoy a low intro APR for 15 months on purchases and balance transfers.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;custom_cash_citi_200_HP21&q;,&q;NAME&q;:&q;custom_cash_citi_200_HP21&q;},&q;copy$$BasicChk083117Default&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;BasicChk083117Default\&q;,\n\&q;hdText\&q;: \&q;BASIC BANKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Banking Made Easy\&q;,\n\&q;descriptionText\&q;: \&q;Unlimited check writing, $0 minimum opening deposit required and over 60,000 fee-free ATMs in the US. Simple banking.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/17/checking/basic/generic/default.htm?Promo_ID=CZ92&a;intc=1~1~52~6~BANR~2~BasicChk_081017~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP358_M1.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP358_H1.jpg\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/BasicChk083117Default_Hero.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Banking Made Easy\&q;,\n\&q;mmBody\&q;: \&q;Unlimited check writing, $0 minimum opening deposit required and over 60,000 fee-free ATMs in the US. Simple banking.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BasicChk083117Default&q;,&q;NAME&q;:&q;BasicChk083117Default&q;},&q;copy$$Gold_Bonds_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Gold_Bonds_HP21\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Your Portfolio, Now Greener: The Emergence of Green Bonds\&q;,\n\&q;descriptionText\&q;: \&q;What you need to know about green bonds: from the history, what to look for and how sustainable investing fits into your portfolio.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/Money/Investing/What-to-know-when-investing-in-green-bonds\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1070_green-bonds_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Your Portfolio, Now Greener: The Emergence of Green Bonds\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Your Portfolio, Now Greener: The Emergence of Green Bonds\&q;,\n\&q;mmBody\&q;: \&q;What you need to know about green bonds: from the history, what to look for and how sustainable investing fits into your portfolio.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Gold_Bonds_HP21&q;,&q;NAME&q;:&q;Gold_Bonds_HP21&q;},&q;copy$$NKH_060718&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;NKH_060718\&q;,\n\&q;hdText\&q;: \&q;DINE + DO GOOD\&q;,\n\&q;subText\&q;: \&q;Help End Childhood Hunger\&q;,\n\&q;descriptionText\&q;: \&q;Spend $5 or more dining out with your enrolled Citi&l;sup&g;&a;reg;&l;/sup&g; credit card, we&s;ll donate $1 to No Kid Hungry &a;mdash; up to $2 million.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://dineout.citi.com/register.aspx?S=CA\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP488_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP488_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Dine + Do Good. Help End Childhood Hunger.\&q;,\n\&q;mmBody\&q;: \&q;Spend $5 or more dining out with your enrolled Citi&l;sup&g;&a;reg;&l;/sup&g; credit card, we&s;ll donate $1 to No Kid Hungry &a;mdash; up to $2 million. \&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;NKH_060718&q;,&q;NAME&q;:&q;NKH_060718&q;},&q;copy$$Q1_HELOC_2020&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q1_HELOC_2020\&q;,\n\&q;hdText\&q;: \&q;HOME EQUITY LINE OF CREDIT\&q;,\n\&q;subText\&q;: \&q;A Better Rate for Your Big Goals\&q;,\n\&q;descriptionText\&q;: \&q;Use the equity in your home to achieve your goals with our limited-time, low introductory rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/HELOC/Rate/default.htm?intc=1~1~52~6~BANR~2~Q1_HELOC_2020~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6229_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6229_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;A Better Rate for Your Big Goals\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;A Better Rate for Your Big Goals\&q;,\n\&q;mmBody\&q;: \&q;Use the equity in your home to achieve your goals with our limited-time, low introductory rate.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q1_HELOC_2020&q;,&q;NAME&q;:&q;Q1_HELOC_2020&q;},&q;copy$$CheckQ419_700SA&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CheckQ419_700SA\&q;,\n\&q;hdText\&q;: \&q;CITI PRIORITY PACKAGE\&q;,\n\&q;subText\&q;: \&q;Earn $700 with Citi Priority\&q;,\n\&q;descriptionText\&q;: \&q;Open new eligible checking and savings accounts and complete required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking-700/default.htm?Promo_ID=4GZ7YTFGUDCHP7&a;intc=1~1~52~6~BANR~2~CheckQ419_700SA~HPQ342020\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5821_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5821_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn $700 with Citi Priority\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn $700 with Citi Priority\&q;,\n\&q;mmBody\&q;: \&q;Open new eligible checking and savings accounts and complete required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CheckQ419_700SA&q;,&q;NAME&q;:&q;CheckQ419_700SA&q;},&q;copy$$3MONCD_COK&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;3MONCD_COK\&q;,\n\&q;hdText\&q;: \&q;CERTIFICATE OF DEPOSIT\&q;,\n\&q;subText\&q;: \&q;Lock in a 0.60% APY\&q;,\n\&q;descriptionText\&q;: \&q;Open a 3-month Cerfificate of Deposit with a $500 minimum balance and earn a high-yield rate.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/certificate-of-deposit-promotion/3-month/default.htm?intc=1~1~52~6~BANR~2~3MONCD_COK~HP\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP7370_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP7370_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Lock in a 0.60% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Lock in a 0.60% APY\&q;,\n\&q;mmBody\&q;: \&q;Open a 3-month Cerfificate of Deposit with a $500 minimum balance and earn a high-yield rate.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;3MONCD_COK&q;,&q;NAME&q;:&q;3MONCD_COK&q;},&q;copy$$Q319Save_CCP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q319Save_CCP\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.00% Promo Rate / 0.58% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/t/default.htm?package=ccp&a;intc=1~1~52~6~BANR~2~Q319Save_CCP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5137_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5137_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;2.00% Promo Rate / 0.58% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.00% Promo Rate / 0.58% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q319Save_CCP&q;,&q;NAME&q;:&q;Q319Save_CCP&q;},&q;copy$$COSTCOCONSUMER_CITICOM_OCT2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;COSTCOCONSUMER_CITICOM_OCT2018\&q;,\n\&q;hdText\&q;: \&q;COSTCO ANYWHERE VISA&l;sup&g;&a;reg;&l;/sup&g; CARD BY CITI\&q;,\n\&q;subText\&q;: \&q;Go Big with Cash Back Rewards\&q;,\n\&q;descriptionText\&q;: \&q;Earn cash back rewards on all of your purchases, wherever Visa is accepted, including 2% on all purchases from Costco Warehouses and Costco.com.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/citi-costco-anywhere-visa-credit-card?afc=106\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/8119_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2900_H.jpg\&q;,\n\&q;copyBgColor\&q;:\&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/8119_Art.png\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Hero_Costco_Anywhere_Visa_Card_Hero.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;Go Big with Cash Back Rewards\&q;,\n\&q;mmBody\&q;:\&q;Earn cash back rewards on all of your purchases, wherever Visa is accepted, including 2% on all purchases from Costco Warehouses and Costco.com.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;COSTCOCONSUMER_CITICOM_OCT2018&q;,&q;NAME&q;:&q;COSTCOCONSUMER_CITICOM_OCT2018&q;},&q;copy$$CheckQ219_500&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CheckQ219_500\&q;,\n\&q;hdText\&q;: \&q;THE CITIBANK ACCOUNT PACKAGE\&q;,\n\&q;subText\&q;: \&q;Earn Up To $500\&q;,\n\&q;descriptionText\&q;: \&q;Open new eligible checking and savings accounts and complete required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking-500/default.htm?channel=onsite&a;promo_ID=WE564683MYCHP5&a;intc=1~1~52~6~BANR~2~CheckQ219_500~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4321_500_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP4321_500_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn Up To $500\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn Up To $500\&q;,\n\&q;mmBody\&q;: \&q;Open new eligible checking and savings accounts and complete required activities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CheckQ219_500&q;,&q;NAME&q;:&q;CheckQ219_500&q;},&q;copy$$Q2SaveCCBA&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Q2SaveCCBA\&q;,\n\&q;hdText\&q;: \&q;Citi&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Will You Save Enough To Savor Life?\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible Savings Account and earn 1.25% Promo Interest Rate / 0.37% APY ($25k minimum balance &a; qualifying deposit).\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;http://banking.citibank.com/cbol/18/Q2/savings/ex/default.htm?promocode=ccba&a;intc=1~1~52~6~BANR~2~Q2SaveCCBA~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP457_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP457_H1.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;Will You Save Enough To Savor Life?\&q;,\n\&q;mmBody\&q;:\&q;Open an eligible Savings Account and earn 1.25% Promo Interest Rate / 0.37% APY ($25k minimum balance &a; qualifying deposit).\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2SaveCCBA&q;,&q;NAME&q;:&q;Q2SaveCCBA&q;},&q;copy$$Prequal_WAN_19&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Prequal_WAN_19\&q;,\n\&q;hdText\&q;: \&q;SEE IF YOU???RE PRE-SELECTED\&q;,\n\&q;subText\&q;: \&q;Apply for a Citi Credit Card Today\&q;,\n\&q;descriptionText\&q;: \&q;Getting started is fast and easy. Checking your eligibility won???t impact your credit score.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/cards/pre-screen?OC=CC-CITI-WAN&a;intc=banner~creditcards~prequal~WN4\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5820_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5820_H.jpg\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP_1554_2_0_Hero.png\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Apply for a Citi Credit Card Today\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Apply for a Citi Credit Card Today\&q;,\n\&q;mmBody\&q;: \&q;Getting started is fast and easy. Checking your eligibility won???t impact your credit score.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Prequal_WAN_19&q;,&q;NAME&q;:&q;Prequal_WAN_19&q;},&q;copy$$Q319Save_CCG&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q319Save_CCG\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.00% Promo Rate / 0.58% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/t/default.htm?package=ccg&a;intc=1~1~52~6~BANR~2~Q319Save_CCG~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5137_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5137_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;2.00% Promo Rate / 0.58% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.00% Promo Rate / 0.58% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q319Save_CCG&q;,&q;NAME&q;:&q;Q319Save_CCG&q;},&q;copy$$GENDERPAYBAN&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;GENDERPAYBAN\&q;,\n\&q;hdText\&q;: \&q;PROMOTING PAY EQUITY\&q;,\n\&q;subText\&q;: \&q;Advancing Equality Calculator\&q;,\n\&q;descriptionText\&q;: \&q;Citi collaborated with The Female Quotient on a tool to assess an organization&s;s raw gender pay gap &a; help drive pay equity.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.thefemalequotient.com/advancing-equality-calculator\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP9368_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/GENDERPAYBAN.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Advancing Equality Calculator\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;GENDERPAYBAN&q;,&q;NAME&q;:&q;GENDERPAYBAN&q;},&q;copy$$Q319Save_CCBA&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q319Save_CCBA\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.00% Promo Rate / 0.57% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/t/default.htm?package=ccba&a;intc=1~1~52~6~BANR~2~Q319Save_CCBA~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5137_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5137_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;2.00% Promo Rate / 0.57% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.00% Promo Rate / 0.57% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q319Save_CCBA&q;,&q;NAME&q;:&q;Q319Save_CCBA&q;},&q;copy$$CitiEnt_NYWine&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CitiEnt_NYWine\&q;,\n\&q;hdText\&q;: \&q;CITI ENTERTAINMENT\&q;,\n\&q;subText\&q;: \&q;Access to Virtual Experiences\&q;,\n\&q;descriptionText\&q;: \&q;Tune in to New York Wine Events Virtual Experiences with world renowned winemakers.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citientertainment.com/landing/new_york_wine_events_virtual_experiences\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/hp8451.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Access to Virtual Experiences\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;CITI ENTERTAINMENT\&q;,\n\&q;mmBody\&q;: \&q;Tune in to New York Wine Events Virtual Experiences with world renowned winemakers.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CitiEnt_NYWine&q;,&q;NAME&q;:&q;CitiEnt_NYWine&q;},&q;copy$$CPWM_0820_M8&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;CPWM_0820_M8\&q;,\n\&q;hdText\&q;: \&q;EARN UP TO $3,500\&q;,\n\&q;subText\&q;: \&q;Enjoy up to $3,500 &a; financial guidance\&q;,\n\&q;descriptionText\&q;: \&q;Enjoy a cash bonus w/ required activities &a; financial advisor support.\&q;,\n\&q;disclosure\&q;: \&q;NOT FDIC INSURED - NO BANK GUARANTEE - MAY LOSE VALUE\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/investment/cpwm/default.htm?intc=1~1~52~6~BANR~2~CPWM0820~M8\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/CPWM_2022_M1M7_560x315.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Enjoy up to $3,500 &a; financial guidance\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CPWM_0820_M8&q;,&q;NAME&q;:&q;CPWM_0820_M8&q;},&q;copy$$PRIORITY_Family_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;PRIORITY_Family_HP21\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Tips to Create Your Family???s Financial Plan\&q;,\n\&q;descriptionText\&q;: \&q;Getting the whole family to agree on a long-range financial plan is possible when you set goals that everyone can get behind.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/family/personal-financial-planning-for-families\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_1071_family-planning_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Tips to Create Your Family???s Financial Plan\&q;,\n\&q;mmBody\&q;: \&q;Getting the whole family to agree on a long-range financial plan is possible when you set goals that everyone can get behind.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PRIORITY_Family_HP21&q;,&q;NAME&q;:&q;PRIORITY_Family_HP21&q;},&q;copy$$sim_citicomREDPE_oct2016&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;sim_citicomREDPE_oct2016\&q;,\n\&q;hdText\&q;: \&q;CITI SIMPLICITY&l;sup&g;&a;reg;&l;/sup&g; CARD\&q;,\n\&q;subText\&q;: \&q;No Late Fees Ever\&q;,\n\&q;descriptionText\&q;: \&q;Plus a Low Intro APR on Balance Transfers &a; Purchases.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/credit-card-details/citi.action?ID=citi-simplicity-credit-card&a;afc=106&a;intc=intc=1~1~52~6~BANR~1~sim_citicomREDPE_oct2016\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3893_SIM_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;:\&q;/JRS/banners/hero_background/HP2.0_Simplicity_Hero_Card_Background.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;lightBlue\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Apply for the Citi Simplicity Card.\&q;,\n\&q;prodTitle\&q;: \&q;CITI SIMPLICITY(R) CARD\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/HP3893_SIM_CardArt.png\&q;,\n\&q;homepage2Image\&q; : \&q;/JRS/banners/homepage2/Hero_Simplicity_Card.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;:\&q;No Late Fees Ever\&q;,\n\&q;mmBody\&q;:\&q;Plus a Low Intro APR on Balance Transfers &a; Purchases with the Citi Simplicity&l;sup&g;&a;reg;&l;/sup&g; Card.\&q;,\n\&q;prReview\&q;:\&q;true\&q;,\n\&q;pid\&q;:\&q;202\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;sim_citicomREDPE_oct2016&q;,&q;NAME&q;:&q;sim_citicomREDPE_oct2016&q;},&q;copy$$Pri_Travel&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Pri_Travel\&q;,\n\&q;hdText\&q;: \&q;THE CITI PRIORITY PACKAGE\&q;,\n\&q;subText\&q;: \&q;Travel the World with Peace of Mind\&q;,\n\&q;descriptionText\&q;: \&q;Take advantage of benefits that give you the freedom to enjoy your trip to the fullest.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/JRS/pands/detail.do?ID=CitiPriorityOverview&a;intc=1~1~52~6~BANR~2~Pri_Travel~XPX~#benefits-that-travel\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3090_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP3090_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;The Citi Priority Package\&q;,\n\&q;mmBody\&q;: \&q;Take advantage of benefits that give you the freedom to enjoy your trip to the fullest.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Pri_Travel&q;,&q;NAME&q;:&q;Pri_Travel&q;},&q;copy$$HYCA_ATM&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;HYCA_ATM\&q;,\n\&q;hdText\&q;: \&q;HIGH-YIELD CHECKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Refunded ATM Fees.&l;br/&g; Smart Move. \&q;,\n\&q;descriptionText\&q;: \&q;Bank smarter with unlimited ATM fee reimbursements and a high-yield checking account. Available in select markets.\&q;,\n\&q;ctaLabel\&q;: \&q;Get Details\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking/high-yield-checking/default.htm?Promo_ID=4FWDQVC8TKCHPA&a;intc=1~1~21~1~BANR~2~HYCA_ATM~HP\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6166_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6166_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Refunded ATM Fees. Smart Move.\&q;,\n\&q;mmBody\&q;: \&q;Bank smarter with unlimited ATM fee reimbursements and a high-yield checking account. Available in select markets.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;HYCA_ATM&q;,&q;NAME&q;:&q;HYCA_ATM&q;},&q;copy$$PrideMonth_2019&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;:
    \&q;PrideMonth_2019\&q;,\n\&q;hdText\&q;: \&q;CELEBRATING WORLDPRIDE\&q;,\n\&q;subText\&q;: \&q;Supporting the LGBT+ Community\&q;,\n\&q;descriptionText\&q;: \&q;At Citi, we believe an inclusive world unlocks the true potential in what we can achieve together. Let&s;s create a better tomorrow.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://blog.citigroup.com/2019/06/the-private-sector-must-take-action-for-lgbt-rights\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4864_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Supporting the LGBT+ Community\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Supporting the LGBT+ Community\&q;,\n\&q;mmBody\&q;: \&q;At Citi, we believe an inclusive world unlocks the true potential in what we can achieve together. Let&s;s create a better tomorrow.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PrideMonth_2019&q;,&q;NAME&q;:&q;PrideMonth_2019&q;},&q;copy$$AAPLAT_LTO_oct2017_DPO&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;AAPLAT_LTO_oct2017_DPO\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; / AADVANTAGE&l;sup&g;&a;reg;&l;/sup&g; PLATINUM SELECT&l;sup&g;&a;reg;&l;/sup&g; WORLD ELITE&l;sup&g;TM&l;/sup&g; MASTERCARD&l;sup&g;&a;reg;&l;/sup&g;\&q;,\n\&q;subText\&q;: \&q;New Ways to Earn Miles\&q;,\n\&q;descriptionText\&q;: \&q;Earn {{pricingType.RwBonusAmount1}} AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles after qualifying purchases, double miles on eligible AA purchases and at restaurants and gas stations.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.citi.com/credit-cards/credit-card-details/citi.action?ID=citi-aadvantage-platinum-elite-credit-card&a;afc=106&a;intc=1~1~52~6~BANR~1~AAPLAT_LTO_3Q2018\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP434_Module.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H1_HP434_background.jpg\&q;,\n\&q;copyBgColor\&q;: \&q;classDarkGrey\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Apply for the Citi AAdvantage Platinum Select Card.\&q;,\n\&q;prodTitle\&q;: \&q;CITI(R) / AADVANTAGE(R) PLATINUM SELECT(R) CARD\&q;,\n\&q;prodImg\&q;: \&q;/JRS/banners/card_art/AAPLAT_hero_card.png\&q;,\n\&q;prodFlag\&q;: \&q;true\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;:\&q;New Ways to Earn Miles\&q;,\n\&q;mmBody\&q;:\&q;Earn {{pricingType.RwBonusAmount1}} AAdvantage&l;sup&g;&a;reg;&l;/sup&g; bonus miles after qualifying purchases, double miles on eligible AA purchases and at restaurants and gas stations.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;AAPLAT_LTO_oct2017_DPO&q;,&q;NAME&q;:&q;AAPLAT_LTO_oct2017_DPO&q;},&q;copy$$Generic_Check_Basic_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Generic_Check_Basic_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; BASIC BANKING ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Enjoy Simple Checking\&q;,\n\&q;descriptionText\&q;: \&q;Meet your checking needs with unlimited check writing &a; perks for those 62 and older, plus 24/7 digital banking.\&q;,\n\&q;ctaLabel\&q;: \&q;Open an Account\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/banking/checking-account\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_272_Basic_3Up_M1M7_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP_272_Basic_Hero_Image.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Enjoy Simple Checking\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Enjoy Simple Checking\&q;,\n\&q;mmBody\&q;: \&q;Meet your checking needs with unlimited check writing &a; perks for those 62 and older, plus 24/7 digital banking.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check_Basic_HP21&q;,&q;NAME&q;:&q;Generic_Check_Basic_HP21&q;},&q;copy$$BLUE_Grad_Appeal&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;BLUE_Grad_Appeal\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Get a (Post-College) Life: 4 Cities with Grad Appeal\&q;,\n\&q;descriptionText\&q;: \&q;Breaking down the decision on where to move after school.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/milestones/big-cities-attracting-college-graduates\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2120_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Get a (Post-College) Life: 4 Cities with Grad Appeal\&q;,\n\&q;mmBody\&q;: \&q;Breaking down the decision on where to move after school.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;BLUE_Grad_Appeal&q;,&q;NAME&q;:&q;BLUE_Grad_Appeal&q;},&q;copy$$Q418Save_CCP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q418Save_CCP\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.62% APY ($25K minimum balance/qualifying activities).\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/savings/ex/default.htm?promocode=ccp&a;intc=1~1~52~6~BANR~2~Q418Save_CCP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2779_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2779_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;mmBody\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.62% APY ($25K minimum balance/qualifying activities).\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q418Save_CCP&q;,&q;NAME&q;:&q;Q418Save_CCP&q;},&q;copy$$Q319Save_NT&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q319Save_NT\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;2.00% Promo Rate / 0.57% APY\&q;,\n\&q;descriptionText\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/nt/split/default.htm?channel=onsite&a;intc=1~1~52~6~BANR~2~Q319Save_NT~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP5137_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP5137_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;2.00% Promo Rate / 0.57% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;2.00% Promo Rate / 0.57% APY\&q;,\n\&q;mmBody\&q;: \&q;Designed to put your money to work. Open an eligible Savings Account with $25k minimum balance and required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q319Save_NT&q;,&q;NAME&q;:&q;Q319Save_NT&q;},&q;copy$$PRIORITY_EasyHomeHacks&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;PRIORITY_EasyHomeHacks\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Easy Home Hacks to Save Energy and Money\&q;,\n\&q;descriptionText\&q;: \&q;Want to see your energy bill shrink? Here are five simple ways to conserve energy at home and maximize your savings.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/energy-saving-tips-to-save-on-electric-bill\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3637_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;PRIORITY_EasyHomeHacks&q;,&q;NAME&q;:&q;PRIORITY_EasyHomeHacks&q;},&q;copy$$Q418Save_CCG&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Q418Save_CCG\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;descriptionText\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.62% APY ($25K minimum balance/qualifying activities).\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/18/Q4/savings/ex/default.htm?promocode=ccg&a;intc=1~1~52~6~BANR~2~Q418Save_CCG~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2779_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP2779_H2.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Limited-Time Special Rate\&q;,\n\&q;mmBody\&q;: \&q;Open an eligible Savings Account and earn 2.15% Promo Interest Rate / 0.62% APY ($25K minimum balance/qualifying activities).\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q418Save_CCG&q;,&q;NAME&q;:&q;Q418Save_CCG&q;},&q;copy$$Q2Mort18&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q; : \&q;Q2Mort18\&q;,\n \&q;hdText\&q; : \&q;MORTGAGE OFFER\&q;,\n \&q;subText\&q; : \&q;Bring Home a Special Mortgage Rate\&q;,\n \&q;descriptionText\&q; : \&q;Attractive mortgage rate with relationship pricing from Citigold&l;sup&g;&a;reg;&l;/sup&g;. 3/8% Mortgage Interest Rate with qualifying requirements.\&q;,\n \&q;ctaLabel\&q; : \&q;Get Details\&q;,\n \&q;ctaImage\&q; : \&q;\&q;,\n \&q;ctaLink\&q; : \&q;/US/JRS/portal/template.do?ID=relationship_pricing_landing&a;intc=1~1~52~6~BANR~2~Q2Mort18~XPX\&q;,\n \&q;linkTarget\&q; : \&q;\&q;,\n \&q;imgLarge\&q; : \&q;/JRS/banners/modules/HP483_M1M2M7.jpg\&q;,\n \&q;imgSmall\&q; : \&q;\&q;,\n \&q;videoObject\&q; : \&q;\&q;,\n \&q;heroImg1\&q; : \&q;/JRS/banners/HP483_H2.jpg\&q;,\n \&q;heroImg2\&q; : \&q;\&q;,\n \&q;imgTitle\&q; : \&q;\&q;,\n \&q;prodTitle\&q; : \&q;\&q;,\n \&q;prodImg\&q; : \&q;\&q;,\n \&q;prodFlag\&q; : \&q;false\&q;,\n \&q;speedBump\&q; : \&q;\&q;,\n \&q;heroColor\&q; : \&q;dark\&q;,\n \&q;mmTitle\&q; : \&q;Bring Home a Special Mortgage Rate\&q;,\n \&q;mmBody\&q; :\&q;Attractive mortgage rate with relationship pricing from Citigold&l;sup&g;&a;reg;&l;/sup&g;. 3/8% Mortgage Interest Rate with qualifying requirements.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2Mort18&q;,&q;NAME&q;:&q;Q2Mort18&q;},&q;copy$$CARDS_International&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CARDS_International\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;5 Helpful Tips for International Travelers\&q;,\n\&q;descriptionText\&q;: \&q;A little advance planning can help you avoid unanticipated snags and fees. Read these tips and help maximize your credit card benefits.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/money/best-credit-card-travel-tips\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP3338_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;5 Helpful Tips for International Travelers\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CARDS_International&q;,&q;NAME&q;:&q;CARDS_International&q;},&q;copy$$Generic_Check_Gen_HP21&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;Generic_Check_Gen_HP21\&q;,\n\&q;hdText\&q;: \&q;CITI&l;sup&g;&a;reg;&l;/sup&g; CHECKING ACCOUNTS\&q;,\n\&q;subText\&q;: \&q;Checking Made Simple\&q;,\n\&q;descriptionText\&q;: \&q;Enjoy checking with 24/7 digital banking and no minimum opening deposit.\&q;,\n\&q;ctaLabel\&q;: \&q;Compare Accounts\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://online.citi.com/US/ag/banking/checking-account\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP_277_Generic_3UP_M1M7_Image.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/HP664_GenericChecking_Hero.jpg\&q;,\n\&q;homepage2Image\&q;: \&q;/JRS/banners/homepage2/HP_277_Generic_Hero_Image.png\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Checking Made Simple\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Checking Made Simple\&q;,\n\&q;mmBody\&q;: \&q;Enjoy checking with 24/7 digital banking and no minimum opening deposit.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Generic_Check_Gen_HP21&q;,&q;NAME&q;:&q;Generic_Check_Gen_HP21&q;},&q;copy$$20Q1Save_NTP&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;20Q1Save_NTP\&q;,\n\&q;hdText\&q;: \&q;SAVINGS ACCOUNT\&q;,\n\&q;subText\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY\&q;,\n\&q;descriptionText\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/savings-promotion/nt/default.htm?intc=1~1~52~6~BANR~2~20Q1Save_NTP~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP6405_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP6405_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn 1.50% Promo Rate &a; 0.44% APY\&q;,\n\&q;mmBody\&q;: \&q;Don&s;t miss out on a great rate when you open an Eligible Savings Account with $25,000 minimum balance &a; required activities.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;20Q1Save_NTP&q;,&q;NAME&q;:&q;20Q1Save_NTP&q;},&q;copy$$MobileAPP_citicom_HP_082116&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;MobileAPP_citicom_HP_082116\&q;,\n\&q;hdText\&q;: \&q;CITI MOBILE&l;sup&g;&a;reg;&l;/sup&g; APP\&q;,\n\&q;subText\&q;: \&q;Stay connected, enjoy peace of mind\&q;,\n\&q;descriptionText\&q;: \&q;Download the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; app and simplify your banking.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;/US/JRS/portal.c?ID=CitiDigitalServices&a;intc=1~1~52~6~BANR~2~MobileApp083117Default~XPX\&q;,\n\&q;linkTarget\&q;: \&q;\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/MobileApp_.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/H2_Mobile_background.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Stay connected, enjoy peace of mind\&q;,\n\&q;mmBody\&q;: \&q;Download the Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; app and simplify your banking.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;MobileAPP_citicom_HP_082116&q;,&q;NAME&q;:&q;MobileAPP_citicom_HP_082116&q;},&q;copy$$Q2Check600&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q;: \&q;Q2Check600\&q;,\n \&q;hdText\&q;: \&q;CITI CHECKING\&q;,\n \&q;subText\&q;: \&q;Get Something Extra, Earn Up To $600\&q;,\n \&q;descriptionText\&q;: \&q;With an eligible checking and savings account and by completing qualifying activities.\&q;,\n \&q;ctaLabel\&q;: \&q;Learn More\&q;,\n \&q;ctaImage\&q;: \&q;\&q;,\n \&q;ctaLink\&q;: \&q;https://banking.citibank.com/cbol/18/Q2/checking/400-600/default.htm?Promo_ID=CZBG&a;intc=1~1~52~6~BANR~2~Q2Check600~XPX\&q;,\n \&q;linkTarget\&q;: \&q;_blank\&q;,\n \&q;imgLarge\&q;: \&q;/JRS/banners/modules/Q2Check600-M1M73U.jpg\&q;,\n \&q;imgSmall\&q;: \&q;\&q;,\n \&q;videoObject\&q;: \&q;\&q;,\n \&q;heroImg1\&q;: \&q;/JRS/banners/H2-IMAGE-Q2_Checking_H2_2160x600-4.jpg\&q;,\n \&q;heroImg2\&q;: \&q;\&q;,\n \&q;imgTitle\&q;: \&q;\&q;,\n \&q;prodTitle\&q;: \&q;\&q;,\n \&q;prodImg\&q;: \&q;\&q;,\n \&q;prodFlag\&q;: \&q;\&q;,\n \&q;speedBump\&q;: \&q;\&q;,\n \&q;heroColor\&q;: \&q;dark\&q;,\n \&q;disclosure\&q;: \&q;\&q;,\n \&q;mmTitle\&q;: \&q;Get Something Extra, Earn Up To $600\&q;,\n \&q;mmBody\&q;: \&q;With an eligible checking and savings account and by completing qualifying activities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Q2Check600&q;,&q;NAME&q;:&q;Merch100&q;},&q;copy$$Pride_2018&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\&q;contentID\&q;: \&q;Pride_2018\&q;,\n\&q;hdText\&q;: \&q;TAKING A STAND\&q;,\n\&q;subText\&q;: \&q;Citi Prides Itself on Making Progress\&q;,\n\&q;descriptionText\&q;: \&q;Join us as we #StandForProgress and support the LGBTQ+ community today, tomorrow and every day.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;http://www.citigroup.com/citi/diversity/?intc=1~1~52~6~BANR~2~Pride_2018~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP485.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;\&q;,\n\&q;mmBody\&q;: \&q;\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Pride_2018&q;,&q;NAME&q;:&q;Pride_2018&q;},&q;copy$$CITIGOLD_Fun_Ahead&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CITIGOLD_Fun_Ahead\&q;,\n\&q;hdText\&q;: \&q;LIFE AND MONEY BY CITI\&q;,\n\&q;subText\&q;: \&q;Fun Ahead: Planning for the Future of Retirement\&q;,\n\&q;descriptionText\&q;: \&q;Plan ahead for the future of retirement, which is less about slowing down and more about shaking up lifestyles.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://www.lifeandmoney.citi.com/milestones/the-new-retirement\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP2121_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;\&q;,\n\&q;mmTitle\&q;: \&q;Fun Ahead: Planning for the Future of Retirement\&q;,\n\&q;mmBody\&q;: \&q;Plan ahead for the future of retirement, which is less about slowing down and more about shaking up lifestyles.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CITIGOLD_Fun_Ahead&q;,&q;NAME&q;:&q;CITIGOLD_Fun_Ahead&q;},&q;copy$$CheckQ219_600&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\&q;contentID\&q;: \&q;CheckQ219_600\&q;,\n\&q;hdText\&q;: \&q;CITI PRIORITY ACCOUNT PACKAGE\&q;,\n\&q;subText\&q;: \&q;Earn $600\&q;,\n\&q;descriptionText\&q;: \&q;Open new eligible checking and savings accounts and complete required activities.\&q;,\n\&q;ctaLabel\&q;: \&q;Learn More\&q;,\n\&q;ctaImage\&q;: \&q;\&q;,\n\&q;ctaLink\&q;: \&q;https://banking.citi.com/cbol/checking-600/default.htm?channel=onsite&a;promo_ID=WE564683MYCHP6&a;intc=1~1~52~6~BANR~2~CheckQ219_600~XPX\&q;,\n\&q;linkTarget\&q;: \&q;_blank\&q;,\n\&q;imgLarge\&q;: \&q;/JRS/banners/modules/HP4321_600_M.jpg\&q;,\n\&q;imgSmall\&q;: \&q;\&q;,\n\&q;videoObject\&q;: \&q;\&q;,\n\&q;heroImg1\&q;: \&q;/JRS/banners/hero_background/HP4321_600_H.jpg\&q;,\n\&q;heroImg2\&q;: \&q;\&q;,\n\&q;imgTitle\&q;: \&q;Earn $600\&q;,\n\&q;prodTitle\&q;: \&q;\&q;,\n\&q;prodImg\&q;: \&q;\&q;,\n\&q;prodFlag\&q;: \&q;false\&q;,\n\&q;speedBump\&q;: \&q;\&q;,\n\&q;heroColor\&q;: \&q;dark\&q;,\n\&q;mmTitle\&q;: \&q;Earn $600\&q;,\n\&q;mmBody\&q;: \&q;Open new eligible checking and savings accounts and complete required activities.\&q;\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;CheckQ219_600&q;,&q;NAME&q;:&q;CheckQ219_600&q;},&q;copy$$Emotion_Rain&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n \&q;contentID\&q; : \&q;Emotion_Rain\&q;,\n \&q;hdText\&q; : \&q;\&q;,\n \&q;subText\&q; : \&q;\&q;,\n \&q;descriptionText\&q; : \&q;\&q;,\n \&q;ctaLabel\&q; : \&q;Learn More\&q;,\n \&q;ctaImage\&q; : \&q;\&q;,\n \&q;ctaLink\&q; : \&q;https://next.citi.com\&q;,\n \&q;linkTarget\&q; : \&q;_blank\&q;,\n \&q;imgLarge\&q; : \&q;/JRS/banners/modules/HP447_M.png\&q;,\n \&q;imgSmall\&q; : \&q;\&q;,\n \&q;videoObject\&q; : \&q;\&q;,\n \&q;heroImg1\&q; : \&q;\&q;,\n \&q;heroImg2\&q; : \&q;\&q;,\n \&q;imgTitle\&q; : \&q;\&q;,\n \&q;prodTitle\&q; : \&q;\&q;,\n \&q;prodImg\&q; : \&q;\&q;,\n \&q;prodFlag\&q; : \&q;false\&q;,\n \&q;speedBump\&q; : \&q;\&q;,\n \&q;heroColor\&q; : \&q;\&q;,\n \&q;mmTitle\&q; : \&q;The Citi Mobile&l;sup&g;&a;reg;&l;/sup&g; App\&q;,\n \&q;mmBody\&q; :\&q;Fast. Simple. Smart. So you can spend more moments in the moment.\&q;}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;Emotion_Rain&q;,&q;NAME&q;:&q;Emotion_Rain&q;}}},&q;timestamp&q;:&q;2022-06-12T03:11:08.892Z&q;},&q;/staticcms/USGCB/en_US/appid/cbol_pe_offers.json&q;:{&q;content&q;:{&q;cbol_pe_offers&q;:{&q;copy$$pe_service_content&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;TEXT&q;:&q;{\n\n \&q;liverampValidationObject\&q;: { \&q;blackListKeywords\&q;: [\&q;script\&q;, \&q;embed\&q;, \&q;object\&q;],\n \&q;whiteListVariables\&q;: [\&q;idl\&q;]\n },\n \&q;liveRampUrl\&q;:\&q;https://api.rlcdn.com/api/identity?pid=1&a;rt=idl\&q;,\n \&q;offerOrchestrationUrl\&q;: \&q;/v1/marketing/offers/banner\&q;,\n\&q;peUrlMaskingFeature\&q; : \&q;true\&q;,\n\&q;blueKaiUrl\&q; : \&q;https://stags.bluekai.com/site/19469?ret=json\&q;,\n\&q;blueKaiTimeout\&q; : 600,\n\&q;blueKaiCampaignIdCheck\&q; : \&q;53299\&q;,\n\&q;LIVE_RAMP_TIMEOUT\&q; : 700,\n\&q;PE_ORCHESTRATION_TIMEOUT\&q; : 1700\n\n}&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;pe_service_content&q;,&q;NAME&q;:&q;PE service static contents&q;}}},&q;timestamp&q;:&q;2022-06-12T03:14:37.158Z&q;},&q;/staticcms/USGCB/en_US/appid/cbol_ag_container.json&q;:{&q;content&q;:{&q;cbol_ag_container&q;:{&q;copy$$ff_PGLCardFull&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;startModalContent&q;:{&q;Subhead&q;:&q;Ready to explore all of your new card&s;s features?&q;,&q;img&q;:&q;/JRS/banners/whats_new/blueCard.png&q;,&q;Header&q;:&q;Introducing your Citi Custom Cash Card!&q;,&q;backgroundImg&q;:&q;/JRS/banners/whats_new/blueBackground.png&q;},&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;ff_PGLCardFull&q;,&q;NAME&q;:&q;APP_ ff_PGLCardFull &q;},&q;copy$$whats_new_wpb&q;:{&q;CBOL-ANG-2021-00-00&q;:{&q;imgUrl&q;:&q; &q;,&q;wpbData&q;:{&q;organizationName&q;:&q;company-name&q;,&q;wpbImgURL&q;:&q;/JRS/banners/whats_new/brand.png&q;},&q;Feature-1&q;:{&q;header&q;:&q; &q;,&q;CTALink&q;:&q; &q;,&q;iconUrl&q;:&q;icon-star&q;,&q;CTALabel&q;:&q; &q;,&q;content&q;:&q;We&s;ve created a better way of banking designed especially for you. Get ready to experience new tools, products and even more to come.&q;,&q;order&q;:&q;1&q;},&q;title&q;:&q;Welcome to Citi@Work&l;sup&g;SM&l;/sup&g;&q;,&q;CTALabel&q;:&q;Continue&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;showing&q;:&q;true&q;,&q;CONTENT_ID&q;:&q;whats_new_wpb&q;,&q;NAME&q;:&q;APP_whats_new_wpb&q;},&q;copy$$ff_NonPGLUser_gold&q;:{&q;endModalContentEmployee&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for Taking the Tour!&q;,&q;paragraph2&q;:&q;You can help make this experience even better by giving feedback. We can???t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/tellUsGold.png&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;endModalContent&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for taking the tour!&q;,&q;paragraph2&q;:&q;You can help us make this experience even better by giving feedback. We can&s;t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/doneGold.png&q;},&q;startModalContent&q;:{&q;Subhead&q;:&q;Explore fresh features, an updated view and more.&q;,&q;img&q;:&q;/JRS/banners/whats_new/welcomeGold.png&q;,&q;Header&q;:&q;Tour Your New Citigold&l;sup&g;&a;reg&l;/sup&g; Experience&q;,&q;buttonCTA&q;:&q;Start the Tutorial&q;},&q;CONTENT_ID&q;:&q;ff_NonPGLUser_gold&q;,&q;NAME&q;:&q;APP_ff_NonPGLUser_gold&q;},&q;copy$$SessionTimeOut&q;:{&q;Action&q;:&q;If additional time is required, please click \&q;Continue Session\&q;. To allow the session to end, click \&q;End\&q;.&q;,&q;PrimaryButtonText&q;:&q;Continue Session&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;TimeOut&q;:&q;Due to inactivity, your session will expire in:&q;,&q;CONTENT_ID&q;:&q;SessionTimeOut&q;,&q;Minutes&q;:&q;minute(s)&q;,&q;NAME&q;:&q;SessionTimeOut&q;,&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;CancelButtonText&q;:&q;End&q;,&q;Headline&q;:&q;Session Time-Out&q;,&q;SiteCatPageName&q;:&q;SiteCatPageName&q;,&q;Seconds&q;:&q;second(s)&q;},&q;copy$$ff_PGLMultiCardLite&q;:{&q;endModalContentEmployee&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for Taking the Tour!&q;,&q;paragraph2&q;:&q;You can help make this experience even better by giving feedback. We can???t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/tellUsBlue.png&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;endModalContent&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for taking the tour!&q;,&q;paragraph2&q;:&q;You can help make this experience even better by giving feedback. We can???t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/FeedBackBlue.png&q;},&q;startModalContent&q;:{&q;Subhead&q;:&q;We???re excited to show you even more of what Citi has to offer.&q;,&q;img&q;:&q;/JRS/banners/whats_new/blueCard.png&q;,&q;Header&q;:&q;Introducing your Citi Custom Cash Card!&q;,&q;backgroundImg&q;:&q;/JRS/banners/whats_new/blueBackground.png&q;,&q;Copy&q;:&q;Ready to take a look?&q;,&q;buttonCTA&q;:&q;Start the Tutorial&q;},&q;CONTENT_ID&q;:&q;ff_PGLMultiCardLite&q;,&q;NAME&q;:&q;APP_ff_PGLMultiCardLite&q;},&q;copy$$ff_NonPGLUser&q;:{&q;endModalContentEmployee&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for Taking the Tour!&q;,&q;paragraph2&q;:&q;You can help make this experience even better by giving feedback. We can???t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/tellUsBlue.png&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;endModalContent&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for taking the tour!&q;,&q;paragraph2&q;:&q;You can help us make this experience even better by giving feedback. We can&s;t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/doneTour.svg&q;},&q;startModalContent&q;:{&q;img&q;:&q;/JRS/banners/whats_new/welcome.svg&q;,&q;Header&q;:&q;Welcome to Your New View!&q;,&q;Copy&q;:&q;Ready to take a look around?&q;,&q;buttonCTA&q;:&q;Start the Tutorial&q;},&q;CONTENT_ID&q;:&q;ff_NonPGLUser&q;,&q;NAME&q;:&q;APP_ff_NonPGLUser&q;},&q;copy$$ff_PGLMultiCardFull&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;startModalContent&q;:{&q;Subhead&q;:&q;Ready to explore all of your new card&s;s features?&q;,&q;img&q;:&q;/JRS/banners/whats_new/blueCard.png&q;,&q;Header&q;:&q;Introducing your Citi Custom Cash Card!&q;,&q;backgroundImg&q;:&q;/JRS/banners/whats_new/blueBackground.png&q;},&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;ff_PGLMultiCardFull&q;,&q;NAME&q;:&q;APP_ff_PGLMultiCardFull&q;},&q;copy$$employee_feedback&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CONTENT_ID&q;:&q;employee_feedback&q;,&q;CBOL-ANG-2021-05-00&q;:{&q;imgUrl&q;:&q;/JRS/banners/whats_new/tellUs.png&q;,&q;Feature-1&q;:{&q;header&q;:&q;Got Feedback? We???re Listening.&q;,&q;CTALink&q;:&q; &q;,&q;iconUrl&q;:&q; &q;,&q;CTALabel&q;:&q; &q;,&q;content&q;:&q;As Citi employees, we work daily to exceed our customers??? expectations ??? but it???s your unique insight that actually makes it happen. In every way, your voice matters.&q;,&q;order&q;:&q;1&q;},&q;title&q;:&q;What???s New&q;,&q;CTALabel&q;:&q;Got it&q;},&q;NAME&q;:&q;APP_Employee_Feedback&q;},&q;copy$$ff_NonPGLUser_cpc&q;:{&q;endModalContentEmployee&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for Taking the Tour!&q;,&q;paragraph2&q;:&q;You can help make this experience even better by giving feedback. We can???t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/tellUsCPC.png&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;endModalContent&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for taking
    the tour!&q;,&q;paragraph2&q;:&q;You can help us make this experience even better by giving feedback. We can&s;t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/doneCpc.png&q;},&q;startModalContent&q;:{&q;Subhead&q;:&q;Explore fresh features, an updated view and more.&q;,&q;img&q;:&q;/JRS/banners/whats_new/welcomeCpc.png&q;,&q;Header&q;:&q;Take Your New Citigold&l;sup&g;&a;reg&l;/sup&g; Private Client Experience&q;,&q;buttonCTA&q;:&q;Start the Tutorial&q;},&q;CONTENT_ID&q;:&q;ff_NonPGLUser_cpc&q;,&q;NAME&q;:&q;APP_ff_NonPGLUser_cpc&q;},&q;copy$$ff_PGLCardLite&q;:{&q;endModalContentEmployee&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for Taking the Tour!&q;,&q;paragraph2&q;:&q;You can help make this experience even better by giving feedback. We can???t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/tellUsBlue.png&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;endModalContent&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for taking the tour!&q;,&q;paragraph2&q;:&q;You can help make this experience even better by giving feedback. We can???t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/doneTour.svg&q;},&q;startModalContent&q;:{&q;Subhead&q;:&q;We???re glad you???re here.&q;,&q;img&q;:&q;/JRS/banners/whats_new/welcome.svg&q;,&q;Header&q;:&q;Welcome to Citi!&q;,&q;Copy&q;:&q;Ready to take a look around?&q;,&q;buttonCTA&q;:&q;Start the Tutorial&q;},&q;CONTENT_ID&q;:&q;ff_PGLCardLite&q;,&q;NAME&q;:&q;APP_ff_PGLCardLite&q;},&q;copy$$Cobrowse&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;PrimaryButtonText&q;:&q;Ok&q;,&q;CancelButtonText&q;:&q;Cancel&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;Content&q;:&q;During your call, you may be asked to share our screen for a faster, more efficient experience. If you agree, the phone representative you&s;re speaking with will give you a Service Code to enter below.&q;,&q;Refernece&q;:&q;If you need assistance from a Citi representative, &l;a href=\&q;/US/CBOL/hc/contactus/flow.action\&q;&g;contact us&l;/a&g; via chat or phone.&q;,&q;Title&q;:&q;Share Your Screen With A Phone Representative&q;,&q;placeholder&q;:&q;Service Code&q;,&q;ErrorMessage&q;:&q;Please enter a valid service code&q;,&q;CONTENT_ID&q;:&q;Cobrowse&q;,&q;NAME&q;:&q;Cobrowse&q;},&q;copy$$whats_new&q;:{&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;CBOL-ANG-2021-10-00&q;:{&q;imgUrl&q;:&q; &q;,&q;Feature-2-Gold-Priority-CPC-Default&q;:{&q;header&q;:&q;Earn &a; Save&q;,&q;CTALink&q;:&q;/US/ag/dashboard?extension=savingGoals&q;,&q;iconUrl&q;:&q;icon-star&q;,&q;CTALabel&q;:&q;Enroll now&q;,&q;content&q;:&q;Have a portion of every direct deposit automatically put into your savings. Available for Retail Bank customers with Citi checking and Citi savings accounts.&q;,&q;order&q;:&q;2&q;},&q;Feature-3-Gold-Priority-CPC-Default&q;:{&q;header&q;:&q;Set &a; Save&q;,&q;CTALink&q;:&q;/US/ag/dashboard?extension=savingGoals&q;,&q;iconUrl&q;:&q;icon-bulb&q;,&q;CTALabel&q;:&q;Enroll now&q;,&q;content&q;:&q;Set up recurring transfers and watch your savings grow. Available for Retail Bank customers with Citi checking and Citi savings accounts.&q;,&q;order&q;:&q;3&q;},&q;title&q;:&q;Check Out What&s;s New&q;,&q;CTALabel&q;:&q;Got It&q;,&q;Feature-1-Gold-Priority-CPC-Default&q;:{&q;header&q;:&q;Spend &a; Save&q;,&q;CTALink&q;:&q;/US/ag/dashboard?extension=savingGoals&q;,&q;iconUrl&q;:&q;icon-bell&q;,&q;CTALabel&q;:&q;Enroll now&q;,&q;content&q;:&q;Watch your savings grow! Spend &a; Save rounds up your purchases to the next whole dollar and transfers the round ups amount from your Citi checking to Citi savings account. Available for Retail Bank customers with Citi checking and Citi savings accounts.&q;,&q;order&q;:&q;1&q;}},&q;showing&q;:&q;true&q;,&q;CONTENT_ID&q;:&q;whats_new&q;,&q;NAME&q;:&q;APP_Whats_New&q;},&q;copy$$ff_NonPGLUser_single&q;:{&q;endModalContentEmployee&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for taking the tour!&q;,&q;paragraph2&q;:&q;You can help us make this experience even better by giving feedback. We can&s;t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/tellUsBlue.png&q;},&q;SUBGROUP_TYPE&q;:&q;Container&q;,&q;GROUP_TYPE&q;:&q;Container&q;,&q;SET_NOTIFICATION&q;:&q;N&q;,&q;endModalContent&q;:{&q;paragraph1&q;:&q;If you have any more questions, you can use the search function on your navigation bar.&q;,&q;Header&q;:&q;Thanks for taking the tour!&q;,&q;paragraph2&q;:&q;You can help us make this experience even better by giving feedback. We can&s;t wait to hear from you.&q;,&q;doneImg&q;:&q;/JRS/banners/whats_new/FeedBackBlue.png&q;},&q;startModalContent&q;:{&q;img&q;:&q;/JRS/banners/whats_new/welcome.svg&q;,&q;Header&q;:&q;Explore Your New View&q;,&q;Copy&q;:&q;We&s;ve done some remodeling! We&s;ll show you where to find everything you need.&q;,&q;buttonCTA&q;:&q;Start the Tutorial&q;},&q;CONTENT_ID&q;:&q;ff_NonPGLUser_single&q;,&q;NAME&q;:&q;ff_NonPGLUser_single&q;}}},&q;timestamp&q;:&q;2022-06-12T03:14:37.117Z&q;},&q;/prelogin/e2eConfig/client/cbol&q;:{&q;globalE2eFlag&q;:true,&q;e2eEnabledUri&q;:[&q;POST/digital/security/passwordReset&q;,&q;GET/digital/security/auth/mfa/changePassword&q;,&q;POST/digital/security/auth/changePassword&q;,&q;GET/digital/security/auth/mfa/changeUserId&q;,&q;GET/digital/atmPin/mfa/otp&q;,&q;GET/digital/atmPin/mfa/otp/reset&q;,&q;PUT/digital/atmPin/reset&q;,&q;POST/digital/security/auth/partner/passwordLogin&q;,&q;PUT/v1/prelogin/digital/users/mfa/securityQuestions&q;,&q;POST/NCCS/linkaccounts/flow.action?TTC=999&q;,&q;GET/NCCS/linkaccounts/flow.action?TTC=999&q;,&q;POST/jrs/am/linkac/linkUnlinkOtherAccounts.do&q;,&q;GET/jrs/am/linkac/linkUnlinkOtherAccounts.do&q;,&q;POST/v1/digital/customers/accounts/linking&q;,&q;POST/v1/digital/bank/accounts/preLogin/cardActivation&q;,&q;POST/digital/bank/customers/registration&q;,&q;POST/creditCards/servicing/instantAccounts/details&q;,&q;PUT/digital/customers/registration/creditCards/linkUserId&q;,&q;POST/digital/bank/accounts/cardActivation&q;,&q;POST/cbol/bank/cardsActivation/activate/{channelType}&q;,&q;POST/cbol/security/auth/passwordLogin&q;,&q;POST/private/v1/assisted/customers/approvalStatus/check/retrieve&q;,&q;POST/digital/creditCards/accounts/generateOtp&q;,&q;POST/digital/accounts/{accountId}/creditOffers/submission/otpLoanOffer&q;,&q;POST/prelogin/digital/moneyMovement/accountFunding&q;,&q;POST/prelogin/digital/moneyMovement/sourceAccounts/initiateTrialDeposit&q;,&q;POST/prelogin/digital/customers/registration/creditCards/instantReg/cardValidation&q;,&q;POST/digital/customers/registration/creditCards/validation&q;,&q;POST/digital/bank/customers/registration/verification&q;,&q;POST/v1/digital/security/auth/partner/passwordLogin&q;,&q;POST/digital/moneyMovement/paymentHub/unifiedPayee&q;,&q;POST/digital/accounts/authUsers&q;,&q;PUT/digital/accounts/authUsers&q;,&q;PUT/digital/van/customers/update&q;,&q;POST/bank/moneyMovement/iit/externalAccount/validate&q;,&q;POST/bank/moneyMovement/realTimePayments/rtpEnrollment&q;,&q;POST/digital/clickswitch/customers/switchAction&q;,&q;POST/bank/moneyMovement/wires/enroll&q;,&q;PUT/digital/profiles/customers/updateContactInfo&q;,&q;GET/v1/digital/onboarding/customers/profile&q;,&q;GET/digital/creditCards/customers/profile&q;,&q;POST/digital/users/*/mfa/enrollment&q;,&q;POST/v1/digital/customers/mfa/enrollment&q;,&q;POST/digital/creditCards/accounts/purchaseNotifications&q;,&q;POST/digital/moneyMovement/accountFunding&q;,&q;POST/digital/customers/registration/creditCards/customerDetails/validation&q;,&q;POST/private/v1/digital/bank/customers/requiredRegistration&q;,&q;POST/v1/digital/mortgage/users/registration&q;,&q;POST/prelogin/digital/security/accounts/cvvValidation&q;,&q;POST/creditCards/wallet/walletProvisioning/accounts/onboarding&q;,&q;POST/v1/digital/fulfillment/cards/replacementRequest&q;,&q;POST/v1/bank/moneyMovement/loans/autoDeductIns/enrollment&q;,&q;PUT/v1/bank/moneyMovement/loans/autoDeductIns/enrollment&q;,&q;PUT/digital/profiles/customers/mfa/email&q;,&q;POST/digital/profiles/customers/mfa/email&q;]}}</script>
  <div class="sr-only ddl-live-announcer-element" aria-atomic="true" aria-live="polite"></div>
  <div class="cdk-live-announcer-element cdk-visually-hidden" aria-atomic="true" aria-live="polite"></div>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" defer></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/xmsdk-new.js" defer></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/xmui-new.js" defer></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/qrsignon-new.js" defer></script>
  <script src="./Online Banking, Mortgages, Personal Loans, Investing _ Citi.com_files/config.js" defer></script>
</body>

</html>