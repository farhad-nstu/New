<div class="card-body">

   <button class="btn btn success"><a href="{{ route('depts.create') }}">Add new</a></button>
                  
                  <table class="table table-hover table-striped" style="width: 70%; margin-top: 50px;" border="1" align="center" >
                     <tr>
                       <th>#</th>
                       <br>
                       <th>Title</th>                                      
                       <th>Action</th>
                     </tr>

                      @foreach($depts as $dept)

                        <tr>
                         <td>{{ $dept->id }}</td>
                         <td>{{ $dept->name }}</td>
                         <td>
                            <ul class="d-flex justify-content-center">
                                <li class="mr-3"><a href="" class="btn btn-primary">Edit</a></li>
                                <li><a href="" >Delete</a></li>
                            </ul>
                        </td>
                        </tr>

                     @endforeach 
                  </table>
               </div>
           