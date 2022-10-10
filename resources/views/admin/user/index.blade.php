@extends('admin.layouts.master')
@section('page-title')
	All Category
@endsection
@section('main-content')
<div class="right_col" role="main">
	
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Page<small>All Category</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <?php if (session()->has('message')): ?>
                    
                  <div class="alert alert-success" id="success">
                      @php
                          $error = Session::get('message');
                          echo $error;
                      @endphp
                  </div>
                  <?php endif ?>
                  
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID</th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Created At</th>
                            <th class="column-title no-link last"><span class="nobr">Actions</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $key=>$user)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{$key+1}}</td>
                            <td class=" ">{{$user->name}}</td>
                            <td class=" ">{{$user->email}}</td>
                            <td class=" ">{{$user->created_at}}</td>
                            <td class=" ">
                            <a href="{{route('admin.delete',$user->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?')"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                              
                          </tr>
                          @endforeach
                          
                        </tbody>
                        
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
</div>
<script>
    $("#success").show();
    setTimeout(function() {
        $("#success").hide();
    }, 5000);
    // this can also be use $("#eee").show().delay(5000).fadeOut();
</script>
@endsection