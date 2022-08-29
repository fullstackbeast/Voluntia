<?= $this->extend("layouts/dashboardlayout") ?>

<?= $this->section("content") ?>

    <div>

        <div class="p-4" style="display: flex; justify-content: space-between; width: 100%">
            <h1>All Tasks</h1>

            <?php $loggedinUser = service('auth')->getCurrentUser()?>

            <?php if($loggedinUser->role=='admin'):?>

                <a href="/addtask">
                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-plus"></i>
                        Add Task
                    </button>
                </a>
            <?php endif;?>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Assignee</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $no = 1 ?>

                                <?php foreach($tasks as $task): ?>
                                    <tr>
                                        <td><?= $no++?></td>
                                        <td><?= $task->title ?></td>
                                        <td><?= $task->volunteer ?></td>
                                        <td><?= $task->status ?></td>
                                        <td>
                                            <?php if($task->status=='pending' && $userRole=='volunteer'): ?>
                                                <a href="<?= '/completetask/'.$task->id?>">
                                                    <button type="button" class="btn btn-success">Complete</button>
                                                </a>

                                            <?php endif; ?>

                                            <?php if($userRole=='admin'): ?>
                                                <a href="<?= '/edittask/'.$task->id?>">
                                                    <button type="button" class="btn btn-secondary">
                                                        <i class="fa-solid fa-pen"></i>
                                                        Edit
                                                    </button>
                                                </a>
                                                <a href="<?= '/deletetask/'.$task->id?>">
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                        Delete
                                                    </button>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




<?= $this->endSection() ?>