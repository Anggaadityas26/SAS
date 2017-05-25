@extends('admin.layouts.template')

{{-- Template  --}}


@section('content')


<div class="clearfix"></div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Table Calon Karyawan <small>Custom design</small></h2>
      
      <div class="clearfix"></div>
    </div>

    <div class="x_content">

      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th>
                <input type="checkbox" id="check-all" class="flat">
              </th>
              <th class="column-title">Nomor KTP </th>
              <th class="column-title">Nama Lengkap </th>
              <th class="column-title">Jenis Kelamin</th>
              <th class="column-title">Email </th>
              <th class="column-title">Nomor Telp </th>
              <th class="column-title">Tanggal Daftar </th>
              <th class="column-title no-link last"><span class="nobr">Action</span>
              </th>
              <th class="bulk-actions" colspan="7">
                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>

          @foreach($calonkaryawan as $kar)

          <tbody>

            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class="">{{ $kar->no_ktp }}</td>
              <td class="">{{ $kar->nama_depan }} {{ $kar->nama_belakang }}</td>
              <td class="">{{ $kar->jenis_kelamin }}</td>
              <td class="">{{ $kar->email }}</td>
              <td class="">{{ $kar->nomor_telp }}</td>
              <td class="">{{ $kar->joining_date }}</td>

              <td>
                <a href="{{ url('detailkaryawan',$kar->no_ktp) }}">
                  <button type="button" class="btn btn-primary btn-xs">
                    <i class="fa fa-user"> </i> View Profile
                  </button>
                </a>
              </td>
              </td>
            </tr>
          </tbody>

          @endforeach

        </table>
      </div>

</div>
    </div>
    </div>

@endsection