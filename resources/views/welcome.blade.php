@extends('template')
@section('content')

 <!-- Default box -->
 <div class="card">
        <div class="card-header">
          <h3 class="card-title">Selamat Datang</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
              <script>
              document.querySelector('.btn-tool[data-card-widget="remove"]').addEventListener('click', function() {
                window.location.href = '/kependudukan';
                });
              </script>
            </button>
          </div>
        </div>
        <div class="card-body">
          Ini Adalah Website Kependudukan Berbasis CRUD
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Silahkan tutup pesan ini untuk ke halaman utama
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->


@endsection

