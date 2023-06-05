
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4 class="text-center" >
                    <i class="fas fa-globe"></i>SHOPNO PRIVATE LTD.
                    <small class="float-right">Date: 29/06/2022</small>
                  </h4>
                  <h6 class="text-center">NOAKHALI,HATIYA</h6>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Biplab Uddin.</strong><br>
                    795 Oskhali, Hatiya 600<br>
                    Noakhali, CA 94107<br>
                    Phone: (+88) 01762726907<br>
                    Email: biplabuddin990@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>Saiful ISlam</strong><br>
                    795 Shodoha, Satkaniya 600<br>
                    Chittagong, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: saiful@gmail.com.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 06/29/2022<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <!-- /.row -->
              <div class="card-body">
                <?php include('message.php'); ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $result=$mysqli->common_select("invoice");
                        if(!$result['error']){
                            foreach($result['data'] as $i=>$invoice){
                    ?> 
                            <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $invoice->product_name ?></td>
                                <td><?= $invoice->price ?></td>
                                <td><?= $invoice->qty ?></td>
                                <td><?= $invoice->sub_total ?></td>
                            </tr>
                    <?php  }
                        }
                    ?>
                  
                  
                  </tfoot>
                </table>
              </div>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="assets/dist/img/credit/visa.png" alt="Visa">
                  <img src="assets/dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="assets/dist/img/credit/american-express.png" alt="American Express">
                  <img src="assets/dist/img/credit/paypal2.png" alt="Paypal">

                  
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 06/29/2022</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>25000.00</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>10.34</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice_print.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('include/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
