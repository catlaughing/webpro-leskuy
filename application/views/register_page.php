<div class="pagepaket">

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return cekform()" action="success.php" method="">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Username</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="user-name">
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Nomor Ponsel</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">ID LINE</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="id-line">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Pilih paket</label>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
  											<select class="custom-select" id="inputGroupSelect02" name="pilih-paket">
    											<option selected>Pilih salah satu...</option>
    											<option value="1">One</option>
    											<option value="2">Two</option>
    											<option value="3">Three</option>
  											</select>
										</div>
                                    </div>
                                </div>                              
                                    <div class="col-lg-6 offset-md-5">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                        Register
                                        </button>
                                    </div>
                                    <div class="col-md-6 offset-md-5">
                                    	<p>punya akun?<a href="#"> klik di sini!</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
</div>
</html>