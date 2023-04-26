<?php
/**
 * Created by PhpStorm.
 * User: Amalesh
 * Date: 7/17/2018
 * Time: 6:56 PM
 */
?>
<!-- banner -->


<style>
div#my_left_r {
    display: flex;
}

div#my_left_r .in-page-advert {
    width: 100%;
    margin-left: 0px !important;
}

div#my_left_r .in-page-advert a.advert.no-outline {
    text-align: left !important;
    margin-left: 0px !important;
    display: block;
    padding-left: 0px !important;
}

div#my_left_r .in-page-advert a.advert.no-outline img {
    object-fit: contain;
    margin: 0 !important;
    padding: 0 !important;
}

div#my_left_r .col-md-6.col-12 {
    display: flex;
    margin-left: 0px !important;
    padding-left: 0px !important;
}
</style>
<div class="banner title-banner d-md-flex d-none">
    <h2>Doctors</h2>
</div>

<!-- advert -->
<!-- change the img tag accordingly (e.g: <ins> tag) -->
<div class="container">
    <div class="row" id="my_left_r">
        <div class="col-md-6 col-12">
            <div class="in-page-advert doctor-advert-top-left"></div>
            <div class="in-page-advert doctor-advert-top-right"></div>
        </div>
        <div class="col-md-6 col-12">
        <img src="https://dev.mimsbangladesh.com/application/views/images/logo/Gv2.png" alt="" width="80%px" style="
    padding: 30px;
    background: white;
    margin-top: 30px;
">
        </div>
    </div>
</div>

<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="content-section main">
                <div class="section-header d-flex justify-content-between" style="margin-bottom: 0px; padding: 24px 30px 16px 30px;">
                    <span>Find Doctors</span> <i class="fas fa-filter d-md-none d-blocK"></i>
                </div>
                <!-- doctor search -->
                <div class="container" style="padding-bottom: 20px">
                    <div class="address-search row">
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class="form-control" id="doctorCountry" name="doctorCountry">
                                    <option value="0">Search by Country</option>
                                    <?php
                                    foreach ($Countries AS $country) {
                                        echo '<option value="'.$country['ID'].'">'.strtoupper($country['Name']).'</option>';
                                    }
                                    ?>
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class="form-control" id="doctorCity" name="doctorCity">
                                    <option value="0">Search by City</option>
                                    <?php
                                    foreach ($Cities AS $city) {
                                        echo '<option value="'.strtolower($city['Name']).'">'.strtoupper($city['Name']).'</option>';
                                    }
                                    ?>
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 address-search-col"></div>
                    </div>
                    <div class="address-search row">
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class="form-control" id="doctorSpecialty" name="doctorSpecialty">
                                    <option value="0">Search by Specialty</option>
                                    <?php
                                    foreach ($Specialties AS $specialty) {
                                        echo '<option value="'.$specialty.'">'.strtoupper($specialty).'</option>';
                                    }
                                    ?>
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class="form-control" id="doctorGender" name="doctorGender">
                                    <option value="0">Search by Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 address-search-col">
                            <button class="btn theme-btn" style="width: 100%;" onclick="doctorObject.searchDoctor(1)">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor-list container" id="doctor-info-list">
                <?php
                foreach ($AllDoctors AS $doctor) {
                    $image_path = empty($doctor['ImagePath']) ? base_url().'application/views/images/doctor.png' : base_url().'application/views/img/'.$doctor['ImagePath'];
                    $hotline_info = empty($doctor['Hotline']) ? '' : '<br>Hotline: '.$doctor['Hotline'];
                    $PhoneNo = empty($doctor['PhoneNo']) ? '' : '<p class="number">'.$doctor['PhoneNo'].'</p>';
                    $MobileNo1 = empty($doctor['MobileNo1']) ? '' : '<p class="number">'.$doctor['MobileNo1'].'</p>';
                    $MobileNo2 = empty($doctor['MobileNo2']) ? '' : '<p class="number">'.$doctor['MobileNo2'].'</p>';
                    $MobileNo3 = empty($doctor['MobileNo3']) ? '' : '<p class="number">'.$doctor['MobileNo3'].'</p>';
                    $mobile_info = $PhoneNo.$MobileNo1.$MobileNo2.$MobileNo3;
                    $mobile_info = empty($mobile_info) ? '' : '<p class="doctor-info-title">
                                        <i class="fas fa-phone" style="transform: scaleX(-1);"></i>  Phone No.
                                    </p>
                                    <p class="doctor-info-description">'.$mobile_info.'</p>';
                    echo '<div class="doctor row">
                    <div class="col-md-2 col-3 doctor-img">
                        <img src="'.$image_path.'" alt="">
                    </div>
                    <div class="col-md-10 col-9">
                        <h3 class="doctor-name">'.$doctor['Name'].'</h3>
                        <div class="doctor-info d-md-block d-none">
                            <div class="row">
                                <div class="col-6">
                                    <p class="doctor-info-title">'.$doctor['Specialization'].'</p>
                                    <p class="doctor-info-description">'.$doctor['ProfessionDegree'].'</p>
                                </div>
                                <div class="col-6">
                                    <p class="doctor-info-title">
                                        <i class="fas fa-map-marker-alt"></i> Chamber
                                    </p>
                                    <p class="doctor-info-description">'.$doctor['ChamberAddress'].$hotline_info.'</p>'.$mobile_info.'
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-md-none d-block">
                          <div class="doctor-info">
                              <div class="row">
                                  <div class="col-12">
                                    <p class="doctor-info-title">'.$doctor['Specialization'].'</p>
                                    <p class="doctor-info-description">'.$doctor['ProfessionDegree'].'</p>
                                  </div>
                                  <div class="col-12">
                                    <p class="doctor-info-title">
                                      <i class="fas fa-map-marker-alt"></i> Chamber
                                    </p>
                                    <p class="doctor-info-description">'.$doctor['ChamberAddress'].$hotline_info.'</p>
                                  </div>
                                  <div class="col-12">'.$mobile_info.'</div>
                                </div>
                          </div>
                      </div>
                </div>';
                }
                ?>
            </div>
            <!-- pagination -->
            <nav class="mims-pagination" style="margin-top: 36px;">
                <ul class="pagination" id="doctor-pagination"></ul>
            </nav>
            <div class="in-page-advert doctor-advert-bottom">
                <img src="<?php echo base_url();?>application/views/images/add-12.png" alt="">
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="container">
				<div class="row side-bar-mimslearning-title">
					<!-- special reports -->
					<div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
                   <a href="https://www.dental-practice.biz/emagazine/dpbangladesh1-1/"> <img src="<?php echo base_url(); ?>application/views/images/dantal.jpeg" alt=""></a>
					</div>
				</div>
				<div class="row">
                    <div class="in-page-advert side-col doctor-sidebar-advert">
                        <img src="<?php echo base_url();?>application/views/images/add-4.png" alt="">
                    </div>
                </div>
				<div class="row side-bar-important-address-title">
					<!-- important addresses -->
					<div class="content-section col-12" style="padding: 0; max-height: none;">
						<div class="section-header own-pad">
							<span><img src="<?php echo base_url();?>application/views/images/icons/briefcase.svg" alt="*"></span>Important Information
						</div>
						<ul class="address-list sidebar-assress"></ul>
					</div>
				</div>
				<div class="row side-bar-job-circular-title">
					<!-- job circular -->
					<div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
						<div class="section-header own-pad" style="margin-bottom: 16px;">
							<span><img src="<?php echo base_url();?>application/views/images/icons/briefcase.svg" alt="*"></span>Job Circular
						</div>
						<div class="section-tab sidebar-tab">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#pharmaTab" role="tab" aria-controls="pharmaTab" aria-selected="true">Pharma</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#medicalTab" role="tab" aria-controls="medicalTab" aria-selected="false">Medical</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="pharmaTab" role="tabpanel" aria-labelledby="pharma-tab">
									<div class="container sidebar-jobs"></div>
								</div>
								<div class="tab-pane fade" id="medicalTab" role="tabpanel" aria-labelledby="medical-tab">
									<div class="container sidebar-jobs"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row side-bar-special-report-title">
					<!-- special reports -->
					<div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
						<div class="section-header own-pad">
							<span><img src="<?php echo base_url();?>application/views/images/icons/briefcase.svg" alt="*"></span>Special Reports
						</div>
						<div class="container sidebar-special-reports"></div>
					</div>
				</div>
				<div class="row side-bar-news-title">
                    <!-- local news -->
                    <div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
                        <div class="section-header own-pad">
                            <span><img src="<?php echo base_url();?>application/views/images/icons/newspaper.svg" alt="*"></span>Pharma News
                        </div>
                        <div class="container sidebar-news"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    frontendCommonMethods.getSideBarData(['job', 'address', 'news', 'report', 'study']);
    frontendCommonMethods.getCommonAdvertisement(['doctor-sidebar-advert', 'doctor-advert-top-left', 'doctor-advert-top-right', 'doctor-advert-bottom']);
    doctorObject.totalDoctor = <?php echo isset($TotalDoctor) ? $TotalDoctor : 0;?>;
    doctorObject.populatePagination(1);
    frontendCommonMethods.mainMenuActivation('doctor');
</script>
