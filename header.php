<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>

<div class="forge-nav">

    <div class="nav-logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="49.001" height="49.159" viewBox="0 0 49.001 49.159">
        <g id="CBX_LOGO" transform="translate(0 0)">
            <path id="Path_11" data-name="Path 11" d="M7765.882-1248.7a5.458,5.458,0,0,1,5.44-5.457,5.459,5.459,0,0,1,4.45,2.315l-1.812,1.488a3.1,3.1,0,0,0-2.637-1.488,3.067,3.067,0,0,0-3.027,3.142,3.067,3.067,0,0,0,3.027,3.142,3.1,3.1,0,0,0,2.637-1.488l1.813,1.488a5.459,5.459,0,0,1-4.45,2.315,5.457,5.457,0,0,1-5.44-5.457" transform="translate(-7757.157 1273.282)" fill="#fff"/>
            <path id="Path_12" data-name="Path 12" d="M7794.632-1245.4a1.038,1.038,0,0,0,1.087-1.031,1.05,1.05,0,0,0-1.087-1.046h-2.783v2.078Zm-.719-4.068A1.037,1.037,0,0,0,7795-1250.5a1.049,1.049,0,0,0-1.086-1.047h-2.063v2.078Zm-4.415-4.229h4.678a3.115,3.115,0,0,1,3.1,3.11,2.48,2.48,0,0,1-.734,1.8,2.693,2.693,0,0,1,1.469,2.446,3.118,3.118,0,0,1-3.158,3.11H7789.5Z" transform="translate(-7769.274 1273.041)" fill="#fff"/>
            <path id="Path_13" data-name="Path 13" d="M7810.894-1248.476l-3.07-5.217h2.718l2.012,3.478,2.013-3.478h2.717l-3.07,5.217,3.29,5.247h-2.731l-2.218-3.6-2.218,3.6H7807.6Z" transform="translate(-7778.562 1273.041)" fill="#fff"/>
            <path id="Path_14" data-name="Path 14" d="M7772.462-1291.324a22.158,22.158,0,0,0-22.1,22.168,22.157,22.157,0,0,0,22.1,22.167,22.157,22.157,0,0,0,22.1-22.167,22.158,22.158,0,0,0-22.1-22.168m0,46.747a24.569,24.569,0,0,1-24.5-24.579,24.569,24.569,0,0,1,24.5-24.58,24.568,24.568,0,0,1,24.5,24.58,24.568,24.568,0,0,1-24.5,24.579" transform="translate(-7747.961 1293.736)" fill="#fff"/>
        </g>
    </svg>


    </div>

<div class="ham">
    <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />
    
    <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
      
    </ul>
  </div>
</div>
