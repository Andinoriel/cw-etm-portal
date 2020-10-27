@extends('layouts.default')

@section('title') TMD - Admin Panel @endsection
@section('description') NULL @endsection

@include('admin.control.faculty')
@include('admin.control.cathedra')
@include('admin.control.subject')

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">
            Admin Panel
        </h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row block-first">
        <div class="col-12 col-md-4 my-2">
            <div class="content">
                <a href="admin.control.faculty" style="cursor: pointer" data-toggle="modal"
                    data-target="#controlFaculty">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Control Faculty</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 my-2">
            <div class="content">
                <a href="admin.control.cathedra" style="cursor: pointer" data-toggle="modal"
                    data-target="#controlCathedra">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Control Cathedra</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 my-2">
            <div class="content">
                <a href="admin.control.subject" style="cursor: pointer" data-toggle="modal"
                    data-target="#controlSubject">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Control Subject</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-center double-color-line my-5">
        <div></div>
        <div></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-center">
        <div class="col-12 col-md-4 my-2">
            <div class="content">
                <a href="#">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="http://placehold.it/350x200">
                    <div class="content-details move-bottom">
                        <span class="roboto18 content-title">Generate Invitation</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#faculty_dropdown_u').change(function() {
            var faculty_id = $(this).val();

            $.ajax({
                url: 'admin/ajax_faculty/' + faculty_id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    if(response != null){
                        console.log(response)
                        $("#faculty_name_u").val(response.name) 
                        $("#faculty_thumbnail_u").val(response.thumbnail)
                    }
                }
            });        
        });
    });
</script>
@endsection