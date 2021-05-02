<!DOCTYPE html>
<html>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script>
    $(document).ready(function () {

    var d = new Date();
    var dayOfWeek = d.getDay();
    var hour = d.getHours();
    var min = d.getMinutes();

    // open hours Monday - Friday 9am - 5:pm = open
    if (min <= 53) {
        $('.link').hide();
    }
    if (min > 54) {
      $('.link').show();
    }
    
    
    // closed any other time than above * working from 0am -9am but none other
    // if (dayOfWeek === 6 || dayOfWeek === 0 || hour <= 0 || hour >= 9) {
    //     $('.link').hide();
    // }
    });
  </script>
<body>

<h1>
  Submit here
</h1>

<a href="https://utdallas.app.box.com/f/eda29cc751654c84a37dd394b26038a9" target="_blank" class="link">Select Files</a>

</body>
</html>
