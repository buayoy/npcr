@extends('layouts.master')
@section('content')
<div class="page-content">
	<div class="container-fluid">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				@if(session('feedback'))
				<div class="alert alert-primary alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Success!</strong> {{ session('feedback') }}
				</div>
				@endif
				@if(session('feedbackdelete'))
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Success!</strong> {{ session('feedbackdelete') }}
					</div>
				@endif
				<!-- Page-header start -->
				<div class="page-header">
					<div class="page-header-title">
						<h4><i class="ti-user"></i> จัดการผู้ใช้</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="#">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Page-header end -->
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<!-- Zero config.table start -->
							<div class="card">
								<div class="card-header">
									<a href="{{ route('users.create') }}">
										<button class="btn btn-primary"><i class="icon-plus"></i>เพิ่มผู้ใช้</button>
									</a>
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="simpletable" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th width="1%">No.</th>
													<th>ชื่อผู้ใช้งาน</th>
                                                    <th width="5%">ตำแหน่ง</th>
													<th width="5%">เบอร์โทร</th>
													<th width="5%"></th>
												</tr>
											</thead>
											<tbody>
												@php $i = 1; @endphp
												@foreach($queryusers as $queryuser)
												<tr>
													<td>{{$i}}</td>
													<td>{{$queryuser->title}}{{$queryuser->fname}} {{$queryuser->lname}}</td>
													<td>{{$queryuser->tbuserrole->userrolename}}</td>
													<td></td>
													<td>
														<a href="{{ route('users.edit',['id' => $queryuser->id]) }}"><button class="btn btn-warning btn-sm"><i class="ion-edit"></i>แก้ไข</button></a>
														<a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="approve();"><i class="ion-trash-a"></i>ลบ</a>
													</td>
												</tr>
												@php $i++; @endphp
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--.container-fluid-->
			</div>
			<!--.page-content-->
@endsection

@section('css') 

@endsection

@section('footerScript')
	<script src="{{asset('js/lib/datatables-net/datatables.min.js')}}"></script>
	<script src="{{asset('pages/data-table/js/data-table-custom.js') }}"></script>
	<script src="{{asset('js/loadingoverlay/loadingoverlay.js') }}"></script>
	<script src="{{asset('js/sweetalert.min.js') }}"></script>

	<script>
		$(document).ready(function() {
			document.getElementById('menuuser').classList.add('active');
            document.getElementById('menuuser').classList.add('pcoded-hasmenu');    
            document.getElementById('menuuser').classList.add('pcoded-trigger'); 
		});
	</script>
@endsection
