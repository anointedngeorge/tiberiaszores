<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/"
                target="_blank">{{ config('data.name') }}</a> {{ now()->year }}</p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

</div>

<!-- Required vendors -->

<script src="{{ asset('innap/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('innap/vendor/toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('innap/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('innap/vendor/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('innap/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('innap/vendor/apexchart/apexchart.js') }}"></script>

<script src="{{ asset('innap/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('innap/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('innap/js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('innap/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('innap/js/plugins-init/datatables.init.js') }}"></script>

<script src="{{ asset('innap/vendor/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('innap/js/custom.min.js') }}"></script>
<script src="{{ asset('innap/js/deznav-init.js') }}"></script>


<script>
    async function loadModalPage() {
        const container = document.querySelector("#page-container");
        const title = document.querySelector("#page-title");

        const ev = event.target;
        const page_title = ev.dataset.title;
        const url = ev.dataset.page;

        title.textContent = page_title;

        console.log(url);

        await fetch(url)
            .then(response => {
                if (!response.ok) throw new Error('Network error');
                return response.text();
            })
            .then(html => {
                container.innerHTML = html;
            })
            .catch(err => {
                console.log(err, "error loading");
                container.innerHTML = "<p>Error loading page.</p>";
            });

    }



    function validateInput(input) {
        // Remove invalid characters (anything not a-z or A-Z)
        input.value = input.value.replace(/[^a-zA-Z0-9]/g, '');

        // Check if input contains "@gmail.com" (case-insensitive)
        if (/@gmail\.com/i.test(input.value)) {
            input.value = input.value.replace(/@gmail\.com/i, '');
        }

        // Prevent numbers like 1212
        // if (/\d/.test(input.value)) {
        //     input.value = input.value.replace(/\d/g, '');
        // }
    }
</script>

</body>

</html>