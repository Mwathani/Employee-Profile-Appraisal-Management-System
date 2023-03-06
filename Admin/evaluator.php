
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Evaluator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!----Evaluator------>

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
      .row div {
        width: 40%;
        display: inline-block;
      }
      .col1 {
        float: left;
        margin-left: 20px;
      }
      .col2{
        float: right;
        margin-right: 20px;
      }
    </style>
</head>
<body>

  <div class="container">
    <h2>Evaluator List</h2>

  <!-- Trigger the modal with a button -->
  <div class="btn1">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+Add New Evaluator
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Evaluator</h4>
        </div>

    <form action="#" method="POST">
      <div class="form-group">
          <div class="row">
          <div class="col1">
            <label for="fn">First Name</label> <br/>
            <input type="text" name="fn" class="form-control"> <br/>

            <label for="mn">Middle Name(optional)</label> <br/>
            <input type="text" name="mn" class="form-control"> <br/>

            <label for="ln">Last Name</label> <br/>
            <input type="text" name="ln" class="form-control"> <br/>

            <label for="image">Photo</label> <br/>
            <input type="file" name="image" class="form-control"> <br/>

          </div>
          <div class="col2">
            <label for="email">Email</label> <br/>
            <input type="email" name="email" class="form-control"> <br/>

            <label for="pwd">Password</label> <br/>
            <input type="password" name="pwd" class="form-control"> <br/>

            <label for="cpwd">Confirm Password</label> <br/>
            <input type="password" name="cpwd" class="form-control"> <br/>
          </div>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary" data-dismiss="modal">Save</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
          </div>

    </form>
      
    </div>
  </div>
  
</div>

<hr/>
        <table>
            <tr>
              <th class="table_th">#No</th>
                <th class="table_th">Name</th>
                <th class="table_th">Email</th>
                <th class="table_th">Action</th>
            </tr>
        </table>

</body>
</html>

    
    
