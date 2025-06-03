<section class="section is-fullheight">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="table-container">
                    <table id="accomplishmentRegistryTable" class="table is-striped is-narrow is-bordered is-hoverable is-fullwidth">
                        <thead class="has-text-centered">
                            <tr>
                                <th class="is-vcentered" rowspan="2">Day</th>
                                <th class="is-vcentered" colspan="2">Time</th>
                                <th class="is-vcentered" rowspan="2">Accomplishment</th>
                                <th class="is-vcentered" rowspan="2">Status</th>
                                <th class="is-vcentered" rowspan="2">Actions</th>
                            </tr>
                            <tr>
                                <th class="is-vcentered">AM</th>
                                <th class="is-vcentered">PM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="is-vcentered">1</td>
                                <td class="is-vcentered">7:00 - 12:01</td>
                                <td class="is-vcentered">12:16 - 5:01</td>
                                <td>
                                    <ul>
                                        <li>Encoding of liquidations</li>
                                        <li>Editing tarpaulin layout</li>
                                    </ul>
                                </td>
                                <td class="is-vcentered">Done</td>
                                <td class="is-vcentered">
                                    <button class="button is-info is-small" aria-label="Edit accomplishment">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </button>
                                    <button class="button archive-btn is-danger is-small" aria-label="Archive accomplishment">
                                        <span class="icon">
                                            <i class="fas fa-archive"></i>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Archive Confirmation Modal -->
<div id="archiveAccomplishmentModal" class="modal" role="dialog" aria-modal="true" aria-labelledby="archiveModalTitle" aria-describedby="archiveModalDesc">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="is-columns">
            <div class="column is-7 is-10-mobile m-auto">
                <div class="card has-text-centered">

                    <div class="card-content">
                        <div class="content" id="archiveModalDesc">
                            <h4 class="title is-6" id="archiveModalTitle">Archive this accomplishment?</h4>
                            <p>This action will temporarily move the accomplishment to your archive, where you can restore it later if needed.</p>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item has-text-danger" id="confirmArchiveAccomplishment">Archive</a>
                        <a href="#" class="card-footer-item" id="cancelArchive">Cancel</a>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        const $modal = $('#archiveAccomplishmentModal');

        // Open modal on archive button click
        $('.archive-btn').on('click', function() {
            $modal.addClass('is-active');
        });

        // Close modal on clicking close button, cancel link, or modal background
        $('#closeModal, #cancelArchive, .modal-background').on('click', function(e) {
            e.preventDefault();
            $modal.removeClass('is-active');
        });

        // Confirm archive action
        $('#confirmArchiveAccomplishment').on('click', function(e) {
            e.preventDefault();
            $modal.removeClass('is-active');

            Toastify({
                text: "Item archived successfully!",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
            }).showToast();

            // Add your archive logic (e.g. AJAX) here
        });
    });
</script>