<div class="container-fluid">
  <!--photo,full_name,birthdate, gender, address, nationality, occupation, field_of_study, institution, emergency_contact
  wa_number,ig_account,tshirt_size, disease_history,contact_relation,is_vegetarian,subtheme,(essay,social_project,talents,achievements,experiences)
  know_program_from, source_account_name, vide_link-->
                    <!-- Page Heading -->

                    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

                    <div class="row">

                        <div class="col">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Participant Detail</h6>
                                </div>
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col">
                                      <?php foreach ($peserta as $p): ?>
                                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $p['photo'] ).'">';  ?>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Participant Name</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['full_name']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Gender</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['gender']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Birth Date</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['birthdate']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Address</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['address']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Nationality</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['nationality']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Occupation</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['occupation']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Field of Study</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['field_of_study']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Institution</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['institution']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Emergency Contact</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['emergency_contact']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Whatsapp Number</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['wa_number']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Instagram</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['ig_account']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Tshirt Size</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['tshirt_size']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Disease History</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['disease_history']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Contact Relation</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['contact_relation']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Vegetarian</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;">
                                              <?php
                                            if ($p['is_vegetarian'] == 0) {
                                              echo "No";
                                            }else {
                                              echo "Yes";
                                            }?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Subtheme</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['subtheme']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Known Program From</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['know_program_from']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Source Account</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['source_account_name']; ?></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Link Video</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['video_link']; ?></p>
                                          </div>
                                        </div>


                                      </div>
                                      <div class="col">
                                        <div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Essay</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['essay']; ?></p>
                                          </div>
                                        </div><div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Social Project</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['social_projects']; ?></p>
                                          </div>
                                        </div><div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Talents</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['talents']; ?></p>
                                          </div>
                                        </div><div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Achievements</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['achievements']; ?></p>
                                          </div>
                                        </div><div class="row">
                                          <div class="col">
                                            <p class="card-text" style="color: black;">Experiences</p>
                                          </div>
                                          <div class="col">
                                            <p class="card-text" style="color: black;"><?= $p['experiences']; ?></p>
                                          </div>
                                        </div>

                                      </div>
<?php endforeach ?>
                                  </div>

                                      <a href="<?= base_url(); ?>peserta" class="btn btn-primary">Kembali</a>



                                </div>
                            </div>

                        </div>
                        <!-- Split Buttons -->


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
