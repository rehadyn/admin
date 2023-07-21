<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="../app/user/insertuser.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="InputName">Nama</label>
                        <input type="text" class="form-control" id="InputName" name="name" placeholder="Enter Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="InputUsername">User Name</label>
                        <input type="text" class="form-control" id="InputUsername" name="username"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" class="form-control" id="InputLevel" name="level">
                            <option>Operator</option>
                            <option>SysAdmin</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</section>

