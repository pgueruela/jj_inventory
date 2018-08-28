<!--  Modal for adding product -->

<div class="modal fade" id="update-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
            <form method="post" action="process/update_product_process.php">
                <div class="row">
                  <input type="hidden" name="product_id" id="p_id" name="product_id">

                  <div class="col-md-12">
                    <div class="form-group">  
                      <label>Product name</label>
                      <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Enter product name">
                    </div>
                  </div>
                </div>
        
                <div class="row">
                  <div class="col-md-12">
                   <div class="form-group">  
                     <label>Product Price</label>
                     <input type="number" id="product_price" name="product_price" class="form-control" placeholder="Enter product price">
                  </div>
                  </div>
               </div>  

               <div class="row">
                  <div class="col-md-12">
                   <div class="form-group">  
                     <label>Product Quantity</label>
                     <input type="number" id="product_stock" name="product_quantity" class="form-control" placeholder="Enter product quantity">
                  </div>
                  </div>
               </div>  

                <!-- textarea -->
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                       <label>Remarks</label>
                       <textarea class="form-control" id="remarks" name="remarks" rows="4"></textarea>
                    </div>      
                </div>
              </div>

              <!-- Submit button -->
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="submit-product-update">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div> 
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
   $('#update-product').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var p_id = button.data('p_id');
          var c_id = button.data('c_id');
          var b_id = button.data('b_id');
          var product_name = button.data('product_name');
          var product_price = button.data('product_price');
          var product_stock = button.data('product_stock');
          var remarks = button.data('remarks');
          var modal = $(this)
          modal.find('.modal-body #p_id').val(p_id);
          modal.find('.modal-body #c_id').val(c_id);
          modal.find('.modal-body #b_id').val(b_id);
          modal.find('.modal-body #product_name').val(product_name);
          modal.find('.modal-body #product_price').val(product_price);
          modal.find('.modal-body #product_stock').val(product_stock);
          modal.find('.modal-body #remarks').val(remarks);
    }); 
</script>