<?php require_once("header.php");?>
<head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="generator" content="Gatsby 4.22.0"><meta data-react-helmet="true" property="og:locale" content="en_US"><meta data-react-helmet="true" name="twitter:card" content="summary_large_image"><meta data-react-helmet="true" name="twitter:site" content="@ProcessingOrg"><meta data-react-helmet="true" name="twitter:creator" content="@ProcessingOrg"><meta data-react-helmet="true" name="twitter:title" content="Brightness / Examples"><meta data-react-helmet="true" name="twitter:description" content="Brightness is the relative lightness or darkness of a color. Move the cursor vertically over each bar to alter its brightness."><meta data-react-helmet="true" name="twitter:image" content="https://processing.org//static/77a4d1a375191f6585553b5cc1bba549/47126/Brightness.png"><meta data-react-helmet="true" property="og:url" content="https://processing.org//examples/brightness.html"><meta data-react-helmet="true" property="og:site_name" content="Processing"><meta data-react-helmet="true" property="og:type" content="website"><meta data-react-helmet="true" property="og:title" content="Brightness / Examples"><meta data-react-helmet="true" property="og:description" content="Brightness is the relative lightness or darkness of a color. Move the cursor vertically over each bar to alter its brightness."><meta data-react-helmet="true" property="og:image" content="https://processing.org//static/77a4d1a375191f6585553b5cc1bba549/47126/Brightness.png"><meta name="theme-color" content="#663399"><link data-identity="gatsby-global-css" href="/styles.aeeaeed94fde0669d9b2.css" rel="stylesheet" type="text/css"><title>Brightness / Examples / Processing.org</title><link data-react-helmet="true" rel="alternate" hreflang="x-default" href="https://processing.org"><link data-react-helmet="true" rel="alternate" hreflang="en-US" href="https://processing.org/examples/brightness.html"><script data-react-helmet="true" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.min.js" crossorigin="anonymous"></script><script data-react-helmet="true">/**
 * Brightness
 * by Rusty Robison.
 *
 * Brightness is the relative lightness or darkness of a color.
 * Move the cursor vertically over each bar to alter its brightness.
 */

function runLiveSketch(s) {
  var barWidth = 20;
  var lastBar = -1;

  s.setup = () => {
    s.createCanvas(640, 360);
    s.colorMode(s.HSB, s.width, 100, s.width);
    s.noStroke();
    s.background(0);
  };

  s.draw = () => {
    var whichBar = s.mouseX / barWidth;
    if (whichBar != lastBar) {
      var barX = whichBar * barWidth;
      s.fill(barX, 100, s.mouseY);
      s.rect(barX, 0, barWidth, s.height);
      lastBar = whichBar;
    }
  };
}
</script><style>.gatsby-image-wrapper{position:relative;overflow:hidden}.gatsby-image-wrapper picture.object-fit-polyfill{position:static!important}.gatsby-image-wrapper img{bottom:0;height:100%;left:0;margin:0;max-width:none;padding:0;position:absolute;right:0;top:0;width:100%;object-fit:cover}.gatsby-image-wrapper [data-main-image]{opacity:0;transform:translateZ(0);transition:opacity .25s linear;will-change:opacity}.gatsby-image-wrapper-constrained{display:inline-block;vertical-align:top}</style><noscript><style>.gatsby-image-wrapper noscript [data-main-image]{opacity:1!important}.gatsby-image-wrapper [data-placeholder-image]{opacity:0!important}</style></noscript><script type="module">const e="undefined"!=typeof HTMLImageElement&&"loading"in HTMLImageElement.prototype;e&&document.body.addEventListener("load",(function(e){const t=e.target;if(void 0===t.dataset.mainImage)return;if(void 0===t.dataset.gatsbyImageSsr)return;let a=null,n=t;for(;null===a&&n;)void 0!==n.parentNode.dataset.gatsbyImageWrapper&&(a=n.parentNode),n=n.parentNode;const o=a.querySelector("[data-placeholder-image]"),r=new Image;r.src=t.currentSrc,r.decode().catch((()=>{})).then((()=>{t.style.opacity=1,o&&(o.style.opacity=0,o.style.transition="opacity 500ms linear")}))}),!0);</script><link rel="icon" href="/favicon-32x32.png?v=0f0dee6220d6f6497709adb2b39b429a" type="image/png"><link rel="icon" href="/favicon.svg?v=0f0dee6220d6f6497709adb2b39b429a" type="image/svg+xml"><link rel="manifest" href="/manifest.webmanifest" crossorigin="anonymous"><link rel="apple-touch-icon" sizes="48x48" href="/icons/icon-48x48.png?v=0f0dee6220d6f6497709adb2b39b429a"><link rel="apple-touch-icon" sizes="72x72" href="/icons/icon-72x72.png?v=0f0dee6220d6f6497709adb2b39b429a"><link rel="apple-touch-icon" sizes="96x96" href="/icons/icon-96x96.png?v=0f0dee6220d6f6497709adb2b39b429a"><link rel="apple-touch-icon" sizes="144x144" href="/icons/icon-144x144.png?v=0f0dee6220d6f6497709adb2b39b429a"><link rel="apple-touch-icon" sizes="192x192" href="/icons/icon-192x192.png?v=0f0dee6220d6f6497709adb2b39b429a"><link rel="apple-touch-icon" sizes="256x256" href="/icons/icon-256x256.png?v=0f0dee6220d6f6497709adb2b39b429a"><link rel="apple-touch-icon" sizes="384x384" href="/icons/icon-384x384.png?v=0f0dee6220d6f6497709adb2b39b429a"><link rel="apple-touch-icon" sizes="512x512" href="/icons/icon-512x512.png?v=0f0dee6220d6f6497709adb2b39b429a"></head>
<body>
<div id="gatsby-announcer" style="position:absolute;top:0;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0" aria-live="assertive" aria-atomic="true"></div>
</body>
