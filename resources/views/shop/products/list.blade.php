@extends('master')

@section('content')
<!-- All Products Block -->
<div class="block full">
    <!-- All Products Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>All</strong> Products</h2>
    </div>
    <!-- END All Products Title -->

    <!-- All Products Content -->
    <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th class="text-center" style="width: 70px;">ID</th>
                <th>Product Name</th>
                <th class="text-right hidden-xs">Price</th>
                <th class="hidden-xs">Status</th>
                <th class="hidden-xs text-center">Added</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8798</strong></a></td>
                <td><a href="page_ecom_product_edit.html">Product #98</a></td>
                <td class="text-right hidden-xs"><strong>$1351,00</strong></td>
                <td class="hidden-xs">
                    <span class="label label-success">Available (227)</span>
                </td>
                <td class="hidden-xs text-center">18/02/2014</td>
                <td class="text-center">
                    <div class="btn-group btn-group-xs">
                        <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8797</strong></a></td>
                <td><a href="page_ecom_product_edit.html">Product #97</a></td>
                <td class="text-right hidden-xs"><strong>$618,00</strong></td>
                <td class="hidden-xs">
                    <span class="label label-danger">Out of Stock</span>
                </td>
                <td class="hidden-xs text-center">21/08/2014</td>
                <td class="text-center">
                    <div class="btn-group btn-group-xs">
                        <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- END All Products Content -->
</div>
<!-- END All Products Block -->
@endsection









{{-- <div class="block full">
    <div class="table-responsive">
        <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">
            <div class="row">
                <div class="col-sm-6 col-xs-5">
                    <div class="dataTables_length" id="example-datatable_length">
                        <label>
                            <select name="example-datatable_length" aria-controls="example-datatable" class="form-control">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="-1">All</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-7">
                    <div id="example-datatable_filter" class="dataTables_filter">
                        <label>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" aria-controls="example-datatable">
                                <span class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid">
                <thead>
                    <tr role="row">
                        <th class="text-center sorting_desc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 110px;" aria-sort="descending">ID</th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 157px;"><i class="gi gi-user"></i></th><th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Client: activate to sort column ascending" style="width: 194px;">Client</th>
                        <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 366px;">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 345px;">Subscription</th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 229px;">Actions</th></tr>
                </thead>
                <tbody>
                    <tr role="row" class="odd">
                        <td class="text-center sorting_1">60</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client60</a></td>
                        <td class="">client60@company.com</td>
                        <td class=""><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">59</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client59</a></td>
                        <td class="">client59@company.com</td>
                        <td class=""><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="text-center sorting_1">58</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client58</a></td>
                        <td class="">client58@company.com</td>
                        <td class=""><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">57</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client57</a></td>
                        <td class="">client57@company.com</td>
                        <td class=""><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="text-center sorting_1">56</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client56</a></td>
                        <td class="">client56@company.com</td>
                        <td class=""><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">55</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client55</a></td>
                        <td class="">client55@company.com</td>
                        <td class=""><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="text-center sorting_1">54</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client54</a></td>
                        <td class="">client54@company.com</td>
                        <td class=""><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">53</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client53</a></td>
                        <td class="">client53@company.com</td>
                        <td class=""><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="text-center sorting_1">52</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client52</a></td>
                        <td class="">client52@company.com</td>
                        <td class=""><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="text-center sorting_1">51</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td class=""><a href="javascript:void(0)">client51</a></td>
                        <td class="">client51@company.com</td>
                        <td class=""><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-5 hidden-xs">
                    <div class="dataTables_info" id="example-datatable_info" role="status" aria-live="polite">
                        <strong>1</strong>-<strong>10</strong> of <strong>60</strong>
                    </div>
                </div>
                <div class="col-sm-7 col-xs-12 clearfix">
                    <div class="dataTables_paginate paging_bootstrap" id="example-datatable_paginate">
                        <ul class="pagination pagination-sm remove-margin">
                            <li class="prev disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i> </a></li>
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="javascript:void(0)">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)">4</a></li>
                            <li><a href="javascript:void(0)">5</a></li>
                            <li class="next"><a href="javascript:void(0)"> <i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}