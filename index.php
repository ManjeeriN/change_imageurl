  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
  $(document).ready(function(){
      $('.ddd img').attr('src',function(index,attr){
              return attr.replace('images','pictures');
        });
  });
  </script>

<p class="ddd">
	Inspecting the image , the path is changed from  <span style="color: blue">images/ to pictures/</span>
	<img src="images/Desert.jpg">
</p>

