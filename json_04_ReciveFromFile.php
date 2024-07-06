<!-- THIS IS THE PART OF AJAX , WE CAN USE JSON USING AJAX -->

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


        // 1 - server connection established
        // 2 - request received 
        // 3 - process request 
        // 4 - request finished and response is ready 



    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){     // here we use 4 which define above | 
            // Action to be performed when the document is read
            console.log(xhttp.responseText);
            var response = JSON.parse(xhttp.responseText);  // convreting json string to javascirpt object

            console.log(response.employee);
            let employees = response.employee;

            let showdata = "";

            for(let i = 0; i < employees.length; i++){
                showdata += employees[i].name + "<br>";
            }
            document.write(showdata);
        }
    };
    xhttp.open("GET", "employee.json", true);       
    // method(GET/POST) | url(file location) | async : true(asynchronouds) or false(synchronous)

    xhttp.send();

    </script>
    
</body>
</html>