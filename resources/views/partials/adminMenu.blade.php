<div class="row clearfix">
                            <div class="col-sm-12 col-md-12 col-lg-12"> 
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_animation_1">General</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_animation_1">Customization</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_animation_1">Configuration</a></li> 

                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#data_animation_1">Data</a></li>                                    
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1">
                                           <p>
                                           

                                            <a href="{{route('admin.account.manager')}}" class="btn btn-info dashboard_btn">Account Manager</a>


                                            <a href="{{route('admin.expense.manager')}}" class="btn btn-info dashboard_btn">Expense Manager</a>
                                            <a href="{{route('admin.business.report')}}" class="btn btn-info dashboard_btn">Business Reports</a>                                     
                                            <a href="{{route('admin.business.charts')}}" class="btn btn-info dashboard_btn">Business Charts</a>
                                            <a href="{{route('admin.bank.reconcile')}}" class="btn btn-info dashboard_btn">Bank Reconcile</a>

                                            <a href="" class="btn btn-info dashboard_btn">Mass Mailing</a>
                                            <a href="{{route('admin.accounts.csv')}}" class="btn btn-info dashboard_btn">Account CSV Exports</a>
                                            <a href="{{route('admin.general.csv')}}" class="btn btn-info dashboard_btn">General CSV Exports</a>                                     
                                            <a href="{{route('admin.technicians')}}" class="btn btn-info dashboard_btn">Technicians / Employees</a>
                                            <a href="{{route('admin.user.preferences')}}" class="btn btn-info dashboard_btn">User Preferences</a>

                                            <a href="" class="btn btn-info dashboard_btn">Attachment Browser</a>
                                            <a href="" class="btn btn-info dashboard_btn">Your Account &amp; Credit Packs</a>                                     
                                            
                                        </p>

                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1">
                                           <p>
                                            <a href="{{route('admin.doc.template.settings')}}" class="btn btn-primary">Doc Template Settings</a>
                                            <a href="{{route('admin.doc.template.departmentlists')}}" class="btn btn-primary">Department Lists</a>
                                            <a href="{{route('admin.doc.template.customstatusoptions')}}" class="btn btn-primary">Custom Status Options</a>                                     
                                            <a href="{{route('admin.doc.template.referal_adevertising')}}" class="btn btn-primary">Referal Lists</a>


                                            <a href="{{route('admin.doc.template.technicians')}}" class="btn btn-primary">Technicians Lists</a>
                                            <a href="{{route('admin.reminder.templates')}}" class="btn btn-primary">Reminder Templates</a>
                                            <a href="{{route('admin.doc.template.correspondance_template')}}" class="btn btn-primary">Correspondence Templates</a>                                     
                                            <a href="{{route('admin.doc.template.predefinedjobs')}}" class="btn btn-primary">Predefined Labour / Jobs</a>
                                            <a href="{{route('admin.doc.template.work_description')}}" class="btn btn-primary">Work Descriptions</a>

                                            <a href="{{route('admin.doc.template.predefine_advisories')}}" class="btn btn-primary">Pre Defined Advisors</a>
                                            <a href="{{route('admin.doc.template.termandcontion')}}" class="btn btn-primary">Terms & Special Offers</a>                                     
                                            <a href="" class="btn btn-primary">Checklist Editor</a>
                                            <a href="{{route('admin.doc.template.vehiclesmakeandmodel')}}" class="btn btn-primary">Vehicle Make & Models</a>

                                            <a href="" class="btn btn-primary">Custom Field Names</a>
                                            
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="messages_animation_1">
                                        <p>
                                            <a href="" class="btn btn-info">Licsense Activation</a>
                                            <a href="{{route('admin.user.accounts')}}" class="btn btn-info">User Account</a>
                                            <a href="" class="btn btn-info">Email / SMS Settings</a>                                     
                                            <a href="{{route('calender-bays-setting')}}" class="btn btn-info">Calender Settings & Bays</a>
                                            <a href="{{route('admin.labour.rates')}}" class="btn btn-info">Labour / Parts Rates</a>

                                            <a href="{{route('admin.mot.rates')}}" class="btn btn-info">MOT Rates</a>
                                            <a href="{{route('admin.tax.rates')}}" class="btn btn-info">Tax Rates</a>
                                            <a href="{{route('admin.sales.nominals')}}" class="btn btn-info">Sales Nominals</a>                                     
                                            <a href="{{route('admin.expense.nominals')}}" class="btn btn-info">Expense Nominals</a>
                                            <a href="{{route('admin-payment-methods')}}" class="btn btn-info">Payment Methods</a>

                                            <a href="{{route('stock-control-setting')}}" class="btn btn-info">Stock Control Settings</a>
                                            <a href="{{route('required-fields')}}" class="btn btn-info">Required Fields</a>                                     
                                            <a href="" class="btn btn-info">PostCode Lookup</a>
                                            <a href="" class="btn btn-info">Used Vehicle Sales Module</a>

                                            <a href="" class="btn btn-info">Printer Setup</a>
                                            <a href="{{route('miscellaneous-settings')}}" class="btn btn-info">Miscellaneous Settings</a>                                     
                                            <a href="{{route('admin-cash-drawer')}}" class="btn btn-info">Cash Drawer Till Setup</a>
                                           <!--  <a href="" class="btn btn-info">Authorised Devices</a> -->                                            
                                        </p>
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated flipInX" id="data_animation_1">
                                         <p>
                                            <a href="{{ route('database.backup') }}" class="btn btn-primary">Perform Backup</a>
                                            <a href="" class="btn btn-primary">Backup Options & Maintenance</a>
                                            <a href="" class="btn btn-primary">Cleanup Old Backups</a>                                     
                                            <a href="" class="btn btn-primary">Restore From Backup</a>
                                            <a href="" class="btn btn-primary">Stock Management</a>

                                            <a href="" class="btn btn-primary">Merge Customer</a>
                                            <a href="" class="btn btn-primary">Mass Delete Customers</a>
                                            <a href="" class="btn btn-primary">Restore Attachments</a>                                     
                                            <a href="" class="btn btn-primary">Check Invoice Sequence</a>
                                            <a href="" class="btn btn-primary">User Activity Logs</a>

                                            <a href="" class="btn btn-primary">CSV Exports</a>
                                            <a href="" class="btn btn-primary">System Information</a>                                     
                                            <a href="" class="btn btn-primary">Import From GA2 or GA3</a>
                                            <a href="" class="btn btn-primary">Customer Vehicle Import</a>                                            
                                        </p>
                                    </div>
                                </div>
                            </div>                           
                        </div>