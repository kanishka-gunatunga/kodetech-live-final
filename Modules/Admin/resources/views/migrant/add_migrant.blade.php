@include('admin::layouts.dashboard-header')

<div class="mt-5">
<div  style="margin-left: 20px; margin-right: 20px;">
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
        @endif

        @if ($errors->any())
    <div class="alert alert-danger">
        <p>{{ $errors->first() }}</p>
    </div>
@endif
</div>
    <div class="my-4" style="margin-left: 20px; margin-right: 20px;">
        <form action="{{ url('admin/add-migrant') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-5 rounded bg-light" style="border-radius: 20px !important;">
                <h5 class="mb-4" style="font-weight: 600; font-family: Poppins, sans-serif;">Patient Details</h5>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="patientName" class="form-label label-css-form">Patient Name</label>
                        <input type="text" class="form-control custom-upload-field" id="patientName" name="name" placeholder="Patient Name" required />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="receiptNumber" class="form-label label-css-form">Passport Number / CDC Number</label>
                        <input type="text" class="form-control custom-upload-field" id="receiptNumber" name="receipt_number" placeholder="Passport Number / CDC Number" required />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="serialNumber" class="form-label label-css-form">Serial Number</label>
                        <input type="text" class="form-control custom-upload-field" id="serialNumber" name="serial_number" placeholder="Serial Number" required />
                    </div>
                </div>
                <h5 class="mt-5 mb-4 fw-bold">Patient Report Details</h5>
                <div class="row">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="mb-3 col-md-6">
                            <label for="pdf_page_{{ $i }}" class="form-label label-css-form">Upload Page {{ $i }}</label>
                            <div class="custom-input-group">
                                <label for="pdf_page_{{ $i }}" class="custom-upload-field">
                                    <span class="placeholder-text" id="file-name-{{ $i }}">Choose the PDF</span>
                                    <span class="input-icon">
                                        <img src="{{ asset('images/fileicon.png') }}" alt="Folder Icon" />
                                    </span>
                                </label>
                                <input type="file" class="d-none file-input" id="pdf_page_{{ $i }}" name="pdf_page_{{ $i }}" accept="application/pdf" required />
                            </div>
                        </div>
                    @endfor
                </div>
                <br>
                <div class="text-center text-md-end">
                    <button type="submit" class="btn form-submit-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".file-input").forEach(input => {
        input.addEventListener("change", function(event) {
            let fileName = event.target.files[0]?.name || "Choose the PDF";
            document.getElementById("file-name-" + event.target.id.split("_").pop()).textContent = fileName;
        });
    });
});
</script>
