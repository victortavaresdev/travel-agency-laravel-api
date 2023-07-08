<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Travel Agency API Docs</title>

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

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.22.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.22.0.js") }}"></script>

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
                    <ul id="tocify-header-admin-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-endpoints">
                    <a href="#admin-endpoints">Admin endpoints</a>
                </li>
                                    <ul id="tocify-subheader-admin-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-endpoints-POSTapi-v1-admin-travels">
                                <a href="#admin-endpoints-POSTapi-v1-admin-travels">POST Travel</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-endpoints-POSTapi-v1-admin-travels--travel_id--tours">
                                <a href="#admin-endpoints-POSTapi-v1-admin-travels--travel_id--tours">POST Tour</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-endpoints-DELETEapi-v1-admin-travels--travel_id--delete">
                                <a href="#admin-endpoints-DELETEapi-v1-admin-travels--travel_id--delete">DELETE Travel</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-endpoints-PUTapi-v1-admin-travels--travel_id--update">
                                <a href="#admin-endpoints-PUTapi-v1-admin-travels--travel_id--update">PUT Travel</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-auth-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth-endpoints">
                    <a href="#auth-endpoints">Auth endpoints</a>
                </li>
                                    <ul id="tocify-subheader-auth-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-endpoints-POSTapi-v1-auth-login">
                                <a href="#auth-endpoints-POSTapi-v1-auth-login">POST Login</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-public-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="public-endpoints">
                    <a href="#public-endpoints">Public endpoints</a>
                </li>
                                    <ul id="tocify-subheader-public-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="public-endpoints-GETapi-v1-travels">
                                <a href="#public-endpoints-GETapi-v1-travels">GET Travels</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="public-endpoints-GETapi-v1-travels--travel_slug--tours">
                                <a href="#public-endpoints-GETapi-v1-travels--travel_slug--tours">GET Tours</a>
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
        <li>Last updated: July 8, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This is a API Documentation for a Travel Agency.</p>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our Travel Agency API.</p>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="admin-endpoints">Admin endpoints</h1>

    

                                <h2 id="admin-endpoints-POSTapi-v1-admin-travels">POST Travel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Create a new Travel.</p>

<span id="example-requests-POSTapi-v1-admin-travels">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/admin/travels" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"is_public\": false,
    \"name\": \"iure\",
    \"description\": \"Deserunt aliquam consequatur nam et quam.\",
    \"number_of_days\": 2
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/travels"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "is_public": false,
    "name": "iure",
    "description": "Deserunt aliquam consequatur nam et quam.",
    "number_of_days": 2
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-travels">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;996a36ca-2693-4901-9c55-7136e68d81d5&quot;,
        &quot;name&quot;: &quot;New travel&quot;,
        &quot;slug&quot;: &quot;new-travel&quot;,
        &quot;description&quot;: &quot;The best travel ever!&quot;,
        &quot;number_of_days&quot;: &quot;7&quot;,
        &quot;number_of_nights&quot;: 6
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Forbidden&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Validation errors&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-travels" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-travels"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-travels"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-travels" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-travels">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-travels" data-method="POST"
      data-path="api/v1/admin/travels"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-travels', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-travels"
                    onclick="tryItOut('POSTapi-v1-admin-travels');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-travels"
                    onclick="cancelTryOut('POSTapi-v1-admin-travels');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-travels"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/travels</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-travels"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-travels"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-travels"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_public</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-v1-admin-travels" style="display: none">
            <input type="radio" name="is_public"
                   value="true"
                   data-endpoint="POSTapi-v1-admin-travels"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-admin-travels" style="display: none">
            <input type="radio" name="is_public"
                   value="false"
                   data-endpoint="POSTapi-v1-admin-travels"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-travels"
               value="iure"
               data-component="body">
    <br>
<p>Example: <code>iure</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-admin-travels"
               value="Deserunt aliquam consequatur nam et quam."
               data-component="body">
    <br>
<p>Example: <code>Deserunt aliquam consequatur nam et quam.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>number_of_days</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="number_of_days"                data-endpoint="POSTapi-v1-admin-travels"
               value="2"
               data-component="body">
    <br>
<p>Example: <code>2</code></p>
        </div>
        </form>

                    <h2 id="admin-endpoints-POSTapi-v1-admin-travels--travel_id--tours">POST Tour</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Create a new Tour.</p>

<span id="example-requests-POSTapi-v1-admin-travels--travel_id--tours">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/admin/travels/9997f6c1-5452-4411-acfb-92209b71c119/tours" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ouqv\",
    \"starting_date\": \"2023-07-08T02:05:35\",
    \"ending_date\": \"2036-03-05\",
    \"price\": 6147.9989657
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/travels/9997f6c1-5452-4411-acfb-92209b71c119/tours"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ouqv",
    "starting_date": "2023-07-08T02:05:35",
    "ending_date": "2036-03-05",
    "price": 6147.9989657
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-travels--travel_id--tours">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;996a381e-64ca-46ba-8b51-f8279d5529ad&quot;,
        &quot;name&quot;: &quot;New tour&quot;,
        &quot;starting_date&quot;: &quot;2023-06-15&quot;,
        &quot;ending_date&quot;: &quot;2023-06-20&quot;,
        &quot;price&quot;: &quot;99.99&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Forbidden&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Resource Not Found&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Validation errors&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-travels--travel_id--tours" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-travels--travel_id--tours"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-travels--travel_id--tours"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-travels--travel_id--tours" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-travels--travel_id--tours">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-travels--travel_id--tours" data-method="POST"
      data-path="api/v1/admin/travels/{travel_id}/tours"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-travels--travel_id--tours', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-travels--travel_id--tours"
                    onclick="tryItOut('POSTapi-v1-admin-travels--travel_id--tours');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-travels--travel_id--tours"
                    onclick="cancelTryOut('POSTapi-v1-admin-travels--travel_id--tours');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-travels--travel_id--tours"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/travels/{travel_id}/tours</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>travel_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="travel_id"                data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
               value="9997f6c1-5452-4411-acfb-92209b71c119"
               data-component="url">
    <br>
<p>The ID of the travel. Example: <code>9997f6c1-5452-4411-acfb-92209b71c119</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
               value="ouqv"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>ouqv</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starting_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starting_date"                data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
               value="2023-07-08T02:05:35"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-07-08T02:05:35</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ending_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ending_date"                data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
               value="2036-03-05"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>starting_date</code>. Example: <code>2036-03-05</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-v1-admin-travels--travel_id--tours"
               value="6147.9989657"
               data-component="body">
    <br>
<p>Example: <code>6147.9989657</code></p>
        </div>
        </form>

                    <h2 id="admin-endpoints-DELETEapi-v1-admin-travels--travel_id--delete">DELETE Travel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Deletes new Travel.</p>

<span id="example-requests-DELETEapi-v1-admin-travels--travel_id--delete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/admin/travels/9997f6c1-5452-4411-acfb-92209b71c119/delete" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/travels/9997f6c1-5452-4411-acfb-92209b71c119/delete"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-travels--travel_id--delete">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Forbidden&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Travel Not Found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-admin-travels--travel_id--delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-travels--travel_id--delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-travels--travel_id--delete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-travels--travel_id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-travels--travel_id--delete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-travels--travel_id--delete" data-method="DELETE"
      data-path="api/v1/admin/travels/{travel_id}/delete"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-travels--travel_id--delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-travels--travel_id--delete"
                    onclick="tryItOut('DELETEapi-v1-admin-travels--travel_id--delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-travels--travel_id--delete"
                    onclick="cancelTryOut('DELETEapi-v1-admin-travels--travel_id--delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-travels--travel_id--delete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/travels/{travel_id}/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-admin-travels--travel_id--delete"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-travels--travel_id--delete"
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
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-travels--travel_id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>travel_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="travel_id"                data-endpoint="DELETEapi-v1-admin-travels--travel_id--delete"
               value="9997f6c1-5452-4411-acfb-92209b71c119"
               data-component="url">
    <br>
<p>The ID of the travel. Example: <code>9997f6c1-5452-4411-acfb-92209b71c119</code></p>
            </div>
                    </form>

                    <h2 id="admin-endpoints-PUTapi-v1-admin-travels--travel_id--update">PUT Travel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Updates new Travel.</p>

<span id="example-requests-PUTapi-v1-admin-travels--travel_id--update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/admin/travels/9997f6c1-5452-4411-acfb-92209b71c119/update" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"is_public\": false,
    \"name\": \"accusamus\",
    \"description\": \"Illum occaecati itaque quas.\",
    \"number_of_days\": 19
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/travels/9997f6c1-5452-4411-acfb-92209b71c119/update"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "is_public": false,
    "name": "accusamus",
    "description": "Illum occaecati itaque quas.",
    "number_of_days": 19
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-travels--travel_id--update">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;996a36ca-2693-4901-9c55-7136e68d81d5&quot;,
        &quot;name&quot;: &quot;New travel updated&quot;,
        &quot;slug&quot;: &quot;new-travel-updated&quot;,
        &quot;description&quot;: &quot;The best travel ever!&quot;,
        &quot;number_of_days&quot;: &quot;7&quot;,
        &quot;number_of_nights&quot;: 6
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Forbidden&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Travel Not Found&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Validation errors&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-admin-travels--travel_id--update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-travels--travel_id--update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-travels--travel_id--update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-travels--travel_id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-travels--travel_id--update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-travels--travel_id--update" data-method="PUT"
      data-path="api/v1/admin/travels/{travel_id}/update"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-travels--travel_id--update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-travels--travel_id--update"
                    onclick="tryItOut('PUTapi-v1-admin-travels--travel_id--update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-travels--travel_id--update"
                    onclick="cancelTryOut('PUTapi-v1-admin-travels--travel_id--update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-travels--travel_id--update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/travels/{travel_id}/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
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
                              name="Accept"                data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>travel_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="travel_id"                data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
               value="9997f6c1-5452-4411-acfb-92209b71c119"
               data-component="url">
    <br>
<p>The ID of the travel. Example: <code>9997f6c1-5452-4411-acfb-92209b71c119</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_public</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-v1-admin-travels--travel_id--update" style="display: none">
            <input type="radio" name="is_public"
                   value="true"
                   data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-admin-travels--travel_id--update" style="display: none">
            <input type="radio" name="is_public"
                   value="false"
                   data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
               value="accusamus"
               data-component="body">
    <br>
<p>Example: <code>accusamus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
               value="Illum occaecati itaque quas."
               data-component="body">
    <br>
<p>Example: <code>Illum occaecati itaque quas.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>number_of_days</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="number_of_days"                data-endpoint="PUTapi-v1-admin-travels--travel_id--update"
               value="19"
               data-component="body">
    <br>
<p>Example: <code>19</code></p>
        </div>
        </form>

                <h1 id="auth-endpoints">Auth endpoints</h1>

    

                                <h2 id="auth-endpoints-POSTapi-v1-auth-login">POST Login</h2>

<p>
</p>

<p>Login with the existing user.</p>

<span id="example-requests-POSTapi-v1-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"ffriesen@example.com\",
    \"password\": \"lw\\\"*Km%6Qp}~t+Z_Wi:\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ffriesen@example.com",
    "password": "lw\"*Km%6Qp}~t+Z_Wi:"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;accessToken&quot;: &quot;1|a9ZcYzIrLURVGx6Xe41HKj1CrNsxRxe4pLA2oISo&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invalid credentials&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Validation errors&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-login" data-method="POST"
      data-path="api/v1/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-login"
                    onclick="tryItOut('POSTapi-v1-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-login"
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
                              name="Accept"                data-endpoint="POSTapi-v1-auth-login"
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
                              name="email"                data-endpoint="POSTapi-v1-auth-login"
               value="ffriesen@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>ffriesen@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-auth-login"
               value="lw"*Km%6Qp}~t+Z_Wi:"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Must not be greater than 255 characters. Example: <code>lw"*Km%6Qp}~t+Z_Wi:</code></p>
        </div>
        </form>

                <h1 id="public-endpoints">Public endpoints</h1>

    

                                <h2 id="public-endpoints-GETapi-v1-travels">GET Travels</h2>

<p>
</p>

<p>Returns paginated list of travels.</p>

<span id="example-requests-GETapi-v1-travels">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/travels?page=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/travels"
);

const params = {
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-travels">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;9958e389-5edf-48eb-8ecd-e058985cf3ce&quot;,
            &quot;name&quot;: &quot;First travel&quot;,
            &quot;slug&quot;: &quot;first-travel&quot;,
            &quot;description&quot;: &quot;Great offer!&quot;,
            &quot;number_of_days&quot;: 5,
            &quot;number_of_nights&quot;: 4
        },
        {
            &quot;id&quot;: &quot;99643482-4ea8-435e-b7da-e18cbde3d3c7&quot;,
            &quot;name&quot;: &quot;New travel&quot;,
            &quot;slug&quot;: &quot;new-travel&quot;,
            &quot;description&quot;: &quot;The best journey ever!&quot;,
            &quot;number_of_days&quot;: 3,
            &quot;number_of_nights&quot;: 2
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://travel-api.test/api/v1/travels?page=1&quot;,
        &quot;last&quot;: &quot;http://travel-api.test/api/v1/travels?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://travel-api.test/api/v1/travels?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://travel-api.test/api/v1/travels&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 6,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-travels" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-travels"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-travels"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-travels" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-travels">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-travels" data-method="GET"
      data-path="api/v1/travels"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-travels', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-travels"
                    onclick="tryItOut('GETapi-v1-travels');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-travels"
                    onclick="cancelTryOut('GETapi-v1-travels');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-travels"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/travels</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-travels"
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
                              name="Accept"                data-endpoint="GETapi-v1-travels"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="page"                data-endpoint="GETapi-v1-travels"
               value="1"
               data-component="query">
    <br>
<p>Page number. Example: <code>1</code></p>
            </div>
                </form>

                    <h2 id="public-endpoints-GETapi-v1-travels--travel_slug--tours">GET Tours</h2>

<p>
</p>

<p>Returns paginated list of tours by travel slug.</p>

<span id="example-requests-GETapi-v1-travels--travel_slug--tours">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/travels/&amp;quot;the-travel&amp;quot;/tours?page=1&amp;priceFrom=0&amp;priceTo=0&amp;dateFrom=%222023-06-01%22&amp;dateTo=%222023-07-01%22&amp;sortBy=%22price%22&amp;sortOrder=%22asc%22+or+%22desc%22" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"priceFrom\": 3084.410883,
    \"priceTo\": 348824868.768839,
    \"dateFrom\": \"2023-07-08T02:05:36\",
    \"dateTo\": \"2023-07-08T02:05:36\",
    \"sortBy\": \"price\",
    \"sortOrder\": \"asc\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/travels/&amp;quot;the-travel&amp;quot;/tours"
);

const params = {
    "page": "1",
    "priceFrom": "0",
    "priceTo": "0",
    "dateFrom": ""2023-06-01"",
    "dateTo": ""2023-07-01"",
    "sortBy": ""price"",
    "sortOrder": ""asc" or "desc"",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "priceFrom": 3084.410883,
    "priceTo": 348824868.768839,
    "dateFrom": "2023-07-08T02:05:36",
    "dateTo": "2023-07-08T02:05:36",
    "sortBy": "price",
    "sortOrder": "asc"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-travels--travel_slug--tours">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;9958e389-5edf-48eb-8ecd-e058985cf3ce&quot;,
            &quot;name&quot;: &quot;The Tour 1&quot;,
            &quot;starting_date&quot;: &quot;2023-06-11&quot;,
            &quot;ending_date&quot;: &quot;2023-06-16&quot;,
            &quot;price&quot;: &quot;99.99&quot;
        },
        {
            &quot;id&quot;: &quot;9958e389-5edf-48eb-8ecd-e058985cf3c2&quot;,
            &quot;name&quot;: &quot;The Tour 2&quot;,
            &quot;starting_date&quot;: &quot;2023-06-14&quot;,
            &quot;ending_date&quot;: &quot;2023-06-19&quot;,
            &quot;price&quot;: &quot;119.99&quot;
        },
        {
            &quot;id&quot;: &quot;9958e389-5edf-48eb-8ecd-e058985cf3c1&quot;,
            &quot;name&quot;: &quot;The Tour 3&quot;,
            &quot;starting_date&quot;: &quot;2023-06-18&quot;,
            &quot;ending_date&quot;: &quot;2023-06-23&quot;,
            &quot;price&quot;: &quot;79.99&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://travel-api.test/api/v1/travels/first-travel/tours?page=1&quot;,
        &quot;last&quot;: &quot;http://travel-api.test/api/v1/travels/first-travel/tours?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://travel-api.test/api/v1/travels/first-travel/tours?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://travel-api.test/api/v1/travels/first-travel/tours&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 3,
        &quot;total&quot;: 3
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Travel_Slug Not Found&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Validation errors&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-travels--travel_slug--tours" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-travels--travel_slug--tours"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-travels--travel_slug--tours"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-travels--travel_slug--tours" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-travels--travel_slug--tours">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-travels--travel_slug--tours" data-method="GET"
      data-path="api/v1/travels/{travel_slug}/tours"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-travels--travel_slug--tours', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-travels--travel_slug--tours"
                    onclick="tryItOut('GETapi-v1-travels--travel_slug--tours');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-travels--travel_slug--tours"
                    onclick="cancelTryOut('GETapi-v1-travels--travel_slug--tours');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-travels--travel_slug--tours"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/travels/{travel_slug}/tours</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
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
                              name="Accept"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>travel_slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="travel_slug"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value=""the-travel""
               data-component="url">
    <br>
<p>Travel slug. Example: <code>"the-travel"</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="page"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="1"
               data-component="query">
    <br>
<p>Page number. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>priceFrom</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priceFrom"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="0"
               data-component="query">
    <br>
<p>number. Example: <code>0</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>priceTo</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priceTo"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="0"
               data-component="query">
    <br>
<p>number. Example: <code>0</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>dateFrom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dateFrom"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value=""2023-06-01""
               data-component="query">
    <br>
<p>date. Example: <code>"2023-06-01"</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>dateTo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dateTo"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value=""2023-07-01""
               data-component="query">
    <br>
<p>date. Example: <code>"2023-07-01"</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sortBy</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sortBy"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value=""price""
               data-component="query">
    <br>
<p>string. Example: <code>"price"</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sortOrder</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sortOrder"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value=""asc" or "desc""
               data-component="query">
    <br>
<p>string. Example: <code>"asc" or "desc"</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priceFrom</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priceFrom"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="3084.410883"
               data-component="body">
    <br>
<p>Example: <code>3084.410883</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priceTo</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priceTo"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="348824868.76884"
               data-component="body">
    <br>
<p>Example: <code>348824868.76884</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dateFrom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dateFrom"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="2023-07-08T02:05:36"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-07-08T02:05:36</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dateTo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dateTo"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="2023-07-08T02:05:36"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-07-08T02:05:36</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sortBy</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sortBy"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="price"
               data-component="body">
    <br>
<p>Must be one of <code>price</code>. Example: <code>price</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sortOrder</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sortOrder"                data-endpoint="GETapi-v1-travels--travel_slug--tours"
               value="asc"
               data-component="body">
    <br>
<p>Must be one of <code>asc</code> or <code>desc</code>. Example: <code>asc</code></p>
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
