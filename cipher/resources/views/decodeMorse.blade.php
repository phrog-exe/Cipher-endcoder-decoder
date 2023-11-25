<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <link rel="stylesheet"
          href=
          "https://unpkg.com/purecss@1.0.0/build/pure-min.css"
          integrity=
          "sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w"
          crossorigin="anonymous"/>

    <style>
        body {
            background: linear-gradient(-45deg, #bc5090, #ff6361, #003f5c, #b06ab3);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            font-family: 'Courier New', monospace;
            font-size: 112.5%;
            text-align: center;
            font-weight: 700;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        /*
        Buttons
         */


        .decode {
            display: inline-grid;
            border: 5em;
            cursor: pointer;
            outline: none;
            font-size: 16px;
            -webkit-transform: translate(0);
            transform: translate(0);
            background-image: linear-gradient(45deg, #4568dc, #b06ab3);
            padding: 0.7em 2em;
            border-radius: 65px;
            box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
            -webkit-transition: box-shadow 0.25s;
            transition: box-shadow 0.25s;
            color: white;
        }
        .decode:after {
            content: "";
            border-radius: 18px;
            position: absolute;
            margin: 4px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -1;
            background: #0e0e10;
        }
        .decode:hover {
            background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
            box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
        }
        /*  button download*/
        .button_save {
            display: inline-grid;
            position: absolute;
            top: 615px;
            right: 260px;
        }
        .button_up {
            display: inline-grid;
            position: absolute;
            top: 615px;
            left: 260px;
            color: white;
        }
        /* Dropdown Button */
        .dropbtn {
            font-family: 'Courier New', monospace;
            font-weight: bold;
            font-size: 1em;
            letter-spacing: 0.1em;
            text-decoration: none;
            background-color: #393e46;
            color: white;
            display: inline-block;
            padding: 10px 40px 10px 40px;
            position: relative;
            border: 3px solid #ffffff;
            border-radius: 25px;
        }
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: white;}
        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {display: block;}
        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {background-color: gray;}
        /* Dropdown Button */
        .dropbtn2 {
            font-family: 'Courier New', monospace;
            font-weight: bold;
            font-size: 1em;
            letter-spacing: 0.1em;
            text-decoration: none;
            background-color: #393e46;
            color: white;
            display: inline-block;
            padding: 10px 40px 10px 40px;
            position: relative;
            border: 3px solid #ffffff;
            border-radius: 25px;
        }
        /* The container <div> - needed to position the dropdown content */
        .dropdown2 {
            position: relative;
            display: inline-block;
        }
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content2 {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        /* Links inside the dropdown */
        .dropdown-content2 a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        /* Change color of dropdown links on hover */
        .dropdown-content2 a:hover {background-color: white;}
        /* Show the dropdown menu on hover */
        .dropdown2:hover .dropdown-content2 {display: block;}
        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown2:hover .dropbtn2 {background-color: gray;}
        /* Dropdown Button */
        .dropbtn3 {
            font-family: 'Courier New', monospace;
            font-weight: bold;
            font-size: 1em;
            letter-spacing: 0.1em;
            text-decoration: none;
            background-color: #393e46;
            color: white;
            display: inline-block;
            padding: 10px 40px 10px 40px;
            position: relative;
            border: 3px solid #ffffff;
            border-radius: 25px;
        }
        /* The container <div> - needed to position the dropdown content */
        .dropdown3 {
            position: relative;
            display: inline-block;
        }
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content3 {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        /* Links inside the dropdown */
        .dropdown-content3 a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        /* Change color of dropdown links on hover */
        .dropdown-content3 a:hover {background-color: white;}
        /* Show the dropdown menu on hover */
        .dropdown3:hover .dropdown-content3 {display: block;}
        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown3:hover .dropbtn3 {background-color: gray;}
        /*
        text areas
         */
        .area1 {
            outline: none;
            font-family: lato, sans-serif;
            font-weight: bold;
            font-size: 1em;
            letter-spacing: 0.1em;
            text-decoration: none;
            background-color: #393e46;
            color: white;
            padding: 60px 80px 60px 80px;
            position: relative;
            border: 3px solid #ffffff;
            border-radius: 25px;
            resize: none;
        }
        .area2 {
            outline: none;
            font-family: lato, sans-serif;
            font-weight: bold;
            font-size: 1em;
            letter-spacing: 0.1em;
            text-decoration: none;
            background-color: #393e46;
            color: white;
            padding: 60px 80px 60px 80px;
            position: relative;
            border: 3px solid #ffffff;
            border-radius: 25px;
            resize: none;
        }
        .label1 {
            margin-right: 1200px;
            color: white;
        }
        .h1 {
            color: white;
        }
    </style>
</head>


<body>
<div>

    <h1 class="h1">CIPHER ENCODER / DECODER</h1><br><br>

</div>


{{-- FORM encodeMorse --}}

<form id="decode" action="/decode" method="post">

    @csrf

    <div class="dropdown">
        <button class="dropbtn">Morse code</button>
        <div class="dropdown-content">
            <a href="/encode">Encode</a>
            <a href="/decode">Decode</a>
        </div>
    </div>


    <div class="dropdown2">
        <button class="dropbtn2">Vigenere cipher</button>
        <div class="dropdown-content2">

            <a href="/encodeV">Encode</a>
            <a href="/decodeV">Decode</a>


        </div>
    </div>


    <div class="dropdown3">
        <button class="dropbtn3">Affine cipher</button>
        <div class="dropdown-content3">
            <a href="/encodeA">Encode</a>
            <a href="/decodeA">Decode</a>
        </div>
    </div><br><br><br><br>



    <label class="label1" for="text1">Enter text here: </label><br><br>

    <textarea class="area1" name="text1" id="text1" rows="10" cols="50">{{ session('text2') ?? ''}}</textarea>&nbsp &nbsp
    &nbsp
    <textarea class="area2" name="text2" id="text2" rows="10" cols="50">{{session('encodedText2') ?? ''}}</textarea><br><br>




    {{-- UPLOAD FILE  --}}


    <input class="button_up" type="file" name="inputfile"
           id="inputfile">
    <br>

    <script type="text/javascript">
        document.getElementById('inputfile')
            .addEventListener('change', function () {
                var fr = new FileReader();
                fr.onload = function () {
                    document.getElementById('text1')
                        .textContent = fr.result;
                }
                fr.readAsText(this.files[0]);
            })
    </script>
    &nbsp &nbsp


    <br><button class="button_save" onclick=saveTextAsFile(text2.value,'download.txt')>Download</button>
    <br><br>

    {{-- SUBMIT EACH FORM  --}}

    <script> submitForms = function(){
            document.getElementById("encode").submit();
            document.getElementById("decode").submit();
            document.getElementById("encodeA").submit();
            document.getElementById("decodeA").submit();
            document.getElementById("encodeV").submit();
            document.getElementById("decodeV").submit();
        }
    </script>


    <br><br><br><input class="decode" type="submit" value="Submit" onclick="submitForms()">

    {{-- SAVE AS TEXT FILE  --}}

    <br><button class="button_save" onclick=saveTextAsFile(text2.value,'download.txt')>Download</button>
    <br><br>
</form>
</body>
</html>

<script>
    function saveTextAsFile(textToWrite, fileNameToSaveAs) {
        var textFileAsBlob = new Blob([textToWrite], {type: 'text/plain'});
        var downloadLink = document.createElement("a");
        downloadLink.download = fileNameToSaveAs;
        downloadLink.innerHTML = "Download File";
        if (window.webkitURL != null) {
            //chrome
            downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
        } else {
            // Firefox
            downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
            downloadLink.onclick = destroyClickedElement;
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);
        }
        downloadLink.click();
    }

</script>
