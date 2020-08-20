<div class="main-panel">
        <div class="content-wrapper">
            
            <div class="card">
                <div class="card-header">
                    Update Test
                </div>

                <div class="card-body">
                    <form action="{{ route('test.update', $test->id) }}" method="post" enctype="multipart/form-data" style="border:1">
                        {{ csrf_field() }}

                       

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $test->name }}">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Roll</label>
                            <input type="roll" name="roll" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $test->roll }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Picture</label>
                            <input type="file" name="picture" >
                            
                        </div>


                        

                        

                        <div class="form-group">
                        

                       <button type="submit" class="btn btn-primary">Update Test</button>
                    </form>
                </div>
            </div>

        </div>
    </div>  