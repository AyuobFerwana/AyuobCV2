@extends('dashboard.parent')

@section('title' , 'Education Index')


@section('style')

@endsection



@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Education Index</h3>

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
            <div class="card-body">
                <table class="table table-bordered text-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Expertise</th>
                            <th>Education Place</th>
                            <th>Link</th>
                            <th>Year</th>
                            <th>Content</th>

                            <th>الخبرة</th>
                            <th>مكان التعلم</th>
                            <th>الرابط</th>
                            <th>السنة</th>
                            <th>المحتوى</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($education as $educat)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $educat->expertise_en }}</td>
                            <td>{{ $educat->educaName_en }}</td>
                            <td>{{ $educat->link_en }}</td>
                            <td>{{ $educat->year_en }}</td>
                            <td>{{ $educat->summernote_en }}</td>

                            <td>{{ $educat->expertise_ar }}</td>
                            <td>{{ $educat->educaName_ar }}</td>
                            <td>{{ $educat->link_ar }}</td>
                            <td>{{ $educat->year_ar }}</td>
                            <td>{{ $educat->summernote_ar }}</td>


                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('education.edit', $educat->id) }}"
                                        class="btn btn-square btn-outline-success m-2 border-rad">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" onclick="performDestroy('{{ $educat->id }}', this)"
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
        confirmDestroy('/dashboard/education', id, reference);
    }
</script>


@endsection
