<html>
<head>
<meta name="robots" content="noindex" />
<style>
h1 {text-align: left;}
p {text-align: left; font-size: 18px}
div {text-align: left;}
</style>
</head>
<body>
<script>
var urlParams;
(window.onpopstate = function () {
var match,
pl = /\+/g, // Regex for replacing addition symbol with a space
search = /([^&=]+)=?([^&]*)/g,
decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
query = window.location.search.substring(1);

urlParams = {};
while (match = search.exec(query))
urlParams[decode(match[1])] = decode(match[2]);
})();
document.write("<table style=\'width: 50mm; height: 30mm;padding: 0mm;text-align:center; font-family: \"Calibri, Arial, Helvetica, sans-serif\";font-size: 18px;\'><tr><td>" + urlParams["value1"] + "<br />" + urlParams["value2"] + "<br />" + ["Set | Rep | War | Upgr"] + "</td></tr></table>")
</script>
</body>
</html>
