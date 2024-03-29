<html>
<head>
     <style type="text/css">
        body {margin-left: 5% ; margin-right: 5%; margin-top: 0.5in;
             font-family: verdana, arial,"trebuchet ms", helvetica, sans-serif;}
        ul {list-style: disc;}
     </style>
     <title>App Inventor Google API</title>
</head>

<body>
<h2>App-Inventor-Compliant API: Google Books</h2>
<table border=0>
<tr valign="top">
<td><image src="/images/customLogo.gif" width="200" hspace="10"></td>
<td>
<p>
This web service is a proxy to Google's Books API and is to be used in conjunction with  <a
href="http://appinventor.mit.edu">App Inventor
for Android</a>. App Inventor apps can access this service using the TinyWebDB component and setting the ServiceURL to the URL of this site. The service returns a list of book data. You can explore how this API works by entering a tag of either search terms or an isbn in the form "isbn:xxxxxxxx" in the box below and clicking Get value.</p>
<p><a href="https://github.com/TinyWebDB/tinywebdb-google-api">read more...</a></p>
</td> </tr> 
</table>


    <form action="/getvalue" method="post"
          enctype=application/x-www-form-urlencoded>
       <p>Tag:<input type="text" name="tag" /></p>
       <input type="hidden" name="fmt" value="html">
       <input type="submit" value="Get value">
    </form>

   
    Returned as value to TinyWebDB component: <br/>
   
</body></html>
