<!--index.php !-->

<html>
 <head>
  <title>Ajax Crud on Dynamically Add Remove Input Fields in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <br />
   <h2 align="center">Ajax Crud on Dynamically Add Remove Input Fields in PHP</h2><br />
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-info">Add</button>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>

<div id="dynamic_field_modal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="post" id="add_name">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add Details</h4>
    </div>
    <div class="modal-body">
     <div class="form-group">
           <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" />
          </div>
          <div class="table-responsive">
           <table class="table" id="dynamic_field">

           </table>
          </div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="hidden_id" id="hidden_id" />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
  </div>
 </div>

</div>



