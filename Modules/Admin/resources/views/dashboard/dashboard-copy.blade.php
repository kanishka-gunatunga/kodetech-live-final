@include('admin::layouts.dashboard-header');



<div class="mt-4 ">
    <!-- Search bar -->
    <div class="seach-bar-container-gov-dash">
        <div class="seach-bar">
            <span style="margin-right: 10px; color: #888;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zm-5.242 1.1a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z" />
                </svg>
            </span>
            <input type="text" id="searchInput" class="form-control" placeholder="Search patient name or Receipt number or Serial number"
                style="border: none; outline: none; flex-grow: 1;" />
            <button id="searchBtn" class="btn"
                style="padding: 5; border: none; outline: none; background-color: #FFFFFF; border-radius: 100%; color: #0B8FAC; box-shadow: 1px 1px 4px 0px #00000040;">
                &#8594;
            </button>
        </div>

        <button class="btn new-migrant-btn" onclick="window.location.href='{{ url('admin/add-migrant') }}'" >+ New Migrant</button>
    </div>

    <!-- Recently Added Patients -->
    <div class="my-4" style="margin-left: 20px; margin-right: 20px;">
        <div class="table-css">
            <h5 id="searchResultTitle" class="mb-5 fw-bold" style="display: none;">Search Result</h5>
            <h5 id="recentPatientsTitle" class="mb-5 fw-bold">Recently Added Patients</h5>
            
            @foreach ($migrant as $item)
            <div class="mt-1 search-result-container result-row" data-name="{{ $item->name }}" data-passport="{{ $item->passport_no }}" data-serial="{{ $item->serial_no }}">
                <div id="result-row" class="result-row">
                    <div class="col-md-3 d-flex align-items-center patient-name">{{ $item->name }}</div>
                    <div class="col-md-3 d-flex align-items-center receipt-number">{{ $item->passport_no }}</div>
                    <div class="col-md-3 d-flex align-items-center receipt-number">{{ $item->serial_no }}</div>
                    <a href="{{ asset('uploads/' . $item->merge_pdf) }}" class="gap-2 btn download-btn btn-success" download>
                        <img src="{{ asset('public/images/downicon.svg') }}" alt="Download Icon" width="20" height="20" />
                        Download
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .btn-success {
        --bs-btn-bg: #0B8FAC;
    }
</style>

<script>
    document.getElementById("searchBtn").addEventListener("click", function () {
        let searchValue = document.getElementById("searchInput").value.toLowerCase().trim();
        let rows = document.querySelectorAll(".search-result-container");
        let hasResults = false;

        rows.forEach(row => {
            let name = row.getAttribute("data-name").toLowerCase();
            let passport = row.getAttribute("data-passport").toLowerCase();
            let serial = row.getAttribute("data-serial").toLowerCase();

            if (name.includes(searchValue) || passport.includes(searchValue) || serial.includes(searchValue)) {
                row.style.display = "flex";
                hasResults = true;
            } else {
                row.style.display = "none";
            }
        });

        document.getElementById("recentPatientsTitle").style.display = hasResults ? "none" : "block";
        document.getElementById("searchResultTitle").style.display = hasResults ? "block" : "none";
    });

    document.getElementById("searchInput").addEventListener("input", function () {
        if (this.value.trim() === "") {
            document.querySelectorAll(".search-result-container").forEach(row => row.style.display = "flex");
            document.getElementById("recentPatientsTitle").style.display = "block";
            document.getElementById("searchResultTitle").style.display = "none";
        }
    });
</script>
