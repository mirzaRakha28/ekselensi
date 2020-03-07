<div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Karir</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <form style="margin-right: 0px;margin-left: 46px;"action="<?= base_url().'admin/form_karir/add_product'?>" method="post">

            <label class="font-weight-bold">Nama Pekerjaan : </label>
            <input class="form-control" type="text" style="width: 363px;" name="job" placeholder="Nama Pekerjaan" required>

            <label class="font-weight-bold">Deskripsi Pekerjaan</label>
            <textarea name="deskripsi" style="width: 363px;"  class="form-control" id="deskripsi" cols="30" rows="5" placeholder="Deskripsi Pekerjaan" required></textarea>

            <label class="font-weight-bold">Gaji Terendah : </label>
            <input class="form-control" type="number" placeholder="1000000" style="width: 363px;" inputmode="numeric"name="gajiTerendah"  >

            <label class="font-weight-bold">Gaji Tertinggi : </label>
            <input class="form-control" type="number" placeholder="5000000" style="width: 363px;" inputmode="numeric"name="gajiTertinggi"  >

            <label class="font-weight-bold">Jenis Pekerjaan : </label>
            <select  name="jenis" class="form-control" style="width: 363px;">
                        <option value="FullTime">FullTime</option>
                        <option value="PartTime">ParTime</option>
                        <option value="Internship">Internship</option>
            </select>

            <label class="font-weight-bold">Nama Perusahaan : </label>
            <input class="form-control" placeholder="Nama Perusahaan yang membuka lowongan Pekerjaan" type="text" style="width: 363px;" inputmode="numeric" name="namaPerusahaan">

            <label class="font-weight-bold">Alamat : </label>
            <input class="form-control" type="text" placeholder="Alamat Perusahaan" style="width: 363px;" inputmode="numeric" name="alamat">

            <button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center" type="submit" style="margin-right: 138px;">Submit</button>
            </form>
        </div>