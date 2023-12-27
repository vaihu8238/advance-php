<?php

?>

<html>
<head>
    <title>jquery</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
    <p id="para" class="para">If you click on the "Hide" button, I will disappear.</p>
    <p id="para" class="para">If you click on the "Hide" button, I will appear.</p>
 
    <button id="btn1">Hide</button>
    <button onclick="showpara()">Show</button>
    <button onclick="hideshowpara()">Hide-Show</button>

    <script>

        p_tag =$('.para')
        b_tag =$('#btn1')

        b_tag.click(  () =>
       {
        p_tag.hide(1000);
       })

       function showpara()
       {    
        p_tag.show();
       }

       function hideshowpara()
       {
        p_tag.toggle();
       }

    </script>
</body>
</html>