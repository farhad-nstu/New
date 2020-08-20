<div class="main-panel">
        <div class="content-wrapper">
            
            <div class="card">
                <div class="card-header">
                    Add Department
                </div>

                <div class="card-body">
                    <form action="{{ route('depts.store') }}" method="post" enctype="multipart/form-data" style="border:1">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">                            
                        </div>
                       <button type="submit" class="btn btn-primary">Add Department</button>
                    </form>
                </div>
            </div>

        </div>
    </div>  