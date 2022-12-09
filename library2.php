<?php require_once("header.php"); ?>
<head>
<meta charset="UTF-8">
<title>Linear &amp; Radial Gradients</title>
<link rel="dns-prefetch" href="https://fast.appcues.com">
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CodePen">
<meta name="twitter:title" content="Linear &amp; Radial Gradients">
<meta name="twitter:description" content="A Two.js example that illustrates how to instantiate Two.LinearGradient, Two.RadialGradient, Two.Rectangle, and Two.Vector objects. This example also c...">
<meta name="twitter:image" content="https://assets.codepen.io/171564/internal/screenshots/pens/yLoEEQJ.custom.png?version=1639603861">
<meta name="twitter:creator" content="@jonofyi">
<meta property="og:image" content="https://assets.codepen.io/171564/internal/screenshots/pens/yLoEEQJ.custom.png?version=1639603861" itemprop="thumbnailUrl">
<meta property="og:title" content="Linear &amp; Radial Gradients">
<meta property="og:url" content="https://codepen.io/jonobr1/details/yLoEEQJ">
<meta property="og:site_name" content="CodePen">
<meta property="og:description" content="A Two.js example that illustrates how to instantiate Two.LinearGradient, Two.RadialGradient, Two.Rectangle, and Two.Vector objects. This example also c...">
<link rel="alternate" type="application/json+oembed" href="https://codepen.io/api/oembed?url=https%3A%2F%2Fcodepen.io%2Fjonobr1%2Fpen%2FyLoEEQJ&amp;format=json" title="Linear &amp; Radial Gradients">
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/global/global-43df32e5935485ff210198245aea5affecf740f02f2ad1c158b8fc655347a148.css">
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/packs/css/1-8c63edbc.chunk.css">
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/packs/css/everypage-5fc0aebd.css">
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/editor/editor-743b14e25a2f350dc8981fba1410eb2d93f9fec0b6cf2553835feeb8a48d2386.css">
<meta name="description" content="A Two.js example that illustrates how to instantiate Two.LinearGradient, Two.RadialGradient, Two.Rectangle, and Two.Vector objects. This example also c...">
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/editor/themes/twilight-b1245feb6421f4bced574a0dafb54ff98e3005abc90de9d5f167b307e5d0e9fd.css" id="cm-theme">
<style id="cm-font-family" class="cm-font-family" nonce="">
  
  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-family: SFMono-Regular, Consolas, Liberation Mono, Menlo,
  monospace;
  }
</style>
<style id="cm-font-size" nonce="">
  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-size: 14px;
  }
</style>
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="Brs54SeTbtti3Vbe4hcIwpSKGKZdsyW7dUxLcLD7Ixe+AwmeTQhBDXGqhQWlC6uWpIJ0sO4RbwetxGMxusVKrg==">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="monetization" content="$ilp.uphold.com/biyqg2MkQKbe">
<script nonce="">
  /* Firefox needs this to prevent FOUT */
</script>
<style id="_goober"> @keyframes go487993996{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go1747222846{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}@keyframes go2652833988{from{transform:scale(0) rotate(90deg);opacity:0;}to{transform:scale(1) rotate(90deg);opacity:1;}}@keyframes go1268368563{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}@keyframes go3344466522{0%{height:0;width:0;opacity:0;}40%{height:0;width:6px;opacity:1;}100%{opacity:1;height:10px;}}@keyframes go2190974446{from{transform:scale(0.6);opacity:0.4;}to{transform:scale(1);opacity:1;}}</style><script src="https://srv.buysellads.com/ads/CKYDVK7U.json?callback=customJSONPCallback"></script></head>
<body class="room-editor editor state-htmlOn-cssOn-jsOn twilight sidebar-false   layout-top  logged-out">
<header class="main-header" id="main-header"><div class="editor-header EditorHeader-module_root-cpo0V header-wrap HeaderWrap-module_root-sV1Mb"><h1 class="Logo_root-i9NlR" data-component="Logo" data-test-id="logo"><a href="/" class="Logo_small-j3ROV"><svg viewBox="0 0 100 100"><path d="M100 34.2c-.4-2.6-3.3-4-5.3-5.3-3.6-2.4-7.1-4.7-10.7-7.1-8.5-5.7-17.1-11.4-25.6-17.1-2-1.3-4-2.7-6-4-1.4-1-3.3-1-4.8 0-5.7 3.8-11.5 7.7-17.2 11.5L5.2 29C3 30.4.1 31.8 0 34.8c-.1 3.3 0 6.7 0 10v16c0 2.9-.6 6.3 2.1 8.1 6.4 4.4 12.9 8.6 19.4 12.9 8 5.3 16 10.7 24 16 2.2 1.5 4.4 3.1 7.1 1.3 2.3-1.5 4.5-3 6.8-4.5 8.9-5.9 17.8-11.9 26.7-17.8l9.9-6.6c.6-.4 1.3-.8 1.9-1.3 1.4-1 2-2.4 2-4.1V37.3c.1-1.1.2-2.1.1-3.1 0-.1 0 .2 0 0zM54.3 12.3L88 34.8 73 44.9 54.3 32.4V12.3zm-8.6 0v20L27.1 44.8 12 34.8l33.7-22.5zM8.6 42.8L19.3 50 8.6 57.2V42.8zm37.1 44.9L12 65.2l15-10.1 18.6 12.5v20.1zM50 60.2L34.8 50 50 39.8 65.2 50 50 60.2zm4.3 27.5v-20l18.6-12.5 15 10.1-33.6 22.4zm37.1-30.5L80.7 50l10.8-7.2-.1 14.4z"></path></svg><span class="screen-reader-text">CodePen Home</span></a><a href="/" class="Logo_large-UV0NA"><svg viewBox="0 0 138 26" fill="none" stroke="#fff" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" title="CodePen"><path d="M15 8a7 7 0 100 10m7-8.7L33 2l11 7.3v7.4L33 24l-11-7.3zm0 0l11 7.4 11-7.4m0 7.4L33 9.3l-11 7.4M33 2v7.3m0 7.4V24M52 6h5a7 7 0 010 14h-5zm28 0h-9v14h9m-9-7h6m11 1h6a4 4 0 000-8h-6v14m26-14h-9v14h9m-9-7h6m11 7V6l11 14V6"></path></svg><span class="screen-reader-text">CodePen Home</span></a></h1><div class="ItemTitle_root-BLXtW" data-test-id="item-title-area"><div class="ItemTitle_text-t2tKF"><h1 class="ItemTitle_title-skUR3" id="item-title"><a href="https://codepen.io/jonobr1/pen/yLoEEQJ" class="ItemTitle_titleLink-dPGjg" id="editable-title-span" title="Linear &amp; Radial Gradients">Linear &amp; Radial Gradients</a></h1><div class="ItemTitle_by-typsS" data-test="AnItemBy"><a class="ItemTitle_ownerLink-L8qgY" href="/jonobr1">Jono Brandel </a><a class="BadgePro-module_root-EhalN BadgePro-module_svg-OztkH Badge-module_root-+zThw" data-test-id="pro-badge" href="https://codepen.io/pro" style="margin-right: 0px;"><svg fill="none" viewBox="0 0 32 16" xmlns="http://www.w3.org/2000/svg" title="PRO" width="32" height="16"><rect fill="#ffdd40" height="16" rx="1.5" width="32"></rect><g fill="#000"><path d="M9.174 5.598c.834 0 1.214.44 1.214 1.113 0 .76-.422 1.113-1.182 1.113h-.56c-.094 0-.105-.011-.105-.11V5.708c0-.1.01-.11.106-.11zm.106 3.67c.76 0 1.404-.188 1.847-.563.56-.452.855-1.135.855-2.016 0-.893-.317-1.61-.887-2.039-.443-.33-.97-.507-1.857-.507H7.106c-.095 0-.106.011-.106.11v7.494c0 .099.01.11.106.11h1.33c.094 0 .105-.011.105-.11v-2.37c0-.099.01-.11.106-.11zM14.375 9.047c0-.077 0-.11.063-.11.053 0 .074.022.116.088l1.953 2.722c.074.099.084.11.18.11h1.635c.064 0 .095 0 .095-.022a.31.31 0 00-.053-.088c-.707-.96-1.425-1.885-2.132-2.854a.085.085 0 01-.02-.045c0-.022.01-.044.041-.055.95-.286 1.573-1.124 1.573-2.28 0-.96-.454-1.62-1.055-1.973-.539-.32-1.056-.397-1.943-.397H12.94c-.095 0-.105.011-.105.11v7.494c0 .099.02.11.116.11h1.32c.094 0 .105-.011.105-.11zm.654-3.515c.834 0 1.214.418 1.214 1.09 0 .76-.422 1.07-1.182 1.07h-.58c-.096 0-.106-.012-.106-.11v-1.94c0-.1.01-.11.105-.11zM26 8c0-2.182-1.636-4-3.726-4s-3.726 1.818-3.726 4 1.636 4 3.726 4S26 10.182 26 8zm-5.837 0c0-1.311.855-2.402 2.111-2.402 1.256 0 2.111 1.09 2.111 2.402 0 1.311-.855 2.402-2.11 2.402-1.257 0-2.112-1.09-2.112-2.402z"></path></g></svg></a><button data-test="follow-button" data-following="false" title="Follow Jono Brandel" class="Button-module_root-xw+9D FollowButton-module_root-F0GtE ItemTitle_followButton-2+Mhs follow-user-button" data-size="mini" data-has-icon="true" data-color="green"><svg viewBox="0 0 132.4 132.4" class="FollowButton-module_statusIcon-06Rom"><path d="M75.4 123.1V75.4h47.7c5.1 0 9.2-4.1 9.3-9.3s-4.2-9.3-9.3-9.3H75.4V9.3c0-5.1-4.1-9.2-9.3-9.3-5.2-.1-9.3 4.2-9.3 9.3V57H9.1C4 57-.1 61.1-.2 66.3c-.1 5.2 4.2 9.3 9.3 9.3h47.7v47.7c0 5.1 4.1 9.2 9.3 9.3s9.3-4.4 9.3-9.5z"></path></svg> Follow</button></div></div></div><button title="Love" data-anon="true" data-view="pen" data-item="Pen" data-hashid="yLoEEQJ" class="Button-module_root-xw+9D EditorHeaderPen-module_loveButton-7F910 loves heart-button"><svg viewBox="-2 0 105 92" class="LoveButtonIcon-module_root-gkq0H"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71z"></path></svg><span class="screen-reader-text">Love</span></button><div class="navigation-wrap editor-actions-menu"><button aria-expanded="false" data-open="false" class="Button-module_root-xw+9D toggle-actions-button MobileNavButton-module_root-EApZk" data-size="mini" style="height: 35px; padding: 1px 3px 3px 7px; border-radius: 4px; margin-left: 8px; margin-right: 8px;"><div class="MobileNavButton-module_icon-uF4CA" aria-hidden="true"><span></span><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></div><span class="screen-reader-text">Pen Editor Menu</span></button><div aria-hidden="false" class="editor-actions" data-expanded="false"><button id="run" title="Com/Ctrl - Shift - 7 to Run" class="Button-module_root-xw+9D run" data-has-icon="true"><svg viewBox="0 0 20 20"><path d="M10.66 1.91a.833.833 0 011.18 0l2.5 2.5a.833.833 0 010 1.18l-2.5 2.5a.833.833 0 11-1.18-1.18l1.078-1.077h-1.321C7.46 5.833 5 8.293 5 11.25c0 2.956 2.46 5.417 5.417 5.417 2.956 0 5.416-2.46 5.416-5.417a.833.833 0 111.667 0c0 3.877-3.207 7.083-7.083 7.083-3.877 0-7.084-3.206-7.084-7.083 0-3.877 3.207-7.083 7.084-7.083h1.321l-1.077-1.078a.833.833 0 010-1.178z"></path></svg>Run</button><button data-test-id="edit-settings" id="edit-settings" title="Pen Settings" class="Button-module_root-xw+9D" data-has-icon="true"><svg viewBox="0 0 100 100"><path d="M87.687 45.077c-.313-2.433-.816-4.807-1.542-7.079l8.145-11.73-5.827-7.515-.094-.123-5.824-7.514-12.955 5.577c-2.041-1.265-4.192-2.362-6.459-3.219L59.42 0H40.586l-3.709 13.474c-2.27.857-4.421 1.955-6.463 3.222l-12.957-5.577-5.825 7.514-.097.124-5.822 7.517 8.146 11.731a39.832 39.832 0 00-1.544 7.079L0 52.032l2.08 9.375.033.15 2.08 9.375 14.001.761a39.157 39.157 0 004.4 5.668l-2.396 14.227 8.416 4.173.138.067L37.169 100l9.309-10.796c1.161.109 2.335.173 3.524.173s2.358-.074 3.52-.184l9.317 10.804 8.415-4.173.141-.066 8.413-4.172-2.396-14.228a39.06 39.06 0 004.4-5.672l14-.759 2.078-9.375.035-.154L100 52.025l-12.313-6.948zM50.003 34.51c8.435 0 15.272 7.035 15.272 15.719 0 8.679-6.839 15.717-15.272 15.717-8.436 0-15.272-7.038-15.272-15.717 0-8.684 6.838-15.719 15.272-15.719z"></path></svg>Settings</button><span class="DropdownControlled-module_root-3ewM0 EditorHeaderViewSwitcher_root-kz6-q" data-direction="bottom left" data-open="false"><button id="view-switcher-button" data-test-id="view-switcher-button" title="Change View" aria-haspopup="true" aria-expanded="false" class="Button-module_root-xw+9D"><svg viewBox="0 0 20 20" class="EditorHeaderViewSwitcher_iconPen-jP26l"><path d="M0 9.002C0 8.45.455 8 .992 8h18.016c.548 0 .992.456.992 1.002v9.996c0 .553-.455 1.002-.992 1.002H.992C.444 20 0 19.544 0 18.998V9.002zm0-8C0 .45.451 0 .99 0h4.02A.99.99 0 016 1.003v4.994C6 6.551 5.549 7 5.01 7H.99A.99.99 0 010 5.997V1.003zm7 0C7 .45 7.451 0 7.99 0h4.02A.99.99 0 0113 1.003v4.994C13 6.551 12.549 7 12.01 7H7.99A.99.99 0 017 5.997V1.003zm7 0C14 .45 14.451 0 14.99 0h4.02A.99.99 0 0120 1.003v4.994C20 6.551 19.549 7 19.01 7h-4.02A.99.99 0 0114 5.997V1.003z"></path></svg></button><div class="DropdownControlled-module_content-mxnG0" hidden="" role="menu" data-direction="bottom left"><div class="DropdownContent-module_root-rQ0al view-switcher EditorHeaderViewSwitcher_dropdown-Qhuhu"><h3>Change View</h3><div class="ButtonGroup-module_root-RfSlH EditorHeaderViewSwitcher_switch-thcS- view-switcher-layout EditorHeaderViewSwitcherLayoutButtons-module_buttonGroup-SZ+7j"><button id="left-layout" data-layout-type="left" class="Button-module_root-xw+9D layout-change-icon"><span class="screen-reader-text">Use Left Layout</span><svg viewBox="0 0 20 20" class="editor-left rotate-cc90" width="20" height="20"><path d="M0 9.002C0 8.45.455 8 .992 8h18.016c.548 0 .992.456.992 1.002v9.996c0 .553-.455 1.002-.992 1.002H.992C.444 20 0 19.544 0 18.998V9.002zm0-8C0 .45.451 0 .99 0h4.02A.99.99 0 016 1.003v4.994C6 6.551 5.549 7 5.01 7H.99A.99.99 0 010 5.997V1.003zm7 0C7 .45 7.451 0 7.99 0h4.02A.99.99 0 0113 1.003v4.994C13 6.551 12.549 7 12.01 7H7.99A.99.99 0 017 5.997V1.003zm7 0C14 .45 14.451 0 14.99 0h4.02A.99.99 0 0120 1.003v4.994C20 6.551 19.549 7 19.01 7h-4.02A.99.99 0 0114 5.997V1.003z"></path></svg></button><button id="top-layout" data-layout-type="top" class="Button-module_root-xw+9D layout-change-icon"><span class="screen-reader-text">Use Top Layout</span><svg viewBox="0 0 20 20" class="new-pen" width="20" height="20"><path d="M0 9.002C0 8.45.455 8 .992 8h18.016c.548 0 .992.456.992 1.002v9.996c0 .553-.455 1.002-.992 1.002H.992C.444 20 0 19.544 0 18.998V9.002zm0-8C0 .45.451 0 .99 0h4.02A.99.99 0 016 1.003v4.994C6 6.551 5.549 7 5.01 7H.99A.99.99 0 010 5.997V1.003zm7 0C7 .45 7.451 0 7.99 0h4.02A.99.99 0 0113 1.003v4.994C13 6.551 12.549 7 12.01 7H7.99A.99.99 0 017 5.997V1.003zm7 0C14 .45 14.451 0 14.99 0h4.02A.99.99 0 0120 1.003v4.994C20 6.551 19.549 7 19.01 7h-4.02A.99.99 0 0114 5.997V1.003z"></path></svg></button><button id="right-layout" data-layout-type="right" class="Button-module_root-xw+9D layout-change-icon"><span class="screen-reader-text">Use Right Layout</span><svg viewBox="0 0 20 20" class="editor-right rotate-c90" width="20" height="20"><path d="M0 9.002C0 8.45.455 8 .992 8h18.016c.548 0 .992.456.992 1.002v9.996c0 .553-.455 1.002-.992 1.002H.992C.444 20 0 19.544 0 18.998V9.002zm0-8C0 .45.451 0 .99 0h4.02A.99.99 0 016 1.003v4.994C6 6.551 5.549 7 5.01 7H.99A.99.99 0 010 5.997V1.003zm7 0C7 .45 7.451 0 7.99 0h4.02A.99.99 0 0113 1.003v4.994C13 6.551 12.549 7 12.01 7H7.99A.99.99 0 017 5.997V1.003zm7 0C14 .45 14.451 0 14.99 0h4.02A.99.99 0 0120 1.003v4.994C20 6.551 19.549 7 19.01 7h-4.02A.99.99 0 0114 5.997V1.003z"></path></svg></button></div><div class="EditorHeaderViewSwitcher_switch-thcS-"><nav class="EditorHeaderViewSwitcherLinks_linkList-b3AAG"><a class="EditorHeaderViewSwitcherLink_link-wYdA5 editor-link pen-link active" href="/jonobr1/pen/yLoEEQJ" id="pen-link">Editor View<span class="EditorHeaderViewSwitcherLink_linkMeta-rzMQe">/pen/<span data-href="https://blog.codepen.io/documentation/views/editor-view/" class="EditorHeaderViewSwitcherLink_learnMore-iaxpx"><svg viewBox="0 0 100 100" width="13" height="13"><path d="M75 0H25C11.19 0 0 11.193 0 25v50c0 13.802 11.19 25 25 25h50c13.811 0 25-11.198 25-25V25c0-13.807-11.189-25-25-25zM57.203 85.067H41.504V72.542h15.699v12.525zm16.154-43.026c-.84 2.066-1.873 3.834-3.102 5.298a20.59 20.59 0 01-4.101 3.751 91.479 91.479 0 00-4.249 3.101c-1.333 1.034-1.553 2.214-2.596 3.547-1.025 1.335-.977 3.004-.977 5.006v3.924H41.668v-4.623c0-2.864 1.366-5.265 2.27-7.202.896-1.935 2.255-3.581 3.459-4.947 1.196-1.367 2.62-2.556 3.955-3.557 1.327-.993 2.637-1.993 3.776-2.995 1.123-1.001 2.083-2.1 2.783-3.304.7-1.197 1.043-2.694.977-4.5 0-3.06-.74-5.33-2.245-6.795-1.498-1.465-3.582-2.206-6.25-2.206-1.8 0-3.337.351-4.639 1.05a9.172 9.172 0 00-3.199 2.808c-.837 1.163-1.448 3.593-1.847 5.156-.407 1.57-.602 6.115-.602 6.115H25.399c.073-8.333.684-7.963 1.855-10.965 1.164-2.995 2.8-6.132 4.899-8.33 2.099-2.197 4.63-4.179 7.601-5.417a25.782 25.782 0 019.945-1.977c4.736 0 8.683.581 11.856 1.876 3.167 1.302 5.713 2.889 7.65 4.817 1.929 1.937 3.312 4.004 4.149 6.234.831 2.237 1.245 4.313 1.245 6.242.002 3.206-.412 5.827-1.242 7.893z"></path></svg></span></span></a><a class="EditorHeaderViewSwitcherLink_link-wYdA5 editor-link details-link" href="/jonobr1/details/yLoEEQJ" id="details-link">Details View<span class="EditorHeaderViewSwitcherLink_linkMeta-rzMQe">/details/<span data-href="https://blog.codepen.io/documentation/views/details-view/" class="EditorHeaderViewSwitcherLink_learnMore-iaxpx"><svg viewBox="0 0 100 100" width="13" height="13"><path d="M75 0H25C11.19 0 0 11.193 0 25v50c0 13.802 11.19 25 25 25h50c13.811 0 25-11.198 25-25V25c0-13.807-11.189-25-25-25zM57.203 85.067H41.504V72.542h15.699v12.525zm16.154-43.026c-.84 2.066-1.873 3.834-3.102 5.298a20.59 20.59 0 01-4.101 3.751 91.479 91.479 0 00-4.249 3.101c-1.333 1.034-1.553 2.214-2.596 3.547-1.025 1.335-.977 3.004-.977 5.006v3.924H41.668v-4.623c0-2.864 1.366-5.265 2.27-7.202.896-1.935 2.255-3.581 3.459-4.947 1.196-1.367 2.62-2.556 3.955-3.557 1.327-.993 2.637-1.993 3.776-2.995 1.123-1.001 2.083-2.1 2.783-3.304.7-1.197 1.043-2.694.977-4.5 0-3.06-.74-5.33-2.245-6.795-1.498-1.465-3.582-2.206-6.25-2.206-1.8 0-3.337.351-4.639 1.05a9.172 9.172 0 00-3.199 2.808c-.837 1.163-1.448 3.593-1.847 5.156-.407 1.57-.602 6.115-.602 6.115H25.399c.073-8.333.684-7.963 1.855-10.965 1.164-2.995 2.8-6.132 4.899-8.33 2.099-2.197 4.63-4.179 7.601-5.417a25.782 25.782 0 019.945-1.977c4.736 0 8.683.581 11.856 1.876 3.167 1.302 5.713 2.889 7.65 4.817 1.929 1.937 3.312 4.004 4.149 6.234.831 2.237 1.245 4.313 1.245 6.242.002 3.206-.412 5.827-1.242 7.893z"></path></svg></span></span></a><a class="EditorHeaderViewSwitcherLink_link-wYdA5 editor-link full-link" href="/jonobr1/full/yLoEEQJ" id="full-link">Full Page View<span class="EditorHeaderViewSwitcherLink_linkMeta-rzMQe">/full/<span data-href="https://blog.codepen.io/documentation/views/full-page-view/" class="EditorHeaderViewSwitcherLink_learnMore-iaxpx"><svg viewBox="0 0 100 100" width="13" height="13"><path d="M75 0H25C11.19 0 0 11.193 0 25v50c0 13.802 11.19 25 25 25h50c13.811 0 25-11.198 25-25V25c0-13.807-11.189-25-25-25zM57.203 85.067H41.504V72.542h15.699v12.525zm16.154-43.026c-.84 2.066-1.873 3.834-3.102 5.298a20.59 20.59 0 01-4.101 3.751 91.479 91.479 0 00-4.249 3.101c-1.333 1.034-1.553 2.214-2.596 3.547-1.025 1.335-.977 3.004-.977 5.006v3.924H41.668v-4.623c0-2.864 1.366-5.265 2.27-7.202.896-1.935 2.255-3.581 3.459-4.947 1.196-1.367 2.62-2.556 3.955-3.557 1.327-.993 2.637-1.993 3.776-2.995 1.123-1.001 2.083-2.1 2.783-3.304.7-1.197 1.043-2.694.977-4.5 0-3.06-.74-5.33-2.245-6.795-1.498-1.465-3.582-2.206-6.25-2.206-1.8 0-3.337.351-4.639 1.05a9.172 9.172 0 00-3.199 2.808c-.837 1.163-1.448 3.593-1.847 5.156-.407 1.57-.602 6.115-.602 6.115H25.399c.073-8.333.684-7.963 1.855-10.965 1.164-2.995 2.8-6.132 4.899-8.33 2.099-2.197 4.63-4.179 7.601-5.417a25.782 25.782 0 019.945-1.977c4.736 0 8.683.581 11.856 1.876 3.167 1.302 5.713 2.889 7.65 4.817 1.929 1.937 3.312 4.004 4.149 6.234.831 2.237 1.245 4.313 1.245 6.242.002 3.206-.412 5.827-1.242 7.893z"></path></svg></span></span></a></nav></div></div></div></span><div class="view-switcher EditorHeaderViewSwitcher_mobile-TM24l"><div class="EditorHeaderViewSwitcher_switch-thcS-"><nav class="EditorHeaderViewSwitcherLinks_linkList-b3AAG"><a class="EditorHeaderViewSwitcherLink_link-wYdA5 editor-link pen-link active" href="/jonobr1/pen/yLoEEQJ" id="pen-link">Editor View<span class="EditorHeaderViewSwitcherLink_linkMeta-rzMQe">/pen/<span data-href="https://blog.codepen.io/documentation/views/editor-view/" class="EditorHeaderViewSwitcherLink_learnMore-iaxpx"><svg viewBox="0 0 100 100" width="13" height="13"><path d="M75 0H25C11.19 0 0 11.193 0 25v50c0 13.802 11.19 25 25 25h50c13.811 0 25-11.198 25-25V25c0-13.807-11.189-25-25-25zM57.203 85.067H41.504V72.542h15.699v12.525zm16.154-43.026c-.84 2.066-1.873 3.834-3.102 5.298a20.59 20.59 0 01-4.101 3.751 91.479 91.479 0 00-4.249 3.101c-1.333 1.034-1.553 2.214-2.596 3.547-1.025 1.335-.977 3.004-.977 5.006v3.924H41.668v-4.623c0-2.864 1.366-5.265 2.27-7.202.896-1.935 2.255-3.581 3.459-4.947 1.196-1.367 2.62-2.556 3.955-3.557 1.327-.993 2.637-1.993 3.776-2.995 1.123-1.001 2.083-2.1 2.783-3.304.7-1.197 1.043-2.694.977-4.5 0-3.06-.74-5.33-2.245-6.795-1.498-1.465-3.582-2.206-6.25-2.206-1.8 0-3.337.351-4.639 1.05a9.172 9.172 0 00-3.199 2.808c-.837 1.163-1.448 3.593-1.847 5.156-.407 1.57-.602 6.115-.602 6.115H25.399c.073-8.333.684-7.963 1.855-10.965 1.164-2.995 2.8-6.132 4.899-8.33 2.099-2.197 4.63-4.179 7.601-5.417a25.782 25.782 0 019.945-1.977c4.736 0 8.683.581 11.856 1.876 3.167 1.302 5.713 2.889 7.65 4.817 1.929 1.937 3.312 4.004 4.149 6.234.831 2.237 1.245 4.313 1.245 6.242.002 3.206-.412 5.827-1.242 7.893z"></path></svg></span></span></a><a class="EditorHeaderViewSwitcherLink_link-wYdA5 editor-link details-link" href="/jonobr1/details/yLoEEQJ" id="details-link">Details View<span class="EditorHeaderViewSwitcherLink_linkMeta-rzMQe">/details/<span data-href="https://blog.codepen.io/documentation/views/details-view/" class="EditorHeaderViewSwitcherLink_learnMore-iaxpx"><svg viewBox="0 0 100 100" width="13" height="13"><path d="M75 0H25C11.19 0 0 11.193 0 25v50c0 13.802 11.19 25 25 25h50c13.811 0 25-11.198 25-25V25c0-13.807-11.189-25-25-25zM57.203 85.067H41.504V72.542h15.699v12.525zm16.154-43.026c-.84 2.066-1.873 3.834-3.102 5.298a20.59 20.59 0 01-4.101 3.751 91.479 91.479 0 00-4.249 3.101c-1.333 1.034-1.553 2.214-2.596 3.547-1.025 1.335-.977 3.004-.977 5.006v3.924H41.668v-4.623c0-2.864 1.366-5.265 2.27-7.202.896-1.935 2.255-3.581 3.459-4.947 1.196-1.367 2.62-2.556 3.955-3.557 1.327-.993 2.637-1.993 3.776-2.995 1.123-1.001 2.083-2.1 2.783-3.304.7-1.197 1.043-2.694.977-4.5 0-3.06-.74-5.33-2.245-6.795-1.498-1.465-3.582-2.206-6.25-2.206-1.8 0-3.337.351-4.639 1.05a9.172 9.172 0 00-3.199 2.808c-.837 1.163-1.448 3.593-1.847 5.156-.407 1.57-.602 6.115-.602 6.115H25.399c.073-8.333.684-7.963 1.855-10.965 1.164-2.995 2.8-6.132 4.899-8.33 2.099-2.197 4.63-4.179 7.601-5.417a25.782 25.782 0 019.945-1.977c4.736 0 8.683.581 11.856 1.876 3.167 1.302 5.713 2.889 7.65 4.817 1.929 1.937 3.312 4.004 4.149 6.234.831 2.237 1.245 4.313 1.245 6.242.002 3.206-.412 5.827-1.242 7.893z"></path></svg></span></span></a><a class="EditorHeaderViewSwitcherLink_link-wYdA5 editor-link full-link" href="/jonobr1/full/yLoEEQJ" id="full-link">Full Page View<span class="EditorHeaderViewSwitcherLink_linkMeta-rzMQe">/full/<span data-href="https://blog.codepen.io/documentation/views/full-page-view/" class="EditorHeaderViewSwitcherLink_learnMore-iaxpx"><svg viewBox="0 0 100 100" width="13" height="13"><path d="M75 0H25C11.19 0 0 11.193 0 25v50c0 13.802 11.19 25 25 25h50c13.811 0 25-11.198 25-25V25c0-13.807-11.189-25-25-25zM57.203 85.067H41.504V72.542h15.699v12.525zm16.154-43.026c-.84 2.066-1.873 3.834-3.102 5.298a20.59 20.59 0 01-4.101 3.751 91.479 91.479 0 00-4.249 3.101c-1.333 1.034-1.553 2.214-2.596 3.547-1.025 1.335-.977 3.004-.977 5.006v3.924H41.668v-4.623c0-2.864 1.366-5.265 2.27-7.202.896-1.935 2.255-3.581 3.459-4.947 1.196-1.367 2.62-2.556 3.955-3.557 1.327-.993 2.637-1.993 3.776-2.995 1.123-1.001 2.083-2.1 2.783-3.304.7-1.197 1.043-2.694.977-4.5 0-3.06-.74-5.33-2.245-6.795-1.498-1.465-3.582-2.206-6.25-2.206-1.8 0-3.337.351-4.639 1.05a9.172 9.172 0 00-3.199 2.808c-.837 1.163-1.448 3.593-1.847 5.156-.407 1.57-.602 6.115-.602 6.115H25.399c.073-8.333.684-7.963 1.855-10.965 1.164-2.995 2.8-6.132 4.899-8.33 2.099-2.197 4.63-4.179 7.601-5.417a25.782 25.782 0 019.945-1.977c4.736 0 8.683.581 11.856 1.876 3.167 1.302 5.713 2.889 7.65 4.817 1.929 1.937 3.312 4.004 4.149 6.234.831 2.237 1.245 4.313 1.245 6.242.002 3.206-.412 5.827-1.242 7.893z"></path></svg></span></span></a></nav></div></div></div></div><a data-test-id="signup-button" href="/accounts/signup/user/free" class="Button-module_root-xw+9D LogInAndSignUpButtons_signupButton-LlBNZ" data-color="green">Sign Up</a><a data-test-id="login-button" href="/login" class="Button-module_root-xw+9D LogInAndSignUpButtons_loginButton-pJov-">Log In</a></div></header>
<div class="item-settings-modal tab-layout tab-layout-modal pen  item-settings-modal-half" id="item-settings-modal">
<header class="item-settings-modal-header tab-layout-header">
<h2 class="item-settings-modal-header-title tab-layout-header-title">Pen Settings</h2>
<div class="save-and-close-wrap">
<button type="button" class="button mini-button button-no-right-margin close" id="top-close-settings">
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
</button>
</div>
</header>
<div class="tabs tab-layout-wrapper settings-tabs-wrapper">
<nav id="settings-tabs" class="no-mobile-nav tab-layout-tabs item-settings-tabs  notranslate" translate="no">
<div class="tab-layout-tab-group">
<a id="settings-html-tab" href="#settings-html" class="settings-tab-html active" data-type="html">
HTML
</a>
<a id="settings-css-tab" href="#settings-css" class="settings-tab-css" data-type="css">
CSS
</a>
<a id="settings-js-tab" href="#settings-js" class="settings-tab-js" data-type="js">
JS
</a>
</div>
<div class="tab-layout-tab-group">
<a id="settings-behavior-tab" href="#settings-behavior" class="settings-tab-behavior" data-type="behavior">
Behavior
</a>
<a id="settings-editor-tab" href="#settings-editor" class="settings-tab-editor" data-type="editor">
Editor
</a>
</div>
</nav>
<div class="settings tab-page active" id="settings-html">
<h3 aria-label="HTML">HTML</h3>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="html-preprocessor">
HTML Preprocessor
</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About HTML Preprocessors</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>HTML preprocessors can make writing HTML more powerful or convenient. For instance, Markdown is designed to be easier to write and read for text documents and you could write a loop in Pug.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-html-preprocessors/" target="_blank" rel="noopener">Learn more</a> · <a href="/versions/" target="_blank" rel="noopener">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="html-preprocessor" id="html-preprocessor" class="fullwidth">
<option value="none">None</option>
<option value="haml">Haml</option>
<option value="markdown">Markdown</option>
<option value="slim">Slim</option>
<option value="pug">Pug</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
</div>
</div>
</div>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="html-classes">Add Class(es) to &lt;html&gt;</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>Adding Classes</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>In CodePen, whatever you write in the HTML editor is what goes within the <code>&lt;body&gt;</code> tags in <a target="_blank" rel="noopener" href="https://blog.codepen.io/documentation/features/preview-template/">a basic HTML5 template</a>. So you don't have access to higher-up elements like the <code>&lt;html&gt;</code> tag. If you want to add classes there that can affect the whole document, this is the place to do it.</p>
</div>
</div>
<input type="text" id="html-classes" name="html-classes" class="fullwidth" placeholder="e.g. single post post-1234" maxlength="250">
</div>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="head-content">Stuff for &lt;head&gt;</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About the &lt;head&gt;</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>In CodePen, whatever you write in the HTML editor is what goes within the <code>&lt;body&gt;</code> tags in <a target="_blank" rel="noopener" href="https://blog.codepen.io/documentation/features/preview-template/">a basic HTML5 template</a>. If you need things in the <code>&lt;head&gt;</code> of the document, put that code here.</p>
</div>
</div>
<div class="head-content-wrapper">
<textarea id="head-content" name="head-content" class="fullwidth is-code head-content notranslate" translate="no" placeholder="e.g. <meta>, <link>, <script>"></textarea>
<span class="insecure-resource-tooltip">
<div class="help-flyout-link">
<span class="icon-help">!</span>
<div class="help-flyout help-flyout-reverse">
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<h5>Insecure Resource</h5>
<p>The resource you are linking to is using the 'http' protocol, which may not work when the browser is using https.</p>
</div>
</div>
</span>
</div>
<button class="button mini-button button-medium" id="meta-tag-insert">↑ Insert the most common viewport meta tag</button>
</div>
</div>
<div class="settings tab-page" id="settings-css">
<h3 aria-label="CSS">CSS</h3>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="css-preprocessor">
CSS Preprocessor
</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About CSS Preprocessors</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>CSS preprocessors help make authoring CSS easier. All of them offer things like variables and mixins to provide convenient abstractions.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-css-preprocessors/" target="_blank">Learn more</a> · <a href="/versions/" target="_blank">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="css-preprocessor" id="css-preprocessor" class="fullwidth css-preprocessor">
<option value="none">None</option>
<option value="less">Less</option>
<option value="scss">SCSS</option>
<option value="sass">Sass</option>
<option value="stylus">Stylus</option>
<option value="postcss">PostCSS</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
</div>
</div>
<div id="need-an-addon" class="align-right hide">
<a id="css-need-an-addon-button" href="#0" class="button button-medium mini-button need-an-addon-button">
Need an add-on?
</a>
</div>
<div class="add-ons add-ons-scss hide" id="add-ons"></div>
</div>
<div id="startercss-options-form" class="settings-row top-label-form">
<h4>
CSS Base
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About CSS Base</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>It's a common practice to apply CSS to a page that styles elements such that they are consistent across all browsers. We offer two of the most popular choices: <a href="https://necolas.github.io/normalize.css/" target="_blank" rel="noopener">normalize.css</a> and a <a href="http://meyerweb.com/eric/tools/css/reset/" target="_blank" rel="noopener">reset</a>. Or, choose <b>Neither</b> and nothing will be applied.</p>
</div>
</div>
<ul class="radio-list">
<li>
<input type="radio" id="startercss-normalize" name="startercss" checked="" value="normalize">
<label for="startercss-normalize" class="small-inline">Normalize</label>
</li>
<li>
<input type="radio" id="startercss-reset" name="startercss" checked="" value="reset">
<label for="startercss-reset" class="small-inline">Reset</label>
</li>
<li>
<input type="radio" id="startercss-neither" name="startercss" checked="" value="neither">
<label for="startercss-neither" class="small-inline">Neither</label>
</li>
</ul>
</div>
<div id="prefix-options-form" class="settings-row top-label-form">
<h4>
Vendor Prefixing
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About Vendor Prefixing</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>To get the best cross-browser support, it is a common practice to apply vendor prefixes to CSS properties and values that require them to work. For instance <code>-webkit-</code> or <code>-moz-</code>.</p>
<p>We offer two popular choices: <a href="https://github.com/postcss/autoprefixer" target="blank" rel="noopener">Autoprefixer</a> (which processes your CSS server-side) and <a href="https://leaverou.github.io/prefixfree/" target="_blank" rel="noopener">-prefix-free</a> (which applies prefixes via a script, client-side).</p>
</div>
</div>
<ul class="radio-list">
<li>
<input type="radio" id="prefix-autoprefixer" name="prefix" value="autoprefixer">
<label for="prefix-autoprefixer" class="small-inline">Autoprefixer</label>
</li>
<li>
<input type="radio" id="prefix-prefixfree" name="prefix" value="prefixfree">
<label for="prefix-prefixfree" class="small-inline">Prefixfree</label>
</li>
<li>
<input type="radio" id="prefix-neither" name="prefix" value="neither">
<label for="prefix-neither" class="small-inline">Neither</label>
</li>
</ul>
</div>
<div id="external-css-resources" class="settings-row">
<h4>
Add External Stylesheets/Pens
</h4>
<p>Any URLs added here will be added as <code>&lt;link&gt;</code>s in order, and before the CSS in the editor. You can use the CSS from another Pen by using its URL and the proper <a href="https://blog.codepen.io/documentation/url-extensions/">URL extension</a>.</p>
<div class="resource-search-bar">
<svg class="icon icon-mag" viewBox="0 0 56.7 56.7">
<path d="M42.8,7.3C33-2.4,17.1-2.4,7.3,7.3c-9.8,9.8-9.8,25.7,0,35.5c8.7,8.7,22.2,9.7,32,2.9l9.6,9.6c1.8,1.8,4.7,1.8,6.4,0
	c1.8-1.8,1.8-4.7,0-6.4l-9.6-9.6C52.5,29.5,51.5,16,42.8,7.3z M36.6,36.6c-6.4,6.4-16.7,6.4-23.1,0s-6.4-16.7,0-23.1
	c6.4-6.4,16.7-6.4,23.1,0C43,19.9,43,30.3,36.6,36.6z"></path>
</svg>
<span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="external-css-search" type="text" value="" placeholder="Search for resources (Bootstrap, Foundation, Animate.css...)" class="aa-input" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="both" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Tahoma, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="aa-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="aa-dataset-1"></div><div class="aa-dataset-2"></div></span></span>
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&amp;utm_medium=website&amp;utm_content=codepen.io&amp;utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://cpwebassets.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg">
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About External Resources</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>You can apply CSS to your Pen from any stylesheet on the web. Just put a URL to it here and we'll apply it, in the order you have them, before the CSS in the Pen itself.</p>
<p>You can also link to another Pen here (use the <code>.css</code> <a href="https://blog.codepen.io/documentation/url-extensions/">URL Extension</a>) and we'll pull the CSS from that Pen and include it. If it's using a <em>matching</em> preprocessor, use the appropriate URL Extension and we'll combine the code before preprocessing, so you can use the linked Pen as a true dependency.</p>
<p><a href="https://blog.codepen.io/documentation/editor/adding-external-resources/" target="_blank" rel="noopener">Learn more</a></p>
</div>
</div>
<div id="css-external-resources" class="external-resource-wrapper ui-sortable">
<div data-view-id="99711137" class="external-resource-url-row">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"></path>
      </svg>
    </span>

    <input id="external-resource-input-99711137" class="fullwidth css-resource external-resource" type="text" pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&amp;%@!\-\/]))?$" name="external-css" placeholder="https://yourwebsite.com/style.css" value="" data-view-id="99711137">

    <span class="insecure-resource-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <span class="not-using-url-extension-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>URL Extension Required</h5>
          <p>When linking another Pen as a resource, make sure you use a <a href="https://blog.codepen.io/documentation/url-extensions/">URL Extension</a> of the type of code you want to link to. Either <code>.css</code>, <code>.js</code>, or the extension of a matching code processor.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="99711137">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
        </svg>
      </span>

      <a id="external-resource-input-view-link-99711137" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="99711137" href="">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"></path>
        </svg>
      </a>
    </div>

  </div><div data-view-id="70411419" class="external-resource-url-row">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"></path>
      </svg>
    </span>

    <input id="external-resource-input-70411419" class="fullwidth css-resource external-resource" type="text" pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&amp;%@!\-\/]))?$" name="external-css" placeholder="https://codepen.io/username/pen/aBcDef.css" value="" data-view-id="70411419">

    <span class="insecure-resource-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <span class="not-using-url-extension-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>URL Extension Required</h5>
          <p>When linking another Pen as a resource, make sure you use a <a href="https://blog.codepen.io/documentation/url-extensions/">URL Extension</a> of the type of code you want to link to. Either <code>.css</code>, <code>.js</code>, or the extension of a matching code processor.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="70411419">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
        </svg>
      </span>

      <a id="external-resource-input-view-link-70411419" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="70411419" href="">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"></path>
        </svg>
      </a>
    </div>

  </div></div>
<script id="css-external-resources-template" nonce="" type="text/template">
  <div data-view-id="<%= view_id %>" class="external-resource-url-row <%= insecure_resource %>">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"/>
      </svg>
    </span>

    <input
      id="external-resource-input-<%= view_id %>"
      class="fullwidth css-resource external-resource"
      type="text"
      pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$"
      name="external-css"
      placeholder="<%= placeholder %>"
      value="<%= url %>"
      data-view-id="<%= view_id %>">

    <span class="insecure-resource-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <span class="not-using-url-extension-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
          </svg>
          <h5>URL Extension Required</h5>
          <p>When linking another Pen as a resource, make sure you use a <a href="https://blog.codepen.io/documentation/url-extensions/">URL Extension</a> of the type of code you want to link to. Either <code>.css</code>, <code>.js</code>, or the extension of a matching code processor.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="<%= view_id %>">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
        </svg>
      </span>

      <a id="external-resource-input-view-link-<%= view_id %>" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="<%= view_id %>" href="<%= url %>">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"/>
        </svg>
      </a>
    </div>

  </div>
</script>
<div class="external-resource-actions group">
<span id="add-css-resource" class="button mini-button button-medium add-resource" data-type="css">
<span data-type="css">+ add another resource</span>
</span>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-js">
<div class="item-settings-javascript normal-labels">
<h3>
JavaScript
</h3>
<div class="item-settings-javascript-preprocessor settings-row">
<h4>
<label for="js-preprocessor">
JavaScript Preprocessor
</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100" width="14" height="14">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About JavaScript Preprocessors</h5>
<svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>JavaScript preprocessors can help make authoring JavaScript easier and more convenient.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-js-preprocessors/" target="_blank" rel="noopener">Learn more</a> · <a href="/versions/" target="_blank">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="js-preprocessor" id="js-preprocessor" class="fullwidth">
<option value="none">None</option>
<option value="babel">Babel</option>
<option value="typescript">TypeScript</option>
<option value="coffeescript">CoffeeScript</option>
<option value="livescript">LiveScript</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
</div>
</div>
<p><small>Babel includes JSX processing.</small></p>
</div>
<div id="external-js-resources" class="item-settings-javascript-external settings-row external-js-resources top-label-form">
<h4>
Add External Scripts/Pens
</h4>
<p>Any URL's added here will be added as <code>&lt;script&gt;</code>s in order, and run <em>before</em> the JavaScript in the editor. You can use the URL of any other Pen and it will include the JavaScript from that Pen.</p>
<div class="resource-search-bar">
<svg viewBox="0 0 56.7 56.7" class="icon icon-mag" width="18" height="18">
<path d="M42.8,7.3C33-2.4,17.1-2.4,7.3,7.3c-9.8,9.8-9.8,25.7,0,35.5c8.7,8.7,22.2,9.7,32,2.9l9.6,9.6c1.8,1.8,4.7,1.8,6.4,0
	c1.8-1.8,1.8-4.7,0-6.4l-9.6-9.6C52.5,29.5,51.5,16,42.8,7.3z M36.6,36.6c-6.4,6.4-16.7,6.4-23.1,0s-6.4-16.7,0-23.1
	c6.4-6.4,16.7-6.4,23.1,0C43,19.9,43,30.3,36.6,36.6z"></path>
</svg>
<span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="external-js-search" type="text" value="" placeholder="Search CDNjs (jQuery, Lodash, React, Angular, Vue.js, Ember...)" class="aa-input" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="both" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-3" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Tahoma, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="aa-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-3" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="aa-dataset-4"></div><div class="aa-dataset-5"></div></span></span>
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&amp;utm_medium=website&amp;utm_content=codepen.io&amp;utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://cpwebassets.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg">
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100" width="14" height="14">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About External Resources</h5>
<svg class="icon-x" viewBox="0 0 100 100" height="12" width="12">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>You can apply a script from anywhere on the web to your Pen. Just put a URL to it here and we'll add it, in the order you have them, before the JavaScript in the Pen itself.</p>
<p>If the script you link to has the file extension of a preprocessor, we'll attempt to process it before applying.</p>
<p>You can also link to another Pen here, and we'll pull the JavaScript from that Pen and include it. If it's using a matching preprocessor, we'll combine the code before preprocessing, so you can use the linked Pen as a true dependency.</p>
<p><a href="https://blog.codepen.io/documentation/adding-external-resources/" rel="noopener" target="_blank">Learn more</a></p>
</div>
</div>
<div id="js-external-resources" class="external-resource-wrapper ui-sortable">
<div data-view-id="43741006" class="external-resource-url-row">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"></path>
      </svg>
    </span>

    <input id="external-resource-input-43741006" class="fullwidth js-resource external-resource" type="text" pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&amp;%@!\-\/]))?$" name="external-js" placeholder="https://yourwebsite.com/script.js" value="" data-view-id="43741006">

    <span class="insecure-resource-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <span class="not-using-url-extension-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>URL Extension Required</h5>
          <p>When linking another Pen as a resource, make sure you use a <a href="https://blog.codepen.io/documentation/url-extensions/">URL Extension</a> of the type of code you want to link to. Either <code>.css</code>, <code>.js</code>, or the extension of a matching code processor.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="43741006">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
        </svg>
      </span>

      <a id="external-resource-input-view-link-43741006" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="43741006" href="">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"></path>
        </svg>
      </a>
    </div>

  </div><div data-view-id="77004711" class="external-resource-url-row">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"></path>
      </svg>
    </span>

    <input id="external-resource-input-77004711" class="fullwidth js-resource external-resource" type="text" pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&amp;%@!\-\/]))?$" name="external-js" placeholder="https://codepen.io/username/pen/aBcDef.css" value="" data-view-id="77004711">

    <span class="insecure-resource-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <span class="not-using-url-extension-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
          </svg>
          <h5>URL Extension Required</h5>
          <p>When linking another Pen as a resource, make sure you use a <a href="https://blog.codepen.io/documentation/url-extensions/">URL Extension</a> of the type of code you want to link to. Either <code>.css</code>, <code>.js</code>, or the extension of a matching code processor.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="77004711">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
        </svg>
      </span>

      <a id="external-resource-input-view-link-77004711" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="77004711" href="">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"></path>
        </svg>
      </a>
    </div>

  </div></div>
<script id="js-external-resources-template" nonce="" type="text/template">
  <div data-view-id="<%= view_id %>" class="external-resource-url-row <%= insecure_resource %>">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"/>
      </svg>
    </span>

    <input
      id="external-resource-input-<%= view_id %>"
      class="fullwidth js-resource external-resource"
      type="text"
      pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$"
      name="external-js"
      placeholder="<%= placeholder %>"
      value="<%= url %>"
      data-view-id="<%= view_id %>">

    <span class="insecure-resource-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <span class="not-using-url-extension-tooltip resource-problem-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">?</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
          </svg>
          <h5>URL Extension Required</h5>
          <p>When linking another Pen as a resource, make sure you use a <a href="https://blog.codepen.io/documentation/url-extensions/">URL Extension</a> of the type of code you want to link to. Either <code>.css</code>, <code>.js</code>, or the extension of a matching code processor.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="<%= view_id %>">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
        </svg>
      </span>

      <a id="external-resource-input-view-link-<%= view_id %>" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="<%= view_id %>" href="<%= url %>">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"/>
        </svg>
      </a>
    </div>

  </div>
</script>
<div class="external-resource-actions group">
<span id="add-js-resource" class="button button-medium mini-button add-resource" data-type="js">
<span data-type="js">+ add another resource</span>
</span>
</div>
</div>
<h3 aria-label="Packages">Packages</h3>
<div class="item-settings-packages settings-row" id="item-settings-packages">
<h4>Add Packages</h4>
<p>Search for and use JavaScript packages from <a href="https://www.npmjs.com/" target="blank" rel="noopener">npm</a> here. By selecting a package, an <code>import</code> statement will be added to the top of the JavaScript editor for this package.</p>
<div class="resource-search-bar">
<svg viewBox="0 0 56.7 56.7" class="icon icon-mag" width="18" height="18">
<path d="M42.8,7.3C33-2.4,17.1-2.4,7.3,7.3c-9.8,9.8-9.8,25.7,0,35.5c8.7,8.7,22.2,9.7,32,2.9l9.6,9.6c1.8,1.8,4.7,1.8,6.4,0
c1.8-1.8,1.8-4.7,0-6.4l-9.6-9.6C52.5,29.5,51.5,16,42.8,7.3z M36.6,36.6c-6.4,6.4-16.7,6.4-23.1,0s-6.4-16.7,0-23.1
c6.4-6.4,16.7-6.4,23.1,0C43,19.9,43,30.3,36.6,36.6z"></path>
</svg>
<span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="packages-search" type="text" value="" placeholder="Search npm and add a package..." class="aa-input" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="both" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-6" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Tahoma, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="aa-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-6" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="aa-dataset-7"></div></span></span>
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&amp;utm_medium=website&amp;utm_content=codepen.io&amp;utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://cpwebassets.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg">
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100" width="14" height="14">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z"></path>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About Packages</h5>
<svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
<p>Using packages here is powered by <a href="https://www.skypack.dev/">Skypack</a>, which makes packages from npm not only available on a CDN, but prepares them for native JavaScript ES6 <code>import</code> usage.</p>
<p>All packages are different, so refer to their docs for how they work.</p>
<p>If you're using React / ReactDOM, make sure to turn on Babel for the JSX processing.</p>
</div>
</div>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-behavior">
<h3 aria-label="Pen Behavior">Behavior</h3>
<div class="settings-row">
<h4>Save Automatically?</h4>
<div>
<p class="hint">If active, Pens will autosave every 30 seconds after being saved once.</p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-reverse">
<input type="checkbox" id="auto-save" name="auto-save" checked="">
<label for="auto-save"></label>
<label for="auto-save" class="ios-toggle-mega-label"></label>
</span>
</div>
</div>
</div>
<div class="settings-row">
<h4>Auto-Updating Preview</h4>
<p class="hint">If enabled, the preview panel updates automatically as you code. If disabled, use the "Run" button to update.</p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-reverse">
<input type="checkbox" id="auto-run" name="auto-run" checked="">
<label for="auto-run"></label>
<label for="auto-run" class="ios-toggle-mega-label"></label>
</span>
</div>
</div>
<div class="settings-row">
<h4>Format on Save</h4>
<p class="hint">If enabled, your code will be formatted when you actively save your Pen. <strong><span class="inline-note">Note:</span> your code becomes un-folded during formatting.</strong></p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-reverse">
<input type="checkbox" id="format_on_save" name="format_on_save">
<label for="format_on_save"></label>
<label for="format_on_save" class="ios-toggle-mega-label"></label>
</span>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-editor">
<h3 aria-label="Editor Settings">Editor Settings</h3>
<div id="editor-settings-form" class="settings-row top-label-form">
<h4>
Code Indentation
</h4>
<ul class="radio-list">
<li>
<input type="radio" id="indent-with-spaces" name="indent-with" value="spaces" checked="">
<label for="indent-with-spaces" class="small-inline">Spaces</label>
</li>
<li>
<input type="radio" id="indent-with-tabs" name="indent-with" value="tabs">
<label for="indent-with-tabs" class="small-inline">Tabs</label>
</li>
</ul>
</div>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="tab-size">
Code Indent width
</label>
</h4>
<div class="custom-select-wrap">
<select id="tab-size" class="fullwidth" name="tab-size">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
</div>
</div>
</div>
<div class="settings-row">
<h4>Want to change your Syntax Highlighting theme, Fonts and more?</h4>
<p>Visit <a href="/settings/editor" target="_blank">your global Editor Settings</a>.</p>
</div>
</div>
</div>
<footer>
<div class="save-and-close-wrap">
<input type="button" class="button button-small green button-no-right-margin close" value="Close" id="close-settings">
</div>
</footer>
</div>
<div class="page-wrap">
<div class="boxes">
<div class="mobile-editor-nav">
<button id="html-toggle" class="selected"><span>HTML</span></button>
<button id="css-toggle"><span>CSS</span></button>
<button id="js-toggle"><span>JS</span></button>
<button id="result-toggle" class="selected"><span>Result</span></button>
</div>
<div class="top-boxes editor-parent" data-number-of-editors="3" elementtiming="pen-editors">
<div class="editor-resizer html-editor-resizer is-horiz-skinny" title="Double-click to expand."><h2 class="box-title html-editor-title box-title--resizer" id="html-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-html">
<rect fill="#FF3C41" width="15" height="15" rx="4"></rect>
<path d="M10.97 2.29a.563.563 0 0 0-.495-.29.572.572 0 0 0-.488.277l-5.905 9.86a.565.565 0 0 0-.007.574c.102.18.287.289.495.289a.572.572 0 0 0 .488-.277l5.905-9.86a.565.565 0 0 0 .007-.574" fill="#28282B"></path>
</svg>
<span class="box-title-name">
HTML
</span>
<span class="box-title-preprocessor-name "></span>
</h2></div>
<div id="box-html" class="box box-html" data-type="html" style="width: 28.6501%;">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title html-editor-title" id="html-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-html">
<rect fill="#FF3C41" width="15" height="15" rx="4"></rect>
<path d="M10.97 2.29a.563.563 0 0 0-.495-.29.572.572 0 0 0-.488.277l-5.905 9.86a.565.565 0 0 0-.007.574c.102.18.287.289.495.289a.572.572 0 0 0 .488-.277l5.905-9.86a.565.565 0 0 0 .007-.574" fill="#28282B"></path>
</svg>
<span class="box-title-name">
HTML
</span>
<span class="box-title-preprocessor-name "></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button id="settings-pane-html" class="button button-medium mini-button settings-nub" data-type="html" title="Open HTML Settings">
<svg viewBox="0 0 100 100" id="icon-gear" width="10" height="10">
<path d="M87.687,45.077c-0.313-2.433-0.816-4.807-1.542-7.079l8.145-11.73l-5.827-7.515l-0.094-0.123l-5.824-7.514
                    l-12.955,5.577c-2.041-1.265-4.192-2.362-6.459-3.219L59.42,0h-9.34h-0.153h-9.341l-3.709,13.474
                    c-2.27,0.857-4.421,1.955-6.463,3.222l-12.957-5.577l-5.825,7.514l-0.097,0.124l-5.822,7.517l8.146,11.731
                    c-0.726,2.271-1.233,4.645-1.544,7.079L0,52.032l2.08,9.375l0.033,0.15l2.08,9.375l14.001,0.761c1.295,2.028,2.771,3.926,4.4,5.668
                    l-2.396,14.227l8.416,4.173l0.138,0.067L37.169,100l9.309-10.796c1.161,0.109,2.335,0.173,3.524,0.173s2.358-0.074,3.52-0.184
                    l9.317,10.804l8.415-4.173l0.141-0.066l8.413-4.172l-2.396-14.228c1.628-1.741,3.104-3.64,4.4-5.672l14-0.759l2.078-9.375
                    l0.035-0.154L100,52.025L87.687,45.077z M50.003,34.51c8.435,0,15.272,7.035,15.272,15.719c0,8.679-6.839,15.717-15.272,15.717
                    c-8.436,0-15.272-7.038-15.272-15.717C34.731,41.545,41.569,34.51,50.003,34.51z"></path>
</svg>
</button>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-html" data-dropdown="#editor-dropdown-html" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
HTML Options
</span>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini" width="10" height="10">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
    c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
    C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
</button>
<ul id="editor-dropdown-html" class="link-list is-dropdown editor-dropdown editor-dropdown-html" data-dropdown-position="css" data-dropdown-type="html">
<li class="editor-dropdown-list-item">
<button id="tidy-html" class="invisible-button tidy-code-button" data-editor-type="html">
Format HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-html" class="invisible-button view-compiled-button hide" data-editor-type="html">
View Compiled HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-html" class="invisible-button analyze-button" data-editor-type="html">
Analyze HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-html-editor" class="invisible-button maximize-button" data-editor-type="html">
Maximize HTML Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-html-editor" class="invisible-button minimize-button" data-editor-type="html">
Minimize HTML Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-html" class="invisible-button fold-all-button" data-editor-type="html">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-html" class="invisible-button unfold-all-button" data-editor-type="html">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap notranslate" translate="no">
<div class="CodeMirror cm-s-default CodeMirror-wrap CodeMirror-simplescroll" translate="no"><div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 4px; left: 4px;"><textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; min-height: 1em; outline: none;" aria-label="HTML Code Editor" tabindex="0"></textarea></div><div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;"><div></div></div><div class="CodeMirror-simplescroll-vertical" cm-not-content="true" style="display: none;"><div></div></div><div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div><div class="CodeMirror-gutter-filler" cm-not-content="true"></div><div class="CodeMirror-scroll" tabindex="-1"><div class="CodeMirror-sizer" style="margin-left: 39px; margin-bottom: -17px; border-right-width: 33px; min-height: 23px; padding-right: 0px; padding-bottom: 0px;"><div style="position: relative; top: 0px;"><div class="CodeMirror-lines" role="presentation"><div role="presentation" style="position: relative; outline: none;"><div class="CodeMirror-measure"><pre class="CodeMirror-line-like"><span>xxxxxxxxxx</span></pre><div class="CodeMirror-linenumber CodeMirror-gutter-elt"><div>1</div></div></div><div class="CodeMirror-measure"></div><div style="position: relative; z-index: 1;"></div><div class="CodeMirror-cursors" style="visibility: hidden;"><div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 15px;">&nbsp;</div></div><div class="CodeMirror-code" role="presentation"><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -39px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">1</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div></div></div></div></div></div><div style="position: absolute; height: 33px; width: 1px; border-bottom: 0px solid transparent; top: 23px;"></div><div class="CodeMirror-gutters" style="height: 56px; left: -1.90735e-06px;"><div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 29px;"></div><div class="CodeMirror-gutter CodeMirror-foldgutter"></div></div></div></div>
<div class="error-bar" id="error-bar-html">
<span class="error-icon" data-type="html">
!
</span>
</div>
<span class="code-editor-status"></span>
</div>
</div>
<div class="editor-resizer css-editor-resizer is-horiz-skinny" title="Double-click to expand."><h2 class="box-title css-editor-title box-title--resizer" id="css-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-css">
<rect fill="#0EBEFF" width="15" height="15" rx="4"></rect><path d="M8 8.366l1.845 1.065a.507.507 0 0 0 .686-.181.507.507 0 0 0-.186-.685L8.5 7.5l1.845-1.065a.507.507 0 0 0 .186-.685.507.507 0 0 0-.686-.181L8 6.634v-2.13A.507.507 0 0 0 7.5 4c-.268 0-.5.225-.5.503v2.131L5.155 5.569a.507.507 0 0 0-.686.181.507.507 0 0 0 .186.685L6.5 7.5 4.655 8.565a.507.507 0 0 0-.186.685c.134.232.445.32.686.181L7 8.366v2.13c0 .271.224.504.5.504.268 0 .5-.225.5-.503V8.366z" fill="#282828"></path>
</svg>
<span class="box-title-name">
CSS
</span>
<span class="box-title-preprocessor-name "></span>
</h2></div>
<div id="box-css" class="box box-css" data-type="css" style="width: 28.6501%;">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title css-editor-title" id="css-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-css">
<rect fill="#0EBEFF" width="15" height="15" rx="4"></rect><path d="M8 8.366l1.845 1.065a.507.507 0 0 0 .686-.181.507.507 0 0 0-.186-.685L8.5 7.5l1.845-1.065a.507.507 0 0 0 .186-.685.507.507 0 0 0-.686-.181L8 6.634v-2.13A.507.507 0 0 0 7.5 4c-.268 0-.5.225-.5.503v2.131L5.155 5.569a.507.507 0 0 0-.686.181.507.507 0 0 0 .186.685L6.5 7.5 4.655 8.565a.507.507 0 0 0-.186.685c.134.232.445.32.686.181L7 8.366v2.13c0 .271.224.504.5.504.268 0 .5-.225.5-.503V8.366z" fill="#282828"></path>
</svg>
<span class="box-title-name">
CSS
</span>
<span class="box-title-preprocessor-name "></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button id="settings-pane-css" class="button button-medium mini-button settings-nub" data-type="css" title="Open CSS Settings">
<svg viewBox="0 0 100 100" id="icon-gear" width="10" height="10">
<path d="M87.687,45.077c-0.313-2.433-0.816-4.807-1.542-7.079l8.145-11.73l-5.827-7.515l-0.094-0.123l-5.824-7.514
                    l-12.955,5.577c-2.041-1.265-4.192-2.362-6.459-3.219L59.42,0h-9.34h-0.153h-9.341l-3.709,13.474
                    c-2.27,0.857-4.421,1.955-6.463,3.222l-12.957-5.577l-5.825,7.514l-0.097,0.124l-5.822,7.517l8.146,11.731
                    c-0.726,2.271-1.233,4.645-1.544,7.079L0,52.032l2.08,9.375l0.033,0.15l2.08,9.375l14.001,0.761c1.295,2.028,2.771,3.926,4.4,5.668
                    l-2.396,14.227l8.416,4.173l0.138,0.067L37.169,100l9.309-10.796c1.161,0.109,2.335,0.173,3.524,0.173s2.358-0.074,3.52-0.184
                    l9.317,10.804l8.415-4.173l0.141-0.066l8.413-4.172l-2.396-14.228c1.628-1.741,3.104-3.64,4.4-5.672l14-0.759l2.078-9.375
                    l0.035-0.154L100,52.025L87.687,45.077z M50.003,34.51c8.435,0,15.272,7.035,15.272,15.719c0,8.679-6.839,15.717-15.272,15.717
                    c-8.436,0-15.272-7.038-15.272-15.717C34.731,41.545,41.569,34.51,50.003,34.51z"></path>
</svg>
</button>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-css" data-dropdown="#editor-dropdown-css" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
CSS Options
</span>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini" width="10" height="10">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
    c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
    C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
</button>
<ul id="editor-dropdown-css" class="link-list is-dropdown editor-dropdown editor-dropdown-css" data-dropdown-position="css" data-dropdown-type="css">
<li class="editor-dropdown-list-item">
<button id="tidy-css" class="invisible-button tidy-code-button" data-editor-type="css">
Format CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-css" class="invisible-button view-compiled-button hide" data-editor-type="css">
View Compiled CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-css" class="invisible-button analyze-button" data-editor-type="css">
Analyze CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-css-editor" class="invisible-button maximize-button" data-editor-type="css">
Maximize CSS Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-css-editor" class="invisible-button minimize-button" data-editor-type="css">
Minimize CSS Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-css" class="invisible-button fold-all-button" data-editor-type="css">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-css" class="invisible-button unfold-all-button" data-editor-type="css">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap notranslate" translate="no">
<div class="CodeMirror cm-s-default CodeMirror-wrap CodeMirror-simplescroll" translate="no"><div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 4px; left: 4px;"><textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; min-height: 1em; outline: none;" aria-label="CSS Code Editor" tabindex="0"></textarea></div><div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;"><div></div></div><div class="CodeMirror-simplescroll-vertical" cm-not-content="true" style="display: none;"><div></div></div><div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div><div class="CodeMirror-gutter-filler" cm-not-content="true"></div><div class="CodeMirror-scroll" tabindex="-1"><div class="CodeMirror-sizer" style="margin-left: 39px; margin-bottom: -17px; border-right-width: 33px; min-height: 23px; padding-right: 0px; padding-bottom: 0px;"><div style="position: relative; top: 0px;"><div class="CodeMirror-lines" role="presentation"><div role="presentation" style="position: relative; outline: none;"><div class="CodeMirror-measure"><pre class="CodeMirror-line-like"><span>xxxxxxxxxx</span></pre><div class="CodeMirror-linenumber CodeMirror-gutter-elt"><div>1</div></div></div><div class="CodeMirror-measure"></div><div style="position: relative; z-index: 1;"></div><div class="CodeMirror-cursors"><div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 15px;">&nbsp;</div></div><div class="CodeMirror-code" role="presentation"><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -39px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">1</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div></div></div></div></div></div><div style="position: absolute; height: 33px; width: 1px; border-bottom: 0px solid transparent; top: 23px;"></div><div class="CodeMirror-gutters" style="height: 56px;"><div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 29px;"></div><div class="CodeMirror-gutter CodeMirror-foldgutter"></div></div></div></div>
<div class="error-bar" id="error-bar-css">
<span class="error-icon" data-type="css">
!
</span>
</div>
<span class="code-editor-status"></span>
</div>
</div>
<div class="editor-resizer js-editor-resizer is-horiz-skinny" title="Double-click to expand."><h2 class="box-title js-editor-title box-title--resizer" id="js-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-js">
<rect fill="#FCD000" width="15" height="15" rx="4"></rect>
<path d="M6.554 3.705c0 .267-.19.496-.452.543-1.2.217-2.12 1.61-2.12 3.275 0 1.665.92 3.057 2.12 3.274a.554.554 0 0 1-.205 1.087c-1.733-.322-3.022-2.175-3.022-4.361 0-2.187 1.289-4.04 3.022-4.362a.554.554 0 0 1 .657.544zm1.892 0c0-.347.316-.607.657-.544 1.733.322 3.022 2.175 3.022 4.362 0 2.186-1.289 4.04-3.022 4.361a.554.554 0 0 1-.205-1.087c1.2-.217 2.12-1.61 2.12-3.274 0-1.665-.92-3.058-2.12-3.275a.551.551 0 0 1-.452-.543z" fill="#282828"></path>
</svg>
<span class="box-title-name">
JS
</span>
<span class="box-title-preprocessor-name "></span>
</h2></div>
<div id="box-js" class="box box-js" data-type="js" style="width: 28.6501%;">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title js-editor-title" id="js-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-js">
<rect fill="#FCD000" width="15" height="15" rx="4"></rect>
<path d="M6.554 3.705c0 .267-.19.496-.452.543-1.2.217-2.12 1.61-2.12 3.275 0 1.665.92 3.057 2.12 3.274a.554.554 0 0 1-.205 1.087c-1.733-.322-3.022-2.175-3.022-4.361 0-2.187 1.289-4.04 3.022-4.362a.554.554 0 0 1 .657.544zm1.892 0c0-.347.316-.607.657-.544 1.733.322 3.022 2.175 3.022 4.362 0 2.186-1.289 4.04-3.022 4.361a.554.554 0 0 1-.205-1.087c1.2-.217 2.12-1.61 2.12-3.274 0-1.665-.92-3.058-2.12-3.275a.551.551 0 0 1-.452-.543z" fill="#282828"></path>
</svg>
<span class="box-title-name">
JS
</span>
<span class="box-title-preprocessor-name "></span>
</h2>
<div class="unsaved-editor-message"><b>0</b> unsaved changes <span class="dismiss"><svg class="icon-x" viewBox="0 0 100 100"><path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path></svg></span></div></div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button id="settings-pane-js" class="button button-medium mini-button settings-nub" data-type="js" title="Open JS Settings">
<svg viewBox="0 0 100 100" id="icon-gear" width="10" height="10">
<path d="M87.687,45.077c-0.313-2.433-0.816-4.807-1.542-7.079l8.145-11.73l-5.827-7.515l-0.094-0.123l-5.824-7.514
                    l-12.955,5.577c-2.041-1.265-4.192-2.362-6.459-3.219L59.42,0h-9.34h-0.153h-9.341l-3.709,13.474
                    c-2.27,0.857-4.421,1.955-6.463,3.222l-12.957-5.577l-5.825,7.514l-0.097,0.124l-5.822,7.517l8.146,11.731
                    c-0.726,2.271-1.233,4.645-1.544,7.079L0,52.032l2.08,9.375l0.033,0.15l2.08,9.375l14.001,0.761c1.295,2.028,2.771,3.926,4.4,5.668
                    l-2.396,14.227l8.416,4.173l0.138,0.067L37.169,100l9.309-10.796c1.161,0.109,2.335,0.173,3.524,0.173s2.358-0.074,3.52-0.184
                    l9.317,10.804l8.415-4.173l0.141-0.066l8.413-4.172l-2.396-14.228c1.628-1.741,3.104-3.64,4.4-5.672l14-0.759l2.078-9.375
                    l0.035-0.154L100,52.025L87.687,45.077z M50.003,34.51c8.435,0,15.272,7.035,15.272,15.719c0,8.679-6.839,15.717-15.272,15.717
                    c-8.436,0-15.272-7.038-15.272-15.717C34.731,41.545,41.569,34.51,50.003,34.51z"></path>
</svg>
</button>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-js" data-dropdown="#editor-dropdown-js" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
JS Options
</span>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini" width="10" height="10">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
    c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
    C-73.5,183.9-66.8,183.9-63.2,180.3z"></path>
</svg>
</button>
<ul id="editor-dropdown-js" class="link-list is-dropdown editor-dropdown editor-dropdown-js" data-dropdown-position="css" data-dropdown-type="js">
<li class="editor-dropdown-list-item">
<button id="tidy-js" class="invisible-button tidy-code-button" data-editor-type="js">
Format JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-js" class="invisible-button view-compiled-button hide" data-editor-type="js">
View Compiled JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-js" class="invisible-button analyze-button" data-editor-type="js">
Analyze JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-js-editor" class="invisible-button maximize-button" data-editor-type="js">
Maximize JavaScript Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-js-editor" class="invisible-button minimize-button" data-editor-type="js">
Minimize JavaScript Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-js" class="invisible-button fold-all-button" data-editor-type="js">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-js" class="invisible-button unfold-all-button" data-editor-type="js">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap notranslate" translate="no">
<div class="CodeMirror cm-s-default CodeMirror-wrap CodeMirror-simplescroll" translate="no"><div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 435px; left: 4px;"><textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; min-height: 1em; outline: none;" aria-label="JavaScript Code Editor" tabindex="0"></textarea></div><div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;"><div></div></div><div class="CodeMirror-simplescroll-vertical" cm-not-content="true" style="display: block; bottom: 0px;"><div style="height: 41.4248px; top: 27.0738px;"></div></div><div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div><div class="CodeMirror-gutter-filler" cm-not-content="true"></div><div class="CodeMirror-scroll" tabindex="-1"><div class="CodeMirror-sizer" style="margin-left: 42px; margin-bottom: -17px; border-right-width: 33px; min-height: 4887px; padding-right: 10px; padding-bottom: 0px;"><div style="position: relative; top: 0px;"><div class="CodeMirror-lines" role="presentation" style="padding-bottom: 407px;"><div role="presentation" style="position: relative; outline: none;"><div class="CodeMirror-measure"><pre class="CodeMirror-line-like">x</pre></div><div class="CodeMirror-measure"></div><div style="position: relative; z-index: 1;"><div class="CodeMirror-selected" style="position: absolute; left: 4px; top: 0px; width: 305px; height: 15px;"></div><div class="CodeMirror-selected" style="position: absolute; left: 4px; top: 4455px; width: 0px; height: 21px;"></div><div class="CodeMirror-selected" style="position: absolute; left: 4px; top: 15px; width: 305px; height: 4440px;"></div></div><div class="CodeMirror-cursors" style=""><div class="CodeMirror-cursor" style="left: 4px; top: 4455px; height: 21px;">&nbsp;</div></div><div class="CodeMirror-code" role="presentation" style=""><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">1</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// Import Two.js from a CDN</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">2</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">import</span> <span class="cm-def">Two</span> <span class="cm-keyword">from</span> <span class="cm-string">'https://cdn.skypack.dev/two.js@latest'</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">3</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">4</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// Initialize an instance to render</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">5</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// render to the screen. Try changing</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">6</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// the `type` property to:</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">7</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// &nbsp; Two.Types.canvas</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">8</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// &nbsp; Two.Types.webgl</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">9</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// To see different rendering styles.</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">10</div><div class="CodeMirror-gutter-elt" style="left: 32px; width: 10px;"><div class="CodeMirror-foldgutter-open CodeMirror-guttermarker-subtle"></div></div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">const</span> <span class="cm-def">two</span> <span class="cm-operator">=</span> <span class="cm-keyword">new</span> <span class="cm-variable">Two</span>({</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">11</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-property">type</span>: <span class="cm-variable">Two</span>.<span class="cm-property">Types</span>.<span class="cm-property">svg</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">12</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-property">fullscreen</span>: <span class="cm-atom">true</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">13</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-property">autostart</span>: <span class="cm-atom">true</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">14</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">}).<span class="cm-property">appendTo</span>(<span class="cm-variable">document</span>.<span class="cm-property">body</span>);</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">15</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">16</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// Define a list of colors for</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">17</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// the linear gradient to cycle</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">18</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// through.</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">19</div><div class="CodeMirror-gutter-elt" style="left: 32px; width: 10px;"><div class="CodeMirror-foldgutter-open CodeMirror-guttermarker-subtle"></div></div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">const</span> <span class="cm-def">colors</span> <span class="cm-operator">=</span> [</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">20</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-string">'rgb(255, 64, 64)'</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">21</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-string">'rgb(255, 128, 0)'</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">22</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-string">'rgb(0, 200, 255)'</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">23</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-string">'rgb(0, 191, 168)'</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">24</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-string">'rgb(153, 102, 255)'</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">25</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;<span class="cm-string">'rgb(255, 244, 95)'</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">26</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">];</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">27</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// Define the index of the</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">28</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// current color the gradient</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">29</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// is starting from.</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">30</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">let</span> <span class="cm-def">colorIndex</span> <span class="cm-operator">=</span> <span class="cm-number">0</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">31</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">32</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// Cache the center of the canvas</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">33</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// for positioning objects.</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">34</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">const</span> <span class="cm-def">cx</span> <span class="cm-operator">=</span> <span class="cm-variable">two</span>.<span class="cm-property">width</span> <span class="cm-operator">/</span> <span class="cm-number">2</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">35</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">const</span> <span class="cm-def">cy</span> <span class="cm-operator">=</span> <span class="cm-variable">two</span>.<span class="cm-property">height</span> <span class="cm-operator">/</span> <span class="cm-number">2</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">36</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">37</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// 4 component values used to</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">38</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// create a vertical line.</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">39</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">let</span> <span class="cm-def">x1</span> <span class="cm-operator">=</span> <span class="cm-number">0</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">40</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">let</span> <span class="cm-def">y1</span> <span class="cm-operator">=</span> <span class="cm-operator">-</span> <span class="cm-variable">cy</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">41</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">const</span> <span class="cm-def">x2</span> <span class="cm-operator">=</span> <span class="cm-number">0</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">42</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">const</span> <span class="cm-def">y2</span> <span class="cm-operator">=</span> <span class="cm-variable">cy</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">43</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" aria-hidden="true" style="left: 0px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 24px;">44</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-comment">// Create a linear gradient with ramp </span></span></pre></div></div></div></div></div></div><div style="position: absolute; height: 33px; width: 1px; border-bottom: 0px solid transparent; top: 4887px;"></div><div class="CodeMirror-gutters" style="height: 4920px; left: 0px;"><div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 32px;"></div><div class="CodeMirror-gutter CodeMirror-foldgutter"></div></div></div></div>
<div class="error-bar" id="error-bar-js">
<span class="error-icon" data-type="js">
!
</span>
</div>
<span class="code-editor-status"></span>
</div>
<div class="react-pen-editor-imports" data-props-type="js"></div>
</div>
</div>
<div id="resizer" class="resizer"><span></span><div id="width-readout" class="width-readout">362px</div></div>
<section id="drawer" class="drawer comments">
</section>
<div class="output-container">
<div class="output-sizer">
<div id="result_div" class="result">
<iframe id="result" name="CodePen" title="CodePen Preview" src="https://cdpn.io/jonobr1/fullpage/yLoEEQJ" sandbox="allow-forms allow-modals allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation allow-downloads allow-presentation" allow="accelerometer; camera; encrypted-media; display-capture; geolocation; gyroscope; microphone; midi; clipboard-read; clipboard-write; web-share" scrolling="auto" allowtransparency="true" allowpaymentrequest="true" allowfullscreen="true" class="result-iframe " loading="lazy">
          </iframe>
<div id="editor-drag-cover" class="drag-cover"></div>
</div>
<div id="box-console" class="box box-console notranslate" translate="no">
<div class="editor-resizer editor-resizer-console" title="Drag to resize. Double-click to expand."></div>
<div class="powers">
<div class="powers-drag-handle" title="Drag to resize. Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title"><span class="box-title-name">Console</span></h2>
</div>
<div class="editor-actions-right">
<button class="button button-medium mini-button console-clear-button" title="Clear">
Clear
</button>
<button class="button button-medium mini-button close-editor-button" data-type="console" title="Close">
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"></path>
</svg>
</button>
</div>
</div>
<div class="console-wrap">
<div class="console-entries short-no-scroll"></div>
<div class="console-command-line">
<span class="console-arrow forwards"></span>
<textarea class="console-command-line-input auto-expand" rows="1" data-min-rows="1"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="asset-bin-goes-here"></div>
<footer id="react-pen-footer" class="site-footer editor-footer"><div class="footer-left"><div class="footer-actions-menu"><button id="footer-button" aria-expanded="false" class="Button-module_root-xw+9D toggle-footer-menu-button
              
            "><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></button><div class="footer-actions" data-expanded="false"><button class="Button-module_root-xw+9D console-toggle-button" data-size="mini">Console</button><button data-appcues="footer-assets-button" class="Button-module_root-xw+9D" data-size="mini">Assets</button><button data-id="editor-comments-button" class="Button-module_root-xw+9D" data-size="mini">Comments</button><button title="Keyboard Shortcuts" class="Button-module_root-xw+9D keyboard-commands-button" data-size="mini"><span>Ctrl</span></button></div><select name="zoom-choice" data-placeholder="Zoom Scale..." class="footer-button button mini-button zoom-select"><option value="1.0" class="option-green" selected="">1.0×</option><option value="0.5" class="option-green">0.5×</option><option value="0.25" class="option-green">0.25×</option></select></div></div><div class="footer-right"><span class="PenEditorFooterStatus_editorState-WVwoB" data-state="EMPTY"><span class="PenEditorFooterStatus_text-5fDLt"></span><svg></svg></span><button data-test-id="fork-button" title="Fork this Pen" class="Button-module_root-xw+9D" data-size="mini" data-has-icon="true"><svg viewBox="0 0 100 100"><path d="M84.339 62.504a15.805 15.805 0 00-11.313 4.721 40.187 40.187 0 01-1.578-1.572c-6.965-7.211-14.451-19.189-22.311-29.678-7.977-10.209-16.196-20.413-29.012-20.906H0v14.37h20.126c2.555-.111 6.556 1.993 11.208 6.914 6.961 7.197 14.454 19.171 22.315 29.662 4.822 6.164 9.759 12.293 15.741 16.289 1.99 6.191 7.93 10.688 14.949 10.688 8.648 0 15.661-6.824 15.661-15.244s-7.013-15.244-15.661-15.244zM51.541 29.438h18.986c2.637 4.795 7.831 8.059 13.811 8.059 8.648 0 15.661-6.824 15.661-15.243S92.986 7.01 84.338 7.01c-5.979 0-11.174 3.264-13.811 8.058H36.3c6.007 3.551 10.861 8.924 15.241 14.37z"></path></svg>Fork</button><button class="Button-module_root-xw+9D embed-modal-button" data-size="mini">Embed</button><span class="DropdownControlled-module_root-3ewM0" data-direction="top left" data-open="false"><button aria-haspopup="true" aria-expanded="false" class="Button-module_root-xw+9D" data-size="mini">Export</button><div class="DropdownControlled-module_content-mxnG0" hidden="" role="menu" data-direction="top left"><div class="DropdownContent-module_root-rQ0al PenEditorFooterExportDropdown-module_dropdown-mInw+"><header class="PenEditorFooterExportDropdown-module_header-5Usha"><h3>Export</h3><a target="codepen_documentation" rel="noopener noreferrer" href="https://blog.codepen.io/documentation/exporting-pens/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill-rule="evenodd"><path d="M6 12A6 6 0 106 0a6 6 0 000 12zm.793-10.129a.721.721 0 00-.583-.264.82.82 0 00-.594.264.964.964 0 00-.286.649.92.92 0 00.21.638.78.78 0 00.604.253.803.803 0 00.605-.253.954.954 0 00.253-.638.87.87 0 00-.209-.649zm-.176 2.86c-.146-.235-.41-.352-.792-.352-.249 0-.473.059-.67.176-.191.117-.36.268-.507.451a2.578 2.578 0 00-.34.561 2.466 2.466 0 00-.177.528l.594.176c.096-.33.187-.557.275-.682.088-.125.173-.187.253-.187.044 0 .085.018.121.055.037.03.055.106.055.231 0 .176-.018.4-.055.671-.036.264-.08.55-.132.858a51.94 51.94 0 00-.12.902 6.242 6.242 0 00-.056.759c0 .389.074.693.22.913.154.22.433.33.836.33.25 0 .47-.059.66-.176.198-.117.367-.264.506-.44.14-.183.25-.374.33-.572.088-.198.147-.374.176-.528L7.2 8.229c-.095.33-.187.557-.275.682-.088.125-.176.187-.264.187-.036 0-.073-.018-.11-.055-.036-.037-.055-.114-.055-.231 0-.125.019-.323.055-.594l.121-.902c.044-.33.085-.645.121-.946.037-.3.055-.539.055-.715 0-.389-.077-.697-.23-.924z"></path></svg></a></header><a data-url="/ajax/upgrades/zip" data-test-id="export-zip" href="/cpe/pen/export/yLoEEQJ" target="_blank" class="Button-module_root-xw+9D upsell" data-has-icon="true" data-full-width="true" data-align="start"><svg viewBox="0 0 23 17"><path d="M18.18 5.76a1.221 1.221 0 00-.461-.273 2.044 2.044 0 00-.663-.096H16v2.772h1.056c.528 0 .908-.126 1.14-.378.232-.252.348-.604.348-1.056 0-.2-.03-.382-.09-.546a1.118 1.118 0 00-.273-.423zM21 0H2C.9 0 0 .9 0 2v13c0 1.1.9 2 2 2h19c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM9.208 4.605a.936.936 0 01-.051.306c-.034.1-.081.194-.141.282l-4.104 5.862h4.164v1.56H2.332v-.78c0-.093.016-.184.048-.273a.951.951 0 01.132-.25l4.116-5.88h-3.96v-1.56h6.54v.733zm3.145 8.01h-2.041V3.872h2.04v8.741zm8.01-4.686c-.141.364-.355.676-.643.936-.288.26-.654.462-1.095.609-.442.145-.965.218-1.57.218H16v2.922h-2.028V3.873h3.084c.616 0 1.145.073 1.587.219.442.146.806.347 1.092.603.286.256.496.558.633.906.136.348.204.724.204 1.128 0 .436-.07.836-.21 1.2z"></path></svg>Export .zip</a><div class="PenEditorFooterExportDropdown-module_proWrap-vPSu8"><a class="PenEditorFooterExportDropdown-module_proBadge-unLGM BadgePro-module_root-EhalN BadgePro-module_svg-OztkH Badge-module_root-+zThw" data-test-id="pro-badge" href="https://codepen.io/pro"><svg fill="none" viewBox="0 0 32 16" xmlns="http://www.w3.org/2000/svg" title="PRO" width="32" height="16"><rect fill="#ffdd40" height="16" rx="1.5" width="32"></rect><g fill="#000"><path d="M9.174 5.598c.834 0 1.214.44 1.214 1.113 0 .76-.422 1.113-1.182 1.113h-.56c-.094 0-.105-.011-.105-.11V5.708c0-.1.01-.11.106-.11zm.106 3.67c.76 0 1.404-.188 1.847-.563.56-.452.855-1.135.855-2.016 0-.893-.317-1.61-.887-2.039-.443-.33-.97-.507-1.857-.507H7.106c-.095 0-.106.011-.106.11v7.494c0 .099.01.11.106.11h1.33c.094 0 .105-.011.105-.11v-2.37c0-.099.01-.11.106-.11zM14.375 9.047c0-.077 0-.11.063-.11.053 0 .074.022.116.088l1.953 2.722c.074.099.084.11.18.11h1.635c.064 0 .095 0 .095-.022a.31.31 0 00-.053-.088c-.707-.96-1.425-1.885-2.132-2.854a.085.085 0 01-.02-.045c0-.022.01-.044.041-.055.95-.286 1.573-1.124 1.573-2.28 0-.96-.454-1.62-1.055-1.973-.539-.32-1.056-.397-1.943-.397H12.94c-.095 0-.105.011-.105.11v7.494c0 .099.02.11.116.11h1.32c.094 0 .105-.011.105-.11zm.654-3.515c.834 0 1.214.418 1.214 1.09 0 .76-.422 1.07-1.182 1.07h-.58c-.096 0-.106-.012-.106-.11v-1.94c0-.1.01-.11.105-.11zM26 8c0-2.182-1.636-4-3.726-4s-3.726 1.818-3.726 4 1.636 4 3.726 4S26 10.182 26 8zm-5.837 0c0-1.311.855-2.402 2.111-2.402 1.256 0 2.111 1.09 2.111 2.402 0 1.311-.855 2.402-2.11 2.402-1.257 0-2.112-1.09-2.112-2.402z"></path></g></svg></a><a data-test-id="export-zip-with-build" href="/cpe/pen/export-with-build/yLoEEQJ" target="_blank" class="Button-module_root-xw+9D" data-has-icon="true" data-color="grad-yellow" data-full-width="true" data-align="start"><svg viewBox="0 0 23 17"><path d="M18.18 5.76a1.221 1.221 0 00-.461-.273 2.044 2.044 0 00-.663-.096H16v2.772h1.056c.528 0 .908-.126 1.14-.378.232-.252.348-.604.348-1.056 0-.2-.03-.382-.09-.546a1.118 1.118 0 00-.273-.423zM21 0H2C.9 0 0 .9 0 2v13c0 1.1.9 2 2 2h19c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zM9.208 4.605a.936.936 0 01-.051.306c-.034.1-.081.194-.141.282l-4.104 5.862h4.164v1.56H2.332v-.78c0-.093.016-.184.048-.273a.951.951 0 01.132-.25l4.116-5.88h-3.96v-1.56h6.54v.733zm3.145 8.01h-2.041V3.872h2.04v8.741zm8.01-4.686c-.141.364-.355.676-.643.936-.288.26-.654.462-1.095.609-.442.145-.965.218-1.57.218H16v2.922h-2.028V3.873h3.084c.616 0 1.145.073 1.587.219.442.146.806.347 1.092.603.286.256.496.558.633.906.136.348.204.724.204 1.128 0 .436-.07.836-.21 1.2z"></path></svg>.zip with Build Process </a></div></div></div></span><span class="DropdownControlled-module_root-3ewM0" data-direction="top left" data-open="false"><button aria-haspopup="true" aria-expanded="false" class="Button-module_root-xw+9D" data-size="mini">Share</button><div class="DropdownControlled-module_content-mxnG0" hidden="" role="menu" data-direction="top left"><div class="DropdownContent-module_root-rQ0al ShareDropdown-module_dropdown-X3Auw"><h3>Share</h3><a target="_blank" rel="noopener noreferrer" href="https://dev.to/new?prefill=---%0Atitle%3A%20Linear%20%26%20Radial%20Gradients%0Apublished%3A%20true%0Atags%3A%20codepen%0A---%0A%0A%3Cp%3EA%20Two.js%20example%20that%20illustrates%20how%20to%20instantiate%20Two.LinearGradient%2C%20Two.RadialGradient%2C%20Two.Rectangle%2C%20and%20Two.Vector%20objects.%20This%20example%20also%20centers%20everything%20on%20the%20screen%20even%20when%20resized%20and%20captures%20the%20mouse%20position%20for%20light%20interactivity.%20It%20imports%20Two.js%20through%20ES6%20imports.%3C%2Fp%3E%0A%0A%7B%25%20codepen%20https%3A%2F%2Fcodepen.io%2Fjonobr1%2Fpen%2FyLoEEQJ%20%25%7D" class="Button-module_root-xw+9D" data-has-icon="true" data-full-width="true" data-align="start"><svg viewBox="0 0 200 200"><path d="M188 0H12A12 12 0 000 12v176a12 12 0 0012 12h176a12 12 0 0012-12V12a12 12 0 00-12-12zM57.64 134.55C52.72 140.9 46 143 29.79 143H15.15V60.06h15.54C49 60.06 54.4 62 59.32 70c2.85 4.67 3.11 6.48 3.5 28.25.52 24.64-.26 30.08-5.18 36.3zm56-60.24H86.4v19.43h16.84v14.12l-8 .39-8.16.39v19.43l13.34.39 13.21.39V143H96.11c-17 0-17.74-.13-20.72-3.24l-3.24-3.11v-34.88c0-33.29.13-35 2.72-38.34s2.72-3.37 20.73-3.37h18zm51.56 60c-1.81 4.66-7 8.68-11 8.68-1.94 0-4.92-1.69-7.38-4.28-3.5-3.49-4.93-7-9.07-22.93-2.72-10.36-7.13-27.07-9.85-37.3l-4.92-18.4h8.29c4.53 0 8.29.26 8.29.52 0 .65 12.83 50 13.86 53.24.52 1.69 3.5-7.64 8-25.26l7.26-27.85 8.16-.39c4.4-.26 8 0 8 .39.01 1.53-18.38 70.19-19.68 73.56z"></path><path d="M45.07 76.77c-2.07-1.68-5-2.46-9.32-2.46H29.4l.26 26.82.39 26.94 6.21-.13c4.54 0 6.87-.78 9.07-2.85 2.72-2.72 2.85-4 2.85-24.35 0-20.99-.13-21.51-3.11-23.97z"></path></svg>Share on DEV</a><a target="_blank" rel="noopener noreferrer" href="https://twitter.com/intent/tweet?text=Linear%20%26%20Radial%20Gradients&amp;url=https://codepen.io/jonobr1/pen/yLoEEQJ&amp;via=CodePen" class="Button-module_root-xw+9D" data-has-icon="true" data-full-width="true" data-align="start"><svg viewBox="0 0 100 100"><path d="M100.001 17.942a39.965 39.965 0 01-11.783 3.339c4.236-2.624 7.49-6.779 9.021-11.73a40.289 40.289 0 01-13.026 5.146C80.47 10.575 75.138 8 69.234 8c-11.33 0-20.518 9.494-20.518 21.205 0 1.662.183 3.281.533 4.833-17.052-.884-32.168-9.326-42.288-22.155a21.637 21.637 0 00-2.778 10.659c0 7.357 3.622 13.849 9.127 17.65a19.94 19.94 0 01-9.293-2.651c-.002.089-.002.178-.002.268 0 10.272 7.072 18.845 16.458 20.793a19.939 19.939 0 01-9.264.365c2.609 8.424 10.187 14.555 19.166 14.726-7.021 5.688-15.867 9.077-25.48 9.077A40.59 40.59 0 010 82.473C9.08 88.491 19.865 92 31.449 92c37.737 0 58.374-32.312 58.374-60.336 0-.92-.02-1.834-.059-2.743a42.547 42.547 0 0010.237-10.979z"></path></svg>Share on Twitter</a><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/jonobr1/pen/yLoEEQJ" class="Button-module_root-xw+9D" data-has-icon="true" data-full-width="true" data-align="start"><svg viewBox="-574 359 75 75"><path d="M-511.499 359h-50c-6.875 0-12.501 5.626-12.501 12.502v49.997c0 6.88 5.626 12.501 12.501 12.501h50c6.876 0 12.499-5.621 12.499-12.502v-49.996c0-6.876-5.624-12.502-12.499-12.502zm1.263 37.5h-12.201v32.813H-536.5V396.5h-6.777v-10.735h6.777v-6.972c0-9.473 4.086-15.105 15.225-15.105h12.835v11.614h-10.483c-3.111-.005-3.497 1.622-3.497 4.652l-.017 5.811h14.063l-1.862 10.735z"></path></svg>Share on Facebook</a><a target="_blank" rel="noopener noreferrer" href="https://codepen.io/jonobr1/pen/yLoEEQJ" class="Button-module_root-xw+9D" data-has-icon="true" data-color="grad-blue" data-full-width="true" data-align="start"><svg viewBox="0 0 8 8"><path d="M5.88.03a1.9 1.9 0 00-.53.09c-.27.1-.53.25-.75.47a.5.5 0 10.69.69c.11-.11.24-.17.38-.22.35-.12.78-.07 1.06.22.39.39.39 1.04 0 1.44l-1.5 1.5c-.44.44-.8.48-1.06.47-.26-.01-.41-.13-.41-.13a.5.5 0 10-.5.88s.34.22.84.25c.5.03 1.2-.16 1.81-.78l1.5-1.5A1.98 1.98 0 006.44.07C6.26.03 6.06.03 5.88.04zm-2 2.31c-.5-.02-1.19.15-1.78.75L.6 4.59a1.98 1.98 0 000 2.81c.56.56 1.36.72 2.06.47.27-.1.53-.25.75-.47a.5.5 0 10-.69-.69c-.11.11-.24.17-.38.22-.35.12-.78.07-1.06-.22-.39-.39-.39-1.04 0-1.44l1.5-1.5c.4-.4.75-.45 1.03-.44.28.01.47.09.47.09a.5.5 0 10.44-.88s-.34-.2-.84-.22z"></path></svg>Copy Link</a></div></div></span></div></footer>
<div id="keycommands" class="modal modal-neutral">
<div class="keycommands-container">
<section class="editor-commands inline-editor-commands">
<h2>Editor Commands</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key pc_only">Ctrl</span>
<span class="key mac_only">Ctrl</span>
<span class="key">Space</span>
</kbd>
Autocomplete
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">F</span>
</kbd>
Find
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">G</span>
</kbd>
Find Next
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">G</span>
</kbd>
Find Previous
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only" title="Shift">⇧</span>
<span class="key mac_only">Opt</span>
<span class="key">F</span>
</kbd>
Find &amp; Replace
</div>
<div class="key-group mac_only">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">F</span>
</kbd>
Format Code
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">[</span>
</kbd>
Indent Code Right
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">]</span>
</kbd>
Indent Code Left
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key" title="Shift">⇧</span>
<span class="key">Tab</span>
</kbd>
Auto Indent Code
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">/</span>
</kbd>
Line Comment
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only" title="Shift">⇧</span>
<span class="key mac_only">Opt</span>
<span class="key">/</span>
</kbd>
Block Comment
</div>
<p class="inline-tab-triggers">Also see: <a href="https://blog.codepen.io/documentation/features/tab-triggers/" target="_blank" rel="noopener">Tab Triggers</a></p>
</section>
<section class="editor-commands">
<h2>Editor Focus</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">1</span>
</kbd>
HTML Editor
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">2</span>
</kbd>
CSS Editor
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">3</span>
</kbd>
JS Editor
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">4</span>
</kbd>
Toggle Console
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">0</span>
</kbd>
Preview
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key">Esc</span>
</kbd>
Exit currently focused editor
</div>
</section>
<section class="editor-commands">
<h2>Misc</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">7</span>
</kbd>
Re-run Preview
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">8</span>
</kbd>
Clear All Analyze Errors
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">9</span>
</kbd>
Open This Dialog
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">0</span>
</kbd>
Open Debug View
</div>
<h2>HTML Specific</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">A</span>
</kbd>
Wrap With...
</div>
<h2>Pen Actions</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">P</span>
</kbd>
Create New Pen
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">S</span>
</kbd>
Save
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">S</span>
</kbd>
Save As Private <span style="border-radius: 2px; padding: 1px 6px 2px 5px; color: black !important; background: var(--cp-color-yellow); white-space: nowrap; text-shadow: none; letter-spacing: 0; font-size: 71%; position: relative; top: -1px;">PRO</span>
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">I</span>
</kbd>
Info Panel (if owned)
</div>
</section>
</div>
</div>
<div id="popup-overlay" class="overlay popup-overlay"></div>
<div id="modal-overlay" class="overlay modal-overlay"></div>
<noscript>

  <input type="checkbox" class="modal-closing-trick" id="modal-closing-trick">

  <div class="overlay noscript-overlay" style="display: block;"></div>

  <div class="modal modal-message group modal-warning">

    <div class="modal-title">CodePen requires JavaScript to render the code and preview areas in this view.</div>

    <p>Trying <a href="https://codepen.io/jonobr1/debug/yLoEEQJ">viewing this Pen in Debug Mode</a>, which is the preview area without any iframe and does not require JavaScript. Although what the preview is of might!</p>

    <p>Need to know how to enable JavaScript? <a href="http://enable-javascript.com/" target="_blank" rel="noopener">Go here.</a></p>

    <label class="button button-medium" for="modal-closing-trick">Close this, use anyway.</label>

  </div>

</noscript>
<textarea id="init-data" style="display:none">{"__browser":{"device":"unknown_device","mobile":false,"name":"chrome","platform":"pc","version":"108"},"__constants":{},"__CPDATA":{"domain_iframe":"https://cdpn.io","environment":"production","host":"codepen.io","iframe_allow":"accelerometer; camera; encrypted-media; display-capture; geolocation; gyroscope; microphone; midi; clipboard-read; clipboard-write; web-share","iframe_sandbox":"allow-forms allow-modals allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation allow-downloads allow-presentation"},"__graphql":{"data":{"data":{"sessionUser":{"id":"VoDkNZ","name":"Captain Anonymous","title":"Captain Anonymous","avatar":"https://assets.codepen.io/t-1/user-default-avatar.jpg?format=auto&amp;version=0","currentContext":{"id":"VoDkNZ","title":"Captain Anonymous","name":"Captain Anonymous","avatar":"https://assets.codepen.io/t-1/user-default-avatar.jpg?format=auto&amp;version=0","username":"anon","__typename":"User"},"currentTeamId":null,"username":"anon","admin":false,"anon":true,"pro":false,"verified":false,"teams":[],"__typename":"User"}}},"url":"https://codepen.io/graphql","api":"cprails","cpedata":{"action":"show","controller":"pen"}},"__user":{"anon":true,"base_url":"/anon/","current_team_id":0,"current_team_hashid":null,"hashid":"VoDkNZ","id":1,"itemType":"user","name":"Captain Anonymous","paid":false,"tier":0,"username":"anon","created_at":null,"email_verified":null,"collections_count":0,"collections_private_count":0,"followers_count":0,"followings_count":0,"pens_count":0,"pens_private_count":0,"projects_count":0,"projects_private_count":0},"__firebase":{"config":{"apiKey":"AIzaSyBgLAe7N_MdFpuVofMkcQLGwwhUu5tuxls","authDomain":"codepen-store-production.firebaseapp.com","databaseURL":"https://codepen-store-production.firebaseio.com","disabled":false,"projectId":"codepen-store-production"},"token":"eyJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJodHRwczovL2lkZW50aXR5dG9vbGtpdC5nb29nbGVhcGlzLmNvbS9nb29nbGUuaWRlbnRpdHkuaWRlbnRpdHl0b29sa2l0LnYxLklkZW50aXR5VG9vbGtpdCIsImNsYWltcyI6eyJvd25lcklkIjoiVm9Ea05aIiwiYWRtaW4iOmZhbHNlfSwiZXhwIjoxNjcwNjE4MzQ0LCJpYXQiOjE2NzA2MTQ3NDQsImlzcyI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInN1YiI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInVpZCI6IlZvRGtOWiJ9.HYqJbQHm3uekThxa9RlGYSdeocujUN8QH0p1YngtUBwvMivWDKLQ7ag0TDhEGO__QR-ZMsM1qYPYJaVNrVi5OX2kZ61Nv7FgmAfUPZH9CJYvoMiwc1z9W0SNbCUvvAdW_RT2AWgzVZH5cqV3cFiEmPicC3qNqzzVhFkCVtQ7B_OzJOUmtxOU7mTy1-3ckEjypGTsHZzOsspU87mlWuzydAkyyBqWONpoEqT6QEqdeZGg0bnbUo09U4946nY5pw4SrLn-j_Ho_QKyh9Yz-KkH94YwqpT8j8eRiardQ54TScbOMGjt5weCMmKuDHIE4WEGAJlUtRcfZHHn2L55KcIXwA"},"__pay_stripe_public_key":"pk_live_2GndomDfiklqpSNQn8FrGuwZSMIMzha7DkLJqlYe7IR0ihKAlKdiHg68JJc5eVPt68rzAjzAAVXcUwjySHRCsgjQQ00gtRBUFNH","__pay_braintree_env":"production","__boomboom":{"serve_url":"https://cdpn.io/cpe/boomboom","store_url":"https://codepen.io/cpe/boomboom/store"},"__editor_config":{"id":"classic","editors":[{"id":"html","type":"html","name":"HTML","showEditor":true,"showSettings":true,"showProcessors":true,"embeds":{"showViewCompiled":true},"settings":[{"id":"processor","name":"HTML Preprocessor","type":"select","visible":true,"values":[{"id":"none","name":"None","value":"none","default":true},{"id":"haml","name":"Haml","value":"haml"},{"id":"markdown","name":"Markdown","value":"markdown"},{"id":"slim","name":"Slim","value":"slim"},{"id":"pug","name":"Pug","value":"pug"}]},{"id":"html_classes","name":"Add Class(es) to &lt;html&gt;","type":"input","placeholder":"e.g. single post post-1234","visible":true},{"id":"head","name":"Stuff for &lt;head&gt;","type":"textarea","placeholder":"e.g. &lt;meta&gt;, &lt;link&gt;, &lt;script&gt;","visible":true}],"actions":[{"id":"tidy_html","type":"tidy_code","name":"Format HTML","disabled_processors":["haml","slim"]},{"id":"view_compiled_html","type":"view_compiled","name":"View Compiled HTML","disabled_processors":["none"],"showInEmbeds":true},{"id":"analyze_html","type":"analyze","name":"Analyze HTML"},{"id":"maximize_html_editor","type":"maximize","name":"Maximize HTML Editor"},{"id":"minimize_html_editor","type":"minimize","name":"Minimize HTML Editor"},{"id":"fold_all_html","type":"fold_all","name":"Fold All"},{"id":"unfold_all_html","type":"unfold_all","name":"Unfold All"}],"processors":[{"id":"none","name":"None"},{"id":"haml","name":"Haml"},{"id":"markdown","name":"Markdown"},{"id":"slim","name":"Slim"},{"id":"pug","name":"Pug"}]},{"id":"css","type":"css","name":"CSS","showEditor":true,"showSettings":true,"showProcessors":true,"showVendorPrefixing":true,"embeds":{"showViewCompiled":true},"actions":[{"id":"tidy_css","type":"tidy_code","name":"Format CSS","disabled_processors":["sass","stylus"]},{"id":"view_compiled_css","type":"view_compiled","name":"View Compiled CSS","disabled_processors":["none"],"disabled_prefixes":["neither","prefixfree"]},{"id":"analyze_css","type":"analyze","name":"Analyze CSS"},{"id":"maximize_css_editor","type":"maximize","name":"Maximize CSS Editor"},{"id":"minimize_css_editor","type":"minimize","name":"Minimize CSS Editor"},{"id":"fold_all_css","type":"fold_all","name":"Fold All","disabled_processors":["sass"]},{"id":"unfold_all_css","type":"unfold_all","name":"Unfold All","disabled_processors":["sass"]}],"processors":[{"id":"none","name":"None"},{"id":"less","name":"Less"},{"id":"scss","name":"SCSS"},{"id":"sass","name":"Sass"},{"id":"stylus","name":"Stylus"},{"id":"postcss","name":"PostCSS"}],"parSuffixes":["less","scss","sass","styl"]},{"id":"js","type":"js","name":"JS","showEditor":true,"showSettings":true,"showProcessors":true,"detectImports":true,"externalResourcesHidden":false,"embeds":{"showViewCompiled":true},"actions":[{"id":"tidy_js","type":"tidy_code","name":"Format JavaScript","disabled_processors":["coffeescript, livescript"]},{"id":"view_compiled_js","type":"view_compiled","name":"View Compiled JavaScript","disabled_processors":["none"]},{"id":"analyze_js","type":"analyze","name":"Analyze JavaScript"},{"id":"maximize_js_editor","type":"maximize","name":"Maximize JavaScript Editor"},{"id":"minimize_js_editor","type":"minimize","name":"Minimize JavaScript Editor"},{"id":"fold_all_js","type":"fold_all","name":"Fold All"},{"id":"unfold_all_js","type":"unfold_all","name":"Unfold All"}],"processors":[{"id":"none","name":"None"},{"id":"babel","name":"Babel"},{"id":"typescript","name":"TypeScript"},{"id":"coffeescript","name":"CoffeeScript"},{"id":"livescript","name":"LiveScript"}]}],"formatters":[{"id":"classic","name":"Classic","runOn":[{"eventType":"demand"}],"url":"https://fi593g2v2a.execute-api.us-west-2.amazonaws.com/production/format"}],"layout":{"default":"top"},"linters":[{"id":"classic","name":"Classic","runOn":[{"eventType":"demand"}],"url":"https://fi593g2v2a.execute-api.us-west-2.amazonaws.com/production/lint"}],"preview":{"intervalMaxWaitMS":3500,"intervalMS":1200},"settings":[{"id":"behavior","name":"Behavior","type":"setting"},{"id":"editor","name":"Editor","type":"setting"}]},"__item":"{\"editor_settings\":{\"auto_run\":true,\"autocomplete\":false,\"code_folding\":true,\"css_pre_processor\":\"none\",\"css_prefix\":\"neither\",\"css_starter\":\"neither\",\"emmet_active\":true,\"font_size\":\"14\",\"font_type\":\"system\",\"format_on_save\":false,\"html_pre_processor\":\"none\",\"indent_with\":\"spaces\",\"js_pre_processor\":\"none\",\"key_bindings\":\"normal\",\"line_numbers\":true,\"line_wrapping\":true,\"match_brackets\":true,\"snippets\":{\"markupSnippets\":{},\"stylesheetSnippets\":{}},\"tab_size\":2,\"theme\":\"twilight\",\"id\":\"yLoEEQJ\",\"auto_save\":true},\"hashid\":\"yLoEEQJ\",\"itemType\":\"pen\",\"resources\":[],\"tags\":[\"twojs\",\"es6\",\"gradient\",\"resize\",\"mouse\"],\"id\":56516665,\"user_id\":171564,\"html\":\"\",\"css\":\"\",\"js\":\"// Import Two.js from a CDN\\nimport Two from 'https://cdn.skypack.dev/two.js@latest';\\n\\n// Initialize an instance to render\\n// render to the screen. Try changing\\n// the `type` property to:\\n//   Two.Types.canvas\\n//   Two.Types.webgl\\n// To see different rendering styles.\\nconst two = new Two({\\n  type: Two.Types.svg,\\n  fullscreen: true,\\n  autostart: true\\n}).appendTo(document.body);\\n\\n// Define a list of colors for\\n// the linear gradient to cycle\\n// through.\\nconst colors = [\\n  'rgb(255, 64, 64)',\\n  'rgb(255, 128, 0)',\\n  'rgb(0, 200, 255)',\\n  'rgb(0, 191, 168)',\\n  'rgb(153, 102, 255)',\\n  'rgb(255, 244, 95)'\\n];\\n// Define the index of the\\n// current color the gradient\\n// is starting from.\\nlet colorIndex = 0;\\n\\n// Cache the center of the canvas\\n// for positioning objects.\\nconst cx = two.width / 2;\\nconst cy = two.height / 2;\\n\\n// 4 component values used to\\n// create a vertical line.\\nlet x1 = 0;\\nlet y1 = - cy;\\nconst x2 = 0;\\nconst y2 = cy;\\n\\n// Create a linear gradient with ramp \\n// points starting at (x1, y1) and ending\\n// at (x2, y2) with three stops evenly\\n// spread across the gradient.\\nlet gradient = two.makeLinearGradient(x1, y1, x2, y2,\\n  new Two.Stop(0, colors[0]),\\n  new Two.Stop(1, colors[1]),\\n  new Two.Stop(1, colors[2])\\n);\\ngradient.units = 'userSpaceOnUse';\\n\\n// Gradients are effects and can be applied\\n// to either the `fill` or the `stroke` of\\n// an Two.Path or other object. Make a rectangle\\n// to be filled by the gradient.\\nconst rectangle = two.makeRectangle(cx, cy, two.width, two.height);\\nrectangle.noStroke();\\nrectangle.fill = gradient;\\n\\n// 3 component values used\\n// to create a circle.\\nx1 = 0;\\ny1 = 0;\\n// Get the higher value of\\n// the two to make a gradient\\n// that fills the window.\\nlet radius = Math.max(two.width, two.height);\\n\\n// Create a radial gradient \\n// with center `x1`, `y1`\\n// and radius `radius` with \\n// two stops along the ramp.\\ngradient = two.makeRadialGradient(x1, y1, radius,\\n  new Two.Stop(0, 'rgba(255, 0, 0, 1)', 1),\\n  new Two.Stop(0.5, 'rgba(255, 0, 0, 0)', 0)\\n);\\ngradient.units = 'userSpaceOnUse';\\n\\n// `vignette` is the bounding\\n// rectangle to be filled with\\n// the radial gradient.\\nconst vignette = two.makeRectangle(cx, cy, two.width, two.height);\\nvignette.noStroke();\\nvignette.fill = gradient;\\n\\n// Two temporary vector\\n// variables are needed\\n// during the animation loop.\\n// First is to keep track\\n// of the mouse position.\\nconst mouse = new Two.Vector(cx, cy);\\n// Second is an empty value\\n// that is set every frame\\n// to calculate the distance\\n// between the center of the\\n// screen and the mouse.\\nconst delta = new Two.Vector();\\n\\n// Native HTML event handler\\n// to listen when the mouse\\n// or finger moves and store\\n// its position.\\ntwo.renderer.domElement.addEventListener('pointermove', pointermove, false);\\n\\n// Two.js event handlers\\n// to listen when the page\\n// resizes and the animation\\n// updates.\\ntwo.bind('resize', resize)\\n   .bind('update', update);\\n\\n// Set the `mouse` variable\\n// to the cursor's position.\\nfunction pointermove(e) {\\n  mouse.set(e.clientX, e.clientY);\\n}\\n\\n// Force both the rectangle\\n// and vignette to be the size\\n// of the canvas when the window\\n// changes sizes.\\nfunction resize() {\\n\\n  const cx = two.width / 2;\\n  const cy = two.height / 2;\\n\\n  let gradient = rectangle.fill;\\n  gradient.left.y = - cy;\\n  gradient.right.y = cy;\\n\\n  // Set the size of the rectangle\\n  // to the size of the canvas.\\n  rectangle.width = two.width;\\n  rectangle.height = two.height;\\n  vignette.width = two.width;\\n  vignette.height = two.height;\\n\\n  // Center both rectangles.\\n  rectangle.translation.set(cx, cy);\\n  vignette.translation.copy(rectangle.translation);\\n\\n  // Update the radius variable\\n  // to accurately reflect the size\\n  // during the `update` handler.\\n  radius = Math.max(two.width, two.height);\\n\\n}\\n\\n// Animate the scene\\nfunction update(frameCount) {\\n\\n  let gradient = vignette.fill;\\n  const cx = two.width / 2;\\n  const cy = two.height / 2;\\n\\n  const oscillation = 0.5 * (Math.sin(frameCount / 60) + 1);\\n  const r25 = radius * 0.25;\\n  const r75 = radius * 0.75;\\n\\n  // Make the radial gradient oscillate\\n  gradient.radius = r25 * oscillation + r75;\\n\\n  const destX = mouse.x - cx;\\n  const destY = mouse.y - cy;\\n\\n  delta.set(destX, destY)\\n       .sub(gradient.center)\\n       .multiplyScalar(0.125);  // Used to \\\"ease\\\" into dest\\n\\n  // Move the gradient's center\\n  // toward the mouse as a kind\\n  // of \\\"look at\\\" behavior.\\n  gradient.center.add(delta);\\n\\n  gradient = rectangle.fill;\\n  const o = gradient.stops[1].offset;\\n\\n  if (o &lt; 0.001) {\\n\\n    // Make the second stop clamp\\n    // to the bottom edge.\\n    gradient.stops[1].offset = 1;\\n\\n    // Select a new color from the palette\\n    colorIndex = (colorIndex + 1) % colors.length;\\n\\n    for (let i = 0; i &lt; gradient.stops.length; i++) {\\n      const stop = gradient.stops[i];\\n      const index = colorIndex + i;\\n      // Set the new colors\\n      stop.color = colors[index % colors.length];\\n    }\\n\\n  } else {\\n\\n    // Animate the second stop\\n    // towards the top of the screen\\n    gradient.stops[1].offset -= o * 0.125;\\n\\n  }\\n\\n}\\n\",\"html_pre_processor\":\"none\",\"css_pre_processor\":\"none\",\"js_pre_processor\":\"none\",\"html_classes\":\"\",\"css_starter\":\"neither\",\"js_library\":null,\"created_at\":\"2021-11-09T23:15:45.866Z\",\"updated_at\":\"2021-12-15T21:31:01.990Z\",\"title\":\"Linear &amp; Radial Gradients\",\"description\":\"A Two.js example that illustrates how to instantiate Two.LinearGradient, Two.RadialGradient, Two.Rectangle, and Two.Vector objects. This example also centers everything on the screen even when resized and captures the mouse position for light interactivity. It imports Two.js through ES6 imports.\",\"slug_hash\":\"yLoEEQJ\",\"head\":\"\",\"private\":false,\"has_animation\":true,\"team_id\":0,\"css_prefix\":\"neither\",\"template\":false,\"parent_id\":0,\"comments_count\":0,\"custom_screenshot_filename\":null,\"loves_count\":0,\"pick\":false,\"popularity_score\":0,\"views_count\":0,\"pick_visible_at\":\"2022-11-08T22:42:55.128Z\",\"pen_hash\":null}","__jwt":"eyJhbGciOiJIUzI1NiJ9.eyJjbGFpbXMiOnsidXNlcl9pZCI6MX0sImV4cCI6MTY3MDYxODM0NH0.j3zUKDerhtawP6-KsifyAyehZs4Z15dGGLv0xOXx1sY","__layoutType":"top","__pageType":"pen","__pen_export_url":"https://bphy80o6m7.execute-api.us-west-2.amazonaws.com","__profiled":{"base_url":"/jonobr1","hashid":"DpoQpm","id":171564,"name":"Jono Brandel","type":"user","username":"jonobr1"},"__processorsMap":{"autoprefixer":"autoprefixer-10","babel":"babel-7","coffeescript":"coffeescript-2","format-1":"format-1","flutter":"flutter-1","haml":"haml-4","less":"less-3","lint-1":"lint-1","livescript":"livescript-1","markdown":"markdown-11","postcss":"postcss-7","pug":"pug-2","sass":"sass-1","scss":"sass-1","sass-ruby-3":"sass-ruby-3","sass-ruby-compass-3":"sass-ruby-compass-3","slim":"slim-3","stylus":"stylus-0","typescript":"typescript-4","vue":"vue-2","vue3":"vue-3"},"__rtData":"{\"maxMembers\":0,\"roomID\":\"yLoEEQJ/live\",\"roomType\":\"live\",\"updatedAt\":1639603861,\"user\":{\"id\":\"VoDkNZ\",\"hashid\":\"VoDkNZ\",\"name\":\"Captain Anonymous\",\"username\":\"anon\",\"role\":\"editor\"}}","__eijs":"https://cpwebassets.codepen.io/assets/embed/ei.js","__favicon_mask_icon":"https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg","__favicon_shortcut_icon":"https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico","__path_to_iframe_console_runner":"https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-6bce046e7128ddf9391ccf7acbecbf7ce0cbd7b6defbeb2e217a867f51485d25.js","__path_to_iframe_refresh_css":"https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-550eae0ce567d3d9182e33cee4e187761056020161aa87e3ef74dc467972c555.js","__path_to_iframe_runtime_errors":"https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js","__path_to_processor_worker":"https://cpwebassets.codepen.io/assets/packs/router.js","__path_to_stop_execution_on_timeout":"https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js","__pen_normalize_css_url":"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css","__pen_prefix_free_url":"https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js","__pen_reset_css_url":"https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css","__theme_url_twilight":"https://cpwebassets.codepen.io/assets/editor/themes/twilight-b1245feb6421f4bced574a0dafb54ff98e3005abc90de9d5f167b307e5d0e9fd.css","__theme_url_solarized_dark":"https://cpwebassets.codepen.io/assets/editor/themes/solarized-dark-acb5c3410cd7ef38d0dd723f7653e9f384eb91b11208c8eccd5bba5be93aa53e.css","__theme_url_tomorrow_night":"https://cpwebassets.codepen.io/assets/editor/themes/tomorrow-night-ecdf791668b9f964a4e57223f227233758bd3ad364d023182c0337dc588d27c1.css","__theme_url_oceanic_dark":"https://cpwebassets.codepen.io/assets/editor/themes/oceanic-dark-48860eda47bbee90b10627159952894f3c044e205c0e2411d4d4d5d560c38fdf.css","__theme_url_panda":"https://cpwebassets.codepen.io/assets/editor/themes/panda-80cd55daa65b950b5e25998c2ed5f78e3c679044f6230becab58e9d239959635.css","__theme_url_duotone_dark":"https://cpwebassets.codepen.io/assets/editor/themes/duotone-dark-5fc7973f1dbb182a1ec01c7607ef910ad00b90faf2d856b3c0b699f1df9b353e.css","__theme_url_highcontrast_dark":"https://cpwebassets.codepen.io/assets/editor/themes/highcontrast-dark-2ba496a5b059127a304ebbdd9576efcd8a816e71bf9c5b2b0d080d93ecce5512.css","__theme_url_classic":"https://cpwebassets.codepen.io/assets/editor/themes/classic-fb6703ce37f4cc770d3d7b251e9ed78d9ab1ed34b92861924b50a0cefc7d0ea1.css","__theme_url_solarized_light":"https://cpwebassets.codepen.io/assets/editor/themes/solarized-light-d75834422f4de2f626ba35edda669a2e706a8f436da289bbf0804b9b161296c6.css","__theme_url_xq_light":"https://cpwebassets.codepen.io/assets/editor/themes/xq-light-35e92d4e5e96a7c2a1225f711877456d89ea72845c73aff2554c84f68d37c2e6.css","__theme_url_oceanic_light":"https://cpwebassets.codepen.io/assets/editor/themes/oceanic-light-68e6ebdf05251e895528f58295167b5b7f6b34b905e476d7459d18ccd539963d.css","__theme_url_mdn_like":"https://cpwebassets.codepen.io/assets/editor/themes/mdn-like-bf26fbece6c35926435fc33e9d4c7bea5fcb50850dad8640abf95922c1421529.css","__theme_url_duotone_light":"https://cpwebassets.codepen.io/assets/editor/themes/duotone-light-9d33315a52be879a07b29be91d58e31ebf240cd65884743caa3230d671e6db8d.css","__theme_url_highcontrast_light":"https://cpwebassets.codepen.io/assets/editor/themes/highcontrast-light-c6c729b886b329ce96267aefe312b0d943a0badcb40a855475f4f8c1ed60cdaa.css","__theme_url_scoped_twilight":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/twilight-d336e24536474769e7e2e1e62c92c3bbfd8d4774374cead0c309cb611d45e2b9.css","__theme_url_scoped_solarized_dark":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/solarized-dark-0280564518d3257573b8c48c62a94eef2f314d6e2083393707f96abeb46cdae6.css","__theme_url_scoped_tomorrow_night":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/tomorrow-night-35da5a953d999085d30a0040098c87c0f90b0d92bf5255b9725106e9a31020d2.css","__theme_url_scoped_oceanic_dark":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/oceanic-dark-c0dab133eb81f5ed01a0713a2b2d3191e9c50430be341dd974088fb3b84e6b50.css","__theme_url_scoped_panda":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/panda-fcdde8b55218c9f72e7700cbb94e018e4061a9080ad501ced4972d28a1d77a96.css","__theme_url_scoped_duotone_dark":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/duotone-dark-f8d8b7ede295266a7e06d4f346c02edf448ae34120b95552e52232c65198593a.css","__theme_url_scoped_highcontrast_dark":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/highcontrast-dark-6e49dfada037b05dfccaac805212bd774a47148f1710c902d6efd6391e324c56.css","__theme_url_scoped_classic":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/classic-5c16e2dcb646194bed281ecb7f5f45a920e747d3e2c307c1e7e6940bfa20b70d.css","__theme_url_scoped_solarized_light":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/solarized-light-72b8e381653addec367d2d1e7ec2579b79f583e7de6fdd14abd222eab5664abf.css","__theme_url_scoped_xq_light":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/xq-light-2413eb10285e24e255a50925bc6cd8bd4ca01732d41b98cc7da89e9fc5d21bbc.css","__theme_url_scoped_oceanic_light":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/oceanic-light-fd66158aaf20c2e79469aaadcb53d0e9e3c925cb2f8fc92cdc77200867d30d22.css","__theme_url_scoped_mdn_like":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/mdn-like-4e942c5397cb32f215554a461b4d7c29cfc86e96a33e5ddd91bf3c9ab1c7af19.css","__theme_url_scoped_duotone_light":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/duotone-light-e09e52ccf679c8025cbdb0e624f5186b2d3a1c208a57047ad5cde99d5a6a8e49.css","__theme_url_scoped_highcontrast_light":"https://cpwebassets.codepen.io/assets/editor/themes/scoped/highcontrast-light-9285d47c36ece3c3132bfe87db19f0b30b5179cf400dc5f145113c316f34adc4.css"}</textarea>
<script src="https://cpwebassets.codepen.io/assets/common/browser_support-2c1a3d31dbc6b5746fb7dacdbc81dd613906db219f13147c66864a6c3448246c.js"></script>
<script src="https://cpwebassets.codepen.io/assets/common/everypage-2e5eb3b6864f69eebe56d6a6865391d564ae6ea1d098dfc9a05c06299edc21ec.js"></script>
<script src="https://cpwebassets.codepen.io/assets/common/analytics_and_notifications-dabea89133f3a919e973a927aebbc27318967ac159bc8c7b657d656880822e14.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-6a4f89cf0043e5f1c598.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/1-6b7b74938307415c5986.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/referrer-tracking-08d1e02ddbab412f199c.js"></script><div id="react-popups"></div>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-6a4f89cf0043e5f1c598.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/1-6b7b74938307415c5986.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/everypage-01dea1624e3c95019886.js"></script><div id="react-popups"></div><div id="react-messages"><div style="position: fixed; z-index: 9999;"></div></div><div></div>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-6a4f89cf0043e5f1c598.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/1-6b7b74938307415c5986.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/firebaseConnectLibs-3eaa10479e81786078db.js"></script><div id="react-popups"></div>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-6a4f89cf0043e5f1c598.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/1-6b7b74938307415c5986.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/processorRouter-9e3d670351c2b2b22c8b.js"></script><div id="react-popups"></div>
<script src="https://static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/global/commonLibs-18d595d95e5894ceae5661c7e40deeca7df254309b42f89edce76949b15a0f31.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/global/codemirror-6d6ba1f6339a77e050b2e97848352d1b8d1b97895d23f086f644ecb200abfd59.js"></script>
<script src="https://cpwebassets.codepen.io/assets/libs/emmet-codemirror-plugin-f3955bea0403e8137caacd73a1e42bb551794f7ce15ae59103c64a2736b2757c.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/pen/index-ccc860a5599d89676df8ebc9745aefb83db9cc3ab09ff9437d76147b65aa3676.js"></script>


</body>
