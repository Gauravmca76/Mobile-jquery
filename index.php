<!DOCTYPE html>
<html>
   <head>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   </head>
   <body>
      <div data-role = "page">
      <div data-role = "header">
            <div class = "ui-body-a ui-body">
            <div data-role = "navbar">
               <ul>
                  <li><a href = "#" data-icon="home" style="background-color: burlywood"></a></li>
                  <li><a href = "#" data-icon="star" style="background-color: burlywood"></a></li>
                  <li><a href = "contactus.php" data-icon="phone" style="background-color: burlywood"></a></li>
               </ul>
            </div>
         </div>
         </div>
         <div data-role = "main" class = "ui-content">
            <form method = "post" action = "#">
               <input type = "text" name = "fname" placeholder="Full Name">

               <input type = "email" name = "email" placeholder="Email Address">

               <label for = "date">Birth Date</label>
               <input type = "date" name = "date">

               <label for = "file">Upload File</label>
               <input type = "file" name = "file">

               Select Car
               <fieldset data-role = "controlgroup" name = "checkbox">
                  <input type = "checkbox" name = "checkbox" id = "checkbox">
                  <label for = "checkbox">BMW</label>

                  <input type = "checkbox" name = "checkbox" id = "checkbox1">
                  <label for = "checkbox1">Audi</label>

                  <input type = "checkbox" name = "checkbox" id = "checkbox2">
                  <label for = "checkbox2">Skoda</label>
               </fieldset>

               Gender
               <fieldset data-role = "controlgroup">
                  <input type = "radio" name = "radio" id = "radio">
                  <label for = "radio">Male</label>

                  <input type = "radio" name = "radio" id = "radio1">
                  <label for = "radio1">Female</label>
               </fieldset>
               <input type = "submit" value = "Submit" data-inline = "true">
            </form>
         </div>
         <div data-role = "footer">
            <h1>Copyright</h1>   
         </div>
      </div>
   </body>
</html>