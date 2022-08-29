<?= $this->extend("layouts/dashboardlayout") ?>

<?= $this->section("styles") ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css">
<link href="/css/drop.css" rel="stylesheet">

<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="p-5">
    <h1> Edit A Task </h1>

    <form action="<?='/pedittask/'.$task->id?>" method="post">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control"  value="<?= old('title', esc($task->title)) ?>">
        </div>

        <div class="form-group">
            <label for="volunteer">Volunteer</label>
            <select class="selectpicker form-control border-0 mb-1 px-4 py-4 rounded shadow" name="volunteer" id="volunteer">
                <?php foreach ($options as $option):?>
                    <option selected="<?=$option->value == $task->user_id?>" value="<?= $option->value?>"><?= $option->text?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Save</button>
        <a href="/tasks">
            <button type="button" class="btn waves-effect waves-light btn-rounded btn-danger">Cancel</button>
        </a>
    </form>
</div>


<?= $this->endSection() ?>
