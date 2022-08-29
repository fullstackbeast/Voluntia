<?= $this->extend("layouts/dashboardlayout") ?>

<?= $this->section("content") ?>

<div class="p-5">
    <h1> Add A Volunteer </h1>

    <form action="/paddvolunteer" method="post">

        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" class="form-control">
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Add Volunteer</button>

    </form>
</div>

<?= $this->endSection() ?>
