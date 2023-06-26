@extends('dashboard.parent')

@section('title','Create Education')

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
                            Create Education
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{-- Expertise --}}
                        <label for="Expertise">Expertise</label>

                        <input type="text" class="form-control" id="expertise_en" placeholder="Expertise">
                        <br>

                        <label for="Expertise">الخبره</label>
                        <input type="text" class="form-control" id="expertise_ar" placeholder="الخبره">


                        <br>
                        {{-- Education --}}
                        <label for="Education">Education Place</label>

                        <input type="text" class="form-control" id="educaName_en" placeholder="Education Place"><br>

                        <label for="Education">مكان التعليم</label>

                        <input type="text" class="form-control" id="educaName_ar" placeholder="مكان التعليم"><br>

                        {{-- link --}}
                        <label for="Link">Link</label>
                        <input type="text" class="form-control" id="link_en" placeholder="Link"><br>

                        <label for="Link">رابط</label>
                        <input type="text" class="form-control" id="link_ar" placeholder="رابط"><br>


                        {{-- Year --}}
                        <label for="Year"> Year </label>
                        <input type="text" class="form-control" id="year_en" placeholder="Year"><br>

                        <label for="Year"> السنة </label>
                        <input type="text" class="form-control" id="year_ar" placeholder="سنة"><br>


                        {{-- Content --}}
                        <label for="Content"> Content </label>
                        <div class="card-body">
                            <textarea id="summernote_en" name="summernote_en" placeholder="Enter Some Text Here">

                            </textarea>
                        </div>
                        <br>
                        <label for="Content"> المحتوى </label>
                        <div class="card-body">
                            <textarea id="summernote_ar" name="summernote_ar"
                                placeholder="ضع بعض النص هنا">   </textarea>

                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Create</button>

                        Create Education To CV || Go to The Index here
                        <a href="{{ route('education.index') }}" class="btn btn-warning">index</a>

                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-->
    </div>
</section>

@endsection

@section('script')
<script>
    $(function () {
        $('#summernote_en').summernote();
        $('#summernote_ar').summernote();

    });
</script>

<script>
    document.getElementById('form').addEventListener('submit', function(event) {
       event.preventDefault();
       let formData = new FormData();
       formData.append('expertise_en', document.getElementById('expertise_en').value);
       formData.append('educaName_en', document.getElementById('educaName_en').value);
       formData.append('year_en', document.getElementById('year_en').value);
       formData.append('link_en', document.getElementById('link_en').value);
       formData.append('summernote_en', document.getElementById('summernote_en').value);


       formData.append('expertise_ar', document.getElementById('expertise_ar').value);
       formData.append('educaName_ar', document.getElementById('educaName_ar').value);
       formData.append('year_ar', document.getElementById('year_ar').value);
       formData.append('link_ar', document.getElementById('link_ar').value);
       formData.append('summernote_ar', document.getElementById('summernote_ar').value);

       axios.post('{{ route('education.store') }}', formData)
           .then(function(response) {
               toastr.success(response.data.message);
               console.log(response);
               document.getElementById('form').reset();
           })
           .catch(function(error) {
               toastr.error(error.response.data.message);
               console.log(error);
           });
   });
</script>

@endsection
