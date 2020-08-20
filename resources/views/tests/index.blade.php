<div class="card-body">

   <button class="btn btn success"><a href="{{ route('tests.create') }}">Add new</a></button>
                  
                  <table class="table table-hover table-striped" style="width: 70%; margin-top: 50px;" border="1" align="center" >
                     <tr>
                       <th>#</th>
                       <br>
                       <th>Title</th>                   
                       <th>Roll</th>
                       <th>Department</th>
                       <th>Picture</th>                      
                       <th>Action</th>
                     </tr>

                      @foreach($tests as $test)

                        <tr>
                         <td>{{ $test->id }}</td>
                         <td>{{ $test->name }}</td>
                         <td>{{ $test->roll }}</td>
                         <td>
                            @foreach($depts as $dept)
                                @if( $dept->id == $test->dept_id)
                                   {{ $dept->name }}
                                @endif   
                            @endforeach
                          </td>
                         <td><img src="{{ $test->picture }}" style="height: 60px;width: 60px;"></td>
                         <td>
                                   <ul class="d-flex justify-content-center">
                                       <li class="mr-3"><a href="{{ route('test.edit', $test->id) }}" class="btn btn-primary">Edit</a></li>

                                       <li><a href="{{ route('test.delete', $test->id) }}" >Delete</a></li>

                                   </ul>
                               </td>
                        </tr>

                     @endforeach 
                  </table>
               </div>
           