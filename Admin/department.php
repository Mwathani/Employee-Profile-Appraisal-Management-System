
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Admin/style.css">

  <!----Department------>

  <style>
  .btn1{
    text-align: right;
  }
  h4{
    color: black;
    background-color: #f2f2f2;
    font-weight: bold;
  }
  label{
    color: black;
  }
  h2{
    text-align: center;
    color: black;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: bold;
  }
   table{
    border: 1px solid black;
    border-collapse: collapse;
    background-color: #f2f2f2;
    color: black;
    font-size: 16px;
    margin: 20px;
    width: 100%;
   }
   tr,th{
    border: 1px solid black;
    padding: 8px;
    text-align: center;
   }
   th{
    background-color: black;
    color: white;
   }
  </style>
</head>
<body>

<div class="container">
  <h2>Department</h2>
  <!-- Trigger the modal with a button -->
  <div class="btn1">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+Add New Department
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Department</h4>
        </div>
        <div class="modal-body">
          <form action="#" method="POST">
            <div class="form-group">
                <label for="dept">Department</label> <br />
                <input type="text" name="dept" class="form-control"> <br />

                <label for="desc">Description</label> <br />
                <textarea class="form-control"></textarea>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" data-dismiss="modal">Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  
  
<hr/>
        <table>
            <tr>
              <th class="table_th">#No</th>
                <th class="table_th">Department</th>
                <th class="table_th">Description</th>
                <th class="table_th">Action</th>
            </tr>
        </table>
</div>

</body>
</html>

    
    
