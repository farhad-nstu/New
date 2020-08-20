<div class="main-panel">
        <div class="content-wrapper">
            
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>

                <div class="card-body">
                    <form action="{{ route('tests.store') }}" method="post" enctype="multipart/form-data" style="border:1">
                        {{ csrf_field() }}

                       

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Roll</label>
                            <input type="roll" name="roll" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter roll">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Picture</label>
                            <input type="file" name="picture" >
                            
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Department</label>
                            <select class="form-control" name="dept_id">
                                @foreach($depts as $dept)
                                    <option value='{{ $dept->id }}'>{{ $dept->name }}</option>
                                @endforeach

                            </select>                            
                        </div>

                        

                        <div class="form-group">
                        

                       <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>

        </div>
    </div>  