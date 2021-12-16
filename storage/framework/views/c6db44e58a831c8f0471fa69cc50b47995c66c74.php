<?php $__env->startSection('content'); ?>

<!-- Main Content -->
<section class="content home">
  <div class="container-fluid">
  	<div class="block-header">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
          <h2>Dashboard</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e($page_title); ?></a></li>
          </ul>
        </div>
      </div>
    </div>

    <form method="post" action="<?php echo e(route('admin-miscellaneous-setting')); ?>">
    <?php echo e(csrf_field()); ?>


    <?php if(isset($settings)): ?>
    <input type="hidden" name="id" class="form-control" value="<?php echo e($settings->id); ?>">
    <?php endif; ?>

    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-primary">Save</button>
   
            
          </div>
        </div>
        
      </div>
    </div>



    <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-4">
              <label style="color:#fff">Finanical Year End (Day / Month)</label>
            </div>
            <div class="col-lg-4">
              <div class="form-line">
                <select class="form-control show-tick" name="day">
                  <option value="1" <?php echo e((isset($settings->day)&& $settings->day=='1')?'selected':''); ?>>1</option>
                  <option value="2" <?php echo e((isset($settings->day)&& $settings->day=='2')?'selected':''); ?> >2</option>
                  <option value="3" <?php echo e((isset($settings->day)&& $settings->day=='3')?'selected':''); ?> >3</option>
                  <option value="4" <?php echo e((isset($settings->day)&& $settings->day=='4')?'selected':''); ?> >4</option>
                  <option value="5" <?php echo e((isset($settings->day)&& $settings->day=='5')?'selected':''); ?> >5</option>
                  <option value="6" <?php echo e((isset($settings->day)&& $settings->day=='6')?'selected':''); ?> >6</option>
                  <option value="7" <?php echo e((isset($settings->day)&& $settings->day=='7')?'selected':''); ?> >7</option>
                  <option value="8" <?php echo e((isset($settings->day)&& $settings->day=='8')?'selected':''); ?> >8</option>
                  <option value="9" <?php echo e((isset($settings->day)&& $settings->day=='9')?'selected':''); ?> >9</option>
                  <option value="10" <?php echo e((isset($settings->day)&& $settings->day=='10')?'selected':''); ?>>>10</option>
                  <option value="11" <?php echo e((isset($settings->day)&& $settings->day=='11')?'selected':''); ?> >11</option>
                  <option value="12" <?php echo e((isset($settings->day)&& $settings->day=='12')?'selected':''); ?> >12</option>
                  <option value="13" <?php echo e((isset($settings->day)&& $settings->day=='13')?'selected':''); ?> >13</option>
                  <option value="14" <?php echo e((isset($settings->day)&& $settings->day=='14')?'selected':''); ?> >14</option>
                  <option value="15" <?php echo e((isset($settings->day)&& $settings->day=='15')?'selected':''); ?> >15</option>
                  <option value="16" <?php echo e((isset($settings->day)&& $settings->day=='16')?'selected':''); ?> >16</option>
                  <option value="17" <?php echo e((isset($settings->day)&& $settings->day=='17')?'selected':''); ?> >17</option>
                  <option value="18" <?php echo e((isset($settings->day)&& $settings->day=='18')?'selected':''); ?> >18</option>
                  <option value="19" <?php echo e((isset($settings->day)&& $settings->day=='19')?'selected':''); ?> >19</option>
                  <option value="20" <?php echo e((isset($settings->day)&& $settings->day=='20')?'selected':''); ?> >20</option>
                  <option value="21" <?php echo e((isset($settings->day)&& $settings->day=='21')?'selected':''); ?> >21</option>
                  <option value="22" <?php echo e((isset($settings->day)&& $settings->day=='22')?'selected':''); ?> >22</option>
                  <option value="23" <?php echo e((isset($settings->day)&& $settings->day=='23')?'selected':''); ?> >23</option>
                  <option value="24" <?php echo e((isset($settings->day)&& $settings->day=='24')?'selected':''); ?> >24</option>
                  <option value="25" <?php echo e((isset($settings->day)&& $settings->day=='25')?'selected':''); ?> >25</option>
                  <option value="26" <?php echo e((isset($settings->day)&& $settings->day=='26')?'selected':''); ?> >26</option>
                  <option value="27" <?php echo e((isset($settings->day)&& $settings->day=='27')?'selected':''); ?> >27</option>
                  <option value="28" <?php echo e((isset($settings->day)&& $settings->day=='28')?'selected':''); ?> >28</option>
                  <option value="29" <?php echo e((isset($settings->day)&& $settings->day=='29')?'selected':''); ?> >29</option>
                  <option value="30" <?php echo e((isset($settings->day)&& $settings->day=='30')?'selected':''); ?> >30</option>
                  <option value="31" <?php echo e((isset($settings->day)&& $settings->day=='31')?'selected':''); ?> >31</option>
                  
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-line">
                <select class="form-control show-tick" name="month">
                  <option value="All" <?php echo e((isset($settings->month)&& $settings->month=='All')?'selected':''); ?>>All</option>
                  <option value="1" <?php echo e((isset($settings->month)&& $settings->month=='1')?'selected':''); ?>>1</option>
                  <option value="2"  <?php echo e((isset($settings->month)&& $settings->month=='2')?'selected':''); ?>>2</option>
                  <option value="3"  <?php echo e((isset($settings->month)&& $settings->month=='3')?'selected':''); ?>>3</option>
                  <option value="4"  <?php echo e((isset($settings->month)&& $settings->month=='4')?'selected':''); ?>>4</option>
                  <option value="5"  <?php echo e((isset($settings->month)&& $settings->month=='5')?'selected':''); ?>>5</option>
                  <option value="6"  <?php echo e((isset($settings->month)&& $settings->month=='6')?'selected':''); ?>>6</option>
                  <option value="7"  <?php echo e((isset($settings->month)&& $settings->month=='7')?'selected':''); ?>>7</option>
                  <option value="8"  <?php echo e((isset($settings->month)&& $settings->month=='8')?'selected':''); ?>>8</option>
                  <option value="9"  <?php echo e((isset($settings->month)&& $settings->month=='9')?'selected':''); ?>>9</option>
                  <option value="10"  <?php echo e((isset($settings->month)&& $settings->month=='10')?'selected':''); ?>>10</option>
                  <option value="11"  <?php echo e((isset($settings->month)&& $settings->month=='11')?'selected':''); ?>>11</option>
                  <option value="12"  <?php echo e((isset($settings->month)&& $settings->month=='12')?'selected':''); ?>>12</option>
                </select>
              </div>
            </div>


            






          </div>

          <div class="row">
            <div class="col-lg-8" style="margin-top:50px;">
              <label style="color:#fff">Character Case (Auto Formatting)</label>
            </div>
            <div class="col-lg-4" style="margin-top:25px;">
              <div class="form-line">
                <select class="form-control show-tick" name="character_case">
                  <option value="AE-ASEntered" <?php echo e((isset($settings->character_case)&& $settings->character_case=='AE-ASEntered')?'selected':''); ?>>AE - AS Entered</option>
                  <option value="Tc-Tittle Case"
            <?php echo e((isset($settings->character_case)&& $settings->character_case=='Tc-Tittle Case')?'selected':''); ?>>Tc - Tittle Case</option>
                  <option value="Uc-UpperCase"  <?php echo e((isset($settings->character_case)&& $settings->character_case=='Uc-UpperCase')?'selected':''); ?> >Uc -UpperCase</option>
                </select>
              </div>
            </div>  
            </div>


            <div class="row">
            <div class="col-lg-8" style="margin-top:50px;">
              <label style="color:#fff">Date Display for Dashboard Screens</label>
            </div>
            <div class="col-lg-4" style="margin-top:25px;">
              <div class="form-line">
                <select class="form-control show-tick" name="date_display">
                  <option value="Creation Date"
                   <?php echo e((isset($settings->date_display)&& $settings->date_display=='Creation Date')?'selected':''); ?>>Creation Date</option>
                  <option value="Due Date"
               <?php echo e((isset($settings->date_display)&& $settings->date_display=='Due Date')?'selected':''); ?>>Due Date</option>
                </select>
              </div>
            </div>  
            </div>


            <div class="row">
            <div class="col-lg-8" style="margin-top:50px;">
              <label style="color:#fff">Default Sort for Dashboard Screens</label>
            </div>
            <div class="col-lg-4" style="margin-top:25px;">
              <div class="form-line">
                <select class="form-control show-tick" name="default_sort">
                  <option value="Document Number"
                <?php echo e((isset($settings->default_sort)&& $settings->default_sort=='Document Number')?'selected':''); ?>>Document Number</option>

                  <option value="Document Date"  <?php echo e((isset($settings->default_sort)&& $settings->default_sort=='Document Date')?'selected':''); ?>>Document Date</option>
                </select>
              </div>
            </div>  
            </div>
            <hr style="width:100%;">


            <div class="row">
            <div class="col-lg-12" style="margin-top:50px;">
              <input type="checkbox" id="automaticlly_formt" class="filled-in" name="automaticlly_formt" 
         <?php if(isset($settings)?$settings->automaticlly_formt:''): ?> checked <?php endif; ?>>
          <label for="automaticlly_formt" style="padding-left: 50px!important;font-size: 15px;color: white;">Automatically Format Vechile Registration Marks  </label>
            </div>
              
            </div>

            <div class="row">
            <div class="col-lg-8" style="margin-top:50px;">
              <label style="color:#fff;padding-left: 49px;">Default Vechile type for unknow vechile</label>
            </div>
            <div class="col-lg-4" style="margin-top:25px;">
              <div class="form-line">
                <select class="form-control show-tick" name="default_vehical">
                  <option value="Car"
                 <?php echo e((isset($settings->default_vehical)&& $settings->default_vehical=='Car')?'selected':''); ?>>Car</option>
                  <option value="Motor Bike" <?php echo e((isset($settings->default_vehical)&& $settings->default_vehical=='Motor Bike')?'selected':''); ?>>Motor Bike </option>
                   <option value="Truck" <?php echo e((isset($settings->default_vehical)&& $settings->default_vehical=='Truck')?'selected':''); ?> >Truck </option>
                </select>
              </div>
            </div>  
            </div>


            <div class="row">
            <div class="col-lg-12" style="margin-top:50px;">
              <input type="checkbox" id="highlight_last" class="filled-in" name="highlight_last"

       <?php if(isset($settings)?$settings->highlight_last:''): ?> checked <?php endif; ?>>
          <label for="highlight_last" style="padding-left: 50px!important;font-size: 15px;color: white;">High Light 7 digit of vin number   </label>
            </div>
              
            </div>

            <div class="row">
            <div class="col-lg-12" style="margin-top:50px;">
              <input type="checkbox" id="repeat_last" class="filled-in" name="repeat_last"
              <?php if(isset($settings)?$settings->repeat_last:''): ?> checked <?php endif; ?>>
          <label for="repeat_last" style="padding-left: 50px!important;font-size: 15px;color: white;">Repeat Last Technician entered  on Line Items </label>
            </div>
              
            </div>

            <hr style="width:100%;">
          <div class="row">
            <div class="col-lg-12" style="margin-top:50px;">
              <input type="checkbox" id="keep_orignal" class="filled-in" name="keep_orignal"
             <?php if(isset($settings)?$settings->keep_orignal:''): ?> checked <?php endif; ?>>
              <label for="keep_orignal" style="padding-left: 50px!important;font-size: 15px;color: white;">Keep original Estimate When converting to JS or SI </label>
            </div>
            
          </div>



          <div class="row">
            <div class="col-lg-8" style="margin-top:50px;">
              <label style="font-size: 15px;color: white;    padding-left: 49px;">Time until Estimate in progress become Archived  </label>
            </div>
            <div class="col-lg-1" style="margin-top: 50px;">
              <label>Days</label>
            </div>
            <div class="col-lg-3">
              <input type="text" name="time_until" style="    border: 1px solid;
              margin-top: 55px;
              border-color: #6a6a6a;" class="form-control" value="<?php echo e(isset($settings)?$settings->time_until:''); ?>" >
            </div>
            
          </div>

          <hr style="width:100%;">


          <div class="row">
            <div class="col-lg-12" style="margin-top:50px;">
              <input type="checkbox" id="display_doc" class="filled-in" name="display_doc" 
              <?php if(isset($settings)?$settings->display_doc:''): ?> checked <?php endif; ?>>
          <label for="display_doc" style="padding-left: 50px!important;font-size: 15px;color: white;">Display Doc / Report Preview externally   </label>
            </div>
              
            </div>


            <div class="row">
            <div class="col-lg-12" style="margin-top:50px;">
              <input type="checkbox" id="output_printed" class="filled-in" name="output_printed"
                <?php if(isset($settings)?$settings->output_printed:''): ?> checked <?php endif; ?>>
          <label for="output_printed" style="padding-left: 50px!important;font-size: 15px;color: white;">Output Printed Reminder as Address Label Only Formatted  for Avery J8159 - A4 - 3*8 24 lable per sheet  </label>
            </div>
              
            </div>



            <hr style="width:100%;">
            


            <div class="row">
            <div class="col-lg-12" style="margin-top:20px;">
              <input type="checkbox" id="print_account" class="filled-in" name="print_account" 
              <?php if(isset($settings)?$settings->print_account:''): ?> checked <?php endif; ?>>
          <label for="print_account" style="padding-left: 50px!important;font-size: 15px;color: white;">Print Account Statement as Portrait  </label>
            </div>
              
            </div>
            </div>
            <div class="col-lg-6">

            <div class="row" style="margin:0px;">
              
              <div class="col-lg-7" style="margin-top:10px;">
                <label style="color:#fff">Prefix for Customer Account Number </label>
              </div>
              <div class="col-lg-3"  style="margin-top:10px;">
                <input type="text" name="prefix_customer" value="<?php echo e(isset($settings)?$settings->prefix_customer:''); ?>" class="form-control" style="border: 1px solid;">
              </div>
            </div>


            <div class="row" style="margin:0px;">
            <div class="col-lg-12" style="margin-top:30px;">
              <input type="checkbox" id="suggest_matching" class="filled-in" name="suggest_matching"
         <?php if(isset($settings)?$settings->suggest_matching:''): ?> checked <?php endif; ?>>
          <label for="suggest_matching" style="padding-left: 50px!important;font-size: 15px;color: white;">Suggest Matching Customers </label>
            </div>
              
            </div>

            <div class="row" style="margin:0px;">
              <div class="col-lg-12" style="margin-top:20px;">
                <h6 style="font-size: 15px;">Default Customer Privacy Option <label>(for new customer record)</label> </h6>
              </div>
            </div>

            <hr style="width:100%;">

            <div class="row" style="margin:0px;">
              <div class="col-lg-12">
                <p style="text-align: justify;"> It is recommended to set these all to N(disabled) by default. When creating a new customer record, the below options will be used as a default for ther privacy options,how ever,you can change them as required on a per customer basis according to your customer perfenece.   </p>
              </div>
            </div>


            <hr style="width:100%;">
            


            <div class="row" style="margin:0px;">
              
               <div class="col-lg-12" style="margin-top:20px;">
              <input type="checkbox" id="reminders" class="filled-in" name="reminders"

       <?php if(isset($settings)?$settings->reminders:''): ?> checked <?php endif; ?>>
          <label for="reminders" style="padding-left: 50px!important;font-size: 15px;color: white;">
          Enable Reminder (All Methods)  </label>
            </div>
            </div>


            <div class="row" style="margin:0px;">
              
               <div class="col-lg-12" style="margin-top:20px;">
              <input type="checkbox" id="mass_mailing" class="filled-in" name="mass_mailing"
            
       <?php if(isset($settings)?$settings->mass_mailing:''): ?> checked <?php endif; ?>>
          <label for="mass_mailing" style="padding-left: 50px!important;font-size: 15px;color: white;">
          Enable Mass Mailing  (All Methods)  </label>
            </div>
            </div>


            <div class="row" style="margin:0px;">
              
               <div class="col-lg-12" style="margin-top:20px;">
              <input type="checkbox" id="email" class="filled-in" name="email"
        
       <?php if(isset($settings)?$settings->email:''): ?> checked <?php endif; ?>>
          <label for="email" style="padding-left: 50px!important;font-size: 15px;color: white;">
          Enable Indiviual Email Message  </label>
            </div>
            </div>


           <div class="row" style="margin:0px;">
              
               <div class="col-lg-12" style="margin-top:20px;"> 
              <input type="checkbox" id="sms" class="filled-in" name="sms"
          
       <?php if(isset($settings)?$settings->sms:''): ?> checked <?php endif; ?>>
          <label for="sms" style="padding-left: 50px!important;font-size: 15px;color: white;">
          Enable Indiviual SMS Message  </label>
            </div>
            </div>


            <hr style="width:100%;">
            <div class="row" style="margin:0px;">
              <div class="col-lg-12">
                <p>It is solely your responsibility to ensure your use of GA4  for marketing / comunication purpose comply with the Data Protection Regulation (GDPR) or any similar  law / acts where appicalble.</p>
              </div>
            </div> 


            <hr style="width:100%;">

            






          </div>
          </div>
          
        </div>
      </div>


      </form>
      
    </div>


















  </div>
</section>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>