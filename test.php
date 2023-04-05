<!DOCTYPE html>
<html>
    <head>
        <title>JQuery File upload progress bar with file size validation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
        <style>
            
        </style>
    </head>
    <body>
    <h2>HTML5 File Upload Progress Bar Tutorial</h2>
<form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>

<script>
 
 body { 
    color: #ffff;
    padding: 55px 25px;
    background-color: #9933ff;
}
h2 {
    font-weight: normal;
    font-size: 40px;
    text-transform: uppercase;
}

</script>

    </body>
</html>