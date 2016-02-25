<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ninja Assist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script>
  $(document).ready(function () {
    $(".hoverli").hover(
  function () {
     $('ul.file_menu').slideDown('medium');
  }, 
  function () {
     $('ul.file_menu').slideUp('medium');
  }
);

});
  </script>
  <style>
  #container
  {
    background: url(coding_dojo.png);
  }
  button{
    margin-right:20px;
  }
  .file_menu {
    display:none;
}

  </style>
  </head>
  <body>
  <div id="container" style='width:1000px;'>
    <div id="title" class='jumbotron'>
       <h3 style="display:inline;">Welcome, <?=($this->session->userdata('name'))?>!</h3>
       <a href="/users/logout" style="margin-left:10px;" class='pull-right'>Logout</a>
    </div><!-- end of title-->
    <div id="top_content" class=".col-md-9 panel panel-default">
       <h2>Issues:</h2>
        <ol class="list-group">
          <li class="list-group-item">
            <a href="">Having trouble with Bootstrap</a>
            <span class="badge">12</span>
            
            <button type="button" class="pull-right btn-md ">
              <a href="">JOIN</a>
            </button>
          </li>
          <li class="list-group-item">
            <a href="">Not understanding directory of CI</a>
            <span class="badge">12</span>

            <button type="button" class="pull-right btn-md ">
              <a href="">JOIN</a>
            </button>
          </li>  
          <li class="list-group-item">
            <a href="">JOINS LEFT JOIN SELF JOINS</a>
            <span class="badge">12</span>
            <button type="button" class="pull-right btn-md ">
              <a href="">JOIN</a>
            </button>
          </li>
        </ol>
    </div><!-- end of top content-->
    <div class="form-group">
      <div class="form-group">
      <label for="usr">Topic Summary:</label>
      <input type="text" class="form-control" id="usr">
    </div>
      <label for=>Add situation:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
      <input type="submit" class="btn btn-info pull-right" value="Submit Button">
    </div>

    <div><!--end of container-->


 
</body>
</html>