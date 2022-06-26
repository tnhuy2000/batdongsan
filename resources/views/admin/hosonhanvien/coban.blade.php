@extends('layouts.admin')

@section('pagetitle')
	Thông tin cơ bản
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('public/vendor/datepicker/1.9.0/css/bootstrap-datepicker.min.css') }}" />
@endsection

@section('content')
	<div class="card">
		<div class="card-header"><a href="{{ route('admin.home') }}">Trang chủ quản trị</a> <i class="fal fa-angle-double-right"></i> <a href="{{ route('admin.hosonhanvien.home') }}">Hồ sơ nhân viên</a> <i class="fal fa-angle-double-right"></i> Thông tin cơ bản</div>
		<div class="card-body table-responsive">
			<table class="table table-bordered table-hover table-sm mb-0">
				<thead>
					<tr>
						<th width="15%">Hình ảnh</th>
						<th width="15%">Mã cán bộ</th>
						<th width="65%">Thông tin nhân viên</th>
						<th width="5%">Sửa</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td class="text-center">
							@if(!empty($hrm_nhanvien->HinhAnh))
								<img class="rounded" src="{{ $user_path . $hrm_nhanvien->HinhAnh }}" width="100" />
							@else
								<img class="rounded" src="{{ $path . 'noimage.png' }}" width="100" />
							@endif
						</td>
						<td>
							{{ $hrm_nhanvien->MaNhanVien }}
							@if($hrm_nhanvien->TrangThai == 0)
								<span class="d-block small text-danger font-weight-bold">Đã chuyển công tác</span>
							@endif
						</td>
						<td>
							<span class="text-primary font-weight-bold">{{ $hrm_nhanvien->HoVaTen }}</span>
							<span class="small">
								@if(!empty($hrm_nhanvien->NamSinh))
									<br />Năm sinh: {{ $hrm_nhanvien->NamSinh }}
								@endif
								@php $ngayVaoLam = null; @endphp
								@if(!empty($hrm_nhanvien->NgayVaoLam))
									@php $ngayVaoLam = Carbon\Carbon::createFromFormat('Y-m-d', $hrm_nhanvien->NgayVaoLam)->format('d/m/Y'); @endphp
									<br />Ngày vào làm: {{ $ngayVaoLam }}
								@endif
								
								@if(!empty($hrm_nhanvien->Email))
									<br />Email: {{ $hrm_nhanvien->Email }}
								@endif
								@if(!empty($hrm_nhanvien->DienThoai))
									<br />Điện thoại: {{ $hrm_nhanvien->DienThoai }}
								@endif
								
								@if(!empty($hrm_nhanvien->ThongTinThem))
									<br />Thông tin khác: {{ $hrm_nhanvien->ThongTinThem }}
								@endif
							</span>
						</td>
						<td class="text-center"><a href="#sua" data-toggle="modal" data-target="#myModalEdit" onclick="getCapNhat({{ $hrm_nhanvien->ID }}, '{{ $hrm_nhanvien->MaCanBo }}', '{{ $hrm_nhanvien->HoVaTen }}', '{{ $hrm_nhanvien->NamSinh }}', '{{ $ngayVaoLam }}', '{{ $hrm_nhanvien->Email }}', '{{ $hrm_nhanvien->DienThoai }}', '{{ $hrm_nhanvien->HinhAnh }}'); return false;"><i class="fal fa-edit"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<form action="{{ route('admin.hosonhanvien.coban.sua') }}" method="post">
		@csrf
		<input type="hidden" id="ID_edit" name="ID_edit" value="" />
		<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabelEdit">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabelEdit">Cập nhật hồ sơ</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="MaCanBo_edit"><span class="badge badge-secondary">1</span> Mã cán bộ</label>
								<input type="text" class="form-control @error('MaCanBo_edit') is-invalid @enderror" id="MaCanBo_edit" name="MaCanBo_edit" value="{{ old('MaCanBo_edit') }}" placeholder="Ví dụ: T50-15111-0531" />
								@error('MaCanBo_edit')
									<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
								@enderror
							</div>
							<div class="form-group col-md-6">
								<label for="HoVaTen_edit"><span class="badge badge-info">2</span> Họ và tên <span class="text-danger font-weight-bold">*</span></label>
								<input type="text" class="form-control @error('HoVaTen_edit') is-invalid @enderror" id="HoVaTen_edit" name="HoVaTen_edit" value="{{ old('HoVaTen_edit') }}" required />
								@error('HoVaTen_edit')
									<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
								@enderror
							</div>
							<div class="form-group col-md-2">
								<label for="NamSinh_edit"><span class="badge badge-secondary">3</span> Năm sinh</label>
								<input type="text" class="form-control @error('NamSinh_edit') is-invalid @enderror" id="NamSinh_edit" name="NamSinh_edit" value="{{ old('NamSinh_edit') }}" placeholder="yyyy" />
								@error('NamSinh_edit')
									<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
								@enderror
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Email_edit"><span class="badge badge-info">4</span> Email <span class="text-danger font-weight-bold">*</span></label>
								<input type="text" class="form-control @error('Email_edit') is-invalid @enderror" id="Email_edit" name="Email_edit" value="{{ old('Email_edit') }}" required />
								@error('Email_edit')
									<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
								@enderror
							</div>
							<div class="form-group col-md-6">
								<label for="DienThoai_edit"><span class="badge badge-secondary">5</span> Điện thoại</label>
								<input type="text" class="form-control @error('DienThoai_edit') is-invalid @enderror" id="DienThoai_edit" name="DienThoai_edit" value="{{ old('DienThoai_edit') }}" />
								@error('DienThoai_edit')
									<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
								@enderror
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="NgayVaoLam_edit"><span class="badge badge-secondary">6</span> Ngày vào làm</label>
								<div class="input-group">
									<input type="text" class="form-control DatePicker" id="NgayVaoLam_edit" name="NgayVaoLam_edit" value="{{ old('NgayVaoLam_edit') }}" placeholder="dd/mm/yyyy" />
									<div class="input-group-append">
										<div class="input-group-text"><i class="fal fa-calendar"></i></div>
									</div>
								</div>
							</div>
							
						</div>
						
						
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="HinhAnh_edit"><span class="badge badge-secondary">12</span> Hình ảnh đại diện</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text" id="ChonHinh_edit"><a href="#hinhanh">Chọn hình</a></div>
									</div>
									<input type="text" class="form-control" id="HinhAnh_edit" name="HinhAnh_edit" value="{{ old('HinhAnh_edit') }}" readonly />
								</div>
							</div>
							
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thực hiện</button>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection

@section('javascript')
	<script src="{{ asset('public/vendor/datepicker/1.9.0/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('public/vendor/datepicker/1.9.0/locales/bootstrap-datepicker.vi.min.js') }}"></script>
	<script src="{{ asset('public/vendor/ckfinder/3.5.1.1/ckfinder.js') }}"></script>
	<script>
		$('.DatePicker').datepicker({
			format: "dd/mm/yyyy",
			weekStart: 1,
			startDate: "1/1/1960",
			endDate: "31/12/2040",
			startView: 2,
			maxViewMode: 2,
			clearBtn: true,
			language: "vi",
			todayHighlight: true
		});
		
		function escapeHtml(unsafe)
		{
			return unsafe.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
		}
		
		var chonHinhEdit = document.getElementById('ChonHinh_edit');
		chonHinhEdit.onclick = function() { selectFileWithCKFinder('HinhAnh_edit'); };
		
		function selectFileWithCKFinder(elementId)
		{
			CKFinder.modal(
			{
				chooseFiles: true,
				displayFoldersPanel: false,
				width: 800,
				height: 500,
				onInit: function(finder) {
					finder.on('files:choose', function(evt) {
						var file = evt.data.files.first();
						var output = document.getElementById(elementId);
						output.value = escapeHtml(file.get('name'));
					});
					finder.on('file:choose:resizedImage', function(evt) {
						var output = document.getElementById(elementId);
						output.value = escapeHtml(evt.data.file.get('name'));
					});
				}
			});
		}
		
		function getCapNhat(id, maCanBo, hoVaTen, namSinh, ngayVaoLam, email, dienThoai, hinhAnh) {
			$('#ID_edit').val(id);
			$('#MaCanBo_edit').val(maCanBo);
			$('#HoVaTen_edit').val(hoVaTen);
			$('#NamSinh_edit').val(namSinh);
			$('#NgayVaoLam_edit').val(ngayVaoLam);
			
			$('#Email_edit').val(email);
			$('#DienThoai_edit').val(dienThoai);
			
			$('#HinhAnh_edit').val(hinhAnh);
		}
		
		@if($errors->has('MaCanBo_edit') || $errors->has('HoVaTen_edit') || $errors->has('NamSinh_edit') || $errors->has('Email_edit') || $errors->has('DienThoai_edit'))
			$('#myModalEdit').modal('show');
		@endif
	</script>
@endsection