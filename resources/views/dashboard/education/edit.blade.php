@extends('dashboard.parent')

@section('title','Edit Education')

@section('style')


@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <form id="form">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Education
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <label for="Expertise">Expertise</label>
                        <input type="text" class="form-control" value="{{ $educat->expertise_en }}" id="expertise_en"
                            placeholder="Expertise_en">
                        <br>

                        <label for="Expertise">الخبرة</label>
                        <input type="text" class="form-control" value="{{ $educat->expertise_ar }}" id="expertise_ar"
                            placeholder="Expertise_ar">
                        <br>


                        <label for="Education">Education Place</label>
                        <input type="text" class="form-control" value="{{ $educat->educaName_en }}" id="educaName_en"
                            placeholder="Education Place_en"><br>

                        <label for="Education">مكان التلعم</label>
                        <input type="text" class="form-control" value="{{ $educat->educaName_ar }}" id="educaName_ar"
                            placeholder="Education Place_ar"><br>


                        {{-- link --}}
                        <label for="Link">Link</label>
                        <input type="text" class="form-control" value="{{ $educat->link_en }}" id="link_en"
                            placeholder="Link"><br>

                        <label for="Link">الرابط</label>
                        <input type="text" class="form-control" value="{{ $educat->link_ar }}" id="link_ar"
                            placeholder="الرابط"><br>

                        <label for="Year">Year</label>
                        <input type="text" class="form-control" value="{{ $educat->year_en }}" id="year_en"
                            placeholder="Year"><br>

                        <label for="Year">السنة</label>
                        <input type="text" class="form-control" value="{{ $educat->year_ar }}" id="year_ar"
                            placeholder="السنة"><br>

                        <label for="Content">Content</label>
                        <textarea id="summernote_en" name="summernote" placeholder="Place some text here">
                            {{ $educat->summernote_en }}
                        </textarea>

                        <label for="Content">المحتوى</label>
                        <textarea id="summernote_ar" name="summernote" placeholder="ضع بعض النص هنا">
                            {{ $educat->summernote_ar }}
                        </textarea>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>

                        Edit Education

                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-->
    </div>
</section>

@endsection

@section('script')
<script src="{{ asset('dash/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
        $('#summernote').summernote();
    });
</script>

<script>
    document.getElementById('form').addEventListener('submit', function(event) {
       event.preventDefault();
       let formData = new FormData();
       formData.append('_method' , 'PUT');
       formData.append('expertise_en', document.getElementById('expertise_en').value);
       formData.append('educaName_en', document.getElementById('educaName_en').value);
       formData.append('year_en', document.getElementById('year_en').value);
       formData.append('link_en', document.getElementById('link_en').value);
       formData.append('summernote_en', document.getElementById('summernote_en').value);

       formData.append('expertise_ar', document.getElementById('expertise_ar').value);
       formData.append('educaName_ar', document.getElementById('educaName_ar').value);
       formData.append('link_ar', document.getElementById('link_ar').value);
       formData.append('year_ar', document.getElementById('year_ar').value);
       formData.append('summernote_ar', document.getElementById('summernote_ar').value);

       axios.post('{{ route('education.update' , $educat->id) }}', formData)
           .then(function(response) {
               toastr.success(response.data.message);
               console.log(response);
               document.getElementById('form');
               setTimeout(function(){
                   window.location.href='{{ route('education.create') }}';
               }, 900);
           })
           .catch(function(error) {
               toastr.error(error.response.data.message);
               console.log(error);
           });
   });
</script>

@endsection
