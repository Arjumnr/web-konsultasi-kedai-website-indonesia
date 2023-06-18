<div class="modal fade" id="ajaxModel" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="formInput" name="formInput">
                @csrf
                <input type="hidden" name="id" id="formId">
                <div class="modal-header">
                    <h5 class="modal-title"> <label id="headForm"></label></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label>No. Hp</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" required />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control select2" id="status" name="status" style="width:100%">
                                <option value="">--- Pilih Status ---</option>
                                <option value="ACC">ACC</option>
                                <option value="PENDING">PENDING</option>
                                <option value="PENDING">PENDING</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Deskrips</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="saveBtn" value="create">Save</button>
                    <button type="submit" class="btn btn-success" id="updateBtn" value="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('jsScript')
    <script type="text/javascript">
        //Tampilkan form input
        function createForm() {
            $('#formInput').trigger("reset");
            $("#headForm").empty();
            $("#headForm").append("Form Input");
            $('#saveBtn').show();
            $('#updateBtn').hide();
            $('#formId').val('');
            $('#ajaxModel').modal('show');

        }

        

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // var table = $('#tableJenis').DataTable({
        //     processing: true,
        //     serverSide: true,
        //     ajax: "{{ route('konsultasi.index') }}",
        //     columns: [{
        //             data: 'DT_RowIndex',
        //             name: 'DT_RowIndex'
        //         },
        //         {
        //             data: 'nama_barang',
        //             name: 'nama_barang'
        //         },
        //         {
        //             data: 'nama_pelanggan',
        //             name: 'nama_pelanggan'
        //         },
        //         {
        //             data: 'created_at',
        //             name: 'created_at'
        //         },
        //         {
        //             data: 'action',
        //             name: 'action',
        //             orderable: false,
        //             searchable: false
        //         },
        //     ],


        // });

        // if ($.fn.dataTable.isDataTable('#tableJenis')) {
        //     table = $('#tableJenis').DataTable();
        // } else {
        //     table = $('#tableJenis').DataTable({
        //         "ajax": "{{ route('konsultasi.index') }}",
        //         "columns": [{
        //                 "data": "nama_barang"
        //             },
        //             {
        //                 "data": "nama_pelanggan"
        //             },
        //             {
        //                 "data": "created_at"
        //             },
        //             {
        //                 "data": "action"
        //             },
        //         ]
        //     });
        // }




        // $('body').on('click', '.edit', function() {

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $('#btnSave').html('Update Data')

        //     var data_id = $(this).data('id');

        //     $.get("{{ route('konsultasi.index') }}" + '/' + data_id + '/edit', function(data) {
        //         console.log("data id = " + data.id);
        //         $('#modalHeading').html("Edit User");
        //         $('#btnSave').val("edit-data");
        //         $('#basicModal').modal('show');
        //         $('#data_id').val(data_id);
        //         $('#jenis').val(data.jenis);
        //         $('#nama_servis').val(data.nama_servis);
        //     })

        // });

        // $('#btnSave').click(function(e) {
        //     // console.log($('#formID').serialize());
        //     e.preventDefault();
        //     $(this).html('Sending..');
        //     $.ajax({
        //         data: $('#formID').serialize(),
        //         url: "{{ route('konsultasi.store') }}",
        //         type: "POST",
        //         dataType: 'json',
        //         success: function(data) {
        //             console.log(data);

        //             $('#formID').trigger("reset");
        //             $('#basicModal').modal('hide');
        //             $('.modal-backdrop').remove();

        //             if (data.status == 'success') {
        //                 Swal.fire({
        //                     position: 'center',
        //                     icon: 'success',
        //                     title: 'Berhasil',
        //                     showConfirmButton: false,
        //                     timer: 1500
        //                 }).then(function() {
        //                     table.draw();
        //                 })
        //             } else {
        //                 Swal.fire({
        //                     position: 'center',
        //                     icon: 'error',
        //                     title: 'Gagal',
        //                     showConfirmButton: false,
        //                     timer: 1500
        //                 }).then(function() {
        //                     table.draw();

        //                 })
        //             }
        //         },
        //         error: function(data) {
        //             console.log('Error:', data);
        //             Swal.fire({
        //                 position: 'center',
        //                 icon: 'error',
        //                 title: 'Data gagal ditambahkan',
        //                 showConfirmButton: false,
        //                 timer: 1500
        //             })
        //         }
        //     })
        // });



        // $('body').on('click', '.delete', function() {

        //     var id = $(this).data("id");

        //     Swal.fire({
        //         title: 'Apakah anda yakin?',
        //         text: "Data yang d dihapus tidak dapat dikembalikan!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Ya, hapus data!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             console.log(id);
        //             $.ajax({
        //                 type: "DELETE",
        //                 url: "{{ route('konsultasi.store') }}" + '/' + id,
        //                 dataType: 'json',

        //                 success: function(data) {
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'success',
        //                         title: 'Data berhasil dihapus',
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     }).then(function() {
        //                         table.draw();
        //                     })
        //                 },
        //                 error: function(data) {
        //                     console.log('Error:', data);
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'error',
        //                         title: 'Data gagal dihapus',
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     })
        //                 }
        //             })

        //         }
        //     })
        // });
    </script>
@endpush
