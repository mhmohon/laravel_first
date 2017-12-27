@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Categories')

@section ('main_content')
	
	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Customer <small> All Customers Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Customer
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

	<!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet">
                <div class="portlet-heading portlet-default">
                    <h3 class="portlet-title text-dark">
                        Customer <small>Records</small>
                    </h3>
                    
                    <div class="clearfix"></div>
                </div>    
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                  
                        <div class="table-responsive">

                            <table id="datatable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                        <th>Category Description</th>                                        
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                

                                  
								@foreach ($categories as $cat)
                                    <tr>
                                        <td>{{ $cat->id }}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td>{{ $cat->description }}</td>
                                        
                                        <td class="text-center">
                                        	<a href="http://lily-tms.herokuapp.com/customers/2" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                        	<a href="http://lily-tms.herokuapp.com/customers/2/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
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
    </div>

@endsection

@section ('scripts')

	<script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Success'
                , text: 'New Dress Category Created'
                , position: 'top-right'
                , loaderBg: '#ff6849'
                , icon: 'success'
                , hideAfter: 8500
                , stack: 6
            })
        });
    </script>
@endsection