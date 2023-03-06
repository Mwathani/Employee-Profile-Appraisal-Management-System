
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Evaluation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">

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
    padding: 2px;
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
  <h2>Evaluation</h2>
  <!-- Trigger the modal with a button -->
  <div class="btn1">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+Add New Evaluation
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Evaluation</h4>
        </div>
        <div class="modal-body">
          <form action="#" method="POST">
            <div>
              <div class="row">
              <div class="col1">
                <label for="emp">Employee</label> <br/>
                <input type="text" name="emp" class="form-control" placeholder="Select Employee"> <br/>

                <label for="task">Task</label> <br/>
                <input type="text" name="task" class="form-control" placeholder="Select Task"> <br/>

                <label for="rt">Ratings</label> <br/>

                <label for="efc">Efficiency</label> <br/>
                <select class="form-control">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select> 

              <br/>

                <label for="qt">Quality</label> <br/>
                <select class="form-control">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>

              <br/>

              </div>
              <div class="col2">
                <label for="tln">Timeliness</label> <br/>
                <select class="form-control">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>

              <br/>

                <label for="ac">Accuracy</label> <br/>
                <select class="form-control">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>

                <br>

                <label for="rm">Remarks</label> <br/>
                  <textarea class="form-control"></textarea> <br/>
              </div>
              </div>

              <br/>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
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
            <th class="table_th">Task</th>
            <th class="table_th">Name</th>
            <th class="table_th">Performance <br> Average</th>
            <th class="table_th">Action</th>
          </tr>
    </table>
  </div>
</div>

</body>
</html>

    
    
