<!DOCTYPE html>
<html>
  <head>
    <script>
      var pattern = /<(.*)>/;

      function validateForm() {
          let x = document.forms["myForm"]["searchItem"];
          if (x.value == "") {
              alert("Invalid Inout");
              return false;
          }
          else {
              if (pattern.test(x.value) == true) {
                  x.value = "";
                  return false;
              }
          }
      }     
    </script>
  </head>
  <body>

    <h2>3X03 Lab Test</h2>

    <form name="myForm" action="result.php" onsubmit="return validateForm()" method="post">
      Search: <input type="text" name="searchItem">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
