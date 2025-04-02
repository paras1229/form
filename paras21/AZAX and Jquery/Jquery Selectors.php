<html>
<head>
<title>jquery selectors</title>
<head>
<script src="jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
$("p").hide();
}); });
</script>
</head>
<body>
      <h2>This is a heading</h2>
      <p> This is a paragraph.</p>
      <p> This is another paragraph. </p>
      <button>Click me </button>
</body>
</html>