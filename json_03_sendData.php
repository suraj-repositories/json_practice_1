<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    
    <script>


        let sendData = {
            firstname : "shubham",
            lastname : "kumar",
            age : 50         
        }

        // JAVASCRIPT OBJECT TO JSON STRING

        let changeData = JSON.stringify(sendData);  // stringify method is use to chage javascript/json object to string
        console.log(changeData);

        // window.location = "send.php?myValues="+changeData;

        
        // JSON STRING TO JAVASCRIPT OBJECT
        let jsObj = JSON.parse(changeData);
        document.write(jsObj.firstname);
        document.write("<br>");
        document.write(jsObj.lastname);

    </script>

</body>
</html>