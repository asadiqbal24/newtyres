<?php return array (
  'barryvdh/laravel-dompdf' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\DomPDF\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
    ),
  ),
  'canducci/zipcode' => 
  array (
    'providers' => 
    array (
      0 => 'Canducci\\ZipCode\\Providers\\ZipCodeServiceProvider',
      1 => 'Canducci\\ZipCode\\Providers\\ZipCodeAddressServiceProvider',
    ),
    'aliases' => 
    array (
      'ZipCode' => 'Canducci\\ZipCode\\Facades\\ZipCode',
      'Address' => 'Canducci\\ZipCode\\Facades\\ZipCodeAddress',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'laravel/socialite' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'maatwebsite/excel' => 
  array (
    'providers' => 
    array (
      0 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    ),
    'aliases' => 
    array (
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
    ),
  ),
  'milon/barcode' => 
  array (
    'providers' => 
    array (
      0 => 'Milon\\Barcode\\BarcodeServiceProvider',
    ),
    'aliases' => 
    array (
      'DNS1D' => 'Milon\\Barcode\\Facades\\DNS1DFacade',
      'DNS2D' => 'Milon\\Barcode\\Facades\\DNS2DFacade',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'rap2hpoutre/fast-excel' => 
  array (
    'providers' => 
    array (
      0 => 'Rap2hpoutre\\FastExcel\\Providers\\FastExcelServiceProvider',
    ),
  ),
  'srmklive/paypal' => 
  array (
    'providers' => 
    array (
      0 => 'Srmklive\\PayPal\\Providers\\PayPalServiceProvider',
    ),
    'aliases' => 
    array (
      'PayPal' => 'Srmklive\\PayPal\\Facades\\PayPal',
    ),
  ),
  'uxweb/sweet-alert' => 
  array (
    'providers' => 
    array (
      0 => 'UxWeb\\SweetAlert\\SweetAlertServiceProvider',
    ),
    'aliases' => 
    array (
      'Alert' => 'UxWeb\\SweetAlert\\SweetAlert',
    ),
  ),
);