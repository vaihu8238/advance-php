<html>
<head>

    <title>validate with jq-js</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <form onsubmit="return validate()">

      firstname:  <input type="text" id="fnm" />
        <b id="err"></b>

</br><br>

        <button>validate</button>
    </form>

    <script>
        inp_tag = document.getElementById('fnm');
        b_tag = document.getElementById('err');
        
        document.write(inp_tag.value)
        // document.write($('#fnm').val(""))
        function validate()
        {
            if(inp_tag.value=="")
            {
                b_tag.innerHTML = "Required..!";
                b_tag.style.color ="red"
                inp_tag.style.border ="2px solid red"
                return false;
            }
            else
            {
                b_tag.innerHTML ="";
            }
        }

    </script>
</body>
</html>