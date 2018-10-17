<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Welcome!</title>
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 32px; text-align: center}
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 0em auto; max-width: 800px; width: 95%; }
        #container { padding: 1em; }
        #welcome, { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #github {padding-top: 1em; padding-bottom: 1em; }
        #deployment { margin: 0 auto; width: 500px; }
        #comment { font-size: 14px; text-align: center; color: #777777; background: #FEFFEA; padding: 10px; }
        #comment p { margin-bottom: 0; }
        #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #status a, #next a { display: block; margin-top: 50px; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="container">
        <div id="welcome">
            <h1>Symfony <?php $version = null; echo $version; ?> <svg xmlns="http://www.w3.org/2000/svg" width="79px" height="79px" viewBox="0 -20 100 100" preserveAspectRatio="xMidYMid" class="lds-heart">
                    <g transform="translate(50 50)">
                        <path ng-attr-fill="{{config.color}}" d="M40.7-34.3c-9.8-9.8-25.6-9.8-35.4,0L0-29l-5.3-5.3c-9.8-9.8-25.6-9.8-35.4,0l0,0c-9.8,9.8-9.8,25.6,0,35.4l5.3,5.3L-23,18.7l23,23l23-23L35.4,6.3L40.7,1C50.4-8.8,50.4-24.6,40.7-34.3z" fill="#fc636b" transform="scale(0.777549 0.777549)">
                            <animateTransform attributeName="transform" type="scale" calcMode="spline" values="0.68;0.8;0.6000000000000001;0.7200000000000001;0.68;0.6400000000000001" keyTimes="0;0.05;0.39;0.45;0.6;1" dur="1s" keySplines="0.215 0.61,0.355 1;0.215 0.61,0.355 1;0.215 0.61,0.355 1;0.215 0.61,0.355 1;0.215 0.61,0.355 1" begin="0s" repeatCount="indefinite"/>
                        </path>
                    </g>
                </svg> Docker & Kubernetes</h1>
        </div>
        <hr />
        <div id="github">
            <p>
                <svg aria-labelledby="simpleicons-github-icon" id="icon-book" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-github-icon">GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>

                This demo is using <strong>Helm</strong>, <strong>Travis</strong> and <strong>Kubernetes</strong> cluster.<br>
                Check <code><a href="https://github.com/tulik/symfony-4-docker-runtime-env">Docker for Symfony</a></code> repository for more details.
            </p>
        </div>
        <hr/>

        <div id="deployment">
            <img src="images/helm.png" height=150px width=150px/>
            <img src="images/travis.png" height=150px width=150px/>
            <img src="images/kubernetes.png" height=150px width=150px/>
        </div>
    </div>

    <div id="comment">
        <p>
            Return to <a href="https://github.com/tulik/symfony-4-docker-runtime-env">Docker Symfony Environment</a>
        </p>
    </div>
</div>
</body>
</html>
