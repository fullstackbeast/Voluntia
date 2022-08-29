<?= $this->extend("layouts/dashboardlayout") ?>

<?= $this->section("content") ?>

<div class="p-5">
    <h1> Edit A Volunteer </h1>

    <form action="<?='/peditvolunteer/'.$volunteer->id?>" method="post">

        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" class="form-control" value="<?= old('first_name', esc($volunteer->first_name)) ?>">
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control" value="<?= old('last_name', esc($volunteer->last_name)) ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= old('email', esc($volunteer->email)) ?>">
        </div>

        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Save</button>
        <a href="/volunteers">
            <button type="button" class="btn waves-effect waves-light btn-rounded btn-danger">Cancel</button>
        </a>

    </form>
</div>

<?= $this->endSection() ?>
