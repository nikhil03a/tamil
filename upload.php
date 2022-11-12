<head>
        <title>Inscription Reader</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    </head>
<h1>Tamil Virtual Academy</h1>
    <h2 style="margin-top:0px;">Inscription Reader</h2>
<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg','jpeg','png');
        if(in_array($fileActualExt,$allowed)){
            if($fileError===0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('',true) . "." . $fileActualExt;
                    $fileDestination =  'uploads/' . $fileNameNew;
                    $path = "C:/xampp/htdocs/tamil/" . $fileDestination;
                    echo $path;
                    move_uploaded_file($fileTmpName,$fileDestination);?>
                    <html>
    <head>
        <title>Inscription Reader</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
</head>
    <body>
    <p style="color:#F6F6C9;font-family: 'Noto Serif', serif">File Uploaded Successfully</p>
        <table>
            <tr>
                
                <td><button class="btn third">Enhance</button></td>
                <td rowspan="2"><img src="<?php echo $fileDestination ?>" alt="" width="400px" height="200px"></td>
            </tr>
            <tr>
                <td><button class="btn third">Enhanced Characters</button></td>
            </tr> 
            <tr>
                <td><button class="btn third">Recognize</button></td>
                <td rowspan="2"><img src="" alt="" width="400px" height="200px"></td>
            </tr>  
            <tr>
                <td><button class="btn third">Transliterate</button></td>
            </tr>
        </table>
        
    </body>
</html><?php
                }else{?>
                <h1><html style="background: #2c3e50;">
                <p style="color: white;font-size: 2rem;display: block;width: 100%;text-align: center;
            font-family: 'Noto Serif', serif;">Your File Size is too large</p>
            </html><?php
                }
            }else{
                ?><html style="background: #2c3e50;">
                <p style="color: white;font-size: 2rem;display: block;width: 100%;text-align: center;
            font-family: 'Noto Serif', serif;">There is an error in uploading the file</p>
            </html><?php
            }
        }else{
            ?><html style="background: #2c3e50;">
                <p style="color: white;font-size: 2rem;display: block;width: 100%;text-align: center;
            font-family: 'Noto Serif', serif;">You cannot upload a file of this type</p>
            </html><?php
        }
    }
?>
