<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Box Chat</title>
        <script src="jquery-1.12.3.js"></script>


        <script>
            $(document).ready(function () {
                $("#messages").load('ajaxLoad.php');


                $("#userArea").submit(function () {
                    
                    $.post('ajaxPOST.php', $("#userArea").serialize(), function(data){
                        
                    });
                    
                    return false;
                });
            });

        </script>
    </head>
    <body>
        <!-- Display -->
        <div id="messages"> </div>


        <!-- POST -->
        <form id="userArea"  >
            <label > Message: </label>
            <input type="text" maxlength="255" name="messages" />
             <label ></label>
             <input type="submit" value="Post Data"/>
        </form>
    </body>
</html>
