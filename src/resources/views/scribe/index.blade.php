<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Movie Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>


    <script src="{{ asset("/vendor/scribe/js/theme-default-4.23.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-register">
                                <a href="#authentication-POSTapi-register">Register a new user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-login">
                                <a href="#authentication-POSTapi-login">Login a user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-logout">
                                <a href="#authentication-POSTapi-logout">Logout a user</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-author" class="tocify-header">
                <li class="tocify-item level-1" data-unique="author">
                    <a href="#author">Author</a>
                </li>
                                    <ul id="tocify-subheader-author" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="author-GETapi-authors">
                                <a href="#author-GETapi-authors">Get all authors</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-comment" class="tocify-header">
                <li class="tocify-item level-1" data-unique="comment">
                    <a href="#comment">Comment</a>
                </li>
                                    <ul id="tocify-subheader-comment" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="comment-POSTapi-movies--movie_id--comments">
                                <a href="#comment-POSTapi-movies--movie_id--comments">Store a new comment for a movie.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-genre" class="tocify-header">
                <li class="tocify-item level-1" data-unique="genre">
                    <a href="#genre">Genre</a>
                </li>
                                    <ul id="tocify-subheader-genre" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="genre-GETapi-genres">
                                <a href="#genre-GETapi-genres">Get all genres</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-movies" class="tocify-header">
                <li class="tocify-item level-1" data-unique="movies">
                    <a href="#movies">Movies</a>
                </li>
                                    <ul id="tocify-subheader-movies" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="movies-GETapi-movies">
                                <a href="#movies-GETapi-movies">Display the list all movies.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movies-GETapi-movies--id-">
                                <a href="#movies-GETapi-movies--id-">Display the movie detail.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movies-POSTapi-movies">
                                <a href="#movies-POSTapi-movies">Store a newly created movie into db, save cover_img into cover image folder and create PDF by Queue Job.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movies-DELETEapi-movies--id-">
                                <a href="#movies-DELETEapi-movies--id-">Remove the movie from db, delete cover_img from cover image folder and delete PDF by Queue Job.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movies-POSTapi-movies--movie_id-">
                                <a href="#movies-POSTapi-movies--movie_id-">Update the movie in db, delete and new create cover_img into cover image folder and update PDF by Queue Job.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-tag" class="tocify-header">
                <li class="tocify-item level-1" data-unique="tag">
                    <a href="#tag">Tag</a>
                </li>
                                    <ul id="tocify-subheader-tag" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="tag-GETapi-tags">
                                <a href="#tag-GETapi-tags">Get all tags</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: September 11, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8080</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="authentication">Authentication</h1>

    <p>APIs for managing authentication.</p>

                                <h2 id="authentication-POSTapi-register">Register a new user</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8080/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"atque\",
    \"email\": \"cfritsch@example.net\",
    \"password\": \"|y[)Gg\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "atque",
    "email": "cfritsch@example.net",
    "password": "|y[)Gg"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDIwZmI3MzFjZTMwNzA3MzgzZmFhYzU2NzljZTA0YjQ0YTIxMWU0ZWJiMzVkZmIxYzA1OTFhN2I5MWQzNzNmNDgxNjlhYmUzYjk3Njg1YjEiLCJpYXQiOjE2OTQzNDQ4MjcuNjA1ODcsIm5iZiI6MTY5NDM0NDgyNy42MDU4NzUsImV4cCI6MTcyNTk2NzIyNy41OTgwMDksInN1YiI6IjQiLCJzY29wZXMiOltdfQ.SA-Ys8yuuBeANz-qAC0sWQNxQoFWlVjJ1rDTr8XwSXUQJFh_fFOHlBifwDUY1DYv80oQ-Gko3Vb-fBDdWECmff3ValnusUkIS1d-GkKfViywWA515NHWlqvpazytZf1ziUiT3IvjOTEAl0CYD0IEGHS_vlRgpRLyao7Fa4niqBxp28etI08rTh8Uo-9c-5PL0kp94hj2ifbz9gF8RASQtRnbFWKAOJ_ncHoc8znYk8-oEbBsWtK0sqSdj7uTOSdS-fbKwVvihe4bIzMQHAr0JQ6R2-6_CGK4diR1BK28Ul2bkur6TvuCkF2xwGlB9OQ09ioXZS9XQtduVymwaugsYMSNBZUwoifjzBEepiOuxyAy2n_NWR4XERnjo_Amhwnm_mpWzhXUC0vDbDegCPthankB0By8h9JlEqUt3PimiEYW5fDP6jyDLqD_gOtiTGTlAtTBXLxt9MStMl37Xk-PlODaOMqvPqrk7gEspr2JnRBKb8YDIb7LN7fuIRFBf7Rj7OO3eW9TPwheJS5D6NtZvW8gGzH7qDeaEsgDFKgoFYqahqhqYbojkUmTncx_ywXWMDTWord_V8GyzEa8zwv0KR5a92MGwwisOjg-9z6qHqhoJxh4yM5EYijyVaYcYSkENHz0nJ3L7HhKDXFovZVtmNIgmaLhSvXU4qIEEyX8Vvs&quot;,
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="atque"
               data-component="body">
    <br>
<p>The name of the user. Example: <code>atque</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="cfritsch@example.net"
               data-component="body">
    <br>
<p>The email of the user. Example: <code>cfritsch@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="|y[)Gg"
               data-component="body">
    <br>
<p>The password of the user. Example: <code>|y[)Gg</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-login">Login a user</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8080/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"noemie58@example.com\",
    \"password\": \"2jrON\\\"?n.3X\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "noemie58@example.com",
    "password": "2jrON\"?n.3X"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiM2JhNDJmM2JlMzQ2MmE3NGFjYWUyMzkwYjIxNzRjNzIwYThmNjRlM2NmNGE5ZWM3ODhkYTRlYTYyZWM2ZDkzZTQ1MzBjNjA5YWM1NWYwZGMiLCJpYXQiOjE2OTQzNTU5MjYuMTA5MjY1LCJuYmYiOjE2OTQzNTU5MjYuMTA5MjY5LCJleHAiOjE3MjU5NzgzMjYuMTAxMTczLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.LoXcohMEvQCS40IJ9NjWezb9dHKNCQ6I5I_zZ4QRd74ul1aYZFz3lJ01XnSx5zAwhwyg1W4YTetni3SmyqcxIs56A5hJnwcah7x3R0qL-9LYGSeQ_h4y2TnL4zcwNeyAcyarB-pRaTXCR5bwliWETfTB_VYM5EFXlYpJPGUGwv5K6L-x1VDSdvPp6a-wzO4FZOzUaSDCuxacgzfQNxZn35QeGpUnpGGpIbYs1Y9l0acHszB1dgm9G8IieqB6zcHKTVC7Yf9qfaNcCdIin1RrcAjLofgPM0GLrVPpSNRs6IF943FTZMezVzLC8iq55fgrvYfGFg7542zhiY2DH5zGUgttVwbpOJnZNPkqn42MPT0G3F7HGMi1pNcQ-agc9s3Fm3cdhIw6H-U2DZZjDXXOohhf4BlvFv1l-DLKoA3DzcQlV912LiILZVsVWz41sCOXaAG3W-hlkCxtS9DdI26P7TzaGzYfENNeo4yqSKjKIJF_tnDetnZrZJfgNHXkY_AHEO3-hhxJY1DXBFckIZWAnXZd_ws7XBSW5sBbNxOc0RhoSFM6F3t4-TUQ8qIRTRBOkJIw0XvhHCvHkQqOoYRPePeLWzzar-5qpXJZbKfymzB9vmiIKZ9ONgaDkK6qCpc18hRYCpMUg4kRS6Egs1y0lcAk7jU9mD6pUjpTKI9w-nk&quot;,
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Login Successful&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="noemie58@example.com"
               data-component="body">
    <br>
<p>The email of the user. Example: <code>noemie58@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="2jrON"?n.3X"
               data-component="body">
    <br>
<p>The password of the user. Example: <code>2jrON"?n.3X</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-logout">Logout a user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8080/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Logout Successful&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="author">Author</h1>

    <p>APIs for managing authors.</p>

                                <h2 id="author-GETapi-authors">Get all authors</h2>

<p>
</p>



<span id="example-requests-GETapi-authors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8080/api/authors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/authors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-authors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Greta Gerwig&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Marry&quot;
        }
    ],
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-authors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-authors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-authors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-authors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-authors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-authors" data-method="GET"
      data-path="api/authors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-authors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/authors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="comment">Comment</h1>

    <p>APIs for managing comments.</p>

                                <h2 id="comment-POSTapi-movies--movie_id--comments">Store a new comment for a movie.</h2>

<p>
</p>



<span id="example-requests-POSTapi-movies--movie_id--comments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8080/api/movies/11/comments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"body\": \"nostrum\",
    \"commenter_email\": \"zoconnell@example.net\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/movies/11/comments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "body": "nostrum",
    "commenter_email": "zoconnell@example.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies--movie_id--comments">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;Saved&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-movies--movie_id--comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies--movie_id--comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies--movie_id--comments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-movies--movie_id--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies--movie_id--comments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-movies--movie_id--comments" data-method="POST"
      data-path="api/movies/{movie_id}/comments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies--movie_id--comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies/{movie_id}/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-movies--movie_id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-movies--movie_id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="POSTapi-movies--movie_id--comments"
               value="11"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>11</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="body"                data-endpoint="POSTapi-movies--movie_id--comments"
               value="nostrum"
               data-component="body">
    <br>
<p>The body of the comment. Example: <code>nostrum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commenter_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commenter_email"                data-endpoint="POSTapi-movies--movie_id--comments"
               value="zoconnell@example.net"
               data-component="body">
    <br>
<p>email The email of the commenter. Example: <code>zoconnell@example.net</code></p>
        </div>
        </form>

                <h1 id="genre">Genre</h1>

    <p>APIs for managing genres.</p>

                                <h2 id="genre-GETapi-genres">Get all genres</h2>

<p>
</p>



<span id="example-requests-GETapi-genres">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8080/api/genres" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/genres"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-genres">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Action&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Superhero&quot;
        }
    ],
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-genres" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-genres"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-genres"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-genres" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-genres">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-genres" data-method="GET"
      data-path="api/genres"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-genres', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/genres</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-genres"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-genres"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="movies">Movies</h1>

    <p>APIs for managing movies.</p>

                                <h2 id="movies-GETapi-movies">Display the list all movies.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8080/api/movies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/movies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-movies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 27,
            &quot;title&quot;: &quot;Aladin Gone&quot;,
            &quot;summary&quot;: &quot;This is a aladin movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/iRbAk9ali0zmeAkO5wlm3qr97yv9r4ytL5cROGG4.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;/storage/pdfs/aladin-gone_20230910112707.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Action&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Greta Gerwig&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Ghost Story&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 26,
            &quot;title&quot;: &quot;Aladin Return&quot;,
            &quot;summary&quot;: &quot;This is a aladin movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/pG7Pk1pNKlVH68ryIl1i9iVB2iBPCWsEEuddchHo.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: null,
            &quot;genre&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Action&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Greta Gerwig&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Ghost Story&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 25,
            &quot;title&quot;: &quot;Aladin&quot;,
            &quot;summary&quot;: &quot;This is a aladin movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/Cwkp3fIVBnY5cHbeAgDkwnElMggvFLL8JJ0GcMK3.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: null,
            &quot;genre&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Action&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Greta Gerwig&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Ghost Story&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;The NUN&quot;,
            &quot;summary&quot;: &quot;This is horror movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 5,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Horror&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;John&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Ghost Story&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;The Flash&quot;,
            &quot;summary&quot;: &quot;Time travel movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;Meg 2: The Trench&quot;,
            &quot;summary&quot;: &quot;Meg 2: The Trench movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Comedy&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;John&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;Blue Beetle&quot;,
            &quot;summary&quot;: &quot;This is Blue Beetle movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Thriller&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;No Hard Feelings&quot;,
            &quot;summary&quot;: &quot;This is No Hard Feelings movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Drama&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Marry&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Cartoon&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;Spider-Man: Across the Spider-Verse&quot;,
            &quot;summary&quot;: &quot;Spider-Man: Across the Spider-Verse movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Thriller&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 10,
            &quot;title&quot;: &quot;Mission: Impossible - Dead Reckoning Part One&quot;,
            &quot;summary&quot;: &quot;This is Mission: Impossible - Dead Reckoning Part One movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Action&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Greta Gerwig&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Thriller&quot;
                }
            ]
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;https://movies.test/api/movies?page=1&quot;,
        &quot;last&quot;: &quot;https://movies.test/api/movies?page=3&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;https://movies.test/api/movies?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 3,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;https://movies.test/api/movies?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;https://movies.test/api/movies?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;https://movies.test/api/movies?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;https://movies.test/api/movies?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;https://movies.test/api/movies&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 10,
        &quot;total&quot;: 27
    },
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-movies" data-method="GET"
      data-path="api/movies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="movies-GETapi-movies--id-">Display the movie detail.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8080/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/movies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;Saved&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 2,
        &quot;title&quot;: &quot;Batman Begins&quot;,
        &quot;summary&quot;: &quot;This is a superhero movie&quot;,
        &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
        &quot;imdb_rating&quot;: 5,
        &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
        &quot;genre&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Superhero&quot;
        },
        &quot;author&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Stan Lee&quot;
        },
        &quot;tags&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Movie&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Thriller&quot;
            }
        ],
        &quot;comments&quot;: []
    },
    &quot;related_movies&quot;: [
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;The Dark Night&quot;,
            &quot;summary&quot;: &quot;This is a superhero movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 5,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Thriller&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;The NUN&quot;,
            &quot;summary&quot;: &quot;This is horror movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 5,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Horror&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;John&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Ghost Story&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Barbie&quot;,
            &quot;summary&quot;: &quot;Barbie suffers a crisis that leads her to question her world and her existence.&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 4,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Fantasy&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Marry&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Movie&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Cartoon&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;The Flash&quot;,
            &quot;summary&quot;: &quot;Time travel movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;Blue Beetle&quot;,
            &quot;summary&quot;: &quot;This is Blue Beetle movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Thriller&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;Spider-Man: Across the Spider-Verse&quot;,
            &quot;summary&quot;: &quot;Spider-Man: Across the Spider-Verse movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Thriller&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 12,
            &quot;title&quot;: &quot;Transformers: Rise of the Beasts&quot;,
            &quot;summary&quot;: &quot;Transformers: Rise of the Beasts movie&quot;,
            &quot;cover_image&quot;: &quot;https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png&quot;,
            &quot;imdb_rating&quot;: 3,
            &quot;pdf_link&quot;: &quot;https://movies.test/pdf_links/1.pdf&quot;,
            &quot;genre&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Superhero&quot;
            },
            &quot;author&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Stan Lee&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Series&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Thriller&quot;
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-movies--id-" data-method="GET"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-movies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="movies-POSTapi-movies">Store a newly created movie into db, save cover_img into cover image folder and create PDF by Queue Job.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8080/api/movies" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=et"\
    --form "summary=voluptatem"\
    --form "genre_id=9"\
    --form "author_id=9"\
    --form "tag_ids[]=7"\
    --form "imdb_rating=8"\
    --form "cover_image=@/tmp/phpZTEySY" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/movies"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'et');
body.append('summary', 'voluptatem');
body.append('genre_id', '9');
body.append('author_id', '9');
body.append('tag_ids[]', '7');
body.append('imdb_rating', '8');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;Saved&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-movies" data-method="POST"
      data-path="api/movies"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-movies"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-movies"
               value="et"
               data-component="body">
    <br>
<p>The title of the movie. Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>summary</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="summary"                data-endpoint="POSTapi-movies"
               value="voluptatem"
               data-component="body">
    <br>
<p>The summary of the movie. Example: <code>voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cover_image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="cover_image"                data-endpoint="POSTapi-movies"
               value=""
               data-component="body">
    <br>
<p>The cover_image of the movie. Example: <code>/tmp/phpZTEySY</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genre_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="genre_id"                data-endpoint="POSTapi-movies"
               value="9"
               data-component="body">
    <br>
<p>The genre_id of the movie. Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="POSTapi-movies"
               value="9"
               data-component="body">
    <br>
<p>The author_id of the movie. Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tag_ids[0]"                data-endpoint="POSTapi-movies"
               data-component="body">
        <input type="number" style="display: none"
               name="tag_ids[1]"                data-endpoint="POSTapi-movies"
               data-component="body">
    <br>
<p>The tag_ids of the movie.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imdb_rating</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="imdb_rating"                data-endpoint="POSTapi-movies"
               value="8"
               data-component="body">
    <br>
<p>The imdb_rating of the movie. Example: <code>8</code></p>
        </div>
        </form>

                    <h2 id="movies-DELETEapi-movies--id-">Remove the movie from db, delete cover_img from cover image folder and delete PDF by Queue Job.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8080/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/movies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-movies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;Deleted&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-movies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-movies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-movies--id-" data-method="DELETE"
      data-path="api/movies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-movies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="DELETEapi-movies--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>3</code></p>
            </div>
                    </form>

                    <h2 id="movies-POSTapi-movies--movie_id-">Update the movie in db, delete and new create cover_img into cover image folder and update PDF by Queue Job.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-movies--movie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8080/api/movies/18" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=eligendi"\
    --form "summary=qui"\
    --form "genre_id=2"\
    --form "author_id=4"\
    --form "tag_ids[]=6"\
    --form "imdb_rating=4"\
    --form "cover_image=@/tmp/phpav5FCZ" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/movies/18"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'eligendi');
body.append('summary', 'qui');
body.append('genre_id', '2');
body.append('author_id', '4');
body.append('tag_ids[]', '6');
body.append('imdb_rating', '4');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies--movie_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;Saved&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-movies--movie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies--movie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies--movie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-movies--movie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies--movie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-movies--movie_id-" data-method="POST"
      data-path="api/movies/{movie_id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies--movie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies/{movie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-movies--movie_id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-movies--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="POSTapi-movies--movie_id-"
               value="18"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>18</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-movies--movie_id-"
               value="eligendi"
               data-component="body">
    <br>
<p>The title of the movie. Example: <code>eligendi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>summary</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="summary"                data-endpoint="POSTapi-movies--movie_id-"
               value="qui"
               data-component="body">
    <br>
<p>The summary of the movie. Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cover_image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="cover_image"                data-endpoint="POSTapi-movies--movie_id-"
               value=""
               data-component="body">
    <br>
<p>The cover_image of the movie. Example: <code>/tmp/phpav5FCZ</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genre_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="genre_id"                data-endpoint="POSTapi-movies--movie_id-"
               value="2"
               data-component="body">
    <br>
<p>The genre_id of the movie. Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="POSTapi-movies--movie_id-"
               value="4"
               data-component="body">
    <br>
<p>The author_id of the movie. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tag_ids[0]"                data-endpoint="POSTapi-movies--movie_id-"
               data-component="body">
        <input type="number" style="display: none"
               name="tag_ids[1]"                data-endpoint="POSTapi-movies--movie_id-"
               data-component="body">
    <br>
<p>The tag_ids of the movie.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imdb_rating</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="imdb_rating"                data-endpoint="POSTapi-movies--movie_id-"
               value="4"
               data-component="body">
    <br>
<p>The imdb_rating of the movie. Example: <code>4</code></p>
        </div>
        </form>

                <h1 id="tag">Tag</h1>

    <p>APIs for managing tags.</p>

                                <h2 id="tag-GETapi-tags">Get all tags</h2>

<p>
</p>



<span id="example-requests-GETapi-tags">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8080/api/tags" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8080/api/tags"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tags">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Movie&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Series&quot;
        }
    ],
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tags" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tags"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tags" data-method="GET"
      data-path="api/tags"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tags', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tags</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
