<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="post" id="updateProductForm">
        @csrf
        <input type="hidden" id="up_id">

        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="errMsgContainer mb-3">

                </div>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" name="up_name" id="up_name" placeholder="product name">
                </div>
                <div class="form-group">
                    <label for="name">Product Price</label>
                    <input type="text" class="form-control" name="up_price" id="up_price" placeholder="product price">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update_product">Update products</button>
              </div>
            </div>
        </div>
    </form>
</div>
