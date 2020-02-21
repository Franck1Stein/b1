<template>

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-around">
              <div class="col-md-10">
                  <div class="card card-primary">
                      <div class="card-header">
                          <h3 class="card-title">Add New Post</h3>
                      </div>
                      <form role="form">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="postId">Add New Post</label>

                                <input type="text" class="form-control" id="postId"
                                placeholder="Add New Post" v-model="form.title" name="title"
                                :class="{ 'is-invalid': form.errors.has('title') }">
                                <has-error :form="form" field="title"></has-error>
                            </div>
                            <div class="form-group">
                                <label for="descriptionId">Add New Description</label>

                                <input type="text" class="form-control" id="descriptionId"
                                placeholder="Add New Description" v-model="form.description" name="description"
                                :class="{ 'is-invalid': form.errors.has('description') }">
                                <has-error :form="form" field="description"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Select</label>

                                <input type="text" class="form-control" id="postId"
                                placeholder="Add New Post" v-model="form.title" name="title"
                                :class="{ 'is-invalid': form.errors.has('title') }">
                                <has-error :form="form" field="title"></has-error>
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
        name: "New",
        data() {
            return {
                  form: new Form({
                    title: '',
                    description: '',
                    cat_id: '',
                    photo: '',
                  })
            }
        },
        mounted() {
          s
        },
        computed: {
          s
        },
        methods: {
          s
        }
    }
</script>

<style>

</style>
