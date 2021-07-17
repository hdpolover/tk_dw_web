<div class="container-fluid">
  <!--photo,full_name,birthdate, gender, address, nationality, occupation, field_of_study, institution, emergency_contact
  wa_number,ig_account,tshirt_size, disease_history,contact_relation,is_vegetarian,subtheme,(essay,social_project,talents,achievements,experiences)
  know_program_from, source_account_name, vide_link-->
                    <!-- Page Heading -->

                    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Circle Buttons</h6>
                                </div>
                                <div class="card-body">
                                  <?php foreach ($peserta as $p): ?>
                                    <h5 class="card-title">Full Name : <?= $p['']; ?></h5>
                                    <h6 class="card-title">Birth Date : </h6>
                                    <p class="card-text">Gender : </p>
                                    <p class="card-text">Address : /p>
                                    <p class="card-text">Nationality : </p>
                                    <p class="card-text">Occupation : </p>
                                    <p class="card-text">Field of Study : </p>
                                    <p class="card-text">Emergency Contact : </p>
                                    <p class="card-text">Telephone Number : </p>
                                    <p class="card-text">Instagram Account : </p>
                                    <p class="card-text">Disease History : </p>
                                    <p class="card-text">Tshirt Size : </p>
                                    <p class="card-text">Contact Relation : </p>
                                    <p class="card-text">Subtheme : </p>
                                    <p class="card-text">Vegetarian : </p>
                                    <p class="card-text">Known Program From : </p>
                                    <p class="card-text">Soure Account Name : </p>
                                    <p class="card-text">Video Link : </p>
                                    <p class="card-text">Institution : <?php

                                    if ($p['is_fully_funded'] == 1) {
                                      echo "Yes";
                                    }else {
                                      echo "No";
                                    }?></p>
                                    <a href="<?= base_url(); ?>peserta" class="btn btn-primary">Kembali</a>
                                  <?php endforeach ?>
                                </div>
                            </div>

                        </div>
                        <!-- Split Buttons -->
                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Split Buttons with Icon</h6>
                                </div>
                                <div class="card-body">
                                  <?php foreach ($peserta as $p): ?>
                                    <h5 class="card-title">Full Name : <?= $p['']; ?></h5>
                                    <h6 class="card-title">Birth Date : </h6>
                                    <p class="card-text">Gender : </p>
                                    <p class="card-text">Address : /p>
                                    <p class="card-text">Nationality : </p>
                                    <p class="card-text">Occupation : </p>
                                    <p class="card-text">Field of Study : </p>
                                    <p class="card-text">Emergency Contact : </p>
                                    <p class="card-text">Telephone Number : </p>
                                    <p class="card-text">Instagram Account : </p>
                                    <p class="card-text">Disease History : </p>
                                    <p class="card-text">Tshirt Size : </p>
                                    <p class="card-text">Contact Relation : </p>
                                    <p class="card-text">Subtheme : </p>
                                    <p class="card-text">Vegetarian : </p>
                                    <p class="card-text">Known Program From : </p>
                                    <p class="card-text">Soure Account Name : </p>
                                    <p class="card-text">Video Link : </p>
                                    <p class="card-text">Institution : <?php

                                    if ($p['is_fully_funded'] == 1) {
                                      echo "Yes";
                                    }else {
                                      echo "No";
                                    }?></p>
                                    <a href="<?= base_url(); ?>peserta" class="btn btn-primary">Kembali</a>
                                  <?php endforeach ?>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
