@extends('dashboard.parent')

@section('title','Create about')

@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<style>
    .bootstrap-tagsinput {
        width: 100%;
        height: auto;
        min-height: calc(2.25rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #293954; /* Change to your desired background color */
        background-clip: padding-box;
        border: 1px solid #575a78; /* Change to your desired border color */
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .bootstrap-tagsinput input {
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #033567;
        background-color: #d6f7ff; /* Change to your desired input background color */
        background-clip: padding-box;
        border: 1px solid #3091b9; /* Change to your desired input border color */
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>

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
                            About
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                       {{-- Admin Name --}}
                       <label for="Admin">Admin Name</label>

                       <input type="text"  name="super_en" class="form-control" id="super_en" placeholder="AdminNA">
                       <br>

                       <label for="Admin">أسم المسؤل </label>

                       <input type="text"  name="super_ar" class="form-control" id="super_ar" placeholder="أسم المسؤل">
                       <br>


                        {{-- Expertise --}}
                        <label for="Expertise">Expertise</label>

                        <input type="text" name="expertise_en" class="form-control" id="expertise_en" placeholder="Expertise">
                        <br>

                        <label for="Expertise">الخبرات</label>

                        <input type="text" name="expertise_ar" class="form-control" id="expertise_ar" placeholder="الخبرات">
                        <br>


                        <label for="Address">Address</label>

                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                        <br>

                        <label for="Phone">Phone</label>

                        <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
                        <br>


                        <label for="Email">Email</label>

                        <input type="text" name="email" class="form-control" id="email" placeholder="email@example.com">
                        <br>


                        <div class="form-group">
                            <label for="programming">Programming languages</label>
                            <input type="text" name="program" class="form-control" id="program" data-role="tagsinput"
                                placeholder="Programming">
                        </div>



                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Choose Image</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Create</button>

                        Create About To CV || Go to The Index here
                        <a href="{{ route('about.index') }}" class="btn btn-warning">index</a>

                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-->
    </div>
</section>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


<script>
    $(document).ready(function() {
        var programmerData = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('language'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: [
                { language: 'JavaScript' },
                { language: 'Python' },
                { language: 'Java' },
                { language: 'C#' },
                { language: 'Ruby' },
                // Add more programming languages as needed
            ]
        });
        programmerData.initialize();

        $('#program').tagsinput({
            typeaheadjs: {
                name: 'programmerdata',
                displayKey: 'language',
                valueKey: 'language',
                source: programmerData.ttAdapter()
            }
        });
    });

</script>

<script>
    document.getElementById('form').addEventListener('submit', function(event) {
       event.preventDefault();

       let aboutForm = document.getElementById('form');
       let formData = new FormData(aboutForm);

       axios.post('{{ route('about.store') }}', formData)
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
