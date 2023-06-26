@extends('dashboard.parent')

@section('title' , 'About Index')


@section('style')

@endsection



@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">About Index</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Super_EN</th>
                            <th>Super_AR</th>
                            <th>Expertise_EN</th>
                            <th>Expertise_AR</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Program</th>
                            <th>File</th>
                            <th>Image</th>
                            <th>Setting</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $about->super_en }}</td>
                            <td>{{ $about->super_ar }}</td>
                            <td>{{ $about->expertise_en }}</td>
                            <td>{{ $about->expertise_ar }}</td>
                            <td>{{ $about->address }}</td>
                            <td>{{ $about->phone }}</td>
                            <td>{{ $about->email }}</td>
                            <td>{{ $about->program }}</td>
                            <td>{{ $about->file }}</td>
                            <td>{{ $about->image }}</td>


                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('about.edit', $about->id) }}"
                                        class="btn btn-square btn-outline-success m-2 border-rad">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" onclick="performDestroy('{{ $about->id }}', this)"
                                        class="btn btn-square btn-outline-danger m-2 border-rad">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection




@section('script')


{{-- Delete --}}
<script>
    function performDestroy(id, reference) {
        confirmDestroy('/dashboard/about', id, reference);
    }
</script>


@endsection
