<?php #print_r($resp);die; ?>
<h1 class="">Welcome to Stock Management System</h1>
<hr>
<div class="row">
    
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">PO Records </span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `purchase_order_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-boxes"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Receiving Records</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `receiving_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-exchange-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">BO Records</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `back_order_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-undo"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Return Records</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `return_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-invoice-dollar"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Sales Records</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `sales_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-truck-loading"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Suppliers</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `supplier_list` where `status` = 1")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Items</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `item_list` where `status` = 1")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <?php if($_settings->userdata('type') == 1): ?>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-teal elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `users` where id != 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <?php endif; ?>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Developers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class='col-sm-6'>
              <img src="<?php echo base_url.'uploads/developer.jpg' ?>" style="width:200px;" alt="User Image">
            </div>
            <div class='col-sm-6'>
              <h4>Mehar Sahani</h4>
              <h6>+91 8766293800</h6>
              <h6>sahnimehar@gmail.com</h6>
              <h6>Manipal University, Jaipur</h6>
            </div>
              
          </div>
      </div>
      
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        // Trigger modal on page load
        $('#exampleModal').modal('show');
    });
</script>

