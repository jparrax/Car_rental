<div class="row">
    <!-- Menu -->
    <div class="col-sm-2 col-lg-1">
        <div class="nav flex-column nav-pills" id="v-pills-tab">
            <?php if (strcasecmp($currentUser->getRole(), 'Administrator') == 0): ?>
                <a class="nav-link active" id="users-tab" data-toggle="pill" href="#users-content">Users</a>
            <?php endif; ?>
            <a class="nav-link <?= $isCarsActive ?> " id="cars-tab" data-toggle="pill" href="#cars-content">Cars</a>
            <a class="nav-link" id="requests-tab" data-toggle="pill" href="#requests-content">Requests</a>
            <a class="nav-link" id="reports-tab" data-toggle="pill" href="#reports-content">Reports</a>
        </div>
    </div>
    <!-- Content -->
    <div class="col-sm-9 col-lg-10">
        <div class="tab-content" id="v-pills-tabContent">
            <?php if (strcasecmp($currentUser->getRole(), 'Administrator') == 0): ?>
                <div class="tab-pane fade show active container" id="users-content">
                    <?php include_once 'usersManagment.php'; ?>
                </div>
            <?php endif; ?>
            <div class="tab-pane fade <?= $carsTabClasses ?> container" id="cars-content">
                <?php include_once 'carsManagment.php'; ?>
            </div>
            <div class="tab-pane fade container" id="requests-content">
                <?php include_once 'requestsManagment.php'; ?>
            </div>
            <div class="tab-pane fade container" id="reports-content">
                <?php include_once 'reportsManagment.php'; ?>
            </div>
        </div>
    </div>
</div>
