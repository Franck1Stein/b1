<template>

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-around">
              <div class="col-md-6">
                  <div class="card card-primary">
                      <div class="card-header">
                          <h3 class="card-title">Add New Category</h3>
                      </div>
                      <form role="form">

                        <div class="card-body">
                          <div class="form-group">
                            <label for="CategoryId">Add New Category</label>
                            <input type="text" class="form-control" id="categoryId" placeholder="Add New Category">
                          </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>

</template>

<script>

  export default {
    name: 'New'
  }

</script>

<style scoped>

</style>
