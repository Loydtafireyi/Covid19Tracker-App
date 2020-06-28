\
<!DOCTYPE html>
<html class="no-js" lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>Zimbabwe Covid19 API - Documentation</title>
        <meta name="description" content="Zimbabwe upto date Covid19 AP1">
        <meta name="keywords" content="Zimbabwe upto date Covid19 AP1, Corona virus API, Zimbabwe API, Zimbabwe Covid19 api, Zimbabwe Funds tracker API, Zimbabwe Covid 19 API, covid 19 API, Corona API, Corona virus api, Zimbabwe Covid19 api by province">
        <meta name="author" content="Loyd Tafireyi">

        <meta http-equiv="cleartype" content="on">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/hightlightjs-dark.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500|Source+Code+Pro:300" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('docs/css/style.css') }}" media="all">
        <script>hljs.initHighlightingOnLoad();</script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162750660-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-162750660-2');
        </script>

    </head>

    <body>
        <div class="left-menu">
            <div class="content-logo">
                <span>Zimbabwe Covid19 API</span>
            </div>
            <div class="content-menu">
                <ul>
                    <li class="scroll-to-link active" data-target="get-started">
                        <a>GET STARTED</a>
                    </li>
                    <li class="scroll-to-link" data-target="get-characters">
                        <a>CONSUME API</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-page">
            <div class="content-code"></div>
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-started">
                    <h1 id="get-started">Get started</h1>
                    <pre>API Endpoint https://covid19zim.online/api/provinces</pre>
                    <p>
                        Zimbabwe Covid19 API provides programmatic access to Zimbabwe Corona virus stats. Retrieve a character, without providing an oauth connection, retrieve total covid tests, confirmed cases, donations etc. 
                    </p>
                    <p>
                        To use this API, you don't need an <strong>API key</strong>. Perform get requests easily. <a href="{{ env('WHATSAPP') }}" target="_blank">Message us</a> for support. 
                    </p>
                </div>
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 id="get-characters">Peform Get Requests</h2>
                    <pre><code class="bash">
# Examples

-X GET https://covid19zim.online/api/infections

-X GET https://covid19zim.online/api/tests

-X GET https://covid19zim.online/api/deaths

-X GET https://covid19zim.online/api/recovered

-X GET https://covid19zim.online/api/provinces

-X GET https://covid19zim.online/api/donors

-X GET https://covid19zim.online/api/spent

-X GET https://covid19zim.online/api/isolation-centres

                </code></pre>
                    <p>
                        This API only support get requests - examples<br>
                        <code class="higlighted">GET https://covid19zim.online/api</code><br><br>
                        TOOLING - Insomnia/Postman
                    </p>
                    <br>
                    <pre><code class="json">
Result example :

[
{
"region_name": "Mashonaland Central",
"region_code": "ZWE524",
"infected": 9,
"deaths": 1,
"recoveries": 1
},
{
"region_name": "Harare",
"region_code": "ZWE525",
"infected": 172,
"deaths": 3,
"recoveries": 1
},
{
"region_name": "Matabeleland North",
"region_code": "ZWE526",
"infected": 11,
"deaths": 1,
"recoveries": 3
}
];

                </code></pre>
                   
                    <h4>QUERY PARAMETERS</h4>
                    <table>
                        <thead>
                            <tr>
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>infections</td>
                                <td>GET</td>
                                <td>Returns all infections by Province</td>
                            </tr>
                            <tr>
                                <td>tests</td>
                                <td>GET</td>
                                <td>Returns all deaths by Province</td>
                            </tr>
                            <tr>
                                <td>recovered</td>
                                <td>GET</td>
                                <td>
                                    Returns all recovered by Province
                                </td>
                            </tr>
                            <tr>
                                <td>provinces</td>
                                <td>GET</td>
                                <td>
                                    Returns all Provinces with infections, deaths, recovered and tests
                                </td>
                            </tr>
                            <tr>
                                <td>donors</td>
                                <td>GET</td>
                                <td>
                                    Returns all the covid related donors, amount pledged, amount spent and so on.
                                </td>
                            </tr>
                            <tr>
                                <td>isolation centres</td>
                                <td>GET</td>
                                <td>
                                    Returns all the isolation/quarantine centres, tollfree, general numbers and province
                                </td>
                            </tr>
                            <tr>
                                <td>amount spent</td>
                                <td>GET</td>
                                <td>
                                    Returns all the amount spent towards covid-19 (products, quantinty, focus areas and amount spent)
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>                    
                </div>                    
                </div>
                </div>
            </div>
            <div class="content-code"></div>
        </div>
        <!-- Github Corner Ribbon - to remove (Ribbon created with : http://tholman.com/github-corners/ )-->
        <a href="https://github.com/Loydtafireyi" class="github-corner" aria-label="View source on Github" title="View source on Github"><svg width="80" height="80" viewBox="0 0 250 250" style="z-index:99999; fill:#70B7FD; color:#fff; position: fixed; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
        <!-- END Github Corner Ribbon - to remove -->
        <script src="{{ asset('docs/js/libs/jquery.js') }}"></script>
        <script src="{{ asset('docs/js/script.js') }}"></script>
    </body>
</html>