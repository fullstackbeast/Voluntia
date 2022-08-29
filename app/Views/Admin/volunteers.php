<?= $this->extend("layouts/dashboardlayout") ?>

<?= $this->section("content") ?>

    <div>

        <div class="p-4" style="display: flex; justify-content: space-between; width: 100%">
            <h1>All Volunteers</h1>

            <a href="/addvolunteer">
                <button type="button" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>
                    Add Volunteer
                </button>
            </a>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $no = 1 ?>

                                <?php foreach($volunteers as $volunteer): ?>
                                    <tr>
                                        <td><?= $no++?></td>
                                        <td><?= $volunteer->first_name ?></td>
                                        <td><?= $volunteer->last_name ?></td>
                                        <td><?= $volunteer->email ?></td>

                                       <td>
                                           <a href="<?= '/editvolunteer/'.$volunteer->id?>">
                                               <button type="button" class="btn btn-secondary">
                                                   <i class="fa-solid fa-pen"></i>
                                                   Edit
                                               </button>
                                           </a>
                                           <a href="<?= '/deletetask/'.$volunteer->id?>">
                                               <button type="button" class="btn btn-danger">
                                                   <i class="fa-solid fa-trash-can"></i>
                                                   Delete
                                               </button>
                                           </a>
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