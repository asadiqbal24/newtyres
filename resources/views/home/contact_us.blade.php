@include('front.contact.head')
@include('front.contact.header')

<div class="container">
  <main role="main">
    <section class="hero-unit search-box">
  <div class="column column--sm-3">
    <div class="row">
      <div class="column--sm-10 column--sm-offset-1">
        <!--<p>-->
        <!--  <a href="javascript:history.back();">-->
        <!--    &lsaquo; Back to Previous Page-->
        <!--  </a>  -->
        <!--</p>-->
        <div hidden><ol class="breadcrumbs">
  
    <li title="tyreflicks.com.au Help Center ">
      
        <a href="/hc/en-gb">tyreflicks.com.au Help Center </a>
      
    </li>
  
    <li title="Submit a request">
      
        Submit a request
      
    </li>
  
</ol>
</div>
      </div>
		</div>
    <div class="row">
                      @include('front.contact.sidebar')
    </div>
    <div class="row">
      <div class="column--sm-11 column--sm-offset-1">
<h3>CONTACT US</h3>
<strong>CUSTOMER SERVICE</strong>
<br><strong>Ph:</strong> (02) 9771 0170 
<br>“To help stop the spread of Coronavirus, our business 
<br><br>
        <p>
<strong>Location</strong>
       <br>21/22 Mavis Street<br> Revesby NSW 2212 Australia
  <p/>
    
      </div>
    </div>
  </div>
  
<div class="column column--sm-8 column--sm-offset-1 new-request">
    <h1>Submit a request</h1>


  <div class="form">
    <form id="new_request" class="request-form" data-form="" data-form-type="request" action="{{route('contact-request-save')}}" accept-charset="UTF-8" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input name="utf8" type="hidden" value="&#x2713;" />
      <input type="hidden" name="authenticity_token" value="hc:requests:server:yJMxsCLOsSaPm/l+e64IOHCTlETj0oyXCtkW2J5rOA0PN+ywBzapxavj6waQhKSBLtmG5PGsxwN2E0mOiQdlnA==" />




  

  <input type="hidden" name="request[ticket_form_id]" id="request_ticket_form_id" value="360000156011" />

  <div class="form-field string required request_anonymous_requester_email"><label for="request_anonymous_requester_email">Your email address</label>
<input type="text" name="request_email" id="request_anonymous_requester_email" aria-required="true" />
</div>

  

  
    <div class="form-field string  required  request_custom_fields_360011491771" >
      <label id="request_custom_fields_360011491771_label" for="request_custom_fields_360011491771">Enquiry Type*</label>
      <input type="hidden" name="request[custom_fields][360011491771]" id="request_custom_fields_360011491771" autocomplete="off" data-tagger="[{&quot;label&quot;:&quot;-&quot;,&quot;value&quot;:&quot;&quot;},{&quot;label&quot;:&quot;Customer Support&quot;,&quot;value&quot;:&quot;customer_support&quot;},{&quot;label&quot;:&quot;Tyre Expert&quot;,&quot;value&quot;:&quot;tyre_expert&quot;}]" aria-required="true" aria-labelledby="request_custom_fields_360011491771_label" />
      
      
    </div>

    
  
    <div class="form-field string  optional  request_custom_fields_22784159" >
      <label id="request_custom_fields_22784159_label" for="request_custom_fields_22784159">Your phone number (optional)</label>
      <input type="number" name="request_phone" id="request_custom_fields_22784159" step="1" aria-required="false" aria-labelledby="request_custom_fields_22784159_label" />
      
      
    </div>

    
  
    <div class="form-field string  optional  request_custom_fields_360009243312" >
      <label id="request_custom_fields_360009243312_label" for="request_custom_fields_360009243312">Order Number (Optional)</label>
      <input type="text" name="request_order_phone" id="request_custom_fields_360009243312" aria-required="false" aria-labelledby="request_custom_fields_360009243312_label" />
      
      
    </div>

    
  
    <div class="form-field string  required  request_subject" >
      <label id="request_subject_label" for="request_subject">Subject*</label>
      <input type="text" name="request_subject" id="request_subject" maxlength="150" size="150" aria-required="true" aria-labelledby="request_subject_label" />
      
      
    </div>

    
      <div class="suggestion-list" data-hc-class="searchbox" data-hc-suggestion-list="true"></div>
    
  
    <div class="form-field text  required  request_description" >
      <label id="request_description_label" for="request_description">How can we help?*</label>
      <textarea name="request_description" id="request_description" aria-required="true" aria-labelledby="request_description_label">
</textarea>
      
      
    </div>

    
  

  <script data-conditional-fields="[{&quot;parent_field_id&quot;:&quot;request_custom_fields_360011491771&quot;,&quot;value&quot;:&quot;customer_support&quot;,&quot;child_fields&quot;:[{&quot;id&quot;:&quot;request_custom_fields_360009243312&quot;,&quot;is_required&quot;:false},{&quot;id&quot;:&quot;request_custom_fields_22784159&quot;,&quot;is_required&quot;:false}]},{&quot;parent_field_id&quot;:&quot;request_custom_fields_360011491771&quot;,&quot;value&quot;:&quot;tyre_expert&quot;,&quot;child_fields&quot;:[{&quot;id&quot;:&quot;request_custom_fields_22784159&quot;,&quot;is_required&quot;:false}]}]"></script>

  <div class="form-field">
  <label for="request-attachments">
    Attachments
  </label>
  <div id="upload-dropzone" class="upload-dropzone">
  <input type="file" multiple="true" name="request_attachments" id="request-attachments"
    data-fileupload="true"
    data-dropzone="upload-dropzone"
    data-error="upload-error"
    data-create-url="/hc/en-gb/request_uploads"
    data-name="request[attachments][]"
    data-pool="request-attachments-pool"
    data-delete-confirm-msg=""
    aria-describedby="upload-error" />
  <span>
    <a>Add file</a> or drop files here
  </span>
</div>

<div id="upload-error" class="notification notification-error notification-inline">
  <span data-upload-error-message></span>
</div>


  <ul id="request-attachments-pool" class="upload-pool" data-template="upload-template"></ul>

<script type="text/html" id="upload-template">
<li class="upload-item" data-upload-item>
  <a class="upload-link" target="_blank" data-upload-link></a>
  <p class="upload-path" data-upload-path></p>
  <p class="upload-path" data-upload-size></p>
  <p data-upload-issue class="notification notification-alert notification-inline" aria-hidden="true"></p>
  <span class="upload-remove" data-upload-remove></span>
  <div class="upload-progress" data-upload-progress></div>
  <input type="hidden">
</li>
</script>


</div>


  
  

  

  <footer><input type="submit" name="commit" value="Submit" /><script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
        <script>
          var invisibleRecaptchaSubmit = function () {
            var closestForm = function (ele) {
              var curEle = ele.parentNode;
              while (curEle.nodeName !== 'FORM' && curEle.nodeName !== 'BODY'){
                curEle = curEle.parentNode;
              }
              return curEle.nodeName === 'FORM' ? curEle : null
            };

            var eles = document.getElementsByClassName('g-recaptcha');
            if (eles.length > 0) {
              var form = closestForm(eles[0]);
              if (form) {
                form.submit();
              }
            }
          };
        </script>
<div data-size="invisible" data-sitekey="6Ldm2WgUAAAAAJ0tKm0JAq-vewBfYR2yhQmPknA2" data-badge="inline" data-callback="invisibleRecaptchaSubmit" class="g-recaptcha " ui="invisible"></div>
</footer>

</form>



    <p id="request_disclaimer">
     <br> Any personal information you submitted will be used in accordance with carsales <a href="#" target="_blank">privacy policy</a>
    </p>  
  </div>
  </div>
  </main>
  @include('front.contact.footer')
  </div> <!--/.container-->
  @include('front.contact.scripts')