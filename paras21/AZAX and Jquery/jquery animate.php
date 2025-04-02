<html>
<head>
<script src="jquery-3.7.1.min.js"></script>
<script>
 $(document).ready(function(){
      $("button").click(function(){
         $("div").animate((left:'250px'});
  });
});
</script>
</head>
<body>
     <button>Start Animation</button>
     <div style="background: #98bf21; height:100px; width:100px; position: absolute;"></div>
</body>
</html>