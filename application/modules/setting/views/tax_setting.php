<!-- Page content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>

<?php if ($this->ion_auth->is_superAdmin()) { ?>

        <div id="page-content"  style="background-color: whitesmoke;">
            
            <ul class="breadcrumb breadcrumb-top">
                <li>
                    <a href="<?php echo site_url('pwfpanel'); ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo site_url('setting'); ?>">Setting</a>
                </li>
            </ul>
            
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Site Setting</strong> Panel</h2>
                </div>
                <div class="col-sm-6 col-lg-12 text-white">
                    <div class="panel panel-default">
                        <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "index") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Basic</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/emailSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "emailsetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Email Setting</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/paymentSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "paymentSetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Payment setting for stripe</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/bankTransferSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "paymentSetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Bank Transfer</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="<?php echo site_url('setting/taxSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "paymentSetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Tax Setting</span>
                                </a>
                            </li> -->
                            
                            <!-- <li class="nav-item">
                                <a href="<?php echo site_url('setting/consultationTemplates'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "consultationTemplates") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Consultation Templates</span>
                                </a>
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab"></a>
                            </li> -->
                        </ul>
                    </div>
                </div>

                <div class="wrapper wrapper-content animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        
                                        <div class="col-lg-12" style="overflow-x: auto">
                                            <!-- Datatables Content -->
                                            <form role="form" id="addFormAjax" method="post" action="<?php echo base_url('setting/addTaxSetting') ?>" enctype="multipart/form-data">

                                            <div class="block full">
                                                <div class="block-title">
                                                    <h2 class="fw-bold"><strong><?php echo $title; ?></strong> Panel</h2>
                                                    <?php if ($this->ion_auth->is_facilityManager()) { ?>
                                                        <!-- <h2>
                                                            <a href="javascript:void(0)" onclick="open_modal('<?php echo $model; ?>')" class="btn btn-sm btn-primary">
                                                                <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                                                            </a>
                                                        </h2> -->
                                                    <?php } ?>
                                                    <div>
                                                        <div style="float:right;margin-top:-38px">
                                                            <label>Enable:</label>
                                                            <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round " style="background-color:#6FD943;"></span>
                                                            </label>
                                                            <i class="fa fa-arrow-circle-up text-xl m-2"  style="font-size:20px; " aria-hidden="true"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <!-- <div class="alert alert-danger" id="error-box" style="display: none"></div> -->
                                            
                                                <div class="row">
                                                <?php
                                                $message = $this->session->flashdata('success');
                                                if (!empty($message)):
                                                    ?>
                                                    <div class="alert alert-success">
                                                        <?php echo $message; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php
                                                $error = $this->session->flashdata('error');
                                                if (!empty($error)):
                                                    ?>
                                                    <!-- <div class="alert alert-danger">
                                                        <?php echo $error; ?>
                                                    </div> -->
                                                <?php endif; ?>
                                                <div id="message"></div>
                                                <div class="col-md-4" style="">
                                                        <div class="form-group">
                                                            <label for="input1">tax name </label>
                                                            <input type="text" class="form-control" id="tax_name" name="tax_name" value="<?php echo $list->secret_key?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4" style="">
                                                        <div class="form-group">
                                                            <label for="input1">tax percentage</label>
                                                            <input type="text" class="form-control" id="tax_percentage" name="tax_percentage" value="<?php echo $list->secret_key?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="input1">currency symbol</label>
                                                            <select class="form-control form-select select2" id="currency_symbol" name="currency_symbol" >
            
                                                                <option value="">Select Currency</option>
                                                                <option value="؋" data-symbol="؋">Afghan Afghani (؋)</option>
                                                                <option value="L" data-symbol="L">Albanian Lek (L)</option>
                                                                <option value="د.ج" data-symbol="د.ج">Algerian Dinar (د.ج)</option>
                                                                <option value="Kz" data-symbol="Kz">Angolan Kwanza (Kz)</option>
                                                                <option value="$" data-symbol="$">Argentine Peso ($)</option>
                                                                <option value="$" data-symbol="$">Australian Dollar ($)</option>
                                                                <option value="₼" data-symbol="₼">Azerbaijani Manat (₼)</option>
                                                                <option value="$" data-symbol="$">Bahamian Dollar ($)</option>
                                                                <option value=".د.ب" data-symbol=".د.ب">Bahraini Dinar (.د.ب)</option>
                                                                <option value="৳" data-symbol="৳">Bangladeshi Taka (৳)</option>
                                                                <option value="$" data-symbol="$">Barbadian Dollar ($)</option>
                                                                <option value="Br" data-symbol="Br">Belarusian Ruble (Br)</option>
                                                                <option value="BZ$" data-symbol="BZ$">Belize Dollar (BZ$)</option>
                                                                <option value="$" data-symbol="$">Bermudan Dollar ($)</option>
                                                                <option value="₿" data-symbol="₿">Bitcoin (₿)</option>
                                                                <option value="R$" data-symbol="R$">Brazilian Real (R$)</option>
                                                                <option value="£" data-symbol="£">British Pound (£)</option>
                                                                <option value="лв" data-symbol="лв">Bulgarian Lev (лв)</option>
                                                                <option value="$" data-symbol="$">Canadian Dollar ($)</option>
                                                                <option value="$" data-symbol="$">Chilean Peso ($)</option>
                                                                <option value="¥" data-symbol="¥">Chinese Yuan (¥)</option>
                                                                <option value="$" data-symbol="$">Colombian Peso ($)</option>
                                                                <option value="₡" data-symbol="₡">Costa Rican Colón (₡)</option>
                                                                <option value="kn" data-symbol="kn">Croatian Kuna (kn)</option>
                                                                <option value="Kč" data-symbol="Kč">Czech Republic Koruna (Kč)</option>
                                                                <option value="kr" data-symbol="kr">Danish Krone (kr)</option>
                                                                <option value="£" data-symbol="£">Egyptian Pound (£)</option>
                                                                <option value="€" data-symbol="€">Euro (€)</option>
                                                                <option value="₵" data-symbol="₵">Ghanaian Cedi (₵)</option>
                                                                <option value="$" data-symbol="$">Hong Kong Dollar ($)</option>
                                                                <option value="Ft" data-symbol="Ft">Hungarian Forint (Ft)</option>
                                                                <option value="₹" data-symbol="₹">Indian Rupee (₹)</option>
                                                                <option value="Rp" data-symbol="Rp">Indonesian Rupiah (Rp)</option>
                                                                <option value="₪" data-symbol="₪">Israeli New Sheqel (₪)</option>
                                                                <option value="¥" data-symbol="¥">Japanese Yen (¥)</option>
                                                                <option value="KSh"  data-symbol="KSh">Kenyan Shilling (KSh)</option>
                                                                <option value="₩" data-symbol="₩">South Korean Won (₩)</option>
                                                                <option value="د.ك" data-symbol="د.ك">Kuwaiti Dinar (د.ك)</option>
                                                                <option value="RM" data-symbol="RM">Malaysian Ringgit (RM)</option>
                                                                <option value="$" data-symbol="$">Mexican Peso ($)</option>
                                                                <option value="₦" data-symbol="₦">Nigerian Naira (₦)</option>
                                                                <option value="kr" data-symbol="kr">Norwegian Krone (kr)</option>
                                                                <option value="₨" data-symbol="₨">Pakistani Rupee (₨)</option>
                                                                <option value="₱" data-symbol="₱">Philippine Peso (₱)</option>
                                                                <option value="zł" data-symbol="zł">Polish Zloty (zł)</option>
                                                                <option value="﷼" data-symbol="﷼">Qatari Rial (﷼)</option>
                                                                <option value="lei" data-symbol="lei">Romanian Leu (lei)</option>
                                                                <option value="₽" data-symbol="₽">Russian Ruble (₽)</option>
                                                                <option value="﷼" data-symbol="﷼">Saudi Riyal (﷼)</option>
                                                                <option value="R" data-symbol="R">South African Rand (R)</option>
                                                                <option value="kr" data-symbol="kr">Swedish Krona (kr)</option>
                                                                <option value="CHF" data-symbol="CHF">Swiss Franc (CHF)</option>
                                                                <option value="฿" data-symbol="฿">Thai Baht (฿)</option>
                                                                <option value="₺" data-symbol="₺">Turkish Lira (₺)</option>
                                                                <option value="$" data-symbol="$">US Dollar ($)</option>
                                                                <option value="₫" data-symbol="₫">Vietnamese Dong (₫)</option>
                                                                <option value="CFA" data-symbol="CFA">West African CFA Franc (CFA)</option>
                                                                <option value="ZK" data-symbol="ZK">Zambian Kwacha (ZK)</option>
                                                            </select> 

                                                            <!-- <input type="text" class="form-control" id="currency_symbol" name="currency_symbol" value="<?php echo $list->publishable_key?>"> -->
                                                        
                                                        </div>
                                                    </div>
                                                
                                                
                                                    <!-- Add save and cancel buttons -->
                                                    <div class="col-md-12 text-right">
                                                        <button class="btn btn-danger" type="button">Cancel</button>
                                                        <button class="btn  btn-primary " style="background:#337ab7;" type="submit"> Save </button>
                                                    </div>
                                                
                                                </div>
                                            </div>

                                            </form>
                                        
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

<?php } else if ($this->ion_auth->is_facilityManager() or $this->ion_auth->is_all_roleslogin()) { ?>
       
    <div id="page-content">
            
            <ul class="breadcrumb breadcrumb-top">
                <li>
                    <a href="<?php echo site_url('pwfpanel'); ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo site_url('setting'); ?>">Setting</a>
                </li>
            </ul>
            
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Site Setting</strong> Panel</h2>
                </div>
                <div class="col-sm-6 col-lg-12 text-white">
                    <div class="panel ">
                        <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "index") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Basic</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/emailSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "emailsetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Email Setting</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/paymentSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "paymentSetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Payment setting for stripe</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/bankTransferSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "bankTransferSetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Bank Transfer</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/taxSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "taxSetting") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Tax Setting</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="<?php echo site_url('setting/consultationTemplates'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "consultationTemplates") ? "active" : "" ?>">
                                    <span class="sidebar-nav-mini-hide">Consultation Templates</span>
                                </a>
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="wrapper wrapper-content animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        
                                        <div class="col-lg-12" style="overflow-x: auto">
                                            <!-- Datatables Content -->
                                            <form role="form" id="addFormAjax" method="post" action="<?php echo base_url('setting/addTaxSetting') ?>" enctype="multipart/form-data">

                                            <div class="block full">
                                                <div class="block-title">
                                                    <h2 class="fw-bold"><strong><?php echo $title; ?></strong> Panel</h2>
                                                    <?php if ($this->ion_auth->is_facilityManager()) { ?>
                                                        <!-- <h2>
                                                            <a href="javascript:void(0)" onclick="open_modal('<?php echo $model; ?>')" class="btn btn-sm btn-primary">
                                                                <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                                                            </a>
                                                        </h2> -->
                                                    <?php } ?>
                                                    <div>
                                                        <div style="float:right;margin-top:-38px">
                                                            <label>Enable:</label>
                                                            <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round " style="background-color:#6FD943;"></span>
                                                            </label>
                                                            <i class="fa fa-arrow-circle-up text-xl m-2"  style="font-size:20px; " aria-hidden="true"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <!-- <div class="alert alert-danger" id="error-box" style="display: none"></div> -->
                                            
                                                <div class="row">
                                                <?php
                                                $message = $this->session->flashdata('success');
                                                if (!empty($message)):
                                                    ?>
                                                    <div class="alert alert-success">
                                                        <?php echo $message; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php
                                                $error = $this->session->flashdata('error');
                                                if (!empty($error)):
                                                    ?>
                                                    <!-- <div class="alert alert-danger">
                                                        <?php echo $error; ?>
                                                    </div> -->
                                                <?php endif; ?>
                                                <div id="message"></div>
                                                <div class="col-md-4" style="">
                                                        <div class="form-group">
                                                            <label for="input1">tax name </label>
                                                            <input type="text" class="form-control" id="tax_name" name="tax_name" value="<?php echo $list->tax_name?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4" style="">
                                                        <div class="form-group">
                                                            <label for="input1">tax percentage</label>
                                                            <input type="text" class="form-control" id="tax_percentage" name="tax_percentage" value="<?php echo $list->tax_percentage?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="input1">currency symbol</label>
                                                            <select class="form-control form-select select2" id="currency_symbol" name="currency_symbol" >
            
                                                                <option value="">Select Currency</option>
                                                                <option value="؋" data-symbol="؋" <?php echo $list->currency_symbol == '؋'?'selected':''?>>Afghan Afghani (؋)</option>
                                                                <option value="L" data-symbol="L" <?php echo $list->currency_symbol == 'L'?'selected':''?>>Albanian Lek (L)</option>
                                                                <option value="د.ج" data-symbol="د.ج" <?php echo $list->currency_symbol == 'د.ج'?'selected':''?>>Algerian Dinar (د.ج)</option>
                                                                <option value="Kz" data-symbol="Kz" <?php echo $list->currency_symbol == 'Kz'?'selected':''?>>Angolan Kwanza (Kz)</option>
                                                                <option value="Kz" data-symbol="Kz" <?php echo $list->currency_symbol == 'Kz'?'selected':''?>>Angolan Kwanza (Kz)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Argentine Peso ($)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Australian Dollar ($)</option>
                                                                <option value="₼" data-symbol="₼" <?php echo $list->currency_symbol == '₼'?'selected':''?>>Azerbaijani Manat (₼)</option>
                                                                <option value="₼" data-symbol="₼" <?php echo $list->currency_symbol == '₼'?'selected':''?>>Azerbaijani Manat (₼)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Bahamian Dollar ($)</option>
                                                                <option value=".د.ب" data-symbol=".د.ب" <?php echo $list->currency_symbol == '.د.ب'?'selected':''?>>Bahraini Dinar (.د.ب)</option>
                                                                <option value="৳" data-symbol="৳" <?php echo $list->currency_symbol == '৳'?'selected':''?>>Bangladeshi Taka (৳)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Barbadian Dollar ($)</option>
                                                                <option value="Br" data-symbol="Br" <?php echo $list->currency_symbol == 'Br'?'selected':''?>>Belarusian Ruble (Br)</option>
                                                                <option value="BZ$" data-symbol="BZ$" <?php echo $list->currency_symbol == 'BZ$'?'selected':''?>>Belize Dollar (BZ$)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Bermudan Dollar ($)</option>
                                                                <option value="₿" data-symbol="₿" <?php echo $list->currency_symbol == '₿'?'selected':''?>>Bitcoin (₿)</option>
                                                                <option value="R$" data-symbol="R$" <?php echo $list->currency_symbol == 'R$'?'selected':''?>>Brazilian Real (R$)</option>
                                                                <option value="£" data-symbol="£" <?php echo $list->currency_symbol == '£'?'selected':''?>>British Pound (£)</option>
                                                                <option value="лв" data-symbol="лв" <?php echo $list->currency_symbol == 'лв'?'selected':''?>>Bulgarian Lev (лв)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Canadian Dollar ($)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Chilean Peso ($)</option>
                                                                <option value="¥" data-symbol="¥" <?php echo $list->currency_symbol == '¥'?'selected':''?>>Chinese Yuan (¥)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Colombian Peso ($)</option>
                                                                <option value="₡" data-symbol="₡" <?php echo $list->currency_symbol == '₡'?'selected':''?>>Costa Rican Colón (₡)</option>
                                                                <option value="kn" data-symbol="kn" <?php echo $list->currency_symbol == 'kn'?'selected':''?>>Croatian Kuna (kn)</option>
                                                                <option value="Kč" data-symbol="Kč" <?php echo $list->currency_symbol == 'Kč'?'selected':''?>>Czech Republic Koruna (Kč)</option>
                                                                <option value="kr" data-symbol="kr" <?php echo $list->currency_symbol == 'kr'?'selected':''?>>Danish Krone (kr)</option>
                                                                <option value="£" data-symbol="£" <?php echo $list->currency_symbol == '£'?'selected':''?>>Egyptian Pound (£)</option>
                                                                <option value="€" data-symbol="€" <?php echo $list->currency_symbol == '€'?'selected':''?>>Euro (€)</option>
                                                                <option value="₵" data-symbol="₵" <?php echo $list->currency_symbol == '₵'?'selected':''?>>Ghanaian Cedi (₵)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Hong Kong Dollar ($)</option>
                                                                <option value="Ft" data-symbol="Ft" <?php echo $list->currency_symbol == 'Ft'?'selected':''?>>Hungarian Forint (Ft)</option>
                                                                <option value="₹" data-symbol="₹" <?php echo $list->currency_symbol == '₹'?'selected':''?>>Indian Rupee (₹)</option>
                                                                <option value="Rp" data-symbol="Rp" <?php echo $list->currency_symbol == 'Rp'?'selected':''?>>Indonesian Rupiah (Rp)</option>
                                                                <option value="₪" data-symbol="₪" <?php echo $list->currency_symbol == '₪'?'selected':''?>>Israeli New Sheqel (₪)</option>
                                                                <option value="¥" data-symbol="¥" <?php echo $list->currency_symbol == '¥'?'selected':''?>>Japanese Yen (¥)</option>
                                                                <option value="KSh"  data-symbol="KSh" <?php echo $list->currency_symbol == 'KSh'?'selected':''?>>Kenyan Shilling (KSh)</option>
                                                                <option value="₩" data-symbol="₩" <?php echo $list->currency_symbol == '₩'?'selected':''?>>South Korean Won (₩)</option>
                                                                <option value="د.ك" data-symbol="د.ك" <?php echo $list->currency_symbol == 'د.ك'?'selected':''?>>Kuwaiti Dinar (د.ك)</option>
                                                                <option value="RM" data-symbol="RM" <?php echo $list->currency_symbol == 'RM'?'selected':''?>>Malaysian Ringgit (RM)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>Mexican Peso ($)</option>
                                                                <option value="₦" data-symbol="₦" <?php echo $list->currency_symbol == '₦'?'selected':''?>>Nigerian Naira (₦)</option>
                                                                <option value="kr" data-symbol="kr" <?php echo $list->currency_symbol == 'kr'?'selected':''?>>Norwegian Krone (kr)</option>
                                                                <option value="₨" data-symbol="₨" <?php echo $list->currency_symbol == '₨'?'selected':''?>>Pakistani Rupee (₨)</option>
                                                                <option value="₱" data-symbol="₱" <?php echo $list->currency_symbol == '₱'?'selected':''?>>Philippine Peso (₱)</option>
                                                                <option value="zł" data-symbol="zł" <?php echo $list->currency_symbol == 'zł'?'selected':''?>>Polish Zloty (zł)</option>
                                                                <option value="﷼" data-symbol="﷼" <?php echo $list->currency_symbol == '﷼'?'selected':''?>>Qatari Rial (﷼)</option>
                                                                <option value="lei" data-symbol="lei" <?php echo $list->currency_symbol == 'lei'?'selected':''?>>Romanian Leu (lei)</option>
                                                                <option value="₽" data-symbol="₽" <?php echo $list->currency_symbol == '₽'?'selected':''?>>Russian Ruble (₽)</option>
                                                                <option value="﷼" data-symbol="﷼" <?php echo $list->currency_symbol == '﷼'?'selected':''?>>Saudi Riyal (﷼)</option>
                                                                <option value="R" data-symbol="R" <?php echo $list->currency_symbol == 'R'?'selected':''?>>South African Rand (R)</option>
                                                                <option value="kr" data-symbol="kr" <?php echo $list->currency_symbol == 'kr'?'selected':''?>>Swedish Krona (kr)</option>
                                                                <option value="CHF" data-symbol="CHF" <?php echo $list->currency_symbol == 'CHF'?'selected':''?>>Swiss Franc (CHF)</option>
                                                                <option value="฿" data-symbol="฿" <?php echo $list->currency_symbol == '฿'?'selected':''?>>Thai Baht (฿)</option>
                                                                <option value="₺" data-symbol="₺" <?php echo $list->currency_symbol == '₺'?'selected':''?>>Turkish Lira (₺)</option>
                                                                <option value="$" data-symbol="$" <?php echo $list->currency_symbol == '$'?'selected':''?>>US Dollar ($)</option>
                                                                <option value="₫" data-symbol="₫" <?php echo $list->currency_symbol == '₫'?'selected':''?>>Vietnamese Dong (₫)</option>
                                                                <option value="CFA" data-symbol="CFA" <?php echo $list->currency_symbol == 'CFA'?'selected':''?>>West African CFA Franc (CFA)</option>
                                                                <option value="ZK" data-symbol="ZK" <?php echo $list->currency_symbol == 'ZK'?'selected':''?>>Zambian Kwacha (ZK)</option>
                                                            </select> 

                                                            <!-- <input type="text" class="form-control" id="currency_symbol" name="currency_symbol" value="<?php echo $list->publishable_key?>"> -->
                                                        
                                                        </div>
                                                    </div>
                                                
                                                
                                                    <!-- Add save and cancel buttons -->
                                                    <div class="col-md-12 text-right">
                                                        <button class="btn btn-danger" type="button">Cancel</button>
                                                        <button class="btn  btn-primary " style="background:#337ab7;" type="submit"> Save </button>
                                                    </div>
                                                
                                                </div>
                                            </div>

                                            </form>
                                        
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    <?php }?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".multiple-select").select2({
        // maximumSelectionLength: 2
        placeholder: "Please select",
    });
</script>
<style>
    .modal-footer .btn+.btn {
        margin-bottom: 5px !important;
        margin-left: 5px;
    }

    span.select2.select2-container.select2-container--default {
        /* width: 100% !important; */
    }

    span.select2-selection.select2-selection--multiple {
        min-height: auto !important;
        overflow: auto !important;
        border: solid #ddd0d0 1px;
        color: black;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: var(--bs-nav-pills-link-active-bg);
    }
</style>
<script>
    $('.select2').select2();
</script>

<style>
    .save-btn.active {
        background: #00008B !important;
    }

    .save-btn {
        font-weight: 700;
        font-size: 1.5rem;
        padding: 0.6rem 2.25rem;
        background: #337ab7;
    }

    .save-btn:hover {
        background: #00008B !important;
    }

    .cancel-btn:hover {
        background-color: #e9967a !important;
    }
</style>
