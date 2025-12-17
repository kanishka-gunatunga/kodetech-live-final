@include('admin::layouts.dashboard-header')

<!-- Include this form section in your existing HTML structure -->
<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="shadow-sm card">
                <div class="text-center text-white card-header bg-primary">
                    <h5>Upload Documents</h5>
                </div>
                <div class="card-body">
                <form action="{{ url('admin/add-migrant') }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <!-- Name Input -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>

                        <!-- Receipt Number Input -->
                        <div class="mb-3">
                            <label for="receiptNumber" class="form-label">Receipt Number</label>
                            <input type="text" class="form-control" id="receiptNumber" name="receipt_number" placeholder="Enter receipt number" required>
                        </div>

                        <!-- Serial Number Input -->
                        <div class="mb-3">
                            <label for="serialNumber" class="form-label">Serial Number</label>
                            <input type="text" class="form-control" id="serialNumber" name="serial_number" placeholder="Enter serial number" required>
                        </div>

                        <!-- PDF Upload Fields -->
                        <div class="mb-3">
                            <label class="form-label">Upload PDF Files</label>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="pdf_page_1" accept="application/pdf" required>
                                        <small class="text-muted">Page 1</small>
                                    </div>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="pdf_page_2" accept="application/pdf" required>
                                        <small class="text-muted">Page 2</small>
                                    </div>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="pdf_page_3" accept="application/pdf" required>
                                        <small class="text-muted">Page 3</small>
                                    </div>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="pdf_page_4" accept="application/pdf" required>
                                        <small class="text-muted">Page 4</small>
                                    </div>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="pdf_page_5" accept="application/pdf" required>
                                        <small class="text-muted">Page 5</small>
                                    </div>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="pdf_page_6" accept="application/pdf" required>
                                        <small class="text-muted">Page 6</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>


input[type="file"] {
    display: flex;
}
</style>
