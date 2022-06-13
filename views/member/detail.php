<div class="col-9">
    <!-- .card -->
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Tambah Member</h1>
            </div>
            <div>
                <a href="?p=semua" class="btn btn-dark bg-light text-dark">Kembali</a>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-6">
                    <form action="?p=semua">

                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" value="Nick" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" value="Imbiri" disabled>
                        </div>

                        <img src="speaker/sacodesweekend-nick-2.png" alt="speaker" class="img img-thumbnail mb-2" width="200">

                        <div class="mb-3">
                            <label for="picture" class="form-label">Picture</label>
                            <input type="file" class="form-control" id="picture">
                        </div>

                        <div class="mb-3">
                            <label for="about" class="form-label">About</label>
                            <textarea id="about" cols="30" rows="5" class="form-control" disabled></textarea>
                        </div>

                        <a href="ubah.html" class="btn btn-primary">Ubah</a>

                    </form>
                </div>
            </div>

        </div>

        <div class="card-footer">

        </div>
    </div>
    <!-- end .card -->
</div>