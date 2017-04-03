/* Base */

body, body *:not(html):not(style):not(br):not(tr):not(code) {
font-family: Avenir, Helvetica, sans-serif;
box-sizing: border-box;
}

body {
background-color: {{ $colors['basicBackground'] }};
color: {{ $colors['textColor'] }};
height: 100%;
line-height: 1.4;
margin: 0;
width: 100% !important;
-webkit-text-size-adjust: none;
}

p,
ul,
ol,
blockquote {
line-height: 1.4;
text-align: left;
}

a {
color: {{ $colors['linkColor'] }};
}

a img {
border: none;
}

/* Typography */

h1 {
color: {{ $colors['headingColor'] }};
font-size: 19px;
font-weight: bold;
margin-top: 0;
text-align: left;
}

h2 {
color: {{ $colors['headingColor'] }};
font-size: 16px;
font-weight: bold;
margin-top: 0;
text-align: left;
}

h3 {
color: {{ $colors['headingColor'] }};
font-size: 14px;
font-weight: bold;
margin-top: 0;
text-align: left;
}

p {
color: {{ $colors['textColor'] }};
font-size: 16px;
line-height: 1.5em;
margin-top: 0;
text-align: left;
}

p.sub {
font-size: 12px;
}

img {
max-width: 100%;
}

/* Layout */

.wrapper {
background-color: {{ $colors['basicBackground'] }};
margin: 0;
padding: 0;
width: 100%;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 100%;
}

.content {
margin: 0;
padding: 0;
width: 100%;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 100%;
}

/* Header */

.header {
padding: 25px 0;
text-align: center;
}

.header a {
color: {{ $colors['companyNameColor'] }};
font-size: 19px;
font-weight: bold;
text-decoration: none;
text-shadow: 0 1px 0 {{ $colors['companyNameTextShadow'] }};;
}

/* Body */

.body {
background-color: {{ $colors['bodyBackground'] }};
border-bottom: 1px solid {{ $colors['bodyBorderColor'] }};
border-top: 1px solid {{ $colors['bodyBorderColor'] }};
margin: 0;
padding: 0;
width: 100%;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 100%;
}

.inner-body {
background-color: {{ $colors['innerBodyBackground'] }};
margin: 0 auto;
padding: 0;
width: 570px;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 570px;
}

/* Subcopy */

.subcopy {
border-top: 1px solid {{ $colors['subCopyBorderColor'] }};
margin-top: 25px;
padding-top: 25px;
}

.subcopy p {
font-size: 12px;
}

/* Footer */

.footer {
margin: 0 auto;
padding: 0;
text-align: center;
width: 570px;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 570px;
}

.footer p {
color: {{ $colors['footerColor'] }};
font-size: 12px;
text-align: center;
}

/* Tables */

.table table {
margin: 30px auto;
width: 100%;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 100%;
}

.table th {
color: {{ $colors['textColor'] }};
border-bottom: 1px solid {{ $colors['tableBorderColor'] }};
padding-bottom: 8px;
}

.table td {
color: {{ $colors['textColor'] }};
font-size: 15px;
line-height: 18px;
padding: 10px 0;
}

.content-cell {
padding: 35px;
}

/* Buttons */

.action {
margin: 30px auto;
padding: 0;
text-align: center;
width: 100%;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 100%;
}

.button {
border-radius: 3px;
box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
color: {{ $colors['buttonColor'] }};
display: inline-block;
text-decoration: none;
-webkit-text-size-adjust: none;
}

.button-blue {
background-color: {{ $colors['buttonBlueBackground'] }};
border-top: 10px solid {{ $colors['buttonBlueBackground'] }};
border-right: 18px solid {{ $colors['buttonBlueBackground'] }};
border-bottom: 10px solid {{ $colors['buttonBlueBackground'] }};
border-left: 18px solid {{ $colors['buttonBlueBackground'] }};
}

.button-green {
background-color: {{ $colors['buttonGreenBackground'] }};
border-top: 10px solid {{ $colors['buttonGreenBackground'] }};
border-right: 18px solid {{ $colors['buttonGreenBackground'] }};
border-bottom: 10px solid {{ $colors['buttonGreenBackground'] }};
border-left: 18px solid {{ $colors['buttonGreenBackground'] }};
}

.button-red {
background-color: {{ $colors['buttonRedBackground'] }};
border-top: 10px solid {{ $colors['buttonRedBackground'] }};
border-right: 18px solid {{ $colors['buttonRedBackground'] }};
border-bottom: 10px solid {{ $colors['buttonRedBackground'] }};
border-left: 18px solid {{ $colors['buttonRedBackground'] }};
}

/* Panels */

.panel {
margin: 0 0 21px;
}

.panel-content {
background-color: {{ $colors['panelBackground'] }};
padding: 16px;
}

.panel-item {
padding: 0;
}

.panel-item p:last-of-type {
margin-bottom: 0;
padding-bottom: 0;
}

/* Promotions */

.promotion {
background-color: #FFFFFF;
border: 2px dashed #9BA2AB;
margin: 0;
margin-bottom: 25px;
margin-top: 25px;
padding: 24px;
width: 100%;
-premailer-cellpadding: 0;
-premailer-cellspacing: 0;
-premailer-width: 100%;
}

.promotion h1 {
text-align: center;
}

.promotion p {
font-size: 15px;
text-align: center;
}