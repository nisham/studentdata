<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Student Record using php,jQuery and Twitter Bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <meta name="author" content="idevoc.com">
  <style>
    form{ margin:0px;}
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="span9" style="margin-top:100px;">
        <h2>Customer Records </h2>
        <!-- buttons -->
        <button class="btn btn-success" type="button" id="addnew"><i class="icon-plus icon-white"></i> 
          Add New Student
        </button>
        <button class="btn btn-inverse" type="button" id="clearall"><i class="icon-remove icon-white"></i> 
          Empty Records
        </button>
        <br><br>
        <table class="table table-bordered" id="records">
        <thead>
          <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
         <tbody>
        
        </tbody>
          </table>
      </div>
    </div>
  </div> 
  <!-- Clear All Warning Dialog -->
  <div id="warningModal" class="modal hide fade" role="dialog" aria-labelledby="warningLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="warningLabel">Warning!</h3>
    </div>
    <div class="modal-body">
      <p>This will delete all student data, Are you sure ?</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
      <button class="btn btn-primary btn-warning" id="accept-delete">Yes</button>
    </div>
  </div>
  <!-- End Clear All Warning Dialog --> 
  <!-- Form in Modal -->
  <div id="form-Modal" class="modal hide fade" role="dialog" aria-labelledby="formLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="formLabel">Add / Edit Student</h3>
    </div>
    <!-- From -->
    <form class="form-horizontal" id="student-form">
    <div class="modal-body">
          <div class="control-group">
            <label class="control-label" for="fname">First Name</label>
            <div class="controls">
               <input type="text" id="fname" name="fname" placeholder="First Name" required>
               <input type="hidden" id="customer_id">
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="phone">Phone</label>
            <div class="controls">
               <input type="tel" id="phone" placeholder="Phone" required>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
               <input type="email" id="email" placeholder="E-mail" required>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="lname">address</label>
            <div class="controls">
              <textarea id="address" placeholder="Address" required></textarea> 
            </div>
          </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-warning" type="reset" id="form-reset">Clear</button>
      <button type="submit" class="btn btn-success">Save</button>
    </div>
    </form>
    <!-- End Form -->
  </div>
  <!-- End Form Modal -->
  <!-- Delete Warning Dialog -->
  <div id="deleteModal" class="modal hide fade" role="dialog" aria-labelledby="warningLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="warningLabel">Warning!</h3>
    </div>
    <div class="modal-body">
      <p>Are you sure to delete?</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
      <button class="btn btn-primary btn-warning" id="accept-remove">Yes</button>
    </div>
  </div>
  <!-- End Delete Warning Dialog -->
  <!-- No data Warning Dialog -->
  <div id="noDataModal" class="modal hide fade" role="dialog" aria-labelledby="warningLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="warningLabel">Warning!</h3>
    </div>
    <div class="modal-body">
      <p>No data to clear.</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
  </div>
  <!-- End No data Warning Dialog -->
  <!-- Script is place here to speed up app -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap-modal.js"></script>
  <script src="js/app.js"></script>
</body>
</html>